<?php
$title= 'Bunyan || Contact Us';
include('./components/head.php');

?>
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
       <img src="./assets/images/contact/banner/contact-banner.webp" class="relative" alt="Partnerships">
        </div>
        <div class="max-width flex dir-col align-center justify-end hero-height top-0 container-y">
            <h1 class="text-white mb-2-2 relative z-7 text-center">Contact<span>Us </span></h1>
            <div class="flex  col-gap-3 mb-2-2 relative z-7 " >
                <span class="text-white    hero-circle relative kaff-light">Home</span> <span class="text-primary  kaff-light">Contact us</span></div>
               
            </div>
    </div>
    <div class="relative  mb-2"> 
        <div class="img_container  bg-advisory absolute w-full h-full top-0 left-0 z-7 "> <img src="./assets/images/home/bg/company_achievement-bg.webp"  class="backgroundSettings obj-pos-57  max-height-100vh z-7 relative"  alt="Company Achievments"> </div>
         
    <div class="max-width  pt-9 pb-9 flex dir-col relative z-9">
        <h2 class="title mb-1 text-center text-blue ">A Title Related to <br>
           Contact Us
        </h2>
        <span class="kaff-light lead text-grey col-8 text-center mlr-auto mb-4">
            If you have any questions about our programs please get in touch using the form below and a member of our team will contact you.
        </span>
        <form class="flex wrap justify-between col-12 row-gap-3-2">
            <div class="formInputWrapper col-6">
                <input id="firstName"  name='firstName' type="text" required placeholder="First Name*">
            </div>
            <div class="formInputWrapper col-6">
                <input  id="lastName"  name='lastName'type="text" required placeholder="Last Name*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="email"  name='email' type="email" required placeholder="Email*">
            </div>
            <div class="formInputWrapper col-6">
                <input id="phone"  name='phone' type="phone" required placeholder="Phone Number*">
            </div> 
            <div class="formInputWrapper col-12 messageInputWrapper">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message*"></textarea>
            </div>

            <div class="flex justify-end col-12 mt-2" >
                <button class="btn btn-primary" data-text="Send Message"></button>
            </div>
        </form>
    </div>
     
        <div class="  bg-background    flex dir-col  relative justify-center Services">
            <span class="absolute top-0 left-0  w-full h-full blue-overlay z-5">
    
            </span>
            <div class="max-width pt-9 pb-9 z-7">
                <div class="flex dir-col   mb-4 ">
                
                    <h4 class="title text-center text-white mb-4 ">
                        Our Locations
                    </h4>
                </div>
                
                <div class="flex    column-gap-35  locationCards  ">
                  <div class="locationCard relative">
                      <span class="locationCardOverlay absolute w-full h-full top-0 left-0 z-7 ">
                          
                      </span>
                      <div class="img_container relative">
                        <img src="./assets/images/icons/location-on.svg" alt="Location" class="locationIcon">
                          <img src="./assets/images/contact/location/location.jpg" alt="">
                      </div>
                      <div class="locationCardContent p-2 flex dir-col justify-end">
                        <span class="text-32 text-blue mb-2">Jeddah Subsidiary</span>
                        <span  class="kaff-light mb-1 flex text-grey align-start"><img src="./assets/images/icons/location-on.svg" class="mr-1-2 top-3px" alt="Location">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</span>
                        <span  class="kaff-light mb-1 flex text-grey align-start"><img src="./assets/images/icons/phone.svg" class="mr-1-2 top-3px" alt="Phone">+966 (12) 654 5876</span>
                        <span  class="kaff-light mb-2 flex text-grey align-start"><img src="./assets/images/icons/email.svg" class="mr-1-2 top-3px" alt="Email">Jeddah@email.com</span>
                        <button class="btn secondaryBtn" onmouseenter="locationHover(this)" onmouseleave="locationHover(this)">
                            Directions  <img class="ml-1-2"  src="./assets/images/icons/location-on-border.svg" alt="Location">
                        </button>
                      </div>

                  </div>
                  <div class="locationCard relative">
                      <span class="locationCardOverlay absolute w-full h-full top-0 left-0 z-7 ">
                          
                      </span>
                      <div class="img_container relative">
                          <img src="./assets/images/icons/location-on.svg" alt="Location" class="locationIcon">
                          <img src="./assets/images/contact/location/location.jpg" alt="Location">
                      </div>
                      <div class="locationCardContent p-2 flex dir-col justify-end">
                        <span class="text-32 text-blue mb-2">Riyadh Subsidiary</span>
                        <span  class="kaff-light mb-1 flex text-grey align-start"><img src="./assets/images/icons/location-on.svg" class="mr-1-2 top-3px" alt="Location">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</span>
                        <span  class="kaff-light mb-1 flex text-grey align-start"><img src="./assets/images/icons/phone.svg" class="mr-1-2 top-3px" alt="Phone">+966 (12) 654 5876</span>
                        <span  class="kaff-light mb-2 flex text-grey align-start"><img src="./assets/images/icons/email.svg" class="mr-1-2 top-3px" alt="Email">Riyadh@email.com</span>
                        <button class="btn secondaryBtn" onmouseenter="locationHover(this)" onmouseleave="locationHover(this)">
                            Directions  <img class="ml-1-2"  src="./assets/images/icons/location-on-border.svg" alt="Location">
                        </button>
                      </div>

                  </div>
                </div>
                
            </div>
        </div>
      
    </div>
 
    <?php
    include('./components/footer.php')
    ?>
    <script src="./assets/js/jquery.min.js"></script>
  
    <script src="./assets/js/index.js"></script> 
</body>
</html>