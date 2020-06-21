<aside>
    <div class="article-nav">
        <h4 class="article-nav__title">Archive</h4>
        <ul>
            <?php wp_get_archives('type=monthly&post_type=works'); ?>
        </ul>
    </div>
    <div class="article-nav">
        <h4 class="article-nav__title">Category</h4>
        <ul>
        <?php
            $terms = get_terms(
                'workscat',
                array(
                    'hide_empty' => false,
                )
            );
            foreach ($terms as $key => $term) {
            $link = get_term_link($term);
            echo '<li><a href="'.$link.'">'.$term->name.'</a></li>';
            }
        ?>
        </ul>
    </div>
</aside>
