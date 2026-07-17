<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Department of Computer Science</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/people.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <!-- Header -->
    <header id="header" class="transparent-nav">
        <div class="container">

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="index.html">
                        <img src="./img/logo-alt.png" alt="logo">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Mobile toggle -->
                <button class="navbar-toggle">
						<span></span>
					</button>
                <!-- /Mobile toggle -->
            </div>

            <!-- Navigation -->
            <nav id="nav">
                <ul class="main-menu nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="blog.html">Syllbus</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            				More <span class="caret"></span>
					</a>
                        <ul class="dropdown-menu" style="background-color: oklch(80.8% 0.114 19.571);">
                            <li><a href="login.php">Log-in</a></li>
                            <li><a href="books.php">E-Books</a></li>
                            <li><a href="#">Ph.D. Programs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Home -->
    <div id="home" class="hero-area">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
        <!-- /Backgound Image -->

        <div class="home-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="white-text">ARYABHATTA BHAVAN</h1>
                        <p class="lead white-text">Department of Computer Science</p>
                        <a class="main-button icon-button" href="https://kskvku.ac.in/" target="_blank">Krantiguru Shyamji Krishna Verma kachchh University</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Home -->

    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <div class="section-header">
                        <h2>Welcome to ARYABHATTA BHAVAN</h2>
                        <p class="lead">Department of Computer Science</p>
                        <p>Krantiguru Shyamji Krishna Verma kachchh University, Bhuj</p>
                    </div>

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Courses </h4>
                            <p>Department provides various cources :</p>
                            <ul>
                                <li>1. Master of Science in Computer Application and Information Technology - 5 Year Integrated Program</li>
                                <li>2. Master of Science in Information Technology - 2 Year Postgraduate Program</li>
                                <li>3. Bachelor of Science in Computer Science - 3 Year Undergraduate Program</li>
                                <li>4. Post Graduate Diploma in Computer Applications - 1 year</li>
                                <li>5. Ph.D. Program in Computer Science</li>
                            </ul>                            
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Expert Teachers</h4>
                            <p>Learn from industry experts and experienced educators who are passionate about teaching and dedicated to your success.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                    <!-- feature -->
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>Community</h4>
                            <p>Join a vibrant community of learners, collaborate on projects, and share knowledge to enhance your learning experience.</p>
                        </div>
                    </div>
                    <!-- /feature -->

                </div>

                <div class="col-md-6">
                    <div class="about-img">
                        <img src="./img/about.jpg" alt="">
                    </div>
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </div>
    <!-- /About -->

    <!-- Courses -->
    <div id="courses" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>Explore Courses</h2>
                    <p class="lead">Explore courses that inspire learning, spark innovation, and shape your future.</p>
                </div>
            </div>
            <!-- /row -->

            <!-- courses -->
            <div id="courses-wrapper">

                <!-- row -->
                <div class="row">

                    <!-- single course -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/course01.jpg" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#"> Master of Science in Computer Application and Information Technology is a 5-year integrated program </a>
                            <div class="course-details">
                                <span class="course-category">M.Sc. (CA & IT) - Integrated-5-Year</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/course02.jpg" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">M.Sc. in Information Technology is a 2-year postgraduate program</a>
                            <div class="course-details">
                                <span class="course-category">M.Sc. IT  - 2-Year</span>

                            </div>
                        </div>
                    </div>
                    <!-- /single course -->

                    <!-- single course -->
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="course">
                            <a href="#" class="course-img">
                                <img src="./img/course03.jpg" alt="">
                                <i class="course-link-icon fa fa-link"></i>
                            </a>
                            <a class="course-title" href="#">Computer Science Is a 3-year undergraduate program Bachelor of Science in </a>
                            <div class="course-details">
                                <span class="course-category">BS - 3-Year</span>
                            </div>
                        </div>
                    </div>
                    <!-- /single course -->


                </div>
                <!-- /row -->

            </div>
            <!-- /courses -->

            <div class="row">
                <div class="center-btn">
                    <a class="main-button icon-button" href="cources.html">More Courses</a>
                </div>
            </div>

        </div>
        <!-- container -->

    </div>
    <!-- /Courses -->

    <!-- Call To Action -->
    <div id="cta" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta1-background.jpg)"></div>
        <!-- /Backgound Image -->

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h2 class="white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis.</h2>
                    <p class="lead white-text">Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                    <a class="main-button icon-button" href="#">Get Started!</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Call To Action -->

    <!-- Why us -->
    <div id="why-us" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">
                <div class="section-header text-center">
                    <h2>Why Edusite</h2>
                    <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                </div>

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-flask"></i>
                        <div class="feature-content">
                            <h4>Online Courses</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-users"></i>
                        <div class="feature-content">
                            <h4>Expert Teachers</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="col-md-4">
                    <div class="feature">
                        <i class="feature-icon fa fa-comments"></i>
                        <div class="feature-content">
                            <h4>Community</h4>
                            <p>Ceteros fuisset mei no, soleat epicurei adipiscing ne vis. Et his suas veniam nominati.</p>
                        </div>
                    </div>
                </div>
                <!-- /feature -->

            </div>
            <!-- /row -->

            <hr class="section-hr">

            <!-- row -->
            <div class="row">

                <div class="col-md-6">
                    <h3>Persius imperdiet incorrupte et qui, munere nusquam et nec.</h3>
                    <p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    <p>No vel facete sententiae, quodsi dolores no quo, pri ex tamquam interesset necessitatibus. Te denique cotidieque delicatissimi sed. Eu doming epicurei duo. Sit ea perfecto deseruisse theophrastus. At sed malis hendrerit, elitr deseruisse
                        in sit, sit ei facilisi mediocrem.</p>
                </div>

                <div class="col-md-5 col-md-offset-1">
                    <a class="about-video" href="#">
                        <img src="./img/about-video.jpg" alt="">
                        <i class="play-icon fa fa-play"></i>
                    </a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Why us -->

    <!-- Contact CTA -->
    <div id="contact-cta" class="section">

        <!-- Backgound Image -->
        <!--div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div-->
        <!-- Backgound Image -->

        <!-- container -->
        <div class="container">
		
		 <!--people-->
    <!-- Faculty Section -->
<h2>Members of The Faculty</h2>
<table>
    <tr>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Dr. Mahesh Mulani</h1>
                <p class="title">Head (I/C) & Asst. Professor</p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
    </tr>
</table>

<!-- Technical Staff -->
<h2>Members of The Technical Staff</h2>
<table>
    <tr>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Mr. Manishkumar L. Dasotiya</h1>
                <p class="title">Programmer</p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Mr. Jay M. Joshi</h1>
                <p class="title">Programmer</p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
    </tr>
</table>

<!-- Administrative Staff -->
<h2>Members of The Administrative Staff</h2>
<table>
    <tr>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Mr. Manish A. Pitroda</h1>
                <p class="title">Peon</p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Dr. Mahesh Mulani</h1>
                <p class="title">Head (I/C) & Asst. Professor</p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
    </tr>
</table>

<!-- PhD Scholars -->
<h2>PhD Scholars</h2>
<table>
    <tr>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Mr. Parth K. Thacker</h1>
                <p class="title"></p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
        <td>
            <div class="card">
                <img src="./img/avatar.png" alt="John" style="width:100%">
                <h1>Miss. Drashti U. Goswami</h1>
                <p class="title"></p>
                <p>Department of Computer Science KSKVKU</p>
                <p><button>Contact</button></p>
            </div>
        </td>
    </tr>
</table>
        <br> <br>
    <!--Facilities-->
        <section class="bg-gray-100 py-12">
            <div class="container mx-auto px-4">
                <h2
                    class="text-3xl font-semibold text-center text-blue-700 mb-8"
                >
                    Our Facilities
                </h2>

                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
                >
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/complab.jpg"
                            alt="Computer Lab"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Computer Lab
                            </h3>
                            <p class="text-gray-700">
                                The Department is equiped of more than 150
                                computers that have intel i5,core2dual and amd
                                athon prosseor,we also have 2 xeon server in the
                                house that provides various facalities.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/"
                            alt="Library"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Library
                            </h3>
                            <p class="text-gray-700">
                                The central library on the university provides
                                1000+ computer science related titles and other
                                reserch and devlopment recources in the campus
                                library.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/smartclass.jpg"
                            alt="smartclass"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Spacious Classrooms
                            </h3>
                            <p class="text-gray-700">
                                Comfortable classroom provides warming space to
                                learn and grow Stdents can experience
                                comfortable and healthy learning enviroment.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/router.jpg"
                            alt="Wi-Fi"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                High-Speed Wi-Fi
                            </h3>
                            <p class="text-gray-700">
                                Department is connected to the Ministry of Human
                                Resources Development, Govt. of India's National
                                Mission for Education through ICT. Under this
                                scheme total bandwidth available with university
                                is 1 Gbps.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/class.jpg"
                            alt="Projector"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Projectors
                            </h3>
                            <p class="text-gray-700">
                                Every classroom in the department is equiper
                                with a lcd projector mounted on the celling
                                providing better visuals and understanding. The
                                Department also provides 2 smartclass that are
                                equiped with latest projectors and podiums
                                providing student a ground for learning.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/readingzone.jpg"
                            alt="readingzone"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Reading Zone
                            </h3>
                            <p class="text-gray-700">
                                The Department also have Reading zone or Reading 
                                corner for students to read numrious amount of magzines
                                daily news paper and also strdents can wait their.
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="./img/serverroom.jpg"
                            alt="serverroom
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Server Room
                            </h3>
                            <p class="text-gray-700">
                                The Department is equiped with 2 power full xeon server 
                                providing service to facalties, students. It has  
                                1Gbps hight speed connection.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img
                            src="../assets/img/canteen.jpg"
                            alt="Canteen"
                            class="w-full h-48 object-cover"
                        />
                        <div class="p-4">
                            <h3
                                class="text-xl font-semibold text-blue-700 mb-2"
                            >
                                Canteen
                            </h3>
                            <p class="text-gray-700">
                                A clean,healthy and hyginic place for for
                                students and facalties to rest and enjoy their
                                meals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--/Facilities-->
		
            <!-- row -->
            <div class="row">

                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="white-text">Contact Us</h2>
                    <p class="lead white-text">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
                    <a class="main-button icon-button" href="#">Contact Us Now</a>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact CTA -->

    <!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- footer logo -->
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="./img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- footer logo -->

                <!-- footer nav -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!-- /footer nav -->

            </div>
            <!-- /row -->

            <!-- row -->
            <div id="bottom-footer" class="row">

                <!-- social -->
                <div class="col-md-4 col-md-push-8">
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/cs.kskvku" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/cs.kskvku" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/@departmentofcomputerscienc3048" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="cs@kskvku.ac.in" class="envelope"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->

                <!-- copyright -->
                <div class="col-md-8 col-md-pull-4">
                    <div class="footer-copyright">
                        <span>&copy; Copyright 2025. All Rights Reserved. Department of Computer Science, KSKVKU, Bhuj.</span>
                    </div>
                </div>
                <!-- /copyright -->

            </div>
            <!-- row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->

    <!-- preloader -->
    <div id='preloader'>
        <div class='preloader'></div>
    </div>
    <!-- /preloader -->


    <!-- jQuery Plugins -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>