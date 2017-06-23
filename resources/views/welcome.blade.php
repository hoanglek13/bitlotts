@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-default navbar-fixed-top navbar2">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="assets/images/logo/3.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="page-scroll" href="#page-top">Home</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#services">Services</a></li>
                    <li><a class="page-scroll" href="#team">Team</a></li>
                    <li><a class="page-scroll" href="#testimonials">Testimonails</a></li>
                    <li><a class="page-scroll" href="#news">News</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                    <li class="hidden-xs quote">
                        <a class="page-scroll"
                           href="javascript:void(0)"
                           data-toggle="modal"
                           data-target="#loginModal" id="btnLogin">Login</a>
                    </li>
                    {{--<li class="hidden-xs quote"><a class="page-scroll" href="#contact">Get a quote</a></li>--}}
                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="padding-70 row bannercontainer p0">
        <div class="preloader"><img src="assets/vendors/rs-plugin/assets/loader.gif" alt=""></div>
        <div class="row m0 banner main_slider">
            <ul>
                <li data-transition="random" data-slotamount="7" data-masterspeed="200" class="first-slide">
                    <!--Main Image-->
                    <img src="assets/images/home/1.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                    <!--Main Image-->
                    <div class="container">
                        <div class="heading tp-caption random fade" data-speed="3000" data-start="500" data-easing="Cubic.easeInOut">
                            Electrician & Electrical<br>Engineers, Michigan
                        </div>
                        <!--layer1-->
                        <div class="para tp-caption slideleft incube" data-speed="3000" data-start="200" data-easing="easeOutBounce">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            <br> Etiam sed augue vitae ex vulputate venenatis.
                        </div>
                        <!--layer2-->
                        <div class="link tp-caption slideup slideup" data-speed="3000" data-start="200" data-easing="easeInQuad">
                            <a class="page-scroll view_all" href="#services">view services</a>
                        </div>
                        <!--layer 3-->
                    </div>
                </li>
                <!--Slide-->
            </ul>
        </div>
    </section>

    <section class="padding-70 row about_blocks_row about_blocks_row_home2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 about_block about_block_1">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <h5>quick help</h5>
                            <h3>Honest Service</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                        <a href="#contact">CONTACT US</a>
                    </div>
                </div>
                <div class="col-sm-4 about_block about_block_2">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <h5>support 24h/7</h5>
                            <h3>Dedicated Work</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                        <a href="#contact">our services</a>
                    </div>
                </div>
                <div class="col-sm-4 about_block about_block_3">
                    <div class="row m0 inner">
                        <div class="row heading m0">
                            <h5>16 contractors</h5>
                            <h3>We are passionate</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                        <a href="#contact">our experts</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-70 row service_tab" id="about">
        <div class="container">
            <div class="row titleRow">
                <h5>WHY CHOOSE US</h5>
                <h2>PROELECTRIC COMPANY</h2>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 img">
                    <div class="row m0">
                        <img src="assets/images/about/1.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 content">
                    <div class="row m0">
                        <h3>Come aboard were expecting you</h3>
                        <h4>We Offer Quality Work</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
                        <a href="#services" class="page-scroll view_all">Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-70 row about_proelectric_row" id="services">
        <div class="container">
            <div class="row titleRow">
                <h5>WHAT WE DO</h5>
                <h2>Variety of Services</h2>
            </div>
            <div class="row">
                <ul class="nav nav-tabs services_tab" role="tablist">
                    <li role="presentation" class="active"><a href="#service1" aria-controls="service1" role="tab" data-toggle="tab">Electrical Maintenance</a></li>
                    <li role="presentation"><a href="#service2" aria-controls="service2" role="tab" data-toggle="tab">Lightings & Repair</a></li>
                    <li role="presentation"><a href="#service3" aria-controls="service3" role="tab" data-toggle="tab">Installation</a></li>
                    <li role="presentation"><a href="#service4" aria-controls="service4" role="tab" data-toggle="tab">Interior</a></li>
                    <li role="presentation"><a href="#service5" aria-controls="service5" role="tab" data-toggle="tab">Inspection</a></li>
                    <li role="presentation"><a href="#service6" aria-controls="service6" role="tab" data-toggle="tab">Electrical wire</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="service1">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service1.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="service2">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service2.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="service3">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service3.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="service4">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service4.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="service5">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service5.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="service6">
                        <div class="row m0 about_proelectric">
                            <div class="row m0 inner">
                                <div class="col-sm-12 col-md-6 img">
                                    <div class="row">
                                        <img src="assets/images/about/service6.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 content">
                                    <div class="row">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis varius Praesent lacinia elit nec nisl.</h3>
                                        <p>Fusce ut velit semper, semper arcu quis, aliquam magna. Etiam sed justo et sem varius euismod. In ac justo urna. Donec tincid unt nisl semper sapien ullamcorper, <br><br>Nec imperdiet augue pretium. Curabitur eu ligula euismod, inter dum libero at, tincidunt sem. Integer ut lacus.</p>
                                        <a href="#about" class="page-scroll view_all">about us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-70 row team_section_type2 bgf" id="team">
        <div class="container">
            <div class="row titleRow">
                <h5>CERTIFIED CONTRACTORS</h5>
                <h2>EXPERIENCED TEAM</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 team_member">
                    <div class="row m0 inner">
                        <a href="#">
                            <div class="row m0 image"><img src="assets/images/team/1.jpg" alt="" class="img-responsive"></div>
                            <div class="row m0 title_row">
                                <h5>JOSH DOE</h5>
                                <div class="row m0 pos">Maintenance</div>
                            </div>
                        </a>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                        <ul class="social_list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 team_member">
                    <div class="row m0 inner">
                        <a href="#">
                            <div class="row m0 image"><img src="assets/images/team/2.jpg" alt="" class="img-responsive"></div>
                            <div class="row m0 title_row">
                                <h5>PATRIC JAX</h5>
                                <div class="row m0 pos">Installation</div>
                            </div>
                        </a>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                        <ul class="social_list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 team_member">
                    <div class="row m0 inner">
                        <a href="#">
                            <div class="row m0 image"><img src="assets/images/team/3.jpg" alt="" class="img-responsive"></div>
                            <div class="row m0 title_row">
                                <h5>MAXIMS KOLOUN</h5>
                                <div class="row m0 pos">Repairing</div>
                            </div>
                        </a>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                        <ul class="social_list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 team_member">
                    <div class="row m0 inner">
                        <a href="#">
                            <div class="row m0 image"><img src="assets/images/team/4.jpg" alt="" class="img-responsive"></div>
                            <div class="row m0 title_row">
                                <h5>ALEX MODH</h5>
                                <div class="row m0 pos">Inspection</div>
                            </div>
                        </a>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Aliq uam po rttitor, nunc et fringilla.</p>
                        <ul class="social_list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-70 row section_banner_ver2">
        <div class="container">
            <div class="row m0">
                <h4>HAVING AN EMERGENCY</h4>
                <h2>ONLINE SUPPORT 24H/7 FOR YOU</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lacinia, ipsum eu vulputate pulvinar, some good text will appear odio dui semper elit, id pulvinar see our servies over here.</p>
                <a href="#contact" class="view_all">CALL US IMMEDIATELY</a>
            </div>
        </div>
    </section>

    <section class="padding-70 row recentpost_acc recentpost_acc2" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 testimonial_section">
                    <div class="inner row m0">
                        <div class="row m0 titleRow text-left">
                            <h5>they trust us</h5>
                            <h2>testimonials</h2>
                        </div>
                        <div class="flexslider testimonial_slider">
                            <ul class="slides">
                                <li>
                                    <div class="row m0 recent_post testi_content">
                                        <div class="row m0 inner">
                                            <div class="postText row m0">
                                                Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
                                            </div>
                                            <div class="media authorMeta">
                                                <div class="media-left"><img src="assets/images/team/2.png" alt=""></div>
                                                <div class="media-body media-middle">
                                                    <h5>ASIA GHLOWN</h5>
                                                    <div class="row designation">Michigan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row m0 recent_post testi_content">
                                        <div class="row m0 inner">
                                            <div class="postText row m0">
                                                Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
                                            </div>
                                            <div class="media authorMeta">
                                                <div class="media-left"><img src="assets/images/team/1.png" alt=""></div>
                                                <div class="media-body media-middle">
                                                    <h5>DAVID MAXIMS</h5>
                                                    <div class="row designation">New York</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row m0 recent_post testi_content">
                                        <div class="row m0 inner">
                                            <div class="postText row m0">
                                                Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
                                            </div>
                                            <div class="media authorMeta">
                                                <div class="media-left"><img src="assets/images/team/3.png" alt=""></div>
                                                <div class="media-body media-middle">
                                                    <h5>ALEX WHITE</h5>
                                                    <div class="row designation">California</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row m0 recent_post testi_content">
                                        <div class="row m0 inner">
                                            <div class="postText row m0">
                                                Etiam tristique sagittis pulvinar. Cras at lectus rho scelerisque dui ut, bibendum ante. Ut vulputate dit neque eget lobortis. <br><br>Nam eleifend sollicitudin nulla quis luctus nam Interdum et malesuada fames.
                                            </div>
                                            <div class="media authorMeta">
                                                <div class="media-left"><img src="assets/images/team/4.png" alt=""></div>
                                                <div class="media-body media-middle">
                                                    <h5>Emily Nelson</h5>
                                                    <div class="row designation">Los Angeles</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 recent_post_home" id="news">
                    <div class="row m0 titleRow text-left">
                        <h5>recent articles</h5>
                        <h2>from our blog</h2>
                    </div>
                    <div class="row m0">
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="assets/images/blog/1.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Article Title Here</h4>
                                </a>
                                <div class="row m0 meta">By : <a href="#">John Doe</a> &nbsp; on : <a href="#">12-April-2017</a></div>
                                <p>Lorem ipsum dolor sit amet, conseings ctetur adipiscing elit. </p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#"><img src="assets/images/blog/3.jpg" alt="" class="img-reponsive"></a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4>Article Title Here</h4>
                                </a>
                                <div class="row m0 meta">By : <a href="#">John Doe</a> &nbsp; on : <a href="#">12-April-2017</a></div>
                                <p>Lorem ipsum dolor sit amet, conseings ctetur adipiscing elit. </p>
                            </div>
                        </div>
                        <a href="#contact" class="page-scroll view_all">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="row page_intro" id="contact">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h5>contact us</h5>
                    <h2>get in touch with ProElectric</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-70 row contact_form_row">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 contact_form_area">
                    <h3 class="contact_section_title">get in touch</h3>
                    <div class="contactForm row m0">
                        <form action="http://upcomingforu.com/proelectric/assets/php/contact.php" class="row contact_form" id="contactForm">
                            <div class="row m0">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_fname">First Name</label>
                                        <input type="text" class="form-control" id="contact_fname" name="contact_fname">
                                    </div>
                                    <div class="input-group">
                                        <label for="contact_femail">E-mail Address</label>
                                        <input type="email" class="form-control" id="contact_femail" name="contact_femail">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <label for="contact_lname">Last Name</label>
                                        <input type="text" class="form-control" id="contact_lname" name="contact_lname">
                                    </div>
                                    <div class="input-group">
                                        <label for="contact_fphone">Phone Number</label>
                                        <input type="tel" class="form-control" id="contact_fphone" name="contact_fphone">
                                    </div>
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <label for="contact_fmsg">Details/Comments</label>
                                    <textarea name="contact_fmsg" id="contact_fmsg" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row m0">
                                <div class="col-sm-12">
                                    <input type="submit" class="submit_btn" value="submit">
                                </div>
                            </div>
                        </form>
                        <div id="success">
                            <span class="green textcenter">
                                Your message was sent successfully! I will be in touch as soon as I can.
                            </span>
                        </div>
                        <div id="error">
                            <span>
                                Something went wrong, try refreshing and submitting the form again.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 contact_address">
                    <h3 class="contact_section_title">Address</h3>
                    <div class="row address m0">
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body address_text">1203 , Street RD, Michigan<br>5205 USA</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-envelope"></i></div>
                            <div class="media-body address_text">info@domain.com</div>
                        </div>
                        <div class="media address_line">
                            <div class="media-left icon"><i class="fa fa-phone"></i></div>
                            <div class="media-body address_text">+123 7890 456</div>
                        </div>
                        <a href="#map" class="page-scroll view_all">Locate us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row map_row" id="map">
        <div class="container">
            <h3 class="contact_section_title">Our Office</h3>
            <div id="mapBox" class="row m0"></div>
        </div>
    </section>

    <section class="row section_banner" id="newsletter">
        <div class="row m0 inner">
            <div class="container">
                <div class="row">
                    <h5>GET NOTIFIED</h5>
                    <h2>SIGNUP TO OUR NEWSLETTER</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 newsletter">
                    <form class="row m0 newsletterForm" action="http://upcomingforu.com/proelectric/assets/php/notify-me.php" method="post" id="notifyMe" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                        <div class="col-sm-12 col-md-8"><input type="email" class="form-control" placeholder="Enter your Email Address" required></div>
                        <div class="col-sm-12 col-md-4"><input type="submit" class="form-control" value="submit"></div>
                    </form>
                    <!-- Subscription results -->
                    <label class="subscribe-message text-center"></label>
                </div>
            </div>
        </div>
    </section>

    <footer class="row">
        <div class="container">
            <div class="row m0 footer_bottom">
                <ul class="list-inline social_menu m0">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <div class="copyright">&copy; <a href="#">PROELECTRIC 2017</a>.</div>
            </div>
        </div>
    </footer>
    <!--  scroll to top of the page-->
    <a href="#" id="scroll_up"><i class="fa fa-angle-up"></i></a>


    <!-- Modal -->
    <div class="modal fade" id="loginModal" role="dialog">
        <!-- Modal Open -->
        <div class="modal-dialog">
            <!-- Modal content-->
            {{--<div class="modal-content">--}}
                <div class="modal-body">
                    <section id="content">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            <h1>Social Login</h1>
                            <a href="{{ url('login/facebook') }}" class="btn btn-block btn-social btn-facebook">
                                <span class="fa fa-facebook"></span> Facebook
                            </a>
                            <a href="{{ url('login/google') }}" class="btn btn-block btn-social btn-google">
                                <span class="fa fa-google"></span> Google
                            </a>
                            <h1>Or</h1>
                            {{ csrf_field() }}
                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Type Email" required/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" id="password" name="password" placeholder="Password" required />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </div>
                            <div>
                                <input type="submit" value="LOGIN" />
                                <a href="#">Lost your password</a>
                            </div>

                        </form><!-- form -->
                    </section><!-- content -->
                {{--</div>--}}
            </div>
        </div>
        <!--Close Modal-->
    </div>
@endsection

@section('scripts')

    <!--Google Map-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCmS2_uGtUvlEkj5nnWiFA6Fem8TJeU5tI"></script>

    <!--Bootstrap JS-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>

    <!--Owl Carousel-->
    <script src="{{ asset('assets/vendors/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <!--FlexSlider-->
    <script src="{{ asset('assets/vendors/flexslider/jquery.flexslider-min.js') }}"></script>
    <!--RV-->
    <script src="{{ asset('assets/vendors/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!--Form Validation-->
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>

    <!--Main JS-->
    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/notifyMe.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/revs.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @if($errors->has('email') || $errors->has('password'))
        <script>
            $(document).ready(function () {
                $("#btnLogin").click();
            });
        </script>
    @endif
@endsection