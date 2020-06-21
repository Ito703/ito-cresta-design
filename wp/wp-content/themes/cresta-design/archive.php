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
                <li><span>WORKS</span></li>
            </ul>

            <div class="inner">
                <?php if ( have_posts() ):　//投稿ある場合 ?>
                <ul class="article-list">
                    <?php
                    //投稿内容を繰り返す
                    while ( have_posts() ) : the_post();
                        $url = get_permalink($post->id);
                        $title = $post->post_title;
                        $terms = get_the_terms($post->id, 'workscat');
                        $term = $terms[0]->name;
                        $date = get_the_time("Y/m/d", $post->ID);
                        $thumbnail_id = get_post_thumbnail_id();
                        if($thumbnail_id != ''){
                            $thumbnail = wp_get_attachment_image_src($thumbnail_id, 'thumbnail', true);
                            $thumbnail_url = $thumbnail[0];
                        } else {
                            $thumbnail_url = '/img/common/default.jpg';
                        }
                    ?>
                    <li>
                        <a href="<?php echo $url; ?>">
                            <figure>
                                <img src="<?php echo $thumbnail_url; ?>" alt="">
                            </figure>
                            <div>
                                <time><?php echo $date; ?></time>
                                <span class="category"><?php echo $term; ?></span>
                                <h2><?php echo $title; ?></h2>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php else: ?>
                    <p class="article-list">対象の記事はございません</p>
                <?php endif; ?>

                <?php include $path. 'libs/sidebar.php'; ?>
            </div>

            <?php
            $count_posts = wp_count_posts('works');
            $count = $count_posts->publish;
            if( $count > 10 ):
            ?>
            <nav class="pagination">
                <?php wp_pagenavi(); ?>
            </nav>
            <?php endif; ?>
        </main>

    </div>

    <?php include $path. 'libs/footer.php'; ?>
    <?php include $path. 'libs/script.php'; ?>
    <?php wp_footer(); ?>
</body>
</html>
