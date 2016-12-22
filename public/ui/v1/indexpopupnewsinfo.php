<!--<?php
require_once template('indexhead'); 

$met_newsnext=methtml_prenextinfo(1,1);
echo <<<EOT
-->
             <!--签到人-->
<script src="../public/js/jquery-1.11.1.min.js"></script>
<script>
    $(function () {
        $("#alert").hide();
       
            
        $("#send").click(function(){
            $.get("../sign/index.php?a=doindex",{
                newsid:'{$news['id']}'
            },function(data,textStatus){
                $("#resText").html(data);
                $("#sender").hide();
                $("#alert").show();
                 window.location.reload();//刷新当前页面.
            });
        })
    })
</script>
<!--wenzhang s-->
<!--
EOT;
if($news[show_templet] == 1 || empty($news[show_templet])){
echo <<<EOT
-->
<section class="met_module2 clx">
            <h1 class="met_title">{$news[title]}</h1>
			<div class="met_infos">
				<span class="met_time">{$news[updatetime]}</span>
				<span class="met_source"><a href="{$index_url}" title="{$met_webname}">{$met_webname}</a></span>
				<span class="met_hits">{$_M['word']['read']} <span class="met_Clicks"></span></span>
			</div>
            <div class="met_editor clx">
            {$news[content]}<!--{$news['noarr']}-->
     
<!--
EOT;
if($news['is_qs']){
echo <<<EOT
-->     
<div>
    {$_M['signhtml']}
	<div id="alert">您已经签收过了。</div>
    <div style="background-color: #d3e9ff;width: 100%;height: 61px;font-size: 14px;line-height: 31px;" >
    <p style="padding-left: 8px">未签收人:</p> 
        <p id="resTextno" style="padding-left: 8px">{$_M['unsignnername']}</p></div>
    <div style="background-color: #DDDDFF;width:100%;height:50px;font-size: 14px;line-height: 100%;margin-top:8px;padding: 8px 0 0 0;display: block;float: none">
        <p style="padding-left: 8px">已签收人:</p><br/>
        <p id="resText" style="padding-left: 8px">{$signnername}</p></div>
</div>
<div class="clx fr fz">
<div class="fz2">
<p>公安部交通管理局</p>
<p>{$val[updatetime]}</p>
</div>
</div>
<!--
EOT;
}
echo <<<EOT
-->        
</section>

<!--wenzhang e-->
<!--
EOT;
//红头文件
}else if($news[show_templet] == 2){
echo <<<EOT
-->
<section class="met_module3 clx">
<div class="title">陕西省公安厅</div>
<div class="title_split"></div>
<div class="gj_title">{$news[gj_title]}</div>
<div class="news_title">{$news[title]}</div>
<div class="content">{$news[content]}</div>
<div class="foot_title">陕西省公安厅交警总队</div>
<!--
EOT;
$showUpdateTime = date("Y年m月d日",strtotime($news[updatetime]));
echo <<<EOT
-->
<div class="public_date">{$showUpdateTime}</div>
<div class="cs">抄送：公安部交管局，厅党委，张副厅长，厅办公室，研究室<br/>本局局长，政委，副局长，各处，室，队</div>
<div class="title_split"></div>

<!--
EOT;
if($news['is_qs']){
echo <<<EOT
-->     
<div>
      {$_M['signhtml']}
	<div id="alert">您已经签收过了。</div>
    <div style="background-color: #d3e9ff;width: 100%;height: 61px;font-size: 14px;line-height: 31px;" >
    <p style="padding-left: 8px">未签收人:</p> 
        <p id="resTextno" style="padding-left: 8px">{$_M['unsignnername']}</p></div>
    <div style="background-color: #DDDDFF;width:100%;height:50px;font-size: 14px;line-height: 100%;margin-top:8px;padding: 8px 0 0 0;display: block;float: none">
        <p style="padding-left: 8px">已签收人:</p><br/>
        <p id="resText" style="padding-left: 8px">{$signnername}</p></div>
</div>
<div class="clx fr fz">
<div class="fz2">
<p>公安部交通管理局</p>
<p>{$val[updatetime]}</p>
</div>
</div>
<!--
EOT;
}
echo <<<EOT
-->
</section>
<!--
EOT;
//刊物
}else if($news[show_templet] == 3){
echo <<<EOT
-->
<div class="met_module4_box">
<section class="met_module4 clx">
<div class="met_module4_sectionbox">
<div class="title">陕西省公安厅</div>
<div class="version">{$news[book_version]}</div>
<div class="note clx">
<div class="note_left">陕西省公安厅书刊部</div>
<!--
EOT;
$showUpdateTime = date("Y-m-d",strtotime($news[updatetime]));
echo <<<EOT
-->
<div class="note_right">{$showUpdateTime}</div>
</div>
<div class="title_split"></div>
<div class="news_title">{$news[title]}</div>
<div class="content">{$news[content]}</div>
<div class="foot_split"></div>
</div>
    
<!--
EOT;
if($news['is_qs']){
echo <<<EOT
-->     
<div>
      {$_M['signhtml']}
	<div id="alert">您已经签收过了。</div>
    <div style="background-color: #d3e9ff;width: 100%;height: 61px;font-size: 14px;line-height: 31px;" >
    <p style="padding-left: 8px">未签收人:</p> 
        <p id="resTextno" style="padding-left: 8px">{$_M['unsignnername']}</p></div>
    <div style="background-color: #DDDDFF;width:100%;height:50px;font-size: 14px;line-height: 100%;margin-top:8px;padding: 8px 0 0 0;display: block;float: none">
        <p style="padding-left: 8px">已签收人:</p><br/>
        <p id="resText" style="padding-left: 8px">{$signnername}</p></div>
</div>
<div class="clx fr fz">
<div class="fz2">
<p>公安部交通管理局</p>
<p>{$val[updatetime]}</p>
</div>
</div>
<!--
EOT;
}
echo <<<EOT
-->
</section>
</div>
<!--
EOT;
}
echo <<<EOT
-->

<div class="met_clear"></div>
</div>
<div class="met_tools">
    <div class="clx" style="    position: absolute;
        left: 34px;
        top: -6px;">
        【<a href="javascript:window.print()">打印</a>】
        【<a href="javascript:close()">关闭</a>】
    </div>
	<ul class="met_page">
		<li class="met_page_preinfo"><span>{$lang_Previous}</span><a href='{$preinfo[url]}'>{$preinfo[title]}</a></li>
		<li class="met_page_next"><span>{$lang_Next}</span><a href='{$nextinfo[url]}'>{$nextinfo[title]}</a></li>
	</ul>
</div>
<!--
EOT;
require_once template('gap');
?>-->