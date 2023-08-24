<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
<script type="text/javascript" src="[!--news.url--]e/data/js/ajax.js"></script>
</head>
<body class="showpage news">

<header class="page_head">
  <div class="top_bar">
    <button id="searchTriggerOpen" class="ap-search-trigger search_ico" on="tap:searchLightbox" role="button" aria-label="Search" tabindex="0">
    <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
      <circle cx="11" cy="11" r="8"></circle>
      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
    </svg>
    </button>
    <div class="logo">
      <div class="img" style="margin-right: 20px;">
        <amp-img src="https://img5.grofrom.com/www.ndlcd.com/uploads/ddef7844.png" height="60px" width="100px" layout="responsive" alt=""></amp-img>
      </div>
      <strong style="color:#1a2126"> New Display</strong> </div>
    <div >
      
    </div>
    <div class="mob_btn_wrap">
      <button role="button" on="tap:mob_nav.toggle" tabindex="0" class="mob_btn mob_nav_btn">
      <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
      </button>
      <button id="searchTriggerOpen" class="mob_btn mob_search_btn" on="tap:searchLightbox" role="button" aria-label="Search" tabindex="0">
      <svg viewBox="0 0 24 24" width="26" height="26" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      </button>
      <button role="button" on="tap:mob_language.toggle" tabindex="0" class="mob_btn mob_lang_btn">Language</button>
    </div>
  </div>
  <nav class="head_nav" amp-fx="fade-in fly-in-top" data-duration="1s" data-fly-in-distance="2%">
    <li  class="nav-current"><a href="/">Home</a></li>
    
    <li class=" child"><a href="/products/">Products</a>
    <ul>
              <li><a href="/products/accessories/">Accessories</a></li>
               <li><a href="/products/amoled/">AMOLED</a></li>
               <li><a href="/products/cables/">Cables</a></li>
               <li><a href="/products/capacitive-touch-screen/">Capacitive Touch Screen</a></li>
               <li><a href="/products/custom-lcd-display-solutions/">Custom Lcd Display Solutions</a></li>
               <li><a href="/products/lcd-controller-boards/">Lcd Controller Boards</a></li>
               <li><a href="/products/led-backlight-drivers/">Led Backlight Drivers</a></li>
               <li><a href="/products/monochrome-displays/">Monochrome Displays</a></li>
               <li><a href="/products/oled-displays/">Oled Displays</a></li>
               <li><a href="/products/pmoled/">PMOLED</a></li>
               <li><a href="/products/"> View All Products</a></li>
      </ul>
    </li>
    
    <li class=""><a href="/news/">News</a></li>
    <li class=""><a href="/blog/">Blog</a></li>
    <li class=""><a href="/contact/">Contact us</a></li>
    
     <li class=" child"><a href="/about/">About us</a>
    <ul>
        <li><a href="/about/"> About Us</a></li>
        <li><a href="/why_choose_us/">Why Choose Us</a></li>
        <li><a href="/team/">Our Team</a></li>
        <li><a href="/service/">Our Service</a></li>
      
       
      </ul>
    </li>
    
    
  </nav>
</header>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="main"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title_info">
<tr>
<td><h1>[!--title--]</h1></td>
</tr>
<tr>
<td class="info_text">时间：[!--newstime--]&nbsp;&nbsp;来源：[!--befrom--]&nbsp;&nbsp;作者：[!--writer--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td id="text">[!--newstext--]
<p align="center" class="pageLink">[!--page.url--]</p></td>
</tr>
</table>
<table border="0" align="center" cellpadding="0" cellspacing="8">
<tr>
<td><table border="0" align="center" cellpadding="0" cellspacing="0" class="digg">
<tr>
<td class="diggnum" id="diggnum"><strong><script type="text/javascript" src="[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5"></script></strong></td>
</tr>
<tr>
<td class="diggit"><a href="JavaScript:makeRequest('[!--news.url--]e/public/digg/?classid=[!--classid--]&id=[!--id--]&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');">来顶一下</a></td>
</tr>
</table></td>
<td><table border="0" align="center" cellpadding="0" cellspacing="0" class="digg">
<tr>
<td valign="middle" class="diggnum"><strong><a href="[!--news.url--]"><img src="[!--news.url--]skin/default/images/back.gif" alt="返回首页" width="12" height="13" border="0" align="absmiddle" /></a></strong></td>
</tr>
<tr>
<td class="diggit"><a href="[!--news.url--]">返回首页</a></td>
</tr>
</table></td>
</tr>
</table>
          </td>
</tr>
</table>
<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="[!--news.url--]e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="[!--news.url--]e/pl/?classid=[!--classid--]&amp;id=[!--id--]">共有<span><script type="text/javascript" src="[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="[!--news.url--]e/ShowKey/?v=pl" align="absmiddle" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='[!--news.url--]e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="[!--news.url--]e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="[!--id--]" />
<input name="classid" type="hidden" id="classid" value="[!--classid--]" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="[!--titleurl--]"></td>
</tr>
</table>
</td>
</tr>
</table></form>
</td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('news',2,4,128,90,1,20,20);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>相关文章</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
[!--other.link--]
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>栏目更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
              <script src='[!--news.url--]d/js/class/class[!--self.classid--]_newnews.js'></script></ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>栏目热门</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
              <script src='[!--news.url--]d/js/class/class[!--self.classid--]_hotnews.js'></script></ul></td>
</tr>
</table></td>
</tr>
</table>
<footer class="web_footer">
  <div class="sm_layout foot_items">
    <div class="foot_item foot_item01">
      <div class="index_title sm" amp-fx="fade-in fly-in-right" data-duration="1.4s" data-fly-in-distance="5%">
        <h1 class="title">Hot Category </h1>
      </div>
      <ul amp-fx="fade-in fly-in-right" data-duration="1.4s" data-fly-in-distance="5%">
                  <li style="margin: 0 15px;"><a href="/lcd-controller-manufacturers-cheap-price/">Lcd Controller Manufacturers Cheap Price</a></li>
                 <li style="margin: 0 15px;"><a href="/4-inch-display-module/">4 Inch Display Module</a></li>
                 <li style="margin: 0 15px;"><a href="/1-39-inch-oled-lcd-display/">1.39 Inch oled Lcd Display</a></li>
                 <li style="margin: 0 15px;"><a href="/7-inch-touch-panel/">7 Inch Touch Panel</a></li>
                 <li style="margin: 0 15px;"><a href="/lcd-led-panel-manufacturers-cheap-price/">Lcd Led Panel Manufacturers Cheap Price</a></li>
               </ul>
    </div>
   
  </div>
  <div class="web_bottom">Copyright © 2021 ShenZhen New Display Co.,Ltd  <a target="_blank" href="https://www.ndlcd.com/sitemap.xml">Sitemap</a></div>
</footer>
[!--page.stats--]
</body>
</html>