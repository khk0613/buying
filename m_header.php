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
    <meta name="format-detection" content="telephone=no">
    <title>Buying</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.ui.js"></script>
    <script src="js/swiper.jquery.min.js"></script>
    <script src="js/m_common.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">    
    <link rel="stylesheet" href="css/swiper.min.css">   
    <link rel="stylesheet" href="css/common.css">   
    <link rel="stylesheet" href="css/responsive.css">   
</head>
<body>
    <div class="wrap-header">
        <div class="box-header">
            <h1><a href="m_index.php">
                <img class="mobile" src="images/m_logo3.png" alt="Buying" width="101"></a>
            </h1>
        </div>
        <a href="#" class="btn-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <a class="m_inquiry" href="m_index.php#inquiry"><img src="images/m_inquiry.png" width="25px"></a>
    </div>
    <div class="mobile box-sidebar">
      <ul class="ul-nav">
        <li>
            <a href="m_service.php">サービス</a>
            <!-- <ul class="sub-nav">
                <li><a href="">SERVICE ITEMS</a></li>    
                <li><a href="">こんなお悩みをお持ちですか？</a></li>    
                <li><a href="">Buyingの圧倒的な強み</a></li>    
            </ul>   -->
        </li>
        <li><a href="m_ex.php">費用削減例</a></li>
        <li><a href="m_intro.php">会社情報</a></li>
      </ul>
    </div> <!-- wrap_header -->
</body>
</html>

<!-- <style type="text/css">
*{border:0;margin:0;padding:0;}
ul,ol,li { list-style:none; }
body{font-size:14px;line-height:16px;}
.li_faq {width: 100%; border:1px solid #d4d4d4; overflow: hidden; position:relative; height: 60px;}
.li_faq img {width: 100%;}
.li_faq.on{height: 419px;}
.li_faq .txt_faqtit {width: 100%;}
.li_faq .txt_faqtit img{width: 100%}
/*.ul_ac {width:400px; margin:40px auto;}*/
</style> -->