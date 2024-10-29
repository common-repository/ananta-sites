import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { withSelect, useSelect } from '@wordpress/data';
import { Fragment, Component } from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';
import attributes from "./attributes.js";
import { Style } from './style.js';
import moment from "moment";
import { OpenSidebar } from '/src/components/compileStyle.js'; 
import  Layoutone  from "/includes/templates/post-blog-3/layoutOne.js";
import Layouttwo from "/includes/templates/post-blog-3/layoutTwo.js";

registerBlockType( 'ananta-sites/post-blog-3', {
title: 'Post Blog 3',
description: 'Post Blog 3 Description',
category: 'ananta-sites',
supports: {
	// Declare support for specific alignment options.
  align: true,
	align: [ 'left', 'right', 'full' ]
},
icon: "editor-ul",
keywords: [
    __( 'Post Blog' ),
    __( 'Post Blog 2' ),
    __( 'Post' ),
    __( 'news' )
],
attributes,
example:{

},

edit: withSelect((select, props) => {
  const {
    order,
    orderBy,
    numberOfItem,
    categoryArray,
    tagArray,
    authorArray,
    postOffset,
  } = props.attributes;

  const jsonCatObject = categoryArray.length > 0 ? JSON.parse(categoryArray) : [];
  const catObject = jsonCatObject.map(function(cate){
    return(
      cate.value
    )
  })

  const jsonAuthorObject = authorArray.length > 0 ? JSON.parse(authorArray) : [];
  const authorObject = jsonAuthorObject.map(function(author){
    return(
      author.value
    )
  })

  const jsonTagObject = tagArray.length > 0 ? JSON.parse(tagArray) : [];
  const tagObject = jsonTagObject.map(function(tag){
    return(
      tag.value
    )
  })
  
    return {
      posts: select('core').getEntityRecords('postType', 'post', {
        per_page: numberOfItem,
        order,
        orderby: orderBy,
        categories: catObject,
        tags: tagObject,
				author: authorObject,
        offset: postOffset,
      })
    };
  })((props) => {  
    const { attributes, setAttributes, clientId, posts, className } = props;

    const {
      tagArray,
      authorArray,
      yourId,
      categoryArray,
      layouts
    } = attributes;
    setAttributes({ yourId: clientId });
    const htmlToElem = ( html ) => wp.element.RawHTML( { children: html } );
    const project = (layouts) => {
      switch(layouts) {
          case "Layout1":   return <Layoutone { ...props } />;
          case "Layout2":   return <Layouttwo { ...props } />;
          default:      return <Layoutone { ...props } />;
      }
  }

    return (
      <Fragment >
          <Style { ...props } />
          { //Check if message failed
          !posts
            ? "Loading..." : 
            <div className={`ananta-block-container-${attributes.yourId} ${ attributes.hideDesktop ? 'hidden-desktop' : '' } ${ attributes.hideTablet ? 'hidden-tablet' : '' } ${ attributes.hideMobile ? 'hidden-mobile' : '' }`} onClick={OpenSidebar} >
              {project(layouts)}

            </div>
          }
          {
          posts && posts.length === 0
          ? "No Posts" : null
          }
      </Fragment>
    );

}),

save: ( props ) => {
    const { attributes, className, setAttributes } = props;
    return null
},
});

function cateExcerpt(str, no_words) {
	return str.split(" ").splice(0, no_words).join(" ");
}