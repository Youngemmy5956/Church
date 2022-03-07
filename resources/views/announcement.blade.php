<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>announcement</title>
    <link rel="stylesheet" href="{{asset(data/css/general.css)}}">
    <link rel="stylesheet" href="{{asset(data/css/announcement.css)}}">
</head>
<body>
    <!-- this is the header section that contains the logo and the navigation bars   -->
    <header >
        <!-- this is the logo container -->
        <div class="logo-container">
            <img src="{{asset(data/images/images__10_-removebg-preview.png)}}" alt="" class="logo">
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
        <!-- this is the navigation sidebar for the mobile view -->

        <div class="menu-list" id="menu-items">
            <div class="menu-list-login">
                 <img src="{{asset('data/images/1193.png')}}" alt=""  id="close-sidebar" class="close-btn">
            </div>
            <ul class="list-items">
                <li><a href="{{route("home")}}">home <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"> </a ></li>
                 <li><a href="{{route("contact")}}">contact  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                  <li><a href="{{route("podcast")}}">podcast  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("about")}}">about <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("announcement")}}">announcement  <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
                 <li><a href="{{route("service")}}">service <img src="{{asset('data/images/arrow-24-xxl.png')}}" alt="" class="arrow"></a></li>
             </ul>
        </div>
        <!-- this is the code for the hamburger menu in the mobile view -->

        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <div class="login-container">
            <a href="{{route("contact")}}" class="contact-btn">contact</a>
        </div>
    </header>
        <!-- this is the code for the hamburger menu in the mobile view -->
        <section class="about-podcast">
            <h1 class="about-podcast-head">announcement <span class="line"></span></h1>
            <div class="about-podcast-card-container ">
                <div class="about-podcast-card for-announcement-page">
                    <div class="podcast-profile announce-card">
                        <img src="{{asset('data/images/congregation.jpeg')}}" alt="" class="announce-land-img">
                    </div>
                    <div class="podcast-text">
                        <h2>praise the lord</h2>
                        <h1>let the people of the lord, praise the lord</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt pariatur,
                            maxime sunt earum, eligendi tempore distinctio, officia doloribus molestiae debitis
                            necessitatibus.
                            Laudantium dolorum deserunt sunt eius suscipit magnam aliquid cupiditate?
                        </p>
                        <div class="podcast-icon-container">
                            <a href="#"><img src="{{asset('data/images/black fb.png')}}" alt="" class="icon"></a>
                            <a href="#"><img src="{{asset('data/images/black twitter.png')}}" alt="" class="icon"></a>
                            <a href="#"><img src="{{asset('data/images/black mail.png')}}" alt="" class="icon"></a>
                        </div>
                        <div class="recent-podcast-icon-container">
                            <button class="learn-more">
                                <span class="circle" aria-hidden="true">
                                <span class="icon arrow"></span>
                                </span>
                                <span class="button-text">Learn More</span>
                              </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-announcement-section">
            <div class="announcement-header">
                <h1>all announcements</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, unde!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, aliquam.
                </p>
            </div>
            <div class="all-announcement-card-container">
               <div class="announcemnt-card">
                   <h1>our weekly announcement</h1>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Ex illo maxime explicabo, rem architecto odit provident,
                        obcaecati nobis omnis distinctio molestiae repudiandae dignissimos exercitationem
                        et error, asperiores esse pariatur.
                    </p>
                    <div class="recent-podcast-icon-container  announcement-readmore">
                        <button class="learn-more">
                            <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                            </span>
                            <span class="button-text">Learn More</span>
                          </button>
                    </div>
               </div>
               <div class="announcemnt-card">
                <h1>our weekly announcement</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ex illo maxime explicabo, rem architecto odit provident,
                     obcaecati nobis omnis distinctio molestiae repudiandae dignissimos exercitationem
                     et error, asperiores esse pariatur.
                 </p>
                 <div class="recent-podcast-icon-container announcement-readmore">
                     <button class="learn-more">
                         <span class="circle" aria-hidden="true">
                         <span class="icon arrow"></span>
                         </span>
                         <span class="button-text">Learn More</span>
                       </button>
                 </div>
            </div>
            <div class="announcemnt-card">
                <h1>our weekly announcement</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ex illo maxime explicabo, rem architecto odit provident,
                     obcaecati nobis omnis distinctio molestiae repudiandae dignissimos exercitationem
                     et error, asperiores esse pariatur.
                 </p>
                 <div class="recent-podcast-icon-container  announcement-readmore">
                     <button class="learn-more">
                         <span class="circle" aria-hidden="true">
                         <span class="icon arrow"></span>
                         </span>
                         <span class="button-text">Learn More</span>
                       </button>
                 </div>
            </div>
            </div>
        </section>
        <section class="recent-podcast-section">
            <div class="recent-postcast-header">
                <h1>recent annoncements</h1>
            </div>
            <div class="podcast-card-container">
                <div class="recent-podcard">
                    <!-- <img src="../images/microphone-removebg-preview.png" alt="" class="micro-phone"> -->
                    <img src="{{asset('data/images/reading girl.jpeg')}}" alt="" class="recent-podcast-img">
                    <div class="recent-podcast-body">
                        <h1>importance of god in us</h1>
                        <p>god is our father, who is in heaven, heprotects us from danger
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                            <div class="recent-podcast-icon-container">
                                <button class="learn-more">
                                    <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Learn More</span>
                                  </button>
                            </div>
                    </div>
                </div>
                <div class="recent-podcard">
                    <!-- <img src="../images/microphone-removebg-preview.png" alt="" class="micro-phone"> -->
                    <img src="{{asset('data/images/relef.jpeg')}}" alt="" class="recent-podcast-img">
                    <div class="recent-podcast-body">
                        <h1>importance of god in us</h1>
                        <p>god is our father, who is in heaven, heprotects us from danger
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                            <div class="recent-podcast-icon-container">
                                <button class="learn-more">
                                    <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Learn More</span>
                                  </button>
                            </div>
                    </div>
                </div>
                <div class="recent-podcard">
                    <!-- <img src="../images/microphone-removebg-preview.png" alt="" class="micro-phone"> -->
                    <img src="{{asset('data/images/nigerian map.jpeg')}}" alt="" class="recent-podcast-img">
                    <div class="recent-podcast-body">
                        <h1>importance of god in us</h1>
                        <p>god is our father, who is in heaven, heprotects us from danger
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                            <div class="recent-podcast-icon-container">
                                <button class="learn-more">
                                    <span class="circle" aria-hidden="true">
                                    <span class="icon arrow"></span>
                                    </span>
                                    <span class="button-text">Learn More</span>
                                  </button>
                            </div>
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
    <script src="{{asset(data/js/main.js)}}"></script>
</body>
</html>
