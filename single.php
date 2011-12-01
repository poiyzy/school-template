<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<title><?php the_title(); ?>---太原市新西小学</title>
<link href="<?php bloginfo('template_url'); ?>/css/single.css" rel="stylesheet" type="text/css" />
<style>
body,h1,h2,h3,h4,h5,h6,p,ul,li,dl,dt,dd{
	padding:0;
	margin:0;
}
li{
	list-style:none;
	font-size: 14px;
	line-height: 1.5;
}
img{border:none;}
body {
	background-image:url(<?php bloginfo('template_url'); ?>/images/bg_tile.jpg);
	background-repeat: repeat;
}
</style>
</head>

<body>
<div id="top">
	<div class="logo"></div>
	<div class="nav">
		<div class="navtext">
			<ul>
				<li>首页</li>
				<li>学校概况</li>
				<li>校园动态</li>
				<li>党建园地</li>
				<li>教育教学</li>
				<li>网上家长学校特约服务</li>
			</ul>
		</div>
	</div>
</div>
<div id="main">
	<div class="mainL">
		<div class="content">
            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <div class="title"><?php the_title(); ?></div>
                <div class="subtitle">发布时间：2011年11月28日      信息来源：太原晚报</div>
                <div class="context"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
		</div>
        <div class="comment">
		  <div class="ctitle">评论</div>
            <div class="ctext"></div>
        </div>
	</div>
	<div class="mainR">
		<div class="mrcontent">
			<div class="mrtitle">最新资讯</div>
			<div class="mrtext">
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</div>
		</div>
		<div class="mrcontent">
			<div class="mrtitle">互动区</div>
			<div class="mrtext"></div>
		</div>
	</div>
</div>
<div id="foot">
 	<div class="foottext">
   		<div>© 山西省网上家长学校学校分站</div>
	</div>
</div>
</body>
</html>
