@extends('frontend.layouts.app')
@section('content')
<div class="main">
    <div class="hero">
       
        <div class="hero-img">
            <div class="header">

                <div class="hamburger-menu">
                    <input id="menu__toggle" type="checkbox" />
                    <label class="menu__btn" for="menu__toggle">
                      <span></span>
                    </label>
                
                    <ul class="menu__box">
                            <li><a class="menu__item home" href="#">Home</a></li>
                    </ul>
                </div>
                <!-- <div class="logo">
                    <img class="logo_img" src="{{asset('public/asset/img/outerspace_logo.png')}}" alt="">
                </div> -->
        
                <!-- <div class="nav icons">
                    <a href="#"><i class="fa-regular fa-user"></i></a>
                    <a href="#"> <i class="fas fa-shopping-cart"></i></a> 
                    <a href="#"> <i class="fas fa-search"></i></a>
                </div> -->
            </div>
            <!--hero image goes here-->
            
        </div>
    </div>

    <div class="clothe_section">
        <h3>
            JUST IN
        </h3>
        <a  class="shop_all" href="#">SHOP ALL</a>

        <div class="clothes">
            @foreach ($products as $product)
            <div class="apparel">
                <img class="apparel_image" src="{{asset('public/dist/img/products/'.$product->image)}}" alt="">
                <img class="overlay_image" src="{{asset('public/dist/img/products/sample/'.$product->sample_image)}}" alt="">
                <div class="prod_details">
                    <h4>{{$product->name}}</h4>
                    <p class="price">
                        <Span class="prod_price">${{$product->price}}</Span>
                        <Span><a class="buy" href="#"><b>Buy me</b></a></Span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <div class="slider_div">
     @foreach ($banners as $banner)
        <div class="second_slide slider_1">
            <h5 class="slider_text">{{$banner->title}}</h5>

           <h1 class="slider_text">{{$banner->title}}</h1>
           <P class="slider_text">
           {{$banner->description}}
           </P>

           <button class="shop_now" >
            SHOP NOW 
           </button>
        </div>
     @endforeach

        <section class="container">
            <div class="slider-wrapper">
                <div class="slider">
                @foreach ($banners as $banner)
                    <img class="slide_img"  src="{{asset('public/dist/img/banners/'.$banner->image)}}" width="100" alt="" />
                @endforeach
                </div>
                <!-- <div class="slider-nav">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                    <a href="#slide-4"></a>
                </div> -->
            </div>
        </section>
    </div>

    <!-- <div class="gallery">
        <div class="promo-container">
            <div class="promo">
                <a href="#"><p>PROMOTIONS</p></a>
            </div>
            <div class="new-arrivals">
                <a href="#"><p>NEW ARRIVALS</p></a>
            </div>
        </div>
    </div> -->
    <div>
    <br><br><br>
    </div>

    <div class="gallery-container">
        <div class="gallery-section full-width" id="gallery1_div">
            <img class="gallery-image" id="gallery1" src="{{asset('public/asset/img/gallery1.jpg')}}" alt="">
        </div>
        <div>
             <br><br><br>
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('public/asset/img/gallery2.jpg')}}" alt="">
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('public/asset/img/gallery3.jpg')}}" alt="">
        </div>
        <div class="gallery-section">
            <img class="gallery-image" src="{{asset('public/asset/img/gallery4.jpg')}}" alt="">
            <a class="gallery_desc" href="#">Baseball Caps</a>
        </div>
        <div class="gallery-section2">
            <img class="gallery-image2" src="{{asset('public/asset/img/gallery5.jpg')}}" alt="">
            <a class="gallery_desc" href="#">COOKIES</a>
        </div>
        <div class="gallery-section2">
            <img class="gallery-image2" src="{{asset('public/asset/img/gallery6.jpg')}}" alt="">
            <a class="gallery_desc" href="#">TOTE BAG</a>
        </div>
    </div>


    <div class="pre_footer">
        <div class="info_container">

            
            <div class="container gift_card">
                <div class="giftcard_icon">
                    <img src="{{asset('public/asset/img/gift_card.svg')}}" alt="">
                </div>
                <div class="gitcard_details">
                    <h2>
                        GIFT CARD
                    </h2>
                    <P>
                        Don’t know their size or favorite color? No need to worry – give 
                        them a Gift card and let them decide.
                    </P>
                    <a href="#">Get a gift card</a>
                </div>

            </div>


            <div class="container">
                <div class="custom-icon">
                    <i class=" icon fas fa-money-check-alt fa-5x"></i>
                </div>
                <h2>
                    14 DAYS RETURN
                </h2>
                <P>
                    You have 14 days to change your mind and 
                    return the item. 
                    No questions asked!
                </P>
                

            </div>


            <div class="container delivery">
                <div class="delivery-icon">
                    <i class=" icon fas fa-shopping-cart fa-5x"></i>
                </div>
                <h2>
                    Worldwide Delivery
                </h2>
                <P>
                    We deliver order to all countries at $1,000 R delivery. Receive your order within 3 to 5 working days.
                    <br>
                    <br>
                    Yes, we ship to Ghana!
                </P>
                

            </div>

        </div>
            <!-- <div class="mail_list">
                <h1>
                    GET 10% OFF
                </h1>
                <P>
                    Get 10% off your first purchase by joining our mailing list,
                    <br> 
                    and receive some of the best deals possible.
                </P>

                <form action="#">
                    <input type="text" id="email" name="email" placeholder="email address">
                    <input type="submit" value="JOIN NOW">
                </form>
                

                <div class="social_container">
                    <h5 class="socials">FOLLOW US</h5>
                    <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div> -->
    </div> 
    <div class="footer">
        <div class=" footer_div location">
            <p>
                <i class="fas fa-map-marker"></i>
                Ostro Tower, E14 9ZP
                <br>
                United Kingdom
            </p>

            <div class="footer_social_container">
                
                <a href="#"><i class="fab fa-facebook "></i></a>
                <a href="#"><i class="fab fa-instagram "></i></a>
            </div>
            <p>
                Yes, we ship to Worldwide
            </p>

        </div>
        <div class="footer_div contact">
            <p class=" ">
                admin@outterspaceluxury.com
                <br>
                +2349090386641
            </p>
        </div>
        <div class="footer_div category">
            <h4>
                SHOP
            </h4>
            
                <li><a href="#">Men</a></li>
                <li><a href="#">Hats</a></li>
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Women</a></li>
            
        </div>
        <!-- <div class="footer_div help">
            <h4>
                HELP
            </h4>
            
                <li><a href="#">Refund and Returns Policy</a></li>
                <li><a href="#">Hats</a></li>
                <li><a href="#">T-Shirts</a></li>
            
        </div>
        <div class="footer_div about">
            <h4>
                ABOUT
            </h4>
            
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">My account</a></li>
            

        </div> -->
    </div>

    <div class="payments">
        <hr>
        
        <p>
            © Outterspace Luxury 2023. All rights reserved.
        </p>
        <!-- <h5>
            Secure Payments
        </h5> -->

        <!-- <div class="payment_container">
                

            <div class="visa">
                <img src="img/visa-pay-logo.svg" alt="">
            </div>
            <div class="paypal">
                <img src="img/paypal-logo.svg" alt="">
            </div>
            <div class="mastercard">
                <img src="img/master-card-logo.svg" alt="">
            </div>
            <div class="gpay">
                <img src="img/gpay-logo.svg" alt="">
            </div>
            <div class="applepay">
                <img src="img/applepay.svg" alt="">
            </div>
            <div class="amex">
                <img src="img/american-express-logo.svg" alt="">
            </div>
        </div> -->
    </div>
</div>
@endsection