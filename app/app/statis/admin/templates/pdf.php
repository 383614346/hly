<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
<script src="{$_M[url][own]}admin/templates/js/jquery-3.1.1.min.js" type="application/javascript"></script>
<script src='{$_M[url][own]}admin/templates/js/build/pdfmake.min.js'></script>
<script src='{$_M[url][own]}admin/templates/js/build/vfs_fonts.js'></script>
<script type="application/javascript	">
$(function(){ 
   	pdfMake.fonts = {
            Roboto: {
                normal: 'Roboto-Regular.ttf',
                bold: 'Roboto-Medium.ttf',
                italics: 'Roboto-Italic.ttf',
                bolditalics: 'Roboto-Italic.ttf'
            },
            微软雅黑: {
                normal: 'msyh.ttf',
                bold: 'msyhbd.ttf',
                italics: 'msyh.ttf',
                bolditalics: 'msyhbd.ttf',
            }
      };
	var dd1 = {
	  content: [
	    	{ text: '{$serachTime}', style: 'header' },
	    {
	            style: 'tableExample',
	            table: {
	                body: {$list_json}
	            }
	        }
	  ],
		 defaultStyle: {
		     font: '微软雅黑'
		 }
	};
//
	pdfMake.createPdf(dd1).download('optionalName.pdf');

}); 
</script>

<dl>
<dd class="ftype_description">
	数据正在导出中稍等片刻。。。。
</dd>
</dl>

<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved..
?>