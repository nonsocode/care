@extends('layouts/master')

@section('main')
	    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg4.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <div class="backdrop">
                                        <h1 class="animation animated-item-1">Professional drivers you can trust</h1>
                                        <p class="animation animated-item-2">Our drivers are back-ground checked, tested and experienced Professional. So whether you need a driver for 3 hours or 3 months, request now and let our drivers handle it</p>
                                        <a class="btn-slide animation animated-item-3" href="{{route('get-driver')}}">Get a Driver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <div class="backdrop">
                                        <h1 class="animation animated-item-1">Do More</h1>
                                        <p class="animation animated-item-2">Increase your productivity during roadtrips. Get a Proffesional Driver from us today</p>
                                        <a class="btn-slide animation animated-item-3" href="{{route('get-driver')}}">Get a Driver</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>How We Work</h2>
                <p class="lead">We Provide you with exceptional service following industry standards.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="col-xs-5">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="col-xs-7 paddless">
                                <h2>Request a Driver</h2>
                                <h3>You simply tell us specific details as regards your driver request by filling our online form or via a phone call</h3>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="col-xs-5">
                                <i class="fa fa-comments"></i>
                            </div>
                            <div class="col-xs-7 paddless">
                                <h2>Meet Qualified Drivers</h2>
                                <h3>With the details of the request you have given us. We follow through schedule a meeting with you and suitable candidates</h3>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <div class="col-xs-5">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="col-xs-7 paddless">
                                <h2>You Pay, We Deliver</h2>
                                <h3>With a Care Competent driver working for you. You pay us and we pay the driver. We can easily replace, educate or train drivers for you.</h3>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="services" class="service-item">
	   <div class="container">
            <div class="center wow fadeInDown">
                <h2>Testimonials</h2>
                <p class="lead">Here are what our clients think about our service</p>
            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="col-xs-12">
                            <div class="pull-left inline-block">
                                <img class="img-responsive img-circle img-thumbnail" src="images/avi/img1.jpg">
                            </div>
                            <div class="inline-block">
                                <h3 class="media-heading">Mrs Uzo Chukwu</h3>
                                <i class="fa fa-map-marker"></i> Lagos
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="media-body">
                                <blockquote>After I gave my driver a 3 weeks suspension for gross misconduct i began to really think about whether i wanted a driver as a full time staff. What i really need is someone i can just contact to drive me for a few days or weeks per time. Finding Care.com.ng solved that problem for me completely I simply contact a driver when i need one</blockquote>
                        </div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="col-xs-12">
                            <div class="inline-block pull-left mr10">
                                <img class="img-responsive img-circle img-thumbnail" src="images/avi/img2.jpg">
                            </div>
                            <div class="inline-block">
                                <h3 class="media-heading">Hamzat Azizat</h3>
                                <i class="fa fa-map-marker"></i> Abuja
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="media-body">
                                <blockquote>I was new to Abuja and I needed someone to drive me around for a while till I got familiar with the road networks. I wanted someone who could start immediately but also a service I could terminate once I felt confident enough to drive myself. I love the service I got from care.com.ng, the driver was very professional and did an amazing job.</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="col-xs-12">
                            <div class="pull-left inline-block">
                                <img class="img-responsive img-circle img-thumbnail" src="images/avi/img3.jpg">
                            </div>
                            <div class="inline-block">
                                <h3 class="media-heading">Mr Kolawole Akintunde</h3>
                                <i class="fa fa-map-marker"></i> Lagos
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="media-body">
                                <blockquote>Any one who's daily commute takes them through lagos island would know that the traffic situation can get really bad. For someone like me who has a lot to do at any given time, i always felt time spent in traffic wastes so much of my time. Thanks to Care.com.ng, I was able to get a proffesional driver and was able to increase my productivity during traffic by focussing on my work</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media services-wrap wow fadeInDown">
                        <div class="col-xs-12">
                            <div class="pull-left inline-block">
                                <img class="img-responsive img-circle img-thumbnail" src="images/avi/img4.jpg">
                            </div>
                            <div class="inline-block">
                                <h3 class="media-heading">Mr Tunde Afolabi</h3>
                                <i class="fa fa-map-marker"></i> Lagos
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="media-body">
                                <blockquote>I'm a proffesional driver. I've worked with lots of personal clients. I must say that the best clients I've worked with are the clients i got from Care.com.ng. I never had any complaints working with such clients and I alway got my remuneration promptly. I would highly recommend Care.com.ng to any driver out there looking to provide good service to good clients.</blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 dib vc">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <a href="tel:09021959337"><i class="fa fa-phone"></i></a>
                        </div>
                        <div class="media-body">
                            <h2>Need more info?</h2>
                            <p>Do you have any questions or need to make more enquiry? Don't worry. We've got you covered. Our customer support helpline is open during work hours every weekday. You can call us on <a href="tel:09021959337">09021959337</a> or  or <a href="tel:08186705928">08186705928</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 dib vc">
                    <img src="images/call-center.png" alt="" class="img imgrespo">
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->
@endsection