<script>
        var filter = "win16|win32|win64|mac|macintel";
 
        if ( navigator.platform  ) {
            if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
                location.href = "m_index.php"; //모바일 페이지 경로
            } 
        }
    </script>
<?php 
require_once('_main_data.php');
require_once('_token.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=640, user-scalable=no">
	<title>Buying</title>
	<script src="js/jquery.js"></script>
    <script src="js/jquery.ui.js"></script>
	<script src="js/swiper.jquery.min.js"></script>
	<script src="js/common.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">    
    <link rel="stylesheet" href="css/swiper.min.css">   
    <link rel="stylesheet" href="css/common.css">   
    <link rel="stylesheet" href="css/responsive.css">   
</head>
<body>
    <div class="wrap-header">
        <div class="box-header">
            <h1><a href="#"><img src="images/logo.png" alt="Buying" width=""></a></h1>
            <ul class="ul-nav pc">
                <li><a href="#">サービス</a></li>
                <li><a href="#">費用削減例</a></li>
                <li><a href="#">会社情報</a></li>
                <li><a class="btn-inquiry" href="#">問い合わせ</a></li>
                <li><a class="btn-data" href="#">資料請求</a></li>
            </ul>
        </div>
        <a href="#" class="btn-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </a>
    </div>
    <div class="mobile box-sidebar">
      <ul class="ul-nav">
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">COMPANY</a></li>
        <li><a href="#">PROFILE</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    <div class="wrap-hero">
        <div class="box-hero">
            <table>
                <tr>
                    <td>
                        <p class="ex">DO! COST SAVING</p>
                        <p class="title">
                            企業に一人
                            経営コンシェルジュを置く時代
                        </p>
                    </td>
                </tr>
            </table>
            <div class="box-hover box-hover2" >
                <div class="box-content box-content1" >
                    <table>
                        <tr>
                            <td>
                                <p class="ex">
                                    あなたの会社の <br>コスト削減額を
                                    <br>
                                    <strong>1週間でお見積もり</strong>
                                </p>
                                <a class="btn-main-toi" href="#">03-3237-3162</a>            
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="section1 scroll_point">
        <div class="wrap-strong">
            <div class="box-content">
                <h2><span>Buying</span>の強み</h2>
                <p class="head-ex">斬新なソリューションとサービスを顧客に提供する。</p>
                <ul class="ul-strong">
                    <?php for($i = 0; $i <= 2; $i++) { ?>
                        <li>
                            <img src="images/strong<?=$i+1?>.png" alt="">
                            <p class="title"><?=$strong[$i][0]?></p>
                            <p class="ex"><?=$strong[$i][1]?></p>
                            <a target="blank" href="<?=$strong[$i][2]?>">もっと詳しく</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="box-content">
            <h2><span>SERVICE ITEMS</span></h2>
            <p class="head-ex">人件費以外の全てのコストが削減可能です</p>
            <ul class="ul-service">
                <?php for($i = 0; $i <= 2; $i++) { ?>
                    <li>
                        <div class="box-thumb">
                            <img src="images/service1.png" alt="">
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
                    <?php for($i = 3; $i <= 7; $i++) { ?>
                        <li>
                            <a class="btn-toi" href="#">
                                <table>
                                    <tr>
                                        <td><img src="images/service<?=($i+1)?>.png" alt=""></td>
                                    </tr>
                                </table>
                                <div class="box-hover">
                                    <table>
                                        <tr>
                                            <td>
                                                <img src="images/inquiry.png" alt="">
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
    <div class="section2 scroll_point">
        <div class="box-content">
            <h2>こんなお悩みをお持ちですか？</h2>
            <p class="head-ex">経営者のその国民元購入することで解決する。</p>
            <ul class="ul-cost">
                <?php for($i = 0; $i <= 3; $i++) { ?>
                    <li>
                        <p class="title"><?=$cost_down[$i][0]?></p>
                        <p class="ex"><?=nl2br($cost_down[$i][1])?></p>
                    </li>
                <?php } ?> 
            </ul>
            <h2>Buyingの圧倒的な強み</h2>
            <div class="swiper-pagination"></div>
            <div class="slide-wrap">
                <div class="slide-merit swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/merit_1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/merit_2.png" alt="">
                            <div class="box-act">
                                <a href="http://buying.co.jp/energy/" target="blank">
                                    SAVING ENERGY
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="off" src="images/go.png" alt="">
                                                    <img class="on" src="images/go_hover.png" alt="">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="images/merit_3.png" alt="">
                            <div class="box-act">
                                <a href="http://buying.co.jp/nurseryschool/" target="blank">
                                    保育園・幼稚園向け
                                    <div class="box-hover">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img class="off" src="images/go.png" alt="">
                                                    <img class="on" src="images/go_hover.png" alt="">
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
                                                    <img class="off" src="images/go.png" alt="">
                                                    <img class="on" src="images/go_hover.png" alt="">
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
                                                    <img class="off" src="images/go.png" alt="">
                                                    <img class="on" src="images/go_hover.png" alt="">
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
        </div>
    </div>
    <div class="section3">
        <div class="box-content">
            <h2><span>コスト削減事例</span></h2>
            <p class="head-ex">コスト削減された例示を確認し、比較しましょう。</p>
            <div class="box-accordion">
                <ul class="ul-accordion">
                    <?php for($i = 0; $i < 4; $i++) { ?>
                        <?php if ($i == 0) { ?>
                            <li class="open">
                        <?php } else { ?>
                            <li>
                        <?php } ?>
                            <a href="#">
                                <div class="box-info">
                                    <img src="images/case<?=$i+1?>.png" alt="">
                                </div>
                                <div class="box-close">
                                    <img src="images/case_close<?=$i+1?>.png" alt="">
                                </div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>    
                <div class="box-action">
                    <a href="#" class="btn-prev">이전</a>
                    <div class="box-control">
                        <a href="#" class="btn-play">재생</a>
                        <a href="#" class="btn-stop">정지</a>
                    </div>
                    <a href="#" class="btn-next">다음</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section4">
        <div class="box-content">
            <?php include('form_mail.php') ?>
        </div>
    </div>
    <div class="section5 scroll_point">
        <div class="box-content">
            <div class="box-thumb">
                <img src="images/company.png" alt="">
            </div>
            <div class="box-info">
                <p class="about">ABOUT</p>
                <p class="title">
                    企業のコストの節約を提供する<br>
                    私たちは、BUYINGです。
                </p>
                <p class="ex">
                    TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT<br>
                    TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT<br>
                    TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT<br>
                    TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT
                </p>
                <p class="document">経営コンサルティング [各種コスト削減商材販売]</p>
                <p class="place">
                    東京都千代田区九段北１丁目１３－５ ヒューリック九段ビル５階<br>
                    ＜隠れ家＞東京都千代田区九段北１丁目１２ 徳海屋ビルB1F
                </p>
                <p class="phone">03-3237-3162</p>
                <p class="fax">03-3237-3161</p>
            </div>
            <div class="box-banner">
                <p>BUYINGと一緒に成長立派な人材を待ちます。</p>
                <a class="btn-recruit" href="#">RECRUIT</a>
            </div>
        </div>
    </div>
    <div class="wrap-footer">
        <div class="box-content">
            <p class="copyright">2015 © Buying.inc. All Rights Reserved.</p>
        </div>
    </div>
    <a class="btn-top" href="#">TOP</a>
    <div class="box-modal">
        <a href="#" class="btn-close">Close</a>
        <?php include('form_mail_modal.php') ?>
    </div>
    <a href="#" class="blackcover"></a>
</body>
</html>