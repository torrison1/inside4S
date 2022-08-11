<!doctype html>
<html lang="en">
<head>
    <!-- //i--- Google Analytics Code place ; inside_template ; torrison ; 01.08.2018 ; 10a ; blue ---/ -->
    <?=$inside4_website->ga_code()?>

    <!-- //i--- $seo_title - set in Controller ; inside_template ; torrison ; 01.08.2018 ; 1 ---/ -->
    <title><?= $seo_title?></title>

    <!-- //i--- $seo_description - set in Controller ; inside_template ; torrison ; 01.08.2018 ; 3 ---/ -->
    <meta name="description" content="<?=$seo_description?>">

    <!-- //i--- UTF-8 charset ; inside_template ; torrison ; 01.08.2018 ; 4 ---/ -->
    <meta charset="utf-8">

    <meta name="author" content="Digital-Outsourcing.com">

    <!-- //i--- Viewport for Mobile ; inside_template ; torrison ; 01.08.2018 ; m1 ---/ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ---------------------- Social Meta Data ---------------------- -->
    <!-- //i--- Social Tags ; inside_template ; torrison ; 01.08.2018 ; s1 ---/ -->
    <meta property="og:title" content="<?=$seo_title?>" />
    <meta property="og:description" content="<?=$seo_description?>" />

    <meta property="og:url" content="<?='https://'.$_SERVER['HTTP_HOST']?>" />
    <meta property="fb:app_id" content="<?=$inside4_website->config['facebook']['app_id']?>" />


    <meta property="og:image" content="<?=$inside4_website->config['facebook']['fb_img_url']?>" />
    <meta property="og:image:width" content="400" />
    <link rel="image_src" href="<?=$inside4_website->config['facebook']['fb_img_url']?>" />
    <meta itemprop="image" content="<?=$inside4_website->config['facebook']['fb_img_url']?>">


    <!-- //i--- favicon.ico ; inside_template ; torrison ; 01.08.2018 ; 8 ---/ -->
    <link rel="icon" href="/Public/AppFront/app_default_template/favicon/favicon.ico">

    <!-- //i--- Bootstrap core CSS - bootstrap-4.0 ; inside_template ; torrison ; 01.08.2018 ; 9 ---/ -->
    <link href="/Public/Bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- //i--- Custom styles for this template core.css ; inside_template ; torrison ; 01.08.2018 ; 10 ---/ -->
    <link href="/Public/AppFront/app_default_template/css/core.css" rel="stylesheet">

    <!-- //i--- Default font : Ubuntu +Condensed ; inside_template ; torrison ; 01.08.2018 ; 11 ---/ -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">

    <!-- //i--- Icons Font : fontawesome.com v5.2.0 ; inside_template ; torrison ; 01.08.2018 ; 12 ---/ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- //i--- Place for MAIN STYLE.CSS ; inside_template ; torrison ; 01.08.2018 ; 13 ---/ -->
    <!-- ... -->

    <!-- //i--- JQuery 1.11.3 OR Slim JQuery ; inside_template ; torrison ; 01.08.2018 ; 15 ---/ -->
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>

    <!-- //i--- JQuery UI 1.10.1 ; inside_template ; torrison ; 01.08.2018 ; 16 ---/ -->
    <script src="/Public/JQuery/jquery-ui-1.10.1.custom.min.js"></script>

    <!-- //i--- JQuery.Form ; inside_template ; torrison ; 01.08.2018 ; 17 ---/ -->
    <script src="/Public/JQuery/jquery.form.js"></script>

    <!-- //i--- JQuery.Cookie ; inside_template ; torrison ; 01.08.2018 ; 17a ---/ -->
    <script src="/Public/JQuery/jquery.cookie.js"></script>


    <!-- //i--- include "Views/".$template_folder."/Pages/" . $page_center."_head.php" in HEAD ; inside_template ; torrison ; 15.08.2018 ; 18 ---/ -->
    <?php
    if (@file_exists("Views/".$template_folder."/Pages/" . $page_center."_head.php"))
    {
        include "Views/".$template_folder."/Pages/" . $page_center."_head.php";

    }
    ?>

</head>

<body>

<header>

    <!-- //i--- Top-Line Header in Fixed navbar ; inside_template ; torrison ; 01.08.2018 ; 19 ---/ -->
    <nav class="top_line">
        <div class="container">
            <div class="blocks-list row">
                <div class="col-sm-8 col-md-6 text-left left_block">
                    <!-- //i--- Social Links / Buttons ; inside_template ; torrison ; 01.08.2018 ; 11a ; red ---/ -->
                    <a href="#" class="fb-link" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" class="tg-link" title="Telegram"><i class="fab fa-telegram"></i></a>
                    <a href="#" class="vb-link" title="Viber"><i class="fab fa-viber"></i></a>
                    <a href="#" class="ln-link" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="wa-link" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="sk-link" title="Skype"><i class="fab fa-skype"></i></a>
                    <a href="#" class="instagram-link" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="yt-link" title="YouTube"><i class="fab fa-youtube"></i></a>
                    <!--
                    <a href="/fb" class="g-link" title="Google Plus"><i class="fab fa-google"></i></a>
                    -->

                </div>
                <div class="col-sm-4 col-md-6 text-right right_block ">

                    <!-- //i--- Few Social Links / Buttons for Mobile View ; inside_template ; torrison ; 01.08.2018 ; 11b ; red ---/ -->
                    <div class="icons_mob d-none">
                        <a href="#" class="fb-link" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="tg-link" title="Telegram"><i class="fab fa-telegram"></i></a>
                        <a href="#" class="vb-link" title="Viber"><i class="fab fa-viber"></i></a>
                        <a href="#" class="ln-link" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    </div>

                    <!-- //i--- Phone and Email ; inside_template ; torrison ; 01.08.2018 ; 11b ---/ -->
                    <div class="phone d-inline-block">+38 093 155 29 70 | </div>

                    <div class="email d-inline-block">torrison1@gmail.com | </div>

                    <!-- //i--- Language Switch Select ; inside_template ; torrison ; 01.08.2018 ; 20 ---/ -->
                    <div class="dropdown" style="display: inline-block;">
                        <button class="dropdown-toggle" type="button" id="lang_dropdown" data-toggle="dropdown">
                            <?=$t->activeLanguage?>
                        </button>
                        <div class="dropdown-menu" id="lang_dropdown_menu" aria-labelledby="lang_dropdown">
                            <?php foreach ($t->getLanguages() as $lang) {

                                $url = $_SERVER['REQUEST_URI'];

                                // Clear 'ru', 'en' in URL
                                foreach ($t->getLanguages() as $lang_2) {
                                    $url = str_replace('/'.$lang_2['lang_alias'],'', $url);
                                }

                                $url = '/'.$lang['lang_alias'].$url;

                                $url = str_replace('/'.$GLOBALS['config']['Translate']['default_lang'],'', $url); // Default

                                ?>
                                <a class="dropdown-item<?php if ($lang['lang_alias'] == $t->activeLanguage) echo " active"; ?>" href="<?=$url?>"><?=$lang['lang_alias']?></a>
                            <?php } ?>
                        </div>
                    </div>
                    |
                    <div class="profile d-inline-block">
                        <!-- //i--- Login / Profile Menu Link ; inside_template ; torrison ; 01.08.2018 ; 11 ---/ -->
                        <?php if ($inside4_auth->is_logged_in()) { ?>
                            <a href="<?=$lang_link_prefix?>/auth/page/profile"><i class="fas fa-user"></i> <?=$t->get('my_profile');?></a>
                        <?php } else { ?>
                            <a href="<?=$lang_link_prefix?>/auth/page/login"><i class="fas fa-user"></i> <?=$t->get('login');?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- //i--- Menu Header ; inside_template ; torrison ; 01.08.2018 ; 10a ---/ -->
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light top_navbar">
        <div class="container">

            <div class="navbar-left">
                <a class="navbar-brand" href="<?=$lang_link_prefix?>/" style="position: relative;">
                    <!-- //i--- Name and Logo ; inside_template ; torrison ; 01.08.2018 ; 11c ---/ -->
                    <img src="/Public/AppFront/app_default_template/img/logo_bot.svg" alt="" style="display: inline-block; top: -6px; left: -4px; height: 55px; position: absolute;">
                    <span style="margin-left: 33px;">Chatbots System 0.1</span></a>
            </div>

            <!-- //i--- Mobile friendly Menu ; inside_template ; torrison ; 01.08.2018 ; 11f ---/ -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item<?php if ($_SERVER['REQUEST_URI'] == '/') echo " active";?>">
                        <a class="nav-link" href="<?=$lang_link_prefix?>/"><?=$t->get('main_page');?></a>
                    </li>
                    <li class="nav-item<?php if ($_SERVER['REQUEST_URI'] == '/content/info/feed') echo " active";?>">
                        <a class="nav-link" href="<?=$lang_link_prefix?>/content/info/feed"><?=$t->get('info');?></a>
                    </li>
                    <li class="nav-item<?php if ($_SERVER['REQUEST_URI'] == '/content/page/contacts') echo " active";?>">
                        <a class="nav-link" href="<?=$lang_link_prefix?>/content/page/contacts"><?=$t->get('contacts');?></a>
                    </li>
                </ul>

            </div>
        </div>

    </nav>
</header>

<!-- //i--- Content insert from: "Views/".$template_folder."/Pages/" . $page_center.".php" ; inside_template ; torrison ; 01.08.2018 ; 22 ---/ -->
<?php include "Views/".$template_folder."/Pages/" . $page_center.".php" ?>

<!-- //i--- Sticky Footer ; inside_template ; torrison ; 01.08.2018 ; 23 ---/ -->
<footer class="footer pt-4 pt-md-5 border-top">
    <div class="container mt-2">
        <div class="row">
            <div class="col-12 col-md text-center">
                <!-- //i--- Footer Logo + Copy text ; inside_template ; torrison ; 01.08.2018 ; 23a ---/ -->
                Inside 4 : Pure Code
                <small class="d-block mb-3 text-muted">
                    &copy; All right reserved
                    <a href="<?=$lang_link_prefix?>/website/main/privacy">Usage Agreement</a>
                </small>
                </div>
        </div>
    </div>
</footer>

<!-- //i--- Template Footer Scripts ; inside_template ; torrison ; 01.08.2018 ; 24 ---/ -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="/Public/Bootstrap/popper.min.js"></script>
<script src="/Public/Bootstrap/bootstrap.js"></script>
<script src="/Public/Bootstrap/holder.min.js"></script>
<script src="/Public/AppFront/app_default_template/js/custom.js"></script>

<!-- //i--- Common JavaScript file : custom.js ; inside_template ; torrison ; 01.08.2018 ; 29 ---/ -->
<!-- ... -->

<!-- //i--- Footer Scripts included from "Views/".$template_folder."/Pages/" . $page_center."_footer.php" before END /body ; inside_template ; torrison ; 01.08.2018 ; 30 ---/ -->
<?php

if (@file_exists("Views/".$template_folder."/Pages/" . $page_center."_footer.php"))
{
    include "Views/".$template_folder."/Pages/" . $page_center."_footer.php";

}
?>

</body>
</html>