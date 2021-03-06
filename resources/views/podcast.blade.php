<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>podcast</title>
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/general.css')}}">

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
            <a href="./contact.html" class="contact-btn">contact</a>
        </div>
    </header>
<!-- end of the header section -->
    <section class="podcast-landpage">

        <div class="podcast-land-img-container">
            <div class="microphone-container for-landpage">
                <img src="{{asset('data/images/mic2-removebg-preview.png')}}" alt="" class="micro-phone">
            </div>
            <img src="{{asset('data/images/vc.jpeg')}}" alt="" class="podcast-land-img">
        </div>
        <div class="audio-section">
            <h1>audio:how to create a good relationship with god</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat enim, mollitia suscipit soluta debitis consequuntur ex! Fugiat quos ab eos,
                pariatur facere ipsa! Expedita enim ipsam nobis quisquam et est!
            </p>
            <div class="audio-container">
                <audio src="{{asset('data/images/ka-anyi-na-ayo.mp3')}}" controls></audio>
                <div class="social-media">
                    <p>watch video version on:</p> <a href="#"><img src="{{asset('data/images/fb.png')}}" alt="" class="icon"></a>
                    <a href="#"><img src="{{asset('data/images/youtube.png')}}" alt="" class="icon"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="about-podcast">
        <h1 class="about-podcast-head">about the podcast <br><span class="line"></span></h1>
        <p class="podcast-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem esse
            dicta distinctio accusantium modi consequatur quidem? Repudiandae alias
            voluptate aperiam, ipsum nam recusandae aliquam quos! Quaerat at suscipit
             doloribus doloremque odio,
             blanditiis sit, quasi perspiciatis a culpa harum minima voluptate!
        </p>
        <div class="about-podcast-card-container">
            <div class="about-podcast-card">
                <div class="podcast-profile">
                    <img src="{{asset("data/images/pastor5.png")}}" alt="" class="podcast-profile-img">
                    <h1>pastor E.A adeboye</h1>
                    <p class="podcast-date">8th august 2022</p>
                    <div class="podcast-icon-container">
                        <a href="#"><img src="{{asset("data/images/black fb.png")}}" alt="" class="icon"></a>
                        <a href="#"><img src="{{asset("data/images/black twitter.png")}}" alt="" class="icon"></a>
                        <a href="#"><img src="{{asset("data/images/black mail.png")}}" alt="" class="icon"></a>
                    </div>
                </div>
                <p class="podcast-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt pariatur,
                     maxime sunt earum, eligendi tempore distinctio, officia doloribus molestiae debitis
                     necessitatibus.
                    Laudantium dolorum deserunt sunt eius suscipit magnam aliquid cupiditate?
                </p>
            </div>
        </div>
    </section>
    <section class="recent-podcast-section">
        <div class="recent-postcast-header">
            <h1>recent poscasts</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, quos!</p>
        </div>
        <div class="podcast-card-container">
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="{{asset('data/images/mic2-removebg-preview.png')}}" alt="" class="micro-phone">
                </div>
                <img src="{{asset('data/images/preacher.jpeg')}}" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
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
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="{{asset('data/images/mic2-removebg-preview.png')}}" alt="" class="micro-phone">
                </div>
                <img src="{{asset('data/images/preacher2.jpeg')}}" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
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
            <div class="recent-podcard">
                <div class="microphone-container">
                    <img src="{{asset('data/images/mic2-removebg-preview.png')}}" alt="" class="micro-phone">
                </div>
                <img src="{{asset('data/images/pastor3.jpeg')}}" alt="" class="recent-podcast-img">
                <div class="recent-podcast-body">
                    <h1>importance of god in us</h1>
                    <p>god is our father, who is in heaven, heprotects us from danger
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <div class="recent-podcast-icon-container">
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
    <script src=".{{asset('data/js/main.js')}}"></script>
</body>
</html>
