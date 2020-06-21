<?php
$path = realpath(dirname(__FILE__) . '') . "/../../../../";
include $path . 'libs/meta.php';
wp_head();
?>
</head>

<body class="works">
    <?php include $path. 'libs/header.php'; ?>

    <div class="wrap">
        <div class="sub-mv">
            <h2 class="sub-mv__title">Works</h2>
        </div>

        <main>
            <ul class="breadcrumb">
                <li><a href="/">HOME</a></li>
                <li><a href="/works">WORKS</a></li>
                <li><span><?php the_title(); ?></span></li>
            </ul>

            <div class="inner">

                <article>
                    <?php
                    $terms = get_the_terms($post->id, 'workscat');
                    $term = $terms[0]->name;
                    $date = get_the_time("Y/m/d", $post->ID);
                    ?>
                    <time><?php echo $date; ?></time>
                    <span class="category"><?php echo $term; ?></span>
                    <h2><?php the_title(); ?></h2>

                    <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    if($thumbnail_id != ''){
                        $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                        echo '
                        <div class="thumbnail">
                            <img src="'.$thumbnail[0].'" alt="">
                        </div>
                        ';
                    }
                    ?>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                </article>

                <?php include $path. 'libs/sidebar.php'; ?>
            </div>

            <div class="back-btn"><a href="/works">一覧へ</a></div>
        </main>

    </div>

    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>
