<footer class="footer-area">
    <img src="{{ asset('assets/imgs/bg-shape-4.svg') }}" alt="Shape" class="animation-slide-right bg-shape" />
    <div class="footer-top">
        <div class="custom-container">
            <div class="custom-row align-items-end justify-content-between">
                <div class="left-content">
                    <a href="{{ route('home') }}" class="logo">
                        {{-- <img src="{{ asset('assets/imgs/logo-white.svg')}}" alt="Logo" /> --}}
                        {{-- <x-application-logo width="100" alt="wedoapp logo" /> --}}
                    </a>
                    <p>We provide the expertise and support to <br>
                        propel your business forward.</p>
                    <form action="" method="post" class="subscribe-form">
                        @csrf
                        @honeypot
                        <div class="subscribe-box d-flex">
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" />
                            <button id="submit2" class="theme-btn">Get Started</button>
                        </div>
                        <!-- Alert Message -->
                        <div class="input-row">
                            <div class="input-group alert-notification">
                                <div id="alert-message-subscribe" class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                    <div class="footer-clients d-flex align-items-center">
                        <div class="footer-client-img">
                            <img src="{{ asset('assets/imgs/youtube.svg') }}" alt="Youtube" />
                        </div>
                        <div class="footer-client-img">
                            <img src="{{ asset('assets/imgs/webflow.svg') }}" alt="webflow" />
                        </div>
                        <div class="footer-client-img">
                            <img src="{{ asset('assets/imgs/upwork.svg') }}" alt="upwork" />
                        </div>
                        <div class="footer-client-img">
                            <img src="{{ asset('assets/imgs/shopify.svg') }}" alt="shopify" />
                        </div>
                    </div>
                </div>

                <div class="right-content">
                    <div class="right-content-inner">
                        <h2>Let’s get started on something great</h2>
                        <p>Our team of IT experts looks forward to meeting with you <br>
                            and providing valuable insights tailored to your business.</p>
                        <a href="contact.html" class="theme-btn">Get an appointment now</a>

                        <div class="footer-experience d-flex align-items-center">

                            <div class="footer-experience-item">
                                <h1>2 <span>Mins</span></h1>
                                <p>Response Time</p>
                            </div>
                            <div class="footer-experience-item">
                                <h1>99%</h1>
                                <p>Client Satisfaction</p>
                            </div>
                            <div class="footer-experience-item">
                                <h1>22+ <span>Years</span></h1>
                                <p>Field Experience</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="custom-container">
            <div class="custom-row">
                <div class="footer-all-links-wrap justify-content-between d-flex">
                    <div class="footer-links">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="service-details.html">IT Support</a></li>
                            <li><a href="service-details.html">Web Design</a></li>
                            <li><a href="service-details.html">Development</a></li>
                            <li><a href="service-details.html">Cloud Things <span class="new">New</span></a></li>
                            <li><a href="service-details.html">E-Commerce</a></li>
                            <li><a href="service-details.html">CRM Solutions</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="partner.html">Partners</a></li>
                            <li><a href="career.html">Careers</a></li>
                            <li><a href="event.html">Events</a></li>
                            <li><a href="team.html">Team</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h3>Product</h3>
                        <ul>
                            <li><a href="case-studie.html">Case Studies </a></li>
                            <li><a href="pricing.html">Our Pricing</a></li>
                            <li><a href="feature.html">Features</a></li>
                            <li><a href="overview.html">Overview</a></li>
                            <li><a href="new-release.html">New Releases</a></li>
                            <li><a href="solution.html">Solutions</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h3>Our Fields</h3>
                        <ul>
                            <li><a href="our-field-details.html">Healthcare</a></li>
                            <li><a href="our-field-details.html">Banks</a></li>
                            <li><a href="our-field-details.html">Logistics</a></li>
                            <li><a href="our-field-details.html">Supermarkets</a></li>
                            <li><a href="our-field-details.html">Industries</a></li>
                            <li><a href="our-field-details.html">Hotels</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
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

                <div class="footer-contact-info">
                    <div class="footer-contact-info-item">
                        <h4>Phone</h4>
                        <p>
                            <a href="tel:+212520513358">+212520513358</a> <br>
                            {{-- <a href="tel:+1-938-740-75556">+1-938-740-7555</a> --}}
                        </p>
                    </div>
                    <div class="footer-contact-info-item">
                        <h4>Mail</h4>
                        <p>
                            <a href="mailto:contact@wedoapp.ma">contact@wedoapp.ma</a> <br>
                            <a href="mailto:support@wedoapp.ma">support@wedoapp.ma</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="custom-container">
            <div class="custom-row d-flex align-items-center justify-content-between">
                <ul class="social-links d-flex align-items-center">
                    <li>
                        <a href="https://twitter.com/wedoappma" target="__blank">
                            <i class="iconoir-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/wedoapp.ma/" target="__blank">
                            <i class="iconoir-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/wedoapp-ma" target="__blank">
                            <i class="iconoir-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://t.me/wedoappma" target="__blank">
                            <i class="iconoir-telegram"></i>
                        </a>
                    </li>
                </ul>


                <p>&copy; {{ now()->format('Y') }} All rights reserved by <a href="https://wedoapp.ma">WEDOAPP</a></p>
            </div>
        </div>
    </div>
</footer>
