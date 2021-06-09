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
/* Template Name: About */
get_header();?>
    <header style="background:url(<?php echo get_theme_file_uri('./images/about-bg.svg') ?>) no-repeat, repeat; background-size: cover;background-position: center; height: 31rem; background-color: #D8E1E5;">
        <div class="overlay">
            <div class="container">
                <div class="hero-section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 px-0 hero-text">
                                <h1 class="pb-2 fw-600"    data-aos="fade-up" data-aos-duration="1000">Our Story</h1>
                                <h6 class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">We are in existence because our founder and Director, Sze Chuah has had a passion for property investment for many years and saw the huge impact that it had in his own life. Given finance was always the biggest challenge in investing, Sze wanted to create a business that would truly understand and cater to investors like himself.</h6>
                                <div class="pt-3">
                                   <button class="btn btn-warning">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div> <!-- overlay ends here -->
    </header>

    <div class=" py-5 ">
        <div class="text-center pt-2">
            <h2 class="fw-600">The MLS Mission</h2>
        </div>
        <div class="container">
           <div class="py-3">
                <p>Our mission is to help our clients own property and grow their wealth by providing outstanding customer service to them. We use our experience, contacts and expert 
                knowledge to help shape clients’ portfolios and help them achieve their goals.</p>
                <p>We have developed close working relationships with a range of lenders, from the major banks through to niche funders and worked closely with other market specialists 
                like accountants, buyer’s agents and more to build the best financial solutions for you. We are here to make a difference in our clients lives and we are determined to help 
                client’s grow their wealth to be able to own their home, investments and to have the ability to retire in comfort.</p>
           </div>
            <div class="row">
                <div class="col-12 col-md-4 section1-left">
                    <div class=" d-flex align-item-baseline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="icon section1-icon text-center me-3">
                            <i style="color:#696871; background-color: rgba(55, 62, 54, 0.097195);" class="fa fa-home  "></i>
                        </div>
                        <div class="residential-lending"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Growing Brand</h5>
                            <p>WWe have a successful and rapidly growing brand</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class=" d-flex align-item-baseline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="icon section1-icon text-center me-3">
                            <i style="color:#696871; background-color: rgba(55, 62, 54, 0.097195);" class="fa fa-home  "></i>
                        </div>
                        <div class="residential-lending"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Great Team Culture</h5>
                            <p>We have a high performing and supportive environment 
                            with a great team culture</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class=" d-flex align-item-baseline" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="icon section1-icon text-center me-3">
                            <i style="color:#696871; background-color: rgba(55, 62, 54, 0.097195);" class="fa fa-home  "></i>
                        </div>
                        <div class="residential-lending"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <h5 class="fw-600">Property Groups  </h5>
                            <p>We work closely with one of Australia’s most 
                            respected property groups</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-2">
               <button class="btn btn-warning">Learn More</button>
            </div>
        </div>
    </div>  
    <div class="whatIsMls py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="section2-text" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">MLS is here to help</h2>
                        <p>Experience the MLS broker difference, we take out the legwork and we will fit into your schedule</p>
                       <div class="d-flex flex-column">
                            <button class="btn btn-appointment mb-3 "><a class="round me-2" href=""><i class="far fa-calendar-alt "></i></a>Book Appointment</button>
                            <button class="btn btn-call"><a class="round me-2" href=""><i class="fas fa-phone"></i></a>Give us a call today</button>
                       </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mx-0">
                   <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200"  src="<?php echo get_theme_file_uri('./images/whatismls.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="how-can-help py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="pt-5">
                        <h2>How Can We Help?</h2>
                        <p>Anyone looking to purchase their first home, refinance, extract equity, grow an investment property portfolio, needing commercial/business loans, or even anyone needing guidance with how to most effectively utilise a SMSF.</p>
                        <div class="pt-2">
                           <button class="btn btn-warning">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/help.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="value py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="<?php echo get_theme_file_uri('./images/family.png'); ?>" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <h2 class="pt-5 fw-600">What Value Can We Provide You?</h2>
                    <div class="pillar-list">
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="education px-5">
                                <h6 class=""><a href="">PROPERTY INVESTMENT</a></h6>
                            </div>
                            <div class="expertise px-3">
                                <h6 class=""><a href="">REFINANCING</a></h6>
                            </div>
                            <div class="good-listener px-3">
                                <h6 class=""><a href="">FIRST HOME PURCHASE</a></h6>
                            </div>
                            <div class="transparent px-3">
                                <h6 class=""><a href="">BUSINESS LOANS</a></h6>
                            </div>
                        </div>
                        <div class="rectangle d-flex flex-column flex-md-row align-items-center mt-5 px-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                            <div class="relationship px-3">
                                <h6 class=""><a href="">Relationship</a></h6>
                            </div>
                        </div>
                        <p class="fw-600 pt-5 pb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">At MLS Finance. we teach you throughout the process so that once settled, you leave 
                        more educated. That means you come away from a phone call or meeting feeling 
                        like you know more thaj you did going in ....</p>
                        <button type="button" class="btn btn-warning">Learn More</button>


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

</div>  

<div class="contact-us py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" src="<?php echo get_theme_file_uri('./images/contact-img.svg'); ?>" alt="">
            </div>
            <div class="col-12 col-md-7">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="fw-600">Let’s Work Together</h2>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>

                    <div class="d-flex justify-content-end">
                        <input  class="btn btnn mt-1" type="submit" value="Send Message" style="background-color: #ffffff; color:#000000; border-color:#ffffff;  height:45px">
                    </div>                  
                </form> 
                <div class="pt-5 ">
                    <p class="fw-600">
                    Yes! I know your keen to jump at these offerrs and work with the MLS Team. 
                    And guess what?

                    We’re keen to have you on-board as well – so get in touch send us your resume 
                    and cv and we’ll have a chat soon.

                    Good Luck!</p>
                </div>
            </div>
        </div>
           
    </div>
</div>

<?php get_footer();?>