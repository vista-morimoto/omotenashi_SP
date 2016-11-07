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
<!--event_special_index_top3-->

<li class="imgSquare"><a href="http://www.jikei-hospitality.ac.jp/event/e-wedding.html"><img src="<?php print $link_path; ?>images/event/special/thum_real.jpg" alt="">
  <h3>リアルウエディング開催</h3>
  <p>滋慶おもてなしのチャペルにて、本物の結婚式を開催！<br>【先着30名様限定！】</p>
  <p>11/26(土)</p>
  </a></li>
<li class="imgSquare"><a href="http://www.jikei-hospitality.ac.jp/event/e-wtaiken.html"> <img src="<?php print $link_path; ?>images/event/special/thum_wday.jpg" alt="W体験">
  <h3>進路で迷っている方へ<br />お仕事W体験DAY</h3>
  <p>1日に2つのお仕事が体験できる！</p>
  <p>11/20(日),12/18(日)</p>
  </a> </li>
<li class="imgSquare"><a href="http://www.jikei-hospitality.ac.jp/event/e-hyattregency.html"><img src="<?php print $link_path; ?>images/event/special/thum_hyatt.jpg" alt="">
  <h3>ハイアットリージェンシー大阪<br />見学ツアー</h3>
  <p>おもてなしと極上の安らぎの融合ホテル！<br />多彩なチャペルで結婚式の今に迫る！</p>
  <p>12/4(日)</p>
  </a></li>
<!--<li class="imgSquare">
<a href="http://www.jikei-hospitality.ac.jp/event/e-aosetumei.html">
    <img src="<?php print $link_path; ?>images/event/explanation/img_01.jpg" alt="">
    <h3>AO入学特別説明会</h3>
    <p>学費や奨学金、就職についての説明も併せて行います。<br>保護者の皆様もぜひご参加ください。</p><p> 土日祝開催 </p>
</a>
</li>
--> 
<!-- / event_special_index_top3--> 