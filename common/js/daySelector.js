$(function() {

	//alert("�悤�����I");

	//�Z���N�^�[�L���b�V��
	var HtmlBody = $("html,body");
	var eventcash = $("#EventWrapper");
	var oneeventcash = $("#EventWrapper div.OneEvent");
	var searchDays = $("#SearchDay li");

	// ���ׂČ���{�^���͈�U��\��
	$(".LookAll",eventcash).hide();

	// �C�x���g�̓��t�\��
	$("div.OneEvent[data-day]").each(function() {
		var arrDispDay = [];
		var arrOpenDay = $(this).attr("data-day").split(",");
		for (var i = 0; i < arrOpenDay.length; i++) {
			var dispDay = "";
			var openDay = arrOpenDay[i];

			if (openDay.indexOf("-") == -1) {
			// ���Ԏw��ł͂Ȃ��P�Ǝw��̏ꍇ
				dispDay = getDateString(openDay);
				arrDispDay.push(dispDay);
			} else {
			// ���Ԏw��̏ꍇ
				var arrPeriod = openDay.split("-");
				
				dispDay = getDateString(arrPeriod[0])
				        + "�`" + getDateString(arrPeriod[1]);
				arrDispDay.push(dispDay);
			}
		}

		$(this).find("p.Day strong").html(arrDispDay.join("�A"));
	});
	
	//Special�A�C�R���̕\��
	$(".Special").append("<img src='../../img/event/trial/icoSpecial.png' alt='�X�y�V�������j���[' class='icoSpecial' />");

	// ��ނ���I��
	$("div#SearchBox .searchCat").click(function() {
		var dispCategory = $(this).attr("data-id");
		var dispCategoryS = "." + dispCategory;
		
			if ($.browser.msie && $.browser.version < 9){ 
				//IE8�ȉ�
					$("div.OneEvent").hide();
					
					$("div.OneEvent").filter("." + dispCategory).show();
					
					$(".LookAll",eventcash).show();
				}else{
				//����ȊO
					//$("#EventWrapper > div").fadeOut("slow");
					//$(dispCategoryS).fadeIn("slow");
					$("div.OneEvent").fadeOut("slow");

					$("div.OneEvent").filter("." + dispCategory).fadeIn("slow");
					
					$(".LookAll",eventcash).show();
				}		
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
		$("#SelectTit").html("<strong>"+$(this).attr("title")+"</strong>�̃C�x���g��\�����Ă��܂�");
		$("#SelectTit").fadeIn("slow");
	});

	// ���t����I��
	/**
	 * ���t�̑I��
 	 * <li class="OneEvent" data-id="2012/03/27"></li>
	 */
	/**
	 * �u���b�N�̓��t�w����@
	 * �P�Ǝw��̏ꍇ : <div class="OneEvent" data-day="2012/03/27"></div>
	 * �����w��̏ꍇ : <div class="OneEvent" data-day="2012/03/21,2012/03/24,2012/03/27"></div>
	 * �A���w��̏ꍇ : <div class="OneEvent" data-day="2012/03/21-2012/03/27"></div>
	 * �����w��̏ꍇ : <div class="OneEvent" data-day="2012/03/21,2012/03/20-2012/04/10,2012/04/16"></div>
	 */

	$("div#SearchDay li").click(function() {
		var dispDay = $(this).attr("data-id");
		
		if ($.browser.msie && $.browser.version < 9){ 
				//IE8�ȉ�
				$("div.OneEvent").hide();
				
				$(".LookAll",eventcash).show();
			}else{
			//����ȊO
				$("div.OneEvent").fadeOut("slow");
			
				$(".LookAll",eventcash).show();
			}		
			
		$("div.OneEvent[data-day]").each(function() {
			var arrOpenDay = $(this).attr("data-day").split(",");
			for (var i = 0; i < arrOpenDay.length; i++) {
				var openDay = arrOpenDay[i];

				if (openDay.indexOf("-") == -1) {
				// ���Ԏw��ł͂Ȃ��P�Ǝw��̏ꍇ
					if (openDay == dispDay) {
							if ($.browser.msie && $.browser.version < 9){ 
								//IE8�ȉ�
									$(this).show();
								}else{
								//����ȊO
									$(this).fadeIn("slow");
								}						
						break;
					}
				} else {
				// ���Ԏw��̏ꍇ
					var arrPeriod = openDay.split("-");
					var openDate = new Date(arrPeriod[0]);
					var closeDate = new Date(arrPeriod[1]);
					var dispDate = new Date(dispDay);
					
					if (openDate.getTime() <= dispDate.getTime()
					    && closeDate.getTime() >= dispDate.getTime()) {
							
							if ($.browser.msie && $.browser.version < 9){ 
								//IE8�ȉ�
									$(this).show();
								}else{
								//����ȊO
									$(this).fadeIn("slow");
								}						
						break;
					}
				}
			}
		});
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
		$("#SelectTit").html("<strong>"+$(this).text()+"</strong>�̃C�x���g��\�����Ă��܂�");	
		$("#SelectTit").fadeIn("slow");
	});
	
	//�S������
	$(".LookAll",eventcash).click(function(){
		if ($.browser.msie && $.browser.version < 9){ 
			//IE8�ȉ�
			oneeventcash.show();
		  }else{
			//����ȊO
			oneeventcash.fadeIn("slow");
			
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

function getDateString(dateStr) {
	var dispDate = new Date(dateStr);
	var week = ["<span class='colSun'>��</span>","��","��","��","��","��","<span class='colSat'>�y</span>"];

	return (dispDate.getMonth() + 1)
	       + "/" + dispDate.getDate()
	       + "(" + week[dispDate.getDay()] + ")";
}