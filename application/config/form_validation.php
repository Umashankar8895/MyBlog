<?php
$config=[
	'add_article_rules'=>[
							[
								'field'=>'title',
								'lable'=>'Title',
								'rule'=>'required|alphadash'
							],
							[
								'field'=>'body',
								'lable'=>'Article Body',
								'rule'=>'required',
							]
						],
			'admin_login'=>[
							[
								'field'=>'userName',
								'lable'=>'User Name',
								'rule'=>'required',
							],
							[
								'field'=>'password',
								'lable'=>'Passwoed',
								'rule'=>'required',
							]
						]
];
?>