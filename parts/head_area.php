<?php
$domain = $_SERVER["SERVER_NAME"];
if($domain == "jikei-hospitality.ac.jp"){
	// �{�Ԏ���/�����[�g
		$link_path = "/";
}else{
	// �e�X�g�A�b�v����/check/�����[�g
		$link_path = "/sp_jikei-hospitality2016/";
}
?>
<header>
  <div id="hd_inner">
    <h1 id="hd_logo"><a href="<?php print $link_path; ?>"><img src="<?php print $link_path; ?>common/img/logo.png" alt="���c�i�W�P�C�j�����ĂȂ����u���C�_���E�ό����w�Z�w�Z�@�l�R�~���j�P�[�V�����A�[�g" style="width:100%;"></a></h1>
    
    <p id="hd_links"><a href="#modal" class="second open"><img src="<?php print $link_path; ?>common/img/header_menu.png" width="33" height="28"  alt="���j���["></a></p>
    
    <!-- /hd_inner -->
    </div>
</header>


<div id="modal">
  <p class="Close"><a href="javascript:$.pageslide.close()">Close</a></p>
  <p class="textC"><img src="<?php print $link_path; ?>common/img/imgIcoFace.gif" width="154" height="15" alt="���̃A�C�R���͂�PC�T�C�g�ւ̃����N�ł�"></p>
  <!--<h2>�̌����w</h2>
  <nav>
    <ul>
      <li><a href="../event/trial">�̌����w�i�I�[�v���L�����p�X�j</a></li>
      <li><a href="../event/special">�X�y�V�����C�x���g</a></li>
      <li><a href="../event/myschool">My�X�N�[���v���O����</a></li>
      <li><a href="../event/bus">�������}�o�X</a></li>
      <li><a href="../event/explanation">�w�Z������E���k��</a></li>
    </ul>
  </nav>-->
  <h2>�w�Z�Љ�</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>school/index.php">�w�Z�Љ�g�b�v</a></li>
        <li><a href="<?php print $link_path; ?>school/access.php">���ݒn�E�n�}</a></li>
        <li><a href="<?php print $link_path; ?>school/equipment.php">�ݔ��E�{��</a></li>
        <li><a href="<?php print $link_path; ?>school/faq.php">�悭���鎿��</a></li>
        <li><a href="<?php print $link_path; ?>school/link.php">�����N�W</a></li>
      <br>
    </ul>
  </nav>
  <h2>�R�[�X�Љ�</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>course/index.php">�R�[�X�Љ�g�b�v</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal.php">�u���C�_�������R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_planner.php">�u���C�_���v�����i�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_beauty.php">�u���C�_���X�^�C���X�g���r���[�e�B�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_flower.php">�u���C�_���t�����[���R�[�f�B�l�[�g�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_management.php">�z�e���R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_bridal.php">�z�e�����u���C�_���R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_innsmanagement.php">�z�e�������ك��]�[�g�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/sommelier.php">���X�g�������o�[�e���_�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/hotel_abroad.php">�z�e�����w�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/travel.php">�g���x�������R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/travel_management.php">�g���x���J�E���^�[���v�����i�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/tour_conductor.php">�c�A�[�R���_�N�^�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/railroad.php">�S���T�[�r�X�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/airline.php">�G�A���C�������R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/cabin_attendant.php">�L���r���A�e���_���g�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/ground_staff.php">�O�����h�X�^�b�t�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/ceremony_director.php">���Ճf�B���N�^�[�R�[�X</a></li>
        <li><a href="<?php print $link_path; ?>course/bridal_ceremony_management.php">�Z�����j�[���u���C�_���R�[�X</a></li>
	</ul>
  </nav>
  <h2>����V�X�e��</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>education/index.php">����V�X�e���g�b�v</a></li>
        <li><a href="<?php print $link_path; ?>education/s-curriculum.php">���{�̓`���ƕ���</a></li>
        <li><a href="<?php print $link_path; ?>education/system.php">�Y�w��������V�X�e��</a></li>
        <li><a href="<?php print $link_path; ?>education/w-curriculum.php">W���W���[�J���L������</a></li>
        <li><a href="<?php print $link_path; ?>education/overseas-training.php">���ۋ���V�X�e��</a></li>
        <li><a href="<?php print $link_path; ?>education/qualification.php">�֘A���i�E����ꗗ</a></li>
    </ul>
  </nav>
  <h2>�A�E�E���i</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>job/index.php">�A�E�T�|�[�g�g�b�v</a></li>
        <li><a href="<?php print $link_path; ?>job/career.php">�L�����A�Z���^�[</a></li>
        <li><a href="<?php print $link_path; ?>job/internship.php">�C���^�[���V�b�v</a></li>
        <li><a href="<?php print $link_path; ?>job/explanation.php">������Ɛ�����</a></li>
        <li><a href="<?php print $link_path; ?>job/support.php">���ƌ�T�|�[�g</a></li>
        <li><a href="<?php print $link_path; ?>job/actualresults.php">�A�E����</a></li>
    </ul>
  </nav>
  <h2>�w�������T�|�[�g</h2>
  <nav>
    <ul>
      <li><a href="<?php print $link_path; ?>schoollife/">�w�������T�|�[�g�g�b�v</a></li>
      <li><a href="<?php print $link_path; ?>schoollife/campusmap.php">�L�����p�X����MAP</a></li>
    </ul>
  </nav>
  <h2>���w�ē�</h2>
  <nav>
    <ul>
      <li><a href="<?php print $link_path; ?>invitation/">���w���i�E�I�l���@</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/entry.php">�o��ɂ���</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/ao.php">AO���w�ɂ���</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/flow.php">�o�肩�獇�i�܂ł̗���</a></li>
      <li><a href="http://www.jikei-hospitality.ac.jp/invitation/scholarship.php">�w��T�|�[�g</a></li>
    </ul>
  </nav>
  <h2>�K��ҕʃK�C�h</h2>
  <nav>
    <ul>
        <li><a href="<?php print $link_path; ?>target/">���w�����l���̕���</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/parent.php">�ی�҂̕���</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/society.php">��w���E�Љ�l�E�t���[�^�[�̕���</a></li>
        <!--<li><a href="">���w���̕���</a></li>-->
        <li><a href="http://www.jikei-hospitality.ac.jp/target/company.php">��Ƃ̕���</a></li>
        <li><a href="http://www.jikei-hospitality.ac.jp/target/teacher.php">�����w�Z�̐搶����</a></li>
    </ul>
  </nav>
  <p class="Close"><a href="javascript:$.pageslide.close()">Close</a></p>
</div>
<script type="text/javascript" src="<?php print $link_path; ?>common/js/jquery.pageslide.min.js"></script> 
<script>
	$(".first").pageslide();
	$(".second").pageslide({direction: "left", modal: true});
</script>