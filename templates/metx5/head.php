<!--<?php
session_start();
$methtml_head  = metlabel_html5();//基于Html5
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表）
echo <<<EOT
-->
{$methtml_head}
<body>
<link href="{$img_url}css/hb.css" rel="stylesheet">
	
<div class="head_img"><img src="{$img_url}head_img.jpg" alt=""></div>

<section id="top" class="clx">

<div class="clx nav_select">
<div class="clx wrapper nav_select_c">
<ul class="clx">
<!--
EOT;
$ind = '';
if($classnow == 10001){
  $ind='10001';
}else{
  $ind='';
}
echo <<<EOT
-->
<li class="index{$ind}">
<a href="{$index_url}" title="{$lang_home}" class=" nv_aaa">{$lang_home}</a>
</li>




<!--
EOT;
foreach($nav_list as $key=>$val){
$active='';
$nowid=$val[id];  
if($classnow == $nowid ){
$active='active';  
}
else{
  $active='';
}
echo <<<EOT
-->
<li class="{$active}">
<a href="{$val[url]}" title="{$val[name]}" >{$val[name]}</a>

<div class="boxkc clx">
<!--
EOT;
foreach($nav_list2[$val[id]] as $key=>$val2){
echo <<<EOT
-->
<a href="{$val2[url]}" title="{$val2[name]}">{$val2[name]}</a>
<!--
EOT;
}
echo <<<EOT
-->

</div>










</li>
<!--
EOT;
}
echo <<<EOT
-->
</ul>
</div>
</div>

<style>

/*.nav_select_c ul li .current{background: #2f72bb;}*/
.boxkc{
    box-sizing: border-box;
    z-index: 9999999999;
    width: 1000px;
    height: 40px;
    position: absolute;
    top: 40px;
    left: 1%;
    /* padding-left: 200px; */
    background: #f1f9fd;
    display: none;
    right: 1%;
    margin: 0 auto;
    padding: 0 13px;
}

.boxkc a{    display: block;
        padding: 8px 10px;
    /* height: 50px; */
    float: left;
  
    color: #336699!important;
    border: none;
    background: none;}
.boxkc a:hover{text-decoration:underline;}
</style>



<script type="text/javascript" src="{$img_url}js/jquery-1.10.2.min.js"></script>

<script>
$(function () {
	var navLi=$(".nav_select_c li");
	navLi.mouseover(function () {
		$(this).find("a").addClass("current");
		$(this).find(".boxkc").css("display","block");
	})
	navLi.mouseleave(function(){
		$(this).find("a").removeClass("current");
		$(this).find(".boxkc").css("display","none");
	})
})
</script>



</section>









 

<!--
EOT;
?>