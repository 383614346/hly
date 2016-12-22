<!--<?php
echo <<<EOT
-->

<div class="right_area clx">
<div class="notice_1 clx">
<div class="clx notice_title">
<h3 class="fl">值班公告1</h3>
<!--
EOT;
$datetime = date(Y).'年'.(date(m)-1).'月'.date(d).'日';
echo <<<EOT
-->
<span class="fr">{$datetime}</span>
</div>
<div class="clx notice_comment">
<!--
EOT;
//链接数据库
$conn = mysql_connect("police","police","police");
//选择要操作的数据库
mysql_select_db('police',$conn);
//设置操作数据库编码格式
mysql_query("set names utf8");

$re = mysql_query("SELECT * FROM pol_dutytable ORDER BY id DESC LIMIT 0,1");

while($rs = mysql_fetch_assoc($re)){
	$dutys[] = $rs;
	
}
echo <<<EOT
-->
<p>代班局领导：{$dutys[0][dbld]}</p>
<p>总值班领导：{$dutys[0][zzbld]}</p>
<p>值班领导：{$dutys[0][zbld]}</p>
<p><a href="{$_M[url][site]}zj/shownews.php?lang=cn&id=262">值班表>></a></p>
<img src="{$img_url}sad.jpg" alt="">

<div class="clx fl" style="margin-left: 12px;">
	
<!--
EOT;
if($_SESSION['usernameid'] != null){
$usernameid = $_SESSION['usernameid'];

$re = mysql_query("SELECT * FROM pol_admin_table WHERE id = \"$usernameid\"");
while($rs = mysql_fetch_assoc($re)){
	$username = $rs['admin_id'];
}

echo <<<EOT
-->
<p>当前登录用户 ：{$username}</p>
<br />
<div class="fl">
	<a class="submit" href="{$_M[url][site]}admin/login/login_out.php">退出登录</a>
	<a class="submit" href="{$_M[url][site_admin]}">前往后台</a>
</div>

<!--
EOT;
}else{
echo <<<EOT
-->
<form method="post" action="{$_M[url][site_admin]}login/login_check.php?langset=cn" name="main_login">
					<input type="hidden" name="action" value="login">
<p style="height:22px; margin-top:0px;">

</p>
					<div><label style="width: 50px;">用户名</label><input type="text" class="text" name="login_name" value=""></div>
					<div><label style="width: 50px;">密码</label><input type="password" class="text" name="login_pass"></div>
					
					<div class="fl">
						<input type="submit" name="Submit" class="Submit" value="登录">
					</div>
				</form>
<!--
EOT;
}
echo <<<EOT
-->



</div><!-- notice_comment -->



</div>
<!--notice_1-->

<div class="notice_2 clx">
<!--
EOT;
$metlist_array = methtml_getarray('350', '', '', '', '1');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
echo <<<EOT
-->	
<img src="$val[imgurl]" alt="" class="img_full_show"/>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->	 
</div>


<div class="notice_3 clx">
<div class="clx notice_title">
<h3 class="fl">视频动态</h3>
<a href="{$class_index[349][url]}" class="video_more clx"><span class="fr">MORE</span></a>
</div>

<!--
EOT;
$metlist_array = methtml_getarray('349', '', '', '', '1');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
echo <<<EOT
-->	

<div class="video_content"><a href="$val[url]"><img src="$val[imgurl]" alt="" class=""/></a></div>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->	  




</div> <!--notice_3-->




<script type="text/javascript" src="{$img_url}js/scroll.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('.video_content li').addClass('lieven');
})
$(function(){
$(".video_content").myScroll({
speed:100, //数值越大，速度越慢
rowHeight:72 //li的高度
});
});
</script>



<div class="notice_4 clx">


<div class="clx notice_title">
<h3 class="fl">滚动专题</h3>
<a href="{$class_index[347][url]}" class="video_more clx"><span class="fr">MORE</span></a>
</div>


<div class="video_content clx" style="height:302px;overflow:hidden;">

<ul class="clx" style="margin-top: -44px;">


<!--
EOT;
$metlist_array = methtml_getarray('347', '', '', '', '');//通过数组标签获取信息数组
foreach ($metlist_array as $key => $val) {//使用PHP循环语句foreach来读取数组中的信息
echo <<<EOT
-->		
<li><a href="$val[url]" target="_blank"><img src="$val[imgurl]" alt="" class=""/></a></li>
<!--
EOT;
}//上面的$val[status]为该信息的状态图标：置顶/热门/最新（如果该信息有的话就会显示图标）
echo <<<EOT
-->	  



</div></ul>
</div> <!--notice_4-->



<div class="notice_5 clx mt10">
<div class="clx notice_title">
<h3 class="fl">分类链接</h3>
<a href="" class="video_more clx"><span class="fr">MORE</span></a>
</div>
<div class="select_content clx">
<select name="" id="">
<option value="">公安部</option>
</select>

<select name="" id="">
<option value="">各省厅</option>
</select>

<select name="" id="">
<option value="">省厅内</option>
</select>

<select name="" id="">
<option value="">业务系统</option>
</select>

</div>
</div> <!--notice_5-->







</div>
<!--
EOT;
?>