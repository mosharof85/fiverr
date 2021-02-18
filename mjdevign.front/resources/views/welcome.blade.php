@extends('layouts.combineHeaderFooter')


@section('content')
    <section class="sec-hero">
        <div class="hero-left"></div>
        <div class="section-container">
            <div class="left">
                <div class="left-container">
                    <h4 class="f-montserratMedium text-18px mb-20">MJ Devign - Grow Your Business Today!</h4>
                    <h1 class="title text-white mb-20"><span class="one">Digital Design &</span><span class="two">Development Agency</span></h1>
                    <p class="text-white mb-50 lineheight1">
                        We are a Sydney based digital design & development agency here to provide you with quality and affordable services. Our goal is your satisfaction and we are here to work with you every step of the way!
                        <!--                    <img src="main/images/others/index/Main.png" alt="" class="main">-->
                    </p>
                    <div class="buttons">
                        <a href="#" class="btn-price mr-10 text-15px f-montserratMedium">Pricing</a>
                        <a href="#" class="btn-start text-15px f-montserratMedium">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="img-wrapper">
                    <!--                <img src="main/images/others/index/Main.png" alt="" class="main">-->
                </div>
                <img src="main/images/others/landingpage/circle-shape.png" alt="" class="circle">
                <img src="main/images/others/landingpage/triangle-shape2.png" alt="" class="triangle2">
                <img src="main/images/others/landingpage/tringle-shape.png" alt="" class="triangle">
            </div>
        </div>
    </section>

    <section class="sec-info">
        <div class="section-container">
            <div class="left">
                <div class="img-wrapper">
                    <img src="main/images/info.png" alt="" class="">
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <div class="text-red text-18px text-600 mb-20">MJ Devign - Design & Development Agency</div>
                    <div class="f-montserrat text-700 text-38px mb-30 heading">Website Design &<br>Development</div>
                    <div class="red-border mb-20"></div>
                    <div class="content text-black2 text-15px text-400">
                        <p class="mb-30 lineheight2">Having a website to establish your online presence is a critical element in today's modern world that drives opportunity, growth and success.</p>
                        <p class="mb-30 lineheight2">Whether you're a business, entrepreneur, organisation or individual with an idea or project, we are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                        <p class="mb-30 lineheight2">During your experience with us, we work with you on an individual level to help guide and facilitate the process, no matter what your level of technical knowledge is. The daunting idea of having and managing your very own website will be a thought of the past!</p>
                    </div>
                    <img src="main/images/info.png" alt="" class="img-fluid mobile-img">
                    <div class="list">
                        <div class="list-item"><a href="main/website.html"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Website Development</span></a></div>
                        <div class="list-item"><a href="main/dropshipping.html"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Dropshipping Store</span></a></div>
                        <div class="list-item"><a href="main/landingpage.html"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Landing Page</span></a></div>
                        <div class="list-item"><a href="main/mobileapp.html"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Mobile App</span></a></div>
                        <div class="list-item"><a href="main/webapp.html"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Web Application</span></a></div>
                        <div class="list-item"><a href="#"><img src="main/images/listicon.png" alt=""><span class="text-black2 text-700 text-14px f-montserrat">Website Renovation</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-services">
        <div class="heading flex-column section-container">
            <p class="text-red text-18px text-600 mb-20">Website Design & Development</p>
            <p class="title mb-20">Services We Offer</p>
            <div class="red-border mb-20"></div>
            <p class="text-16px text-400 text-black2 mb-20">Getting your website up and running couldn't be easier with MJ Digital Development Agency.</p>
        </div>
        <div class="section-container services">
            <div class="service">
                <img src="main/images/others/index/service1.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Website Development</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/website-page">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service2.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Dropshipping Store</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/dropshipping-page">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service3.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Landing Page</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/landingpage-page">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service4.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Mobile App</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/mobileapp-page">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service5.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Web Application</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="/webapp-page">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
            <div class="service">
                <img src="main/images/others/index/service6.png" alt="">
                <p class="mt-20 mb-20 f-montserratMedium2 text-18px text-600 text-black1">Website Renovation</p>
                <p class="text-black2 text-15px lineheight1">We are here to develop your vision into reality ready for your big debut onto the world wide web!</p>
                <a href="#">Check it out <img src="main/images/others/index/arrow.png" alt=""></a>
            </div>
        </div>
    </section>

    <section class="sec-newyear">
        <div class="section-container">
            <div class="left">
                <img src="main/images/sec-newyear/sale-promotion.png" alt="">
            </div>
            <div class="right">
                <div class="right-content">
                    <div class="right-text1 f-montserratMedium text-white text-700 text-22px">Promo Code:</div>
                    <div class="right-text2 f-montserratMedium text-white text-700 text-22px">MJDevign</div>
                    <div class="right-text3 text-white">Enter the promo code during checkout.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-faq">
        <div class="section-container">
            <p class="text-red text-18px text-600 mb-10">FAQ</p>
            <p class="f-montserrat text-38px text-700 mb-20 heading">Frequently Asked Questions</p>
            <div class="red-border" style="margin-bottom: 55px;"></div>
            <div class="faq">
                <div class="left side">
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-receipt"></span>
                            <p>Which license do I need?</p>
                        </div>
                        <div class="item-a">
                            Uniquely leverage other's distinctive infomediaries rather than leveraged supply chains. Continually seize distributed collaboration and idea-sharing whereas user.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-gallery"></span>
                            <p>How do I get access to a theme?</p>
                        </div>
                        <div class="item-a">
                            Rapidiously incentivize virtual e-commerce and exceptional e-tailers. Progressively network focused catalysts for change without orthogonal benefits. Dramatically empower.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-wallet"></span>
                            <p>How do I see previous orders?</p>
                        </div>
                        <div class="item-a">
                            Proactively monetize long-term high-impact innovation and scalable relationships. Dynamically mesh principle-centered functionalities before next-generation best practices. Distinctively empower.
                        </div>
                    </div>
                </div>
                <div class="right side">
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-receipt"></span>
                            <p>Which license do I need?</p>
                        </div>
                        <div class="item-a">
                            Uniquely leverage other's distinctive infomediaries rather than leveraged supply chains. Continually seize distributed collaboration and idea-sharing whereas user.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-gallery"></span>
                            <p>How do I get access to a theme?</p>
                        </div>
                        <div class="item-a">
                            Rapidiously incentivize virtual e-commerce and exceptional e-tailers. Progressively network focused catalysts for change without orthogonal benefits. Dramatically empower.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-q">
                            <span class="ti-wallet"></span>
                            <p>How do I see previous orders?</p>
                        </div>
                        <div class="item-a">
                            Proactively monetize long-term high-impact innovation and scalable relationships. Dynamically mesh principle-centered functionalities before next-generation best practices. Distinctively empower.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-support">
        <div class="section-container">
            <div class="left">
                <img src="main/images/customer-service.png" alt="">
            </div>
            <div class="right">
                <div class="content">
                    <p class="line1">Can't find what you're looking for?</p>
                    <p class="line2 text-black3">Contact us - we will respond as soon as possible.</p>
                </div>
                <a href="#" class="btn-contact">Contact Us</a>
            </div>
        </div>
    </section>
@endsection
