<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="{{asset('data/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/about.css')}}">
</head>
<body>
    <!-- this is the header section that contains the logo and the navigation bars   -->
    <header >
        <!-- this is the logo container -->
        <div class="logo-container">
            <img src="{{asset('data/images/Frame.png')}}" alt="" class="logo">
        </div>

        <!-- this is the navigation bar  for the destop view -->
        <nav class="navbar">

            <ul class="navlist">
                <li class="tab">
                    <!-- these are the navbar links to different pages -->
                    <a href="{{route("index")}}" class="link">home</a>
                </li>
                <li class="tab">
                    <a href="{{route("service")}}" class="link">services</a>
                </li>
                <li class="tab">
                    <a href="{{route("podcast")}}" class="link">podcast</a>
                </li>
                <li class="tab">
                    <a href="{{route("about")}}" class="link">about</a>
                </li>
                <li class="tab">
                    <a href="{{route("announcement")}}" class="link">announcements</a>
                </li>
            </ul>
        </nav>
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/1193.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li><a href="{{route("index")}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
                 <li><a href="{{route("contact")}}">contact  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                  <li><a href="{{route("podcast")}}">podcast  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("about")}}">about <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("announcement")}}">announcement  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("service")}}">service <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->


        <div class="login-container">
            <a href="{{route("contact")}}" class="contact-btn">contact</a>
        </div>
    </header>
<!-- end of the header section -->

<!-- this section is the about landpage  -->
<section class="service-landpage landpage-card">
    <div class="announcement-card">
            {{-- <h2>about us</h2> --}}
            <h1>Gethsemane Catholic Evangelical Outreach</h1>
            <div class="about-link-container">
                <a href="{{route("contact")}}" class="contact-btn know-us">
                    know us better!
                </a>
            </div>
    </div>
</section>

<!-- end of about landpage  -->

<!-- this is the aboutus details  -->
<section class="lead-with-love-section">
    <!-- this is the about us text  -->
    <div class="lead-with-love-text">
        <h1>about us</h1>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quod laudantium necessitatibus ipsum molestiae?
            Modi quisquam nesciunt sed autem repellendus nulla.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, magnam.

        </P>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quod laudantium necessitatibus ipsum molestiae?
            Modi quisquam nesciunt sed autem repellendus nulla.
        </p>
    </div>
    <!-- this leader card section contains about cards  -->
    <div class="leaders-card-container">

        <!-- this is about card 1 -->
        <div class="leader-card">
            <img src="{{asset('data/images/right-arrow.png')}}" alt="">
            <h1>OUR MISSION</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Quod laudantium necessitatibus ipsum molestiae?
            Modi quisquam nesciunt sed autem repellendus nulla.
            </P>
        </div>
        <!-- about card 2 -->
        <div class="leader-card bigger">
            <img src="{{asset('data/images/right-arrow.png')}}" alt="">
            <h1 class="bigger-text">PURPOSE OF THIS CHANNEL</h1>
            <P class="bigger-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quod laudantium necessitatibus ipsum molestiae?
                Modi quisquam nesciunt sed autem repellendus nulla.
            </P>
        </div>
        <!-- about card 3 -->
        <div class="leader-card">
            <img src="{{asset('data/images/right-arrow.png')}}" alt="">
            <h1>OUR VISION</h1>
            <P>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quod laudantium necessitatibus ipsum molestiae?
                Modi quisquam nesciunt sed autem repellendus nulla.
            </P>
        </div>
    </div>
</section>
<!-- this is the help section -->
<section class="help-section">
    <div class="overlay">
        <!-- this is the help card 1 -->
        <div class="help-card-container">
            <div class="help-card">
                <img src="{{asset('data/images/twitter.png')}}" alt="" class="help-img">
                <h1>be your brother's keeper</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                    quasi unde nobis nam ratione! Aspernatur
                    nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                </p>
            </div>
            <!-- this is the help card 2 -->
            <div class="help-card">
                <img src="{{asset('data/images/images__10_-removebg-preview.png')}}" alt="" class="help-img">
                <h1>be your brother's keeper</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                    quasi unde nobis nam ratione! Aspernatur
                    nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                </p>
            </div>
            <!-- this is the help card 2 -->
            <div class="help-card">
                <img src="{{asset('data/images/right-arrow.png')}}" alt="" class="help-img">
                <h1>be your brother's keeper</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                    quasi unde nobis nam ratione! Aspernatur
                    nesciunt porro sint veritatis nulla est rem natus maiores suscipit.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- footer section -->
<footer>
    <!-- first division -->
    <div class="foot1">
        <h2>contact me</h2>
            <li > <a href="#" class="foot-1-links"> @emmanula/twitter.com</a></li>
            <li > <a href="#"  class="foot-1-links">www.google.com</a></li>
            <li ><a href="#"  class="foot-1-links">+234 7042244539</a></li>
    </div>

    <!-- second division  -->
    <div class="foot1">
        <h2>useful links</h2>
        <ul class="foot-list">
            <li>
                <a href="#">home</a>
            </li>
            <li>
                <a href="#">about</a>
            </li>
            <li>
                <a href="#">blog</a>
            </li>
            <li>
                <a href="#">contact</a>
            </li>
        </ul>
        <div class="social-media-handle">
            <img src="{{asset('data/images/black fb.png')}}" alt="" class="social-icon">
            <img src="{{asset('data/images/black insta.png')}}" alt="" class="social-icon">
            <img src="{{asset('data/images/black mail.png')}}" alt="" class="social-icon">
            <img src="{{asset('data/images/black twitter.png')}}" alt="" class="social-icon">
            <img src="{{asset('data/images/black whatsapp.png')}}" alt="" class="social-icon">
        </div>
    </div>
    <!-- 3rd division  -->

    <div class="foot1">
        <p>
        <h2>newsletter</h2>
           <p> Consequuntur neque excepturi debitis hic quasi labore amet
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deserunt.
        </p>
        <form action="" class="footer-form">
            <input type="email" name="" id="" placeholder="enter your email" class="input">
            <button class="learn-more-btn"> submit
            </button>
        </form>
    </div>
</footer>
<script src="{{asset('data/js/main.js')}}"></script>
</body>
</html>
