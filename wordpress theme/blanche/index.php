<?php get_header(); ?>

<!-- nav bar -->         
<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    <a class="navbar-brand d-lg-none" href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png"></a> 
    <div class="container"> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
        </button>                 
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent"> 
            <ul data-aos="fade-left" data-aos-duration="1500" class="navbar-nav me-auto" style="min-width: 400px;"> 
                <li class="nav-item pe-2"> 
                    <a class="nav-link active" aria-current="page" href="#"><?php _e( 'SHOP', 'blanche' ); ?></a> 
                </li>                         
                <li class="nav-item"> 
                    <a class="nav-link pe-2" href="#"><?php _e( 'OUR STORY', 'blanche' ); ?></a> 
                </li>                         
                <li class="nav-item"> 
                    <a class="nav-link pe-2" href="#"><?php _e( 'EXPERTISE', 'blanche' ); ?></a> 
                </li>                         
            </ul>                     
            <a data-aos="fade-in" data-aos-duration="1500" href="#" class="d-none d-lg-block mx-5"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'header_logo', esc_url( get_template_directory_uri() . '/assets/img/logo.png' ) ), 'large' ) ?>"></a> 
            <ul data-aos="fade-right" data-aos-duration="1500" class="navbar-nav ms-auto justify-content-end" style="min-width: 400px;"> 
                <li class="nav-item"> 
                    <a class="nav-link active ps-2" href="#"><?php _e( 'CONTACT', 'blanche' ); ?></a> 
                </li>                         
                <li class="nav-item"> 
                    <a id="search_btn" class="nav-link ps-2" href="#"><i class="bi bi-search"></i> &nbsp;</a> 
                </li>                         
                <li class="nav-item"> 
                    <a class="nav-link ps-2" href="#"><i class="bi bi-person"></i> &nbsp;</a> 
                </li>                         
                <li class="nav-item"> 
                    <a class="nav-link ps-2" href="#"><i class="bi bi-cart"></i> &nbsp;</a> 
                </li>                         
            </ul>                     
        </div>                 
    </div>             
</nav>         
<section id="search_section"> 
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-12 py-3 px-3" style="min-height: 80px;"> 
                <div class="input-group input-group-lg border-bottom"> 
                    <span class="input-group-text border-0 bg-white" id="inputGroup-sizing-lg"><i class="bi bi-search"></i></span> 
                    <input type="text" class="form-control border-0" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg"> 
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- slider -->         
<section id="slider" class="mb-5 wow"> 
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"> 
        <div class="carousel-inner justify-content-center"> 
            <div class="carousel-item active text-light"> 
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'slider_slide1_img', esc_url( get_template_directory_uri() . '/assets/img/slider1.jpg' ) ), 'full' ) ?>" class="d-block w-100" alt="slider1"> 
                <div class="carousel-caption d-none d-md-block text-center"> 
                    <h2 class="times h1 ms-auto me-auto"><?php echo get_theme_mod( 'slider_caption1', __( 'Super Soft, Stylish Bed Linen Made With Love', 'blanche' ) ); ?></h2> 
                </div>                         
            </div>                     
            <div class="carousel-item"> 
                <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'slider_slide2_img', esc_url( get_template_directory_uri() . '/assets/img/slider2.jpg' ) ), 'full' ) ?>" class="d-block w-100" alt="slider2"> 
                <div class="carousel-caption d-none d-md-block"> 
                    <h2 class="times h1 ms-auto me-auto"><?php echo get_theme_mod( 'slider_caption2', __( 'Super Soft, Stylish Bed Linen Made With Love', 'blanche' ) ); ?></h2> 
                </div>                         
            </div>                     
            <div class="text-center explore-btn-layer d-md-block d-none"> 
                <button class="btn btn-outline-light mt-5">
                    <?php _e( 'EXPLORE', 'blanche' ); ?>
                </button>                         
                <div class="vl"></div>                         
            </div>                     
        </div>                 
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"> 
            <span class="carousel-control-prev-icon" aria-hidden="true"></span> 
            <span class="visually-hidden"><?php _e( 'Previous', 'blanche' ); ?></span> 
        </button>                 
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next"> 
            <span class="carousel-control-next-icon" aria-hidden="true"></span> 
            <span class="visually-hidden"><?php _e( 'Next', 'blanche' ); ?></span> 
        </button>                 
    </div>             
</section>         
<!-- explore -->         
<section id="exploer"> 
    <div class="container text-center my-5 pt-5"> 
        <div class="row justify-content-center"> 
            <div class="col-md-8"> 
                <p data-aos="fade-in" data-aos-duration="1500" class="lead times my-5"><?php echo get_theme_mod( 'explore_intro', __( 'Our premiume products got the finest quality cotton that creates an exquisite lightweight textile that\'s soft and crisp - guaranteed to give you a wonderful night\'s sleep.', 'blanche' ) ); ?></p> 
            </div>                     
        </div>                 
        <div class="row my-5 g-0 align-items-center justify-content-center "> 
            <div data-aos="fade-up" data-aos-duration="1500" class="c0l-12 col-md-5 text-center text-white overflow-hidden explore-box"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'explore_img1', esc_url( get_template_directory_uri() . '/assets/img/explore1.jpg' ) ), 'large' ) ?>"/> 
                <div style="margin-top: -150px;" class="d-grid gap-2 col-6 mx-auto"> 
                    <button class="btn btn-light shadow rounded btn-lg" type="button">
                        <span class="h6 text-muted fw-bold" href="<?php echo get_theme_mod( 'explore_btn_link1' ); ?>"><?php echo get_theme_mod( 'explore_btn_label1', __( 'Bed Linens', 'blanche' ) ); ?></span>
                    </button>                             
                </div>                         
            </div>                     
            <div data-aos="fade-up" data-aos-duration="1500" class="c0l-12 col-md-5 text-center text-white overflow-hidden explore-box"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'explore_img2', esc_url( get_template_directory_uri() . '/assets/img/explore2.jpg' ) ), 'large' ) ?>"/> 
                <div style="margin-top: -150px;" class="d-grid gap-2 col-6 mx-auto"> 
                    <button class="btn btn-light shadow rounded btn-lg" type="button">
                        <span class="h6 text-muted fw-bold" href="<?php echo get_theme_mod( 'explore_btn_link2' ); ?>"><?php echo get_theme_mod( 'explore_btn_label2', __( 'Shop Bath Towels', 'blanche' ) ); ?></span>
                    </button>                             
                </div>                         
            </div>                     
            <div data-aos="fade-up" data-aos-duration="1500" class="c0l-12 col-md-5 text-center text-white overflow-hidden explore-box"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'explore_img3', esc_url( get_template_directory_uri() . '/assets/img/explore3.jpg' ) ), 'large' ) ?>"/> 
                <div style="margin-top: -150px;" class="d-grid gap-2 col-6 mx-auto"> 
                    <button class="btn btn-light shadow rounded btn-lg" type="button">
                        <span class="h6 text-muted fw-bold"><?php echo get_theme_mod( 'explore_btn_label3', __( 'Shop Bath Robes', 'blanche' ) ); ?></span>
                    </button>                             
                </div>                         
            </div>                     
            <div data-aos="fade-up" data-aos-duration="1500" class="c0l-12 col-md-5 text-center text-white overflow-hidden explore-box"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'explore_img4', esc_url( get_template_directory_uri() . '/assets/img/explore4.jpg' ) ), 'large' ) ?>"/> 
                <div style="margin-top: -150px;" class="d-grid gap-2 col-6 mx-auto"> 
                    <button class="btn btn-light shadow rounded btn-lg" type="button">
                        <span class="h6 text-muted fw-bold" href="<?php echo get_theme_mod( 'explore_btn_link4' ); ?>"><?php echo get_theme_mod( 'explore_btn_label4', __( 'Shop Home Fragrances', 'blanche' ) ); ?></span>
                    </button>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- best sellers -->         
<section id="best-sellers"> 
    <div class="container text-center my-5"> 
        <div class="my-5"> 
            <h2 class="times" data-aos="fade-in" data-aos-duration="1500"><?php _e( 'Best sellers', 'blanche' ); ?></h2> 
        </div>                 
        <div class="row justify-content-center"> 
            <div class="col-md-10"> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="card"> 
                            <img data-aos="flip-left" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'bs_pimage1', esc_url( get_template_directory_uri() . '/assets/img/best1.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="best1"> 
                            <div class="card-body text-start"> 
                                <h4 class="h5"><?php echo get_theme_mod( 'bs_pname1', __( 'Product Name', 'blanche' ) ); ?></h4> 
                                <p class="h5 fw-light"><?php echo get_theme_mod( 'bs_pprice1', __( 'AED XXX', 'blanche' ) ); ?></p> 
                                <p class="card-text text-muted fw-light"><?php _e( 'Special Offer:', 'blanche' ); ?> <span class="text-primary"><?php _e( 'Get 25%', 'blanche' ); ?> <?php _e( 'Off', 'blanche' ); ?></span></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="card"> 
                            <img data-aos="flip-up" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'bs_pimage2', esc_url( get_template_directory_uri() . '/assets/img/best2.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="best1"> 
                            <div class="card-body text-start"> 
                                <h4 class="h5"><?php echo get_theme_mod( 'bs_pname2', __( 'Product Name', 'blanche' ) ); ?></h4> 
                                <p class="h5 fw-light"><?php echo get_theme_mod( 'bs_pprice2', __( 'AED XXX', 'blanche' ) ); ?></p> 
                                <p class="card-text text-muted fw-light"><?php _e( 'Special Offer:', 'blanche' ); ?> <span class="text-primary"><?php _e( 'Get 25%', 'blanche' ); ?> <?php _e( 'Off', 'blanche' ); ?></span></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-4"> 
                        <div class="card"> 
                            <img data-aos="flip-right" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'bs_pimage3', esc_url( get_template_directory_uri() . '/assets/img/best3.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="best1"> 
                            <div class="card-body text-start"> 
                                <h4 class="h5"><?php echo get_theme_mod( 'bs_pname3', __( 'Product Name', 'blanche' ) ); ?></h4> 
                                <p class="h5 fw-light"><?php echo get_theme_mod( 'bs_pprice3', __( 'AED XXX', 'blanche' ) ); ?></p> 
                                <p class="card-text text-muted fw-light"><?php _e( 'Special Offer:', 'blanche' ); ?> <span class="text-primary"><?php _e( 'Get 25%', 'blanche' ); ?> <?php _e( 'Off', 'blanche' ); ?></span></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- features -->         
<section id="features" class="bg-grey"> 
    <div class="container text-center my-5 py-5"> 
        <div class="my-5"> 
            <h2 class="times" data-aos="fade-in" data-aos-duration="1500"><?php echo get_theme_mod( 'section_title', __( 'Your Comfort Is Our #1 Priority', 'blanche' ) ); ?></h2> 
        </div>                 
        <div class="row justify-content-center"> 
            <div class="col-md-10"> 
                <div class="row justify-content-between"> 
                    <div class="col-md-3"> 
                        <div class="card border-0"> 
                            <img data-aos="flip-left" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'fimg_1', esc_url( get_template_directory_uri() . '/assets/img/feature1.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="f1"> 
                            <div class="card-body bg-grey"> 
                                <p class="fw-bolder"><?php echo get_theme_mod( 'fname1', __( 'Quality Product', 'blanche' ) ); ?></p> 
                                <p class="fw-light"><?php echo get_theme_mod( 'fdesc1', __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ) ); ?></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-3"> 
                        <div class="card border-0"> 
                            <img data-aos="flip-left" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'fimg_2', esc_url( get_template_directory_uri() . '/assets/img/feature2.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="f2"> 
                            <div class="card-body bg-grey"> 
                                <p class="fw-bolder"><?php echo get_theme_mod( 'fname2', __( 'Quality Product', 'blanche' ) ); ?></p> 
                                <p class="fw-light"><?php echo get_theme_mod( 'fdesc2', __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ) ); ?></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-3"> 
                        <div class="card border-0"> 
                            <img data-aos="flip-right" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'fimg_3', esc_url( get_template_directory_uri() . '/assets/img/feature3.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="f3"> 
                            <div class="card-body bg-grey"> 
                                <p class="fw-bolder"><?php echo get_theme_mod( 'fname3', __( 'Quality Product', 'blanche' ) ); ?></p> 
                                <p class="fw-light"><?php echo get_theme_mod( 'fdesc3', __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ) ); ?></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                    <div class="col-md-3"> 
                        <div class="card border-0"> 
                            <img data-aos="flip-right" data-aos-duration="1500" src="<?php echo PG_Image::getUrl( get_theme_mod( 'fimg_4', esc_url( get_template_directory_uri() . '/assets/img/feature4.jpg' ) ), 'large' ) ?>" class="card-img-top" alt="f4"> 
                            <div class="card-body bg-grey"> 
                                <p class="fw-bolder"><?php echo get_theme_mod( 'fname4', __( 'Quality Product', 'blanche' ) ); ?></p> 
                                <p class="fw-light"><?php echo get_theme_mod( 'fdesc4', __( 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, tenetur?', 'blanche' ) ); ?></p> 
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- testemonials -->         
<section id="testemonials"> 
    <div class="container text-center my-5 py-5"> 
        <div data-aos="fade-in" data-aos-duration="1500" class="row justify-content-center"> 
            <div class="col-6 my-5"> 
                <p class="text-muted"> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> </p> 
                <figure class="my-5"> 
                    <blockquote class="blockquote"> 
                        <p class="times h2"><?php echo get_theme_mod( 'testemonial', __( '"This is the best towel set I\'ve ever had; it\'s cool, comfortable and aesthetically perfect."', 'blanche' ) ); ?></p> 
                    </blockquote>                             
                    <figcaption class="blockquote-footer">
                        <?php echo get_theme_mod( 'testem_auther' ); ?>
                    </figcaption>                             
                </figure>                         
                <a href="<?php echo get_theme_mod( 'testem_link', '#' ); ?>" class="btn btn-light shadow"><?php echo get_theme_mod( 'testem_btn', __( 'READ TESTEMONIALS', 'blanche' ) ); ?></a> 
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- follow us on instagram (carousel) -->         
<section id="socialmedia"> 
    <div class="container-fluid text-center"> 
        <h2 data-aos="fade-in" data-aos-duration="1500"><?php echo get_theme_mod( 'social_title', 'FOLLOW US <i class="bi bi-instagram"></i>' ); ?></h2> 
        <div class="row g-0"> 
            <div class="col-3"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'sm_img1', esc_url( get_template_directory_uri() . '/assets/img/gallery1.jpg' ) ), 'large' ) ?>"/> 
            </div>                     
            <div class="col-3"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'sm_img2', esc_url( get_template_directory_uri() . '/assets/img/gallery2.jpg' ) ), 'large' ) ?>"/> 
            </div>                     
            <div class="col-3"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'sm_img3', esc_url( get_template_directory_uri() . '/assets/img/gallery3.jpg' ) ), 'large' ) ?>"/> 
            </div>                     
            <div class="col-3"> 
                <img class="img-fluid" src="<?php echo PG_Image::getUrl( get_theme_mod( 'sm_img4', esc_url( get_template_directory_uri() . '/assets/img/gallery4.jpg' ) ), 'large' ) ?>"/> 
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- footer -->         
<section id="footer"> 
    <div class="container mt-5 mb-3 py-3"> 
        <div class="row g-0 justify-content-between text-secondary"> 
            <div data-aos="fade-up" data-aos-duration="1500" class="col-md-4 pe-4"> 
                <h4 class="h5"><?php echo get_theme_mod( 'story_title', __( 'OUR STORY', 'blanche' ) ); ?></h4> 
                <p class="my-1"><?php echo get_theme_mod( 'story_summery', __( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem est aperiam, officia cupiditate expedita aspernatur.', 'blanche' ) ); ?></p> 
                <p class="text-muted"> <a class="text-secondary me-4" href="<?php echo get_theme_mod( 'instagram_link' ); ?>"><i class="bi bi-instagram"></i></a> <a class="text-secondary me-4" href="<?php echo get_theme_mod( 'twitterlink' ); ?>"><i class="bi bi-twitter"></i></a> <a class="text-secondary me-4" href="<?php echo get_theme_mod( 'facebook_link' ); ?>"><i class="bi bi-facebook"></i></a> </p> 
            </div>                     
            <div data-aos="fade-up" data-aos-duration="1500" class="col-md-2"> 
                <h4 class="h5"><?php _e( 'MORE', 'blanche' ); ?></h4> 
                <ul class="list-unstyled"> 
                    <li>
                        <?php _e( 'About Us', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'Contact Us', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'Track My Order', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'FAQs', 'blanche' ); ?>
                    </li>                             
                </ul>                         
            </div>                     
            <div data-aos="fade-up" class="col-md-2"> 
                <h4 class="h5"><?php _e( 'SHOP', 'blanche' ); ?></h4> 
                <ul class="list-unstyled"> 
                    <li>
                        <?php _e( 'Bed Linen', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'Bath Towels', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'Bathrobes', 'blanche' ); ?>
                    </li>                             
                    <li>
                        <?php _e( 'Home Fragrances', 'blanche' ); ?>
                    </li>                             
                </ul>                         
            </div>                     
            <div data-aos="fade-up" data-aos-duration="1500" class="col-md-3"> 
                <h4 class="h5"><?php _e( 'NEWSLETTER', 'blanche' ); ?></h4> 
                <p><?php _e( 'Dolorem est aperiam, officia cupiditate expedita.', 'blanche' ); ?></p> 
                <div class="input-group mb-3"> 
                    <input type="text" placeholder="email" class="form-control" aria-label="email"> 
                    <span class="input-group-text"><?php _e( 'Subscribe', 'blanche' ); ?></span> 
                </div>                         
            </div>                     
        </div>                 
        <div data-aos="fade-up" data-aos-duration="1500" class="row my-5"> 
            <div class="col-md-6 text-md-start"> 
                <p class="text-secondary"><?php _e( '&copy; 2022 BLANCHE', 'blanche' ); ?></p> 
            </div>                     
            <div class="col-md-6 text-md-end"> 
                <p class="text-secondary h3"> <a class="text-secondary me-2"><i class="icofont-visa"></i></a> <a class="text-secondary me-2"><i class="icofont-mastercard"></i></a> <a class="text-secondary me-2"><i class="icofont-apple-pay"></i></a> <a class="text-secondary me-2"><i class="icofont-paypal"></i></a> <a class="text-secondary"><i class="icofont-american-express-alt"></i></a> </p> 
            </div>                     
        </div>                 
    </div>             
</section>        

<?php get_footer(); ?>