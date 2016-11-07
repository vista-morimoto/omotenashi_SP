<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/check/がルート
		$link_path = "/sp_jikei-hospitality2016/";
}
?>
<article>
<h2 class="report"><span>過去のお仕事体験レポート</span></h2>
<div class="pr10 pl10 pb10 mb20">
	<div id="feed_opencampus"></div>
	<p class="textC"><a href="http://www.jikei-hospitality.ac.jp/contents/blogs/category/opencampus" class="report-btn">▼もっと見る</a></p>
</div>

</article>

