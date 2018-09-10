<?php
  get_header();
  require_once('components/navbar.inc.php');
?>


    <header>


        <div class="card card-intro blue-gradient mb-4">

            <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">


                <div class="row d-flex justify-content-center">


                    <div class="col-md-6">

                        <h1 class="font-weight-bold mb-4">Tourist Places In India</h1>
                        <p class="lead mb-4">India is the country which is surrounded by the Himalayas, Arabian Sea, Bay of Bengal and the Indian Ocean, as we all know that it is rich in its culture, heritage, unique style temples, wildlife, sanctuaries etc. which will attract the tourists large in number.
                        </p>

                    </div>


                </div>

            </div>

        </div>


    </header>

    <main>
        <div class="container">


            <section>
              <div id="dynamic-content"></div>

            </section>

            <section class="text-center">


                <h1 class="h2 font-weight-bold my-4">Tourist Places</h1>


                <div class="row wow fadeIn">
                  <?php
                    if ( have_posts() ) {
                      $counter = 1;
                      while ( have_posts() ) {
                        the_post();
                  ?>


                  <div class="col-lg-4 col-md-12 mb-4">

                    <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                        <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                        <a href="<?php echo get_permalink() ?>">
                            <div class="mask"></div>
                        </a>
                    </div>

                    <!-- <a href="" class="pink-text">
                        <h6 class="mb-3 mt-4">
                            <i class="fa fa-bolt"></i>
                            <strong> <?php the_category(', '); ?></strong>
                        </h6>
                    </a> -->

                    <h4 class="mb-3 font-weight-bold dark-grey-text">
                        <strong><?php the_title(); ?></strong>
                    </h4>

                    <!-- <p>by<a href="<?php echo get_permalink() ?>" class="font-weight-bold dark-grey-text"><?php get_the_author(); ?></a>, <?php echo get_the_date(); ?></p> -->

                    <p class="grey-text"><?php the_excerpt(); ?></p>
                    <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-rounded btn-md">Read more</a>
                  </div>

                <?php
                    if ($counter % 3 == 0) {
                ?>
              </div>

              <div class="row wow fadeIn">
                <?php
                    }
                    $counter++;
                  } // end while
                } // end if
                ?>
              </div>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/sourabh.pandare.1" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/114181284702942015161" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>

            <a href="https://www.linkedin.com/in/sourabh-panadare-13614426/" target="_blank">
                <i class="fa fa-linkedin mr-3"></i>
            </a>

            <a href="https://github.com/SourabhPanadare" target="_blank">
                <i class="fa fa-github mr-3"></i>
            </a>

        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="http://www.sourabhportfolio.in/" target="_blank"> sourabhportfolio.in </a>
        </div>
        <!--/.Copyright-->
<?php  get_footer(); ?>
