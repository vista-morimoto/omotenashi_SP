$(function() {
	//�Z���N�^�[�L���b�V��
	var HtmlBody = $("html,body");
	var eventcash = $("#EventWrapper");
	var oneeventcash = $("#EventWrapper div.OneEvent");
	var searchDays = $("#SearchDay li");

	// ���ׂČ���{�^���͈�U��\��
	$(".LookAll",eventcash).hide();
	
	//Special�A�C�R���̕\��
	$(".Special").append("<img src='img/icoSpecial.png' alt='�X�y�V�������j���[' class='icoSpecial' />");

	// ��ނ���I��
	$("div#SearchBox .searchCat").click(function() {
		var dispCategory = $(this).attr("data-id");
		var dispCategoryS = "." + dispCategory;
		
			if ($.browser.msie && $.browser.version < 9){ 
				//IE8�ȉ�
					$("div.OneEvent").hide();
					$("h3",eventcash).hide();
					
					$("div.OneEvent").filter("." + dispCategory).show();
					$("h3",dispCategoryS).show();
					
					$("h3",oneeventcash).hide();
					$(".LookAll",eventcash).show();
				}else{
				//����ȊO
					//$("#EventWrapper > div").fadeOut("slow");
					//$(dispCategoryS).fadeIn("slow");
					$("div.OneEvent").fadeOut("slow");
					$("h3",eventcash).fadeOut("slow");

					$("div.OneEvent").filter("." + dispCategory).fadeIn("slow");
					$("h3",dispCategoryS).show();
					
					$("h3",oneeventcash).hide();
					$(".LookAll",eventcash).show();
				}		
		
		
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
		$("#SelectTit").html("<strong>"+$(this).attr("title")+"</strong>�̃C�x���g��\�����Ă��܂�");
		$("#SelectTit").fadeIn("slow");
	});	
	
	//�N���b�N���̔w�i�F
	$("div#SearchBox #btnTrimmer").click(function(){
		$("#SelectTit").css("background-color","#FFB039");
	});		
	$("div#SearchBox #btnNurse").click(function(){
		$("#SelectTit").css("background-color","#FE7C97");
	});		
	$("div#SearchBox #btnTrainer").click(function(){
		$("#SelectTit").css("background-color","#6EB8DB");
	});//			
	
	//�S������
	$(".LookAll",eventcash).click(function(){
		if ($.browser.msie && $.browser.version < 9){ 
			//IE8�ȉ�
			oneeventcash.show();
			$("h3",oneeventcash).hide();
			$("#EventWrapper > div > h3").show(); 
		  }else{
			//����ȊO
			oneeventcash.fadeIn("slow");
			$("h3",oneeventcash).fadeOut("slow");
			$("#EventWrapper > div > h3").fadeIn("slow");
			
			}		
		$(".LookAll",eventcash).hide();
		$("#SelectTit").fadeOut("slow");		
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
	});//	

	// �t�B���^�[���ꂽ�R���e���c�ւ̒��ڃA�N�Z�X
	var url = document.URL;
	if (url.indexOf("#") != -1) {
		var anotation = url.substr(url.indexOf("#") + 1);
		if (anotation.indexOf("/") == -1) {
		// ���t�ł͂Ȃ��ꍇ
			$("div#SearchBox .searchCat[data-id='" + anotation + "']").trigger("click");
		} else {
		// ���t�̏ꍇ
			$("div#SearchDay li[data-id='" + anotation + "']").trigger("click");
		}
	}

});