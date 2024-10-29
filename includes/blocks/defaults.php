<?php

$defaultValues = array(
    'ananta/post-grid' => array(
        'attributes' => array(
            'yourId' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'hideDesktop' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideTablet' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideMobile' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'numberOfItem' => array(
                'type'    => 'number',
                'default' => 3,
            ),
            'columns' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 3,
                    ),
                    'tablet' => array(
                        'val' => '2',
                    ),
                    'mobile' => array(
                        'val' => '1',
                    ),
                ),
            ),
            'columnsGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'rowGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'checkPostDate' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostExcerpt' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAuthor' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAavtars'=> array(
                'type'=>'boolean',
                'default'=> true,
            ),
            'checkPostButton'=> array(
                'type'=>'boolean',
                'default'=> true,
            ),
            'checkPostImage' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'checkPostComment' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'checkPostCat' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'order' => array(
                'type'    => 'string',
                'default' => 'desc',
            ),
            'orderBy' => array(
                'type'    => 'string',
                'default' => 'date',
            ),
            'categories' => array(
                'type' => 'string',
                'default' => ''
            ),
            'categoryArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'excerptLength' => array(
                'type'    => 'number',
                'default' => 20,
            ),
            'tagArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'authorArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'checkNewTab' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'linkText' => array(
                'type' => 'string',
                'default' => 'Read More ',
            ),
            'readMoreicon' => array(
                'type' => 'string',
                'default' => 'fa fa-arrow-right',
            ),
            'iconPosition' => array(
                'type' => 'string',
                'default' => 'after',
            ),
            'beforeIconSpacing' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'afterIconSpacing' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'postHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'postImageWidth' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverWidth' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHeight' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverHeight' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => 'undefined',
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'postImageHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'categoryBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'categoryHoverTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'titleColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleHoverTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'titleHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'metaColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'metaHoverTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'metaMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'descriptionAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'descriptionTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'descriptionMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'descriptionColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'btnAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'btnBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'btnBgColorHover' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'btnColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'btnColorHover' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'btnBorder' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'btnBorderHover' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'btnBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnBorderRadiusHover' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnMarginHover' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnPaddingHover' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'btnBoxShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'btnBoxShadowHover' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'btnTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'btnTypographyHover' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'overlayBgColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayBorder' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'overlayBgHoverColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayBorderHover' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'overlayBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayBorderRadiusHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayMarginHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayPadding' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayPaddingHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayBoxShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'overlayBoxShadowHover' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'opacity' => array(
                'type' => 'number',
            ),
            'imageOverlayColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'imageWidth' => array(
                'type' => 'number',
            ),
            'imageHeight' => array(
                'type' => 'number',
            ),
            'imageBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'imageMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'alignment' => array(
                'type'    => 'string',
                'default' => 'flex-start',
            ),
            'blogCatTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'blogCatTypographyHover' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'blogCatColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'blogCatBgColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'blogCatBorder' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'blogCatColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'blogCatBgColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'blogCatBorderHover' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'blogCatBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatBorderRadiusHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatMarginHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatPadding' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatPaddingHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'blogCatBoxShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'blogCatBoxShadowHover' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'overlayCatTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'overlayCatTypographyHover' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'overlayCatColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayCatBgColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayCatBorder' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'overlayCatColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayCatBgColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayCatBorderHover' => array(
                'type'    => 'object',
                'default' => array(
                    'width' => '',
                    'style' => '',
                    'color' => '',
                ),
            ),
            'overlayCatBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatBorderRadiusHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatMarginHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatPadding' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatPaddingHover' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'overlayCatBoxShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'overlayCatBoxShadowHover' => array(
                'type' => 'object',
                'default' => array(
                    'color' => '',
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'inset' => false,
                    'enable' => false,
                )
            ),
            'userGradientBackground' => array(
                'type'    => 'string',
                'default' => 'linear-gradient(180deg, #FF008A 0%, #FF00C7 100%)',
            ),
            'userBackground' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'userMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'userBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'userWidth' => array(
                'type' => 'number',
            ),
            'userHeight' => array(
                'type' => 'number',
            ),
            'overlayTitleColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'titleColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'overlayTitleColorHover' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'titleTypographyHover' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'desColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'desTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => 'undefined',
                    'letterSpacing' => '',
                    'lineHeight' => 'undefined',
                    'fontFamily' => '',
                    'fontWeight' => '',
                    'fontStyle' => 'normal',
                    'fontTransform' => 'none',
                    'fontDecoration' => 'none',
                    'enable' => false,
                )
            ),
            'desMargin' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'separatorHeight' => array(
                'type' => 'number',
            ),
            'separatorSpacing' => array(
                'type' => 'object',
                'default' => array(
                    'top' => '',
                    'left' => '',
                    'right' => '',
                    'bottom' => '',
                )
            ),
            'separatorColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'separatorOverlayColor' => array(
                'type'    => 'string',
                'default' => '',
            ),
        )
    ),
    'ananta/post-blog-2' => array(
        'attributes' => array(
            'yourId' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'hideDesktop' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideTablet' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideMobile' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'numberOfItem' => array(
                'type'    => 'number',
                'default' => 3,
            ),
            'columns' => array(
                'type'    => 'number',
                'default' => 3,
            ),
            'columnsGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'rowGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'checkPostDate' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAuthor' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAavtars'=> array(
                'type'=>'boolean',
                'default'=> true,
            ),
            'checkPostImage' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'checkPostComment' => array(
                'type'    => 'boolean',
                'default' => false,
            ), 
            'checkPostCat' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'order' => array(
                'type'    => 'string',
                'default' => 'desc',
            ),
            'orderBy' => array(
                'type'    => 'string',
                'default' => 'date',
            ),
            'categories' => array(
                'type' => 'string',
                'default' => ''
            ),
            'categoryArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'excerptLength' => array(
                'type'    => 'number',
                'default' => 20,
            ),
            'tagArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'authorArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'contentPosition' => array(
                'type' => 'string',
                'default' => 'flex-end',
            ),
            'postBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'postHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'overlayColor' => array(
                'type' => 'object',
                'default' => array(
                    'colorOne' => array(
                        'enable' => false,
                        'color' => '#090947',
                    ),
                    'colorTwo' => array(
                        'enable' => false,
                        'color' => '#5a585a',
                    ),
                    'colorOpt' => 'gradient',
                    'locationOne' => '0',
                    'locationTwo' => '74',
                    'type' => 'linear-gradient',
                    'position' => 'center center',
                    'angle' => '315',
                )
            ),
            'overlayOpacity' => array(
                'type'    => 'number',
                'default' => 0.7,
            ),
            'postLargeImageHeight' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => "450",
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => "450",
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => "300",
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postSmallImageHeight' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => "225",
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => "225",
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => "225",
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'categoryPosition' => array(
                'type'    => 'string',
                'default' => 'category-bottom',
            ),
            'categoryPositionRight' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryPositionLeft' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'titleColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleTypographySmall' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'titleHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'metaColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'metaMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
        )
    ),
    'ananta/post-blog-3' => array(
        'attributes' => array(
            'yourId' => array(
                'type'    => 'string',
                'default' => '',
            ),
            'hideDesktop' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideTablet' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'hideMobile' => array(
                'type'    => 'boolean',
                'default' => false,
            ),
            'layouts' => array(
                'type'    => 'string',
                'default' => 'Layout1',
            ),
            'numberOfItem' => array(
                'type'    => 'number',
                'default' => 4,
            ),
            'postOffset' => array(
                'type'    => 'number',
                'default' => 0,
            ),
            'columnsGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'rowGap' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '24',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'checkPostDate' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAuthor' => array(
                'type'    => 'boolean',
                'default' => true,
            ),
            'checkPostAavtars'=> array(
                'type'=>'boolean',
                'default'=> true,
            ),
            'checkPostImage' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'checkPostComment' => array(
                'type'    => 'boolean',
                'default' => false,
            ), 
            'checkPostCat' => array(
                'type'    => 'boolean',
                'default' => true,
            ), 
            'order' => array(
                'type'    => 'string',
                'default' => 'desc',
            ),
            'orderBy' => array(
                'type'    => 'string',
                'default' => 'date',
            ),
            'categories' => array(
                'type' => 'string',
                'default' => ''
            ),
            'categoryArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'excerptLength' => array(
                'type'    => 'number',
                'default' => 20,
            ),
            'tagArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'authorArray' => array(
                'type' => 'string',
                'default' => '',
            ),
            'contentPosition' => array(
                'type' => 'string',
                'default' => 'flex-end',
            ),
            'postBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'postHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postInnerHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'postHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'overlayColor' => array(
                'type' => 'object',
                'default' => array(
                    'colorOne' => array(
                        'enable' => false,
                        'color' => '#090947',
                    ),
                    'colorTwo' => array(
                        'enable' => false,
                        'color' => '#5a585a',
                    ),
                    'colorOpt' => 'gradient',
                    'locationOne' => '0',
                    'locationTwo' => '74',
                    'type' => 'linear-gradient',
                    'position' => 'center center',
                    'angle' => '315',
                )
            ),
            'overlayOpacity' => array(
                'type'    => 'number',
                'default' => 0.7,
            ),
            'postLargeImageHeight' => array(
                'type'    => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => "450",
			            'unit' => "px"
                    ),
                    'tablet' => array(
                        'val' => "450",
			            'unit' => "px"
                    ),
                    'mobile' => array(
                        'val' => "300",
			            'unit' => "px"
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'postImageBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'postImageHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'categoryPosition' => array(
                'type'    => 'string',
                'default' => 'category-bottom',
            ),
            'categoryPositionRight' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryPositionLeft' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'val' => '20',
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryBgColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBgHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'categoryHoverBorderType' => array(
                'type'    => 'object',
                'default' => array(
                    'type'    => 'default',
                    'width' => array(
                        'desktop' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'tablet' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'mobile' => array(
                            'top' => '',
                            'left' => '',
                            'right' => '',
                            'bottom' => '',
                            'link' => true,
                            'unit' => 'px',
                        ),
                        'resOption'    => 'Desktop',
                    ),
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                ),
            ),
            'categoryBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverBorderRadius' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverPadding' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'categoryShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryHoverShadow' => array(
                'type' => 'object',
                'default' => array(
                    'color' => array(
                        'enable' => false,
                        'color' => '',
                    ),
                    'horizontal' => 'undefined',
                    'vertical' => 'undefined',
                    'blur' => 'undefined',
                    'spread' => 'undefined',
                    'position' => '',
                    'enable' => false,
                )
            ),
            'categoryTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'titleColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'titleTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleTypographySmall' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'titleMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'titleHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaAlignment' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
            ),
            'metaColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaIconHoverColor' => array(
                'type'    => 'object',
                'default' => array(
                    'enable' => false,
                    'color' => '',
                ),
            ),
            'metaTypography' => array(
                'type' => 'object',
                'default' => array(
                    'fontSize' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'letterSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'wordSpacing' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'lineHeight' => array(
                        'desktop' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'tablet' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                        'mobile' => array(
                            'val' => 'undefined',
                            'unit' => "px"
                        ),
                    ),
                    'enable'    => false,
                    'fontFamily'    => '',
                    'fontWeight'    => '',
                    'fontStyle'    => 'normal',
                    'fontTransform'    => 'none',
                    'fontDecoration'    => 'none',
                ),
            ),
            'metaMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
            'metaHoverMargin' => array(
                'type' => 'object',
                'default' => array(
                    'desktop' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'tablet' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'mobile' => array(
                        'top' => '',
                        'left' => '',
                        'right' => '',
                        'bottom' => '',
                        'link' => true,
                        'unit' => 'px',
                    ),
                    'resOption'    => 'Desktop',
                ),
            ),
        )
    ),
);