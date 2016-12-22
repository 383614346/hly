<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');

if($_M[config][met_agents_type] < 2) {
	$copyright_info = $_M[word][copyright];
	$metinfo_info = $_M[word][metinfo];
	$metinfo_ver = $_M[config][metcms_v];
} else {
	$copyright_info = $_M['word'][copyright];
	$metinfo_info = $_M['word'][metinfo];
	$metinfo_ver = $_M[config][metcms_v];
}
echo <<<EOT
-->
<script>
var ownlangtxt = {
	"be_updated":"{$_M[word][be_updated]}",
	"checkupdate":"{$_M[word][checkupdate]}",
	"latest_version":"{$_M[word][latest_version]}"
};
</script>
<div class="v52fmbx" data-metcms_v="{$_M[config][metcms_v]}" data-patch="{$_M[config][met_patch]}">


	<h3 class="v52fmbx_hr">{$_M[word][upfiletips38]}</h3>
	<dl>
		<dt>{$_M['word']['Operating']}</dt>
		<dd>
			{$agens}
		</dd>
	</dl>
	<dl>
		<dt>WEB{$_M['word']['the_server']}</dt>
		<dd>{$web}</dd>
	</dl>
	<dl>
		<dt>PHP{$_M['word']['the_version']}</dt>
		<dd>{$php}</dd>
	</dl>
	<dl>
		<dt>MySQL{$_M['word']['the_version']}</dt>
		<dd>{$mysql}</dd>
	</dl>

</div>
<div class="remodal met_uplaod_remodal" data-remodal-id="modal"><div class="temset_box"></div></div>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>