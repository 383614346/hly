<!--<?php
require_once template('head'); 
require_once template('sidebar');
echo <<<EOT
-->
        <div class="met_module2_list detail_list">
			<ul>
<!--
EOT;
foreach($news_list as $key=>$val){
$val['imghtml']     = $lang_met_module2_type==3?"<img src=\"{$thumb_src}dir={$val[imgurl]}&x=90&y=90\" />":'';
$val['i']           = $lang_met_module2_type==1?'<i class="fa fa-caret-right"></i>':'';
$val['description'] = $lang_met_module2_type >1?'<p>'.utf8substr($val['description'],0,200).'</p>':'';
echo <<<EOT
-->



<li class="clx">
<i class="ij"></i>

<a href="{$val[url]}" title="{$val[title]}" {$metblank}>{$val['title']}</a>
<span>{$val['updatetime']}</span> <span><i class="i2j"></i> <em style="font-style:"normal>: {$val[hits]}</em></span>
</li>


<!--
EOT;
}
echo <<<EOT
--> 
			</ul>
			{$page_list}
		</div>



	</div>
    </article>



<!--
EOT;
require_once template('right_area');
echo <<<EOT
-->




    <div class="met_clear"></div>
</section>




<!--
EOT;
require_once template('foot'); 
?>