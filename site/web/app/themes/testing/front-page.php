<!-- Front Page Template -->

<!-- Grabs Image slide for Front Page -->
<?php echo do_shortcode("[image-carousel interval='12000']"); ?>
<!-- Separator -->
<div class="container-fluid">
  <section class="row separator">
      <div class="col-lg-12">
          <div class="bar"></div>
      </div>
  </section>
</div>
<!-- Updates -->
<div class="container">
    <section class="row blurbs">
        <?php
			$args = array( 'numberposts' => '1', 'category' => 2 );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="col-lg-5 blurb">
				            <div>
				                <img src="'. get_the_post_thumbnail_url($recent["ID"]) . '" class="img-responsive">
				                <span class="tag">News</span>
				            </div>
				            <h2>
				                <a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a>
				            </h2>
				        </div>';
			}

			wp_reset_query();
		?>
		<?php
			$args = array( 'numberposts' => '1', 'category' => 3 );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo '<div class="col-lg-3 blurb">
				            <div>
				                <img src="'. get_the_post_thumbnail_url($recent["ID"]) . '" class="img-responsive">
				                <span class="tag">Blog</span>
				            </div>
				            <h2>
				                <a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a>
				            </h2>
				        </div>';
			}
			wp_reset_query();
		?>
        <div class="col-lg-4 qAnimals">
            <div class="contain clear">
                <h2>Your <span>best friend</span> awaits</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_1.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_2.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_3.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_4.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_1.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img src="app/uploads/2017/03/pet_2.png" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>

<!-- Separator -->
<div class="container-fluid">
    <section class="row separator">
        <div class="col-lg-12">
            <div class="bar blue"></div>
        </div>
    </section>
</div>

<!-- Saving -->
<div class="container-fluid blue">
    <div class="container">
        <section class="row blurbs blue">
            
            <div class="col-lg-4 blurb highlight">
                <h2>
                    <a href="#">
                      <span class="text">Life Saving</span><span class="text">Impact Grant</span>
                    </a>
                </h2>
                <h3>PRESS release April 28, 2016</h3>
                <p>The Petco Foundation has generously awarded us a $250,000 Lifesaving Impact Award grant to help save more lives! We guarantee Pecan isn't the only one smiling at the shelter right now!</p>
            </div>

            <div class="col-lg-4 blurb feature">
                <img src="app/uploads/2017/03/bh_ph1.png">
            </div>

            <div class="col-lg-4 blurb links">
                <div>
                    <img src="app/uploads/2017/03/bh_ph2.png" class="img-responsive">
                </div>
                <p>Foster Care Volunteers open their hearts and homes</p>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Volunteer <span class="arrow-right"></span></a>
                    </li>
                    <li>
                        <a href="#">Adoption Ambassador<span class="arrow-right"></span></a>
                    </li>
                    <li>
                        <a href="#">Community Service<span class="arrow-right"></span></a>
                    </li>
                    <li>
                        <a href="#">Employment Oppurtunities<span class="arrow-right"></span></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>

<!-- Separator -->
<div class="container-fluid space">
    <section class="row separator">
        <div class="col-lg-12">
            <div class="bar blue flip"></div>
        </div>
    </section>
</div>

<!-- Events -->
<div class="container">
    <section class="row blurbs">
            
        <div class="col-lg-12 blurb green">
            <h1>Events & Stuff</h1>
        </div>

        <?php
	        // Retrieve the next 5 upcoming events
			$events = tribe_get_events( array(
			    'posts_per_page' => 3,
			) );
			 
			// Loop through the events, displaying the title
			// and content for each
			foreach ( $events as $event ) {
			    echo '<div class="col-lg-4 blurb green">
			            <div>
			                <a href="'.get_permalink($event->ID).'">
			                    <img src="'.get_the_post_thumbnail_url( $event->ID ).'" class="img-responsive">
			                </a>
			            </div>
			            <h2>
			                <a href="'.get_permalink($event->ID).'">'.$event->post_title.'</a>
			            </h2>
			        </div>';
			}
		?>  
    </section>
</div>
<!-- Separator -->
<div class="container-fluid spaceTop">
    <section class="row separator">
        <div class="col-lg-12">
            <div class="bar red reverse"></div>
        </div>
    </section>
</div>
<!-- Support -->
<div class="container-fluid red">
    <div class="container">
        <section class="row blurbs red">
            
            <div class="col-md-offset-1 col-lg-5 blurb highlight">
                <h2>
                    <a href="#">
                      <span class="text">Your Support</span><span class="text">Makes A Difference.</span>
                    </a>
                </h2>
                <p>Your support makes it possible for us to give our shelter animals a second chance at a happy, healthy life. When you donate to the Lawrence Humane Society, you are providing a life-saving and life-changing gift to an furry friends in need.</p>
                <a href="" class="btn">
                    Help Now
                </a>
            </div>
            <div class="col-lg-6 blurb feature">
                <img src="app/uploads/2017/03/support_ph1.png">
            </div>
        </section>
    </div>
</div>

<!-- Separator -->
<div class="container-fluid space">
    <section class="row separator">
        <div class="col-lg-12">
            <div class="bar red bottom reverse"></div>
        </div>
    </section>
</div>

<!-- Social -->
<div class="container-fluid social hidden-xs" style="">
    <div class="container">
        <section class="row blurbs">
            <div class="col-lg-5 blurb highlight social">
                <h2>
                    <span class="text">@LawrenceHumane</span>
                    <span class="text">
                        <a href="https://twitter.com/lawrencehumane" alt="Twitter" target="_blank" class="icon twitter">Twitter</a>
                        <a href="https://www.facebook.com/lawrencehumane" alt="Facebook" target="_blank" class="icon facebook">Facebook</a>
                        <a href="https://www.instagram.com/lawrencehumane" alt="Facebook" target="_blank" class="icon instagram">Instagram</a>
                        <a href="https://www.youtube.com/user/LawrenceHumane" alt="Facebook" target="_blank" class="icon youtube">Youtube</a>
                    </span>
                </h2>
            </div>
        </section>
    </div>
</div>

<!-- Separator -->
<div class="container-fluid">
    <section class="row separator">
        <div class="col-lg-12">
            <div class="bar"></div>
        </div>
    </section>
</div>
<!-- Updates -->
<div class="container hidden-xs">
    <section class="row blurbs navi">
        <!-- <?php
		wp_nav_menu( array( 
		    'theme_location' => 'primary_navigation', 
		    'container_class' => 'col-lg-3 blurb',
		    'menu_class' => 'list-unstyled' ) ); 
		?> -->
        <div class="col-lg-2 blurb">
            <ul class="list-unstyled">
                <li>
                    <a href="/services/adoption/" class="head">Adoption<span class="arrow-right"></span></a>
                </li>
                <?php
	                $parent = 41;
	                $args=array(
	                  'title_li' => '',
	                  'child_of' => $parent
	                );
	                $pages = get_pages($args);
	                if ($pages) {
	                  $pageids = array();
	                  foreach ($pages as $page) {
	                        $pageids[]= $page->ID;
	                  }

	                  $args=array(
	                        'title_li'=> '',
	                        'depth' => 2,
	                        'include' => $parent . ',' . implode(",", $pageids) . ','
	                  );
	                  wp_list_pages($args);
	                  wp_reset_query();
	                }
		        ?>
            </ul>
        </div>
        <div class="col-lg-2 blurb">
            <ul class="list-unstyled">
                <?php
	                $parent = 70;
	                $args=array(
	                  'title_li' => '',
	                  'child_of' => $parent
	                );
	                $pages = get_pages($args);
	                if ($pages) {
	                  $pageids = array();
	                  foreach ($pages as $page) {
	                        $pageids[]= $page->ID;
	                  }

	                  $args=array(
	                        'title_li'=> '',
	                        'depth' => 2,
	                        'include' => $parent . ',' . implode(",", $pageids) . ','
	                  );
	                  wp_list_pages($args);
	                  wp_reset_query();
	                }
		        ?>
            </ul>
        </div>
        <div class="col-lg-2 blurb">
            <ul class="list-unstyled">
                <?php
	                $parent = 160;
	                $args=array(
	                  'title_li' => '',
	                  'child_of' => $parent
	                );
	                $pages = get_pages($args);
	                if ($pages) {
	                  $pageids = array();
	                  foreach ($pages as $page) {
	                        $pageids[]= $page->ID;
	                  }

	                  $args=array(
	                        'title_li'=> '',
	                        'depth' => 2,
	                        'include' => $parent . ',' . implode(",", $pageids) . ','
	                  );
	                  wp_list_pages($args);
	                  wp_reset_query();
	                }
		        ?>
            </ul>
        </div>
        <div class="col-lg-2 blurb">
            <ul class="list-unstyled">
                <?php
	                $parent = 76;
	                $args=array(
	                  'title_li' => '',
	                  'child_of' => $parent
	                );
	                $pages = get_pages($args);
	                if ($pages) {
	                  $pageids = array();
	                  foreach ($pages as $page) {
	                        $pageids[]= $page->ID;
	                  }

	                  $args=array(
	                        'title_li'=> '',
	                        'depth' => 2,
	                        'include' => $parent . ',' . implode(",", $pageids) . ','
	                  );
	                  wp_list_pages($args);
	                  wp_reset_query();
	                }
		        ?>
            </ul>
        </div>
        <div class="col-lg-3 blurb">
            <ul class="list-unstyled">
                <?php
	                $parent = 81;
	                $args=array(
	                  'title_li' => '',
	                  'child_of' => $parent
	                );
	                $pages = get_pages($args);
	                if ($pages) {
	                  $pageids = array();
	                  foreach ($pages as $page) {
	                        $pageids[]= $page->ID;
	                  }

	                  $args=array(
	                        'title_li'=> '',
	                        'depth' => 2,
	                        'include' => $parent . ',' . implode(",", $pageids) . ','
	                  );
	                  wp_list_pages($args);
	                  wp_reset_query();
	                }
		        ?>
            </ul>
        </div>
        <div class="col-lg-1 blurb">
            <ul class="list-unstyled">
                <li>
                    <a href="#" class="head">Contact us<span class="arrow-right"></span></a>
                </li>
               <!-- <li>
                    <a href="#" class="header">2016 Paw Valley Festival & 5K <span class="arrow-right"></span></a>
                </li> -->
            </ul>
        </div>
        
    </section>
</div>
<?php // while (have_posts()) : the_post(); ?>
	<!-- Grabs Page Header -->
	<?php get_template_part('templates/page', 'header'); ?>

	<!-- Grabs Content of Front Page -->
	<!-- <?php get_template_part('templates/content', 'page'); ?> -->
<?php //endwhile; ?>