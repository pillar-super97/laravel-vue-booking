<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <link rel="shortcut icon" href="<?php echo asset('favicon.ico'); ?>">
    <!-- CSS only -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<section id="hero" >
    <div id="logo">
        <a href="#"><img src="img/group1.svg" alt=""></a>
    </div>
    <div class="hero-container aos-init" data-aos="zoom-in">
        <h1>EXAMPLE DEMO</h1>
    </div>
</section>
<main id="main">
    <section id="heading">
        <div class="container aos-init">
            <div class="row about-container">
                <div class="col-sm-1">
                    <div class="horizontalLine"></div>
                </div>
                <div class="col-sm-11">
                    <div class="col-lg-7 content order-lg-1 order-2">
                        <P class="sectionNum">01</P>
                        <h2>HEADING</h2>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.
                        </p>
                        <a href="#bookingForm" id="btnBookNow">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="imageBlock">
        <div class="container aos-init">
            <div class="row about-container">
                <div class="col-sm-7">
                    <img src="img/image-water.png" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="horizontalLine"></div>
                    <div>
                        <P class="sectionNum">02</P>
                        <p class="blockHeading">
                            Lorem ipsum dolor sit amet, consetetur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bookingForm">
        <div class="container aos-init">
            <div class="row about-container">
                <div class="col-sm-1">
                    <div class="horizontalLine"></div>
                </div>
                <div class="col-sm-5">
                    <P class="sectionNum">03</P>
                    <h2>HEADING</h2>
                    <p class="blockHeading">
                        Lorem ipsum dolor sit amet, consetetur.
                    </p>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua, vero eos et accusam et justo duo dolores et ea rebum.
                    </p>
                </div>
                <div class="col-sm-6" id="appc">
                </div>
            </div>
        </div>
    </section>
    <section id="bookingList">
        <div class="container" id="appi">
        </div>
    </section>
    <section id="footer">
        <div id="logoFooter">
            <a href="#"><img src="img/group1.svg" alt=""></a>
        </div>
        <a href="#bookingForm" id="linkBookNow">Book Now</a>
    </section>
</main>
</body>
</html>
