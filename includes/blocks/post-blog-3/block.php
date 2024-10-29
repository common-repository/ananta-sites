<?php 
/**
 * Callback function that renders the block on the front-end
 */
function ananta_post_blog_3_render_callback($attributes) {
    $catarr = [];

    // Arguments and WP_Query instance invocation
    $args = array(
        'posts_per_page' => $attributes['numberOfItem'],
        'order' => $attributes['order'],
        'orderby' => $attributes['orderBy'],
        'offset' => $attributes['postOffset'],
    );

    $arrCatLength = json_decode($attributes['categoryArray']);
    if (!empty($arrCatLength) || !($arrCatLength == "")) {
        $catsId = [];
        foreach ($arrCatLength as $cat) {
            $catsId[] = $cat->value;
        }
        $args['cat'] = $catsId;
    }

    $arrTagLength = json_decode($attributes['tagArray']);
    if (!empty($arrTagLength) || !($arrTagLength == "")) {
        $tagsId = [];
        foreach ($arrTagLength as $tag) {
            $tagsId[] = $tag->value;
        }
        $args['tag__in'] = $tagsId;
    }

    $arrAuthorLength = json_decode($attributes['authorArray']);
    if (!empty($arrAuthorLength) || !($arrAuthorLength == "")) {
        $authorId = [];
        foreach ($arrAuthorLength as $author) {
            $authorId[] = $author->value;
        }

        $args['author__in'] = $authorId;
    }

    $post_layout = esc_attr( $attributes['layouts'] );

    $post_query = new WP_Query($args);

    $i = ":100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic";
    $strCatTypography = isset($attributes['categoryTypography']['fontFamily']['value']) ? $attributes['categoryTypography']['fontFamily']['value'] : '';
	$strCatTypography = preg_replace('/\s+/', '+', $strCatTypography);
    $strTitleTypography = isset($attributes['titleTypography']['fontFamily']['value']) ? $attributes['titleTypography']['fontFamily']['value'] : '';
    $strTitleTypography = preg_replace('/\s+/', '+', $strTitleTypography);
    $strTitleTypographySmall = isset($attributes['titleTypographySmall']['fontFamily']['value']) ? $attributes['titleTypographySmall']['fontFamily']['value'] : '';
	$strTitleTypographySmall = preg_replace('/\s+/', '+', $strTitleTypographySmall);
    $strMetaTypography = isset($attributes['metaTypography']['fontFamily']['value']) ? $attributes['metaTypography']['fontFamily']['value'] : '';
	$strMetaTypography = preg_replace('/\s+/', '+', $strMetaTypography);
    
    // Custom loop
    ob_start();
    ?>
	<style>
        <?php if (!empty($strCatTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strCatTypography) . esc_attr($i)?>");
        <?php } if (!empty($strTitleTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strTitleTypography) . esc_attr($i)?>");
        <?php } if (!empty($strTitleTypographySmall)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strTitleTypographySmall) . esc_attr($i)?>");
        <?php } if (!empty($strMetaTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strMetaTypography) . esc_attr($i)?>");
        <?php } ?>
        
        .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
            <?php if (!empty($attributes['columnsGap']['desktop']['val'])) { ?>                
                grid-column-gap: <?php echo esc_attr($attributes['columnsGap']['desktop']['val']); ?><?php echo esc_attr($attributes['columnsGap']['desktop']['unit']); ?>;
            <?php } ?>
            <?php if (!empty($attributes['rowGap']['desktop']['val'])) { ?>                
                grid-row-gap: <?php echo esc_attr($attributes['rowGap']['desktop']['val']); ?><?php echo esc_attr($attributes['rowGap']['desktop']['unit']); ?>;
            <?php } ?>
        }
        <?php              
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']}  .anb-blog-grid .anb-blog-post-overlay .inner ",
                    'type' => [
                        "justify-content" => $attributes['contentPosition'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card ",
                    'type' => [
                        "background" => $attributes['postBgColor'],
                        "border" => $attributes['postBorderType'],
                        "border-radius" => $attributes['postBorderRadius']['desktop'],
                        "padding" => $attributes['postPadding']['desktop'],
                        "box-shadow" => $attributes['postShadow'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card:hover ",
                    'type' => [
                        "background" => $attributes['postBgHoverColor'],
                        "box-shadow" => $attributes['postHoverShadow'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-inner ",
                    'type' => [
                        "padding" => $attributes['postInnerPadding']['desktop'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay .inner:after",
                    'type' => [
                        "dual-color" => $attributes['overlayColor'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay .inner:after",
                    'type' => [
                        "opacity" => $attributes['overlayOpacity'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image",
                    'type' => [
                        "height" => $attributes['postLargeImageHeight']['desktop']['val'] . $attributes['postLargeImageHeight']['desktop']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "border" => $attributes['postImageBorderType'],
                        "border-radius" => $attributes['postImageBorderRadius']['desktop'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category",
                    'type' => [
                        "left" => $attributes['categoryPositionLeft']['desktop']['val'] . $attributes['categoryPositionLeft']['desktop']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category",
                    'type' => [
                        "right" => $attributes['categoryPositionRight']['desktop']['val'] . $attributes['categoryPositionRight']['desktop']['unit'],
                    ],
                    ],
                ));
                if (!empty($attributes['categoryAlignment']['desktop'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category",
                        'type' => [
                            "text-align" => $attributes['categoryAlignment']['desktop'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category a",
                    'type' => [
                        "background-color" => $attributes['categoryBgColor'],
                        "color" => $attributes['categoryColor'],
                        "border" => $attributes['categoryBorderType'],
                        "border-radius" => $attributes['categoryBorderRadius']['desktop'],
                        "padding" => $attributes['categoryPadding']['desktop'],
                        "margin" => $attributes['categoryMargin']['desktop'],
                        "box-shadow" => $attributes['categoryShadow'],
                        "typography" => $attributes['categoryTypography'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category a:hover",
                    'type' => [
                        "background-color" => $attributes['categoryBgHoverColor'],
                        "color" => $attributes['categoryHoverColor'],
                    ],
                    ],
                ));
                if (!empty($attributes['titleAlignment']['desktop'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                        'type' => [
                            "text-align" => $attributes['titleAlignment']['desktop'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title",
                    'type' => [
                        "margin" => $attributes['titleMargin']['desktop'],
                        "typography" => $attributes['titleTypography'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title",
                    'type' => [
                        "typography" => $attributes['titleTypographySmall'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title a",
                    'type' => [
                        "color" => $attributes['titleColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title:hover a",
                    'type' => [
                        "color" => $attributes['titleHoverColor'],
                    ],
                    ],
                ));
                if (!empty($attributes['metaAlignment']['desktop'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta",
                        'type' => [
                            "justify-content" => $attributes['metaAlignment']['desktop'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a",
                    'type' => [
                        "margin" => $attributes['metaMargin']['desktop'],
                        "typography" => $attributes['metaTypography'],
                        "color" => $attributes['metaColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a i",
                    'type' => [
                        "color" => $attributes['metaIconColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a:hover",
                    'type' => [
                        "color" => $attributes['metaHoverColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a:hover i",
                    'type' => [
                        "color" => $attributes['metaIconHoverColor'],
                    ],
                    ],
                ));
        ?>
        @media all and (max-width: 1024px){
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
                <?php if (!empty($attributes['columnsGap']['tablet']['val'])) { ?>
                    grid-column-gap: <?php echo esc_attr($attributes['columnsGap']['tablet']['val']); ?><?php echo esc_attr($attributes['columnsGap']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['rowGap']['tablet']['val'])) { ?>                
                    grid-row-gap: <?php echo esc_attr($attributes['rowGap']['tablet']['val']); ?><?php echo esc_attr($attributes['rowGap']['tablet']['unit']); ?>;
                <?php } ?>
            }
            <?php 
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card ",
                    'type' => [
                        "border-radius" => $attributes['postBorderRadius']['tablet'],
                        "padding" => $attributes['postPadding']['tablet'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-inner ",
                    'type' => [
                        "padding" => $attributes['postInnerPadding']['tablet'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image",
                    'type' => [
                        "height" => $attributes['postLargeImageHeight']['tablet']['val'] . $attributes['postLargeImageHeight']['tablet']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "border-radius" => $attributes['postImageBorderRadius']['tablet'],
                    ],
                    ],
                ));
                if (!empty($attributes['categoryAlignment']['tablet'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category",
                        'type' => [
                            "text-align" => $attributes['categoryAlignment']['tablet'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category",
                    'type' => [
                        "left" => $attributes['categoryPositionLeft']['tablet']['val'] . $attributes['categoryPositionLeft']['tablet']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category",
                    'type' => [
                        "right" => $attributes['categoryPositionRight']['tablet']['val'] . $attributes['categoryPositionRight']['tablet']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category a",
                    'type' => [
                        "border-radius" => $attributes['categoryBorderRadius']['tablet'],
                        "padding" => $attributes['categoryPadding']['tablet'],
                        "margin" => $attributes['categoryMargin']['tablet'],
                    ],
                    ],
                ));
                if (!empty($attributes['titleAlignment']['tablet'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                        'type' => [
                            "text-align" => $attributes['titleAlignment']['tablet'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                    'type' => [
                        "margin" => $attributes['titleMargin']['tablet'],
                    ],
                    ],
                ));
                if (!empty($attributes['metaAlignment']['tablet'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta",
                        'type' => [
                            "justify-content" => $attributes['metaAlignment']['tablet'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a",
                    'type' => [
                        "margin" => $attributes['metaMargin']['tablet'],
                    ],
                    ],
                ));
            ?>
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card{
                border-top-width: <?php echo esc_attr($attributes['postBorderType']['width']['tablet']['top']); ?><?php echo esc_attr($attributes['postBorderType']['width']['tablet']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['postBorderType']['width']['tablet']['right']); ?><?php echo esc_attr($attributes['postBorderType']['width']['tablet']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['postBorderType']['width']['tablet']['bottom']); ?><?php echo esc_attr($attributes['postBorderType']['width']['tablet']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['postBorderType']['width']['tablet']['left']); ?><?php echo esc_attr($attributes['postBorderType']['width']['tablet']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-image{
                border-top-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['top']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['right']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['bottom']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['left']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['tablet']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-category a{
                border-top-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['top']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['right']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['bottom']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['left']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['tablet']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-category a{
                <?php if (!empty($attributes['categoryTypography']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['categoryTypography']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['categoryTypography']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['categoryTypography']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['categoryTypography']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title{
                <?php if (!empty($attributes['titleTypography']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['titleTypography']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypography']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['titleTypography']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypography']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['titleTypography']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypography']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['titleTypography']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypography']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title{
                <?php if (!empty($attributes['titleTypographySmall']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['titleTypographySmall']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['titleTypographySmall']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['titleTypographySmall']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['titleTypographySmall']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-meta a{
                <?php if (!empty($attributes['metaTypography']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['metaTypography']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['metaTypography']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['metaTypography']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['metaTypography']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['metaTypography']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['metaTypography']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['metaTypography']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['metaTypography']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
        }
        @media all and (max-width: 767px) {
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>.hidden-mobile{
                display: none;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
                <?php if (!empty($attributes['columnsGap']['mobile']['val'])) { ?>                
                    grid-column-gap: <?php echo esc_attr($attributes['columnsGap']['mobile']['val']); ?><?php echo esc_attr($attributes['columnsGap']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['rowGap']['mobile']['val'])) { ?>                
                    grid-row-gap: <?php echo esc_attr($attributes['rowGap']['mobile']['val']); ?><?php echo esc_attr($attributes['rowGap']['mobile']['unit']); ?>;
                <?php } ?>
            }
            <?php 
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card ",
                    'type' => [
                        "border-radius" => $attributes['postBorderRadius']['mobile'],
                        "padding" => $attributes['postPadding']['mobile'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-inner ",
                    'type' => [
                        "padding" => $attributes['postInnerPadding']['mobile'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image",
                    'type' => [
                        "height" => $attributes['postLargeImageHeight']['mobile']['val'] . $attributes['postLargeImageHeight']['mobile']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "border-radius" => $attributes['postImageBorderRadius']['mobile'],
                    ],
                    ],
                ));
                if (!empty($attributes['categoryAlignment']['mobile'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category",
                        'type' => [
                            "text-align" => $attributes['categoryAlignment']['mobile'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category",
                    'type' => [
                        "left" => $attributes['categoryPositionLeft']['mobile']['val'] . $attributes['categoryPositionLeft']['mobile']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category",
                    'type' => [
                        "right" => $attributes['categoryPositionRight']['mobile']['val'] . $attributes['categoryPositionRight']['mobile']['unit'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-category a",
                    'type' => [
                        "border-radius" => $attributes['categoryBorderRadius']['mobile'],
                        "padding" => $attributes['categoryPadding']['mobile'],
                        "margin" => $attributes['categoryMargin']['mobile'],
                    ],
                    ],
                ));
                if (!empty($attributes['titleAlignment']['mobile'])) { 
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                        'type' => [
                            "text-align" => $attributes['titleAlignment']['mobile'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                    'type' => [
                        "margin" => $attributes['titleMargin']['mobile'],
                    ],
                    ],
                ));
                if (!empty($attributes['titleAlignment']['mobile'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta",
                        'type' => [
                            "justify-content" => $attributes['titleAlignment']['mobile'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta a",
                    'type' => [
                        "margin" => $attributes['metaMargin']['mobile'],
                    ],
                    ],
                ));
            ?>
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card{
                border-top-width: <?php echo esc_attr($attributes['postBorderType']['width']['mobile']['top']); ?><?php echo esc_attr($attributes['postBorderType']['width']['mobile']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['postBorderType']['width']['mobile']['right']); ?><?php echo esc_attr($attributes['postBorderType']['width']['mobile']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['postBorderType']['width']['mobile']['bottom']); ?><?php echo esc_attr($attributes['postBorderType']['width']['mobile']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['postBorderType']['width']['mobile']['left']); ?><?php echo esc_attr($attributes['postBorderType']['width']['mobile']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-image{
                border-top-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['top']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['right']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['bottom']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['left']); ?><?php echo esc_attr($attributes['postImageBorderType']['width']['mobile']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-category a{
                border-top-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['top']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['right']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['bottom']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['left']); ?><?php echo esc_attr($attributes['categoryBorderType']['width']['mobile']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-category a{
                <?php if (!empty($attributes['categoryTypography']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['categoryTypography']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['categoryTypography']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['categoryTypography']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['categoryTypography']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['categoryTypography']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['categoryTypography']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title{
                <?php if (!empty($attributes['titleTypography']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['titleTypography']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypography']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['titleTypography']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypography']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['titleTypography']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypography']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['titleTypography']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['titleTypography']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypography']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title{
                <?php if (!empty($attributes['titleTypographySmall']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['titleTypographySmall']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['titleTypographySmall']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['titleTypographySmall']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['titleTypographySmall']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['titleTypographySmall']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['titleTypographySmall']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-meta a{
                <?php if (!empty($attributes['metaTypography']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['metaTypography']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['metaTypography']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['metaTypography']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['metaTypography']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['metaTypography']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['metaTypography']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['metaTypography']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['metaTypography']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['metaTypography']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
        }
        @media screen and (min-width: 1024px){
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>.hidden-desktop{
                display: none;
            }
        }
        @media screen and (max-width: 1024px) and (min-width: 767px){
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>.hidden-tablet{
                display: none;
            }
        }
    </style>
	<div class="ananta-block-container-<?php echo esc_attr( $attributes['yourId'] ); ?> <?php echo esc_attr( $attributes['hideDesktop'] ? 'hidden-desktop' : '' ); ?> <?php echo esc_attr( $attributes['hideTablet'] ? 'hidden-tablet' : '' ); ?> <?php echo esc_attr( $attributes['hideMobile'] ? 'hidden-mobile' : '' ); ?>">
		<div class="anb-blog-wrapper-<?php echo $attributes['yourId']; ?> anb-blog-grid <?php echo ($post_layout === 'Layout1') ? 'anb-grid-three' : 'anb-grid-four'; ?>">
			<?php
			if ($post_query->have_posts()) :
				while ($post_query->have_posts()) :
					$post_query->the_post();
					$post_ID = get_the_ID();
					$post = get_post($post_ID);
					setup_postdata($post);
					$post_link = get_permalink($post);
					$category_object = get_the_category($post_ID);
					$author_id = $post->post_author;
					$post_img = wp_get_attachment_url(get_post_thumbnail_id($post));
                    $thumbnail_id = get_post_thumbnail_id();
					$author_name = get_the_author_meta('display_name', $author_id);
					$author_url = get_author_posts_url($author_id);
					$get_author_gravatar = get_avatar_url($author_id) ? get_avatar_url($author_id) : "";
					$comments_count = wp_count_comments($post_ID)->approved = 0 ? "" : wp_count_comments($post_ID);
					$comment_count = ($comments_count->approved == 1 || $comments_count->approved == 0) ? $comments_count->approved . ' Comment' : $comments_count->approved . ' Comments';
					$comment_link = get_comments_link($post_ID);
                    $template_path = ANANTA_SITES_DIR_PATH . '/includes/templates/post-blog-3/';

					switch ($post_layout) {
						case 'Layout1':
							require $template_path. 'layout-1.php';
							break;
						case 'Layout2':
							require $template_path. 'layout-2.php';
							break;
						default:
							require $template_path. 'layout-1.php';
							break;
					}
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</div>
	</div>
    <?php

    return ob_get_clean();
}
/**
 * Add post featured image to the REST API response
 */
function ananta_post_blog_3_featured_images_restapi( $data, $post, $context ) {

    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    $thumbnail_url = wp_get_attachment_url( $thumbnail_id );

    if ( $thumbnail_url ) {
        $data->data['ananta_featured_image_url'] = $thumbnail_url;
    }
	$data->data['cats'] = '';
	foreach (get_the_category($data->data['id']) as $cat) {
		$category_link = get_category_link($cat->cat_ID);
		$data->data['cats'] .= '<a href="' . esc_url($category_link) . '" title="' . esc_attr($cat->name) . '" ">' . esc_html($cat->name) . '</a>';
	}

	$comments_count = wp_count_comments($data->data['id'])->approved = 0 ? "" : wp_count_comments($data->data['id']);
	$comment_count = ( $comments_count->approved == 1 || $comments_count->approved == 0 ) ? $comments_count->approved.' Comment': $comments_count->approved.' Comments';
	$comment_link = get_comments_link($data->data['id']);
	$data->data['ananta_comment'] = '';
	$data->data['ananta_comment'] .= '<span class="anb-comments-link"><a href="' . esc_url($comment_link) . '"><i class="far fa-comments"></i>' . esc_html($comment_count) . '</a> </span>';

	return $data;
  }
  add_filter( 'rest_prepare_post', 'ananta_post_blog_3_featured_images_restapi', 10, 3 );

  function ananta_blocks_post_3_register_rest_fields() {
    /* Add landscape featured image source */
    /* Add author info */
    register_rest_field(
        'post',
        'author_info',
        array(
            'get_callback'    => 'ananta_post_3_blocks_get_author_info',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'ananta_blocks_post_3_register_rest_fields' );

function ananta_post_3_blocks_get_author_info( $object,  $field_name, $request ) {
    /* Get the author name */
    $author_data['display_name'] = get_the_author_meta( 'display_name', $object['author'] );
    /* Get the author link */
    $author_data['author_link'] = get_author_posts_url( $object['author'] );
    /* Return the author data */
    return $author_data;
}
