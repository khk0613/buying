<?php include('m_header.php') ?>
    <div class="section1" style="margin-top:50px;">
    <div class="box-content">
        <h2><span>SERVICE ITEMS</span></h2>
        <p class="head-ex">人件費以外の全てのコストが削減可能です</p>
        <ul class="ul-service">
            <?php for($i = 0; $i <= 2; $i++) { ?>
                <li>
                    <div class="box-thumb">
                        <img src="images/<?=$service[$i][3]?>" alt="">
                    </div>
                    <div class="box-info">
                        <p class="title"><?=$service[$i][0]?></p>
                        <p class="ex"><?=$service[$i][1]?></p>
                        <a class="btn-more" target="blank" href="<?=$service[$i][2]?>">詳細を見る</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
            <p class="more">
                MORE SERVICE 5
                <span class="bar1"></span>
                <span class="bar2"></span>
            </p>
            <ul class="ul-more-service">
                <?php for($i = 3; $i <= 6; $i++) { ?>
                    <li>
                        <a class="btn-toi" href="#">
                            <table>
                                <tr>
                                    <td><img src="images/m_more_<?=($i+1)?>.png" alt=""></td>
                                </tr>
                            </table>
                            <div class="box-hover">
                                <table>
                                    <tr>
                                        <td>
                                            <img src="images/m_inquiry.png" alt="">
                                            <p>
                                                お問い合わせ
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            
                        </a>
                    </li>
                <?php } ?>
            </ul>
    </div>
    </div>
    <div class="section section2 section_silide scroll_point">
        <div class="box-content">
            <div class="mobile" style="background-color: #f6f6f6; padding-bottom: 35px;">
                <h2 class="pc">こんなお悩みをお持ちですか？</h2>
                <h2 class="mobile">
                    <p>こんなお悩みを</p>
                    <p>お持ちですか？</p>   
                </h2>
                <p class="head-ex">経営者のその国民元購入することで解決する。</p>
                <ul class="ul-cost pc">
                    <?php for($i = 0; $i <= 3; $i++) { ?>
                        <li>
                            <div class="section2_title">
                                <p class="title"><?=$cost_down[$i][0]?></p>
                                <p class="ex"><?=nl2br($cost_down[$i][1])?></p>
                            </div>
                        </li>
                    <?php } ?> 
                </ul>
                <ul class="ul-cost mobile">
                    <li class="cf">
                        <div class="section2_title">
                            <p class="title">悩みその１</p>
                            <p class="ex">
                            売り上げが頭打ちになっている…。<br>    
                            資金繰りが正直厳しい…。
                            </p>
                        </div>
                    </li>
                    <li class="cf">
                        <div class="section2_title">
                            <p class="title">悩みその２</p>
                            <p class="ex">
                            大手の購買単価で購入したいけど、<br>
                            自社の購買量じゃ、<br>
                            正直これ以上の単価交渉は厳しい…。
                            </p>
                        </div>
                    </li>
                    <li class="cf">
                        <div class="section2_title">
                            <p class="title">悩みその3</p>
                            <p class="ex">
                            何年も前からコスト適正化は行っ<br>
                            ているし自信はある！
                            と思っている<br>
                            けれど本当に適正だろうか…。
                            </p>
                        </div>
                    </li>
                    <li class="cf">
                        <div class="section2_title">
                            <p class="title">悩みその4</p>
                            <p class="ex">
                            制度変更は市場変化に対応できず何をすれば
                            いいか正直わからない…。
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <h2 id="atto">Buyingの圧倒的な強み</h2>
            <div class="swiper-pagination pc"></div>
            <div class="swiper-pagination mobile"></div>
            <div class="slide-wrap">
                <div class="slide-merit swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="pc" src="images/merit_1.png" alt="">
                            <img class="mobile" src="images/m_merit1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="pc" src="images/merit_2.png" alt="">
                            <img class="mobile" src="images/m_merit2.png" alt="">
                            <div class="box-act">
                                <a href="http://buying.co.jp/energy/" target="blank">
                                    SAVING ENERGY
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="" src="images/go.png" alt="">
                                                    <!-- <img class="on" src="images/go.png" alt=""> -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="margin-bottom: 30px;">
                            <img class="pc" src="images/merit_3.png" alt="">
                            <img class="mobile" src="images/m_merit3.png" alt="">
                            <div class="box-act">
                                <a href="http://buying.co.jp/nurseryschool/" target="blank">
                                    保育園・幼稚園向け
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="" src="images/go.png" alt="">
                                                    <!-- <img class="on" src="images/go.png" alt=""> -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </a>
                                <a href="http://buying.co.jp/taxaccountant/" target="blank">
                                    税務サービス
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="" src="images/go.png" alt="">
                                                    <!-- <img class="on" src="images/go.png" alt=""> -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </a>
                                <a href="http://buying.co.jp/CS/index.html" target="blank">
                                    販管費削減サービス
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="" src="images/go.png" alt="">
                                                    <!-- <img class="on" src="images/go.png" alt=""> -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div><!-- box_content -->
    </div>
<?php include('m_footer.php') ?>