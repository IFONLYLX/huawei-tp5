<?php

use think\Env;

return [
 	//'配置项'=>'配置值'
        'lang_switch_on' => true,   //开启语言包功能        
        'LANG_AUTO_DETECT'     =>     true, // 自动侦测语言
        'default_lang'           => 'zh-cn', // 默认语言        
        'lang_list'            =>    'en-us,zh-cn', //必须写可允许的语言列表
        'VAR_LANGUAGE'     => 'l', // 默认语言切换变量


	//选择场景
        'app_now_status'     => Env::get('status','dev'),

        'url_html_suffix'        => 'html',

	//配置路径
        'view_replace_str'  => [
        '__PUBLIC__'    =>'http://localhost/tp5/public/static',
        '__img__'    =>'http://localhost/tp5/public/static/img',
        '__upload__'    =>'http://localhost/tp5/public/static/uploads',
        '__admin_css__'    =>'http://localhost/tp5/public/static/admin/css',

        '__admin_js__'    =>'http://localhost/tp5/public/static/admin/js',
        '__admin_img__'    =>'http://localhost/tp5/public/static/admin/img',
        ],

	 //自定义
        'app_author'        => 'dsh',
        'app_time'          => '2017.11.20华为2017thinkphp5',
        'url_model'		    =>  '0',
		'app_debug'          => true,//调试bug
		'app_trace'         => false,//调试bug

	// 入口自动绑定模块
		'auto_bind_module'   => true,
		'url_route_on'       => true,
		'url_route_must'     => false,

	//验证码abcdefghijklmnopqrstuvwxyzABCDEFJHIJKLMNOPQRSTUVWXYZ
		'captcha'            =>[
		'codeSet'=>'0123456789',
		'fontSize'=>18,//验证码字体
		'useCurve'=>true,//验证码混淆曲线
		'imageH'=>40,//验证码高度
		'length'=>4,//验证码位数
		'reset'=>true//验证码成功后是否重置
		],



		];
