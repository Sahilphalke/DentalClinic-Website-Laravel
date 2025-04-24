<!doctype html>
<html lang="en">
<head>
    <title>Dentalist.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <!-- <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" /> -->

    <link rel="stylesheet"
          href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script
        src="./assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <!-- css file link  -->
    <link rel="stylesheet" href="./assets/css/index.css">

    <!-- jquery link  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- AOS css link  -->
    <link rel="stylesheet" href="./assets/aos-next/src/sass/aos.scss">

    <!-- AOS js link  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- fotorama js link  -->
    <script src="./fotorama-4.6.4/fotorama.js"></script>

    <!-- fotorama css link  -->
    <link rel="stylesheet" href="./fotorama-4.6.4/fotorama.css">

    <!-- font awesome link  -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- navbar section start  -->
 @include('frontend.nav')
<!-- navbar section end  -->

<!-- hero section start  -->
<div class="container-fluid pt-3">
    <div class="container" id="hero">
        <div class="row">
            <div
                class="col-lg-6 d-flex justify-content-center align-items-center pb-3 ps-lg-5">
                <div id="heroleft">
                    <h1 class="pb-4">Entrust your smile <br> to
                        professional</h1>
                    <p class="pb-5">Lorem ipsum is placeholder text
                        commonly used in the
                        graphic, print, and publishing industries for
                        previewing layouts and visual mockups.</p>

                    <div
                        class="d-flex justify-content-lg-between align-items-lg-center"
                        id="spacing">
                        <div>
                            <button class="btn bookappointment">Book
                                appointment</button>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 ">
                            <div class="blur">
                                <div class=" bg-white rounded-2"
                                     style="padding: 5px 8px 5px 8px;">
                                    <a href="#"> <i
                                            class="fa-solid fa-phone-volume"></i></a>
                                </div>
                            </div>
                            <div class="lh-0">
                                <h6 class>Dental 24H Emergency</h6>
                                <h5 class>03 482 394 123</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div
                    class=" d-flex justify-content-center align-items-center"
                    style="position: relative;">
                    <img data-aos="flip-left"
                         src="./images/home/hero.png"
                         alt="wait for image" width="60%"
                         style="z-index: 1;">

                    <div
                        class="doctor d-flex bg-white p-2 justify-content-center align-items-center gap-2"
                        style="z-index: 1;">
                        <div>
                            <img
                                class="img-thumbnail border-0 rounded-2"
                                src="./images/home/image1.png"
                                alt="wait for image" width="100%">
                        </div>
                        <div>
                            <h6>Dr. Samantha Alice</h6>
                            <p> Consultant </p>
                        </div>
                    </div>

                    <div class="teeth rounded-3">
                        <a href><i class="fa-solid fa-tooth"></i></a>
                    </div>

                    <div class="security">
                        <div class=" bg-white rounded-3"
                             style="padding: 10px 15px 10px 15px;">
                            <a href><i
                                    class="fa-solid fa-shield-halved"></i></a>
                        </div>
                    </div>

                    <div class="circule1 rounded-5"></div>
                    <div class="circule2 rounded-5"></div>
                    <div class="circule3 rounded-5"></div>
                    <div
                        style="position: absolute;left: 80px;top: 190px;z-index: 0;">
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                        <div class="circule d-flex gap-3 pb-2">
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                            <div class="rounded-5"
                                 style="padding: 2px;background-color:#7ABADD;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero section end  -->

<!-- about us section start  -->
<div class="container-fluid pt-5 pb-5" id="about">
    <div
        class="container d-flex justify-content-center align-items-center">
        <div class="pt-3 pb-3 content">
            <h3 class="text-lg-center">Dentalist is re-imagining
                what
                the dental experience can
                be and proudly setting a new standard for
                patient
                care.</h3>
        </div>
        <!-- <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="pt-3 pb-3 content" style="width: 51%;">
                    <h3 class="text-center">Dentalist is re-imagining
                        what
                        the dental experience can
                        be and proudly setting a new standard for
                        patient
                        care.</h3>

                </div>
            </div> -->

    </div>
</div>
<!-- about us section end  -->

<!-- service section start  -->
<div class="cintainer-fluid pt-5 pb-5 service">
    <div class="container" data-aos="fade-up">
        <div class="content">
            <h5>SERVICES</h5>
            <div class="row pt-3 pb-5">
                <div class="col-lg">
                    <h2>Feel amazing about <br> your oral health</h2>
                </div>
                <div class="col-lg d-flex align-items-center">
                    <p>Lorem ipsum is placeholder text commonly used in
                        the
                        graphic, <br> print, and publishing industries
                        for
                        previewing layouts and visual <br> mockups.</p>
                </div>
            </div>
        </div>
        <div class="row p-2 g-3">
            <div class="col-lg-3">
                <div class="card p-2 card1 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBEFFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i class="fa-solid fa-teeth-open"
                                   style="font-size: 20px;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Dentures</h5>
                        <p class="text-center">Lorem ipsum is
                            placeholder text commonly used in the
                            graphic,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-2 card2 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #DBDEFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i class="fa-solid fa-tooth"
                                   style="font-size: 20px;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Implants</h5>
                        <p class="text-center">Lorem ipsum is
                            placeholder text commonly used in the
                            graphic,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-2 card3 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #F6DBFA;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img src="./images/home/teeth 1.png"
                                        alt="wait for image"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pt-2">
                        <h5
                            class="card-title text-center">Whitening</h5>
                        <p class="text-center">Lorem ipsum is
                            placeholder text commonly used in the
                            graphic,</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card p-2 card4 rounded-5">
                    <div
                        class="d-flex align-items-center justify-content-center rounded-5"
                        style="padding: 60px;background-color: #FADBE2;">
                        <div
                            class="w-25 blurbox d-flex justify-content-center align-items-center"
                            style="padding:7px 32px;">
                            <div
                                class="d-flex justify-content-center align-items-center bg-white rounded-2"
                                style="padding: 12px 12px 12px 12px;">
                                <i><img
                                        src="./images/home/root-canal 1.png"
                                        alt="wait for image"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 pt-2">
                        <h5 class="card-title text-center">Root
                            Canal</h5>
                        <p class="text-center">Lorem ipsum is
                            placeholder text commonly used in the
                            graphic,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service section end  -->

<!-- Emergency section start  -->
<div class="container-fluid pt-5 pb-5 emergency">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6"
                 data-aos="fade-right">
                <div class="p-5 imagebox">
                    <img src="./images/home/image2.png" width="120%"
                         alt="wait for image"
                         style="position: absolute;bottom: 70px;left: 70px;">
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center"
                 data-aos="fade-left">
                <div class="content">
                    <h5 class="pb-3">Dental 24H Emergency</h5>
                    <h1 class="pb-3">Gentle, friendly treatment from our
                        locally
                        practice.</h1>
                    <p>Lorem ipsum is placeholder text commonly used in
                        the <br> graphic, print, and publishing
                        industries
                        for previewing layouts <br> and visual
                        mockups.</p>
                    <div class="pt-5">
                        <button class="btn bookappointment">Book
                            appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Emergency section end  -->

<!-- fetures section start  -->
<div class="container-fluid pt-5 pb-5 fetures">
    <div class="container box" data-aos="fade-up">
        <div
            class="d-flex justify-content-center align-items-center">
            <div
                class="w-75 d-flex justify-content-center align-items-center">
                <div>
                    <h5>Features</h5>
                    <h1>Specialized care through experience</h1>
                    <p class="p1">Lorem ipsum is placeholder text
                        commonly used in
                        the
                        graphic, print, and publishing industries for
                        <br> previewing
                        layouts and visual mockups.</p>
                </div>
            </div>
        </div>
        <div
            class="d-flex justify-content-center align-items-center">
            <div class="w-75 pt-5">
                <div
                    class="row d-flex justify-content-center">
                    <div class="col-lg-5">
                        <div
                            class="d-flex justify-content-center align-items-center gap-3">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <i class="fa-solid fa-shield"
                                           style="font-size: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Safety first</h4>
                                <p class="p-0">We
                                    prioritize safety with health checks
                                    <br>
                                    and more</p>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 pt-4">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <img
                                            src="./images/home/chair 1.png"
                                            alt style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Full-service
                                    dentistry</h4>
                                <p class="p-0">Our clinic offer a full
                                    of dental service, <br> from exams
                                    to
                                    implants and veneers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div
                            class="d-flex justify-content-center align-items-center gap-3">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <i class="fa-solid fa-shield"
                                           style="font-size: 20px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">Insurance
                                    accepted</h4>
                                <p class="p-0">We’re in network with
                                    major insurers <br> like Delta
                                    Dental,
                                    Aetna, and Cigna.</p>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center align-items-center gap-3 pt-4">
                            <div
                                class=" d-flex justify-content-center align-items-center">
                                <div
                                    class="blurbox border border-white p-2">
                                    <div
                                        class="whitebox border border-white bg-white rounded-2"
                                        style="padding: 12px;">
                                        <img
                                            src="./images/home/chair 1.png"
                                            alt style="width: 20px;">
                                    </div>
                                </div>
                            </div>
                            <div class>
                                <h4 class="pt-3 lh-1">No judgment
                                    ever</h4>
                                <p class="p-0">From floss bosses to
                                    sweet tooths, <br> every mouth is
                                    welcome.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fetures section end  -->

<!-- expert section start  -->
<div class="container-fluid pt-5 pb-5 expert">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div
                class="col-lg-6 d-flex justify-content-center align-items-center ps-5"
                data-aos="fade-right">
                <div>
                    <h5 class="pb-3">EXPERTS IN DENTAL</h5>
                    <h1 class="pb-2">Top-notch dentistry, from Seattle's
                        top
                        dentists.</h1>
                    <p class="pb-3">Lorem ipsum is placeholder text
                        commonly used in
                        the <br> graphic, print, and publishing
                        industries
                        for previewing layouts</p>
                    <ul class="list-unstyled gap-2">
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>Top
                            quality dental team</li>
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>State
                            of the art dental services</li>
                        <li><i
                                class="fa-solid fa-check-double p-2"></i>Discount
                            on all dental treatment</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-end"
                 data-aos="fade-left">
                <div class="p-5 imagebox">
                    <img src="./images/home/image3.png" width="120%"
                         alt="wait for image"
                         style="position: absolute;bottom: 60px;right: 70px;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- expert section end  -->

<!-- Testimonial section start  -->
<div class="container-fluid pt-5 pb-5 Testimonial">
    <div class="container pb-5 pt-5" data-aos="fade-up">
        <div class="d-flex justify-content-center align-items-center">
            <div class="content pb-4">
                <h5>TESTIMONIAL</h5>
                <div
                    class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg">
                        <h1 class="pt-2">
                            What people have said about us
                        </h1>
                    </div>
                    <div class="col-lg">
                        <p>Lorem ipsum is placeholder text commonly used
                            in
                            the <br> graphic, print, and publishing
                            industries
                            for previewing <br> layouts </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-group gap-5 pt-5">
            <div class="card rounded-4">
                <div class="text-center imgdiv">
                    <img src="./images/home/about1.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Robert Fox</h5>
                    <p>Lorem ipsum is placeholder text commonly used in
                        the graphic, print, and publishing industries
                        for previewing layouts</p>
                    <div>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
            <div class="card rounded-4 g-5">
                <div class="text-center imgdiv">
                    <img src="./images/home/about2.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Albert Flores</h5>
                    <p>Lorem ipsum is placeholder text commonly used in
                        the graphic, print, and publishing industries
                        for previewing layouts</p>
                    <div class="gap-2">
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
            <div class="card rounded-4">
                <div class="text-center imgdiv">
                    <img src="./images/home/about3.png"
                         alt="wait for image"
                         class="rounded-circle Testimonialimg">
                </div>
                <div class="card-body text-center">
                    <h5>Bessie Cooper</h5>
                    <p>Lorem ipsum is placeholder text commonly used in
                        the graphic, print, and publishing industries
                        for previewing layouts</p>
                    <div class>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                        <i
                            class="fa-solid fa-star text-warning p-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end  -->

<!-- blog section start -->
<div class="container-fluid blog pt-5 pb-3">
    <div class="container" data-aos="fade-up">
        <div class="text-center">
            <h5>BLOG</h5>
            <h1 class="pt-3">Stay updated with our latest news</h1>
        </div>
        <div
            class="row gap-5 pb-5 d-flex justify-content-center align-items-center">
            <div class="col-lg-3 p-3">
                <div class="card rounded-4">
                    <div class=" text-center p-2">
                        <img class="rounded-4"
                             src="./images/home/news1.png" width="100%"
                             alt>
                    </div>
                    <div class="p-3">
                        <h6 class="card-titel">
                            TECHNOLOGY
                        </h6>
                        <h4 class="card-text">
                            New Technology Make for Dental Operation
                        </h4>
                        <p>
                            Lorem ipsum is placeholder text commonly
                            used in
                            the graphic, print, and publishing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-3">
                <div class="card rounded-4">
                    <div class=" text-center p-2">
                        <img class="rounded-4"
                             src="./images/home/news2.png" width="100%"
                             alt>
                    </div>
                    <div class="p-3">
                        <h6 class="card-titel">
                            DENTAL
                        </h6>
                        <h4 class="card-text">
                            Regular Dental care make Your Smile Brighter
                        </h4>
                        <p>
                            Lorem ipsum is placeholder text commonly
                            used in
                            the graphic, print, and publishing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-3">
                <div class="card rounded-4">
                    <div class=" text-center p-2">
                        <img class="rounded-4"
                             src="./images/home/news3.png" width="100%"
                             alt>
                    </div>
                    <div class="p-3">
                        <h6 class="card-titel">
                            HYGIENE
                        </h6>
                        <h4 class="card-text">
                            Dental Hygiene for All Age to Make Smile
                        </h4>
                        <p>
                            Lorem ipsum is placeholder text commonly
                            used in
                            the graphic, print, and publishing
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog section end -->

<!-- book appointment section start  -->
<div class="container-fluid appointment pb-5">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div
                class="col-lg-6  rounded-5 d-flex align-items-center justify-content-center p-4"
                data-aos="fade-right">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.345808218307!2d72.92167707469721!3d20.368627010125138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce314e97fded%3A0xc1c3d2e3e9848519!2sAllied%20InfoSoft!5e0!3m2!1sen!2sin!4v1734603138206!5m2!1sen!2sin"
                    width="75%" height="100%"
                    style="border-radius: 30px;"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="p-4">
                    <h5 class="mb-3">BOOK APPOINTMENT</h5>
                    <h1 class="mb-3">Care at Dentalist is pleasure</h1>
                    <p class="mb-4">Lorem ipsum is placeholder text
                        commonly used in
                        the
                        graphic, print, and <br> publishing industries
                        for
                        previewing layouts and visual</p>
                    <form action>
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label">NAME</label>
                                    <input
                                        type="text"
                                        class="form-control p-2"
                                        style="border-radius: 10px;"
                                        name="username"
                                        id="username"
                                        aria-describedby="emailHelpId"
                                        placeholder="Enter your name..." />
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label">EMAIL
                                        ADDRESS</label>
                                    <input
                                        type="email"
                                        class="form-control p-2"
                                        style="border-radius: 10px;"
                                        name="useremail"
                                        id="useremail"
                                        aria-describedby="emailHelpId"
                                        placeholder="Your email addres.." />
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label">SERVICES</label>
                                    <select
                                        class="form-select form-select-lg p-2"
                                        style="border-radius: 10px;color: #212529;font-size: 17px;"
                                        name
                                        id>
                                        <option selected>Select
                                            one</option>
                                        <option value>Teeth
                                            Whitening</option>
                                        <option value>preventive
                                            care</option>
                                        <option value>restorative
                                            care</option>
                                        <option value>Cleanings</option>
                                        <option value>emergency dental
                                            care</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label">DEPARTMENT</label>
                                    <select
                                        class="form-select form-select-lg p-2"
                                        style="border-radius: 10px;color: #212529;font-size: 17px;"
                                        name="department"
                                        id="department">
                                        <option selected>Select
                                            Department</option>
                                        <option value></option>
                                        <option value></option>
                                        <option value></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-2 mb-2">
                                <div class="mb-3">
                                    <label for
                                           class="form-label">MESSAGES</label>
                                    <textarea class="form-control"
                                              name="message"
                                              id="message" rows="5"
                                              style="border-radius: 10px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-between align-items-center contact">
                            <div
                                class="d-flex justify-content-start align-items-center gap-3">
                                <div class="p-2"
                                     style="border-radius: 5px;background: linear-gradient(80deg, rgb(255, 255, 255) 0%, rgba(88,63,188,1) 100%);">
                                    <i
                                        class="fa-solid fa-phone-volume p-2 rounded-4 text-light"
                                        style="border-radius: 5px;background-color: #583FBC;"></i>
                                </div>
                                <div>
                                    <h6>Dental 24H Emergency</h6>
                                    <h6>03 482 394 123</h6>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn">Book
                                    an appointment</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- book appointment section end  -->

<!-- footer section start  -->

<div class="container-fluid footer">
    <div class="container">
        <div class="row pt-5" data-aos="fade-up">
            <div class="col-lg-6 ">
                <div>
                    <a
                        class="d-flex justify-content-start align-items-center gap-2 fw-bold pb-4"
                        href="#"><img src="./images/home/logo.png"
                                      alt="wait for image">Dentalist.</a>

                    <p class="pb-5">Dental Care Seattle is a top-rated
                        local practice
                        for cosmetic, <br> preventative, and restorative
                        dentistry on First Hill</p>

                    <p>FOLLOW US ON</p>
                    <div class>
                        <i class="fa-brands fa-facebook-f pe-4"></i>
                        <i class="fa-brands fa-twitter pe-4"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <ul>
                    <h6 class="pb-4">
                        QUICK LINKS
                    </h6>
                    <li class="list-unstyled pb-3"><a href>About
                            Us</a></li>
                    <li class="list-unstyled pb-3"><a href>Dental
                            Services</a></li>
                    <li class="list-unstyled pb-3"><a
                            href>Dentist</a></li>
                    <li class="list-unstyled pb-3"><a href>Blog</a></li>
                    <li class="list-unstyled pb-3"><a href>FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul>
                    <h6 class="pb-4">CONTACT & INFORMATION</h6>
                    <li class="pb-4">
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Phone Number</h6>
                                <h6 class="fw-bold">+088 123 654
                                    987</h6>
                            </div>
                        </div>
                    </li>
                    <li class="pb-4">
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Open Hour</h6>
                                <h6 class="fw-bold">09:00 AM - 18:00
                                    PM</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div
                            class="d-flex justify-content-start align-items-center gap-3">
                            <div class="p-2 box rounded-4">
                                <i
                                    class="fa-solid fa-phone-volume p-2 rounded-3"></i>
                            </div>
                            <div class="lh-0">
                                <h6>Clinic Address</h6>
                                <h6 class="fw-bold">35 West Dental
                                    Street California 1004</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row pt-5 pb-3 bottom">
            <div class="col-lg-6  justify-content-sm-center">
                <p> Dentalist. All Right Reserved </p>
            </div>
            <div
                class="col-lg-6 d-flex gap-5 justify-content-lg-end justify-content-sm-center">
                <div class="d-flex gap-5">
                    <p>Terms of Use</p>
                    <p>Privacy Policy</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer section end  -->
<script>
    // fotorama jQuery
    // $(document).ready(function(){
    //     $(".fotorama")
    // })

    AOS.init();

</script>

<!-- Bootstrap JavaScript Libraries -->
<!-- <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script> -->
</body>
</html>
