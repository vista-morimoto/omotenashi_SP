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
<ul class="BaseList">
  <li><a href="http://www.jikei-hospitality.ac.jp/event/">体験入学</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/results.html?type[]=3">スペシャル体験</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/results.html?type[]=1">学校説明会・相談会</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/bus.html">無料送迎バス</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/myschool/">Myスクール</a></li>
  <li><a href="http://www.jikei-hospitality.ac.jp/event/bus.html">「高速バス」交通費サポート</a></li>
  <li><a href="<?php print $link_path; ?>school/access.php">アクセス</a></li>
</ul>
