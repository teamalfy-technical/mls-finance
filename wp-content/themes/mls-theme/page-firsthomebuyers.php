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
/* Template Name: First-Home */
get_header();?>
    <header style="background:url(<?php echo get_theme_file_uri('./images/firsthomebuyers-bg.png') ?>) no-repeat, repeat; background-size: cover;background-position: center; height: 31rem; background-color: #D8E1E5;">
        <div class="overlay">
            <div class="container">
                <div class="hero-section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 px-0 hero-text">
                                <h1 class="pb-2 "    data-aos="fade-up" data-aos-duration="1000">First Home Buyers</h1>
                                <h3 class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Looking to buy your Dream House?</h3>
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
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
            <div class="col-12 col-md-6">
                <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <h2 class="fw-600">Budgeting & Borrowing</h2>
                    <p>
                        MLS Finance is an award-winning mortgage brokerage committed to understanding our clients’ situations and helping them achieve their financial goals. MLS Finance was established in 2017 to assist clients in a range of areas including home loans, investment loans, vehicle loans, commercial & business lending and SMSF lending. We are growing and expanding fast and are now looking for 
                        can-do, keen to learn individuals to help us grow to the next 
                        If you are still living at home and have never rented before, when considering owning your home for the first time, there are many daily living expenses that are usually missed when doing your first home loan budget.
                    </p>
                    <p>When we work with you, we make sure you have an accurate and detailed budget that takes into account all expenses associated with purchasing a property (including stamp duty, council rates and other fees) and living expenses once you’ve moved in. We can help you identify these additional costs.</p>
                    <p>Ask us for our budget planner if you don’t already have one.</p>
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/b&b-pic.jpg'); ?>" alt="">
            </div>
           </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/bb-2.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">What To Consider Before Buying :</h2>
                        <p>
                            MLS Finance is an award-winning mortgage brokerage committed to understanding our clients’ situations and helping them achieve their financial goals. MLS Finance was established in 2017 to assist clients in a range of areas including home loans, investment loans, vehicle loans, commercial & business lending and SMSF lending. We are growing and expanding fast and are now looking for 
                            can-do, keen to learn individuals to help us grow to the next 
                            If you are still living at home and have never rented before, when considering owning your home for the first time, there are many daily living expenses that are usually missed when doing your first home loan budget.
                        </p>
                        <p>When we work with you, we make sure you have an accurate and detailed budget that takes into account all expenses associated with purchasing a property (including stamp duty, council rates and other fees) and living expenses once you’ve moved in. We can help you identify these additional costs.</p>
                        <p>Ask us for our budget planner if you don’t already have one.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="location py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Location Is Important</h2>
                        <p>
                            A property in an attractive street in a popular suburb with easy access to transport, shops and schools is always a good investment. Consider the aspect of the property. North facing kitchens and outdoor areas are most popular. Does the property have a nice outlook? Is it appealing from the street? Does it have lots of natural light? Take into account whether it will be easy to sell if and when your needs change.
                        </p>
                        <p>
                        Inspect the property at different times of the day to get an idea of how different factors, such as morning sun or peak hour traffic, affect its appeal. You should also think about how the property can grow with your lifestyle. By having a clear objective, these questions will be easier to answer.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/bb-map.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/research.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Research Your Area</h2>
                        <p>
                            Ensure you go to many property open inspections and do your research on the internet before making an offer to ensure you have a good indication on property prices in your desired location. If you find that you cannot afford to buy your dream home in your desired location consider adjacent suburbs that may be more affordable.
                        </p>
                        
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
            <div class="col-12 col-md-6">
                <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <h2 class="fw-600">Account For All Costs After Purchase</h2>
                    <p>
                        MLS Finance is an award-winning mortgage brokerage committed to understanding our clients’ situations and helping them achieve their financial goals. MLS Finance was established in 2017 to assist clients in a range of areas including home loans, investment loans, vehicle loans, commercial & business lending and SMSF lending. We are growing and expanding fast and are now looking for 
                        can-do, keen to learn individuals to help us grow to the next 
                        If you are still living at home and have never rented before, when considering owning your home for the first time, there are many daily living expenses that are usually missed when doing your first home loan budget.
                    </p>
                    <p>When we work with you, we make sure you have an accurate and detailed budget that takes into account all expenses associated with purchasing a property (including stamp duty, council rates and other fees) and living expenses once you’ve moved in. We can help you identify these additional costs.</p>
                    <p>Ask us for our budget planner if you don’t already have one.</p>
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/b&b-pic.jpg'); ?>" alt="">
            </div>
           </div>
        </div>
    </div>

    <div class="location py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/bb-map.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Don’t Stretch Yourself To Your Limit</h2>
                        <p>
                            A property in an attractive street in a popular suburb with easy access to transport, shops and schools is always a good investment. Consider the aspect of the property. North facing kitchens and outdoor areas are most popular. Does the property have a nice outlook? Is it appealing from the street? Does it have lots of natural light? Take into account whether it will be easy to sell if and when your needs change.
                        </p>
                        <p>
                        Inspect the property at different times of the day to get an idea of how different factors, such as morning sun or peak hour traffic, affect its appeal. You should also think about how the property can grow with your lifestyle. By having a clear objective, these questions will be easier to answer.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
            <div class="col-12 col-md-6">
                <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <h2 class="fw-600">Consider Your Options</h2>
                    <p>
                        MLS Finance is an award-winning mortgage brokerage committed to understanding our clients’ situations and helping them achieve their financial goals. MLS Finance was established in 2017 to assist clients in a range of areas including home loans, investment loans, vehicle loans, commercial & business lending and SMSF lending. We are growing and expanding fast and are now looking for 
                        can-do, keen to learn individuals to help us grow to the next 
                        If you are still living at home and have never rented before, when considering owning your home for the first time, there are many daily living expenses that are usually missed when doing your first home loan budget.
                    </p>
                    <p>When we work with you, we make sure you have an accurate and detailed budget that takes into account all expenses associated with purchasing a property (including stamp duty, council rates and other fees) and living expenses once you’ve moved in. We can help you identify these additional costs.</p>
                    <p>Ask us for our budget planner if you don’t already have one.</p>
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/b&b-pic.jpg'); ?>" alt="">
            </div>
           </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/bb-2.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Don’t Be Afraid To Ask For Help</h2>
                        <p>
                            MLS Finance is an award-winning mortgage brokerage committed to understanding our clients’ situations and helping them achieve their financial goals. MLS Finance was established in 2017 to assist clients in a range of areas including home loans, investment loans, vehicle loans, commercial & business lending and SMSF lending. We are growing and expanding fast and are now looking for 
                            can-do, keen to learn individuals to help us grow to the next 
                            If you are still living at home and have never rented before, when considering owning your home for the first time, there are many daily living expenses that are usually missed when doing your first home loan budget.
                        </p>
                        <p>When we work with you, we make sure you have an accurate and detailed budget that takes into account all expenses associated with purchasing a property (including stamp duty, council rates and other fees) and living expenses once you’ve moved in. We can help you identify these additional costs.</p>
                        <p>Ask us for our budget planner if you don’t already have one.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="location py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Be Careful Who You Listen To</h2>
                        <p>
                            A property in an attractive street in a popular suburb with easy access to transport, shops and schools is always a good investment. Consider the aspect of the property. North facing kitchens and outdoor areas are most popular. Does the property have a nice outlook? Is it appealing from the street? Does it have lots of natural light? Take into account whether it will be easy to sell if and when your needs change.
                        </p>
                        <p>
                        Inspect the property at different times of the day to get an idea of how different factors, such as morning sun or peak hour traffic, affect its appeal. You should also think about how the property can grow with your lifestyle. By having a clear objective, these questions will be easier to answer.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/bb-map.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/research.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Get Excited!</h2>
                        <p>
                            Ensure you go to many property open inspections and do your research on the internet before making an offer to ensure you have a good indication on property prices in your desired location. If you find that you cannot afford to buy your dream home in your desired location consider adjacent suburbs that may be more affordable.
                        </p>
                        
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
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

<?php get_footer();?>