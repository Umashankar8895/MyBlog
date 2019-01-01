<?php
class Admin extends MY_Controller{
	public function dashboard()
	{
		//echo $this->session->userdata('user_id'); exit;
		$this->load->library('pagination');
		$config=[
			'base_url'	=>base_url('admin/dashboard'),
			'per_page'	=>5,
			'total_rows'=>$this->articles->num_rows(),
			'full_tag_open'=>"<ul class='pagination pagination-lg'>",
			'full_tag_close'=>"</ul>", 
			'first_tag_open'=>"<li class='page-item'>",
			'first_tag_close'=>'</li>',
			'last_tag_open'	=>"<li class='page-item'>",
			'last_tag_close'=>'</li>',
			'next_tag_open'	=>"<li class='page-item'>",
			'next_tag_close'=>'</li>',
			'prev_tag_open'	=>"<li class='page-item'>",
			'prev_tag_close'=>'</li>',
			'num_tag_open'	=>"<li class='page-item'>",
			'num_tag_close'=>'</li>',
			'cur_tag_open'	=>"<li class='page-item active'><a class='page-link'>", 
			'cur_tag_close'=>'</a></li>',
		];
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		$a=$this->articles->articles_list($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/dashboard',['articles'=>$a]);
		
	}
	public function add_article()
	{
		$this->load->view('admin/add_article');
	}
	public function store_article()
	{
		$config=[
			'upload_path'		=>		'./uploads',
			'allowed_types'		=>		'jpg|jpeg|png|gif',
		];
		$this->load->library('upload',$config);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|max_length[50]');
		$this->form_validation->set_rules('body','Body','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run() && $this->upload->do_upload()){
			$post=$this->input->post();
			unset($post['submit']);
			$data=$this->upload->data();
			// echo "<pre>";
			// print_r($data);exit;
			$image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);
			$post['image_path']=$image_path;
			if($this->articles->add_article($post)){
				$this->session->set_flashdata('feedback',"Article Added Successfully");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else {
				//echo "insert Fail";
				$this->session->set_flashdata('feedback',"Article Failed To Add, Please Try Again");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}else{
			$upload_error=$this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
		}
	}
	public  function edit_article($article_id)
	{
		// echo $article_id; exit;
		$article=$this->articles->find_article($article_id);
		//print_r($article);
		$this->load->view('admin/edit_article',['article'=>$article]);
		// echo"<pre>";
		// print_r($article);exit;
	}

	public function update_article($article_id)
	{
		//exit($article_id);
		$config=[
			'upload_path'		=>		'./uploads',
			'allowed_types'		=>		'jpg|jpeg|png|gif',
		];
		$this->load->library('upload',$config);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','Title','required|max_length[50]');
		$this->form_validation->set_rules('body','Body','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			$post=$this->input->post();
			unset($post['submit']);
			if($this->upload->do_upload())
			{
				$data=$this->upload->data();
				$image_path=base_url("uploads/".$data['raw_name'].$data['file_ext']);
				$post['image_path']=$image_path;
			}
			//echo"<pre>"; print_r($post);exit;
			if( $this->articles->update_article($article_id,$post) ){
				$this->session->set_flashdata('feedback',"Article Updated Successfully");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else {
				//echo "insert Fail";
				$this->session->set_flashdata('feedback',"Article Failed To Update, Please Try Again");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
		}else{
			// $article=$this->input->post();
			// unset($article['submit']);
			$this->load->view('admin/edit_article');
		}
	}
	public  function delete_article()
	{ 
		$article_id=$this->input->post('article_id');
			if($this->articles->delete_article($article_id)){
				$this->session->set_flashdata('feedback',"Article Deleted Successfully");
				$this->session->set_flashdata('feedback_class','alert-success');
			}else {
				$this->session->set_flashdata('feedback',"Article Failed To Delete, Please Try Again");
				$this->session->set_flashdata('feedback_class','alert-danger');
			}
			return redirect('admin/dashboard');
	}
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id'))
			return redirect('login');
		$this->load->model('articlesmodel','articles');
		$this->load->helper('form');
	}
}