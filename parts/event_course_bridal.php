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
      <li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-dress.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_dress.jpg" alt="ドレス試着体験">
            <h3>ドレス試着体験</h3>
            <p>
            憧れのウェディングドレスを着て撮影できるスペシャル体験！<br>
            プロのヘアメイクにしてもらえるから、たちまちプリンセスに♪
            </p>
            <!--<p>8/7(日)・8/28(日)</p>-->
        </a>
      </li>
      <!--<li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-bridal.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_bridalfes.jpg" alt="結婚式まるわかり体験">
            <h3>結婚式まるわかり体験</h3>
            <p>学校内にあるチャペルを使って、模擬挙式を開催！</p>
            <p>8/11(祝)</p>
        </a>
      </li>-->
    </ul> 
</section>
<!-- / event_course_bridal--> 