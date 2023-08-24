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
</head>
<body class="listpage">

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
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td>[!--empirenews.listtemp--]<ul>
<!--list.var1-->
<!--list.var2-->
<!--list.var3-->
<!--list.var4-->
<!--list.var5--></ul>
[!--empirenews.listtemp--]
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
                <td height="38"><div class="epages">[!--show.listpage--]</div></td>
</tr>
</table>
</td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?> 
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
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
</body>
</html>