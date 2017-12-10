<!-- Post Wrap Start-->
<div class="post hentry ivycat-post col-xs-12 col-md-4">
	
	<!-- 	This outputs the post TITLE -->
	<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

	<!-- 	This outputs the post.  To display experpt content including images and html, 
		replace the_excerpt(); with the_content();  below. -->
	<div class="entry-summary">
		<?php the_content(); ?>
	</div>

</div>
<!-- // Post Wrap End -->