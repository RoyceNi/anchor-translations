<?php

return array(

	'extend' => '扩展内容',

	'fields' => '自定义字段',
	'fields_desc' => '创建额外的字段',

	'variables' => '网站变量',
	'variables_desc' => '创建额外的元数据',

	'create_field' => '建立一个新字段',
	'editing_custom_field' => '修改字段 &ldquo;%s&rdquo;',
	'nofields_desc' => '还没有字段',

	'create_variable' => '创建一个新变量',
	'editing_variable' => '修改变量 &ldquo;%s&rdquo;',
	'novars_desc' => '还没有变量',

	// form fields
	'type' => '类别',
	'type_explain' => '所添加字段的内容类型.',

	'field' => '形式',
	'field_explain' => 'HTML输入类型',

	'key' => '键值',
	'key_explain' => '为你的字段指定一个唯一的键值',
	'key_missing' => '请输入一个唯一的键值',
	'key_exists' => '键值已经使用',

	'label' => '标签',
	'label_explain' => '人类可读的字段的名称',
	'label_missing' => '请输入一个标签',

	'attribute_type' => '文件类型',
	'attribute_type_explain' => '指定接受的文件类型。用逗号分隔。留空则不限制。',

	// images
	'attributes_size_width' => '图像的最大宽度',
	'attributes_size_width_explain' => '如果图片宽度超过这个值，图像大小会被重新调整',

	'attributes_size_height' => '图像的最大高度',
	'attributes_size_height_explain' => '如果图片高度超过这个值，图像大小会被重新调整',

	// custom vars
	'name' => '名字',
	'name_explain' => '一个唯一的名字',
	'name_missing' => '请输入一个唯一的名字',
	'name_exists' => '名字已经被使用',

	'value' => '值',
	'value_explain' => '要储存的数据(最高64kb)',
	'value_code_snipet' => '嵌入到您的模板中的片段:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => '变量已经创建',
	'variable_updated' => '变量已经更新',
	'variable_deleted' => '变量已经删除',

	'field_created' => '字段已经创建',
	'field_updated' => '字段已经更新',
	'field_deleted' => '字段已经删除'

);
