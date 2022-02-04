 <?php
 $title ='Bunyan || Where Bunyan Operated || Qoot Academy';
 include('./components/head.php')
 ?> 
    <link rel="stylesheet" href="./assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/styles/owl.theme.default.min.css">  
</head>

<body>
    <?php
        include('./components/header.php')
    ?>
     <div class="  hero-height   relative  ">
         
        <div class="img_container absolute top-0 left-0 w-full h-full">
            <span class="absolute  left-0 w-full  card-overlay-2 z-7"></span>
            <span class="absolute top-0 left-0 w-full  card-overlay-7 "></span>
            <span class="absolute top-0 left-0 w-full  card-overlay z-7"></span>
       <img src="./assets/images/qoot/banner/qoot-banner.webp" alt="" class="relative z-5">
        </div>
        
    </div>
    
    <div class="cardSectionHeight   relative">
        <div class="sticky"> 
        </div>
        <div class="img_container    absolute w-full h-full top-0 left-0 pt-290 ">
            <img   src="./assets/images/home/bg/company_achievement-bg.webp"  class='backgroundSettings  max-height-100vh  relative obj-pos-57'  alt="Company Achievments">
        </div>
        <div class="heroCard horizontally-center   ">
            <div class="img_container heroCardMainImg">
                <img src="./assets/images/logos/qoot-logo.webp" class='qoot-w-h' alt="Qoot">
            </div>
            <div class=" mb-2   flex dir-col align-center relative">
                <div class="flex  col-gap-3 mb-4 relative z-7 " ><span class="text-grey kaff-light hero-circle hero-circle-grey relative">Home</span><span class="text-grey kaff-light hero-circle relative">Where Bunyan Operated</span><span class="text-primary kaff-light">Qoot Academy</span></div>
       
                <h4 class="mb-2-2 title text-blue text-center">A Title Related to Qoot Academy</h4>
                <p class="text-22 text-grey mb-2 col-7 text-center kaff-light lh-28">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
                <div class="flex col-gap-3 mb-4 mt-2">
                    <button class="btn secondaryBtn downloadBtn flex justify-center align-center col-gap-1-2 ">
                        Booklet <img src="./assets/images/icons/download.svg" alt="download">
                    </button>
                    <button class="btn secondaryBtn linkBtn flex  justify-center align-center col-gap-1-2">
                        Visit website  <img src="./assets/images/icons/external-link.svg" alt="External Link">
                    </button>
                </div>
            </div>
          
        </div>
        <div class="CardSlider horizontally-center  max-width-1440">
            <div class="flex col-12 justify-end mt-3 relative">
                <div class="w-82  ">
                    <div class="Slider arrowSlider">
                        <div class="owl-carousel owl-theme">
                            <div class="item img_container">
                                <img src="./assets/images/qoot/qoot-slider/slider-1.webp" alt="Qoot Academy">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/qoot/qoot-slider/slider-2.webp" alt="Qoot Academy">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/qoot/qoot-slider/slider-3.webp" alt="Qoot Academy">
                            </div>
                            <div class="item img_container">
                                <img src="./assets/images/qoot/qoot-slider/slider-4.webp" alt="Qoot Academy">
                            </div>
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
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/operatedCarousel.js"></script>
    <script src="./assets/js/hover.js"></script>
</body>

</html>