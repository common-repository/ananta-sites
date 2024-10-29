import { __ } from '@wordpress/i18n';
import React from 'react'
import { Fragment, Component, RawHTML } from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';
import moment from "moment";

export default function layouttwo(props) {
    const { attributes, className, posts, setAttributes } = props;
    const htmlToElem = ( html ) => wp.element.RawHTML( { children: html } );
        return(
            <Fragment >
              <div className={`${className} anb-blog-wrapper-${attributes.yourId} anb-blog-grid  anb-grid-four`}>
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
                    <div className={`anb-blog-post-overlay ${attributes.categoryPosition} layout-four ananta-blog-card `} >
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
            </Fragment>
    );
}