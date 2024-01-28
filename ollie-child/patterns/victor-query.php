<?php
/**
 * Title: Victor - Query Loop
 * Slug: ow/victor-query
 * Categories: ow-content, ow-theme
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"Query Loop"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"product-type","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"className":"is-style-ow-card","layout":{"type":"constrained","contentSize":""},"metadata":{"name":"Card"}} -->
<div class="wp-block-group is-style-ow-card"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":80,"customOverlayColor":"#252525","minHeight":430,"minHeightUnit":"px","contentPosition":"center center","style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"25px","bottom":"25px"}},"border":{"radius":"5px"}},"className":"is-style-ow-height-full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-style-ow-height-full" style="border-radius:5px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:430px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim" style="background-color:#252525"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"is-style-ow-height-full","layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"space-between"},"metadata":{"name":"Card Inner"}} -->
<div class="wp-block-group is-style-ow-height-full"><!-- wp:group {"layout":{"type":"constrained"},"metadata":{"name":"Content"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}},"color":{"background":"#1a1a1abf"}},"className":"is-style-ow-top","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-ow-top has-background" style="border-radius:5px;background-color:#1a1a1abf;padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><!-- wp:post-terms {"term":"product-category","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->