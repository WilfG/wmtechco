@if(Request::is('/') != '/')
<div class="header_top_menu pt-2 pb-2 bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>example@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-map-marker"></i>24/5, 1st Floor, Kurigram</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+ (1800) 456 7890</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif

<!--==================================================-->
<!----- Start Techno Main Menu Area ----->
<!--==================================================-->
@if(Request::is('/') == '/')
<div id="sticky-header" class="techno_nav_manu transparent_menu white d-md-none d-lg-block d-sm-none d-none">
    <div class="container">
        <div class="row">
            <div class="menu">
                <a href="index.html" class="logo"><img class="down" src="assets/images/logo.png" alt=""> <img class="main_sticky" src="assets/images/logo.png" alt=""></a>
                <ul class="clearfix">
                    <li><a href="/">Home</a>
                        
                    </li>
                    <li><a href="#">Company</a>
                        <ul>
                             <li><a href="case-study.html">Case Study</a></li>
                            <li><a href="case-study-details.html">Case Study Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">Error</a></li>
                        </ul>
                    </li>
                    <li><a href="/service">Service</a> </li>
                    <li><a href="#">It Solution</a>
                        <ul>
                            <li><a href="managed-service.html">Managed IT Service</a></li>
                            <li><a href="it-service.html">IT Service</a></li>
                            <li><a href="industries.html">Industries</a></li>
                            <li><a href="business-solution.html">Business Solution</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="service-details.html">IT Service Details</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <div class="donate-btn-header">
                        <a class="dtbtn" href="#">Get A Quote</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@else
<div id="sticky-header" class="techno_nav_manu white d-md-none d-lg-block d-sm-none d-none">
    <div class="container">
        <div class="row">
            <div class="menu">
                <a href="index.html" class="logo"><img class="down" src="assets/images/logo.png" alt=""> <img class="main_sticky" src="assets/images/logo.png" alt=""></a>
                <ul class="clearfix">
                    <li><a href="/">Home</a>
                        
                    </li>
                    <li><a href="#">Company</a>
                        <ul>
                             <li><a href="case-study.html">Case Study</a></li>
                            <li><a href="case-study-details.html">Case Study Details</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">Error</a></li>
                        </ul>
                    </li>
                    <li><a href="/service">Service</a> </li>
                    <li><a href="#">It Solution</a>
                        <ul>
                            <li><a href="managed-service.html">Managed IT Service</a></li>
                            <li><a href="it-service.html">IT Service</a></li>
                            <li><a href="industries.html">Industries</a></li>
                            <li><a href="business-solution.html">Business Solution</a></li>
                            <li><a href="product-design.html">Product Design</a></li>
                            <li><a href="service-details.html">IT Service Details</a></li>
                        </ul>
                    </li>
                   
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <div class="donate-btn-header">
                        <a class="dtbtn" href="#">Get A Quote</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Techno Mobile Menu Area -->
<div class="mobile-menu-area d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">
        <nav class="techno_menu">
            <ul class="clearfix">
                <li><a href="/">Home</a>
                    
                </li>
                <li><a href="#">Company</a>
                    <ul>
                        <li><a href="about.html">About One</a></li>
                        <li><a href="case-study.html">Case Study</a></li>
                         <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="404.html">Error</a></li>
                    </ul>
                </li>
                <li><a href="#">Service</a>
                    <ul>
                        <li><a href="service-1.html">Service One</a></li>
                        <li><a href="service-2.html">Service Two</a></li>
                        <li><a href="service-3.html">Service Three</a></li>
                        <li><a href="service-4.html">Service Four</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li><a href="#">It Solution</a>
                    <ul>
                        <li><a href="managed-service.html">Managed IT Service</a></li>
                        <li><a href="it-service.html">IT Service</a></li>
                        <li><a href="industries.html">Industries</a></li>
                        <li><a href="business-solution.html">Business Solution</a></li>
                        <li><a href="product-design.html">Product Design</a></li>
                        <li><a href="service-details.html">IT Service Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Element</a>
                    <ul>
                        <li>
                            <ul>
                                <li><a href="service-element.html">Service Box</a></li>
                                <li><a href="info-box-element.html">Info Box</a></li>
                                <li><a href="team-element.html">Teams</a></li>
                                <li><a href="case-study-element.html">Case Study</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="process-element.html">Process</a></li>
                                <li><a href="testimonial-element.html">Testimonials</a></li>
                                <li><a href="pricing-element.html">Pricing</a></li>
                                <li><a href="image-box.html">Images Box</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="counter-element.html">Counters</a></li>
                                <li><a href="call-do-action-element.html">Call Do Action</a></li>
                                <li><a href="brand-element.html">Brands</a></li>
                                <li><a href="accordion.html">Accordion</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="list.html">List</a></li>
                                <li><a href="blog-element.html">Blogs</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/blog">Blog</a>  </li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</div>
<!--==================================================-->
<!----- End Techno Main Menu Area ----->
<!--==================================================-->