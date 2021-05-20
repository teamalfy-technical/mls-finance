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
                        <div class="col-12 col-md-6 pt-3 mt-md-5">
                            <h1>MLS can help you get the right home loans</h1>
                            <p>With low interet rates, now is a great time to broker with MLS Finance</p>
                            <div class="pt-3">
                                <div class="d-flex justify-content-center pb-2">
                                    <p class="pt-3 me-4 fw-600">Book a consultation today</p>
                                    <img src="<?php echo get_theme_file_uri('./images/phone-call 1.svg'); ?>" alt="">
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
                <div class="col-12 col-md-4">
                    <div class="mls-card d-flex">
                        <div class="icon text-center me-3">
                            <i class="fa fa-home fa-2x pt-3"></i>
                        </div>
                        <div class="residential-lending">
                            <h5>Residential Lending</h5>
                            <p>We provide residential real estates 
                            owners and purchases access to a 
                            variety of mortgage options</p>
                        </div>
                    </div>
                    <div class="mls-card d-flex mt-3">
                        <div class="icon text-center  me-3">
                            <i class="far fa-chart-bar"></i>
                        </div>
                        <div class="residential-lending">
                            <h5>Investment Loans</h5>
                            <p>We communicate with you on every 
                            step of the way from application to 
                            settlement</p>
                        </div>
                    </div>
                    <div class="mls-card d-flex mt-3">
                        <div class="icon text-center  me-3">
                            <i class="fa fa-home fa-2x pt-3"></i>
                        </div>
                        <div class="residential-lending">
                            <h5>Want to Refinance?</h5>
                            <p>Learn about refinancing, when to do it and what to do every step</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="section1-right">
                        <h2>Go straight to MLS
                        Finance</h2>
                        <p>Find a variety of servies and assitance offered here at MLS Finanace</p>
                        <button type="button" class="btn btn-warning">Learn More</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>  
    <div class="section-2 ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 section2-text">
                    <h2>MLS is here to help</h2>
                    <p>Experience the MLS broker difference, we take out the legwork and we will fit into your schedule</p>
                    <button class="btn btn-appointment mb-3"><a class="round" href=""><i class="far fa-calendar-alt"></i></a>Book Appointment</button>
                    <button class="btn btn-call"><a class="round" href=""><i class="fas fa-phone"></i></a>Give us a call today</button>
                </div>
                <div class="col-12 col-md-7">
                   <img  src="<?php echo get_theme_file_uri('./images/img.svg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="calculator-section py-5">
        <div class="container">
            <div class="text-center py-5">
                <h2>Use our helpful calculators to crunch the numbers</h2>
            </div>
            <div class="d-flex justify-content-around py-4">
                <button class="btn btn-calc">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc-light">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
            <div class="d-flex justify-content-between  py-3">
                <button class="btn btn-calc-light">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
            <div class="d-flex justify-content-around  py-3">
                <button class="btn btn-calc">Savings Calculator <i class="fas fa-calculator"></i></button>
                <button class="btn btn-calc-light">Budget Planning Calculator <i class="fas fa-calculator"></i></button>
            </div>
        </div>
    </div>
    <div class="pillars-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <h2>What makes us different?</h2>
                    <p class="fw-600">The 8 pillars of MLS Finance</p>
                    <div class="pillar-list">
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center px-3">
                            <div class="education px-5">
                                <h6 class=""><a href="">Education</a></h6>
                            </div>
                            <div class="expertise px-5">
                                <h6 class=""><a href="">Expertise</a></h6>
                            </div>
                            <div class="good-listener px-5">
                                <h6 class=""><a href="">Good Listeners</a></h6>
                            </div>
                            <div class="transparent px-3">
                                <h6 class=""><a href="">Transparent</a></h6>
                            </div>
                        </div>
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center mt-5 px-3">
                            <div class="relationship px-5">
                                <h6 class=""><a href="">Relationship</a></h6>
                            </div>
                            <div class="communication px-5">
                                <h6 class=""><a href="">Communication</a></h6>
                            </div>
                            <div class="timely px-5">
                                <h6 class=""><a href="">Timely</a></h6>
                            </div>
                            <div class="personalise px-3">
                                <h6 class=""><a href="">Personalise</a></h6>
                            </div>
                        </div>
                        <p class="fw-600 pt-5 pb-3">At MLS Finance. we teach you throughout the process so that once settled, you leave 
                        more educated. That means you come away from a phone call or meeting feeling 
                        like you know more thaj you did going in ....</p>
                        <button type="button" class="btn btn-warning">Learn More</button>


                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="<?php echo get_theme_file_uri('./images/Img-3.svg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="customer-report py-5">
        <div class="container">
            <div class="text-center py-5">
                <h2>Customers are loving MLS Finance</h2>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-around">
                <div class="testimonial me-3">
                    <div class="d-flex justify-content-between">
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
                <div class="testimonial me-3">
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
                <div class="testimonial">
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
            <div class="see-more text-center pt-4">
                <a class="fw-600" href="" style="color:#CCD408; text-decoration:none"><i class="fas fa-comment-alt"></i> See all testimonials</a>          
            </div>
        </div>
    </div>
    <div class="property-investment pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="<?php echo get_theme_file_uri('./images/property-img.svg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-8">
                    <div class=" ebook">
                        <h2>Property Investment</h2>
                        <p>Get your property guide essential booklet</p>
                        <button type="button" class="btn btn-warning">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="articles py-5">
        <div class="container">
            <div class="title text-center">
                <h2>Our Latest Articles</h2>
                <p>Explore the world of finance with our latest blog posts</p>
            </div>
            <div class="owl-carousel owl-theme pt-5">
                <div class="owl-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
                                <div class="div">
                                    <h5>Buying your first home?</h5>
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
                                <div class="div">
                                    <h5>Buying your first home?</h5>
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
                                <div class="div">
                                    <h5>Buying your first home?</h5>
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
                            <div class="col-6">
                                <img src="<?php echo get_theme_file_uri('./images/house.jpg'); ?>" alt="">
                            </div>
                            <div class="col-6">
                                <div class="div">
                                    <h5>Buying your first home?</h5>
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
                    <img src="<?php echo get_theme_file_uri('./images/contact-img.svg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <h2 class="fw-600">Get in touch</h2>
                    <form method="POST" name="myEmailform"  class="needs-validation pt-5" novalidate>
                        <div class="form-row d-flex mb-2">
                            <div class="form-group col-md-6 pe-1 ">
                                <input type="text" class="form-control" placeholder="Your Name" name="firstName" id="inputFirstName" >
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Phone Number" name="lastName" id="inputLastName" >
                            </div>
                        </div>
                        <div class="form-row d-flex mb-2">
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
