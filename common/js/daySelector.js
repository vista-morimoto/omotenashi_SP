$(function() {

	//alert("ようこそ！");

	//セレクターキャッシュ
	var HtmlBody = $("html,body");
	var eventcash = $("#EventWrapper");
	var oneeventcash = $("#EventWrapper div.OneEvent");
	var searchDays = $("#SearchDay li");

	// すべて見るボタンは一旦非表示
	$(".LookAll",eventcash).hide();

	// イベントの日付表示
	$("div.OneEvent[data-day]").each(function() {
		var arrDispDay = [];
		var arrOpenDay = $(this).attr("data-day").split(",");
		for (var i = 0; i < arrOpenDay.length; i++) {
			var dispDay = "";
			var openDay = arrOpenDay[i];

			if (openDay.indexOf("-") == -1) {
			// 期間指定ではなく単独指定の場合
				dispDay = getDateString(openDay);
				arrDispDay.push(dispDay);
			} else {
			// 期間指定の場合
				var arrPeriod = openDay.split("-");
				
				dispDay = getDateString(arrPeriod[0])
				        + "～" + getDateString(arrPeriod[1]);
				arrDispDay.push(dispDay);
			}
		}

		$(this).find("p.Day strong").html(arrDispDay.join("、"));
	});
	
	//Specialアイコンの表示
	$(".Special").append("<img src='../../img/event/trial/icoSpecial.png' alt='スペシャルメニュー' class='icoSpecial' />");

	// 種類から選ぶ
	$("div#SearchBox .searchCat").click(function() {
		var dispCategory = $(this).attr("data-id");
		var dispCategoryS = "." + dispCategory;
		
			if ($.browser.msie && $.browser.version < 9){ 
				//IE8以下
					$("div.OneEvent").hide();
					
					$("div.OneEvent").filter("." + dispCategory).show();
					
					$(".LookAll",eventcash).show();
				}else{
				//それ以外
					//$("#EventWrapper > div").fadeOut("slow");
					//$(dispCategoryS).fadeIn("slow");
					$("div.OneEvent").fadeOut("slow");

					$("div.OneEvent").filter("." + dispCategory).fadeIn("slow");
					
					$(".LookAll",eventcash).show();
				}		
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
		$("#SelectTit").html("<strong>"+$(this).attr("title")+"</strong>のイベントを表示しています");
		$("#SelectTit").fadeIn("slow");
	});

	// 日付から選ぶ
	/**
	 * 日付の選択
 	 * <li class="OneEvent" data-id="2012/03/27"></li>
	 */
	/**
	 * ブロックの日付指定方法
	 * 単独指定の場合 : <div class="OneEvent" data-day="2012/03/27"></div>
	 * 複数指定の場合 : <div class="OneEvent" data-day="2012/03/21,2012/03/24,2012/03/27"></div>
	 * 連続指定の場合 : <div class="OneEvent" data-day="2012/03/21-2012/03/27"></div>
	 * 複合指定の場合 : <div class="OneEvent" data-day="2012/03/21,2012/03/20-2012/04/10,2012/04/16"></div>
	 */

	$("div#SearchDay li").click(function() {
		var dispDay = $(this).attr("data-id");
		
		if ($.browser.msie && $.browser.version < 9){ 
				//IE8以下
				$("div.OneEvent").hide();
				
				$(".LookAll",eventcash).show();
			}else{
			//それ以外
				$("div.OneEvent").fadeOut("slow");
			
				$(".LookAll",eventcash).show();
			}		
			
		$("div.OneEvent[data-day]").each(function() {
			var arrOpenDay = $(this).attr("data-day").split(",");
			for (var i = 0; i < arrOpenDay.length; i++) {
				var openDay = arrOpenDay[i];

				if (openDay.indexOf("-") == -1) {
				// 期間指定ではなく単独指定の場合
					if (openDay == dispDay) {
							if ($.browser.msie && $.browser.version < 9){ 
								//IE8以下
									$(this).show();
								}else{
								//それ以外
									$(this).fadeIn("slow");
								}						
						break;
					}
				} else {
				// 期間指定の場合
					var arrPeriod = openDay.split("-");
					var openDate = new Date(arrPeriod[0]);
					var closeDate = new Date(arrPeriod[1]);
					var dispDate = new Date(dispDay);
					
					if (openDate.getTime() <= dispDate.getTime()
					    && closeDate.getTime() >= dispDate.getTime()) {
							
							if ($.browser.msie && $.browser.version < 9){ 
								//IE8以下
									$(this).show();
								}else{
								//それ以外
									$(this).fadeIn("slow");
								}						
						break;
					}
				}
			}
		});
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
		$("#SelectTit").html("<strong>"+$(this).text()+"</strong>のイベントを表示しています");	
		$("#SelectTit").fadeIn("slow");
	});
	
	//全部見る
	$(".LookAll",eventcash).click(function(){
		if ($.browser.msie && $.browser.version < 9){ 
			//IE8以下
			oneeventcash.show();
		  }else{
			//それ以外
			oneeventcash.fadeIn("slow");
			
			}		
		$(".LookAll",eventcash).hide();
		$("#SelectTit").fadeOut("slow");		
		HtmlBody.animate({ scrollTop: $(eventcash).offset().top }, 'slow','swing');		 
	});//

	// フィルターされたコンテンツへの直接アクセス
	var url = document.URL;
	if (url.indexOf("#") != -1) {
		var anotation = url.substr(url.indexOf("#") + 1);
		if (anotation.indexOf("/") == -1) {
		// 日付ではない場合
			$("div#SearchBox .searchCat[data-id='" + anotation + "']").trigger("click");
		} else {
		// 日付の場合
			$("div#SearchDay li[data-id='" + anotation + "']").trigger("click");
		}
	}

});

function getDateString(dateStr) {
	var dispDate = new Date(dateStr);
	var week = ["<span class='colSun'>日</span>","月","火","水","木","金","<span class='colSat'>土</span>"];

	return (dispDate.getMonth() + 1)
	       + "/" + dispDate.getDate()
	       + "(" + week[dispDate.getDay()] + ")";
}