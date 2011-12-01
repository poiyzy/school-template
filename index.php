<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta content="新西小学,家庭教育,家长课堂,在线找办法,互动区,网上家长学校,家长学校,山西,太原,家长网" name="keywords">
<meta content="山西省网上家长学校，家庭教育的领航者" name="Description" />
<title>太原市新西小学---山西省网上家长学校特约联盟校</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/s3Slider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 6000
        });
    });
</script>
<script type="text/javascript">
/*
滑动门
*/
function scrollDoor(){
}
scrollDoor.prototype = {
 sd : function(menus,divs,openClass,closeClass){
  var _this = this;
  if(menus.length != divs.length)
  {
   alert("菜单层数量和内容层数量不一样!");
   return false;
  }    
  for(var i = 0 ; i < menus.length ; i++)
  { 
   _this.$(menus[i]).value = i;    
   _this.$(menus[i]).onmouseover = function(){
     
    for(var j = 0 ; j < menus.length ; j++)
    {      
     _this.$(menus[j]).className = closeClass;
     _this.$(divs[j]).style.display = "none";
    }
    _this.$(menus[this.value]).className = openClass; 
    _this.$(divs[this.value]).style.display = "block";    
   }
  }
  },
 $ : function(oid){
  if(typeof(oid) == "string")
  return document.getElementById(oid);
  return oid;
 }
}
window.onload = function(){
 var SDmodel = new scrollDoor();
 SDmodel.sd(["m01","m02"],["c01","c02"],"sd01","sd02");
 SDmodel.sd(["mm01","mm02"],["cc01","cc02"],"sd01","sd02");
 SDmodel.sd(["mmm01","mmm02"],["ccc01","ccc02"],"sd01","sd02");
}
</script>
<style>
body,h1,h2,h3,h4,h5,h6,p,ul,li,dl,dt,dd{padding:0;margin:0;}
li{
	list-style:none;
	font-size: 14px;
	line-height: 1.5;
}
img{border:none;}
body {
	background-image:url(images/bg_tile.jpg);
	background-repeat: repeat;
}
/*图片*/
#slider {
    width: 397px; /* important to be same as image width */
    height: 299px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}
#slider img{
    border: 0px;
}

#sliderContent {
    width: 397px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 0;
}
.sliderImage {
    float: left;
    position: relative;
	display: none;
}
.sliderImage span {
    position: absolute;
	font: 12px/14px Arial, Helvetica, sans-serif;
    padding: 10px 13px;
    width: 371px;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
	-khtml-opacity: 0.7;
    opacity: 0.7;
    color: #fff;
    display: none;
}
.clear {
	clear: both;
}
.sliderImage span strong {
    font-size: 14px;
}
.top {
	top: 0;
	left: 0;
}
.bottom {
	bottom: 0;
    left: 0;
}
ul { list-style-type: none;}
</style>
<style>
#c01 li {
	height:25px;
	list-style:inside;
	overflow:hidden;
	line-height: 1.8;
}
#c02 li {
	height:25px;
	list-style:inside;
	overflow:hidden;
	line-height: 1.8;
}
#c03 li {
	height:25px;
	list-style:inside;
	overflow:hidden;
	line-height: 1.8;
}
#c04 li {
	height:25px;
	list-style:inside;
	overflow:hidden;
	line-height: 1.8;
}
#c05 li {
	height:25px;
	list-style:inside;
	overflow:hidden;
	line-height: 1.8;
}
</style>
<style>
.preview{margin:0px;padding:0px;overflow:hidden;}
.cont{
	padding:10px;
	font-size: 14px;
	color: #16387C;
}
.cls{clear:both;}
.hidden{display:none;}
.scrolldoorFrame{
	width:293px;
	overflow:hidden;
	margin-top: 0px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
.scrollUl{
	width:284px;
	border-bottom:1px solid #CCC;
	overflow:hidden;
	height:20px;
	padding-top: 9px;
	padding-left: 10px;
}
.scrollUl li{float:left;}
.bor03{
}
.sd01{
	cursor:pointer;
	font-weight:bold;
	font-size: 16px;
	width: 90px;
	color: #573216;
}
.sd02{
	cursor:pointer;
	font-size: 16px;
	width: 90px;
	color: #573216;
}
</style>
<style>
.dfwh1{
text-align:center;}
.dfwh2{
	width:705px;
	height:104px;
	background-image:url(../image/dfwhbg.jpg);
	background-repeat:repeat-x;
	background-position:bottom;
	overflow:hidden;
}
.gunall{
width:140px;
text-align:center;
}
.guntu{}
.gungzi{
margin-top:5px;}
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
	<div class="pic"><img src="<?php bloginfo('template_url'); ?>/images/slide3.jpg" border="0" alt="" /></div>
	<div class="content">
		<div class="cleft">
			<div class="cl1">
				<div class="picnews">
                	
						<div id="slider">
       						 <ul id="sliderContent">
          						 <li class="sliderImage">
               						 <a href="http://www.zcool.com.cn/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/news/1.jpg" alt="1" /></a>
              					     <span class="top"><strong>站酷收集</strong><br />站酷(ZCOOL)-素材分享与设计交流……</span>
          					     </li>
         					     <li class="sliderImage">
                         			 <a href="http://www.zcool.com.cn/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/news/2.jpg" alt="2" /></a>
              				     	 <span class="top"><strong>站酷-www.zcool.com.cn</strong><br />站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流</span>
           						 </li>
           						 <li class="sliderImage">
              					    <a href="http://www.zcool.com.cn/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/news/3.jpg" alt="3" /></a>
          					        <span class="bottom"><strong>站酷-ZCOOL</strong><br />不错的代码...</span>
          					    </li>
          					    <li class="sliderImage">
            					    <a href="http://www.zcool.com.cn/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/news/4.jpg" alt="4" /></a>
           					       <span class="bottom"><strong>站酷-ZCOOL 2</strong><br />站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流...</span>
          					    </li>
           					    <li class="sliderImage">
           					        <a href="http://www.zcool.com.cn/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/news/5.jpg" alt="5" /></a>
            					    <span class="top"><strong>站酷-ZCOOL 3</strong><br />站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流站酷(ZCOOL)-素材分享与设计交流...</span>
           					    </li>
           					    <div class="clear sliderImage"></div>
        					 </ul>
				  </div>
					
                </div>
				<div class="topnews">
                	<div class="newstitle">最新动态</div>
                    <div class="newstext">
                    	
                        <div class="preview">
  							<div class="scrolldoorFrame">
								 <ul class="scrollUl">
									<li class="sd01" id="m01">本校动态</li>
									<li class="sd02" id="m02">联盟校动态</li>
								 </ul>
   								<div class="bor03 cont">
    								<div id="c01">
    								<ul>
    									<li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
										<li>1</li>
										<li>1</li>
										
    								</ul>
  						
									</div>
									<div id="c02" class="hidden">
								 	<ul>
								 		<li>2</li>
                                        <li>2</li>
                                        <li>2</li>
                                        <li>2</li>
                                        <li>2</li>
                                        <li>2</li>
										<li>2</li>
										<li>2</li>
    								</ul>
  						
									</div>
									
					    		</div>
							</div>
						</div>
                
                    </div>
                </div>
			</div>
			<div class="cl2">
				<div class="content_title">学校简介</div>
				<div class="cl2text"></div>
			</div>
			<div class="cl3">
				<div class="content_title">校园一角</div>
				<div class="cl3pic">
                		
                        				<div  id="aaa" class="dfwh2">
					<div>
        <table>
                <tr>
                    <td id="aaa1">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
        <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
		 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
 <td align="center">
		<div class="gunall">
		<div class="guntu"><a href="#"><img style="border:0; width:122px; height:98px;" src="<?php bloginfo('template_url'); ?>/gun1.jpg"  /></a></div>
		</div>
		</td>
  </tr>
</table>
                    </td>
                    <td id="aaa2"></td>
                </tr>
            </table>
       </div>
       <SCRIPT language="javascript">
var speed1=10 //
aaa2.innerHTML=aaa1.innerHTML
function Marquee1(){
if(aaa2.offsetWidth-aaa.scrollLeft<=0)
{
 aaa.scrollLeft-=aaa2.offsetWidth}
else{
aaa.scrollLeft++
}
}
var MyMrr=setInterval(Marquee1,speed1)
aaa.onmouseover=function() {clearInterval(MyMrr)}
aaa.onmouseout=function() {MyMrr=setInterval(Marquee1,speed1)}
</SCRIPT>

		
</div>
                
                </div>
			</div>
			<div class="cl4">
				<div class="cl4content">
					<div class="content_title1">家庭文化</div>
					<div class="cl4text">
						<ul>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
						</ul>
					</div>
			  </div>
				<div class="cl4content">
					<div class="content_title1">家教指导</div>
					<div class="cl4text">
						<ul>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="cright">
			<div class="cr1">
				<div class="siderbar_title">学校公告</div>
                <div class="cr1text">
                	<ul>
                    	<li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                        <li>1</li>
                    </ul>
                </div>
			</div>
			<div class="cr2">
				<div class="siderbar_title">互动区</div>
                <div class="cr2text"></div>
			</div>
			<div class="cr3">
				<div class="siderbar_title">每周推荐</div>
                <div class="cr3text">
                	<ul>
                    	<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
                        <li>5</li>
                    </ul>
                </div>
			</div>
			<div class="cr4">
				<div class="siderbar_title">在线找办法</div>
                <div class="cr4text"><form action="" method="get"><input name="" type="text" />
                  <input type="submit" value="搜索" />
                </form></div>
			</div>
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
