<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>ℬ𝖚𝖇𝖇𝖑𝔂 ❕𓂃 ࣪</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/front/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>assets/css/lightbox.css">
    <!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="<?= site_url('home') ?>" class="logo">
                            <strong><?= $konfig->judul_website ?></strong>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="<?= site_url('home') ?>" class="active">Home</a></li>
                            <!-- <li class="has-sub">
                                <a href="#">Pages
                                    <?php foreach ($kategori as $kate) { ?>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                                    <?= $kate['nama_kategori'] ?>
                                                </a>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </a>
                            </li> -->
                            <?php foreach ($kategori as $kate) { ?>
                                <li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                        <?= $kate['nama_kategori'] ?>
                                    </a></li>
                            <?php } ?>
                            <div class="main-button-gradient">
                                <a href="<?= base_url('auth'); ?>">LOGIN</a>
                            </div>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h4>More About</h4>
                        <h1><?= $konten->judul; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="get-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-heading">
                        <h6>Get info</h6>
                        <h4><em><?= $konten->judul; ?></em></h4>
                        <small class="mr-3"><i class="fa fa-user text-dark"></i> <?= $konten->nama; ?></small>
                        <small class="mr-3"><i class="fa fa-tag text-dark"></i> <?= $konten->nama_kategori; ?></small>
                    </div>
                </div>
                <p class="mt-4"><?= $konten->keterangan; ?></p>
                <br>
                <a href="<?= $konten->link ?>"><?= $konten->link ?></a>

            </div>
        </div>
    </section>

    <section class="contact-us our-office">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-info">
                        <div class="section-heading">

                            <h4>Get closer to <em>ℬ𝖚𝖇𝖇𝖑𝔂</em></h4>
                        </div>
                        <p><?= $konfig->profil_website ?></p>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="video">
                        <div class="thumb">
                            <img src="<?= base_url('assets/front/') ?>assets/images/uu.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul class="social-icons">
                        <li><a href="<?= $konfig->telegram ?>"><i class="fa fa-send"></i></a></li>
                        <li><a href="<?= $konfig->instagram ?>"><i class="fa fa-instagram"></i></a></li>

                        <li><a href="<?= $konfig->tiktok ?>"><i class="fa fa-user"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <p class="copyright"> Copyright © 2023 Kay Co., Ltd. All Rights Reserved.
                        <br><i class="fa fa-envelope"></i> <a><?= $konfig->email ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/front/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('assets/front/') ?>assets/js/isotope.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/owl-carousel.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/lightbox.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/tabs.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/video.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/slick-slider.js"></script>
    <script src="<?= base_url('assets/front/') ?>assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
                direction = section.replace(/#/, ''),
                reqSection = $('.section').filter('[data-section="' + direction + '"]'),
                reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
                $('body, html').animate({
                        scrollTop: reqSectionPos
                    },
                    800);
            } else {
                $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function() {
                var
                    $this = $(this),
                    topEdge = $this.offset().top - 80,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop();
                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var
                        currentId = $this.data('section'),
                        reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                    reqLink.closest('li').addClass('active').
                    siblings().removeClass('active');
                }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function() {
            checkSection();
        });
    </script>
</body>

</html>