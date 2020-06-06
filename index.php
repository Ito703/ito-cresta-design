<?php
$path = realpath(dirname(__FILE__) . '') . "/";
include $path . 'libs/meta.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">

</head>
<body class="index">

    <?php include $path. 'libs/header.php'; ?>

    <div class="wrap">
        <div class="mv">
            <h2>
                <span>Design for Smile.</span>
                <span>快適なオフィスを<br class="sp">デザインする</span>
            </h2>
            <div class="slider">
                <div class="slide" style="background-image: url(./img/index/fv-bgi_01.jpg);"></div>
                <div class="slide" style="background-image: url(./img/index/fv-bgi_02.jpg);"></div>
                <div class="slide" style="background-image: url(./img/index/fv-bgi_03.jpg);"></div>
            </div>
        </div>

        <main>
            <section class="concept" id="concept">
                <div class="inner">
                    <h3 class="sec-title">CONCEPT</h3>

                    <p class="concept__heading">
                        “働きたくなる空間”をデザインする<br class="sp">ことで<br class="pc">
                        人々を幸せにする。
                    </p>

                    <figure class="concept__contents">
                        <p>私たちは、オフィスに特化した空間デザイン専門としております。その理由は、「働きたくなる空間で仕事ができれば多くの人を幸せにできるのではないか」と考えるためです。そんな想いの株式会社Cresta Designだからこそできる空間デザインを提供させていただきます。</p>
                        <div class="img">
                            <img src="./img/index/concept-image.jpg" alt="">
                        </div>
                    </figure>
                </div>
                <div class="inner-large">
                    <p class="bg-text">Our Concept</p>
                </div>
            </section>

            <section class="works" id="works">
                <div class="inner-large">
                    <h3 class="sec-title white">Works</h3>
                </div>

                <div class="inner">
                    <ul class="card-list">
                        <li>
                            <a href="">
                                <div class="img">
                                    <img src="./img/index/card-img01.jpg" alt="">
                                </div>
                                <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img">
                                    <img src="./img/index/card-img02.jpg" alt="">
                                </div>
                                <p>新規サイトを公開しました。今回のサイトは白と黒を基調にした</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img">
                                    <img src="./img/index/card-img03.jpg" alt="">
                                </div>
                                <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo APP_URL; ?>works/" class="viewmore">View more</a>
                </div>

                <div class="inner-large">
                    <p class="bg-text">Our Works</p>
                </div>
            </section>

            <section class="service" id="service">
                <div class="inner">
                    <h3 class="sec-title">Service</h3>
                </div>
                <ul class="service__link">
                    <li>
                        <a href="#">
                            <div class="img"><img src="./img/index/service-img01.jpg" alt=""></div>
                            <span class="title">Hearing</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="./img/index/service-img02.jpg" alt=""></div>
                            <span class="title">Planning</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="img"><img src="./img/index/service-img03.jpg" alt=""></div>
                            <span class="title">Direction</span>
                        </a>
                    </li>
                </ul>
                <div class="inner-large">
                    <p class="bg-text">Our Service</p>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="inner-large">
                    <h3 class="sec-title white">Contact</h3>
                </div>
                <div class="inner">
                    <p class="contact__heading">お気軽にご相談ください。</p>
                    <a href="#" class="viewmore">Contact</a>
                </div>
                <div class="inner-large">
                    <p class="bg-text">Contact us</p>
                </div>
            </section>

        </main>
    </div>

    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>
        $(function () {
			$('.slider').slick({
				infinite: true,
                autoplay: true,
                arrows: false,
                dots: false,
                autoplaySpeed: 6000,
                fade: true,
                draggable : true,
			})
		})
    </script>

</body>
</html>
