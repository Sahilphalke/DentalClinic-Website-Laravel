<!doctype html>
<html lang="en">
    <head>
        <title>Contact</title>
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

        <!-- bootstrap css file link  -->
        <link rel="stylesheet"
            href="./assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">

        <!-- bootstrap js file link  -->
        <script
            src="./assets/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

        <!-- css file link  -->
        <link rel="stylesheet" href="./assets/css/contactUs.css">

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

        <!-- contactus section start  -->
        <div class="container-fluid mt-4" style="height: 35rem;">
            <div class="container contactUs mb-5 position-relative d-flex justify-content-center align-items-center bg-white"
                style="height: 35rem;border-radius: 30px;">
                <img src="./images/about/dental-cabinet-with-various-medical-equipment 1.png" alt="Dental Cabinet" width="100%" height="100%" style="border-radius:30px;filter: blur(2px);">
                <div class="position-absolute">
                <h1 class="text-center" style="transition: color 0.3s ease-in-out, transform 0.3s ease;">
    Contact Us
</h1>
    
                    <p class="text-center text-black">For inquiries, feel free to Contact Us anytime.
                     <br>Reach out via email or phone <br>
                     we're here to help!</p>
                </div>
                <!-- <div class="pt-5">
                    <div
                        class="d-flex justify-content-center w-100">
                        <div class="mt-5 mb-5 p-5 bg-white"
                            style="width: 55%;border-radius: 30px;">
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
                </div> -->
            </div>
        </div>
        <!-- contactus section end  -->

        <!-- Clinic section start -->
       
        <div class="container-fluid clinic mt-5">
            <div class="container">
                <div class="text-center">
                    <h6 class="mb-4">OUR CLINIC</h6>
                    <h1>Come to our clinic and get best dental services</h1>
                </div>
                <div class="d-flex gap-5 justify-content-center mt-5">
                    <div class="card p-1"
                        style="width: 35%;border-radius: 30px;">
                        <div class="d-flex gap-3">
                            <img class="img-fluid"
                                style="border-radius: 30px 0px 0px 30px;"
                                src="./images/contact/image 40.png" alt>
                            <iframe width="150"
                                style="border-radius: 0 30px 30px 0px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.345808218307!2d72.92167707469721!3d20.368627010125138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce314e97fded%3A0xc1c3d2e3e9848519!2sAllied%20InfoSoft!5e0!3m2!1sen!2sin!4v1734603138206!5m2!1sen!2sin"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Dentalist Main Clinic</h4>
                            <p class="card-text">35 West Dental Street
                                California 1004</p>
                        </div>
                    </div>
                    <div class="card p-1"
                        style="width: 35%;border-radius: 30px;">
                        <div class="d-flex gap-3">
                            <img class="img-fluid"
                                style="border-radius: 30px 0px 0px 30px;"
                                src="./images/contact/image 41.png" alt>
                            <iframe width="150"
                                style="border-radius: 0 30px 30px 0px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.345808218307!2d72.92167707469721!3d20.368627010125138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce314e97fded%3A0xc1c3d2e3e9848519!2sAllied%20InfoSoft!5e0!3m2!1sen!2sin!4v1734603138206!5m2!1sen!2sin"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Dentalist Branch Clinic</h4>
                            <p class="card-text">35 West Dental Street
                                California 1004</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Clinic section start -->

        <!-- footer section start  -->
        <div class="container-fluid footer mt-5">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-6 ">
                        <div>
                            <a
                                class="d-flex justify-content-start align-items-center gap-2 fw-bold pb-4"
                                href="#"><img src="./images/home/logo.png"
                                    alt="wait for image">Dentalist.</a>

                            <p class="pb-5">Dental Care Seattle is a
                                top-rated
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

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>
</html>
