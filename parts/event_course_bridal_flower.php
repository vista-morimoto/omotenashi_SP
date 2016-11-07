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

<!--event_course_bridal_flower-->
<section class="taiken">
    <h3 class="mb15"><span>体験入学へ行ってみよう！</span></h3>
    <ul class="Pickup">
      <li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-flower.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_bridal_flower.jpg" alt="ブライダルフラワー体験">
            <h3>ブライダルフラワー体験</h3>
            <p>
            お花に触れることが大好きなあなたにおすすめの授業。<br>
            空間コーディネートもできる人になれますよ♪ </p>
        </a>
      </li>
    </ul> 
</section>
<!-- / event_course_bridal_flower--> 