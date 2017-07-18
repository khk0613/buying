<?php include('m_header.php') ?>
    <div class="section wrap-hero" style="margin-top: 50px;">
        <div class="box-hero">
            <table>
                <tr>
                    <td>
                        <p class="ex">DO! COST SAVING</p>
                        <p class="title">
                            <span style="display: block; margin-bottom: -10px;">企業に一人</span>
                            <span style="display: block;">経営コンシェルジュを置く時代</span>
                        </p>
                    </td>
                </tr>
            </table>
            <div class="box-hover">
                <div class="box-content">
                    <table>
                        <tr>
                            <td>
                                <p class="ex">
                                    あなたの会社のコスト削減額を
                                    <br>
                                    <strong>1週間でお見積もり</strong>
                                </p>
                                <a class="btn-main-toi" href="#">すぐに問い合わせる</a>            
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="section section1 scroll_point mobile">
        <div class="wrap-strong">
            <div class="box-content">
                <h2><span>Buying</span>の強み</h2>
                <p class="head-ex">斬新なソリューションとサービスを顧客に提供する。</p>
                <div class="swiper-container">
                    
                    <div class="swiper-wrapper">
                        <?php for($i = 0; $i <= 2; $i++) { ?>
                        <div class="swiper-slide">
                            <ul class="ul-strong">  
                                <li>
                                    <img width="117" src="images/m_strong<?=$i+1?>.png" alt="">
                                    <p class="title"><?=$strong[$i][0]?></p>
                                    <p class="ex"><?=$strong[$i][1]?></p>
                                    <a href="m_service.php#atto">もっと詳しく</a>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-prev" style="left:5px;"></div>
                    <div class="swiper-button-next" style="right:5px;"></div>
                </div>
            </div>
        </div>
          <script>        
              var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                // Navigation arrows
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
              })        
              </script>
    </div> <!-- mobile -->
    <div id="inquiry" class="section section4" style="padding-bottom:40px;">
        <div class="box-content">
            <?php include('m_form_mail.php') ?>
        </div>
    </div>
    
    <div class="mobile">
        <?php include('m_footer.php') ?>
    </div>
</body>
</html>