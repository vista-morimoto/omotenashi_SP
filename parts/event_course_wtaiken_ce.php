<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// �{�Ԏ���/�����[�g
		$link_path = "/";
}else{
	// �e�X�g�A�b�v����/sp_jikei-hospitality/�����[�g
		$link_path = "/sp_jikei-hospitality2016/";
}
?>

<!--event_course_wtaiken-->
<section class="taiken">
  <ul class="Pickup">
    <li class="imgSquare"> <a href="http://www.jikei-hospitality.ac.jp/event/e-wtaiken.html"><img src="<?php print $link_path; ?>images/event/special/thum_wday_ce.jpg" alt="���d��W�̌�DAY">
      <h3>�i�H�Ŗ����Ă�����ցI<br />
        ���d��W�̌�DAY</h3>
      <p>�D���Ȃ��d����1����2�̌��ł���I</p>
      <!--<p>8/21(��)�E8/27(�y)</p>-->
      </a> </li>
  </ul>
</section>
<!-- / event_course_wtaiken--> 