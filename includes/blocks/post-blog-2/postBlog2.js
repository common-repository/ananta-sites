import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { withSelect, useSelect } from '@wordpress/data';
import { Fragment, Component } from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';
import attributes from "./attributes.js";
import { Style } from './style.js';
import moment from "moment";
import { OpenSidebar } from '/src/components/compileStyle.js'; 

registerBlockType( 'ananta-sites/post-blog-2', {
title: 'Post Blog 2',
description: 'Post Blog 2 Description',
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
      })
    };
  })((props) => {  
    const { attributes, setAttributes, clientId, posts, className } = props;

    const {
      tagArray,
      authorArray,
      yourId,
      categoryArray,
    } = attributes;
    setAttributes({ yourId: clientId });
    const htmlToElem = ( html ) => wp.element.RawHTML( { children: html } );


    return (
      <Fragment >
          <Style { ...props } />
          { //Check if message failed
          !posts
            ? "Loading..." : 
            <div className={`ananta-block-container-${attributes.yourId} ${ attributes.hideDesktop ? 'hidden-desktop' : '' } ${ attributes.hideTablet ? 'hidden-tablet' : '' } ${ attributes.hideMobile ? 'hidden-mobile' : '' }`} onClick={OpenSidebar} >
              <div className={`${className} anb-blog-wrapper-${attributes.yourId} anb-blog-grid anb-grid-one anb-column-${attributes.columns}`}>
                {posts.map(function(post) {
              
                  //console.log(post);
                  var authorID = post.author;
                  var catId = post.categories
                  apiFetch( { path: '/wp/v2/users/'+authorID } ).then( author => {
                  const authorImage = author.avatar_urls['96'];
                  jQuery('.anb-author-pic').attr("src", authorImage);
                  });

                  var string = post.author_info.display_name;
                  var array = Array.from(string);

                  return(
                    <div className={`anb-blog-post-overlay ${attributes.categoryPosition} layout-one ananta-blog-card `} >
                      <div className='anb-back-img bshre ananta-blog-card-image' style={attributes.checkPostImage && post.ananta_featured_image_url ? { backgroundImage: `url(${post.ananta_featured_image_url})` } : null}>
                        <a href={post.link} className="anb-link-div"></a>
                        <div className="inner">
                          <div className='inner-card ananta-blog-card-inner'>
                            {attributes.checkPostCat && (
                              <div class="anb-blog-category ananta-blog-card-category">{htmlToElem(post.cats)}</div>
                            )}
                            <h4 class="title ananta-blog-card-title"><a title={post.title.rendered} href={post.link}>{post.title.rendered}</a></h4>
                            <div class="anb-blog-meta ananta-blog-card-meta">
                              {attributes.checkPostAuthor && (
                                  <span class="anb-author">
                                  <a href={post.author_info.author_link}>
                                  {attributes.checkPostAavtars && (
                                      <>
                                      <img src="" class="anb-author-pic" alt="Admin"/>	
                                      </>
                                  )}
                                  {post.author_info.display_name}
                                  </a>
                                  </span>
                              )}
                              {attributes.checkPostDate && (
                                <span class="anb-blog-date">
                                <a dateTime={moment(post.date_gmt).utc().format()}>
                                <i class="far fa-calendar-alt"></i>
                                {moment(post.date_gmt)
                                  .local()
                                  .format("MMMM DD, Y", "ananta-sites")}
                                </a>
                                </span>
                              )}
                              {attributes.checkPostComment && (
                                htmlToElem(post.ananta_comment)
                              )}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  )
                })}
              </div>
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