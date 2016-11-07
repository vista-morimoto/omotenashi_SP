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
  <ul class="Pickup">
    <li class="imgSquare"> <a href="http://www.jikei-hospitality.ac.jp/event/e-wtaiken.html"><img src="<?php print $link_path; ?>images/event/special/thum_wday_ce.jpg" alt="お仕事W体験DAY">
      <h3>進路で迷っている方へ！<br />
        お仕事W体験DAY</h3>
      <p>好きなお仕事を1日で2つ体験できる！</p>
      <!--<p>8/21(日)・8/27(土)</p>-->
      </a> </li>
  </ul>
</section>
<!-- / event_course_wtaiken--> 