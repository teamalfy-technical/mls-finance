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
/* Template Name: Finance vehicle */
get_header();?>
    <header class="finance-vehicle" style="background:url(<?php echo get_theme_file_uri('./images/finance-vehiclebg.jpg') ?>) no-repeat, repeat; background-size: cover;background-position: center; height: 31rem; background-color: #D8E1E5;">
        <div class="overlay">
            <div class="container">
                <div class="hero-section ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 px-0 hero-text">
                                <h1 class="pb-2" data-aos="fade-up" data-aos-duration="1000">Finance For Vehicles & Equipments</h1>
                                <p class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">MLS Finance can arrange finance for consumer and commercial car loans, vehicle, equipment and asset finance and leases. We can assist you to finance your plant and equipment upgrades with a range of loan options that can be easily designed to suit your cash flow.</p>
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
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
            <div class="col-12 col-md-6">
                <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                    <h2 class="fw-600">Consumer Car Loans</h2>
                    <p>A car loan is suitable when the vehicle is used wholly or predominantly for private purposes. This means that the vehicle is used privately for more than 50% of the time. The motor vehicle is the only security needed, although in some circumstances a guarantee may also be required.</p>
                    <p>The loan term and balloon payment can be tailored to suit individual circumstances..</p>
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/consumer-car.jpg'); ?>" alt="">
            </div>
           </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/vehicle-loans.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Vehicle Loans & Leases</h2>
                        <p>
                            MLS Finance can arrange finance for cars, boats, motorbikes, jet skis and other registerable items. The most common form of financing is through a secured loan. The asset purchased is used by the lender as security for the loan often allowing a lower interest rate in return.
                        </p>
                        <p>
                            Leasing, hire purchase and chattel mortgage loans are available for vehicles used for at least 50% of business needs.</p>
                        <p>At MLS we make sure the client application meets all lending criteria to provide the best chance of securing approval</p>
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
                        <h2 class="fw-600">Asset Lease</h2>
                        <p>
                            An asset lease enables you to have the use of your business equipment and the benefits of ownership while a lender retains actual ownership of the equipment. The lender purchases the equipment on your behalf and you then pay the lender a fixed monthly lease rental for the term of the lease.
                        </p>
                        <p>At the end of the lease, you have the option to either pay a residual on the lease and take ownership of the equipment, sell the equipment or re-finance the residual and continue the lease.</p>
                        <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/asset-lease.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="budget-borrowing py-5">
        <div class="container">
           <div class="row">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/chattel-mortgage.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Chattel Mortgage</h2>
                        <p>
                        A chattel mortgage is an ideal way for individual business customers to maximise the taxation benefits gained from financing new plant & equipment. It is designed for those sole traders and partnerships who account for their business operations on a cash basis and can be used for purchasing new equipment or upgrading existing equipment.
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
                    <h2 class="fw-600">Hire Purchase</h2>
                    <p>
                        Commercial hire purchase agreements are typically used by individual business customers who wish to place a deposit into their finance contract or nominate the value of the balloon (final instalment) on their contract. This type of contract offers maximum flexibility to set the monthly repayment amount to suit individual circumstances.
                    </p>
                    
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/high-purchase1.jpg'); ?>" alt="">
            </div>
           </div>
        </div>
    </div>

    <div class="location py-5">
        <div class="container">
            <div class="row eqipment-hire">
                <div class="col-12 col-md-6">
                    <img src="<?php echo get_theme_file_uri('./images/equipment-hire.jpg'); ?>" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="future-colleaques-text ps-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500">
                        <h2 class="fw-600">Equipment Hire</h2>
                        <p>Whether you need to increase production capacity or update old equipment there comes a time in every business when an investment in plant and equipment is a must. The question is how to manage the purchase of expensive business equipment without tying up precious cash resources. Equipment financing is the solution!</p>
                        <p>There are many benefits to renting or leasing your plant and equipment including:</p>
                        <p>Fixed monthly costs help you budget and manage your cash flow</p>
                        <p>Payments are tax deductible</p>
                        <p>Leased equipment does not appear on your statement of financial position (balance sheet)</p>
                        <p>Contract terms are negotiable so we can arrange a deal that meets your financial needs</p>
                        <p>Whatever industry you are in and regardless of whether your business is large or small our equipment finance team can help with all types of operating leases and equipment rental.</p>
                        <p>We take the time to understand your business and asset strategy so we can structure finance according to your objectives. This gives you the flexibility to grow without excessive strain on the lifeblood of your business – your cash</p>
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
                    <h2 class="fw-600">Hire Purchase</h2>
                    <p>A novated lease is a three-way agreement between the employer, employee and the lender. The employer, employee and financier sign a novation agreement whereby the employer agrees to take on the employee’s obligations under the lease. Under this arrangement, the employer makes the monthly lease payments on behalf of the employee.</p>
                    <p>
                    Should the employee leave his or her employment for any reason, the novation agreement ceases and the obligations assumed by the employer revert to the employee as the registration is in the employee’s name.</p>
                    <p>The choice of the vehicle remains with the employee ensuring a vehicle fully meet their needs.</p>
                    <p>The employer deducts a portion of the vehicle financing and running costs from the employee’s pre-tax income reducing the employee’s taxable income and the amount of tax payable. There is no need for the employee to do anything on their tax returns as the employer and lender attend to this.</p>
                    <p>If a vehicle is purchased using another form of finance, 100% of the costs will be taken from after-tax income providing no tax benefit at all. With the option of a fully maintained lease, vehicle running costs such as maintenance, registration, insurance costs and projected fuel can also be included in regular salary deductions.</p>
                    <p>MLS can also assist with finding the right vehicle as well as offering fleet discounts on the purchase price and running costs.</p>
                    <button   button class="btn btn-warning mb-3 "><a class="round me-2" href=""></a>Learn more</button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_theme_file_uri('./images/high-purchase2.jpg'); ?>" alt="">
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