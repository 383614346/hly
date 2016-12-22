<!--<?php
 

$met_newsnext=methtml_prenextinfo(1,1);
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
            {$news[content]}{$news['noarr']}
              <!--签到人-->
<script src="http://www.w3school.com.cn/jquery/jquery-1.11.1.min.js"></script>
<script>
    $(function () {
        $("#alert").hide();
       
            
        $("#send").click(function(){
            $.get("/sign/index.php?a=doindex",{
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
<div>
      {$_M['signhtml']}
	<div id="alert">您已经签收过了。</div>
    <div style="background-color: #d3e9ff;width: 100%;height: 61px;font-size: 14px;line-height: 31px;padding-left: 8px" >
    <p>未签收人:</p> 
        <p id="resTextno">{$_M['unsignnername']}</p></div>
    <div style="background-color: #DDDDFF;width:100%;height:50px;font-size: 14px;line-height: 100%;padding: 8px 8px;margin-top: 8px;display: block;float: none">
        <p>已签收人:</p><br/>
        <p id="resText">{$signnername}</p></div>
</div>


            <div class="met_clear"></div>
<div class="clx fr fz">
<div class="fz2">
<p>公安部交通管理局</p>
<p>{$val[updatetime]}1111111</p>
</div>
</div>

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
        </section>
      
        
<!--
EOT;
require_once template('gap');
require_once template('foot');


?>