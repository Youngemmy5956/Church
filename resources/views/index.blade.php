<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('data/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('data/css/style.css')}}">
    <title>homepage</title>
</head>
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
                    <a href="{{route("podcast")}}" class="link">podcast</a>
                </li>
                <li class="tab">
                    <a href="{{route("about")}}" class="link">about</a>
                </li>
                <li class="tab">
                    <a href="{{route("service")}}" class="link">service</a>
                </li>
                <li class="tab">
                    <a href="{{route("announcement")}}" class="link">annoncements</a>
                </li>
            </ul>
        </nav>
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
        <div class="menu-container" id="menubar">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>

        <div class="login-container">
            <a href="{{route("contact")}}" class="contact-btn">contact</a>
        </div>
    </header>
<!-- end of the header section -->

<body>
    <section class="landpage">
        <!-- this contains the text ov the landpage -->
        <div class="landpage-text-container">
            <h3>welcome to church</h3>
            <h1>become a part of god's family</h1>
            <p>feel the presence of the lord in its fullness with the rest of the family</p>
            <!-- this is the learn more btn container -->
            <div class="landpage-btn-container">
                <!-- learn more btn -->
                <button class="learn-more-btn"> learn more
                </button>
            </div>
        </div>
    </section>

    <!-- this is the word of god section  -->
    <section class="word-of-god-section">
        <!-- this contains the word of god text  -->
        <div class="word-of-god-text-container">
            <h1>start everyday with the word of god</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Adipisci explicabo laudantium, fugiat quidem ducimus eum.
            </p>
        </div>
        <!-- this contains the podcast pics  -->
        <div class="podcast-container">
            <!-- post card img card  -->
            <div class="podcast-img-card">
                <div class="overlay">
                    <h1>pastor's sermon podcast</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit
                    </p>
                    <div class="explore-btn-container">
                        <!-- explore btn  -->
                        <button class="explore"> explore
                        </button>
                    </div>
                </div>
            </div>
            <!-- this contains the carousel  -->
            <div class="verse-of-the-day">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active button" aria-current="true" aria-label="Slide 1" ></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="button"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=" button"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <!-- this is where the text in the carousel comes  -->
                        <h1>we lead with love</h1>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quod laudantium necessitatibus ipsum molestiae?
                            Modi quisquam nesciunt sed autem repellendus nulla.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, temporibus?
                        </P>
                      </div>
                      <div class="carousel-item">
                          <!-- this is where the text in the carousel comes  -->
                        <h1>we lead with love</h1>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quod laudantium necessitatibus ipsum molestiae?
                            Modi quisquam nesciunt sed autem repellendus nulla.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, porro.
                        </P>
                      </div>
                      <div class="carousel-item">
                          <!-- this is where the text in the carousel comes  -->
                        <h1>we lead with love</h1>
                        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quod laudantium necessitatibus ipsum molestiae?
                            Modi quisquam nesciunt sed autem repellendus nulla.
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, accusantium!
                        </P>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>
    </section>
    <!-- thisis the lead with love section  -->
    <section class="lead-with-love-section">
        <!-- its text  -->
        <div class="lead-with-love-text">
            <h1>we lead with love</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quod laudantium necessitatibus ipsum molestiae?
                Modi quisquam nesciunt sed autem repellendus nulla.
            </P>
        </div>
        <!-- this contains the pastors imgages  -->
        <div class="leaders-card-container">
            <!-- this is the pastors image card 1 -->
            <div class="leader-card">
                <img src="./images/pastor5.png" alt="">
            </div>
            <!-- 2 -->
            <div class="leader-card bigger">
                <img src="{{asset('data/images/happy-diverse-business-people-making-deal_53876-159561.jpg')}}" alt="">

            </div>
            <!-- 3 -->
            <div class="leader-card">
                <img src="{{asset('data/images/pastor6.png')}}" alt="">
            </div>
        </div>
        <!-- this is the worshio with us text  -->
        <div class="worship-with-us-text">
            <h1>worship with us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Minus laudantium quos tenetur non illo et culpa cum impedit consequatur eum!
            </p>
        </div>
    </section>
    <!-- this is the announcement section  -->
    <h1 class="announcement-header">weekly announcement</h1>
    <section class="weekly-announcement-section">
       <!-- announcement text container  -->
       <div class="announcement-text">
            <h4 class="blue-text">announcement</h4>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestias repellat similique aspernatur laboriosam beatae?
            </p>
            <div class="event-details">
                <!-- date of event comes here  -->
                <div class="date-container">
                    <p>Date:23rd november 2022</p><img src="{{asset('data/images/calender2-removebg-preview (1).png')}}" alt="" class="icon calender">
                </div>
                <!-- some social media icons here  -->
                <div class="social-media">
                    <p>follow us on :</p> <a href="#"><img src="{{asset('data/images/fb.png')}}" alt="" class="icon"></a>
                    <a href="#"><img src="{{asset('data/images/youtube.png')}}" alt="" class="icon"></a>
                </div>
            </div>
        </div>
        <!-- the announcement img here  -->
        <img src="{{asset('data/images/announce.jpeg')}}" alt="" class="announcement-img">
    </section>
    <!-- footer section -->
    <footer>
        <!-- first division -->
        <div class="foot1">
            <h2>contact me</h2>
            <li ><img src="{{asset('data/images/right-arrow.png')}}" alt=""class="my-img"> <a href="#">@emmanula/twitter.com</a></li>
            <li ><img src="{{asset('data/images/right-arrow.png')}}" alt=""class="my-img"> <a href="#">www.google.com</a></li>
            <li ><img src="{{asset('data/images/right-arrow.png')}}" alt=""class="my-img"> <a href="#">+234 7042244539</a></li>
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
            <input type="email" name="" id="" placeholder="enter your email" class="input">
        </div>
    </footer>
    <script src="{{asset('data/js/main.js')}}"></script>
    <script src="{{asset('data/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
