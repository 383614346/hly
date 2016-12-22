<?php
/**
 
 */
defined('IN_MET') or exit();
load::sys_class('web');
class sign extends web {
	public function doindex(){
		global $_M;
		echo $_GET['user'];
		echo "签收成功<script>self.location=document.referrer</script>";
	}
}
