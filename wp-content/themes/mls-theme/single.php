<?php

/* Template Name: Articles Expanded */ 
get_header();?>
<header style="background:url(<?php echo get_theme_file_uri('./images/article-expanded.png') ?>) no-repeat, repeat; background-size: cover;background-position: center; height: 42rem; background-color: #D8E1E5;">
    <div class="overlay">
            <div class="container">
                <div class="hero-section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 px-0 hero-text">
                                <h1 class="pb-2 fw-600"    data-aos="fade-up" data-aos-duration="1000">The Winning Finance Team By MLS Finance</h1>
                                <div class="pt-3">
                                   <!-- <button class="btn btn-warning">Learn More</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div> <!-- overlay ends here -->
    </header>
    <div class="article-details py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="author-profile text-center">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300" src="<?php echo get_theme_file_uri('./images/author.jpg'); ?>" alt="">
                        <div class="name">
                            <p>Wayne Hedley</p>
                        </div>
                        <div class="position">
                            <p>Senior Broker</p>
                        </div>
                        <div class="socials  d-flex  justify-content-center">
                            <i class="fab fa-facebook me-2"> </i>
                            <i class="fab fa-instagram me-2"> </i>
                            <i class="fab fa-linkedin "> </i>
                        </div>
                        <div class="date">
                            <p>20th April 2021 5:10PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9">
                    <h2>The Winning Finance Team By MLS Finance</h2>
                    <p>Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum L
                     ipsum Loreum Ipsum</p>
                     <p>Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum L
                     ipsum Loreum Ipsum</p>
                     <p>Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum L
                     ipsum Loreum Ipsum</p>
                     <p>Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum Loreum ipsum Loreum Ipsum Loreum ipsum L
                     ipsum Loreum Ipsum</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-9 py-4">
                    <h2>Like this article? Share on</h2>
                    <div class="socials d-flex pt-3">
                        <i class="fab fa-facebook fa-3x me-4"> </i>
                        <i class="fab fa-instagram fa-3x me-4"> </i>
                        <i class="fab fa-linkedin fa-3x"> </i>
                    </div>

                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-9">
                    <h2>Leave a comment</h2>
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
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500" class="fw-600">Get In Touch</h2>
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
                            <input  class="btn btnn mt-1" type="submit" value="Partner Up" style="background-color: #ffffff; color:#000000; border-color:#ffffff;  height:45px">
                        </div>                  
                    </form> 
                    
                </div>
            </div>
            
        </div>
    </div>

<?php get_footer();?>