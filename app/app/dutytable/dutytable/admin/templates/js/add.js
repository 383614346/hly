define(function(require, exports, module) {

	var $ = require('jquery'); //����Jquery 1.11.1
	var common = require('common'); //���ع��������ļ����������ֻ�ȡ�ȣ�
	
	/*
	 *չ������Ŀ	 
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
		common.ifreme_methei();//�߶�����
	}

	$(document).on('click',".ui-table i.fa",function(){
		if($(this).parent('th').length>0){ //ͳһչ��/����
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
	 *������Ŀ
	 *
	 *
	 */
	var ai = 0;
	$(document).on('click',".ui-table tr td .add",function(){
		
		var t = $(this).parents("tr"),d,p=2;
		
		//�������ӵ�λ��
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
		
		//������������Ŀ����
		if(t.attr('class').indexOf('list_2')!='-1'){
			p = 3;
		}
		
		//AJAX��ȡHTML��׷�ӵ�ҳ��
        d.after('<tr><td colspan="'+d.find('td').length+'">Loading...</td></tr>');
		$.ajax({
			url: own_form+'a=do_table_add_list',//�����е�����Դ
			type: "POST",
			data: 'ai=' + ai+'&big='+v+'&tp='+p,
			success: function(data) {
				d.next("tr").remove();
				d.after(data);
				d.next("tr").find("input[type='text']").eq(0).focus();
				common.ifreme_methei();//�߶�����
			}
		});
 
		ai++;
		return false;
		
	});
	
});
