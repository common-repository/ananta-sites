/**
 * Block Style
 */
import { CompileStyle } from '/src/components/compileStyle'; 
export function Style(props) {
    const { attributes, setAttributes, name: blockName } = props;
    const i = ":100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic";
    let allFonts = [
        attributes.categoryTypography.fontFamily.value,
        attributes.categoryHoverTypography.fontFamily.value,
        attributes.titleTypography.fontFamily.value,
        attributes.titleHoverTypography.fontFamily.value,
        attributes.metaTypography.fontFamily.value,
        attributes.metaHoverTypography.fontFamily.value,
        attributes.descriptionTypography.fontFamily.value,
        attributes.btnTypography.fontFamily.value,
        attributes.btnTypographyHover.fontFamily.value,
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
            ${attributes.iconPosition === 'before' ? CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                type: {
                    "margin-right": `${attributes.beforeIconSpacing.desktop.val}${attributes.beforeIconSpacing.desktop.unit}`,
                    },
            }) : CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                type: {
                    "margin-left": `${attributes.afterIconSpacing.desktop.val}${attributes.afterIconSpacing.desktop.unit}`,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid`,
                type: {
                    "grid-template-columns": `repeat(${attributes.columns.desktop.val}, minmax(0, 1fr))`,
                    "grid-column-gap": `${attributes.columnsGap.desktop.val}${attributes.columnsGap.desktop.unit}`,
                    "grid-row-gap": `${attributes.rowGap.desktop.val}${attributes.rowGap.desktop.unit}`,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card`,
                type: {
                    "background": attributes.postBgColor,
                    "border": attributes.postBorderType,
                    "border-radius": attributes.postBorderRadius.desktop,
                    "padding": attributes.postPadding.desktop,
                    "margin": attributes.postMargin.desktop,
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
                    "margin": attributes.postHoverMargin.desktop,
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
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                type: {
                    "width": `${attributes.postImageWidth.desktop.val}${attributes.postImageWidth.desktop.unit}`,
                    "height": `${attributes.postImageHeight.desktop.val}${attributes.postImageHeight.desktop.unit}`,
                    "border": attributes.postImageBorderType,
                    "border-radius": attributes.postImageBorderRadius.desktop,
                    "margin": attributes.postImageMargin.desktop,
                    "box-shadow": attributes.postImageShadow,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                type: {
                    "width": `${attributes.postImageHoverWidth.desktop.val}${attributes.postImageHoverWidth.desktop.unit}`,
                    "height": `${attributes.postImageHoverHeight.desktop.val}${attributes.postImageHoverHeight.desktop.unit}`,
                    "border": attributes.postImageHoverBorderType,
                    "border-radius": attributes.postImageHoverBorderRadius.desktop,
                    "margin": attributes.postImageHoverMargin.desktop,
                    "box-shadow": attributes.postImageHoverShadow,
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
                    "typography": attributes.categoryHoverTypography,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title`,
                type: {
                    "text-align": `${attributes.titleAlignment.desktop}`,
                    "typography": attributes.titleTypography,
                    "margin": attributes.titleMargin.desktop,
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
                    "typography": attributes.titleHoverTypography,
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
                    "typography": attributes.metaHoverTypography,
                    "margin": attributes.metaHoverMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a:hover i`,
                type: {
                    "color": attributes.metaIconHoverColor,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description p`,
                type: {
                    "text-align": `${attributes.descriptionAlignment.desktop}`,
                    "color": attributes.descriptionColor,
                    "typography": attributes.descriptionTypography,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description`,
                type: {
                    "margin": attributes.descriptionMargin.desktop,
                },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-more-link`,
                type: {
                    "text-align": `${attributes.btnAlignment.desktop}`,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button`,
                type: {
                    "background": attributes.btnBgColor,
                    "color": attributes.btnColor,
                    "typography": attributes.btnTypography,
                    "border": attributes.btnBorder,
                    "border-radius": attributes.btnBorderRadius.desktop,
                    "padding": attributes.btnPadding.desktop,
                    "margin": attributes.btnMargin.desktop,
                    "box-shadow": attributes.btnBoxShadow,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button i`,
                type: {
                    "color": attributes.btnColor,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button:hover`,
                type: {
                    "background": attributes.btnBgColorHover,
                    "color": attributes.btnColorHover,
                    "typography": attributes.btnTypographyHover,
                    "border": attributes.btnBorderHover,
                    "border-radius": attributes.btnBorderRadiusHover.desktop,
                    "padding": attributes.btnPaddingHover.desktop,
                    "margin": attributes.btnMarginHover.desktop,
                    "box-shadow": attributes.btnBoxShadowHover,
                    },
            })}
            ${CompileStyle({
                selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button:hover i`,
                type: {
                    "color": attributes.btnColorHover,
                    },
            })}
            @media all and (max-width: 1024px){
                ${attributes.iconPosition === 'before' ? CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                    type: {
                        "margin-right": `${attributes.beforeIconSpacing.tablet.val}${attributes.beforeIconSpacing.tablet.unit}`,
                        },
                }) : CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                    type: {
                        "margin-left": `${attributes.afterIconSpacing.tablet.val}${attributes.afterIconSpacing.tablet.unit}`,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid`,
                    type: {
                        "grid-template-columns": `repeat(${attributes.columns.tablet.val}, minmax(0, 1fr))`,
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
                        "margin": attributes.postMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover`,
                    type: {
                        "border-width": attributes.postHoverBorderType.width.tablet,
                        "border-radius": attributes.postHoverBorderRadius.tablet,
                        "padding": attributes.postHoverPadding.tablet,
                        "margin": attributes.postHoverMargin.tablet,
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
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                    type: {
                        "width": `${attributes.postImageWidth.tablet.val}${attributes.postImageWidth.tablet.unit}`,
                        "height": `${attributes.postImageHeight.tablet.val}${attributes.postImageHeight.tablet.unit}`,
                        "border-width": attributes.postImageBorderType.width.tablet,
                        "border-radius": attributes.postImageBorderRadius.tablet,
                        "margin": attributes.postImageMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                    type: {
                        "width": `${attributes.postImageHoverWidth.tablet.val}${attributes.postImageHoverWidth.tablet.unit}`,
                        "height": `${attributes.postImageHoverHeight.tablet.val}${attributes.postImageHoverHeight.tablet.unit}`,
                        "border-width": attributes.postImageHoverBorderType.width.tablet,
                        "border-radius": attributes.postImageHoverBorderRadius.tablet,
                        "margin": attributes.postImageHoverMargin.tablet,
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
                        "font-size": `${attributes.categoryHoverTypography.fontSize.tablet.val}${attributes.categoryHoverTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.categoryHoverTypography.letterSpacing.tablet.val}${attributes.categoryHoverTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.categoryHoverTypography.wordSpacing.tablet.val}${attributes.categoryHoverTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.categoryHoverTypography.lineHeight.tablet.val}${attributes.categoryHoverTypography.lineHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title`,
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
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title:hover`,
                    type: {
                        "font-size": `${attributes.titleHoverTypography.fontSize.tablet.val}${attributes.titleHoverTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.titleHoverTypography.letterSpacing.tablet.val}${attributes.titleHoverTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.titleHoverTypography.wordSpacing.tablet.val}${attributes.titleHoverTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.titleHoverTypography.lineHeight.tablet.val}${attributes.titleHoverTypography.lineHeight.tablet.unit}`,
                        "margin": attributes.titleHoverMargin.tablet,
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
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a:hover`,
                    type: {
                        "font-size": `${attributes.metaHoverTypography.fontSize.tablet.val}${attributes.metaHoverTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.metaHoverTypography.letterSpacing.tablet.val}${attributes.metaHoverTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.metaHoverTypography.wordSpacing.tablet.val}${attributes.metaHoverTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.metaHoverTypography.lineHeight.tablet.val}${attributes.metaHoverTypography.lineHeight.tablet.unit}`,
                        "margin": attributes.metaHoverMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description p`,
                    type: {
                        "text-align": `${attributes.descriptionAlignment.tablet}`,
                        "font-size": `${attributes.descriptionTypography.fontSize.tablet.val}${attributes.descriptionTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.descriptionTypography.letterSpacing.tablet.val}${attributes.descriptionTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.descriptionTypography.wordSpacing.tablet.val}${attributes.descriptionTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.descriptionTypography.lineHeight.tablet.val}${attributes.descriptionTypography.lineHeight.tablet.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description`,
                    type: {
                        "margin": attributes.descriptionMargin.tablet,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-more-link`,
                    type: {
                        "text-align": `${attributes.btnAlignment.tablet}`,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button`,
                    type: {
                        "font-size": `${attributes.btnTypography.fontSize.tablet.val}${attributes.btnTypography.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.btnTypography.letterSpacing.tablet.val}${attributes.btnTypography.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.btnTypography.wordSpacing.tablet.val}${attributes.btnTypography.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.btnTypography.lineHeight.tablet.val}${attributes.btnTypography.lineHeight.tablet.unit}`,
                        "border-width": attributes.btnBorder.width.tablet,
                        "border-radius": attributes.btnBorderRadius.tablet,
                        "padding": attributes.btnPadding.tablet,
                        "margin": attributes.btnMargin.tablet,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button:hover`,
                    type: {
                        "font-size": `${attributes.btnTypographyHover.fontSize.tablet.val}${attributes.btnTypographyHover.fontSize.tablet.unit}`,
                        "letter-spacing": `${attributes.btnTypographyHover.letterSpacing.tablet.val}${attributes.btnTypographyHover.letterSpacing.tablet.unit}`,
                        "word-spacing": `${attributes.btnTypographyHover.wordSpacing.tablet.val}${attributes.btnTypographyHover.wordSpacing.tablet.unit}`,
                        "line-height": `${attributes.btnTypographyHover.lineHeight.tablet.val}${attributes.btnTypographyHover.lineHeight.tablet.unit}`,
                        "border-width": attributes.btnBorderHover.width.tablet,
                        "border-radius": attributes.btnBorderRadiusHover.tablet,
                        "padding": attributes.btnPaddingHover.tablet,
                        "margin": attributes.btnMarginHover.tablet,
                        },
                })}
            }

            @media all and (max-width: 767px) {
                ${attributes.iconPosition === 'before' ? CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                    type: {
                        "margin-right": `${attributes.beforeIconSpacing.mobile.val}${attributes.beforeIconSpacing.mobile.unit}`,
                        },
                }) : CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-post .anb-more-link a i`,
                    type: {
                        "margin-left": `${attributes.afterIconSpacing.mobile.val}${attributes.afterIconSpacing.mobile.unit}`,
                        },
                })}
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
                        "grid-template-columns": `repeat(${attributes.columns.mobile.val}, minmax(0, 1fr))`,
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
                        "margin": attributes.postMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover`,
                    type: {
                        "border-width": attributes.postHoverBorderType.width.mobile,
                        "border-radius": attributes.postHoverBorderRadius.mobile,
                        "padding": attributes.postHoverPadding.mobile,
                        "margin": attributes.postHoverMargin.mobile,
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
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-image`,
                    type: {
                        "width": `${attributes.postImageWidth.mobile.val}${attributes.postImageWidth.mobile.unit}`,
                        "height": `${attributes.postImageHeight.mobile.val}${attributes.postImageHeight.mobile.unit}`,
                        "border-width": attributes.postImageBorderType.width.mobile,
                        "border-radius": attributes.postImageBorderRadius.mobile,
                        "margin": attributes.postImageMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card:hover .ananta-blog-card-image`,
                    type: {
                        "width": `${attributes.postImageHoverWidth.mobile.val}${attributes.postImageHoverWidth.mobile.unit}`,
                        "height": `${attributes.postImageHoverHeight.mobile.val}${attributes.postImageHoverHeight.mobile.unit}`,
                        "border-width": attributes.postImageHoverBorderType.width.mobile,
                        "border-radius": attributes.postImageHoverBorderRadius.mobile,
                        "margin": attributes.postImageHoverMargin.mobile,
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
                        "font-size": `${attributes.categoryHoverTypography.fontSize.mobile.val}${attributes.categoryHoverTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.categoryHoverTypography.letterSpacing.mobile.val}${attributes.categoryHoverTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.categoryHoverTypography.wordSpacing.mobile.val}${attributes.categoryHoverTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.categoryHoverTypography.lineHeight.mobile.val}${attributes.categoryHoverTypography.lineHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title`,
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
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-title:hover`,
                    type: {
                        "font-size": `${attributes.titleHoverTypography.fontSize.mobile.val}${attributes.titleHoverTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.titleHoverTypography.letterSpacing.mobile.val}${attributes.titleHoverTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.titleHoverTypography.wordSpacing.mobile.val}${attributes.titleHoverTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.titleHoverTypography.lineHeight.mobile.val}${attributes.titleHoverTypography.lineHeight.mobile.unit}`,
                        "margin": attributes.titleHoverMargin.mobile,
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
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-meta a:hover`,
                    type: {
                        "font-size": `${attributes.metaHoverTypography.fontSize.mobile.val}${attributes.metaHoverTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.metaHoverTypography.letterSpacing.mobile.val}${attributes.metaHoverTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.metaHoverTypography.wordSpacing.mobile.val}${attributes.metaHoverTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.metaHoverTypography.lineHeight.mobile.val}${attributes.metaHoverTypography.lineHeight.mobile.unit}`,
                        "margin": attributes.metaHoverMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description p`,
                    type: {
                        "text-align": `${attributes.descriptionAlignment.mobile}`,
                        "font-size": `${attributes.descriptionTypography.fontSize.mobile.val}${attributes.descriptionTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.descriptionTypography.letterSpacing.mobile.val}${attributes.descriptionTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.descriptionTypography.wordSpacing.mobile.val}${attributes.descriptionTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.descriptionTypography.lineHeight.mobile.val}${attributes.descriptionTypography.lineHeight.mobile.unit}`,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-description`,
                    type: {
                        "margin": attributes.descriptionMargin.mobile,
                    },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .anb-more-link`,
                    type: {
                        "text-align": `${attributes.btnAlignment.mobile}`,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button`,
                    type: {
                        "font-size": `${attributes.btnTypography.fontSize.mobile.val}${attributes.btnTypography.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.btnTypography.letterSpacing.mobile.val}${attributes.btnTypography.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.btnTypography.wordSpacing.mobile.val}${attributes.btnTypography.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.btnTypography.lineHeight.mobile.val}${attributes.btnTypography.lineHeight.mobile.unit}`,
                        "border-width": attributes.btnBorder.width.mobile,
                        "border-radius": attributes.btnBorderRadius.mobile,
                        "padding": attributes.btnPadding.mobile,
                        "margin": attributes.btnMargin.mobile,
                        },
                })}
                ${CompileStyle({
                    selector: `.ananta-block-container-${attributes.yourId} .anb-blog-grid .ananta-blog-card-button:hover`,
                    type: {
                        "font-size": `${attributes.btnTypographyHover.fontSize.mobile.val}${attributes.btnTypographyHover.fontSize.mobile.unit}`,
                        "letter-spacing": `${attributes.btnTypographyHover.letterSpacing.mobile.val}${attributes.btnTypographyHover.letterSpacing.mobile.unit}`,
                        "word-spacing": `${attributes.btnTypographyHover.wordSpacing.mobile.val}${attributes.btnTypographyHover.wordSpacing.mobile.unit}`,
                        "line-height": `${attributes.btnTypographyHover.lineHeight.mobile.val}${attributes.btnTypographyHover.lineHeight.mobile.unit}`,
                        "border-width": attributes.btnBorderHover.width.mobile,
                        "border-radius": attributes.btnBorderRadiusHover.mobile,
                        "padding": attributes.btnPaddingHover.mobile,
                        "margin": attributes.btnMarginHover.mobile,
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
