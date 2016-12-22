define(function(require, exports, module) {

	var $ = require('jquery'); //加载Jquery 1.11.1
	var common = require('common'); //加载公共函数文件（语言文字获取等）
	
	/*
	 *展开子栏目	 
	 *
	 *
	 */
	function openc(d,t){
		var v = d.parent("td").next("td").find("input").val();
		if(t==1){
			$("tr.big_"+v).show();
			d.removeClass("ipm_out");
			d.addClass("ipm_on");
		}else{
			var n = $("tr.big_"+v);
			n.hide();
			n.each(function(){
				var k = $(this).find("td:eq(0) i.fa");
				if(k.length>0)openc(k);
			});
			d.removeClass("ipm_on");
			d.addClass("ipm_out");
		}
		common.ifreme_methei();//高度重置
	}

	$(document).on('click',".ui-table i.fa",function(){
		if($(this).parent('th').length>0){ //统一展开/隐藏
			var t = 1;
			if($(this).attr('class').indexOf('ipm_on')!='-1'){
				t = '';
			}
			$('.ui-table td i.fa').each(function(){
				openc($(this),t);
			});
			if(t==1){
				$(".ui-table th i.fa").removeClass("ipm_out");
				$(".ui-table th i.fa").addClass("ipm_on");
			}else{
				$(".ui-table th i.fa").removeClass("ipm_on");
				$(".ui-table th i.fa").addClass("ipm_out");
			}
		}else{
			var v = $(this).parent("td").next("td").find("input").val();
			if($("tr.big_"+v).is(":hidden")){
				openc($(this),1);
			}else{
				openc($(this));
			}
		}
	});
	
	/*
	 *增加栏目
	 *
	 *
	 */
	var ai = 0;
	$(document).on('click',".ui-table tr td .add",function(){
		
		var t = $(this).parents("tr"),d,p=2;
		
		//分析增加的位置
		var v = t.find("input[name='id']").val();
			d = $("tr.big_"+v).last();
		if(d.length>0){
			var dv = d.find("input[name='id']").val();
			var dd = $("tr.big_"+dv).last();
			if(dd.length>0)d = dd;
			openc(t.find("td i.fa"),1);
		}else{
			d = t;
		}
		
		//分析新增的栏目级别
		if(t.attr('class').indexOf('list_2')!='-1'){
			p = 3;
		}
		
		//AJAX获取HTML并追加到页面
        d.after('<tr><td colspan="'+d.find('td').length+'">Loading...</td></tr>');
		$.ajax({
			url: own_form+'a=do_table_add_list',//新增行的数据源
			type: "POST",
			data: 'ai=' + ai+'&big='+v+'&tp='+p,
			success: function(data) {
				d.next("tr").remove();
				d.after(data);
				d.next("tr").find("input[type='text']").eq(0).focus();
				common.ifreme_methei();//高度重置
			}
		});
 
		ai++;
		return false;
		
	});
	
});
