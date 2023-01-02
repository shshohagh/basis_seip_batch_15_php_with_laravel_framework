@extends('frontEnd.master')
@section('title')
Hello friend!
@endsection
@section('content')
<main>

<section class="hero d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12">
                <div class="hero-text">
                    <div class="hero-title-wrap d-flex align-items-center mb-4">
                        <img src="{{asset('frontEnd')}}/images/happy-bearded-young-man.jpg" class="avatar-image avatar-image-large img-fluid" alt="">

                        <h1 class="hero-title ms-3 mb-0">Hello friend!</h1>
                    </div>

                    <h2 class="mb-4">I’m available for freelance work.</h2>
                    <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Let's begin</a></p>
                </div>
            </div>

            <div class="col-lg-5 col-12 position-relative">
                <div class="hero-image-wrap"></div>
                <img src="{{asset('frontEnd')}}/images/portrait-happy-excited-man-holding-laptop-computer.png" class="hero-image img-fluid" alt="">
            </div>

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#535da1" fill-opacity="1" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
</section>


<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <img src="{{asset('frontEnd')}}/images/couple-working-from-home-together-sofa.jpg" class="about-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <div class="about-thumb">

                    <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
                        <h2 class="text-white me-4 mb-0">My Story</h2>

                        <img src="{{asset('frontEnd')}}/images/happy-bearded-young-man.jpg" class="avatar-image img-fluid" alt="">
                    </div>

                    <h3 class="pt-2 mb-3">a little bit about Saidul</h3>

                    <p>I am PHP with Laravel Framework Backend Developer. I have been complete my course from <a href="http://www.bitm.org.bd" target="_blank">BITM</a>. The project name was <a href="https://seip-fd.gov.bd" target="_blank">SEIP</a> Under <a href="https://basis.org.bd" target="_blank">BASIS</a>.</p>

                    
                </div>
            </div>

        </div>
    </div>
</section>

<section class="featured section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="profile-thumb">
                    <div class="profile-title">
                        <h4 class="mb-0">Information</h4>
                    </div>

                    <div class="profile-body">
                        <p>
                            <span class="profile-small-title">Name</span> 
                            <span>Md. Saidul Hossain</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Birthday</span> 
                            <span>Jul 20, 1995</span>
                        </p>

                        <p>
                            <span class="profile-small-title">Phone</span> 
                             <span><a href="tel: 305-240-9671">017-6699-6853</a></span>
                        </p>

                        <p>
                            <span class="profile-small-title">Email</span> 
                            <span><a href="mailto:hello@josh.design">shshohagh3@gmail.com</a></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                <div class="about-thumb">
                    <div class="row">
                        <div class="col-lg-6 col-6 featured-border-bottom py-2">
                            <strong class="featured-numbers">10+</strong>

                            <p class="featured-text">Years of Experiences</p>
                        </div>

                        <div class="col-lg-6 col-6 featured-border-start featured-border-bottom ps-5 py-2">
                            <strong class="featured-numbers">245</strong>

                            <p class="featured-text">Happy Customers</p>
                        </div>

                        <div class="col-lg-6 col-6 pt-4">
                            <strong class="featured-numbers">640</strong>

                            <p class="featured-text">Project Finished</p>
                        </div>

                        <div class="col-lg-6 col-6 featured-border-start ps-5 pt-4">
                            <strong class="featured-numbers">72+</strong>

                            <p class="featured-text">Digital Awards</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="clients section-padding">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-12 col-12">
                <h3 class="text-center mb-5">Companies I've had worked</h3>
            </div>

            <div class="col-lg-2 col-4 ms-auto clients-item-height">
                <img src="{{asset('frontEnd')}}/images/clients/cachet.svg" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('frontEnd')}}/images/clients/guitar-center.svg" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('frontEnd')}}/images/clients/tokico.svg" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 clients-item-height">
                <img src="{{asset('frontEnd')}}/images/clients/shopify.svg" class="clients-image img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-4 me-auto clients-item-height">
                <img src="{{asset('frontEnd')}}/images/clients/profil-rejser.svg" class="clients-image img-fluid" alt="">
            </div>

        </div>
    </div>
</section>


<section class="services section-padding" id="section_3">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 mx-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                    <img src="{{asset('frontEnd')}}/images/handshake-man-woman-after-signing-business-contract-closeup.jpg" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Services</h2>
                </div>

                <div class="row pt-lg-5">
                    <div class="col-lg-6 col-12">
                        <div class="services-thumb">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">CMS Websites</h3>

                                <div class="services-price-wrap ms-auto">
                                    <p class="services-price-text mb-0">Minimum 15,000 BDT</p>
                                    <div class="services-price-overlay"></div>
                                </div>
                            </div>

                            <p>WordPress Website</p>

                            <a href="https://swiftbd.com" target="_blank" class="custom-btn custom-border-btn btn mt-3">Demo Live Site</a>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-globe"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="services-thumb services-thumb-up">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Facebook Campaign</h3>

                                <div class="services-price-wrap ms-auto">
                                    <p class="services-price-text mb-0">145 BDT/1 day, Minimum 4 Days.</p>
                                    <div class="services-price-overlay"></div>
                                </div>
                            </div>

                            <p>Target Country, Age, People, Like, Interest.</p>

                            <a href="https://www.facebook.com/sksitfirm" target="_blank" class="custom-btn custom-border-btn btn mt-3">Our Like Page</a>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-lightbulb"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="services-thumb">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">Ecommerce</h3>

                                <div class="services-price-wrap ms-auto">
                                    <p class="services-price-text mb-0">Minimum 1,00,000 BDT</p>
                                    <div class="services-price-overlay"></div>
                                </div>
                            </div>

                            <p>Html, CSS, Bootstrap, JS, jQuery, Ajax, PHP, Laravel.</p>

                            <a href="http://fairykite.com" target="_blank" class="custom-btn custom-border-btn btn mt-3">Demo Live site</a>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-phone"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12  pt-lg-5">
                        <div class="services-thumb services-thumb-up">
                            <div class="d-flex flex-wrap align-items-center border-bottom mb-4 pb-3">
                                <h3 class="mb-0">SEO</h3>

                                <div class="services-price-wrap ms-auto">
                                    <p class="services-price-text mb-0">12,000 BDT/mon, Minimum 6 Month</p>
                                    <div class="services-price-overlay"></div>
                                </div>
                            </div>
                            
                            <ul>
                                <li> 10 Directory submissions</li>
                                <li> 30 Social Bookmarking Submissions</li>
                                <li> 1 Article Submissions</li>
                                <li> 1 Blog Submissions (1 blog x 1 blog posting)</li>
                                <li> Google Submissions</li>
                                <li> Keyword research</li>
                            </ul>

                            <div class="services-icon-wrap d-flex justify-content-center align-items-center">
                                <i class="services-icon bi-google"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="projects section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8 col-12 ms-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
                    <img src="{{asset('frontEnd')}}/images/white-desk-work-study-aesthetics.jpg" class="avatar-image img-fluid" alt="">

                    <h2 class="text-white ms-4 mb-0">Projects</h2>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">Branding</small>

                        <h3 class="projects-title">Zoik agency</h3>
                    </div>

                    <a href="{{asset('frontEnd')}}/images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="popup-image">
                        <img src="{{asset('frontEnd')}}/images/projects/nikhil-KO4io-eCAXA-unsplash.jpg" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">Photography</small>

                        <h3 class="projects-title">The Watch</h3>
                    </div>

                    <a href="{{asset('frontEnd')}}/images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="popup-image">
                        <img src="{{asset('frontEnd')}}/images/projects/the-5th-IQYR7N67dhM-unsplash.jpg" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <small class="projects-tag">Website</small>

                        <h3 class="projects-title">Polo</h3>
                    </div>

                    <a href="{{asset('frontEnd')}}/images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="popup-image">
                        <img src="{{asset('frontEnd')}}/images/projects/true-agency-9Bjog5FZ-oc-unsplash.jpg" class="projects-image img-fluid" alt="">
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-8 col-12">
                    <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
                        <img src="{{asset('frontEnd')}}/images/aerial-view-man-using-computer-laptop-wooden-table.jpg" class="avatar-image img-fluid" alt="">

                        <h2 class="text-white ms-4 mb-0">Say Hi</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-3 col-md-6 col-12 pe-lg-0">
                    <div class="contact-info contact-info-border-start d-flex flex-column">
                        <strong class="site-footer-title d-block mb-3">Services</strong>

                        <ul class="footer-menu">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Websites</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Facebook Campaign</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Ecommerce</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">SEO</a></li>
                        </ul>

                        <strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>

                        <ul class="social-icon">
                            <li class="social-icon-item"><a href="https://twitter.com/shshohagh3" class="social-icon-link bi-twitter"></a></li>

                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li class="social-icon-item"><a href="#" class="social-icon-link bi-pinterest"></a></li>

                            <li class="social-icon-item"><a href="https://www.youtube.com/sksitfirm" class="social-icon-link bi-youtube"></a></li>
                        </ul>

                        <strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>

                        <p class="mb-0">I’m available for freelance projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 ps-lg-0">
                    <div class="contact-info d-flex flex-column">
                        <strong class="site-footer-title d-block mb-3">About</strong>

                        <p class="mb-2">
                            Saidul is a professional web developer. Feel free to get in touch with me.
                  </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">Email</strong>

                        <p>
                            <a href="mailto:hello@josh.design">
                                shshohagh3@gmail.com
                            </a>
                        </p>

                        <strong class="site-footer-title d-block mt-4 mb-3">Call</strong>

                        <p class="mb-0">
                            <a href="tel: 120-240-9600">
                                017-66-99-6853
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                    <form action="#" method="get" class="custom-form contact-form" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="">
                                    
                                    <label for="floatingInput">Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12"> 
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                    
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="website" type="checkbox" class="form-check-input" id="inlineCheckbox1" value="1">

                                    <label class="form-check-label" for="inlineCheckbox1">
                                        <i class="bi-globe form-check-icon"></i>
                                        <span class="form-check-label-text">Websites</span>
                                    </label>
                              </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="branding" type="checkbox" class="form-check-input" id="inlineCheckbox2" value="1">

                                    <label class="form-check-label" for="inlineCheckbox2">
                                        <i class="bi-lightbulb form-check-icon"></i>
                                        <span class="form-check-label-text">Facebook Campaign</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline">
                                    <input name="ecommerce" type="checkbox" class="form-check-input" id="inlineCheckbox3" value="1">

                                    <label class="form-check-label" for="inlineCheckbox3">
                                        <i class="bi-phone form-check-icon"></i>
                                        <span class="form-check-label-text">Ecommerce</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <div class="form-check form-check-inline me-0">
                                    <input name="seo" type="checkbox" class="form-check-input" id="inlineCheckbox4" value="1">

                                    <label class="form-check-label" for="inlineCheckbox4">
                                        <i class="bi-google form-check-icon"></i>
                                        <span class="form-check-label-text">SEO</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
                                    
                                    <label for="floatingTextarea">Tell me about the project</label>
                                </div>
                            </div>

                            <div class="col-lg-3 col-12 ms-auto">
                                <button type="submit" class="form-control">Send</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

</main>
@endsection