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
                    <div id="collapseTwo" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <ul>
                                <li  class="linow"><a href="<?php echo U('Admin/questions/index');?>">问题审核</a></li>
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
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                <li><a href="<?php echo U('Admin/user/index');?>">用户列表</a></li>
                                <li><a href="<?php echo U('Admin/user/teacher');?>">教师管理</a></li>
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
            <h1>问题审核</h1>
            <div class="buttongroup">
            <div class="col-md-6 col-xs-6 left">
                <form action="<?php echo U('Admin/questions/search');?>" class="navbar-form" role="search" >
                   <div class="form-group">
                    <input type="text" class="form-control" style="margin-top:-4px;" name="search_value" id="search_value" />

                    </div>
                  <button  type="submit" class="btn button2" >搜索</button>
                </form>
            </div>
            <div class="col-md-6 col-xs-6 left">
                <form action="<?php echo U('Admin/questions/query');?>" class="navbar-form" role="search" method="post">
                    日期：
                    <input type="date" value="" name="date1">
                    至
                    <input type="date" value="" name="date2">
                    <button type="submit" class="btn button3">查询</button>
                </form>
            </div>
            </div>
            <div class="tablegroup">
            <form action="<?php echo U('Admin/questions/destory');?>" method="post">
                <table class="table">
                    <tr>
                        <th>&nbsp;</th>
                        <th>问题</th>
                        <th>提问时间</th>
                        <th>状态</th>
                        <th>详情</th>
                        <th>操作</th>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <td><input type="checkbox" name="id[]" id = "id[]" value="<?php echo ($data["que_id"]); ?>"></td>
                        <td title="<?php echo ($data["content"]); ?>"><a target="_blank" href="<?php echo U('Admin/questions/edit');?>/id/<?php echo ($data["que_id"]); ?>" title="<?php echo ($data["content"]); ?>"><?php echo ($data["content"]); ?></a></td>
                        <td><?php echo ($data["publish"]); ?></td>
                        <td class="green"><?php echo ($data["status"]); ?></td>
                        <td><a href="/topstudent/index.php/Admin/Questions/edit/id/<?php echo ($data["que_id"]); ?>">查看</a></td>
                        <td><a href="/topstudent/index.php/Admin/Questions/del/id/<?php echo ($data["que_id"]); ?>">删除</a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr class="table-bottom">
                    
                        <td><input type="checkbox"  value="" onclick="if(this.checked==true) { checkAll('id[]'); } else { clearAll('id[]'); }"></td>
                        
                        <td style="text-align:left">全选<button type="submit" class="button4">批量删除</a></td>
                    
                        
                        <td colspan="4" style="text-align:right">
                            <div class="pagination"><?php echo ($page); ?></div>
                            <!--<ul class="page">
                                <li><a href="#">上一页</a></li>
                                <li class="now"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>...</li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">下一页</a></li>
                                <li>共5页/48条数据 转到<input type="text" class="pageinput" placeholder="1">页</li>
                            </ul>-->
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="/topstudent/Public/admin/js/jquery.min.js"></script>
<script src="/topstudent/Public/admin/js/bootstrap.min.js"></script>
<script src="/topstudent/Public/admin/js/scripts.js"></script>
<script src="/topstudent/Public/admin/js/qiehuan.js"></script>
</body>
</html>