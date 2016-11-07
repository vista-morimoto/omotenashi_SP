<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// 本番時は/がルート
		$link_path = "/";
}else{
	// テストアップ時は/sp_jikei-hospitality/がルート
		$link_path = "/sp_jikei-hospitality2016/";
}
?>

<!--event_course_wtaiken-->
<section class="taiken">
  <ul class="blog_tr">
    <li class="imgSquare"> <a href="http://www.jikei-hospitality.ac.jp/contents/blogs/2016/07/26/1630"><img src="<?php print $link_path; ?>images/event/special/thum_blog_tr.jpg" alt="">
      <h3>旅程管理資格バスツアー研修!!</h3>
      <p>皆さん、こんにちは!!夏休みに入って１週間。楽しい毎日をお過ごしですか??　教務部の榮です☆…</p>
      <p class="date pt10">2016年7月26日</p>
      <!--<p>8/21(日)・8/27(土)</p>-->
      </a> </li>
  </ul>
</section>
<!-- / event_course_wtaiken--> 