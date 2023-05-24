<?php get_header(); ?>

<div class="article_container">
	<?php while (have_posts()) : the_post();  ?>
<div class="article">
				<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('full'); ?>
				</a>
                <h1><a href="<?php the_permalink(); ?>">
                	<?php the_title(); ?>
                </a></h1>
                <h2><?php the_time(); ?></h2>
                <p>
                    <?php the_content('Read More'); ?>
                </p>
</div>
<?php endwhile; ?>
<?php comments_template(); ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>