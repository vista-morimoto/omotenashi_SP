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
    <img src="<?php print $link_path; ?>images/course/pickup/bridal/lesson_b01.jpg" alt="ブライダル基礎" />
    <dl>
      <dt>ブライダル基礎<br>
（全日本ブライダル協会認定資格授業含）</dt>
      <dd>ブライダルの基礎知識を身につけながら、全日本ブライダル協会認定の“アシスタントウェディングプランナー”資格を在学中に取得することにより、実践力を身につけます。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/bridal/lesson_b02.jpg" alt="ブライダルメイク・ヘアメイク基礎・実習" />
    <dl>
      <dt>ブライダルメイク・ヘアメイク基礎・実習</dt>
      <dd>ヘアメイク・ネイルを含めブライダルビューティーをトータルに学びます。日本メイクアップ技術検定、ネイリスト技能検定など、対策授業でトータルにサポートします。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/bridal/lesson_b03.jpg" alt="ブライダルフラワー実習" />
    <dl>
      <dt>ブライダルフラワー実習</dt>
      <dd>国家資格であるフラワー装飾技能士対策授業の他、フローリストを目指す人にとって必要な基礎となる花の理論を身につけます。対策授業の他、個々の感性を磨くフラワーアレンジの応用も身につけることができます。</dd>
    </dl>
  </div>
</section>
<!-- / PickUpLessonsArea-->
