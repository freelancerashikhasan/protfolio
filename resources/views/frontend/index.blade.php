@extends('layouts.frontend.app')

@section('content')
<div class="slider-venor-section">
    <div class="slider-venor owl-carousel">


        <div class="slider-inner-venor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="slider-content">
                           <h1>Are you looking for </h1>
                           <h2 class=" typed_active ">Web Design?</h2>

                                                               <script type="text/javascript">
                                    var arr = ['Social Media?', 'Print Design?', 'Digital Design?', 'Free Consulting?'];
                                </script>

                           <div class="slider-body"><p>Whether you need a <strong>new logo</strong>, website, video, marketing campaign or ebook created for your company, the key to making your project a <strong>success </strong>starts with a well thought out <strong>creative </strong>brief.</p></div>
                           <a href="contact.html" target="_self" class="btn btn-slider"><span>Contact us</span></a>
                           <a href="portfolio.html" target="_self" class="btn btn-slider2"><span>View our portfolio</span></a>
                        </div>

                     </div>
                     <div class="col-md-7">
                        <div class="slider-image">
                           <img width="450" height="450" class="owl-lazy img-fluid slider-img" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622051838banner-1.png') }}" alt="" >
                        </div>
                     </div>
                 </div>
            </div>
        </div>




        <div class="slider-inner-venor">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="slider-content">
                           <h1>Seeking digital excellence? </h1>
                           <h2 class="">Say no more.</h2>


                           <div class="slider-body"><p>We help premium brands <strong>achieve their future</strong> through innovation and creative perspectives. <strong>We grow your company</strong> through proprietary in-house ideas, tested and perfected <strong>over the years.</strong></p></div>
                           <a href="contact.html" target="_self" class="btn btn-slider"><span>Contact us</span></a>
                           <a href="portfolio.html" target="_self" class="btn btn-slider2"><span>View our portfolio</span></a>
                        </div>

                     </div>
                     <div class="col-md-7">
                        <div class="slider-image">
                           <img width="450" height="450" class="owl-lazy img-fluid slider-img" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622301395slider2.png') }}" alt="" >
                        </div>
                     </div>
                 </div>
            </div>
        </div>




    </div>


</div>

<div class="about-section">
    <div class="container">
        <div class="row">

            <div class="col-md-7">

                <div class="pictures-row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item-about">
                                <div class="imgone big-paral">
                                    <div class="simpleParallax"><img src="{{ asset('frontend/img/loading-blog.gif') }}" width="500" height="666" class="lazy thumparallax-down img-fluid" data-src="{{ asset('frontend/images/media/16220522691615636710about-s1.jpg') }}" alt="two-images-1.jpg"></div>
                                </div>
                                <div class="exp-about">
                                    <h5 class="nmb-font-about">12</h5>
                                    <h6 class="service_summary-about">YEARS OF EXPERIENCE</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item-about">
                                <div class="imgtwo big-paral">
                                    <div class="simpleParallax"><img src="{{ asset('frontend/img/loading-blog.gif') }}" width="500" height="820" class="lazy thumparallax img-fluid" data-src="{{ asset('frontend/images/media/16220581871615636710about-s2.jpg') }}" alt="two-images-1.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <h4 class="about-heading1-home">ABOUT AGENCY</h4>
                <h3 class="about-heading2-home">Unlimited Skills for <span>Super Projects.</span></h3>
                <p><strong>Web design</strong> encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design, interface design, including standardized code.</p>
                <p>Web design partially overlaps web engineering in the broader scope of <strong>web development</strong>. Web designers are expected to have an awareness of usability.</p>
                <a href="pricing.html" target="_self" class="btn btn-style1"><span>Get the offer</span></a>
            </div>
        </div>
    </div>
</div>


<div class="services-section">
    <div class="container">
        <h3>How can <span>we help?</span></h3>
        <div class="description-services"><p>We help premium brands <strong>achieve their future</strong> through innovation and creative perspectives. <strong>We grow your company</strong> through proprietary in-house ideas, tested and perfected <strong>over the years.</strong></p></div>
        <div class="service-boxes-slider owl-carousel">
            <div class="card-parent">
                <div class="card featured to-top-left">
                    <div class="heading-wrapper">
                        <h4 class="heading"><i class="fas fa-crown"></i> Web Design</h4>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="paragraph">Your design has to be as intuitive as it is helpful and insightful. In the dozen years, we’ve been in this industry, we gathered an intimate understanding of the latest UI &amp; UX behaviors.</p>
                    </div>
                    <div class="image-wrapper to-bottom">
                        <div class="gallery">
                            <img width="400" height="400" class="lazy img-fluid" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/16221355461615638134advertise-soluti.jpg') }}" alt="Web Design">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-parent">
                <div class="card featured to-top-left">
                    <div class="heading-wrapper">
                        <h4 class="heading"><i class="fab fa-google"></i> SEO Solutions</h4>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="paragraph">There’s some SEO in everything you do online. But that doesn’t mean everyone needs the same SEO services. Build your search engine optimization foundation with the trusted experts.</p>
                    </div>
                    <div class="image-wrapper to-bottom">
                        <div class="gallery">
                            <img width="400" height="400" class="lazy img-fluid" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/16221359571615638134advertise-soluti.jpg') }}" alt="SEO Solutions">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-parent">
                <div class="card featured to-top-left">
                    <div class="heading-wrapper">
                        <h4 class="heading"><i class="fas fa-mobile"></i> App development</h4>
                    </div>
                    <div class="paragraph-wrapper">
                        <p class="paragraph">Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones.</p>
                    </div>
                    <div class="image-wrapper to-bottom">
                        <div class="gallery">
                            <img width="400" height="400" class="lazy img-fluid" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/16221360901615638134advertise-soluti.jpg') }}" alt="App development">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-parent">
                <div class="card featured to-top-left">

                    <div class="heading-wrapper">
                        <h4 class="heading"><i class="fas fa-ad"></i> Online advertising</h4>
                    </div>

                    <div class="paragraph-wrapper">
                        <p class="paragraph">Online Advertising is the art of using the internet as a medium to deliver marketing messages to an identified and intended audience. We have the best prices in town!</p>
                    </div>

                    <div class="image-wrapper to-bottom">
                        <div class="gallery">
                            <img width="400" height="400" class="lazy img-fluid" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/16221363221615638134advertise-soluti.jpg') }}" alt="Online advertising">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

 <div class="portfolio-section">
    <div class="container">
        <h4>SELECTED WORKS</h4>
        <h3>Our <span>premium</span> projects.</h3>
        <div class="row">
            <div class="col-md-6">
                <a href="project/niva.html" title="Niva WordPress Theme">
                    <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"  data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="30"  class="project-box-div">

                        <div class="project-image-container">
                            <div class="project-image-container-inner">
                                <img class="project-image lazy" width="410" height="230" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622322572project1.jpg') }}" alt="Niva WordPress Theme">
                            </div>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta-title">
                                <span class="project__text">Niva WordPress Theme</span>
                            </div>
                            <div class="divider"></div>
                            <div class="project-category">
                                <span class="block_text">WordPress </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="project/niva-cms.html" title="Niva CMS">
                    <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"  data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="30"  class="project-box-div">

                        <div class="project-image-container">
                            <div class="project-image-container-inner">
                                <img class="project-image lazy" width="410" height="230" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622292570project2.jpg') }}" alt="Niva CMS">
                            </div>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta-title">
                                <span class="project__text">Niva CMS</span>
                            </div>
                            <div class="divider"></div>
                            <div class="project-category">
                                <span class="block_text">Laravel </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="project/rentzone.html" title="Rentzone CMS">
                    <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"  data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="30"  class="project-box-div">

                        <div class="project-image-container">
                            <div class="project-image-container-inner">
                                <img class="project-image lazy" width="410" height="230" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622292846project3.jpg') }}" alt="Rentzone CMS">
                            </div>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta-title">
                                <span class="project__text">Rentzone CMS</span>
                            </div>
                            <div class="divider"></div>
                            <div class="project-category">
                                <span class="block_text">Laravel </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="project/venor.html" title="Venor WordPress Theme">
                    <div data-tilt data-tilt-gyroscope="false" data-tilt-scale="1.05" data-tilt-speed="200"  data-tilt-perspective="700" data-hover="" data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="30"  class="project-box-div">

                        <div class="project-image-container">
                            <div class="project-image-container-inner">
                                <img class="project-image lazy" width="410" height="230" src="{{ asset('frontend/img/loading-blog.gif') }}" data-src="{{ asset('frontend/images/media/1622292944project4.jpg') }}" alt="Venor WordPress Theme">
                            </div>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta-title">
                                <span class="project__text">Venor WordPress Theme</span>
                            </div>
                            <div class="divider"></div>
                            <div class="project-category">
                                <span class="block_text">WordPress </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

 <div class="fun-facts-section" id="fun-facts">
    <div class="container">
        <h3 class="fun-facts-heading1">Fun Facts</h3>
        <p>Over the years we have done many things that we are proud of. This motivates us to continue looking for new challenges in order to improve our services.</p>
        <div class="row fun-facts-timer">
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="425" data-speed="4000">425</span>
                    <h4>Happy Customers</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="12" data-speed="4000">12</span>
                    <h4>Cups of Coffee</h4>
                </div>

            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="1320" data-speed="4000">1320</span>
                    <h4>Innovations</h4>
                </div>

            </div>
            <div class="col-md-3">
                <div class="radial">
                    <span class="timer" data-from="0" data-to="860" data-speed="4000">860</span>
                    <h4>Great Projects</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-section">
    <div class="testimonial-section-slider owl-carousel">
        <blockquote class="testimonial-slide">
            <div class="section_title">Clients Opinion</div>
            <span class="testimonial_slider_title">Winning together</span>
                <div class="testimonial-area">
                    <div class="testimonial-layoutArea">
                       <p>It’s the perfect solution for our business. Niva is the most valuable business resource we have EVER purchased. We’ve seen amazing results already.</p>
                    </div>
                </div>
            <div class="testimonials_slider_name"> John Mike<span> - Themeforest programmer</span></div>
        </blockquote>
        <blockquote class="testimonial-slide">
            <div class="section_title">Clients Opinion</div>
            <span class="testimonial_slider_title">Top quality agency</span>
                <div class="testimonial-area">
                    <div class="testimonial-layoutArea">
                       <p>It’s the perfect solution for our business. Niva is the most valuable business resource we have EVER purchased. We’ve seen amazing results already.</p>
                    </div>
                </div>
            <div class="testimonials_slider_name"> Michael Doe<span> - Envato volunteer</span></div>
        </blockquote>
        <blockquote class="testimonial-slide">
            <div class="section_title">Clients Opinion</div>
            <span class="testimonial_slider_title">Professional team</span>
                <div class="testimonial-area">
                    <div class="testimonial-layoutArea">
                       <p>It’s the perfect solution for our business. Niva is the most valuable business resource we have EVER purchased. We’ve seen amazing results already.</p>
                    </div>
                </div>
            <div class="testimonials_slider_name"> Felix Doe<span> - Scoro programmer</span></div>
        </blockquote>
        <blockquote class="testimonial-slide">
            <div class="section_title">Clients Opinion</div>
            <span class="testimonial_slider_title">Absolutely awesome</span>
                <div class="testimonial-area">
                    <div class="testimonial-layoutArea">
                       <p>It’s the perfect solution for our business. Niva is the most valuable business resource we have EVER purchased. We’ve seen amazing results already.</p>
                    </div>
                </div>
            <div class="testimonials_slider_name"> Lucian Ionut<span> - Sweet Themes programmer</span></div>
        </blockquote>
    </div>
</div>

<div class="blog-section">
    <div class="container">
        <h3 class="blog-section-subtitle">BLOG POSTS</h3>
        <h3 class="blog-section-title">Our latest <span>news.</span></h3>
        <div class="row">

            <div class="col-md-4">
                <article class="blog-single-post">
                    <div class="blog_custom">
                        <div class="post-thumbnail">
                            <a class="relative" href="post/7-creative-ways-to-boost-your-social-media.html">
                                <div class="featured_image_blog">
                                    <img class="lazy blog_post_image img-fluid" width="350" height="300" src="../cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{ asset('frontend/images/media/1622298433post3.jpg') }}" alt="Top 7 Creative Ways to Boost Your Media">
                                    <div class="flex-icon">
                                        <div class="flex-icon-inside">
                                            <i class="fas fa-link"></i>
                                        </div>
                                  </div>
                                </div>
                            </a>
                            <div class="post-categories">
                               <p>Programming</p>
                            </div>
                        </div>
                        <div class="post-details">
                            <h3 class="post-name">
                                <a href="post/7-creative-ways-to-boost-your-social-media.html" title="Top 7 Creative Ways to Boost Your Media">Top 7 Creative Ways to Boost Your Media</a>
                            </h3>
                            <div class="post-category-comment-date">
                               <span class="post-date"><i class="far fa-clock"></i> 13.Mar.2021</span>
                               <span class="post-author">
                               <i class="far fa-user" ></i>
                               <a href="#0">Elisabeth Doe</a>
                               </span>
                            </div>


                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="blog-single-post">
                    <div class="blog_custom">
                        <div class="post-thumbnail">
                            <a class="relative" href="post/top-6-articles-you-must-read-today-niva.html">
                                <div class="featured_image_blog">
                                    <img class="lazy blog_post_image img-fluid" width="350" height="300" src="../cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{ asset('frontend/images/media/1622298365post1.jpg') }}" alt="Buld your website with Venor CMS">
                                    <div class="flex-icon">
                                        <div class="flex-icon-inside">
                                            <i class="fas fa-link"></i>
                                        </div>
                                  </div>
                                </div>
                            </a>
                            <div class="post-categories">
                               <p>Agency, Consulting</p>
                            </div>
                        </div>

                        <div class="post-details">
                            <h3 class="post-name">
                                <a href="post/top-6-articles-you-must-read-today-niva.html" title="Buld your website with Venor CMS">Buld your website with Venor CMS</a>
                            </h3>
                            <div class="post-category-comment-date">
                               <span class="post-date"><i class="far fa-clock"></i> 13.Mar.2021</span>
                               <span class="post-author">
                               <i class="far fa-user" ></i>
                               <a href="#0">Elisabeth Doe</a>
                               </span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="blog-single-post">
                    <div class="blog_custom">

                        <div class="post-thumbnail">
                            <a class="relative" href="post/tech-designer-john-does-latest-creation.html">
                                <div class="featured_image_blog">
                                    <img class="lazy blog_post_image img-fluid" width="350" height="300" src="../cdn.dribbble.com/users/105033/screenshots/1132714/loading-animation-800.gif" data-src="{{ asset('frontend/images/media/1622298385post2.jpg') }}" alt="Tech designer John Doe&#039;s latest design">
                                    <div class="flex-icon">
                                        <div class="flex-icon-inside">
                                            <i class="fas fa-link"></i>
                                        </div>
                                  </div>
                                </div>
                            </a>
                            <div class="post-categories">
                               <p>Design, UI/UX</p>
                            </div>
                        </div>

                        <div class="post-details">
                            <h3 class="post-name">
                                <a href="post/tech-designer-john-does-latest-creation.html" title="Tech designer John Doe&#039;s latest design">Tech designer John Doe&#039;s latest design</a>
                            </h3>
                            <div class="post-category-comment-date">
                               <span class="post-date"><i class="far fa-clock"></i> 13.Mar.2021</span>
                               <span class="post-author">
                               <i class="far fa-user" ></i>
                               <a href="#0">Elisabeth Doe</a>
                               </span>
                            </div>


                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

</div>

<div class="typed-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                    <h4 class="parent-typed-text">
                    <span class="mt_typed-beforetext">Are you looking for </span>
                        <span class="mt_typed_text"></span>
                    </h4>
            </div>
            <div class="col-md-4 text-right">
                <a href="contact.html" target="_self" class="btn btn-style1"><span>Contact</span></a>
            </div>
        </div>
    </div>
</div>

@endsection
