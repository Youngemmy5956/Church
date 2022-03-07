<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/contact.css')}}">
</head>
<body>
        <!-- this is the header section that contains the logo and the navigation bars   -->
        <header >
            <!-- this is the logo container -->
            <div class="logo-container">
                <img src="{{asset('data/images/images__10_-removebg-preview.png')}}" alt="" class="logo">
            </div>

            <!-- this is the navigation bar  for the destop view -->
            <nav class="navbar">

                <ul class="navlist">
                    <li class="tab">
                        <!-- these are the navbar links to different pages -->
                        <a href="{{route("index")}}" class="link">home</a>
                    </li>
                    <li class="tab">
                        <a href="{{route("service")}}l" class="link">services</a>
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
                     <img src="../images/1193.png" alt=""  id="close-sidebar" class="close-btn">
                </div>
             <ul class="list-items">
                <li><a href="{{route("index")}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
                 <li><a href="{{route("contact")}}l">contact  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
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
    <section class="contact-landpage">
        <!-- this is the contact for container  -->
        <div class="form-container">
            <div class="contact-header">
                <h1>contact us</h1>
                <span class="line"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                     Recusandae maxime magnam dolor vitae ipsa accusamus deleniti assumenda nulla ea officia?
                </p>
               <!-- this is the contact us form  -->
                <form action="" class="comment-form">
                    <input type="email" name="" id="" placeholder="enter your email">
                    <textarea name="" id="" cols="30" rows="10" placeholder="your text goes here">

                    </textarea>
                    <button class="send-btn">
                        <div class="svg-wrapper-1">
                          <div class="svg-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                              <path fill="none" d="M0 0h24v24H0z"></path>
                              <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                            </svg>
                          </div>
                        </div>
                        <span>Send</span>
                      </button>
                </form>
            </div>
        </div>
        <!-- this is where the google map api comes  -->
        <div class="location-map-container">
            <!-- just a demo img here -->
            <img src="{{asset('data/images/map.jpg')}}" alt="" class="location-map">
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
    <script src="{{asset(data/js/main.js)}}"></script>
</body>
</html>
