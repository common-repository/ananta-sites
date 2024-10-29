<?php 
/**
 * Callback function that renders the block on the front-end
 */
function ananta_post_blog_render_callback($attributes) {
    $catarr = [];

    // Arguments and WP_Query instance invocation
    $args = array(
        'posts_per_page' => $attributes['numberOfItem'],
        'order' => $attributes['order'],
        'orderby' => $attributes['orderBy'],
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

    $post_query = new WP_Query($args);

    $i = ":100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic";
    $strCatTypography = isset($attributes['categoryTypography']['fontFamily']['value']) ? $attributes['categoryTypography']['fontFamily']['value'] : '';
	$strCatTypography = preg_replace('/\s+/', '+', $strCatTypography);
    $strTitleTypography = isset($attributes['titleTypography']['fontFamily']['value']) ? $attributes['titleTypography']['fontFamily']['value'] : '';
	$strTitleTypography = preg_replace('/\s+/', '+', $strTitleTypography);
    $strMetaTypography = isset($attributes['metaTypography']['fontFamily']['value']) ? $attributes['metaTypography']['fontFamily']['value'] : '';
	$strMetaTypography = preg_replace('/\s+/', '+', $strMetaTypography);
    $strDesTypography = isset($attributes['descriptionTypography']['fontFamily']['value']) ? $attributes['descriptionTypography']['fontFamily']['value'] : '';
	$strDesTypography = preg_replace('/\s+/', '+', $strDesTypography);
    $strBtnTypography = isset($attributes['btnTypography']['fontFamily']['value']) ? $attributes['btnTypography']['fontFamily']['value'] : '';
	$strBtnTypography = preg_replace('/\s+/', '+', $strBtnTypography);
    
    // Custom loop
    ob_start();
    ?>
	<style>
        <?php if (!empty($strCatTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strCatTypography) . esc_attr($i)?>");
        <?php } if (!empty($strTitleTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strTitleTypography) . esc_attr($i)?>");
        <?php } if (!empty($strMetaTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strMetaTypography) . esc_attr($i)?>");
        <?php } if (!empty($strDesTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strDesTypography) . esc_attr($i)?>");
        <?php } if (!empty($strBtnTypography)) { ?>
        @import url("https://fonts.googleapis.com/css?family=<?php echo esc_attr($strBtnTypography) . esc_attr($i)?>");
        <?php } ?>

        .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-post .anb-more-link a i{
            <?php if ($attributes['iconPosition'] === 'before' ) { ?>
                <?php if (!empty($attributes['beforeIconSpacing']['desktop']['val'])) { ?>                
                    margin-right: <?php echo esc_attr($attributes['beforeIconSpacing']['desktop']['val'].$attributes['beforeIconSpacing']['desktop']['unit']); ?>;
                <?php } ?>
            <?php } else { ?>
                <?php if (!empty($attributes['afterIconSpacing']['desktop']['val'])) { ?>                
                    margin-left: <?php echo esc_attr($attributes['afterIconSpacing']['desktop']['val'].$attributes['afterIconSpacing']['desktop']['unit']); ?>;
                <?php } ?>
            <?php } ?>
        }
        .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
            <?php if (!empty($attributes['columns']['desktop']['val'])) { ?>                
                grid-template-columns: repeat(<?php echo esc_attr($attributes['columns']['desktop']['val']); ?>, minmax(0, 1fr));
            <?php } ?>
            <?php if (!empty($attributes['columnsGap']['desktop']['val'])) { ?>                
                grid-column-gap: <?php echo esc_attr($attributes['columnsGap']['desktop']['val']); ?><?php echo esc_attr($attributes['columnsGap']['desktop']['unit']); ?>;
            <?php } ?>
            <?php if (!empty($attributes['rowGap']['desktop']['val'])) { ?>   
                grid-row-gap: <?php echo esc_attr($attributes['rowGap']['desktop']['val']); ?><?php echo esc_attr($attributes['rowGap']['desktop']['unit']); ?>;
            <?php } ?>
        }
        <?php  
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card ",
                    'type' => [
                        "background" => $attributes['postBgColor'],
                        "border" => $attributes['postBorderType'],
                        "border-radius" => $attributes['postBorderRadius']['desktop'],
                        "padding" => $attributes['postPadding']['desktop'],
                        "margin" => $attributes['postMargin']['desktop'],
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
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "width" => $attributes['postImageWidth']['desktop']['val'] . $attributes['postImageWidth']['desktop']['unit'],
                        "height" => $attributes['postImageHeight']['desktop']['val'] . $attributes['postImageHeight']['desktop']['unit'],
                        "border" => $attributes['postImageBorderType'],
                        "border-radius" => $attributes['postImageBorderRadius']['desktop'],
                        "margin" => $attributes['postImageMargin']['desktop'],
                        "box-shadow" => $attributes['postImageShadow'],
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
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-title",
                    'type' => [
                        "margin" => $attributes['titleMargin']['desktop'],
                        "typography" => $attributes['titleTypography'],
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
                if (!empty($attributes['descriptionAlignment']['desktop'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description p",
                        'type' => [
                            "text-align" => $attributes['descriptionAlignment']['desktop'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description p",
                    'type' => [
                        "typography" => $attributes['descriptionTypography'],
                        "color" => $attributes['descriptionColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description",
                    'type' => [
                        "margin" => $attributes['descriptionMargin']['desktop'],
                    ],
                    ],
                ));
                if (!empty($attributes['btnAlignment']['desktop'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-more-link",
                        'type' => [
                            "text-align" => $attributes['btnAlignment']['desktop'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button",
                    'type' => [
                        "background-color" => $attributes['btnBgColor'],
                        "color" => $attributes['btnColor'],
                        "border" => $attributes['btnBorder'],
                        "border-radius" => $attributes['btnBorderRadius']['desktop'],
                        "padding" => $attributes['btnPadding']['desktop'],
                        "margin" => $attributes['btnMargin']['desktop'],
                        "box-shadow" => $attributes['btnBoxShadow'],
                        "typography" => $attributes['btnTypography'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button i",
                    'type' => [
                        "color" => $attributes['btnColor'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button:hover",
                    'type' => [
                        "background-color" => $attributes['btnBgColorHover'],
                        "color" => $attributes['btnColorHover'],
                        "border" => $attributes['btnBorderHover'],
                        "border-radius" => $attributes['btnBorderRadiusHover'],
                        "box-shadow" => $attributes['btnBoxShadowHover'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button:hover i",
                    'type' => [
                        "color" => $attributes['btnColorHover'],
                    ],
                    ],
                ));
        ?>
        @media all and (max-width: 1024px){
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-post .anb-more-link a i{
                <?php if ($attributes['iconPosition'] === 'before' ) { ?>
                    <?php if (!empty($attributes['beforeIconSpacing']['tablet']['val'])) { ?>                
                        margin-right: <?php echo esc_attr($attributes['beforeIconSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['beforeIconSpacing']['tablet']['unit']); ?>;
                    <?php } ?>
                <?php } else { ?>
                    <?php if (!empty($attributes['afterIconSpacing']['tablet']['val'])) { ?>                
                        margin-left: <?php echo esc_attr($attributes['afterIconSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['afterIconSpacing']['tablet']['unit']); ?>;
                    <?php } ?>
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
                <?php if (!empty($attributes['columns']['tablet']['val'])) { ?>                
                    grid-template-columns: repeat(<?php echo esc_attr($attributes['columns']['tablet']['val']); ?>, minmax(0, 1fr));
                <?php } ?>
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
                        "margin" => $attributes['postMargin']['tablet'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-inner ",
                    'type' => [
                        "padding" => $attributes['postInnerPadding']['tablet'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "width" => $attributes['postImageWidth']['tablet']['val'] . $attributes['postImageWidth']['tablet']['unit'],
                        "height" => $attributes['postImageHeight']['tablet']['val'] . $attributes['postImageHeight']['tablet']['unit'],
                        "border-radius" => $attributes['postImageBorderRadius']['tablet'],
                        "margin" => $attributes['postImageMargin']['tablet'],
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
                if (!empty($attributes['descriptionAlignment']['tablet'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description p",
                        'type' => [
                            "text-align" => $attributes['descriptionAlignment']['tablet'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description",
                    'type' => [
                        "margin" => $attributes['descriptionMargin']['tablet'],
                    ],
                    ],
                ));
                if (!empty($attributes['btnAlignment']['tablet'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-more-link",
                        'type' => [
                            "text-align" => $attributes['btnAlignment']['tablet'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button",
                    'type' => [
                        "border-radius" => $attributes['btnBorderRadius']['tablet'],
                        "padding" => $attributes['btnPadding']['tablet'],
                        "margin" => $attributes['btnMargin']['tablet'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button:hover",
                    'type' => [
                        "border-radius" => $attributes['btnBorderRadiusHover']['tablet'],
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
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-title{
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
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-description p{
                <?php if (!empty($attributes['descriptionTypography']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['descriptionTypography']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['descriptionTypography']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['descriptionTypography']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['descriptionTypography']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button{
                border-top-width: <?php echo esc_attr($attributes['btnBorder']['width']['tablet']['top']); ?><?php echo esc_attr($attributes['btnBorder']['width']['tablet']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['btnBorder']['width']['tablet']['right']); ?><?php echo esc_attr($attributes['btnBorder']['width']['tablet']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['btnBorder']['width']['tablet']['bottom']); ?><?php echo esc_attr($attributes['btnBorder']['width']['tablet']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['btnBorder']['width']['tablet']['left']); ?><?php echo esc_attr($attributes['btnBorder']['width']['tablet']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button{
                <?php if (!empty($attributes['btnTypography']['fontSize']['tablet']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['btnTypography']['fontSize']['tablet']['val']); ?><?php echo esc_attr($attributes['btnTypography']['fontSize']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['lineHeight']['tablet']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['btnTypography']['lineHeight']['tablet']['val']); ?><?php echo esc_attr($attributes['btnTypography']['lineHeight']['tablet']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['letterSpacing']['tablet']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['btnTypography']['letterSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['btnTypography']['letterSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['wordSpacing']['tablet']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['btnTypography']['wordSpacing']['tablet']['val']); ?><?php echo esc_attr($attributes['btnTypography']['wordSpacing']['tablet']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button:hover{
                border-top-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['top']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['right']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['bottom']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['left']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['tablet']['unit']); ?>;
            }
        }
        @media all and (max-width: 767px) {
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>.hidden-mobile{
                display: none;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-post .anb-more-link a i{
                <?php if ($attributes['iconPosition'] === 'before' ) { ?>
                    <?php if (!empty($attributes['beforeIconSpacing']['mobile']['val'])) { ?>                
                        margin-right: <?php echo esc_attr($attributes['beforeIconSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['beforeIconSpacing']['mobile']['unit']); ?>;
                    <?php } ?>
                <?php } else { ?>
                    <?php if (!empty($attributes['afterIconSpacing']['mobile']['val'])) { ?>                
                        margin-left: <?php echo esc_attr($attributes['afterIconSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['afterIconSpacing']['mobile']['unit']); ?>;
                    <?php } ?>
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?> .anb-blog-grid{
                <?php if (!empty($attributes['columns']['mobile']['val'])) { ?>                
                    grid-template-columns: repeat(<?php echo esc_attr($attributes['columns']['mobile']['val']); ?>, minmax(0, 1fr));
                <?php } ?>
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
                        "margin" => $attributes['postMargin']['mobile'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-inner ",
                    'type' => [
                        "padding" => $attributes['postInnerPadding']['mobile'],
                    ],
                ]));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-image ",
                    'type' => [
                        "width" => $attributes['postImageWidth']['mobile']['val'] . $attributes['postImageWidth']['mobile']['unit'],
                        "height" => $attributes['postImageHeight']['mobile']['val'] . $attributes['postImageHeight']['mobile']['unit'],
                        "border-radius" => $attributes['postImageBorderRadius']['mobile'],
                        "margin" => $attributes['postImageMargin']['mobile'],
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
                if (!empty($attributes['metaAlignment']['mobile'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-meta",
                        'type' => [
                            "justify-content" => $attributes['metaAlignment']['mobile'],
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
                if (!empty($attributes['descriptionAlignment']['mobile'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description p",
                        'type' => [
                            "text-align" => $attributes['descriptionAlignment']['mobile'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-description",
                    'type' => [
                        "margin" => $attributes['descriptionMargin']['mobile'],
                    ],
                    ],
                ));
                if (!empty($attributes['btnAlignment']['mobile'])) {
                    echo esc_attr(compileStyle([
                        'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .anb-more-link",
                        'type' => [
                            "text-align" => $attributes['btnAlignment']['mobile'],
                        ],
                        ],
                    ));
                }
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button",
                    'type' => [
                        "border-radius" => $attributes['btnBorderRadius']['mobile'],
                        "padding" => $attributes['btnPadding']['mobile'],
                        "margin" => $attributes['btnMargin']['mobile'],
                    ],
                    ],
                ));
                echo esc_attr(compileStyle([
                    'selector' => ".ananta-block-container-{$attributes['yourId']} .anb-blog-grid .ananta-blog-card-button:hover",
                    'type' => [
                        "border-radius" => $attributes['btnBorderRadiusHover']['mobile'],
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
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-title{
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
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-description p{
                <?php if (!empty($attributes['descriptionTypography']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['descriptionTypography']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['descriptionTypography']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['descriptionTypography']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['descriptionTypography']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['descriptionTypography']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['descriptionTypography']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button{
                border-top-width: <?php echo esc_attr($attributes['btnBorder']['width']['mobile']['top']); ?><?php echo esc_attr($attributes['btnBorder']['width']['mobile']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['btnBorder']['width']['mobile']['right']); ?><?php echo esc_attr($attributes['btnBorder']['width']['mobile']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['btnBorder']['width']['mobile']['bottom']); ?><?php echo esc_attr($attributes['btnBorder']['width']['mobile']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['btnBorder']['width']['mobile']['left']); ?><?php echo esc_attr($attributes['btnBorder']['width']['mobile']['unit']); ?>;
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button{
                <?php if (!empty($attributes['btnTypography']['fontSize']['mobile']['val'])) { ?>
                    font-size: <?php echo esc_attr($attributes['btnTypography']['fontSize']['mobile']['val']); ?><?php echo esc_attr($attributes['btnTypography']['fontSize']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['lineHeight']['mobile']['val'])) { ?>
                    line-height: <?php echo esc_attr($attributes['btnTypography']['lineHeight']['mobile']['val']); ?><?php echo esc_attr($attributes['btnTypography']['lineHeight']['mobile']['unit']); ?>;
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['letterSpacing']['mobile']['val'])) { ?>
                    letter-spacing: <?php echo esc_attr($attributes['btnTypography']['letterSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['btnTypography']['letterSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
                <?php if (!empty($attributes['btnTypography']['wordSpacing']['mobile']['val'])) { ?>
                    word-spacing: <?php echo esc_attr($attributes['btnTypography']['wordSpacing']['mobile']['val']); ?><?php echo esc_attr($attributes['btnTypography']['wordSpacing']['mobile']['unit']); ?>;   
                <?php } ?>
            }
            .ananta-block-container-<?php echo esc_attr($attributes['yourId']); ?>  .anb-blog-grid .ananta-blog-card-button:hover{
                border-top-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['top']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['unit']); ?>;
                border-right-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['right']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['unit']); ?>;
                border-bottom-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['bottom']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['unit']); ?>;
                border-left-width: <?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['left']); ?><?php echo esc_attr($attributes['btnBorderHover']['width']['mobile']['unit']); ?>;
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
		<div class="anb-blog-wrapper-<?php echo $attributes['yourId']; ?> anb-blog-grid ">
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

					?>
				<div class="anb-blog-post ananta-blog-card">
					<?php if ($attributes['checkPostImage'] && $post_img) { ?>
						<div class="anb-blog-thumb md ananta-blog-card-image" >
                        <img src="<?php echo esc_url($post_img); ?>" title="<?php echo get_the_title($thumbnail_id); ?>" alt="<?php echo get_the_title($thumbnail_id); ?>" class="anb-link-div anb-back-img"/>
						</div>
					<?php } ?>
					<article class="small ananta-blog-card-inner">
						<?php if ($attributes['checkPostCat']) { ?>
							<div class="anb-blog-category ananta-blog-card-category">
								<?php foreach ($category_object as $value) {
									$category_link = get_category_link($value->cat_ID);
									?>
									<a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($value->name); ?></a>
								<?php } ?>
							</div>
						<?php } ?>
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
						<h4 class="title ananta-blog-card-title">
							<a title="<?php echo esc_html(get_the_title($post)); ?>" href="<?php echo esc_url($post_link); ?>"><?php echo esc_html(get_the_title($post)); ?></a>
						</h4>
						<?php
							$excerpt = apply_filters('the_excerpt', get_post_field('post_excerpt', $post, 'display'));
							if (empty($excerpt) && isset($attributes['excerptLength'])) {
								$content = get_the_content();
								$content = preg_replace(array('/\<figcaption>.*\<\/figcaption>/', '/\[caption.*\[\/caption\]/'), '', $content);
								$excerpt = apply_filters('the_excerpt', wp_trim_words($content, $attributes['excerptLength']));
							}
							if (!$excerpt) {
								$excerpt = null;
							}
							if ($attributes['checkPostExcerpt'] && $excerpt !== null) {
								?>
								<div class="discription ananta-blog-card-description">	<?php echo wp_kses_post($excerpt); ?>
                                </div>
								<?php
							}
						if ($attributes['checkPostButton']) {
							?>
                            <div class="anb-more-link">
                                <a href="<?php echo esc_url($post_link); ?>" class="ananta-blog-card-button"
                                    <?php if ($attributes['checkNewTab']): ?>
                                        target="_blank" rel="noopener noreferrer"
                                    <?php endif; ?>>
                                    <?php if ($attributes['iconPosition'] === 'before'): ?>
                                        <i class="<?php echo $attributes['readMoreicon']; ?>"></i>
                                    <?php endif; ?>
                                    <?php echo $attributes['linkText']; ?>
                                    <?php if ($attributes['iconPosition'] === 'after'): ?>
                                        <i class="<?php echo $attributes['readMoreicon']; ?>"></i>
                                    <?php endif; ?>
                                </a>
                            </div>
							<?php
						}
						?>
					</article>
				</div>
				<?php
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
function ananta_post_featured_images_restapi( $data, $post, $context ) {

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
  add_filter( 'rest_prepare_post', 'ananta_post_featured_images_restapi', 10, 3 );

  function ananta_blocks_post_register_rest_fields() {
    /* Add landscape featured image source */
    /* Add author info */
    register_rest_field(
        'post',
        'author_info',
        array(
            'get_callback'    => 'ananta_post_blocks_get_author_info',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'ananta_blocks_post_register_rest_fields' );

  function ananta_post_blocks_get_author_info( $object,  $field_name, $request ) {
    /* Get the author name */
    $author_data['display_name'] = get_the_author_meta( 'display_name', $object['author'] );
    /* Get the author link */
    $author_data['author_link'] = get_author_posts_url( $object['author'] );
    /* Return the author data */
    return $author_data;
}
