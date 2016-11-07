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
    <li class="imgSquare"> <a href="http://www.jikei-hospitality.ac.jp/event/e-ritzcarlton.html"><img src="<?php print $link_path; ?>images/event/special/thum_ritz.jpg" alt="ザ・リッツ・カールトン大阪">
      <h3>業界見学ツアー ザ・リッツ・カールトン大阪</h3>
      <p>普段ではめったに見ることがない客室やチャペルを見学！ケーキ付♪<br>
      </p>
      <p>7/29(金)</p>
      </a> </li>
  </ul>
</section>
<!-- / event_course_bridal--> 