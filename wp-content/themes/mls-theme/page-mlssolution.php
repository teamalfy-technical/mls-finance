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
 * @package Mls Finance
 * @subpackage Mls Finance
 * @since 1.0
 */
/* Template Name: Mls-Solutions */
get_header();?>
<header style="background:url(<?php echo get_theme_file_uri('./images/mls-silution-bg.svg') ?>) no-repeat, repeat;background-size: cover;background-position: center; height: 42rem; background-color: #D8E1E5;">
    <div class="overlay">
        <div class="container">
            <div class="hero-section ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 px-0 hero-text">
                            <h1 class="pb-2 "    data-aos="fade-up" data-aos-duration="1000">Helping You Find The Right Finance</h1>
                            <div class="pt-3">
                                <div class="d-flex justify-content-center pb-2">
                                    <p class="pt-3 me-4 fw-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Book a consultation today</p>
                                    <img data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/phone-call 1.svg'); ?>" alt="">
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
                                        <button class="btn btn-outline" type="submit">Book Now</button>
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
    <div class="right-finances py-5 ">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-600">Find The Right Finances</h2>
            </div>
            <div class="row">
                <div class="d-flex justify-content-between section1-left py-5">
                    <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="re"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Property Investments</h5>
                            <p>Because your home loan will probably be your life’s biggest investment it is important that you obtain the best research and support when making this decision.</p>
                            <button class="btn btn-outline">Learn More</button>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="re"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Property Investments</h5>
                            <p>Because your home loan will probably be your life’s biggest investment it is important that you obtain the best research and support when making this decision.</p>
                            <button class="btn btn-outline">Learn More</button>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="re"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Property Investments</h5>
                            <p>Because your home loan will probably be your life’s biggest investment it is important that you obtain the best research and support when making this decision.</p>
                            <button class="btn btn-outline">Learn More</button>
                        </div>
                    </div>
                    <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="re"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Property Investments</h5>
                            <p>Because your home loan will probably be your life’s biggest investment it is important that you obtain the best research and support when making this decision.</p>
                            <button class="btn btn-outline">Learn More</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>  
    <div class="latest-article py-5 ">
        <div class="container">
            <div class="text-center">
                <h2 class="fw-600">Our Latest Articles</h2>
                <p>Explore the world of finance with our latest blog posts</p>
            </div>
            <div class="d-flex justify-content-between py-5">
                <div class="d-dlex justify-content-between">
                    <div class="d-flex justify-content-between article-card p-3 me-4">
                        <div class="profile">
                            <img src="<?php echo get_theme_file_uri('./images/featured-img.png'); ?>" alt="">
                        </div>
                        <div class="name ps-3">
                            <h6 class="fw-600">Are you a  looking to buy a new home?</h6>
                            <p>The MLS home ownership dream can 
                            be fulfilled. Find out all you need to 
                            know here</p>
                            <a href="">Find out more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>       
                </div>
                <div class="d-dlex justify-content-between">
                    <div class="d-flex justify-content-between article-card p-3">
                        <div class="profile">
                            <img src="<?php echo get_theme_file_uri('./images/featured-img.png'); ?>" alt="">
                        </div>
                        <div class="name ps-3">
                            <h6 class="fw-600">Are you a  looking to buy a new home?</h6>
                            <p>The MLS home ownership dream can 
                            be fulfilled. Find out all you need to 
                            know here</p>
                            <a href="">Find out more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>       
                </div>
                

            </div>
            
            <div class="text-center">
               <button class="btn btn-warning">Read More</button>
            </div>
            
        </div>
    </div>
    <div class="contact-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" src="<?php echo get_theme_file_uri('./images/contact-img.svg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="fw-600">Get in touch</h2>
                    <form method="POST" name="myEmailform"  class="needs-validation pt-5" novalidate>
                        <div class="form-row d-flex flex-column flex-md-row mb-2">
                            <div class="form-group col-12 col-md-6 pe-0 pe-md-1 mb-2 mb-md-0">
                                <input type="text" class="form-control" placeholder="Your Name" name="firstName" id="inputFirstName" >
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <input type="text" class="form-control" placeholder="Phone Number" name="lastName" id="inputLastName" >
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" id="inputLastName" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <select class="form-select form-control" aria-label="Default select example">
                                  <option selected>How did you hear about us</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>     
                        </div>

                        <div class="d-flex justify-content-end">
                            <input  class="btn btnn mt-1" type="submit" value="Send Message" style="background-color: #ffffff; color:#000000; border-color:#ffffff;  height:45px">
                        </div>                  
                    </form> 
                    <p class="py-4">Sign up and get access to our newsletter and articles. We 
                    promise not to send you Spam!</p>
                </div>
            </div>
           
        </div>
    </div>
        
<?php get_footer();?>
