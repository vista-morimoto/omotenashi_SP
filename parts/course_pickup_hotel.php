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
        
<!--PickUpLessonsArea-->
<section id="PickUpLessons" class="fixHeight">
  <h3>Pick up Lessons</h3>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/hotel/lesson_h01.jpg" alt="ホテルビジネス実務検定対策" />
    <dl>
      <dt>ホテルビジネス実務検定対策</dt>
      <dd>ホテルビジネスにおいて必要とされる宿泊・料飲・宴会・調理など、ホテル業務の実務知識に関する理解度を測定するための検定を取得すると共に、ホテル業務に必要な実務知識を体系的に習得します。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/hotel/lesson_h02.jpg" alt="料飲・レストランオペレーション" />
    <dl>
      <dt>料飲・レストランオペレーション</dt>
      <dd>レストランサービスの基礎知識や実践を行います。接客力はもちろん、フードに関する知識やバー実習も行い、レストランサービス技能検定を取得します。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/hotel/lesson_h03.jpg" alt="ＴＯＥＩＣ対策" />
    <dl>
      <dt>ＴＯＥＩＣ&reg;対策</dt>
      <dd>全世界共通で英語能力を実証できる検定試験です。ＴＯＥＩＣ&reg;は海外を目指す人はもちろん、国際的なコミュニケーションを求められるホテリエにとっても大切な検定です。より良い結果がだせるよう、総合的に英語力を身につけます。</dd>
    </dl>
  </div>
</section>
<!-- / PickUpLessonsArea-->
