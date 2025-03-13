<?php
/**
 * Title: Post Loop List
 * Slug: landmarq/landmarq-post-loop-list
 * Description: 
 * Categories: landmarq/posts
 * Keywords: blog, posts, query, loop
 * Viewport Width: 1190
 * Block Types: core/query
 * Post Types: 
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"name":"Projecten Query"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"project","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"backgroundColor":"accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-background-color has-background" style="padding-right:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"backgroundColor":"accent"} -->
<div class="wp-block-columns alignwide has-accent-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:post-featured-image {"aspectRatio":"16/9","scale":"fill","style":{"border":{"radius":"0px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.33%"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"fontSize":"h3"} /-->

<!-- wp:post-excerpt {"excerptLength":30} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"thema","className":"is-style-default"} /-->

<!-- wp:boldblocks/svg-block {"content":"\u003csvg id=\u0022Layer_1\u0022 xmlns=\u0022http://www.w3.org/2000/svg\u0022 version=\u00221.1\u0022 viewBox=\u00220 0 20 20\u0022\u003e\n  \u003cpath d=\u0022M14,14.7l-3.5-5.2h-.1c0-.1-.2-.2-.2-.2l-5.7-2.5,6.3-.4h.2s.1-.1.1-.1l5.1-3.7-2.8,5.6v.2c0,0,0,.2,0,.2l.7,6.2h0ZM14.3,17.5l1.2-.4-.9-8.6,3.8-7.8-.9-.8-7,5.1-8.6.6-.2,1.2,7.9,3.5,1.4,2v6.3h-4.4v1.3h10.1v-1.3h-4.4v-4.4l2.2,3.3h0ZM12.1,8c0-.3-.3-.6-.6-.6s-.6.3-.6.6.3.6.6.6.6-.3.6-.6Z\u0022\u003e\u003c/path\u003e\n\u003c/svg\u003e","preserveAspectRatio":"","backgroundColor":{"value":"rgba(243, 147, 37, 1)","slug":"contrast-2"},"boldblocks":{"width":{"sm":{"inherit":"lg"},"md":{"inherit":"lg"},"lg":{"value":{"width":"custom","value":"60px"},"inherit":null}},"spacing":{"padding":{"sm":{"inherit":"lg"},"md":{"inherit":"lg"},"lg":{"value":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"inherit":null}}},"height":{},"preserveAspectRatio":""},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-boldblocks-svg-block"><div class="wp-block-boldblocks-svg-block__inner" style="--bb--width--sm:var(--bb--width--lg);--bb--width--md:var(--bb--width--lg);--bb--width--lg:60px;--bb--padding-top--sm:var(--bb--padding-top--lg);--bb--padding-right--sm:var(--bb--padding-right--lg);--bb--padding-bottom--sm:var(--bb--padding-bottom--lg);--bb--padding-left--sm:var(--bb--padding-left--lg);--bb--padding-top--md:var(--bb--padding-top--lg);--bb--padding-right--md:var(--bb--padding-right--lg);--bb--padding-bottom--md:var(--bb--padding-bottom--lg);--bb--padding-left--md:var(--bb--padding-left--lg);--bb--padding-top--lg:var(--wp--preset--spacing--40);--bb--padding-right--lg:var(--wp--preset--spacing--40);--bb--padding-bottom--lg:var(--wp--preset--spacing--40);--bb--padding-left--lg:var(--wp--preset--spacing--40);--bb--background--color:var(--wp--preset--color--contrast-2, rgba(243, 147, 37, 1))"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
  <path d="M14,14.7l-3.5-5.2h-.1c0-.1-.2-.2-.2-.2l-5.7-2.5,6.3-.4h.2s.1-.1.1-.1l5.1-3.7-2.8,5.6v.2c0,0,0,.2,0,.2l.7,6.2h0ZM14.3,17.5l1.2-.4-.9-8.6,3.8-7.8-.9-.8-7,5.1-8.6.6-.2,1.2,7.9,3.5,1.4,2v6.3h-4.4v1.3h10.1v-1.3h-4.4v-4.4l2.2,3.3h0ZM12.1,8c0-.3-.3-.6-.6-.6s-.6.3-.6.6.3.6.6.6.6-.3.6-.6Z"></path>
</svg></div></div>
<!-- /wp:boldblocks/svg-block -->

<!-- wp:boldblocks/svg-block {"content":"\u003csvg id=\u0022Layer_1\u0022 xmlns=\u0022http://www.w3.org/2000/svg\u0022 version=\u00221.1\u0022 viewBox=\u00220 0 20 20\u0022\u003e\n  \n  \u003cpath d=\u0022M10.6,9.4v-.6s0-5.6,0-5.6l1.8,1.8.4.4.8-.8-.4-.4-2.8-2.8-.4-.4-.4.4-2.8,2.8-.4.4.8.8.4-.4,1.8-1.8v5.6s0,.6,0,.6h1.1ZM4.6,17c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7v1.1c1.1,0,2-.5,2.7-.9.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.7.4,1.6.9,2.7.9v-1.1c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7ZM6.7,13.3c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7v1.1c1.1,0,2-.5,2.7-.9.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.7.4,1.6.9,2.7.9v-1.1c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7Z\u0022\u003e\u003c/path\u003e\n\u003c/svg\u003e","backgroundColor":{"value":"rgba(243, 147, 37, 1)","slug":"contrast-2"},"boldblocks":{"width":{"sm":{"inherit":"md"},"md":{"value":{"width":"100%","value":"100%"},"inherit":null},"lg":{"value":{"width":"custom","value":"60px"},"inherit":null}},"spacing":{"padding":{"sm":{"inherit":"lg"},"md":{"inherit":"lg"},"lg":{"value":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"inherit":null}}},"height":{},"preserveAspectRatio":""}} -->
<div class="wp-block-boldblocks-svg-block"><div class="wp-block-boldblocks-svg-block__inner" style="--bb--width--sm:var(--bb--width--md);--bb--width--md:100%;--bb--width--lg:60px;--bb--padding-top--sm:var(--bb--padding-top--lg);--bb--padding-right--sm:var(--bb--padding-right--lg);--bb--padding-bottom--sm:var(--bb--padding-bottom--lg);--bb--padding-left--sm:var(--bb--padding-left--lg);--bb--padding-top--md:var(--bb--padding-top--lg);--bb--padding-right--md:var(--bb--padding-right--lg);--bb--padding-bottom--md:var(--bb--padding-bottom--lg);--bb--padding-left--md:var(--bb--padding-left--lg);--bb--padding-top--lg:var(--wp--preset--spacing--40);--bb--padding-right--lg:var(--wp--preset--spacing--40);--bb--padding-bottom--lg:var(--wp--preset--spacing--40);--bb--padding-left--lg:var(--wp--preset--spacing--40);--bb--background--color:var(--wp--preset--color--contrast-2, rgba(243, 147, 37, 1))"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 20 20">
  
  <path d="M10.6,9.4v-.6s0-5.6,0-5.6l1.8,1.8.4.4.8-.8-.4-.4-2.8-2.8-.4-.4-.4.4-2.8,2.8-.4.4.8.8.4-.4,1.8-1.8v5.6s0,.6,0,.6h1.1ZM4.6,17c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7v1.1c1.1,0,2-.5,2.7-.9.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.7.4,1.6.9,2.7.9v-1.1c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7ZM6.7,13.3c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7v1.1c1.1,0,2-.5,2.7-.9.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.6.4,1.6.9,2.7.9s2-.5,2.7-.9c.3-.2.5-.4.7-.5.2.2.4.3.7.5.7.4,1.6.9,2.7.9v-1.1c-.7,0-1.5-.3-2-.7-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7s-1.5-.3-2-.7c-.5-.3-.9-.7-1.3-1.2-.4.4-.8.8-1.3,1.2-.6.4-1.3.7-2,.7Z"></path>
</svg></div></div>
<!-- /wp:boldblocks/svg-block --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->