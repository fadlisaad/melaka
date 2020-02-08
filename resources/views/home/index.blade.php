@extends('layouts.master')
@section('content')
    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="home/images/photoswipe/slide.jpg" data-natural-width=2400 data-natural-height=853 data-position-y=right>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">
                <h1>Your bills at your finger tips</h1>

                <p>Pay your bills to any of your favourite participating agencies right here.</p>
            </div> <!-- end home-content__main -->

        </div> <!-- end home-content -->

        <ul class="home-sidelinks">
            <li><a class="smoothscroll" href="#about">About<span>who we are</span></a></li>
            <li><a class="smoothscroll" href="#services">Register<span>what we do</span></a></li>
            <li><a  class="smoothscroll" href="#contact">Contact<span>get in touch</span></a></li>
        </ul> <!-- end home-sidelinks -->

        <ul class="home-social">
            <li><a href="/user/login" class="btn btn--primary">Login</a></li>
            <li><a href="/user/register" class="btn">Register</a></li>
        </ul> <!-- end home-social -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll Down</span>
            <span class="home-scroll__icon"></span>
        </a> <!-- end home-scroll -->
    </section> <!-- end s-home -->

    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Who We Are</h3>
                <h1 class="display-1">E-BAYAR KERAJAAN NEGERI MELAKA portal is a one stop centre which provides electronic billing and payment services for Melaka citizens. </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">Register now and enjoy the convenience of paying your bills through Melaka e-Bayar portal, your one stop center for bills and payment.</p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row">
                
            <div class="about-process process block-1-2 block-tab-full">

                <div class="process__vline-left"></div>
                <div class="process__vline-right"></div>

                <div class="col-block process__col" data-item="1" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Define</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="2" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Design</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="3" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Build</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>
                <div class="col-block process__col" data-item="4" data-aos="fade-up">
                    <div class="process__text">
                        <h4>Launch</h4>

                        <p>
                        Quos dolores saepe mollitia deserunt accusamus autem reprehenderit. Voluptas facere animi explicabo non quis magni recusandae. 
                        Numquam debitis pariatur omnis facere unde. Laboriosam minus amet nesciunt est. Et saepe eos maxime tempore quasi deserunt ab.
                        </p>
                    </div>
                </div>

            </div> <!-- end process -->

        </div> <!-- end about-stats -->
    </section> <!-- end s-about -->

    <!-- services
    ================================================== -->
    <section id='services' class="s-services light-gray">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-1">We have everything you need to launch and grow a successful digital business.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row" data-aos="fade-up">
            <div class="col-full">
                <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <div class="row services-list block-1-3 block-m-1-2 block-tab-full">

            <div class="col-block service-item " data-aos="fade-up">
                <div class="service-icon service-icon--brand-identity">
                    <i class="icon-tv"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">Brand Identity</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--illustration">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">Illustration</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--web-design">
                    <i class="icon-earth"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h4">Web Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon service-icon--product-strategy">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">Product Strategy</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon  service-icon--ui-design">
                    <i class="icon-window"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">UI/UX Design</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon service-icon--mobile-dev">
                    <i class="icon-lego-block"></i>
                </div>
                <div class="service-text">
                    <h3 class="h4">Mobile Development</h3>
                    <p>Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->
    </section> <!-- end s-services -->

    <!-- works
    ================================================== -->
    <section id='works' class="s-works">
                
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Participating Agencies</h3>
                <h1 class="display-1">These are some of agencies available for payment.</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/cmi.jpg" class="thumb-link" title="PTGNM" data-size="1050x700">
                                <img src="home/images/agency/cmi.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                PTGNM
                            </h3>
                            <p class="item-folio__cat">
                                Pejabat Tanah dan Galian Negeri Melaka
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/bksa.jpg" class="thumb-link" title="BKSA" data-size="1050x700">
                                <img src="home/images/agency/bksa.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                BKSA
                            </h3>
                            <p class="item-folio__cat">
                                Bahagian Kawal Selia Air Melaka
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/mbmb.jpg" class="thumb-link" title="MBMB" data-size="1050x700">
                                <img src="home/images/agency/mbmb.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                MBMB
                            </h3>
                            <p class="item-folio__cat">
                                Majlis Bandaraya Melaka Bersejarah
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/mpag.jpg" class="thumb-link" title="MPAG" data-size="1050x700">
                                <img src="home/images/agency/mpag.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                MPAG
                            </h3>
                            <p class="item-folio__cat">
                                Majlis Perbandaran Alor Gajah
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/mpthj.jpg" class="thumb-link" title="MPHTJ" data-size="1050x700">
                                <img src="home/images/agency/mphtj.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                MPHTJ
                            </h3>
                            <p class="item-folio__cat">
                                Majlis Perbandaran Hang Tuah Jaya
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/mpj.jpg" class="thumb-link" title="MPJ" data-size="1050x700">
                                <img src="home/images/agency/mpj.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                MPJ
                            </h3>
                            <p class="item-folio__cat">
                                Majlis Perbandaran Jasin
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/pdtalorgajah.jpg" class="thumb-link" title="PDT Alor Gajah" data-size="1050x700">
                                <img src="home/images/agency/pdtalorgajah.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                PDT Alor Gajah
                            </h3>
                            <p class="item-folio__cat">
                                Pejabat Daerah dan Tanah Alor Gajah
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/pdtjasin.jpg" class="thumb-link" title="PDT Jasin" data-size="1050x700">
                                <img src="home/images/agency/pdtjasin.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                PTD Jasin
                            </h3>
                            <p class="item-folio__cat">
                                Pejabat Daerah dan Tanah Jasin
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/pdtmelakatengah.jpg" class="thumb-link" title="PDT Melaka Tengah" data-size="1050x700">
                                <img src="home/images/agency/pdtmelakatengah.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                PDT Melaka Tengah
                            </h3>
                            <p class="item-folio__cat">
                                Pejabat Daerah dan Tanah Melaka Tengah
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/cmi.jpg" class="thumb-link" title="Unit Kerajaan Tempatan" data-size="1050x700">
                                <img src="home/images/agency/cmi.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                UKT
                            </h3>
                            <p class="item-folio__cat">
                                Unit Kerajaan Tempatan
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/pzm.jpg" class="thumb-link" title="Pusat Zakat Melaka" data-size="1050x700">
                                <img src="home/images/agency/pzm.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                PZM
                            </h3>
                            <p class="item-folio__cat">
                                Pusat Zakat Melaka
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/samb.jpg" class="thumb-link" title="SAMB" data-size="1050x700">
                                <img src="home/images/agency/samb.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                SAMB
                            </h3>
                            <p class="item-folio__cat">
                                Syarikat Air Melaka Berhad
                            </p>
                        </div>

                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>

                        <span class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class="masonry__brick" data-aos="fade-up">
                    <div class="item-folio">

                        <div class="item-folio__thumb">
                            <a href="home/images/agency/cmi.jpg" class="thumb-link" title="Tabung Pendidikan Melaka" data-size="300x373">
                                <img src="home/images/agency/cmi.jpg" alt="">
                            </a>
                        </div>

                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                TAPEM
                            </h3>
                            <p class="item-folio__cat">
                                Tabung Pendidikan Melaka
                            </p>
                        </div>

                        <a href="https://tapem.melaka.gov.my/main/index.php" class="item-folio__project-link" title="Project link">
                            Official Link
                        </a>

                        <span class="item-folio__caption">
                            <p>The Melaka State Finance and Treasury Department manages matters concerning The Melaka State Finances and preparation of The Annual State Account. The department is headed by Y.B. State Financial Officer who is responsible for the policy structure and the state Budgetary Strategy and to find ways to increase revenue as required by the annual Melaka State Budget</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="h1">What Clients Are Saying.</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="home/images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Qui ipsam temporibus quisquam velMaiores eos cumque distinctio nam accusantium ipsum. 
                        Laudantium quia consequatur molestias delectus culpa facere hic dolores aperiam. Accusantium quos qui praesentium corpori.</p>
                        <div class="testimonials__author">
                            Tim Cook
                            <span>CEO, Apple</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="home/images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Excepturi nam cupiditate culpa doloremque deleniti repellat. Veniam quos repellat voluptas animi adipisci.
                        Nisi eaque consequatur. Quasi voluptas eius distinctio. Atque eos maxime. Qui ipsam temporibus quisquam vel.</p>
                        <div class="testimonials__author">
                            Sundar Pichai
                            <span>CEO, Google</span>
                        </div>
                    </div> <!-- end testimonials__slide -->

                    <div class="testimonials__slide">
                        <img src="home/images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <p>Repellat dignissimos libero. Qui sed at corrupti expedita voluptas odit. Nihil ea quia nesciunt. Ducimus aut sed ipsam.  
                        Autem eaque officia cum exercitationem sunt voluptatum accusamus. Quasi voluptas eius distinctio.</p>
                        <div class="testimonials__author">
                            Satya Nadella
                            <span>CEO, Microsoft</span>
                        </div>
                    </div> <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->
    </section> <!-- end s-works -->

    <!-- stats
    ================================================== -->
    <section id="stats" class="s-stats">

        <div class="row stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">129</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1507</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">108</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">103</div>
                <h5>Happy Clients</h5> 
            </div>

        </div> <!-- end stats -->
    </section> <!-- end s-stats -->
@endsection