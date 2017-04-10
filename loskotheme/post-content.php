<div class="row blog-container-my">

	<article id="post-<?php the_ID(); ?>" <?php post_class('container post-my'); ?>>

		<header class="entry-header">

			<?php the_title(sprintf('<h1 class="entry-title-post"><a href="%s">',esc_url( get_permalink() ) ),'</a></h1>'); ?>

			<smal>Posted on: <?php the_time('F j, Y') ?> at <?php the_time('g:i a') ?>, in <?php the_category(); ?> </smal>

		</header>

		<div class="row">

			<?php if (has_post_thumbnail() ): ?>

				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">

					<div class="thumbnail-image"> <?php the_post_thumbnail('thumbnail'); ?></div>

				</div>

				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

					<?php the_content(); ?>

				</div>

			<?php else: ?>

				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">

					 <?php the_content(); ?>

				</div>

			<?php endif ?>

		</div>


	</article>

</div>
