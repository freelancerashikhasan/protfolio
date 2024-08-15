<header class="header">
    <div class="header__content__venor">
        <div class="header__logo">
            <a href="index.html" title="Venor CMS Theme">
                <img style="width: 100px; height: auto;"  class="img-fluid logo-front" src="{{ asset('assets/img/logo.png') }}" alt="logo">
            </a>
        </div>

        <form action="https://venor3.lucian.host/search" class="header__search__venor" method="GET">
            <input id="search" type="text" name="term" placeholder="Try wordpress theme" autocomplete="off">
            <button type="submit"><i class="fas fa-search"></i></button>
            <button type="button" class="close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></button>
            <div id="project_list"></div>
        </form>


        <div class="header__menu__venor">


            <ul class="header__nav">



                <li class="header__nav-item"> <a title="Home" class="header__nav-link" href="index.html">Home</a> </li>


                <li class="header__nav-item"> <a title="About us" class="header__nav-link" href="about-us.html">About us</a> </li>

                <li class="header__nav-item dropdown">
                    <a class="header__nav-link dropdown-toggle" href="portfolio.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio
                    </a>
                    <ul class="dropdown-menu header__nav-menu">
                        <li><a href="portfolio.html">Our Projects</a></li>
                        <li><a href="project/niva.html">Niva WordPress Theme</a></li>
                        <li><a href="project/venor.html">Venor WordPress Theme</a></li>
                    </ul>
                </li>
                <li class="header__nav-item"> <a title="Pricing" class="header__nav-link" href="pricing.html">Pricing</a> </li>
                <li class="header__nav-item dropdown">
                    <a class="header__nav-link dropdown-toggle" href="blog.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog
                    </a>
                    <ul class="dropdown-menu header__nav-menu">
                        <li><a href="blog.html">Our recent news</a></li>
                        <li><a href="post/top-6-articles-you-must-read-today-niva.html">Top 6 Articles You Must Read</a></li>
                        <li><a href="post/7-creative-ways-to-boost-your-social-media.html">Top 7 Creative Ways to Boost Your Media</a></li>
                    </ul>

                </li>
                <li class="header__nav-item"> <a title="Contact" class="header__nav-link" href="contact.html">Contact</a> </li>
            </ul>
        </div>

        <div class="header__actions__venor">

            <div class="header__action header__action--search">
                <button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
            </div>

            <div class="header__lang">
                <a class="header__lang-btn" href="#" role="button" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img width="16" height="16" src="{{ asset('frontend/images/media/1618066305united-kingdom.svg') }}" alt="flag">
                    <span>English</span>
                </a>
                <ul class="dropdown-menu header__lang-dropdown" aria-labelledby="dropdownLang">
                    <li><a title="English"  href='index.html'><img width="16" height="16" src="{{ asset('frontend/images/media/1618066305united-kingdom.svg') }}" alt="flag"><span>English</span></a></li>
                    <li><a title="Portuguese"  href='index.html'><img width="16" height="16" src="{{ asset('frontend/images/media/1618066273portugal.svg') }}" alt="flag"><span>Portuguese</span></a></li>
                    <li><a title="عربى"  href='index.html'><img width="16" height="16" src="{{ asset('frontend/images/media/1618065739arabic.svg') }}" alt="flag"><span>عربى</span></a></li>
                </ul>
            </div>

            <div class="header__action header__action--signin">
                <a class="header__action-btn header__action-btn--start-project" href="contact.html">
                    <span>Start a Project</span>
                </a>
            </div>
        </div>

        <button class="header__btn__venor" type="button">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
