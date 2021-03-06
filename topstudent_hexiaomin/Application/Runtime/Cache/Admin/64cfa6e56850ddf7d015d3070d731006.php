<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>学霸养成后台管理系统</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/topstudent/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/topstudent/Public/admin/css/style.css" rel="stylesheet">
    <link href="/topstudent/Public/admin/css/style2.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <div class="row header">
        <h1>学霸养成后台管理系统<span><?php echo ($_SESSION['adm_username']); ?>&nbsp;<a href="/topstudent/index.php/Admin/Admins/logout">退出</a></a></span></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row content">
        <div class="col-md-2 col-xs-2 left">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title con">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">内容管理</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/videos/index');?>">视频管理</a></li>
                                <li><a href="<?php echo U('Admin/books/index');?>">课本管理</a></li>
                                <li><a href="<?php echo U('Admin/tests/index');?>">试卷管理</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title question">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">问答管理</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/questions/index');?>">问题审核</a></li>
                                <li><a href="<?php echo U('Admin/answers/index');?>">回复审核</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">用户管理</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/user/index');?>">用户列表</a></li>
                                <li class="linow"><a href="<?php echo U('Admin/user/teacher');?>">教师管理</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title user">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">管理员管理</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse ">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/admins/index');?>">管理员列表</a></li>
                                <li><a href="<?php echo U('Admin/admins/add');?>">添加管理员</a></li>
                                <li><a href="<?php echo U('Admin/admins/edit');?>">个人密码修改</a></li>
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-10 col-xs-10 right">
			<h1>教师列表</h1>
			<div class="buttongroup">
            	<form action="/topstudent/index.php/Admin/user/searchTea"  class="navbar-form">
            		<div class="form-group">
            			<input type="text" class="form-control" name="user_name" placeholder="请输入老师名字"　style="margin-top:-4px;">
            		</div>
                    <button type="submit" class="btn button1" name="user_username">搜索</button>
                    <!-- <a href="#" class="button1">搜索</a> -->
                </form>
            </div>
            <div class="tablegroup">
            	<table class="table">
                <form action="/topstudent/index.php/Admin/user/fireAll" method="post">
                	<tr>
                    	<th>&nbsp;</th>
                        <th>用户名</th>
                        <th>积分</th>
                        <th>状态</th>
                        <th>认证详情</th>
                        <th>操作</th>
                    </tr>
                <?php if(is_array($teachertab)): $i = 0; $__LIST__ = $teachertab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tea): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox" name="test" value="<?php echo ($tea["tea_id"]); ?>"></td>
                        <td><?php echo ($tea["user_name"]); ?></td>
                        <td><?php echo ($tea["tea_score"]); ?></td>
                        <td class="red"><?php echo ($tea["tea_credit"]); ?></td>
                        <td><a href="<?php echo U('Admin/user/credit');?>/id/<?php echo ($tea["tea_id"]); ?>">查看</a></td>
                        <td><a href="<?php echo U('Admin/user/fire');?>/id/<?php echo ($tea["tea_id"]); ?>">撤职</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr class="table-bottom">
                    	<td><input type="checkbox" name="test" value="" onclick="if(this.checked==true) { checkAll('test'); } else { clearAll('test'); }"></td>
                        <td style="text-align:left">全选<button type="submit" class="button4">批量撤职</button></td>
                        <td colspan="4" style="text-align:right">
                        <?php echo ($page); ?>
                        	<!-- <ul class="page">
                            	<li><a href="#">上一页</a></li>
                            	<li class="now"><a href="#">1</a></li>
                            	<li><a href="#">2</a></li>
                            	<li>...</li>
                            	<li><a href="#">4</a></li>
                            	<li><a href="#">5</a></li>
                            	<li><a href="#">下一页</a></li>
                                <li>共5页/48条数据 转到<input type="text" class="pageinput" placeholder="1">页</li>
                            </ul> -->
                        </td>
                    </tr>
                    </form>
                </table>
            </div>
		</div>
</div>
<script src="/topstudent/Public/admin/js/jquery.min.js"></script>
<script src="/topstudent/Public/admin/js/bootstrap.min.js"></script>
<script src="/topstudent/Public/admin/js/scripts.js"></script>
<script src="/topstudent/Public/admin/js/qiehuan.js"></script>
</body>
</html>