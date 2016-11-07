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
<!--event_course_bridal-->
<section class="taiken">
  <h3 class="mb15"><span>体験入学へ行ってみよう！</span></h3>
  <ul class="Pickup">
    <li class="imgSquare"><a href="http://www.jikei-hospitality.ac.jp/event/e-kanku.html"><img src="<?php print $link_path; ?>images/event/special/thum_kanku.jpg" alt="わくわく関西国際空港ツアー">
      <h3>わくわく関西国際空港ツアー</h3>
      <p>憧れのエアライン業界の現場を見に行こう！機内食の昼食付き</p>
      </a></li>
  </ul>
</section>
<!-- / event_course_bridal--> 