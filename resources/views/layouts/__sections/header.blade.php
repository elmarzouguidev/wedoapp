<header class="header-area ">

    <div class="custom-container">
        <div class="custom-row align-items-center justify-content-between">
            <div class="header-left d-flex align-items-center">
                <a href="{{ route('home') }}" class="logo">
                    {{-- <img src="{{ asset('assets/imgs/logo.svg') }}" alt="wedoapp logo" /> --}}
                    <x-application-logo width="100" alt="wedoapp logo" />
                </a>

                <div class="header-left-right">
                    <a href="{{ route('contact.us') }}" class="theme-btn">Contact Us</a>
                    <span class="menu-bar">
                        <i class="las la-bars"></i>
                    </span>
                </div>
                <nav class="navbar-wrapper">
                    <span class="close-menu-bar">
                        <i class="las la-times"></i>
                    </span>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Acceuil</a>
                        </li>
                        <li class="mega-menu-item">
                            <a href="{{ route('company') }}">L'agence</a>
                            <span class="dropdown-menu-item-icon">
                                <i class="las la-angle-down"></i>
                            </span>
                            <div class="mega-menu mega-menu-company">
                                <div class="mega-menu-inner">
                                    <div class="custom-container d-flex">
                                        <div class="left">
                                            <div class="mega-menu-link-wrap d-flex justify-content-between">
                                                <div class="mega-menu-link">
                                                    <h3>Get Started</h3>
                                                    <ul>
                                                        <li><a href="#">Setup 101</a></li>
                                                        <li><a href="#">Adding users</a></li>
                                                        <li><a href="#">Video tutorials</a></li>
                                                        <li><a href="#">Libraries and SDKs</a></li>
                                                        <li><a href="#">Plugins</a></li>
                                                        <li><a href="#">Templates</a></li>
                                                    </ul>
                                                </div>

                                                <div class="mega-menu-links d-flex">
                                                    <div class="mega-menu-link">
                                                        <h3>Company</h3>
                                                        <ul>
                                                            <li><a href="{{ route('company.about') }}">About Us</a></li>
                                                            <li><a href="{{ route('company.partner') }}">Partners</a>
                                                            </li>
                                                            <li><a href="{{ route('company.career') }}">Careers</a></li>
                                                            <li><a href="{{ route('company.event') }}">Events</a></li>
                                                            <li><a href="{{ route('company.teams') }}">Team</a></li>
                                                            <li><a href="{{ route('blog') }}">Blog</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-menu-link">
                                                        <h3>Product</h3>
                                                        <ul>
                                                            <li><a href="{{ route('overview') }}">Overview</a></li>
                                                            <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                                            <li><a href="{{ route('feature') }}">Features</a></li>

                                                            <li><a href="{{ route('release') }}">New Releases</a></li>
                                                            <li><a href="{{ route('solution') }}">Solutions</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-menu-link">
                                                        <h3>Legal</h3>
                                                        <ul>
                                                            <li><a href="#">Licenses</a></li>
                                                            <li><a href="#">Settings</a></li>
                                                            <li><a href="#">Cookies</a></li>
                                                            <li><a href="#">Document</a></li>
                                                            <li><a href="#">Terms</a></li>
                                                            <li><a href="#">Privacy</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mega-meu-footer d-flex align-items-center justify-content-between w-full">
                                                <ul class="mega-menu-social d-flex align-items-center">
                                                    <li>
                                                        <a href="https://twitter.com/wedoappma" target="__blank">
                                                            <i class="iconoir-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/wedoapp.ma/"
                                                            target="__blank">
                                                            <i class="iconoir-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/company/wedoapp-ma"
                                                            target="__blank">
                                                            <i class="iconoir-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://t.me/wedoappma" target="__blank">
                                                            <i class="iconoir-telegram"></i>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <p>Looking for new career? <a href="career.html">We're
                                                        hiring</a></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="mega-menu-ads">
                                                <img src="{{ asset('assets/imgs/iphone-13-1.jpg') }}" alt="Iphone" />
                                                <h2>Solution in your hand</h2>
                                                <p>Develop IT solutions based on the<br> analysis phase.</p>
                                                <a href="case-studie-single.html">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu-item">
                            <a href="{{ route('portfolios') }}">Solution</a>
                            <span class="dropdown-menu-item-icon">
                                <i class="las la-angle-down"></i>
                            </span>
                            <div class="mega-menu mega-menu-portfolio">
                                <div class="mega-menu-inner">
                                    <div class="custom-container d-flex">
                                        <div class="left">
                                            <div
                                                class="mega-menu-link-wrap d-flex align-items-start justify-content-between">
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-1.jpg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">E-commerce</a>
                                                        </h3>
                                                        <p>we undertook a project to <br>migrate their existing.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-1.jpg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">E-commerce</a>
                                                        </h3>
                                                        <p>we undertook a project to <br>migrate their existing.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-1.jpg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">E-commerce</a>
                                                        </h3>
                                                        <p>we undertook a project to <br>migrate their existing.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-2.jpg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">App
                                                                Development</a></h3>
                                                        <p>The mobile application has <br>significantly
                                                            improved.</p>
                                                    </div>
                                                </div>
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-3.jpeg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">SAAS
                                                                Integration</a></h3>
                                                        <p>We partnered with DEF to <br>upgrade their outdated
                                                            IT.</p>
                                                    </div>
                                                </div>
                                                <div class="mega-menu-portfolio-card">
                                                    <div class="img-box">
                                                        <img src="{{ asset('assets/imgs/portfolio-mega-menu-4.jpeg') }}"
                                                            alt="Portfolio" />
                                                    </div>
                                                    <div class="content-box">
                                                        <h3><a href="portfolio-details.html">Virtual
                                                                Reality</a></h3>
                                                        <p>Enter into the virtual reality <br>
                                                            world for real experience.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mega-meu-footer d-flex align-items-center justify-content-between w-full">
                                                <ul class="mega-menu-social d-flex align-items-center">
                                                    <li><a href="#"><i class="iconoir-dribbble"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="iconoir-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="iconoir-instagram"></i></a></li>
                                                    <li><a href="#"><i class="iconoir-linkedin"></i></a>
                                                    </li>
                                                </ul>

                                                <p>
                                                    <a href="portfolio.html">View Portfolio <i
                                                            class="iconoir-arrow-up-right"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="mega-menu-ads">
                                                <img src="{{ asset('assets/imgs/macbook.jpg') }}" alt="iPad" />
                                                <h2>Mobile app for a new era</h2>
                                                <p>Download slack in your mobile for <br>
                                                    your daily usage.</p>
                                                <a href="case-studie-single.html">View more</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mega-menu-item">
                            <a href="{{ route('services') }}">Services</a>
                            <span class="dropdown-menu-item-icon">
                                <i class="las la-angle-down"></i>
                            </span>
                            <div class="mega-menu">
                                <div class="mega-menu-inner">
                                    <div class="custom-container d-flex">
                                        <div class="left">
                                            <div
                                                class="mega-menu-link-wrap d-flex align-items-start justify-content-between">
                                                <div class="mega-menu-service-cards align-items-start">
                                                    <div class="mega-menu-service-card">
                                                        <span class="icon">
                                                            <img src="{{ asset('assets/imgs/hwd-icon-1.svg') }}"
                                                                alt="Service" />
                                                        </span>
                                                        <div class="content">
                                                            <h2><a href="how-we-do-single.html">Brainstroming</a>
                                                            </h2>
                                                            <p>Ideas</p>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-service-card">
                                                        <span class="icon">
                                                            <img src="{{ asset('assets/imgs/hwd-icon-4.svg') }}"
                                                                alt="Service" />
                                                        </span>
                                                        <div class="content">
                                                            <h2><a href="how-we-do-single.html">Product</a>
                                                            </h2>
                                                            <p>Design</p>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-service-card">
                                                        <span class="icon">
                                                            <img src="{{ asset('assets/imgs/hwd-icon-2.svg') }}"
                                                                alt="Service" />
                                                        </span>
                                                        <div class="content">
                                                            <h2><a href="how-we-do-single.html">SEO</a></h2>
                                                            <p>Optimization</p>
                                                        </div>
                                                    </div>
                                                    <div class="mega-menu-service-card">
                                                        <span class="icon">
                                                            <img src="{{ asset('assets/imgs/hwd-icon-3.svg') }}"
                                                                alt="Service" />
                                                        </span>
                                                        <div class="content">
                                                            <h2><a href="how-we-do-single.html">Front-End</a>
                                                            </h2>
                                                            <p>Development</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mega-menu-links d-flex">
                                                    <div class="mega-menu-link">
                                                        <h3>Services</h3>
                                                        <ul>
                                                            <li><a href="service-details.html">Development</a>
                                                            </li>
                                                            <li><a href="service-details.html">Web Design</a>
                                                            </li>
                                                            <li><a href="service-details.html">IT Support</a>
                                                            </li>
                                                            <li><a href="service-details.html">E-Commerce</a>
                                                            </li>
                                                            <li><a href="service-details.html">Cloud Things</a>
                                                            </li>
                                                            <li><a href="service-details.html">CRM
                                                                    Solutions</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="mega-menu-link">
                                                        <h3>Our Fields</h3>
                                                        <ul>
                                                            <li><a href="our-field-details.html">Healthcare</a>
                                                            </li>
                                                            <li><a href="our-field-details.html">Banks</a></li>
                                                            <li><a href="our-field-details.html">Logistics</a>
                                                            </li>
                                                            <li><a href="our-field-details.html">Supermarkets</a>
                                                            </li>
                                                            <li><a href="our-field-details.html">Industries</a>
                                                            </li>
                                                            <li><a href="our-field-details.html">Hotels</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mega-meu-footer d-flex align-items-center justify-content-between w-full">
                                                <ul class="mega-menu-social d-flex align-items-center">
                                                    <li><a href="#"><i class="iconoir-dribbble"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="iconoir-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="iconoir-instagram"></i></a></li>
                                                    <li><a href="#"><i class="iconoir-linkedin"></i></a>
                                                    </li>
                                                </ul>

                                                <p>Looking for new career? <a href="career.html">We're
                                                        hiring</a></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="mega-menu-ads">
                                                <img src="{{ asset('assets/imgs/ipad.jpg') }}" alt="iPad" />
                                                <h2>Our product hits</h2>
                                                <p>Our new best IT product of the <br>year 2023.</p>
                                                <a href="case-studie-single.html">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Projets</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">Blog</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('faqs') }}">FAQ</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-contact-info d-flex align-items-center">
                    <div class="phone-number">
                        <a href="tel:+212520513358">
                            Call Us
                            <i class="iconoir-arrow-up-right"></i>
                        </a>
                        +212520513358
                    </div>
                    <a href="{{ route('contact.us') }}" class="theme-btn">Contact</a>
                </div>
            </div>
        </div>
    </div>

</header>
