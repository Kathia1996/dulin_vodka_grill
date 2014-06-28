<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
			<?php
				if ( have_posts() ) : // если имеются записи в блоге.
				  query_posts('cat=5');   // указываем ID рубрик, которые необходимо вывести.
				  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
				?>

				<div class="post-main-content wrapper">
					<h1 class="post-main__header"><?php the_title(); ?></h1>
					<div class="post-main__permalink">
						<?php if ( has_post_thumbnail()): ?><?php the_post_thumbnail(array(1000,180), array("class" => "post_thumbnail"));  ?><?php endif;?>
						<a href="<?php the_permalink(); ?>" class="post-main__permalink post-main__permalink__inner"></a>
					</div>
					<?php the_meta(); ?>
				</div>

				<?php
				  endwhile;  // завершаем цикл.
				endif;
			/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
				wp_reset_query();                
			?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
