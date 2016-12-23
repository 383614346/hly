<!--<?php
session_start();
global  $db;
global  $_M;
require_once template('head');
echo <<<EOT
-->
<div class="wrapper transition1 clx">
   <div class="search_fr clx">
     <div class="fl div_h3_title"><i></i><h3>创建学习型队伍</h3></div>
    <div class="news_ul_li fl">
      <ul>
<!--
EOT;
$metlist_array = methtml_getarray('348', '', '', '', '1');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$dessc=utf8substr($val['title'],0,28);
echo <<<EOT
-->   

         <li><a href="$val[url]" target="_blank">$dessc …</a></li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->  
      </ul>
    </div>
    
    <div class="clx fr div_form">
    <span class="inner-search">站内搜索：</span>
      <form method="get" name="myform1" action="$searchurl"  target="_self">
    

   <input class="search_1" type="text" name="searchword" size="14"  placeholder="请输入要搜索的标题..." class="text" style="float: left;"/>
            <input type="hidden" name="module" value="3">
  
    
    
     <input type="submit" src="" 
     	name='Submit' value='提交' class="submit" />
        <!--<button type="submit" form="nameform" value="Submit">提交</button>-->
      </form>
      
    </div>
    
    
   </div>

</div>


<style>
.submit {
	    float: left;
    padding: 0px 6px!important;
    display: block;
    margin-left: 10px;
    background: #23b7e5;
    border: 0 none;
    font-size: 12px;
     height: 25px; 
    line-height: 25px;
    padding: 0 35px;
    color: #fff;
    cursor: pointer;
    border-radius: 2px;
    font-family: 'Microsoft YaHei',Tahoma,Verdana,'Simsun';
}
.left_flash {

    height: 252px;

}
.left_flash .bx-wrapper img{height: 252px!important;}




.left_flash .bx-wrapper .bx-pager.bx-default-pager a:hover,.left_flash .bx-wrapper .bx-pager.bx-default-pager a.active{	display: block!important;
	    background: #fff;
    text-indent: -9999px;
    display: block;
    width: 10px!important;
    height: 10px!important;
    margin: 0 1px;
    outline: 0;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;}

.left_flash .bx-pager-item a{
	display: block!important;
	    background: #fff;
    text-indent: -9999px;
    display: block;
    width: 10px;
    height: 10px;
    margin: 0 1px;
    outline: 0;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}






</style>


<div class="wrapper transition2 clx">
 <div class="left_area clx">
     <div class="clx">

   <div class="left_flash clx">



   <div class="slider6">




<!--
EOT;
$metlist_array = methtml_getarray('341', '', '', '', '4');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val['title'],0,28);
echo <<<EOT
-->		
  <div class="slide">
  <a href="$val[url]" target="_blank">
  <img src="$val[imgurl]"><h3>$desc</h3>
  </a>
  </div>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->	  






      
   </div>
   

<script type="text/javascript">
$(document).ready(function(){
$('.slider6').bxSlider({
//mode: 'fade',

slideMargin: 10
});
});
</script>   


   </div>
       
<div class="text_info clx">
<div class="text_info_1 clx">
<h3>重要发文</h3>
<ul>
<!--
EOT;
$metlist_array = methtml_getarray('339', '', '', '', '4');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val[title],0,16);

echo <<<EOT
-->   
<li class="clx">
<a href="$val[url]">$desc...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->

</ul>
</div>



<div class="text_info_1 clx">
<h3>重要发文</h3>
<ul class="clx">
<!--
EOT;
$metlist_array = methtml_getarray('340', '', '', '', '4');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc2=utf8substr($val[title],0,16);
echo <<<EOT
-->   
<li class="clx">
<a href="$val[url]">$desc2...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
</ul>
</div>
</div>
     </div>

<div class="left_area_no2 clx">
 <img src="{$img_url}dd.jpg" alt="" class="img_max_show">
</div>


<div class="area_4colum_block clx">


   <div class="area_4colum_block_1 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>{$class_index[342][name]}</h3><a class="more_a" href="{$class_index[342][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('342', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_1">
        <ul>

<!--
EOT;
$metlist_array = methtml_getarray('342', '', '', '', '8');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val['title'],0,14);
echo <<<EOT
-->   
<li class="clx">
<a href="">$desc...</a><span>$val[updatetime]</span>
</li>

<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
--> 

        </ul>
      </div>
      <!-- content_4colum_block_1 -->
   </div>
   <!-- area_4colum_block_1 -->



   <div class="area_4colum_block_1 m_m2">
      <div class="area_4colum_block1_title clx">
        <h3>{$class_index[343][name]}</h3><a class="more_a" href="{$class_index[343][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('343', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_1">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('343', '', '', '', '8');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val['title'],0,14);
echo <<<EOT
-->   
<li class="clx">
<a href="">$desc...</a><span>$val[updatetime]</span>
</li>

<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
--> 
        </ul>
      </div>
      <!-- content_4colum_block_1 -->
   </div>
   <!-- area_4colum_block_1 -->

      <div class="area_4colum_block_1 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>{$class_index[344][name]}</h3><a class="more_a" href="{$class_index[344][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('344', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_1">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('344', '', '', '', '8');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val['title'],0,14);
echo <<<EOT
-->   
<li class="clx">
<a href="">$desc...</a><span>$val[updatetime]</span>
</li>

<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
--> 
        </ul>
      </div>
      <!-- content_4colum_block_1 -->
   </div>
   <!-- area_4colum_block_1 -->


      <div class="area_4colum_block_1 m_m2">
      <div class="area_4colum_block1_title clx">
        <h3>一线传真</h3><a class="more_a" href="{$class_index[345][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('345', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_1">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('345', '', '', '', '8');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
$desc=utf8substr($val['title'],0,14);
echo <<<EOT
-->   
<li class="clx">
<a href="">$desc...</a><span>$val[updatetime]</span>
</li>

<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
--> 
        </ul>
      </div>
      <!-- content_4colum_block_1 -->
   </div>
   <!-- area_4colum_block_1 -->


</div>
<!-- area_4colum_block -->


<script type="text/javascript" src="{$img_url}js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="{$img_url}js/jquery.bxslider.js"></script>

<div class="clx" style="padding:0 40px;">
    <div class="slider4">

<!--
EOT;
$metlist_array = methtml_getarray('346', '', '', '', '');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
echo <<<EOT
-->   
<div class="slide"><a href="$val[url]" target="_blank"><img src="$val[imgurl]"></a></div>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
--> 
    
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider4').bxSlider({
            slideWidth: 200,
            minSlides: 4,
            maxSlides: 4,
      moveSlides: 1,
      startSlide: 1,
            slideMargin: 10
          });

 
        });
       
    </script>

</div>



 </div>
 <!-- left_area -->



<!--
EOT;
require_once template('right_area');
echo <<<EOT
-->

							
 
 <!-- right_area -->
</div>


<div class="wrapper clx transition3">
<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[331][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">

<!--
EOT;
$metlist_array = methtml_getarray('331', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('331', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[332][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('332', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('332', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[333][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('333', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('333', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[334][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('334', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('334', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	

	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[335][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('335', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('335', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[336][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('336', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('336', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[337][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('337', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
$metlist_array = methtml_getarray('337', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->
	
	
	<div class="area_4colum_block_16 m_m1">
      <div class="area_4colum_block1_title clx">
        <h3>机关动态</h3><a class="more_a" href="{$class_index[338][url]}" target="_blank">MORE<i></i></a>
        <ul class="more_ul">
<!--
EOT;
$metlist_array = methtml_getarray('338', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
  echo <<<EOT
-->
<li class="more_li">
<a href="$val[url]" target="_blank">$val[title]</a>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div> 
      <div class="clx content_4colum_block_ff">
        <ul>
<!--
EOT;
 
 
$metlist_array = methtml_getarray('338', '', '', '', '5');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
<li class="clx">
<a href="$val[url]" target="_blank">$val[title]...</a><span>$val[updatetime]</span>
</li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
        </ul>
      </div>
      
   </div>
	<!-- area_4colum_block_16 -->	
	
</div>


<div class="left_area_no2 clx">
 <img src="{$img_url}dd.jpg" alt="" class="img_max_show">
</div>





<div class="wrapper count clx">

<div class="fl col-50">

<div class="data_info">总队处室信息数据统计</div>

<div class="side_bar_80">

<div class="rang_info">处室信息发布排行统计</div>
<div>
<table id="tfhover" class="tftable" border="1">

<tr>
<th>排序</th>
<th>处室</th>
<th>上月采用</th>
<th>本月投稿</th>
<th>本月采用</th>
<th>总量</th>
</tr>

<tr>
<td>1</td>
<td>1</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('331','com','','','9999');
foreach($metlist_array as $key=>$val3){
$ky++;
}
echo <<<EOT
-->
<td>{$ky}</td>




<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('331','','','','9999');
foreach($metlist_array as $key=>$val3){
$k++;
}
echo <<<EOT
-->
<td>{$k}</td>

</tr>

<tr>
<td>2</td>
<td>2</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('332','com','','','9999');
foreach($metlist_array as $key=>$val3){
$aya++;
}
echo <<<EOT
-->
<td>{$aya}</td>


<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('332','','','','9999');
foreach($metlist_array as $key=>$val3){
$aa++;
}
echo <<<EOT
-->
<td>{$aa}</td>
</tr>

<tr>
<td>3</td>
<td>3</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('333','com','','','9999');
foreach($metlist_array as $key=>$val3){
$byb++;
}
echo <<<EOT
-->
<td>{$byb}</td>



<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('333','','','','9999');
foreach($metlist_array as $key=>$val3){
$bb++;
}
echo <<<EOT
-->
<td>{$bb}</td>
</tr>

<tr>
<td>4</td>
<td>4</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('334','com','','','9999');
foreach($metlist_array as $key=>$val3){
$cyc++;
}
echo <<<EOT
-->
<td>{$cyc}</td>



<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('334','','','','9999');
foreach($metlist_array as $key=>$val3){
$cc++;
}
echo <<<EOT
-->
<td>{$cc}</td>
</tr>






</div>

</table>
</div>
</div><!--side_bar_80-->



</div><!--col-50-->



<div class="fr col-50">

<div class="data_info">总队处室信息数据统计</div>

<div class="side_bar_80">

<div class="rang_info">处室信息发布排行统计</div>
<div>
<table id="tfhover2" class="tftable" border="1">

<tr>
<th>排序</th>
<th>处室</th>
<th>上月采用</th>
<th>本月投稿</th>
<th>本月采用</th>
<th>总量</th>
</tr>

<tr>
<td>1</td>
<td>5</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('335','com','','','9999');
foreach($metlist_array as $key=>$val3){
$dyd++;
}
echo <<<EOT
-->
<td>{$dyd}</td>



<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('335','','','','9999');
foreach($metlist_array as $key=>$val3){
$dd++;
}
echo <<<EOT
-->
<td>{$dd}</td>
</tr>

<tr>
<td>2</td>
<td>6</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('336','com','','','9999');
foreach($metlist_array as $key=>$val3){
$fyf++;
}
echo <<<EOT
-->
<td>{$fyf}</td>


<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('336','','','','9999');
foreach($metlist_array as $key=>$val3){
$ee++;
}
echo <<<EOT
-->
<td>{$ee}</td>
</tr>

<tr>
<td>3</td>
<td>7</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('337','com','','','9999');
foreach($metlist_array as $key=>$val3){
$fyf++;
}
echo <<<EOT
-->
<td>{$fyf}</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('337','','','','9999');
foreach($metlist_array as $key=>$val3){
$ff++;
}
echo <<<EOT
-->
<td>{$ff}</td>
</tr>

<tr>
<td>4</td>
<td>8</td>
<td>0</td>
<td>1</td>
<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('338','com','','','9999');
foreach($metlist_array as $key=>$val3){
$gyg++;
}
echo <<<EOT
-->
<td>{$gyg}</td>


<!--
EOT;
$k = 0;
$metlist_array=methtml_getarray('338','','','','9999');
foreach($metlist_array as $key=>$val3){
$gg++;
}
echo <<<EOT
-->
<td>{$gg}</td>
</tr>




</div>

</table>
</div>
</div><!--side_bar_80-->



</div><!--col-50-->



</div>








<!--
EOT;

$usernameid = $_SESSION['usernameid'];
$newsarray = methtml_getnewsarray($usernameid);

if (is_array($newsarray)) {
	
	
	if (strstr($newsarray['signnerid'], $usernameid) ==false) {
		$_M['signcontent']=$newsarray['content'];
		$_M['signhtml'] = "<div id=\"sender\"><input type=\"submit\" value=\"开始签收\" id=\"send\" style=\"color: #0606fe;margin-bottom: 10px;\" ></div>";
	} else {
		$_M['signhtml'] ="<div id=\"alert\"  >您已经签收过了。</div>";
	}
}
global $_M;
methtml_getsign($newsarray['id']);
methtml_getunsign($newsarray['id']);


echo <<<EOT
-->


<style>
#last-flash .bx-controls-direction{display:block;}
.gunimp_content li{list-style:none}
</style>

<div class="wrapper clx" id="last-flash">
	<div class="clx gunimp_title">
<h3 class="fl gundong"></h3>
<a href="{$class_index[9][url]}" target="_blank" class="fr clx">MORE>></a>
 </div>
 <div class="clx gunimp_content">
 	 <div class="clx slider24">
<!--
EOT;
$metlist_array = methtml_getarray('9', '', '', '', '');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
	echo <<<EOT
-->
 	  	 	<div class="slide">
 	     <a href="$val[url]"><img src="$val[imgurl]" alt="" class="img_max_show"></a>	
 	 </div>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->
 	 </div>
 </div>
</div>


    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider24').bxSlider({
             slideWidth: 223,
             auto: true,
            minSlides: 4,
            maxSlides: 4,
            moveSlides: 1,
            startSlide: 1,
            slideMargin: 20
          });
        $("#alert").hide();
		
        $("#send").click(function(){
            $.get("/sign/index.php?a=doindex",{
                newsid:'{$newsarray['id']}'
            },function(data,textStatus){
                $("#resText").html(data);
                $("#sender").hide();
                $("#alert").show();
                 window.location.reload();
            });
        });
        });
    </script>



<script type="text/javascript" src="{$img_url}js/hj.js"></script>
<!--<script type="text/javascript" src="{$img_url}js/jss.js"></script>-->

  <div id="w" style="display:none">
    <div id="content">


      <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">红头文件</a></center>
    </div>
  </div>
<script>
  jQuery(function($) {
        //给所有A标签绑定点击触发事件
        $(function(){
          $('a.flatbtn').click();
        })
        $('.area_4colum_block1_title').hover(function(){
          $(this).find('.more_ul').css("display","block");
        },function(){
            $(this).find('.more_ul').css("display","none");
        });        
    });

    function colselean_overlay(){
      $('#lean_overlay').click();
    }

    function preview(oper)         
    {  
      if (oper < 10)  
      {  
        bdhtml=window.document.body.innerHTML;//获取当前页的html代码  
        $(function(){
          $('#dayinDiv').remove()
          window.document.body.innerHTML="<link href='templates/metx5/images/css/hb.css' rel='stylesheet'>"+$('#loginmodal').html();
        })
        window.print();  
        window.document.body.innerHTML=bdhtml;  
      } else {  
        window.print();  
      }  
      window.location.reload();
    }  
</script>  

 <div id="loginmodal" style="display:none;">

</head>
<body>

        <section class="met_module2 clx">
<div class="clx" style="margin: 0 0 38px;">

<span class="met_time" style="float:left;display:block">发布时间：2016-11-16 23:32:57</span>   

  <span class="met_source"><a href="http://139.196.204.159/police/" title="陕西交警队">陕西交警队</a></span>
        <span class="met_hits">阅读 <span class="met_Clicks"></span></span>

<div class="clx" id="dayinDiv" style="float:right">
【<a href="javascript:preview(1) ">打印</a>】
【<a href="javascript:colselean_overlay()">关闭</a>】

</div>


</div>
<div class="ref">
<div class="gonganbu">
   中华人民共和国公安部
</div>
<span>公交局 (2016) 465号</span>
</div>

            <h1 class="met_title" style="    padding: 40px 0 34px;">重要文件</h1>

            <div class="met_editor clx">
            <div>
            
<div>
{$_M['signcontent']}
      {$_M['signhtml']}

	<div id="alert">您已经签收过了。</div>
    <div style="background-color: #d3e9ff;width: 100%;height: 61px;font-size: 14px;line-height: 31px;padding-left: 8px" >
    <p>未签收人:</p> 
        <p id="resTextno">{$_M['unsignnername']}</p></div>
    <div style="background-color: #DDDDFF;width:100%;height:50px;font-size: 14px;line-height: 100%;padding: 8px 8px;margin-top: 8px;display: block;float: none">
        <p>已签收人:</p><br/>
        <p id="resText">{$_M['signnername']} </p></div>
</div>
            
            <div id="metinfo_additional"></div></div>
            <div class="met_clear"></div>
<div class="clx fr fz">

<div class="fz2">
<p>公安部交通管理局</p>
<p>2016-11-16 23:32:57</p>
</div>
</div>

            </div>



        </section>

  
    
    <div class="met_clear"></div>


</body></html>
  </div>

<script type="text/javascript">
$(function (){
  $('#loginform').submit(function(e){
    return false;
  });

  $('#modaltrigger').leanModal({ top: 10, overlay: 0.45, closeButton: ".hidemodal" });
});

<!--
EOT;
//链接数据库
// $conn = mysql_connect("localhost","root","root");
// mysql_select_db('shaanxijj',$conn);
$conn = mysql_connect("localhost","root","root");
//选择要操作的数据库
mysql_select_db('shaanxijj',$conn);
//设置操作数据库编码格式
mysql_query("set names utf8");
$re = mysql_query("SELECT id FROM pol_news where is_tc = 1");
$i = 1;
while($val = mysql_fetch_array($re)){
echo <<<EOT
-->
//alert(1);
window.open('{$_M[url][site]}index/shownews.php?lang=cn&id={$val[id]}','target{$i}','param{$i}');
    
<!--
EOT;
$i++;
}	
mysql_close();
echo <<<EOT
-->	 

</script>


    <!--display: block;
    left: 50%;
    position: fixed;
    opacity: 1;
    z-index: 11000;
    margin-left: -520px;
    top: 10px;-->




<!--<script>
function a(){
var div=document.getElementById("loginmodal");
div.style.display="block";

div.style.left="50%";

}
window.onload=function(){
setTimeout("a()",1000);
}
</script>-->


<style>
#lean_overlay {
    position: fixed;
    z-index:100;
    top: 0px;
    left: 0px;
    height:100%;
    width:100%;
    background: #000;
    display: none;
}


#loginmodal {
      overflow-y: scroll;
    height: 600px;
  width: 1000px;
  padding: 15px 20px;
  background: #f3f6fa;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
}

#loginform { /* no default styles */ }

#loginform label { display: block; font-size: 1.1em; font-weight: bold; color: #7c8291; margin-bottom: 3px; }


.txtfield {
  display: block;
  width: 100%;
  padding: 6px 5px;
  margin-bottom: 15px;
  font-family: 'Helvetica Neue', Helvetica, Verdana, sans-serif;
  color: #7988a3;
  font-size: 1.4em;
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.8);
  background-color: #fff;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#edf3f9), to(#fff));
  background-image: -webkit-linear-gradient(top, #edf3f9, #fff);
  background-image: -moz-linear-gradient(top, #edf3f9, #fff);
  background-image: -ms-linear-gradient(top, #edf3f9, #fff);
  background-image: -o-linear-gradient(top, #edf3f9, #fff);
  background-image: linear-gradient(top, #edf3f9, #fff);
  border: 1px solid;
  border-color: #abbce8 #c3cae0 #b9c8ef;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.4);
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.4);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25), 0 1px rgba(255, 255, 255, 0.4);
  -webkit-transition: all 0.25s linear;
  -moz-transition: all 0.25s linear;
  transition: all 0.25s linear;
}

.txtfield:focus {
  outline: none;
  color: #525864;
  border-color: #84c0ee;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), 0 0 7px #96c7ec;
  -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), 0 0 7px #96c7ec;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), 0 0 7px #96c7ec;
}
</style>
 
 

 

<!--
EOT;
if($usernameid=='' || $usernameid == 9 || $usernameid == 11){
echo <<<EOT

-->

<script>
$(window).load(function (){ 
 colselean_overlay();
});
</script>
<!--
EOT;
}
 
require_once template('foot');
?>