<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学霸养成</title>
<link href="/all/topstudent/Public/home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/all/topstudent/Public/home/css/person.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="header">
	<div class="mybody">
    	<a href="#"><img src="/all/topstudent/Public/home/images/logo.jpg" alt="logo" /></a>
        <div class="login">
        	<a href="#">登陆</a> | <a href="#">注册</a>
        </div>
        <ul class="nav">
            <li><a href="<?php echo U('Home/index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Home/learnansq/index');?>">学霸问答</a></li>
            <li><a href="<?php echo U('Home/book/index');?>">课本点读</a></li>
            <li><a href="<?php echo U('Home/video/index');?>">视频讲解</a></li>
            <li><a href="<?php echo U('Home/tests/index');?>">学霸试卷</a></li>
            <li class="navnow"><a href="<?php echo U('Home/personal/index');?>">个人中心</a></li>
        </ul>
    </div>
</div>
<div class="ad">
	<div class="mybody">
    	<img src="/all/topstudent/Public/home/images/ad.jpg" width="1200" height="100" alt="ad" />
    </div>
</div>

<div class="content">
	<div class="mybody">
    	<div class="bread"><span>您现在的位置：</span><a href="<?php echo U('Home/personal/index');?>">首页</a> > <a href="<?php echo U('Home/personal/index');?>">个人中心</a></div>
		<!--个人中心left-->
        <div class="personal_left">
        	<div class="user">
            	<a href="#"><img src="/all/topstudent/Public/home/images/user_s.jpg" width="150" height="150" alt="user" /></a>
                <p>何大敏</p>
            </div>
            <ul class="left_nav">
                    <li><a href="<?php echo U('Home/personal/index');?>">首页</a></li>
                    <li><a href="<?php echo U('Home/personal/myquestions');?>">我的问题</a></li>
                    <li><a href="<?php echo U('Home/personal/myanswers');?>">我的回答</a></li>
                    <li><a href="<?php echo U('Home/video/index');?>">视频收藏</a></li>
                    <li><a href="<?php echo U('Home/tests/index');?>">试卷收藏</a></li>
                    <li><a href="<?php echo U('Home/personal/myself');?>">个人管理</a></li>
                    
                    <li class="left_nav_now"><a href="<?php echo U('Home/personal/certeacher');?>">教师认证</a></li>
            </ul>       
        </div>
        <!--个人中心right-->
        <div class="personal_form_right form_bg">
        <h1>教师认证<span> Teacher certification</span></h1>
            <div class="form1">
            <form action="/all/topstudent/index.php/Home/personal/upload" method="post" enctype="multipart/form-data">
                <div class="img">
                <div class="file-box">  
                 <input type='button' class='add' id="add"/> 
                 <input type="file" name="fileField" class="file file1" id="fileField" size="28" onchange="document.getElementById('textfield').value=this.value" accept="image/jpeg,image/gif,image/png"/> 
            </div>
                <p>请上传教师资格证</p>
                </div>
                    <table cellspacing="30">
                        <tr>
                            <td>学科</td>
                            <td><select name="subject" value="">
                                    <option value="1">数学</option>
                                    <option value="2" selected = "selected">英语</option>
                                    <option value="3">语文</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>就职院校</td>
                            <td><input type="text"name="school" value="" /></td>
                        </tr>
                        <tr>
                            <td>审核状态</td>
                            <td class="nopass">未通过</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="button"><input type="submit" value="申请" name="" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
	</div>
</div>

<div class="footer">
	<div class="mybody">
    <p>版权所有：河北师范大学软件学院 永信指导小组 地址：石家庄市南二环东路20号 冀ICP备字201401号</p>
    </div>
</div>
</body>
</html>