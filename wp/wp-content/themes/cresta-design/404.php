<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include $path . 'libs/meta.php';
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body class="notfound">

    <?php include $path. 'libs/header.php'; ?>

    <div class="wrap">
        <div class="sub-mv">
            <h2 class="sub-mv__title">404</h2>
        </div>

        <main>
            <ul class="breadcrumb">
                <li><a href="/">HOME</a></li>
                <li><span>404</span></li>
            </ul>

            <div class="inner">
                <p>ページが見つかりません</p>
            </div>
        </main>

    </div>

    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>
