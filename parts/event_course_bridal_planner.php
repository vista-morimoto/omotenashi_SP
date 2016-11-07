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

<!--event_course_bridal_planner-->
<section class="taiken">
    <h3 class="mb15"><span>体験入学へ行ってみよう！</span></h3>
    <ul class="Pickup">
      <li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-planner.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_bridal_planner.jpg" alt="ブライダルプランナー体験">
            <h3>ブライダルプランナー体験</h3>
            <p>
            結婚式や披露宴のすべて進行スケジュールを立てるのがブライダルプランナーと呼ばれるお仕事。<br>
新郎新婦のカタチにします。
            </p>
        </a>
      </li>
    </ul> 
</section>
<!-- / event_course_bridal_planner--> 