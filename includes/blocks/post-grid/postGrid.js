import { registerBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';
import { withSelect, useSelect } from '@wordpress/data';
import { Fragment, Component } from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';
import attributes from "./attributes.js";
import { Style } from './style.js';
import moment from "moment";
import { OpenSidebar } from '/src/components/compileStyle.js'; 

registerBlockType( 'ananta-sites/post-grid', {
title: 'Post Blog',
description: 'Post Blog Description',
category: 'ananta-sites',
supports: {
	// Declare support for specific alignment options.
  align: true,
	align: [ 'left', 'right', 'full' ]
},
icon: "editor-ul",
keywords: [
    __( 'Post Blog' ),
    __( 'Post' )
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
              <div className={`${className} anb-blog-wrapper-${attributes.yourId} anb-blog-grid`}>
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
                    <div class="anb-blog-post ananta-blog-card">
                      {attributes.checkPostImage && post.ananta_featured_image_url && (
                      <div class="anb-blog-thumb md ananta-blog-card-image" >
                        <img
                          src={post.ananta_featured_image_url}
                          title="sports"
                          alt="sports"
                          className="anb-link-div anb-back-img"
                        />
                      </div>
                      )}
                      <article class="small ananta-blog-card-inner">
                        {attributes.checkPostCat && (
                          <div class="anb-blog-category ananta-blog-card-category">{htmlToElem(post.cats)}</div>
                        )}
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
                          <a href="#" dateTime={moment(post.date_gmt).utc().format()}>
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
                        <h4 class="title ananta-blog-card-title"><a title={post.title.rendered} href={post.link}>{post.title.rendered}</a></h4>
                        {attributes.checkPostExcerpt && (
                          <div
                              dangerouslySetInnerHTML={{
                                  __html: cateExcerpt(
                                      post.excerpt.rendered,
                                      attributes.excerptLength
                                  ),
                              }}
                              className='discription ananta-blog-card-description'
                          />
                        )}
                        {attributes.checkPostButton && (
                          <div className='anb-more-link'>
                            <a href={post.link} target={attributes.checkNewTab && '_blank'} rel={attributes.checkNewTab && 'noopener noreferrer'} class="ananta-blog-card-button">
                              {attributes.iconPosition === 'before' && (
                                <i class={attributes.readMoreicon}></i>
                              )} 
                              {attributes.linkText}
                              {attributes.iconPosition === 'after' && (
                                <i class={attributes.readMoreicon}></i>
                              )} 
                            </a>
                          </div>
                        )}
                      </article>
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