$(document).ready(function(){
//���C���X���C�h�p�̋L�q
  $('.bxslider01').bxSlider({
  pagerCustom: '#bx-pager',//�y�[�W���[���J�X�^�}�C�Y����i�T���l�C���ɂ���j���߂̋L�q
  controls:false//�O��̖����������߂̋L�q
  });
});

//�T���l�C�����X���C�h�����邽�߂̋L�q
$(document).ready(function(){
  $('.bxslider02').bxSlider({
  pager:false,
  minSlides: 5,//�P�X���C�h�ɕ\������T���l�C���̐�
  maxSlides: 5,//�P�X���C�h�ɕ\������T���l�C���̍ő吔
  slideWidth: 90,//�T���l�C���̉����i�P�ʂ�px�j
  slideMargin: 10,//�T���l�C���Ԃ̗]���i�P�ʂ�px�j
  nextSelector: '#NextIcon',//"���ցh�����J�X�^�}�C�Y���邽�߂̋L�q
  prevSelector: '#PrevIcon'//"�O�ցh�����J�X�^�}�C�Y���邽�߂̋L�q
      });
});