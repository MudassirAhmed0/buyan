<?php
$title= 'Bunyan || Careers';
include('./components/head.php');

?>

<link rel="stylesheet" href="./assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/styles/owl.theme.default.min.css">
</head>

<body>
    <?php
 
    include('./components/header.php'); 
    ?>
    <div class=" hero-height   relative  ">
        <div class="img_container absolute top-0 left-0 w-full h-full">
            <span class="absolute  left-0 w-full  card-overlay-3 z-5"></span> 
            <span class="absolute  left-0 w-full  card-overlay-2 z-5"></span> 
            <span class="absolute top-0 left-0 w-full  card-overlay z-5"></span>
       <img src="./assets/images/career/banner/career-banner.webp" class="relative" alt="Partnerships">
        </div>
        <div class="max-width flex dir-col align-center justify-end hero-height top-0 container-y">
            <h1 class="text-white mb-2-2 relative z-7 text-center">Bunyan <span>Careers </span></h1>
            <div class="flex  col-gap-3 mb-2-2 relative z-7 " >
                <span class="text-white    hero-circle relative kaff-light">Home</span> <span class="text-primary  kaff-light">Careers</span></div>
               
            </div>
    </div>
    <div class="relative "> 
        <div class="img_container  pt-235 absolute w-full h-full top-0 left-0 z-7 "> <img src="./assets/images/home/bg/company_achievement-bg.webp"  class="backgroundSettings obj-pos-57  max-height-100vh z-7 relative"  alt="Company Achievments"> </div>
        <div class="   flex dir-col justify-center ">
            <div class="max-width  pb-2 pt-9">
                <div class="flex dir-col  align-center col-9  mlr-auto  mb-5 "> 
                    <h4 class="title mb-1 text-blue mb-1 text-center">
                        A Title Related to Bunyan <br>
                        Careers
                    </h4>
                    <span class="kaff-light text-grey lead mb-2 ls-1-1 text-center">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </span>
                    <span class="kaff-light text-grey lead ls-1-1 text-center">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </span>
                     
                   
                </div>
                
             
                 
            </div>
            <div class="max-width-1440 pl-60 pb-9 relative z-9">
            <div class="flex col-12 justify-end relative">
                <div class="col-12   ">
                    <div class="Slider arrowSlider">
                        <div class="owl-carousel owl-theme">
                            <div class="item img_container">
                                <img src="./assets/images/career/slider/slider-1.webp" alt="Career">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/career/slider/slider-2.webp" alt="Career">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/career/slider/slider-3.webp" alt="Career">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/career/slider/slider-4.webp" alt="Career">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </div>
    
      
    </div>
    
    <div class="max-width   pb-9 flex dir-col">
        <h2 class="title mb-1 text-center text-blue mb-1 ">
            Bunyan Opportunities 
        </h2>
        
         <div class="accordion mt-2">
             <div class="accordionHeader flex align-center justify-between mb-1">
                 <span class="text-28">Project Manager</span>
                 <div class="accordionArrowContainer flex align-center justify-end" onclick="openAccordion(this)">
                     <img src="./assets/images/home/icons/blueArrow.svg" alt="Arrow">

                 </div>
             </div>
             <div class="accordionContent">
                 <div class="flex  dir-col mb-2">
                     <span class="text-22 text-primary mb-1">
                        Job Description
                     </span>
                     <span class="lead text-grey kaff-light lh-28  ">
                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>
                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                     </span>

                 </div>
                 <div class="flex  dir-col">
                     <span class="text-22 text-primary mb-1">
                        Main Responsibilities
                     </span>
                     <ul class="accordionList">
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                     </ul>

                 </div>
                 <div class="flex col-12 justify-end mt-4 mb-2 pt-2">
                     <button class="btn btn-primary" data-text='Apply Now'></button>
                 </div>
             </div>
         </div>
         <div class="accordion mt-2 active">
             <div class="accordionHeader flex align-center justify-between mb-1">
                 <span class="text-28">Associate Project Manager</span>
                 <div class="accordionArrowContainer flex align-center justify-end" onclick="openAccordion(this)">
                     <img src="./assets/images/home/icons/primaryArrow.svg" alt="Arrow">

                 </div>
             </div>
             <div class="accordionContent">
                 <div class="flex  dir-col mb-2">
                     <span class="text-22 text-primary mb-1">
                        Job Description
                     </span>
                     <span class="lead text-grey kaff-light lh-28  ">
                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>
                         Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                     </span>

                 </div>
                 <div class="flex  dir-col">
                     <span class="text-22 text-primary mb-1">
                        Main Responsibilities
                     </span>
                     <ul class="accordionList">
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                        <li class="kaff-light text-grey lead lh-28 ">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam era</li>
                     </ul>

                 </div>
                 <div class="flex col-12 justify-end mt-4 mb-2 pt-2">
                     <button class="btn btn-primary" data-text='Apply Now'></button>
                 </div>
             </div>
         </div>
    </div>
    <div class="  bg-background    flex dir-col  relative justify-center Services">
        <span class="absolute top-0 left-0  w-full h-full blue-overlay z-5">

        </span>
        <div class="max-width pt-5 pb-9 z-7">
            <div class="flex dir-col   mb-4 ">
            
                <h4 class="title text-white mb-4 ">Benefits of Working for Bunyan
                </h4>
            </div>
            
            <div class="flex dir-col  align-center    ">
             
                <div class="col-12 flex  text-white valueCards">
                    <div class="w-20 border-right-white-15-opacity  row-gap-1-2  valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/star.svg" alt="Excellent">
                        </div>
                        <span class="text-32">Great  <br> Environment</span>
                        
                    </div>
                    <div class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2  valueCard flex dir-col justify-center align-start ">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/diamond.svg" alt="Brilliant">
                        </div>
                        <span class="text-32">Oppurtunity <br>  to  Grow</span>

                    </div>
                    <div class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2  valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/hands.svg" alt="Hospitable">
                        </div>
                        <span class="text-32">Fully <br> Inclusive</span> 

                    </div>
                    <div class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2  valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/setting.svg" alt="Accountable">
                        </div>
                        <span class="text-32">Health <br> Insurance</span> 

                    </div>
                    <div class="w-20   row-gap-1-2   pl-3-2  valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/livello.svg" alt="Responsive">
                        </div>
                        <span class="text-32">Social <br> Security</span>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="max-width pt-9 pb-9 flex dir-col">
        <h2 class="title mb-1 text-center text-blue ">A Title Related to <br>
            General Careers Form
        </h2>
        <span class="kaff-light lead text-grey col-8 text-center mlr-auto mb-4">
            If you have any questions about our programs please get in touch using the form below and a member of our team will contact you.
        </span>
        <form class="flex wrap justify-between col-12 row-gap-3-2">
            <div class="formInputWrapper col-6">
                <input id="firstName"  name='firstName' type="text" required placeholder="First Name*">
            </div>
            <div class="formInputWrapper col-6">
                <input  id="secondName"  name='secondName'type="text" required placeholder="Second Name*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="email"  name='email' type="email" required placeholder="Email*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="phone"  name='phone' type="phone" required placeholder="Phone Number*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="companyName"  name='companyName' type="text" required placeholder="Company Name*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="countryOfResidence"  name='countryOfResidence' type="text" required placeholder="Country of Residence*">
            </div>
            <div class="formInputWrapper col-12 messageInputWrapper">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message*"></textarea>
            </div>
            <div class="formInputWrapper col-12 fileInputWrapper">
                <span><span class="kaff-light text-underline text-primary ls-1-1 lead ">Upload Your Resume</span> <span class="kaff-light   ls-1-1 lead text-grey"> or Drag and Drop Here*</span></span>
                <input type="file">
            </div>

            <div class="flex justify-end col-12 mt-2" >
                <button class="btn btn-primary" data-text="Send Message"></button>
            </div>
        </form>
    </div>
    <?php
    include('./components/footer.php')
    ?>
        <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/operatedCarousel.js"></script>
    <script src="./assets/js/accordion.js"></script>
</body>
</html>