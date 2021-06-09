<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package Mls Finance
 * @subpackage Mls Finance
 * @since 1.0
 */
/* Template Name: Articles */
get_header();?>
    <header style="background:url(<?php echo get_theme_file_uri('./images/articles-BG.svg') ?>) no-repeat; background-color: #D8E1E5; repeat; background-size: cover;background-position: center; height: 45rem;">
        <div class="overlay">
            <div class="container">
                <div class="hero-section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 px-0 hero-text">
                                <h1 class="pb-2 "    data-aos="fade-up" data-aos-duration="1000">Receive the latest financial news</h1>
                                <h6 class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Enter your details and email address below and we'll send you our monthly updates.</h6>
                                <div class="pt-3">
                                    <form action="">
                                        <div class="form-row d-flex">
                                            <div class="form-group col-md-6 pe-2 mx-0 ">
                                                <input type="text" class="form-control " placeholder="Full Bame" name="firstName" id="inputFullName" >
                                            </div>
                                            <div class="form-group col-md-6 ps-1 mx-0">
                                                <input type="email" class="form-control" placeholder="Email Address" name="emailAddress" id="inputEmail" >
                                            </div>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <div class="form-group col-md-6 pe-2 mx-0">
                                                <input type="tel" class="form-control" placeholder="Phone Number" name="emailAddress" id="inputEmail" >
                                            </div>
                                        </div>
                                        <div class="d-flex pt-2">
                                            <p>If you also enter your address details below we'll send you our latest magazine quarterly</p> 
                                        </div>
                                        <div class="form-row d-flex">
                                            <div class="form-group col-md-6 pe-2 mx-0 ">
                                                <input type="text" class="form-control " placeholder="Full Bame" name="firstName" id="inputFullName" >
                                            </div>
                                            <div class="form-group col-md-6 ps-1 mx-0">
                                                <input type="email" class="form-control" placeholder="Email Address" name="emailAddress" id="inputEmail" >
                                            </div>
                                        </div>
                                        <div class="form-row d-flex pt-2">
                                            <div class="form-group col-md-6 pe-2 mx-0 ">
                                                <input type="text" class="form-control " placeholder="Full Bame" name="firstName" id="inputFullName" >
                                            </div>
                                            <div class="form-group col-md-6 ps-1 mx-0">
                                                <input type="email" class="form-control" placeholder="Email Address" name="emailAddress" id="inputEmail" >
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end pt-2 mb-5">
                                            <button class="btn btn-warning" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div> <!-- overlay ends here -->
    </header>

    <div class="articles-section py-5 ">
        <div class="text-center py-5">
            <h2 class="fw-600"> Articles</h2>
            <p>MLS Finance Latest News and Articles</p>
        </div>
        <div class="container">
            <div class="row article-rounded p-5">
                <div class="col-12 col-md-5 section1-left">
                    <div class="article-img">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/featured-img.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="pt-5">
                        <h4 class="fw-600">Are you a  looking to buy a new home?</h4>
                        <p>The MLS home ownership dream can be fulfilled. Find out all you need to know here</p>
                        <div class="d-flex aurthor-details justify-content-between pt-4">
                            <div class="d-flex justify-content-between ">
                                <div class="profile">
                                    <img src="<?php echo get_theme_file_uri('./images/profile.jpg'); ?>" alt="">
                                </div>
                                <div class="name ps-3">
                                    <h6 class="fw-600">WAYNE HEDLEY</h6>
                                    <p>20th April, 2021</p>
                                </div>
                            </div>
                            <div class="numer-of-likes">
                                <h6><i class="fas fa-heart"></i> 200 likes this post</h6>
                            </div>
                            <div class="comments">
                                <h6><i class="far fa-comment-dots"></i> 200 comments</h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between pt-4">
                            <a class="fw-600 mls-color" href="">Find out more <i class="fas fa-arrow-right"></i></a>
                            <a class="fw-600" href=""><i class="fas fa-share-alt"></i> Share</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row article-rounded p-5 my-5">
                <div class="col-12 col-md-5 section1-left">
                    <div class="article-img">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/featured-img.png'); ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="pt-5">
                        <h4 class="fw-600">Are you a  looking to buy a new home?</h4>
                        <p>The MLS home ownership dream can be fulfilled. Find out all you need to know here</p>
                        <div class="d-flex aurthor-details justify-content-between pt-4">
                            <div class="d-flex justify-content-between ">
                                <div class="profile">
                                    <img src="<?php echo get_theme_file_uri('./images/profile.jpg'); ?>" alt="">
                                </div>
                                <div class="name ps-3">
                                    <h6 class="fw-600">WAYNE HEDLEY</h6>
                                    <p>20th April, 2021</p>
                                </div>
                            </div>
                            <div class="numer-of-likes">
                                <h6><i class="fas fa-heart"></i> 200 likes this post</h6>
                            </div>
                            <div class="comments">
                                <h6><i class="far fa-comment-dots"></i> 200 comments</h6>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between pt-4">
                            <a class="fw-600 mls-color" href="">Find out more <i class="fas fa-arrow-right"></i></a>
                            <a class="fw-600" href=""><i class="fas fa-share-alt"></i> Share</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row article-rounded p-5 my-5">
                <div class="col-12 col-md-6 section1-left ">
                    <div class="article-img">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/book-cover.png'); ?>" alt="">
                        <h4 class="fw-600 pt-4">Finance History</h4>
                        <p>The MLS home ownership dream can be fulfilled. Find out all you need to ... more</p>
                        <button class="btn btn-warning" type="submit"><i class="fas fa-play"></i> Latest Podcast</button>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Thursday, 20 May 2020 - 1Hr
                                <br>  #1 Finance Read
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Thursday, 20 May 2020 - 1Hr
                                <br>#1 Finance Read
                                
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Thursday, 20 May 2020 - 1Hr
                                <br>#1 Finance Read
                                
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Thursday, 20 May 2020 - 1Hr <br>#1 Finance Read
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-5">
            <button class="btn btn-warning" type="submit"> See More</button>
        </div>
    </div>  

<div class="contact-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="pt-3 articles-contact">
                    <h1 class="pb-2 fw-600 "data-aos="fade-up" data-aos-duration="1000">Stay Informed</h1>
                    <h6 class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Home loans, mortgage broking, insurance and investing - find topical articles to keep you informed and up to date.</h6>
                    <div class="d-flex justify-content-center pt-5 pb-2">
                        <p class="pt-3 me-4 fw-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Book a consultation today</p>
                        <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/phone-call-article.svg'); ?>" alt="">
                    </div>
                    <form action="">
                        <div class="form-row d-flex">
                            <div class="form-group col-md-6 px-0 mx-0 ">
                                <input type="text" class="form-control " placeholder="Your name" name="firstName" id="inputFirstName" >
                            </div>
                            <div class="form-group col-md-6 px-0 mx-0">
                                <input type="tel" class="form-control" placeholder="Number" name="phoneNumber" id="inputFirstName" >
                            </div>
                        </div>
                        <div class="d-flex pt-2 mb-5">
                            <input type="email" class="form-control" placeholder="Email address" name="email" id="email" >
                            <button style="width: 20%;" class="btn btn-warning" type="submit">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-5 articles-rightImage">
                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" src="<?php echo get_theme_file_uri('./images/stay-inform.jpg'); ?>" alt="">
            </div>
           
        </div>
           
    </div>
</div>

<?php get_footer();?>