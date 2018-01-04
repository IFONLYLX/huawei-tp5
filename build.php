<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用公共文件
'__file__' => ['common.php', 'config.php', 'database.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
'demo'     => [
'__file__'   => ['common.php'],
'__dir__'    => ['behavior', 'controller', 'model', 'view'],
'controller' => ['Index', 'Test', 'UserType'],
'model'      => ['User', 'UserType'],
'view'       => ['index/index'],
],
    // 其他更多的模块定义
];
/*
// $res=config('app_namespace');
        //dump($request);
        // dump($res);
        // $res=Env::get('status');
        // dump($res); 
        //dump(config());
        
        #获取值
        // dump($request->domain());
        // dump($request->pathinfo());
        // dump($request->path());
        #请求类型
        // dump($request->method());
        // dump($request->isGet());
        // dump($request->isPost());
        // dump($request->isAjax());
        #请求参数
        // dump($request->get());
        // dump($request->param());
        //session('name','dsh');
        // dump($request->session());
        // dump($request->cookie());
        //cookie('name','dsh');
        // dump($request->param('type'));
        // dump($request->cookie("name"));
        // dump($request->module());
        #获取模块
        // dump($request->controller());
        // dump($request->action());
        // return view('index',[],[

        //  'STATIC'=>'当前页面'
        //  ]);
        // return $this->fetch('index',[

        //  ],[
        //  'STATIC'=>'当前页面'

        //  ]);
        $res=Db::connect();
        dump($res);


*/


        #使用sql语句的方式查询数据库
        #$res=Db::query("select * from student where id=?",[1]);
        #select 返回所有记录 返回的结果是一个二维数组
        #不存在返回空数组
        #$res=Db::table('student')->select();
        #find返回一条记录 返回的结果是一个一维数组
        #不存在为null
        #$res=Db::table('student')->find();

        #value返回一条记录 并且是字条记录的某个字段值
        #不存在为null
        #$res=Db::table('student')->value('name');

        #column返回一个一维数组 返回的value值就是我们获取的列的值
        #不存在为null
        #$res=Db::table('student')->column('name','password');
        // $res=db('student',[],false)->where([
        //  'id'=>1,

        // ])->select();
        // dump ($res);


        //$db=Db::name('student');
        #insert返回值是影响记录的行数 插入数
        #insertGetId 发布会插入数据的自增id
        #insertAll返回插入数据成功的行数
        // $res=$db->insert([

        //  'name'=>'ding',
        //  'password'=>'111'
        //  ]);
        // $red=$db->insertGetId([
        //  'name'=>'ding',
        //  'password'=>'111'
        //  ]);
        // $data=[];
        // for ($i=0; $i <10 ; $i++) { 
        //  $data[]=[
        //  'name'=>"ding_{$i}",
        //  'password'=>"111_{$i}"
        //  ];
        // }
        // $res=$db->insertAll($data);
        // dump($res);

        // $db=Db::name('student');  
        // #返回影响行数 
        // $res=$db->where(['id'=1

        //     ])->update(['name'=>'11'
        //     ]);

        // }
        // $res=$db->where(['id'=1

        //     ])->delete();
        // dump($res);