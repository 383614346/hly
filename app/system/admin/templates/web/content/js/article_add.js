define(function(require, exports, module) {
	var $ = jQuery = require('jquery');
	var common = require('common');
	$("input[name='addtype']").change(function(){
		if($(this).val()==2){
			$("input[name='addtime']").focus();
		}
	});
//	$("input[name='show_templet']").click(function(){
//		if($(this).val()==2){
//			$("#dl_gj_title").show();
//		}else{
//			$("#dl_gj_title").hide();
//		}
//		if($(this).val()==3){
//			$("#dl_book_version").show();
//		}else{
//			$("#dl_book_version").hide();
//		}
//	});
//	var selectShowTemplet = $('input:radio[name=show_templet]:checked').val();
//	$("#dl_gj_title").hide();
//	$("#dl_book_version").hide();
//	if(selectShowTemplet == 2){
//		$("#dl_gj_title").show();
//	}else if(selectShowTemplet == 3){
//		$("#dl_book_version").show();
//	}
	//签收
//	$("input[name='is_qs']").click(function(){
//		if($(this).val()==1){
//			$("#h3_is_qs").show();
//			$("#dl_is_qs").show();
//		}else{
//			$("#h3_is_qs").hide();
//			$("#dl_is_qs").hide();
//		}
//	});
//	var selectIsQs = $('input:radio[name=is_qs]:checked').val();
//	$("#h3_is_qs").hide();
//	$("#dl_is_qs").hide();
//	if(selectIsQs == 1){
//		$("#h3_is_qs").show();
//		$("#dl_is_qs").show();
//	}
});