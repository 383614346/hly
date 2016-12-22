define(function(require, exports, module) {

	var common = require('common'); //加载公共函数文件（语言文字获取等）

	if($(".new_effects").length>0){//判断元素，按需加载
		require.async('own/admin/templates/css/metinfo.css');
		require.async('own/admin/templates/js/add');
	}
	
	$(".metalert").click(function(event){
		event.preventDefault();
		common.metalert({                 //响应式弹窗
			html:'提示文字',              //弹窗内容，支持HTML，如果非ajax获取HTML，请用textarea标签储存弹窗HTML。
			type:'',                      //alert|confirm|window，默认为alert。
			MaxWidth:'',                  //数值，弹窗宽度(默认为400)，屏幕够宽时为此宽度，屏幕不够宽时为屏幕宽度的90%。
			callback:function(buer){},    //type=confirm时有效，回调函数,buer为布尔值。
			LeftTxt:'',                   //type=confirm时有效，默认为'确定'。
			RighTtxt:''                   //type=confirm时有效，默认为'取消'。
		});
	});
	
	$(".metconfirm").click(function(event){
		event.preventDefault();
		common.metalert({
			html:'你有没有信心？',
			type:'confirm',
			LeftTxt:'我有',
			RighTtxt:'我没有',
			callback:function(buer){ 
				if(buer){
					alert(1);
				}else{
					alert(2);
				}
			}
		});
	});
	
	$(".metwindow").click(function(event){
		event.preventDefault();
		common.metalert({
			html:$("#mywindow").val(),
			type:'window',
			MaxWidth:600
		});
	});

});
