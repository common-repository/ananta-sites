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
		default: {
			desktop: {
				val: 3,
			},
			tablet:  {
				val: 2,
			},
			mobile: {
				val: 1,
			},
			resOption: "Desktop",
		},
		type: 'object',
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
	checkPostExcerpt: {
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
		default: true,
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
	excerptLength: {
			type: "number",
			default: 20,
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
	checkNewTab:{
		type: 'boolean',
		default: true,
	},
	linkText: { 
		type: 'string', 
		default: 'Read More '
	},
	readMoreicon: { 
		type: 'string',
		default: 'fa fa-arrow-right'
	},
	iconPosition: {
		type: 'string',
		default: 'after',
	},
	beforeIconSpacing: {
		default: {
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
			},
			resOption: "Desktop",
		},
		type: 'object',
	},
	afterIconSpacing: {
		default: {
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
			},
			resOption: "Desktop",
		},
		type: 'object',
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
	postMargin: {
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
	postHoverMargin: {
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
	postImageWidth: {
		default: {
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
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	postImageHoverWidth: {
		default: {
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
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	postImageHeight: {
		default: {
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
		  },
		  resOption: "Desktop",
		},
		type: 'object',
	},
	postImageHoverHeight: {
		default: {
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
	postImageMargin: {
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
	postImageHoverMargin: {
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
	postImageShadow: {
		default: {
		  color: '',
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
	postImageHoverShadow: {
		default: {
		  color: '',
		  horizontal: undefined,
		  vertical: undefined,
		  blur: undefined,
		  spread: undefined,
		  position: '',
		  enable: false,
		},
		type: 'object',
	},
	categoryAlignment: {
		default: {
		  desktop: '',
		  tablet: '',
		  mobile: '',
		},
		type: "object"
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
	categoryHoverTypography: {
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
	titleHoverTypography: {
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
	metaHoverTypography: {
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
	descriptionAlignment: {
		default: {
		  desktop: '',
		  tablet: '',
		  mobile: '',
		},
		type: "object"
	},
	descriptionColor: {
		default: {
		  enable: false,
		  color: "",
		},
		type: 'object'
	},
	descriptionTypography: {
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
	descriptionMargin: {
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
    btnAlignment: {
        default: {
            desktop: undefined,
            tablet: undefined,
            mobile: undefined,
          },
        type: "object"
    },
    btnBgColor: {
        default: {
            enable: false,
            color: "",
        },
        type: 'object',
    },
    btnBgColorHover: {
        default: {
            enable: false,
            color: "",
        },
        type: 'object',
    },
    btnColor: {
        default: {
            enable: false,
            color: "",
        },
        type: 'object',
    },
    btnColorHover: {
        default: {
            enable: false,
            color: "",
        },
        type: 'object',
    },
    btnBorder: {
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
            color: undefined,
        },
        type: 'object',
    },
    btnBorderHover: {
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
            color: undefined,
        },
        type: 'object',
    },
    btnBorderRadius: {
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
    btnBorderRadiusHover: {
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
    btnMargin: {
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
    btnMarginHover: {
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
    btnPadding: {
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
    btnPaddingHover: {
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
    btnBoxShadow: {
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
    btnBoxShadowHover: {
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
    btnTypography: {
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
                },
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
                },
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
                },
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
                },
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
    btnTypographyHover: {
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
                },
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
                },
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
                },
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
                },
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
};

export default attributes;