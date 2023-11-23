<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.__parts.metas')

    <title>WEDO APP</title>

    @include('layouts.__parts.fonts_links')

    @include('layouts.__parts.css_files')

</head>

<body>

    <!-- Main -->
    <main class="main-page homepage">
        <!-- Header Bar -->

        @include('layouts.__sections.topBar')

        <!-- Header -->
        @include('layouts.__sections.header')

        <!-- Hero Section -->
        <section class="hero-empowerment-area">
            <div class="custom-container">
                <div class="custom-row align-items-center">
                    <div class="hero-empowerment-left-content">
                        <h5 class="section-subtitle">EMPOWERMENT</h5>
                        <h1 class="section-title fade-in">Seamless IT for your business, boosting your growth.</h1>
                        <p>We provide the expertise and support to propel your
                            business forward in the digital landscape.</p>
                        <div class="btns-group d-flex">
                            <a href="#" class="theme-btn">Learn More</a>
                            <a href="contact.html" class="theme-btn2">Let's Talk
                                <i class="iconoir-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="hero-empowerment-right-content">
                        <div class="top-content">
                            <img class="desktop fade-in" src="./assets/imgs/bg1-1.png" alt="Empowerment" />
                            <img class="mobile" src="./assets/imgs/bg1.png" alt="Empowerment" />

                            <div class="experience-box simple-shadow bounce-in">
                                <div class="experience-body d-flex align-items-center">
                                    <img src="./assets/imgs/icon1.svg" alt="Icon" />

                                    <div class="experience-content d-flex align-items-center">
                                        <h1>+8</h1>
                                        <p>
                                            Years
                                            <span>Experience</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-content d-flex">
                            <a href="./team.html" class="our-expert-team-box simple-shadow bounce-in delay-2">
                                <div class="our-expert-team-box-inner d-flex align-items-center">
                                    <div class="imgs imgs1 d-flex align-items-center">
                                        <img src="./assets/imgs/small-img-4.png" alt="team" />
                                        <img src="./assets/imgs/small-img-3.png" alt="team" />
                                        <img src="./assets/imgs/small-img-2.png" alt="team" />
                                        <img src="./assets/imgs/small-img-1.png" alt="team" />
                                    </div>
                                    <p>
                                        Meet
                                        <span>Our Experts</span>
                                    </p>
                                </div>
                            </a>

                            <div class="google-reviews-box simple-shadow bounce-in delay-3">
                                <div class="left">
                                    <span>Verified by</span>
                                    <img src="./assets/imgs/icon2.svg" alt="Google" />
                                </div>
                                <div class="right">
                                    <div class="stars d-flex align-items-center">
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                        <i class="las la-star"></i>
                                    </div>
                                    <p>
                                        3245
                                        <span>Reviews</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <!-- Client Section -->
        <section class="client-area">
            <div class="clients clients-marquee d-flex align-items-center">
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo1.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo2.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo3.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo4.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo5.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo2.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo3.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo4.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo5.svg" alt="Client" />
                </div>
                <div class="client-logo simple-shadow">
                    <img src="./assets/imgs/client-logo2.svg" alt="Client" />
                </div>
                <div class="client-logo" style="min-width: 0;"></div>
            </div>
        </section>


        <!-- How We Do -->
        <section class="how-we-do-area">
            <div class="custom-container">
                <div class="custom-row">
                    <img src="./assets/imgs/bg-shape-1.svg" alt="Shape"
                        class="animation-slide-left how-we-do-bg" />
                    <div class="how-we-do-left-content">
                        <div class="top">
                            <h5 class="section-subtitle">Our Model</h5>
                            <h1 class="section-title">How we do</h1>
                            <p>Save time and money with our powerful method.</p>
                        </div>
                        <a href="how-we-do.html" class="theme-btn">
                            Learn More
                            <i class="iconoir-arrow-up-right"></i>
                        </a>
                    </div>
                    <div class="how-we-do-right-content">
                        <div class="how-we-do-items d-flex align-items-center justify-content-center">

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-1.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Brainstroming</h4>
                                    <p>Ideas</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-2.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Product</h4>
                                    <p>Design</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-3.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Front-End</h4>
                                    <p>Development</p>
                                </div>
                            </div>

                        </div>

                        <div class="how-we-do-items d-flex align-items-center justify-content-center">
                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-4.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>SEO</h4>
                                    <p>Optimization</p>
                                </div>
                            </div>

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-5.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Back-End</h4>
                                    <p>Development</p>
                                </div>
                            </div>
                        </div>

                        <div class="how-we-do-items d-flex align-items-center justify-content-center">

                            <div class="how-we-do-card">
                                <div class="circle-shape"></div>
                                <div class="line-shape"></div>

                                <div class="how-we-do-icon">
                                    <img src="./assets/imgs/hwd-icon-6.svg" alt="How we do" />
                                </div>
                                <div class="how-we-do-content">
                                    <h4>Digital</h4>
                                    <p>Marketing</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Service Area -->
        <section class="service-area">
            <div class="custom-container">
                <div class="service-section-header section-header d-flex align-items-end justify-content-between">
                    <div class="left">
                        <h5 class="section-subtitle">WHAT WE’RE OFFERING</h5>
                        <h1 class="section-title">Dealing in all professional <br>IT services.</h1>
                    </div>
                    <p>One fundamental aspect of IT services is infrastructure management. This involves the design,
                        implementation, and maintenance of the hardware, software, networks, and servers.</p>
                </div>

                <div class="services-list d-flex">
                    <div class="service-card simple-shadow">
                        <img src="./assets/imgs/service-icon-1.svg" alt="Service Icon" class="service-icon" />
                        <h3><a href="./service-details.html">Development</a></h3>
                        <p>Our development is pixel perfect in all ways.</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <img src="./assets/imgs/service-icon-2.svg" alt="Service Icon" class="service-icon" />
                        <h3><a href="./service-details.html">Woo Commerce</a></h3>
                        <p>We have a best team for your shopping websites.</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <img src="./assets/imgs/service-icon-3.svg" alt="Service Icon" class="service-icon" />
                        <h3><a href="./service-details.html">CRM Solutions</a></h3>
                        <p>We enhance customer experiences for success.</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <img src="./assets/imgs/service-icon-4.svg" alt="Service Icon" class="service-icon" />
                        <h3><a href="./service-details.html">Web Design</a></h3>
                        <p>We create vibrant, intuitive and minimalist web</p>
                    </div>
                    <div class="service-card simple-shadow">
                        <span class="service-badge">Free!</span>
                        <img src="./assets/imgs/service-icon-5.svg" alt="Service Icon" class="service-icon" />
                        <h3><a href="./service-details.html">IT Support</a></h3>
                        <p>We offers expert assistance for your IT issues.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Case Studio -->
        <section class="case-studio-area">
            <div class="custom-container">
                <div class="case-studio-header text-center">
                    <h5 class="section-subtitle">CASE STUDIES</h5>
                    <h1 class="section-title">Detailing of our products</h1>
                </div>


                <div class="case-studio">

                    <ul class="nav nav-pills case-studio-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="development-tab" data-bs-toggle="tab"
                                href="#development" role="tab" aria-controls="development"
                                aria-selected="true">Development</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="woo_commerce-tab" data-bs-toggle="tab" href="#woo_commerce"
                                role="tab" aria-controls="woo_commerce" aria-selected="false">Woo
                                Commerce</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="crm_solutions-tab" data-bs-toggle="tab"
                                href="#crm_solutions" role="tab" aria-controls="crm_solutions"
                                aria-selected="false">CRM Solutions</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="web_designing-tab" data-bs-toggle="tab"
                                href="#web_designing" role="tab" aria-controls="web_designing"
                                aria-selected="false">Web Designing</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="it_support-tab" data-bs-toggle="tab" href="#it_support"
                                role="tab" aria-controls="it_support" aria-selected="false">IT Support</button>
                        </li>
                    </ul>
                    <div class="tab-content case-studio-tab-content">
                        <div class="tab-pane fade show active" id="development" role="tabpanel"
                            aria-labelledby="development-tab">
                            <div class="case-studio-body d-flex">
                                <div class="left d-flex flex-1">
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Web Development</a>
                                        <img src="./assets/imgs/case-studio-1-1.jpg" alt="Case Studio" />
                                    </div>
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Mobile Development</a>
                                        <img src="./assets/imgs/case-studio-2-2.jpg" alt="Case Studio" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="case-studio-contents service-card card-h">
                                        <img src="./assets/imgs/service-icon-1.svg" alt="ICON" />
                                        <h3>Development</h3>
                                        <p>Software development is a dynamic and rapidly evolving field that plays a
                                            pivotal role in shaping the digital landscape we live in today. It
                                            encompasses the processes, methodologies, and practices used to design,
                                            create, deploy, and maintain software applications and systems.</p>
                                        <a href="#" class="theme-btn">
                                            <i class="iconoir-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="woo_commerce" role="tabpanel"
                            aria-labelledby="woo_commerce-tab">
                            <div class="case-studio-body d-flex">
                                <div class="left d-flex flex-1">
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">electro.</a>
                                        <img src="./assets/imgs/case-studio-3.jpg" alt="Case Studio" />
                                    </div>
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Visit Site Now</a>
                                        <img src="./assets/imgs/case-studio-4.jpg" alt="Case Studio" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="case-studio-contents service-card card-h">
                                        <img src="./assets/imgs/service-icon-2.svg" alt="ICON" />
                                        <h3>Woo Commerce</h3>
                                        <p>Software development is a dynamic and rapidly evolving field that plays a
                                            pivotal role in shaping the digital landscape we live in today. It
                                            encompasses the processes, methodologies, and practices used to design,
                                            create, deploy, and maintain software applications and systems.</p>
                                        <a href="#" class="theme-btn">
                                            <i class="iconoir-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="crm_solutions" role="tabpanel"
                            aria-labelledby="crm_solutions-tab">
                            <div class="case-studio-body d-flex">
                                <div class="left d-flex flex-1">
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">CRM Solutions</a>
                                        <img src="./assets/imgs/case-studio-5.jpg" alt="Case Studio" />
                                    </div>
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Mobile Development</a>
                                        <img src="./assets/imgs/case-studio-6.jpg" alt="Case Studio" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="case-studio-contents service-card card-h">
                                        <img src="./assets/imgs/service-icon-3.svg" alt="ICON" />
                                        <h3>CRM Solutions</h3>
                                        <p>Software development is a dynamic and rapidly evolving field that plays a
                                            pivotal role in shaping the digital landscape we live in today. It
                                            encompasses the processes, methodologies, and practices used to design,
                                            create, deploy, and maintain software applications and systems.</p>
                                        <a href="#" class="theme-btn">
                                            <i class="iconoir-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="web_designing" role="tabpanel"
                            aria-labelledby="web_designing-tab">
                            <div class="case-studio-body d-flex">
                                <div class="left d-flex flex-1">
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Web Designing</a>
                                        <img src="./assets/imgs/case-studio-7.jpg" alt="Case Studio" />
                                    </div>
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Mobile Development</a>
                                        <img src="./assets/imgs/case-studio-8.jpg" alt="Case Studio" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="case-studio-contents service-card card-h">
                                        <img src="./assets/imgs/service-icon-4.svg" alt="ICON" />
                                        <h3>Web Designing</h3>
                                        <p>Software development is a dynamic and rapidly evolving field that plays a
                                            pivotal role in shaping the digital landscape we live in today. It
                                            encompasses the processes, methodologies, and practices used to design,
                                            create, deploy, and maintain software applications and systems.</p>
                                        <a href="#" class="theme-btn">
                                            <i class="iconoir-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="it_support" role="tabpanel" aria-labelledby="it_support-tab">
                            <div class="case-studio-body d-flex">
                                <div class="left d-flex flex-1">
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">IT Support</a>
                                        <img src="./assets/imgs/case-studio-9.jpg" alt="Case Studio" />
                                    </div>
                                    <div class="case-studio-img-card simple-shadow">
                                        <a href="#" class="case-studio-cat">Mobile Development</a>
                                        <img src="./assets/imgs/case-studio-10.jpg" alt="Case Studio" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="case-studio-contents service-card card-h">
                                        <img src="./assets/imgs/service-icon-5.svg" alt="ICON" />
                                        <h3>IT Support</h3>
                                        <p>Software development is a dynamic and rapidly evolving field that plays a
                                            pivotal role in shaping the digital landscape we live in today. It
                                            encompasses the processes, methodologies, and practices used to design,
                                            create, deploy, and maintain software applications and systems.</p>
                                        <a href="#" class="theme-btn">
                                            <i class="iconoir-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-area">
            <div class="custom-container">
                <div class="custom-row justify-content-between align-items-center">
                    <div class="left-content">
                        <h5 class="section-subtitle">CONSULTING EXCELLENCE</h5>
                        <h1 class="section-title">Best pathway to our clients.</h1>
                        <p>Our consulting process begins with a
                            thorough assessment of your current IT
                            infrastructure, workflows, and pain points.</p>
                        <ul>
                            <li>
                                <i class="icon-check las la-check"></i> 24/7 Full Service Support
                            </li>
                            <li>
                                <i class="icon-check las la-check"></i> Immediate Response
                            </li>
                            <li>
                                <i class="icon-check las la-check"></i> Easy to Approach us
                            </li>
                        </ul>
                    </div>

                    <div class="right-content">
                        <div class="about-timeline">

                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="./assets/imgs/bg-shape-2.svg" alt="Shape" class="line-shape" />
                                    <span class="number">01</span>
                                    <h3>Discovery and Analysis</h3>
                                    <p>Perform a analysis of the client's existing IT systems.</p>
                                </div>
                            </div>
                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="./assets/imgs/bg-shape-2.svg" alt="Shape" class="line-shape" />
                                    <span class="number">02</span>
                                    <h3>Tailored Solutions</h3>
                                    <p>Develop IT solutions based on the analysis phase.</p>
                                </div>
                            </div>
                            <div class="about-timeline-item">
                                <div class="about-timeline-item-inner">
                                    <img src="./assets/imgs/bg-shape-2.svg" alt="Shape" class="line-shape" />
                                    <span class="number">03</span>
                                    <h3>Deployment and Support</h3>
                                    <p>Regularly communicate with our client to any concern.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Testimonial Section -->
        <section class="testimonial-area">
            <div class="custom-container">

                <div class="testimonial-slider-wrap">
                    <div class="testimonial-slider swiper">

                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonial-item">
                                <div class="testimonial-item-body">
                                    <img class="animation-slide-right bg-shape" src="./assets/imgs/bg-shape-3.svg"
                                        alt="Shape" />
                                    <span class="platform-name">
                                        <img src="./assets/imgs/icon-linkedin.svg" alt="Icon" />
                                    </span>
                                    <h1>Platform helped me to increase my sales and revenue
                                        generated by bluebase technologies</h1>
                                    <p>One aspect that sets IT Services apart is their proactive approach to security.
                                        In today's digital landscape, protecting our sensitive data is of utmost
                                        importance.</p>
                                    <div class="author-box d-flex align-items-center">
                                        <img src="./assets/imgs/testimonial-1.jpg" alt="Testimonial" />
                                        <div class="author-box-content">
                                            <h4>Serana Belluci</h4>
                                            <p>Product Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide testimonial-item">
                                <div class="testimonial-item-body">
                                    <img class="bg-shape" src="./assets/imgs/bg-shape-3.svg" alt="Shape" />
                                    <span class="platform-name">
                                        <img src="./assets/imgs/icon-linkedin.svg" alt="Icon" />
                                    </span>
                                    <h1>Bluebase give the best service and top customer
                                        support. Really like to have more projects with you</h1>
                                    <p>One aspect that sets IT Services apart is their proactive approach to security.
                                        In today's digital landscape, protecting our sensitive data is of utmost
                                        importance.</p>
                                    <div class="author-box d-flex align-items-center">
                                        <img src="./assets/imgs/testimonial-2.jpeg" alt="Testimonial" />
                                        <div class="author-box-content">
                                            <h4>Megan Clarke</h4>
                                            <p>CEO, Sanlab</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide testimonial-item">
                                <div class="testimonial-item-body">
                                    <img class="bg-shape" src="./assets/imgs/bg-shape-3.svg" alt="Shape" />
                                    <span class="platform-name">
                                        <img src="./assets/imgs/icon-linkedin.svg" alt="Icon" />
                                    </span>
                                    <h1>We’ve been using bluebase for a few years, It is very
                                        simple and easy to approach team and management</h1>
                                    <p>One aspect that sets IT Services apart is their proactive approach to security.
                                        In today's digital landscape, protecting our sensitive data is of utmost
                                        importance.</p>
                                    <div class="author-box d-flex align-items-center">
                                        <img src="./assets/imgs/testimonial-3.jpeg" alt="Testimonial" />
                                        <div class="author-box-content">
                                            <h4>Rachel Olsem</h4>
                                            <p>Full Stack Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- navigation buttons -->
                    <div class="swiper-button-prev"><i class="iconoir-arrow-left"></i></div>
                    <div class="swiper-button-next"><i class="iconoir-arrow-right"></i></div>
                </div>

            </div>
        </section>


        <!-- Project Section -->
        <section class="project-area">
            <div class="custom-container">
                <div class="custom-row justify-content-between">
                    <div class="project-left-details">
                        <h5 class="section-subtitle">PROJECTS</h5>
                        <h1 class="section-title">Showcase of
                            our recognized
                            work</h1>
                        <p>Our collaborative approach ensures that we truly understand our clients unique requirements
                            and challenges.</p>
                        <ul>
                            <li>
                                <i class="las la-check"></i> Managed Services and Products
                            </li>
                            <li>
                                <i class="las la-check"></i> Flexibility and Adaptability
                            </li>
                            <li>
                                <i class="las la-check"></i> Competitive Advantage
                            </li>
                        </ul>
                    </div>

                    <div class="project-right-slider">
                        <div class="project-right-slider-inner">

                            <div class="swiper project-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">E-commerce <br>
                                                    platform <br>
                                                    development.</a></h2>
                                            <img src="./assets/imgs/project-1.png" alt="Project" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">Software as a <br>
                                                    Service <br>
                                                    integration</a></h2>
                                            <img src="./assets/imgs/project-2.png" alt="Project" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">Mobile <br>
                                                    Platform <br>
                                                    Development</a></h2>
                                            <img src="./assets/imgs/project-3.png" alt="Project" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">
                                                    Enter into a <br>
                                                    Virtual Reality <br>
                                                    World.</a></h2>
                                            <img src="./assets/imgs/project-4.png" alt="Project" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">
                                                    Custom CRM <br>
                                                    system for a <br>
                                                    sales team.</a></h2>
                                            <img src="./assets/imgs/project-5-new.png" alt="Project" />
                                        </div>
                                    </div>
                                    <div class="swiper-slide project-item">
                                        <div class="project-item-inner">
                                            <h2><a href="portfolio-details.html">
                                                    Wrist App<br>
                                                    For Your <br>
                                                    Productivity.</a></h2>
                                            <img src="./assets/imgs/project-6-new.png" alt="Project" />
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- News Section -->
        <section class="news-area">
            <div class="custom-container">
                <div class="section-header d-flex align-items-end justify-content-between">
                    <div class="left">
                        <h5 class="section-subtitle">INTERESTING ARTICLES</h5>
                        <h1 class="section-title">Read daily news about <br>
                            startup companies</h1>
                    </div>
                    <p>In today's rapidly evolving world, technology is constantly shaping the way we live and interact.
                        From artificial intelligence and automation to virtual reality, the pace of technological
                        advancements is staggering.</p>
                </div>

                <div class="sticky-news d-flex card-h">
                    <div class="news-img-box">
                        <img src="./assets/imgs/news-1.jpg" alt="News" />
                    </div>
                    <div class="news-content">
                        <h5 class="section-subtitle section-subtitle1">MOBILE DEVELOPMENT</h5>
                        <h1 class="section-title">
                            <a href="blog-details.html">OpenAI launches new alignment division to tackle risks of
                                superintelligent AI</a>
                        </h1>
                        <p>Small UK merchants, businesses, and other enterprises can now use Tap to Pay on service to
                            replace payment terminals at point of sale.</p>
                        <ul>
                            <li>
                                <i class="las la-check"></i> Collaboration Tools
                            </li>
                            <li>
                                <i class="las la-check"></i> Smart Reminders
                            </li>
                        </ul>
                        <a href="blog-details.html" class="theme-btn">
                            <i class="iconoir-arrow-up-right"></i>
                        </a>
                    </div>
                </div>

                <div class="news-items d-flex align-items-start">

                    <div class="news-item card-h">
                        <div class="news-img-box">
                            <img src="./assets/imgs/news-2.jpg" alt="News" />
                        </div>
                        <div class="news-item-body">
                            <h5 class="section-subtitle">WEB DEVELOPMENT</h5>
                            <h1 class="section-title">
                                <a href="./blog-details.html">Bluebase launches Tap to Pay on smartphone for
                                    international and domestic business</a>
                            </h1>
                            <p>Small UK merchants, businesses, and other enterprises can now use Tap to Pay on service
                                to replace payment terminals at point of sale.</p>
                            <ul>
                                <li>
                                    <i class="las la-check"></i> Collaboration Tools
                                </li>
                                <li>
                                    <i class="las la-check"></i> Smart Reminders
                                </li>
                                <li>
                                    <i class="las la-check"></i> Requirement
                                </li>
                                <li>
                                    <i class="las la-check"></i> Task Management
                                </li>
                            </ul>
                            <a href="./blog-details.html" class="theme-btn">
                                <i class="iconoir-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="news-item card-h">
                        <div class="news-img-box">
                            <img src="./assets/imgs/news-3.jpg" alt="News" />
                        </div>
                        <div class="news-item-body">
                            <h5 class="section-subtitle">CLOUD COMPUTING</h5>
                            <h1 class="section-title">
                                <a href="./blog-details.html">Google Bard launches in EU, overcoming data privacy
                                    concerns in the region</a>
                            </h1>
                            <p>Small UK merchants, businesses, and other enterprises can now use Tap to Pay on service
                                to replace payment terminals at point of sale.</p>
                            <ul>
                                <li>
                                    <i class="las la-check"></i> Collaboration Tools
                                </li>
                                <li>
                                    <i class="las la-check"></i> Smart Reminders
                                </li>
                                <li>
                                    <i class="las la-check"></i> Requirement
                                </li>
                            </ul>
                            <a href="./blog-details.html" class="theme-btn">
                                <i class="iconoir-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- Features Section -->
        <section class="feature-area">
            <div class="custom-container">
                <div class="custom-row align-items-center">
                    <div class="feature-left d-flex">
                        <div class="feature-img-card">
                            <h3>Start your <br>
                                project from <br>
                                your pocket.</h3>
                            <img src="./assets/imgs/feature-img-1.png" alt="Feature" />
                        </div>
                        <div class="feature-img-card">
                            <h3>Available on <br>
                                all responsive <br>
                                devices.</h3>
                            <img src="./assets/imgs/feature-img-2.png" alt="Feature" />
                        </div>
                    </div>

                    <div class="feature-right">
                        <div class="feature-content">
                            <h5 class="section-subtitle">FEATURED PRODUCT</h5>
                            <h1 class="section-title">Seamless productivity with our new app</h1>
                            <p>Download Slack and experience a new era of organization and accomplishment.</p>
                            <ul>
                                <li>
                                    <i class="las la-check"></i> PPD Development
                                </li>
                                <li>
                                    <i class="las la-check"></i> Easy to Use
                                </li>
                            </ul>
                            <div class="btns-group">
                                <a href="#" class="theme-simple-btn">
                                    <i class="lab la-apple"></i>
                                    Get it on App Store
                                </a>
                                <a href="#" class="theme-simple-btn">
                                    <i class="lab la-google-play"></i>
                                    Get it on Play Store
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact -->
        <section class="contact-area">
            <div class="custom-container">
                <div class="custom-row">
                    <div class="contact-form-wrap">
                        <div class="contact-form-body">
                            <h5 class="section-subtitle">Contact</h5>
                            <h1 class="section-title">Lets get in touch</h1>
                            <p>You can reach us anytime via <a href="email:bluebase@mail.com">bluebase@mail.com</a></p>
                            <form action="assets/mail/contact.php" method="POST" class="contact-form">
                                <div class="input-row">
                                    <div class="input-group">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" name="first_name"
                                            placeholder="First Name" />
                                    </div>
                                    <div class="input-group">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" name="last_name"
                                            placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="input-row">
                                    <div class="input-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email"
                                            placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="input-row">
                                    <div class="input-group phone-number">
                                        <select class="number-prefix">
                                            <option value="uk">UK</option>
                                            <option value="us">US</option>
                                        </select>
                                        <label for="phone_number">Phone Number</label>
                                        <input id="phone_number" type="text" name="phone_number"
                                            placeholder="Your Number" />
                                    </div>
                                    <div class="input-group">
                                        <label for="country">Country</label>
                                        <input type="text" id="homeland" name="country"
                                            placeholder="Your Country" />
                                    </div>
                                </div>
                                <div class="input-row">
                                    <div class="input-group">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" placeholder="Leave us a message...."></textarea>
                                    </div>
                                </div>
                                <div class="input-row">
                                    <div class="input-group input-checkbox">
                                        <input type="checkbox" id="privacy_policy_accept">
                                        <label for="privacy_policy_accept">You agree to our <a href="#">terms
                                                and conditions.</a></label>
                                    </div>
                                </div>

                                <div class="input-row">
                                    <div class="input-group">
                                        <button id="submit" class="theme-btn">Get Started</button>
                                    </div>
                                </div>
                                <!-- Alert Message -->
                                <div class="input-row">
                                    <div class="input-group alert-notification">
                                        <div id="alert-message" class="alert-msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="contact-experience">
                        <ul>
                            <li>
                                <h1>22+ <span>Years</span></h1>
                                <p>Field Experience </p>
                            </li>
                            <li>
                                <h1>950+ <span>Projects</span></h1>
                                <p>Done Around World </p>
                            </li>
                            <li>
                                <h1>99%</h1>
                                <p>Client Satisfaction</p>
                            </li>
                            <li>
                                <h1>1995+ <span>Year</span></h1>
                                <p>Established On</p>
                            </li>
                            <li>
                                <h1>2 <span>Mins</span></h1>
                                <p>Response Time</p>
                            </li>
                        </ul>
                    </div>

                    <div class="contact-infos">
                        <div class="contact-infos-inner">
                            <div class="contact-info">
                                <img src="./assets/imgs/support-icon.svg" alt="Support" />
                                <h3>Contact Info</h3>
                                <p>
                                    +1 455 1482 236 <br>
                                    Bluebase@mail.com
                                </p>
                            </div>
                            <div class="contact-office-info contact-info">
                                <img src="./assets/imgs/map-icon.svg" alt="Map" />
                                <h3>Visit our office</h3>
                                <p>16/9, Down Street
                                    Edinburgh, Scotland
                                    United Kingdom</p>
                            </div>

                            <ul class="contact-social-links">
                                <li>
                                    <a href="#">
                                        <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-dribbble"></i>
                                        Dribbble
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-twitter"></i>
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <?xml version="1.0" encoding="UTF-8"?><i class="iconoir-linkedin"></i>
                                        linkedin
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        @include('layouts.__sections.footer')

    </main>

    @include('layouts.__parts.js_files')
</body>

</html>
