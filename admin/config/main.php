<?php

$config = require(ROOT_PATH . "/include/config.php");
$params = array_merge($config['params'], array('administrator' => array('admin'),));
$st="";

    $params['roleItem'] = array(
    array(
        '班级管理',
        array(
            'award_index41' => array('学生信息', 'myClass/student'),
        ),
    ),
    array(
        '成绩管理',
        array(
            'award_index41' => array('录入成绩', 'scores/entryScores'),
            'award_index42' => array('年级成绩', 'scores/score'),
        ),
    ),
    array(
        '考评管理',
        array(
            'award_index41' => array('填写考评', 'evaluate/index'),
            'award_index42' => array('查看考评', 'evaluate/check'),
        ),
    ),
     
  );




$main = array(
    'basePath' => ROOT_PATH . '/admin',
    'runtimePath' => ROOT_PATH . '/runtime/admin',
    'name' => '',
    'defaultController' => 'index',
    'components' => array(
        'db' => $config['components']['db'],
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'info,error, warning'
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace'
                ),
            ),
        ),
    ),
    'params' => $params,
);

return array_merge($config, $main);
?>

<ul class="sidebar-menu">            
<li class="treeview">               
    <a href="#">                    
        <i class="fa fa-gears"></i> <span>权限控制</span>                    
        <i class="fa fa-angle-left pull-right"></i>               
    </a>               
    <ul class="treeview-menu">                   
        <li class="treeview">                        
            <a href="/admin">管理员</a>                        
            <ul class="treeview-menu">                            
                <li><a href="/user"><i class="fa fa-circle-o"></i> 后台用户</a></li>                            
                <li class="treeview">                                
                    <a href="/admin/role"> <i class="fa fa-circle-o"></i> 权限 <i class="fa fa-angle-left pull-right"></i>
                    </a>                                
                    <ul class="treeview-menu">                                    
                        <li><a href="/admin/route"><i class="fa fa-circle-o"></i> 路由</a></li>
                        <li><a href="/admin/permission"><i class="fa fa-circle-o"></i> 权限</a></li>
                        <li><a href="/admin/role"><i class="fa fa-circle-o"></i> 角色</a></li>
                        <li><a href="/admin/assignment"><i class="fa fa-circle-o"></i> 分配</a></li>
                        <li><a href="/admin/menu"><i class="fa fa-circle-o"></i> 菜单</a></li>
                    </ul>                           
                </li>                        
            </ul>                    
        </li>                
    </ul>            
    </li>        
</ul>