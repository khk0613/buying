<?php include('m_header.php') ?>
<div style="margin-top:50px;">
  <h2>
    <span>コスト削減事例</span></h2>
    <p class="head-ex">コスト削減された例示を確認し、比較しましょう。</p>
</div>
<div class="cont">
<ul class="ul_ac">
    <li class="li_faq off">
        <p class="txt_faqtit txt_faqtit1">コスト削減事例 01</p>
        <div class="box_faq"><img src="images/m_content1.png"></div>
    </li>
    <li class="li_faq off">
        <p  class="txt_faqtit txt_faqtit2">コスト削減事例 02</p>
        <div class="box_faq"><img src="images/m_content2.png"></div>
    </li>
    <li class="li_faq off">
        <p class="txt_faqtit txt_faqtit3">コスト削減事例 03</p>
        <div class="box_faq"><img src="images/m_content3.png"></div>
    </li>
    <li class="li_faq off">
        <p class="txt_faqtit txt_faqtit4">コスト削減事例 04</p>
        <div class="box_faq"><img src="images/m_content4.png"></div>
    </li>
</ul>
<script type="text/javascript" >

$(function(){
    


        // faq 아코디언 

      $('.li_faq').click(function(){
          // $('.txt_faqtit', this).css({'color':'#9a9a9a'});
          // $(this).parent().find('li').not( $(this) ).find('.txt_faqtit').css({'color':'#333'});

          var boxHeight = $('.box_faq', this).height();

          //console.log( boxHeight );

          if ( $(this).hasClass('off') ) {
            $(this).stop().animate({'height': boxHeight + 60 + 'px' }).addClass('on').removeClass('off');
            $(this).parent().find('li').not( $(this) ).animate({'height': 60 + 'px' }).addClass('off').removeClass('on');
            $('.txt_faqtit', this).css({'overflow':'visible', 'width':'auto', 'white-space':'normal', 'text-overflow':'clip'});
          } else if ( $(this).hasClass('on') ) {
            $(this).stop().animate({'height': 60 + 'px' }).addClass('off').removeClass('on');
          }
          
      });

});
</script>
</div>
        
<?php include('m_footer.php') ?>