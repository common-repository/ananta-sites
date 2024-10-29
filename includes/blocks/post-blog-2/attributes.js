const attributes = {
	yourId: {
		type: 'string',
	},
	hideDesktop:{
		type: 'boolean',
		default: false,
	},
	hideTablet:{
		type: 'boolean',
		default: false,
	},
	hideMobile:{
		type: 'boolean',
		default: false,
	},
	numberOfItem: {
		type: 'number',
		default: 3,
	},
	columns: {
		type: 'number',
		default: 3,
	},
	columnsGap: {
		default: {
			desktop: {
				val: 24,
				unit: "px"
			},
			tablet:  {
				val: 24,
				unit: "px"
			},
			mobile: {
				val: 24,
				unit: "px"
			},
			resOption: "Desktop",
		},
		type: 'object',
	},
	rowGap: {
		default: {
			desktop: {
				val: 24,
				unit: "px"
			},
			tablet:  {
				val: 24,
				unit: "px"
			},
			mobile: {
				val: 24,
				unit: "px"
			},
			resOption: "Desktop",
		},
		type: 'object',
	},
  	checkPostImage: {
		type: "boolean",
		default: true,
	},
  	checkPostAuthor: {
		type: "boolean",
		default: true,
	},
  	checkPostDate: {
		type: "boolean",
		default: true,
	},
	checkPostAavtars: {
		type: "boolean",
		default: true,
	},
  	checkPostCat: {
		type: "boolean",
		default: true,
	},
  	checkPostComment: {
		type: "boolean",
		default: false,
	},
	order: {
		type: "string",
		default: "desc",
	},
	orderBy: {
		type: "string",
		default: "date",
	},
	categories: {
		type: 'string',
		default: ''
	},
	categoryArray: {
		type: 'string',
		default: '',
	},
	previewImg: {
		type: 'string',
		default: '',
	},
	checkPostButton: {
		type: "boolean",
		default: true,
	},
	tagArray: {
		type: 'string',
		default: '',
	},
	authorArray: {
		type: 'string',
		default: '',
	},
	contentPosition: {
		type: 'string',
		default: 'flex-end',
	},
	postBgColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	postBgHoverColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	postBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	postHoverBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	postBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postHoverBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postHoverPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postInnerPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postInnerHoverPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postShadow: {
		default: {
		  color: {
			enable: false,
			color: "",
		  },
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
	postHoverShadow: {
		default: {
		  color: {
			enable: false,
			color: "",
		  },
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
    overlayColor: {
        default: {
        colorOpt: 'gradient',
        colorOne: {
            enable: false,
            color: "#090947",
        },
        colorTwo: {
            enable: false,
            color: '#5a585a',
        },
        locationOne: 0,
        locationTwo: 74,
        type: 'linear-gradient',
        position: 'center center',
        angle: 315,
        },
        type: 'object',
    },
	overlayOpacity: {
		type: 'number',
		default: 0.7,
	},
	postLargeImageHeight: {
		default: {
		  desktop: {
			  val: 450,
			  unit: "px"
		  },
		  tablet:  {
			  val: 450,
			  unit: "px"
		  },
		  mobile: {
			  val: 300,
			  unit: "px"
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	postSmallImageHeight: {
		default: {
		  desktop: {
			  val: 225,
			  unit: "px"
		  },
		  tablet:  {
			  val: 225,
			  unit: "px"
		  },
		  mobile: {
			  val: 225,
			  unit: "px"
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	postImageBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	postImageHoverBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	postImageBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	postImageHoverBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryPosition: {
		type: 'string',
		default: 'category-bottom',
	},
	categoryAlignment: {
		default: {
		  desktop: '',
		  tablet: '',
		  mobile: '',
		},
		type: "object"
	}, 
	categoryPositionRight: {
		default: {
		  desktop: {
			  val: 20,
			  unit: "px"
		  },
		  tablet:  {
			  val: 20,
			  unit: "px"
		  },
		  mobile: {
			  val: 20,
			  unit: "px"
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	categoryPositionLeft: {
		default: {
		  desktop: {
			  val: 20,
			  unit: "px"
		  },
		  tablet:  {
			  val: 20,
			  unit: "px"
		  },
		  mobile: {
			  val: 20,
			  unit: "px"
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	categoryBgColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	categoryBgHoverColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	categoryColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	categoryHoverColor: {
		default: {
			enable: false,
			color: "",
		},
		type: 'object',
	},
	categoryBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	categoryHoverBorderType: {
		default: {
		  type: "default",
		  width: {
			desktop: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			tablet: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			mobile: {
			  top: '',
			  left: '',
			  right: '',
			  bottom: '',
			link: true,
			unit: "px",
			},
			resOption: "Desktop",
		  },
		  color:  {
			enable: false,
			color: "",
		  },
		},
		type: 'object',
	},
	categoryBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryHoverBorderRadius: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryHoverPadding: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryHoverMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	categoryShadow: {
		default: {
		  color: {
			enable: false,
			color: "",
		  },
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
	categoryHoverShadow: {
		default: {
		  color: {
			enable: false,
			color: "",
		  },
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
	categoryTypography: {
		default: {
		  fontSize: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  letterSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  wordSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  lineHeight: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  enable: false,
		  fontFamily: "",
		  fontWeight: "",
		  fontStyle: "normal",
		  fontTransform: "none",
		  fontDecoration: "none",
		},
		type: 'object',
	},
	titleAlignment: {
		default: {
		  desktop: '',
		  tablet: '',
		  mobile: '',
		},
		type: "object"
	},
	titleColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	titleHoverColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	titleTypography: {
		default: {
		  fontSize: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  letterSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  wordSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  lineHeight: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  enable: false,
		  fontFamily: "",
		  fontWeight: "",
		  fontStyle: "normal",
		  fontTransform: "none",
		  fontDecoration: "none",
		},
		type: 'object',
	},
	titleTypographySmall: {
		default: {
		  fontSize: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  letterSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  wordSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  lineHeight: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  enable: false,
		  fontFamily: "",
		  fontWeight: "",
		  fontStyle: "normal",
		  fontTransform: "none",
		  fontDecoration: "none",
		},
		type: 'object',
	},
	titleMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	titleHoverMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	metaAlignment: {
		default: {
		  desktop: '',
		  tablet: '',
		  mobile: '',
		},
		type: "object"
	},
	metaColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	metaHoverColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	metaIconColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	metaIconHoverColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	metaTypography: {
		default: {
		  fontSize: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  letterSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  wordSpacing:{
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  lineHeight: {
			desktop: {
				val: undefined,
				unit: "px"
			},
			tablet:  {
				val: undefined,
				unit: "px"
			},
			mobile: {
				val: undefined,
				unit: "px"
			}
		  },
		  enable: false,
		  fontFamily: "",
		  fontWeight: "",
		  fontStyle: "normal",
		  fontTransform: "none",
		  fontDecoration: "none",
		},
		type: 'object',
	},
	metaMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
	metaHoverMargin: {
		type: 'object',
		default: {
		  desktop: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  tablet: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  mobile: {
			top: '',
			left: '',
			right: '',
			bottom: '',
			link: true,
			unit: "px",
		  },
		  resOption: "Desktop",
		},
	},
};

export default attributes;