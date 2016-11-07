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
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t01.jpg" alt="旅行業務取扱管理者（国内・総合）国家資格対策" />
    <dl>
      <dt>旅行業務取扱管理者（国内・総合）国家資格対策</dt>
      <dd>旅行・鉄道業界に欠かせない代表的な資格です。旅行業者及び旅行代理者が、旅行者と公正な取引が行われるように管理する責任者です。旅行・鉄道業界でとても需要の高い、国土交通省が認定する国家資格取得を目指します。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t02.jpg" alt="ＡＸＥＳＳ実用検定（国内・国際）対策" />
    <dl>
      <dt>ＡＸＥＳＳ実用検定（国内・国際）対策</dt>
      <dd>旅行業界に不可欠な航空会社と直結した予約プログラム「AXESS（アクセス）」について学ぶ授業。操作方法から予約、運賃、発券、案内業務を正確に処理できる操作実務技能を学びます。</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t03.jpg" alt="旅程管理主任者（国内・総合）対策" />
    <dl>
      <dt>旅程管理主任者（国内・総合）対策</dt>
      <dd>ツアーコンダクター(添乗員)になるためには不可欠な資格です。国土交通大臣に登録された研修機関での研修を行い、実務経験を有した添乗員の資格です。在学中に添乗実習を行い、資格取得（国内）を目指します。</dd>
    </dl>
  </div>
</section>
<!-- / PickUpLessonsArea-->