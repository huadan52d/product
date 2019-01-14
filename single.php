<?php get_header(); ?>

        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
           if ( has_post_thumbnail() ) {
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
				echo '<header class="intro-header" style="background-image:url('.$feat_image_url.');">'; 
           }
           endwhile;
         endif;
         ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1><?php the_title(); ?></h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://unsplash.imgix.net/photo-1422222948315-28aadb7a2cb8?fm=jpg&amp;s=cfeadbd7a991e58b553bee29a7eeca55"
                                class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="https://unsplash.imgix.net/photo-1423683249427-8ca22bd873e0?fm=jpg&amp;s=5e57c661d0f772ce269188a6f5325708"
                                class="img-responsive">
                            </div>
                            <div class="col-md-4">
                                <img src="https://unsplash.imgix.net/photo-1423347834838-5162bb452ca7?fm=jpg&amp;s=c255e589621f06513c1d123c7323fe9c"
                                class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                	<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<?php if (have_posts()) :
   					while (have_posts()) :
      					the_post(); ?>
						  <div class="post-preview">
						  <?php the_title(); ?></h2>
							<h3 class="post-subtitle">
                           		<?php the_content(); ?>
                        	</h3>  
						    
         		 		   <p class="post-meta">Posted by
							<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>					 	</div>
					<hr>
   					<?php endwhile;
				endif; ?>
				
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Older Posts →</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
<?php get_footer(); ?>       