<?php

return array(

	'users' => '用户',

	'create_user' => '创建一个新用户',
	'add_user' => '添加一个新用户',
	'editing_user' => '编辑 %s&rsquo;s 个人资料',
	'remembered' => '我知道我的密码',
	'forgotten_password' => '忘记了你的密码?',

	// roles
	'administrator' => '管理员',
	'administrator_explain' => '',

	'editor' => '编辑者',
	'editor_explain' => '',

	'user' => '用户',
	'user_explain' => '',

	// form fields
	'real_name' => '真实名字',
	'real_name_explain' => '',

	'bio' => '自我介绍',
	'bio_explain' => '',

	'status' => '状态',
	'status_explain' => '',

	'role' => '角色',
	'role_explain' => '',

	'username' => '用户名',
	'username_explain' => '',
	'username_missing' => '请输入一个用户名。至少要包含 %s 个字母',

	'password' => '密码',
	'password_explain' => '',
	'password_too_short' => '密码至少要包含 %s 个字母',

	'new_password' => '新密码',

	'email' => '电子邮件地址',
	'email_explain' => '',
	'email_missing' => '请输入一个有效的电子邮件地址',
	'email_not_found' => '未找到配置',

	// messages
	'updated' => '用户资料已更新',
	'created' => '用户资料已创建',
	'deleted' => '用户资料已删除',
	'delete_error' => '你不可以删除自己的用户资料',
	'login_error' => '用户名或密码错误',
	'logout_notice' => '你已经注销了',
	'recovery_sent' => '我们已经向你发送了一封密码更改确认邮件，请查看收件箱',
	'recovery_expired' => '密码恢复命令已经过期。请再次申请',
	'password_reset' => '新密码已经设置。现在登录吧！',

	// password recovery email
	'recovery_subject' => '密码重置',
	'recovery_message' => '你已要求重置你的密码' .
		'要继续，请点击下方的链接.' . PHP_EOL . '%s',

);