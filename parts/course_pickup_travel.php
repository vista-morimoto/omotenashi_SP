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
        
<!--PickUpLessonsArea-->
<section id="PickUpLessons" class="fixHeight">
  <h3>Pick up Lessons</h3>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t01.jpg" alt="���s�Ɩ��戵�Ǘ��ҁi�����E�����j���Ǝ��i�΍�" />
    <dl>
      <dt>���s�Ɩ��戵�Ǘ��ҁi�����E�����j���Ǝ��i�΍�</dt>
      <dd>���s�E�S���ƊE�Ɍ������Ȃ���\�I�Ȏ��i�ł��B���s�Ǝҋy�ї��s�㗝�҂��A���s�҂ƌ����Ȏ�����s����悤�ɊǗ�����ӔC�҂ł��B���s�E�S���ƊE�łƂĂ����v�̍����A���y��ʏȂ��F�肷�鍑�Ǝ��i�擾��ڎw���܂��B</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t02.jpg" alt="�`�w�d�r�r���p����i�����E���ہj�΍�" />
    <dl>
      <dt>�`�w�d�r�r���p����i�����E���ہj�΍�</dt>
      <dd>���s�ƊE�ɕs���ȍq���Ђƒ��������\��v���O�����uAXESS�i�A�N�Z�X�j�v�ɂ��Ċw�Ԏ��ƁB������@����\��A�^���A�����A�ē��Ɩ��𐳊m�ɏ����ł��鑀������Z�\���w�т܂��B</dd>
    </dl>
  </div>
  <div>
    <img src="<?php print $link_path; ?>images/course/pickup/travel/lesson_t03.jpg" alt="�����Ǘ���C�ҁi�����E�����j�΍�" />
    <dl>
      <dt>�����Ǘ���C�ҁi�����E�����j�΍�</dt>
      <dd>�c�A�[�R���_�N�^�[(�Y���)�ɂȂ邽�߂ɂ͕s���Ȏ��i�ł��B���y��ʑ�b�ɓo�^���ꂽ���C�@�ւł̌��C���s���A�����o����L�����Y����̎��i�ł��B�݊w���ɓY����K���s���A���i�擾�i�����j��ڎw���܂��B</dd>
    </dl>
  </div>
</section>
<!-- / PickUpLessonsArea-->