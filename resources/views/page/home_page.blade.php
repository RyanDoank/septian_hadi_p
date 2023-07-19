<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet"  href="{{asset('assets/css/home_page.css')}}" type="text/css"/>
    <link rel="stylesheet"  href="{{asset('../assets/css/animation.css')}}" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="app.css"> --}}
    {{-- <link rel="stylesheet" href="homes.css " type="text/css"/> --}}

    <title>Septian Hadi P</title>
</head> 
<body>
    <header class="header">
        <a href="#", class="nameWeb">Septian Hadi Prakoso</a>
        <div class="fa fa-menu" id="menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    {{-- Home --}}
    <section class="home" id="home">
        <img src="assets/images/background/bg-gradient-fluid-effect.jpg" class="bg_img">
        <div class="home_profile">
            <h1>Hi, I'm <span class="span-cont">Septian Hadi Prakoso</span></h1>
            <div><h2>Web Developer</h2></div>
            <p>
                Saya Akrab dipanggil, Tian, Saya lulusan Jurusan Multimedia Dari SMK Bakti Mandiri Bekasi. <br>
                Saya adalah seorang yang memiliki ketertarikan dengan technologi. Saat ini saya lebih banyak belajar dalam dunia teknologi informasi dan mencari pengalaman di bidang tersebut.
            </p>
            <div class="bx btn-sosmed" id="btn-sosmed">
                <a href="https://www.instagram.com/tian.139/" style="--clr:#dd2a7b"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6289655074251" style="--clr:#25d366"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/hadi.doank.5817" style="--clr:#0000ff"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.google.com/maps/place/Jl.+Harapan+Baru+II+Raya,+Kota+Baru,+Kec.+Bekasi+Bar.,+Kota+Bks,+Jawa+Barat/@-6.2181439,106.9756017,17z/data=!4m6!3m5!1s0x2e698c7a1b4c1031:0xc8083a3ff93cbb5e!8m2!3d-6.2191198!4d106.9722114!16s%2Fg%2F1hm32g07t?entry=ttu" style="--clr:#1da1f2"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="img-profile">
            <img src="assets/images/profile/me2.jpg" class="img-in-pr" id="img-in-pr">
        </div>
    </section>

    {{-- About --}}
    <section class="about" id="about">
        <div class="col-about" id="col-about">
            <div class="img-about" id="img-about">
                <img src="assets/images/profile/me.jpg" class="img-in-ab" id="img-in-ab">
            </div>
            <div class="about-detail" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <h6 class="heading">About Me</h6>
                <h2>I am here with 1 years of user experience</h2>
                <p>
                    Self-motivated Software Developer with middle of experience working on multiple projects.
                    Passionate and hardworking with penchant for meeting deadlines.
                    Interested in role with company promoting best practices and offering diverse customer projects.
                </p>
                <div class="row-dtl-profile">
                    <div class="col-dl-pr">
                        <ul class="mb-resp-1">
                            <li>
                                <div class="text">
                                    <h5>Name :</h5>
                                    <p>Septian Hadi P</p>
                                </div>
                            </li>
                            <li>
                                 <div class="text">
                                    <h5>Country :</h5>
                                        <p>Indonesia</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <h5>Hobby :</h5>
                                    <p>Music, Jogging, Movie</p>
                                 </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-dl-pr">
                        <ul class="mb-resp-2">
                            <li>
                                <div class="text">
                                    <h5>University :</h5>
                                    <p>Universitas Bhayangkara</p>
                                </div>
                            </li>
                               <li>
                                <div class="text">
                                    <h5>Languages :</h5>
                                    <p>English, Indonesian</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <h5>Address :</h5>
                                    <p>Harapan Baru 2, West Bekasi</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-box">
            <a href="#" class="download-cv">Download CV</a>
        </div>
    </section>
    
    {{-- Education --}}
    <section class="education" id="education">
        <div class="col-education" id="col-education">
            <div class="judul">
                <h6 class="heading">My Journey</h6>
            </div>
            <div class="clm-edu">
                <div class="education-row">
                    <div class="education-column">
                        <h3 class="title">Education</h3>
                        <div class="education-box">
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2022 - Now</i>
                                    </div>
                                    <h3>Sarjana - University Bhayangkara</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
    
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2022 - Now</i>
                                    </div>
                                    <h3>Sarjana - University Bhayangkara</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
            
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2019 - 2021</i>
                                    </div>
                                    <h3>Multimedia - SMK Bakti Mandiri</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="education-row">
                    <div class="education-column">
                        <h3 class="title">Experience</h3>
                        <div class="education-box">
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2022 - Now</i>
                                    </div>
                                    <h3>Flutter - GDSC</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
                            
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2022 - Now</i>
                                    </div>
                                    <h3>Flutter - GDSC</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
            
                            <div class="education-content">
                                <div class="content">
                                    <div class="year">
                                        <i class="fa fa-calendar" aria-hidden="true"> 2019 - 2021</i>
                                    </div>
                                    <h3>Frontend - Company</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis animi, error maxime omnis rerum alias eum eligendi facilis nihil provident?.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    {{-- Skills --}}
    <section class="skills" id="skills">
        <div class="col-skills" id="col-skills">
            <div class="img-skills" id="img-skills">
                <img src="assets/images/profile/me.jpg" class="img-in-sk" id="img-in-sk">
            </div>
            <div class="skills-detail" data-wow-duration="0.5s" data-wow-delay="0.1s">
                <h6 class="heading">My Skills</h6>
                <h2>I am here with 1 years of user experience</h2>
                <p class="skill-why">
                    The back end is important for making apps and websites work properly. I also follow the market daily and stay up to date on new backend frameworks and programming frameworks
                </p>
                <div class="row-dtl-profile">
                    <div class="col-dl-pr">
                        <ul class="mb-resp">
                            <li>
                                <div class="text">
                                    <p><i class="fa fa-check" aria-hidden="true"></i> PHP</p>
                                </div>
                            </li>
                            <li>
                                 <div class="text">
                                    <p><i class="fa fa-check" aria-hidden="true"></i> Laravel</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    <p><i class="fa fa-check" aria-hidden="true"></i> C#</p>
                                 </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-dl-pr">
                        <ul class="mb-resp">
                            <li>
                                <div class="text">
                                    <p><i class="fa fa-check" aria-hidden="true"></i> Adobe Photoshop</p>
                                </div>
                            </li>
                               <li>
                                <div class="text">
                                    <p><i class="fa fa-check" aria-hidden="true"></i> Adobe Illustrator</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="contact" id="contact">
        <div class="heading-cont">
            <h2 class="h2-cont">Contact <span class="span-cont">Me !</span></h2>
        </div>
        <div class="bx-sosmed">
            <div class="bx btn-sosmed" id="btn-sosmed">
                <a href="https://www.instagram.com/tian.139/" style="--clr:#dd2a7b"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6289655074251" style="--clr:#25d366"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/hadi.doank.5817" style="--clr:#0000ff"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.google.com/maps/place/Jl.+Harapan+Baru+II+Raya,+Kota+Baru,+Kec.+Bekasi+Bar.,+Kota+Bks,+Jawa+Barat/@-6.2181439,106.9756017,17z/data=!4m6!3m5!1s0x2e698c7a1b4c1031:0xc8083a3ff93cbb5e!8m2!3d-6.2191198!4d106.9722114!16s%2Fg%2F1hm32g07t?entry=ttu" style="--clr:#1da1f2"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2025 Septian Hadi Prakoso</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        </div>
    </footer>


    {{-- java script --}}
    <script src = "main.js"></script>
</body>
</html>