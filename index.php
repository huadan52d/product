<?php get_header(); ?>
        <!-- Page Header -->
        <!-- Set your background image for this header on the line below. -->
        <header class="intro-header" style="background-image: url('<?php bloginfo("template_url") ?>/img/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1><?php bloginfo('name'); ?></h1>
                            <hr class="small">
                            <span class="subheading"><?php bloginfo('description'); ?></span>
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
						  <a href="<?php the_permalink(); ?>"><h2 class="post-title"><?php the_title(); ?></h2>
							<h3 class="post-subtitle">
                           		<?php the_excerpt(); ?>
                        	</h3>  
						  </a>	  
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