<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/all/topstudent/Public/home/css/public.css" rel="stylesheet" type="text/css" />
<link href="/all/topstudent/Public/home/css/projectlist.css" rel="stylesheet" type="text/css" />
<link href="/all/topstudent/Public/home/css/contentright.css" rel="stylesheet" type="text/css" />
<title>学霸问答</title>
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
            <li class="navnow"><a href="<?php echo U('Home/learnansq/index');?>">学霸问答</a></li>
            <li><a href="<?php echo U('Home/book/index');?>">课本点读</a></li>
            <li><a href="<?php echo U('Home/video/index');?>">视频讲解</a></li>
            <li><a href="<?php echo U('Home/tests/index');?>">学霸试卷</a></li>
            <li><a href="<?php echo U('Home/personal/index');?>">个人中心</a></li>
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

	<div class="bread"><span>学霸养成</span> > <a href="#">学霸问答</a></div>
    <div class="right">
    	<div class="righttop">
        	<h1 class="title title2">我的问答<a href="#" class="ckgd"></a></h1>
            <div class="xzdr">
       	    	<img src="/all/topstudent/Public/home/images/dr1.jpg" width="150" height="190" alt="dr" class="xzdrimg"/>
                <div class="xzright">
                <div class="drname">
                <h1><?php echo ($listss["user_username"]); ?></h1>
                <span>
                    <?php
 $str1 = $listss['score']; $str2 = $str1/100; echo LV.intval($str2); ?>
                </span>
                </div>
                <a href="#"><h3 class="tw">我的提问：<?php echo ($listss["ask_count"]); ?></h3></a>
                <a href="#"><h3 class="hd2">我的回答：<?php echo ($listss["reply_count"]); ?></h3></a>
                </div>
            </div>
      </div>
    	<div class="righttop righttop2">
        	<h1 class="title">热门问题<a href="#" class="ckgd">更多&nbsp;>></a></h1>
            <ul class="topul">
        	<?php if(is_array($llist)): $i = 0; $__LIST__ = $llist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Home/learnansq/hotlquedetails');?>/qid/<?php echo ($data["que_id"]); ?>"><?php echo ($data["content"]); ?></a><span><?php $str = $data['publish']; echo substr($str,5,5); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
    </div>
    <div class="left">
    	<div class="search">
    	<form action="<?php echo U('Home/learnansq/search');?>" method="post">
            <input type="text" value="" class="searchtext" name="search" id="search" placeholder="请输入搜索关键词">
           <button type="submit" value="开始搜索" class="searchbutton">开始搜索</button>
           <a href="<?php echo U('Home/learnansq/ask');?>" class="searchbutton2">我要提问</a>
        </form>
           

        
   		</div>
        <div class="lp">
    	<ul>
    		<li><a href="<?php echo U('Home/learnansq/primary');?>" class="lpli">小学</a></li>
            <li><a href="<?php echo U('Home/learnansq/middle');?>" class="lphover">初中</a></li>
        	<li><a href="<?php echo U('Home/learnansq/chinese');?>" class="lpli">语文</a></li>
        	<li><a href="<?php echo U('Home/learnansq/math');?>" class="lpli">数学</a></li>
        	<li><a href="<?php echo U('Home/learnansq/english');?>" class="lpli">英语</a></li>
    	</ul>
        </div>
        <ul class="proul">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
            	<div class="litop">
                	<h1><a href="<?php echo U('Home/learnansq/lquedetails');?>/qid/<?php echo ($data["que_id"]); ?>" target="_blank"><?php echo ($data["title"]); ?></a></h1>
                    <h2><span class="">提问者：<?php echo ($data["que_username"]); ?></span><span class="tiw">问题分类：<?php echo ($data["pag"]); ?></span><span class="tiw">回答：<?php echo ($data["ans_count"]); ?></span><span class="tiw"><?php echo ($data["que_view"]); ?>人看过</span></h2>
                </div>
                <p><?php echo ($data["content"]); ?></p>
                <div class="time">
               	    	<img src="/all/topstudent/Public/home/images/time.gif" width="14" height="14" alt="time"/> 
                        <span class="sj">时间：<?php echo ($data["publish"]); ?></span>
                </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="page">
            	<?php echo ($page); ?>
    </div>
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