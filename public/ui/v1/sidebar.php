<!--<?php
$sidebar=metlabel_sidebar(0);//内页侧栏标签
$sidebar_title=metlabel_sidebar(1);//内页侧栏标题
//侧栏显示条件：存在子栏目||文章详情页&&不是产品详情页
$asideok = ($sidebar||($class_list[$classnow][module]==2&&$id))&&!($class_list[$classnow][module]==3&&$id)?1:0;
$section = $asideok?'':'met_section_asidenone';
$sehed   = $id&&$class_list[$classnow][module]!=1?'met_section_sehed':'';
echo <<<EOT
-->



<section class="met_section met_section_asidenone clearfix">
<!--
EOT;
if($id&&$class_list[$classnow][module]!=1){
echo <<<EOT
-->
		<section class="met_section_head">
			<a href="{$index_url}" title="{$lang_home}">{$lang_home}</a> &gt; {$nav_x[name]}
		</section>
<!--
EOT;
}
echo <<<EOT
-->



    <article>
		<div class="met_article">
<!--
EOT;
if(!$id||$class_list[$classnow][module]==1){
echo <<<EOT
-->
		<section class="met_article_head">
	


			  <div class="clx position_y">
    	<span>你的位置 : </span><a href="{$index_url}" title="{$lang_home}">{$lang_home}</a> <i>></i> {$nav_x[name]}
    </div>
		</section>
<!--
EOT;
}
echo <<<EOT
-->
		<div class="met_clear"></div>
<!--
EOT;
?>