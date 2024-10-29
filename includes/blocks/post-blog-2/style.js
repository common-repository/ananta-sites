/**
 * Block Style
 */
import { CompileStyle } from '/src/components/compileStyle'; 
export function Style(props) {
    const { attributes, setAttributes, name: blockName } = props;
    const i = ":100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic";
    let allFonts = [
        attributes.categoryTypography.fontFamily.value,
        attributes.titleTypography.fontFamily.value,
        attributes.titleTypographySmall.fontFamily.value,
        attributes.metaTypography.fontFamily.value,
    ];
    const googleFonts = () => {
        var fonts = '';
        allFonts.map((val) => {
            if(val !== undefined && val !== "undefined" && val !== "" ){
                var font=val.replace(/\s+/g, '+');
                fonts += `@import url('https://fonts.googleapis.com/css?family=` + `${font}` + `${i}');`
            }
        });
        return fonts;
    }

    return(
        <style >
        {` ${googleFonts()}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid`,
                type: {
                    "grid-column-gap": `${attributes.columnsGap.desktop.val}${attributes.columnsGap.desktop.unit}`,
                    "grid-row-gap": `${attributes.rowGap.desktop.val}${attributes.rowGap.desktop.unit}`,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId}  .anb-blog-grid .anb-blog-post-overlay .inner`,
                type: {
                    "justify-content": attributes.contentPosition,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card`,
                type: {
                    "background": attributes.postBgColor,
                    "border": attributes.postBorderType,
                    "border-radius": attributes.postBorderRadius.desktop,
                    "padding": attributes.postPadding.desktop,
                    "box-shadow": attributes.postShadow,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover`,
                type: {
                    "background": attributes.postBgHoverColor,
                    "border": attributes.postHoverBorderType,
                    "border-radius": attributes.postHoverBorderRadius.desktop,
                    "padding": attributes.postHoverPadding.desktop,
                    "box-shadow": attributes.postHoverShadow,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card .ananta-blog-card-inner`,
                type: {
                    "padding": attributes.postInnerPadding.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-inner`,
                type: {
                    "padding": attributes.postInnerHoverPadding.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay .inner:after`,
                type: {
                    "dual-color": attributes.overlayColor,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay .inner:after`,
                type: {
                    "opacity": attributes.overlayOpacity,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image`,
                type: {
                    "height": `${attributes.postLargeImageHeight.desktop.val}${attributes.postLargeImageHeight.desktop.unit}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-image`,
                type: {
                    "height": `${attributes.postSmallImageHeight.desktop.val}${attributes.postSmallImageHeight.desktop.unit}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                type: {
                    "border": attributes.postImageBorderType,
                    "border-radius": attributes.postImageBorderRadius.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                type: {
                    "border": attributes.postImageHoverBorderType,
                    "border-radius": attributes.postImageHoverBorderRadius.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category`,
                type: {
                    "left": `${attributes.categoryPositionLeft.desktop.val}${attributes.categoryPositionLeft.desktop.unit}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category`,
                type: {
                    "right": `${attributes.categoryPositionRight.desktop.val}${attributes.categoryPositionRight.desktop.unit}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category`,
                type: {
                    "text-align": `${attributes.categoryAlignment.desktop}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a`,
                type: {
                    "background": attributes.categoryBgColor,
                    "color": attributes.categoryColor,
                    "border": attributes.categoryBorderType,
                    "border-radius": attributes.categoryBorderRadius.desktop,
                    "padding": attributes.categoryPadding.desktop,
                    "margin": attributes.categoryMargin.desktop,
                    "box-shadow": attributes.categoryShadow,
                    "typography": attributes.categoryTypography,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a:hover`,
                type: {
                    "background": attributes.categoryBgHoverColor,
                    "color": attributes.categoryHoverColor,
                    "border": attributes.categoryHoverBorderType,
                    "border-radius": attributes.categoryHoverBorderRadius.desktop,
                    "padding": attributes.categoryHoverPadding.desktop,
                    "margin": attributes.categoryHoverMargin.desktop,
                    "box-shadow": attributes.categoryHoverShadow,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title`,
                type: {
                    "text-align": `${attributes.titleAlignment.desktop}`,
                    "typography": attributes.titleTypography,
                    "margin": attributes.titleMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title`,
                type: {
                    "typography": attributes.titleTypographySmall,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title a`,
                type: {
                    "color": attributes.titleColor,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title:hover`,
                type: {
                    "margin": attributes.titleHoverMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title:hover a`,
                type: {
                    "color": attributes.titleHoverColor,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta`,
                type: {
                    "justify-content": `${attributes.metaAlignment.desktop}`,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a`,
                type: {
                    "color": attributes.metaColor,
                    "typography": attributes.metaTypography,
                    "margin": attributes.metaMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a i`,
                type: {
                    "color": attributes.metaIconColor,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a:hover`,
                type: {
                    "color": attributes.metaHoverColor,
                    "margin": attributes.metaHoverMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a:hover i`,
                type: {
                    "color": attributes.metaIconHoverColor,
                },
            })}
            @media all and (max-width: 1024px){
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid`,
                    type: {
                        "grid-column-gap": `${attributes.columnsGap.tablet.val}${attributes.columnsGap.tablet.unit}`,
                        "grid-row-gap": `${attributes.rowGap.tablet.val}${attributes.rowGap.tablet.unit}`,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card`,
                    type: {
                        "border-width": attributes.postBorderType.width.tablet,
                        "border-radius": attributes.postBorderRadius.tablet,
                        "padding": attributes.postPadding.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover`,
                    type: {
                        "border-width": attributes.postHoverBorderType.width.tablet,
                        "border-radius": attributes.postHoverBorderRadius.tablet,
                        "padding": attributes.postHoverPadding.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card .ananta-blog-card-inner`,
                    type: {
                        "padding": attributes.postInnerPadding.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-inner`,
                    type: {
                        "padding": attributes.postInnerHoverPadding.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image`,
                    type: {
                        "height": `${attributes.postLargeImageHeight.tablet.val}${attributes.postLargeImageHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-image`,
                    type: {
                        "height": `${attributes.postSmallImageHeight.tablet.val}${attributes.postSmallImageHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                    type: {
                        "border-width": attributes.postImageBorderType.width.tablet,
                        "border-radius": attributes.postImageBorderRadius.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                    type: {
                        "border-width": attributes.postImageHoverBorderType.width.tablet,
                        "border-radius": attributes.postImageHoverBorderRadius.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category`,
                    type: {
                        "left": `${attributes.categoryPositionLeft.tablet.val}${attributes.categoryPositionLeft.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category`,
                    type: {
                        "right": `${attributes.categoryPositionRight.tablet.val}${attributes.categoryPositionRight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category`,
                    type: {
                        "text-align": `${attributes.categoryAlignment.tablet}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a`,
                    type: {
                        "border-width": attributes.categoryBorderType.width.tablet,
                        "border-radius": attributes.categoryBorderRadius.tablet,
                        "padding": attributes.categoryPadding.tablet,
                        "margin": attributes.categoryMargin.tablet,
                        "font-size": `${attributes.categoryTypography.fontSize.tablet.val}${attributes.categoryTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.categoryTypography.letterSpacing.tablet.val}${attributes.categoryTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.categoryTypography.wordSpacing.tablet.val}${attributes.categoryTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.categoryTypography.lineHeight.tablet.val}${attributes.categoryTypography.lineHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a:hover`,
                    type: {
                        "border-width": attributes.categoryHoverBorderType.width.tablet,
                        "border-radius": attributes.categoryHoverBorderRadius.tablet,
                        "padding": attributes.categoryHoverPadding.tablet,
                        "margin": attributes.categoryHoverMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title`,
                    type: {
                        "font-size": `${attributes.titleTypographySmall.fontSize.tablet.val}${attributes.titleTypographySmall.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.titleTypographySmall.letterSpacing.tablet.val}${attributes.titleTypographySmall.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.titleTypographySmall.wordSpacing.tablet.val}${attributes.titleTypographySmall.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.titleTypographySmall.lineHeight.tablet.val}${attributes.titleTypographySmall.lineHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title`,
                    type: {
                        "text-align": `${attributes.titleAlignment.tablet}`,
                        "font-size": `${attributes.titleTypography.fontSize.tablet.val}${attributes.titleTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.titleTypography.letterSpacing.tablet.val}${attributes.titleTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.titleTypography.wordSpacing.tablet.val}${attributes.titleTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.titleTypography.lineHeight.tablet.val}${attributes.titleTypography.lineHeight.tablet.unit}`,
                        "margin": attributes.titleMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta`,
                    type: {
                        "justify-content": `${attributes.metaAlignment.tablet}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a`,
                    type: {
                        "font-size": `${attributes.metaTypography.fontSize.tablet.val}${attributes.metaTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.metaTypography.letterSpacing.tablet.val}${attributes.metaTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.metaTypography.wordSpacing.tablet.val}${attributes.metaTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.metaTypography.lineHeight.tablet.val}${attributes.metaTypography.lineHeight.tablet.unit}`,
                        "margin": attributes.metaMargin.tablet,
                    },
                })}
            }

            @media all and (max-width: 767px) {
                ${CompileStyle({
                    selector: `.wp-block .ananta-block-container-${attributes.yourId}.hidden-mobile`,
                    type: {
                        "display": "block",
                        "opacity": "0.5"
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId}.hidden-mobile`,
                    type: {
                        "display": "none",
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid`,
                    type: {
                        "grid-column-gap": `${attributes.columnsGap.mobile.val}${attributes.columnsGap.mobile.unit}`,
                        "grid-row-gap": `${attributes.rowGap.mobile.val}${attributes.rowGap.mobile.unit}`,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card`,
                    type: {
                        "border-width": attributes.postBorderType.width.mobile,
                        "border-radius": attributes.postBorderRadius.mobile,
                        "padding": attributes.postPadding.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover`,
                    type: {
                        "border-width": attributes.postHoverBorderType.width.mobile,
                        "border-radius": attributes.postHoverBorderRadius.mobile,
                        "padding": attributes.postHoverPadding.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card .ananta-blog-card-inner`,
                    type: {
                        "padding": attributes.postInnerPadding.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-inner`,
                    type: {
                        "padding": attributes.postInnerHoverPadding.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-image`,
                    type: {
                        "height": `${attributes.postLargeImageHeight.mobile.val}${attributes.postLargeImageHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-image`,
                    type: {
                        "height": `${attributes.postSmallImageHeight.mobile.val}${attributes.postSmallImageHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                    type: {
                        "border-width": attributes.postImageBorderType.width.mobile,
                        "border-radius": attributes.postImageBorderRadius.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                    type: {
                        "border-width": attributes.postImageHoverBorderType.width.mobile,
                        "border-radius": attributes.postImageHoverBorderRadius.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-left .ananta-blog-card-category`,
                    type: {
                        "left": `${attributes.categoryPositionLeft.mobile.val}${attributes.categoryPositionLeft.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay.category-top-right .ananta-blog-card-category`,
                    type: {
                        "right": `${attributes.categoryPositionRight.mobile.val}${attributes.categoryPositionRight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category`,
                    type: {
                        "text-align": `${attributes.categoryAlignment.mobile}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a`,
                    type: {
                        "border-width": attributes.categoryBorderType.width.mobile,
                        "border-radius": attributes.categoryBorderRadius.mobile,
                        "padding": attributes.categoryPadding.mobile,
                        "margin": attributes.categoryMargin.mobile,
                        "font-size": `${attributes.categoryTypography.fontSize.mobile.val}${attributes.categoryTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.categoryTypography.letterSpacing.mobile.val}${attributes.categoryTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.categoryTypography.wordSpacing.mobile.val}${attributes.categoryTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.categoryTypography.lineHeight.mobile.val}${attributes.categoryTypography.lineHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-category a:hover`,
                    type: {
                        "border-width": attributes.categoryHoverBorderType.width.mobile,
                        "border-radius": attributes.categoryHoverBorderRadius.mobile,
                        "padding": attributes.categoryHoverPadding.mobile,
                        "margin": attributes.categoryHoverMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:first-child .ananta-blog-card-title`,
                    type: {
                        "text-align": `${attributes.titleAlignment.mobile}`,
                        "font-size": `${attributes.titleTypography.fontSize.mobile.val}${attributes.titleTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.titleTypography.letterSpacing.mobile.val}${attributes.titleTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.titleTypography.wordSpacing.mobile.val}${attributes.titleTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.titleTypography.lineHeight.mobile.val}${attributes.titleTypography.lineHeight.mobile.unit}`,
                        "margin": attributes.titleMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-blog-post-overlay:not(:first-child) .ananta-blog-card-title`,
                    type: {
                        "font-size": `${attributes.titleTypographySmall.fontSize.mobile.val}${attributes.titleTypographySmall.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.titleTypographySmall.letterSpacing.mobile.val}${attributes.titleTypographySmall.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.titleTypographySmall.wordSpacing.mobile.val}${attributes.titleTypographySmall.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.titleTypographySmall.lineHeight.mobile.val}${attributes.titleTypographySmall.lineHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta`,
                    type: {
                        "justify-content": `${attributes.metaAlignment.mobile}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a`,
                    type: {
                        "font-size": `${attributes.metaTypography.fontSize.mobile.val}${attributes.metaTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.metaTypography.letterSpacing.mobile.val}${attributes.metaTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.metaTypography.wordSpacing.mobile.val}${attributes.metaTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.metaTypography.lineHeight.mobile.val}${attributes.metaTypography.lineHeight.mobile.unit}`,
                        "margin": attributes.metaMargin.mobile,
                    },
                })}
            }
            @media screen and (min-width: 1024px){
                ${CompileStyle({
                    selector: `.wp-block .ananta-block-container-${attributes.yourId}.hidden-desktop`,
                    type: {
                        "display": "block",
                        "opacity": "0.5"
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId}.hidden-desktop`,
                    type: {
                        "display": "none",
                        },
                })}
            }
            @media screen and (max-width: 1024px) and (min-width: 767px){
                ${CompileStyle({
                    selector: `.wp-block .ananta-block-container-${attributes.yourId}.hidden-tablet`,
                    type: {
                        "display": "block",
                        "opacity": "0.5"
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId}.hidden-tablet`,
                    type: {
                        "display": "none",
                        },
                })}
            }
        `}
        </style>
    );
}