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

<!--event_course_bridal-->
<section class="taiken">
    <h3 class="mb15"><span>�̌����w�֍s���Ă݂悤�I</span></h3>
    <ul class="Pickup">
      <li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-dress.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_dress.jpg" alt="�h���X�����̌�">
            <h3>�h���X�����̌�</h3>
            <p>
            ����̃E�F�f�B���O�h���X�𒅂ĎB�e�ł���X�y�V�����̌��I<br>
            �v���̃w�A���C�N�ɂ��Ă��炦�邩��A�����܂��v�����Z�X�Ɂ�
            </p>
            <!--<p>8/7(��)�E8/28(��)</p>-->
        </a>
      </li>
      <!--<li class="imgSquare">
         <a href="http://www.jikei-hospitality.ac.jp/event/e-bridal.html">
            <img src="<?php print $link_path; ?>images/event/special/thum_bridalfes.jpg" alt="�������܂�킩��̌�">
            <h3>�������܂�킩��̌�</h3>
            <p>�w�Z���ɂ���`���y�����g���āA�͋[�������J�ÁI</p>
            <p>8/11(�j)</p>
        </a>
      </li>-->
    </ul> 
</section>
<!-- / event_course_bridal--> 