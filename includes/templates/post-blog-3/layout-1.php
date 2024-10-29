<?php 
if (!defined('ABSPATH')) {
    exit; // No direct access allowed
}
?>
<div class="anb-blog-post-overlay layout-three ananta-blog-card <?php echo $attributes['categoryPosition']; ?>">
        <?php if ($attributes['checkPostImage']) : ?>
            <?php if ($post_img == '') : ?>
                <div class="anb-back-img bshre ananta-blog-card-image">
            <?php else : ?>
                <?php $bg = "background-image: url(" . esc_url($post_img) . ");"; ?>
                <div class="anb-back-img bshre ananta-blog-card-image" style="<?php echo esc_attr($bg); ?>">
            <?php endif; ?>
                <a href="<?php echo esc_url($post_link); ?>" class="anb-link-div"></a>
        <?php endif; ?>
        <div class='inner'>
            <div class="inner-card ananta-blog-card-inner">
                <?php if ($attributes['checkPostCat']) { ?>
                    <div class="anb-blog-category ananta-blog-card-category">
                        <?php foreach ($category_object as $value) {
                            $category_link = get_category_link($value->cat_ID);
                            ?>
                            <a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($value->name); ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
                <h4 class="title ananta-blog-card-title">
                    <a title="<?php echo esc_html(get_the_title($post)); ?>" href="<?php echo esc_url($post_link); ?>"><?php echo esc_html(get_the_title($post)); ?></a>
                </h4>
                <div class="anb-blog-meta ananta-blog-card-meta">
                    <?php if ($attributes['checkPostAuthor']) { ?>
                        <span class="anb-author">
                            <a href="<?php echo esc_url($author_url); ?>">
                                <?php if ($attributes['checkPostAavtars']) { ?>
                                    <img src="<?php echo esc_url($get_author_gravatar); ?>" class="anb-author-pic" alt="Admin">
                                <?php } ?>
                                <?php echo esc_html($author_name); ?>
                            </a>
                        </span>
                    <?php } ?>

                    <?php if ($attributes['checkPostDate']) { ?>
                        <span class="anb-blog-date">
                            <a href="#"><i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?></a>
                        </span>
                    <?php } ?>

                    <?php if ($attributes['checkPostComment']) { ?>
                        <span class="anb-comments-link">
                            <a href="<?php echo esc_url($comment_link); ?>"><i class="far fa-comments"></i><?php echo esc_html($comment_count); ?></a>
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>