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
/* Template Name: Home */
get_header();?>
        <div class="container">
            <div class="hero-section ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 px-0 hero-text">
                            <h1 class="pb-2 "    data-aos="fade-up" data-aos-duration="1000">MLS can help you get the right home loans</h1>
                            <h6 class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">With low interet rates, now is a great time to broker with MLS Finance</h6>
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
    <div class="section-1 py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 section1-left">
                    <div class="mls-card d-flex align-item-baseline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="icon text-center me-3">
                            <i class="fa fa-home  "></i>
                        </div>
                        <div class="residential-lending"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Residential Lending</h5>
                            <p>We provide residential real estates 
                            owners and purchases access to a 
                            variety of mortgage options</p>
                        </div>
                    </div>
                    <div class="mls-card d-flex mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="icon text-center  me-3" >
                            <i class="far fa-chart-bar "></i>
                        </div>
                        <div class="residential-lending" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Investment Loans</h5>
                            <p>We communicate with you on every 
                            step of the way from application to 
                            settlement</p>
                        </div>
                    </div>
                    <div class="mls-card d-flex mt-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="icon text-center  me-3">
                            <i class="fas fa-file-invoice-dollar "></i>
                        </div>
                        <div class="residential-lending" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Want to Refinance?</h5>
                            <p>Learn about refinancing, when to do it and what to do every step</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="section1-right" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h3 data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700">Go straight to MLS <br>
                        Finance</h3>
                        <p data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">Find a variety of servies and assitance offered <br> here at MLS Finanace</p>
                        <button type="button" class="btn btn-warning">Learn More</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>  
    <div class="section-2 ">
        <div class="">
            <div class="row">
                <div class="col-12 col-md-5 ">
                    <div class="section2-text" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">MLS is here to help</h2>
                        <p>Experience the MLS broker difference, we take out the legwork and we will fit into your schedule</p>
                       <div class="d-flex flex-column">
                            <button class="btn btn-appointment mb-3 "><a class="round me-2" href=""><i class="far fa-calendar-alt "></i></a>Book Appointment</button>
                            <button class="btn btn-call"><a class="round me-2" href=""><i class="fas fa-phone"></i></a>Give us a call today</button>
                       </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 mx-0">
                   <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200"  src="<?php echo get_theme_file_uri('./images/image.svg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="calculator-section py-5">
        <div class="container">
            <div class="text-center py-3 py-md-5">
                <h2 class="fw-600" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">Use our helpful calculators to crunch the numbers</h2>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-around py-2 py-md-3" >
                <button class="btn btn-calc mb-2 mb-md-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc-light" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between py-2  py-md-3" data-aos="fade-up" >
                <button class="btn btn-calc-light mb-2 mb-md-0" data-aos-duration="1000" data-aos-delay="300">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-around  py-md-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <button class="btn btn-calc mb-2 mb-md-0">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc-light">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
        </div>
    </div>
    <div class="pillars-section pt-5 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2 class="fw-600" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">What makes us different?</h2>
                    <p class="fw-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">The 8 pillars of MLS Finance</p>
                    <div class="pillar-list">
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="education px-5">
                                <h6 class=""><a href="">Education</a></h6>
                            </div>
                            <div class="expertise px-3">
                                <h6 class=""><a href="">Expertise</a></h6>
                            </div>
                            <div class="good-listener px-3">
                                <h6 class=""><a href="">Good Listeners</a></h6>
                            </div>
                            <div class="transparent px-3">
                                <h6 class=""><a href="">Transparent</a></h6>
                            </div>
                        </div>
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center mt-5 px-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="relationship px-3">
                                <h6 class=""><a href="">Relationship</a></h6>
                            </div>
                            <div class="communication px-3">
                                <h6 class=""><a href="">Communication</a></h6>
                            </div>
                            <div class="timely px-5">
                                <h6 class=""><a href="">Timely</a></h6>
                            </div>
                            <div class="personalise px-3">
                                <h6 class=""><a href="">Personalise</a></h6>
                            </div>
                        </div>
                        <p class="fw-600 pt-5 pb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">At MLS Finance. we teach you throughout the process so that once settled, you leave 
                        more educated. That means you come away from a phone call or meeting feeling 
                        like you know more thaj you did going in ....</p>
                        <button type="button" class="btn btn-warning">Learn More</button>


                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="pillars-img pt-5 pt-md-0">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="700" src="<?php echo get_theme_file_uri('./images/Img-3.svg'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-report pb-5 py-md-5">
        <div class="container">
            <div class="text-center py-5">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="fw-600">Customers are loving MLS Finance</h2>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-around">
                <div class="testimonial me-0 me-md-3 mb-5 mb-md-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <div class="d-flex justify-content-between ">
                        <div class="profile">
                            <img src="<?php echo get_theme_file_uri('./images/profile.jpg'); ?>" alt="">
                        </div>
                        <div class="name">
                            <h4 class="fw-600">Jonathan Taylor</h4>
                            <p>CEO at Creativex</p>
                        </div>
                        <div class="tweet-icon">
                            <span> <i class="fab fa-twitter fa-2x "> </i></span>
                        </div>
                    </div>
                    <div class="text pt-3">
                        <p>OMG! I cannot believe that I have got a brand new residential home after getting <span style="color:#CCD408">@Mls Finance</span></p>
                    </div>
                </div>
                <div class="testimonial me-0 me-md-3 mb-5 mb-md-0" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                    <div class="d-flex justify-content-between">
                        <div class="profile">
                            <img src="<?php echo get_theme_file_uri('./images/profile.jpg'); ?>" alt="">
                        </div>
                        <div class="name">
                            <h4 class="fw-600">Jonathan Taylor</h4>
                            <p>CEO at Creativex</p>
                        </div>
                        <div class="tweet-icon">
                            <span> <i class="fab fa-twitter fa-2x"> </i></span>
                        </div>
                    </div>
                    <div class="text pt-3">
                        <p>OMG! I cannot believe that I have got a brand new residential home after getting <span style="color:#CCD408">@Mls Finance</span></p>
                    </div>
                </div>
                <div class="testimonial" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <div class="d-flex justify-content-between">
                        <div class="profile">
                            <img src="<?php echo get_theme_file_uri('./images/profile.jpg'); ?>" alt="">
                        </div>
                        <div class="name">
                            <h4 class="fw-600">Jonathan Taylor</h4>
                            <p>CEO at Creativex</p>
                        </div>
                        <div class="tweet-icon">
                            <span> <i class="fab fa-twitter fa-2x"> </i></span>
                        </div>
                    </div>
                    <div class="text pt-3">
                        <p>OMG! I cannot believe that I have got a brand new residential home after getting <span style="color:#CCD408">@Mls Finance</span></p>
                    </div>
                </div>
            </div>  
            <div class="see-more text-center pt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                <a class="fw-600" href="" style="color:#CCD408; text-decoration:none"><i class="fas fa-comment-alt"></i> See all testimonials</a>          
            </div>
        </div>
    </div>
    <div class="property-investment pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" src="<?php echo get_theme_file_uri('./images/property-img.svg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-8">
                    <div class=" ebook">
                        <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="fw-600">Property Investment</h2>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Get your property guide essential booklet</p>
                        <button data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" type="button" class="btn btn-warning">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="articles py-5">
        <div class="container">
            <div class="title text-center">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="fw-600">Our Latest Articles</h2>
                <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Explore the world of finance with our latest blog posts</p>
            </div>
            <div class="owl-carousel owl-theme pt-5">
                <div class="owl-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="owl-slider-text pt-5">
                                    <p>Our buy vs rent report shows where it could be cheaper to buy than rent</p>
                                    <a class="fw-600" href="">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img  src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="owl-slider-text pt-5">
                                    <p>Our buy vs rent report shows where it could be cheaper to buy than rent</p>
                                    <a class="fw-600" href="">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="owl-slider-text pt-5">
                                    <p>Our buy vs rent report shows where it could be cheaper to buy than rent</p>
                                    <a class="fw-600" href="">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <div class="investment py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 top-left pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mt-4 mt-md-0">
                                    <h5 class="fw-600">Buying your first home?</h5>
                                    <p>Things to know when buying your first home</p>
                                    <a href="">Find out more</a>
                                </div>     
                            </div>
                        </div>
                                
                    </div>
                </div>
                <div class="col-12 col-md-6 top-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mt-4 mt-md-0">
                                    <h5 class="fw-600">Buying your first home?</h5>
                                    <p>Things to know when buying your first home</p>
                                    <a href="">Find out more</a>
                                </div>     
                            </div>
                        </div>
                                
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-12 col-md-6 bottom-left pt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mt-4 mt-md-0">
                                    <h5 class="fw-600">Buying your first home?</h5>
                                    <p>Things to know when buying your first home</p>
                                    <a href="">Find out more</a>
                                </div>     
                            </div>
                        </div>
                                
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="container bottom-right pt-5">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mt-4 mt-md-0">
                                    <h5 class="fw-600">Buying your first home?</h5>
                                    <p>Things to know when buying your first home</p>
                                    <a href="">Find out more</a>
                                </div>     
                            </div>
                        </div>
                                
                    </div>
                </div>
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

                        <div class="py-3">
                            <input  class="btn btnn mt-1" type="submit" value="Send Message" style="background-color: #ffffff; color:#000000; border-color:#ffffff; margin-left: 31rem; height:45px">
                        </div>                  
                    </form> 
                </div>
            </div>
           
        </div>
    </div>
        
<?php get_footer();?>
