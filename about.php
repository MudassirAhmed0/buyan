<?php
$title ='Bunyan || Home';
include('./components/head.php')
?>

<link rel="stylesheet" href="./assets/styles/about.css">
</head>

<body>
    <?php 
    include('./components/header.php')
    ?>
    <div class="  hero-height   relative  ">
        <div class="img_container absolute top-0 left-0 w-full h-full">
            <span class="absolute  left-0 w-full  card-overlay-3 z-5"></span>
            <span class="absolute  left-0 w-full  card-overlay-2 z-5"></span>
            <span class="absolute top-0 left-0 w-full  card-overlay z-5"></span>
            <img src="./assets/images/aboutBanner.jpg" class="relative" alt="About Us">
        </div>
        <div class="max-width flex dir-col align-center justify-end hero-height top-0 container-y">
            <h1 class="text-white mb-2-2 relative z-7">About <span>Bunyan</span></h1>
            <div class="flex  col-gap-3 mb-2-2 relative z-7 "><span
                    class="text-white hero-circle relative kaff-light">Home</span><span
                    class="text-primary kaff-light">About us</span></div>
        </div>
    </div>

    <div class="  pt-9 pb-9 flex dir-col justify-center min-h-100 relative">
        <div class="img_container absolute w-full h-full top-0 left-0 ">
            <img src="./assets/images/home/bg/company_achievement-bg.webp" class="object-fit-contain"
                alt="Company Achievments">
        </div>
        <div class="max-width  mb-2   flex dir-col align-center relative">
            <h4 class="mb-1 title text-blue text-center">A Title Related to Company <br> Achievments</h4>
            <p class="lead text-grey mb-2 col-8 text-center kaff-light lh-28">
                Bunyan was established in 2019, with the sole purpose of being an innovative home that promises to be a
                place of excellence in the education field. Bunyan is the fruit of the collaboration between the
                University of Prince Mugrin and Ecole hôtelière de Lausanne (EHL) uniquely in the Kingdom of Saudi
                Arabia.
            </p>
            <p class="lead text-grey mb-2 col-8 text-center kaff-light lh-28">
                Together, through our high quality of education and proven track record, we endeavor to assist
                individuals and establishments to reach their maximum level of brilliance. We will work alongside you to
                create customized programs that will match your desires and needs in the tourism, hospitality and
                entertainment fields.
            </p>
            <a href="#" class="text-uppercase text-primary text-underline  kaff-light">
                Learn More
            </a>
        </div>
        <div class="max-width">
            <div class="flex col-12 justify-center mt-3 relative">
                <div class="col-10 flex justify-between counter">
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">6</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Academies</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">4</span>K<span>+</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Students</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center border-right-grey-1">
                        <span class="text-primary text-60 text-light"><span class="count">24</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Programs</span>
                    </div>
                    <div class="col-3 flex dir-col justify-center align-center ">
                        <span class="text-primary text-60 text-light"><span class="count">5</span></span>
                        <span class="kaff-light ls-1-1  text-grey text-uppercase  ">Awarding</span>
                    </div>
                </div>

            </div>

        </div>



    </div>
    <div class="  bg-background  min-h-100 flex dir-col  relative justify-center Services">
        <span class="absolute top-0 left-0  w-full h-full blue-overlay z-5">

        </span>
        <div class="max-width pt-9 pb-9 z-7">
            <div class="flex dir-col  align-center mb-4 ">

                <h4 class="title text-white mb-4 text-center">Our Brand
                </h4>
            </div>
            <div class="col-12 flex brandCards mb-7">
                <div
                    class="brandCard w-half border-white-half-opacity pl-2 flex dir-col justify-center align-center relative">
                    <div class="imgCircleBorder"></div>
                    <div class="img_container">
                        <img src="./assets/images/about-us/brands/our-vision.webp" alt="Our Vision">
                    </div>
                    <h6 class="mb-2-2 mt-3 text-48 text-primary">
                        Our Vision
                    </h6>
                    <p class="kaff-light text-white text-center col-8">
                        To Become a Centre of Excellence for Education through Empowerment of Future Leaders
                    </p>
                </div>
                <div
                    class="brandCard w-half  flex dir-col justify-center align-center relative border-white-half-opacity-right border-white-half-opacity-top border-white-half-opacity-bottom">
                    <div class="imgCircleBorder"></div>
                    <div class="img_container">
                        <img src="./assets/images/about-us/brands/our-mission.webp" alt="Our Mission">
                    </div>
                    <h6 class="mb-2-2 mt-3 text-48 text-primary">
                        Our Mission
                    </h6>
                    <p class="kaff-light text-white text-center col-8">
                        To develop a premier national workforce by providing high quality education, elite training
                        services and professional certifications
                    </p>
                </div>

            </div>
            <div class="flex dir-col  align-center    ">

                <h6 class="title text-primary pb-5 text-48 text-center">Our Values
                </h6>
                <div class="col-12 flex  text-white valueCards">
                    <div
                        class="w-20 border-right-white-15-opacity  row-gap-1-2 valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/star.svg" alt="Excellent">
                        </div>
                        <span class="text-32">Excellent</span>
                        <span class="kaff-light">Lorem ipsum dolor sit</span>

                    </div>
                    <div
                        class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2 valueCard flex dir-col justify-center align-start ">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/diamond.svg" alt="Brilliant">
                        </div>
                        <span class="text-32">Brilliant</span>
                        <span class="kaff-light">Lorem ipsum dolor sit</span>

                    </div>
                    <div
                        class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2 valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/hands.svg" alt="Hospitable">
                        </div>
                        <span class="text-32">Hospitable</span>
                        <span class="kaff-light">In all our practices.</span>

                    </div>
                    <div
                        class="w-20 border-right-white-15-opacity pl-3-2 row-gap-1-2 valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/setting.svg" alt="Accountable">
                        </div>
                        <span class="text-32">Accountable</span>
                        <span class="kaff-light">Delivering our promises.</span>

                    </div>
                    <div class="w-20   row-gap-1-2  pl-3-2  valueCard flex dir-col justify-center align-start">
                        <div class="img_container mb-1-2">
                            <img src="./assets/images/about-us/icons/livello.svg" alt="Responsive">
                        </div>
                        <span class="text-32">Responsive</span>
                        <span class="kaff-light">Lorem ipsum dolor sit</span>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class=" min-h-100 flex dir-col justify-center ">
        <div class="  mb-3 pt-9">
            <div class="max-width">
                <div class="flex dir-col   align-center col-8  mlr-auto  ">
                    <span class="text-center text-uppercase text-primary kaff-light   ls-1-1 mb-1-2">Our Partners</span>
                    <h4 class="title mb-1 text-blue mb-1 text-center">
                        A Title Related to Companies <br>
                        Partners
                    </h4>
                    <span class="lead  kaff-light text-grey text-center lh-28">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium atque rem a quis sequi ducimus
                        voluptatum suscipit, assumenda officia quisquam molestiae? Ut, quos repellendus. </span>
                </div>

            </div>
            <div class="Partners max-width-1440 pt-5 row-gap-4 flex wrap mb-3">
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner1.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner2.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner3.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner5.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner4.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner7.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner8.png" alt="Partners">
                </div>
                <div class="img_container w-25 partner">
                    <img src="./assets/images/home/partner/partner6.png" alt="Partners">
                </div>

            </div>
            <div class="flex justify-center pt-2">
                <a href="#" class="btn btn-primary partnerBtn " data-text="Become a Partner"> </a>
            </div>
        </div>

    </div>
    <div class=" min-h-100 flex dir-col justify-center ">
        <div class="  pb-9 pt-9">
            <div class="max-width">
                <div class="flex dir-col  align-center col-7  mlr-auto  ">
                    <span class="text-center text-uppercase text-primary kaff-light   ls-1-1 mb-1-2">Our Executive
                        Team</span>
                    <h4 class="title mb-1 text-blue mb-1 text-center">
                        A Title Related to Bunyan <br>
                        Team
                    </h4>
                    <span class="lead  kaff-light text-grey text-center lh-28">Lorem ipsum dolor sit amet, consetetur
                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                        sed diam voluptua.</span>
                </div>
            </div>
            <div class="max-width-1440 teamMembers text-center align-center pt-5 flex wrap justify-center mb-3 row-gap-4">
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/nabil-tuker.webp" alt="Nabil Tuker">
                    </div>
                    <span class="text-24 text-blue">Nabil Tuker</span>
                    <span class="kaff-light text-primary">Cheif Executive Officer</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/dr-eihab-abourokbah.webp" alt="Dr. Eihab Abourokbah">
                    </div>
                    <span class="text-24 text-blue">Dr. Eihab Abourokbah</span>
                    <span class="kaff-light text-primary">Chief Opreating Officer</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/andrew-pennington.webp" alt="Andrew Pennington">
                    </div>
                    <span class="text-24 text-blue">Andrew Pennington</span>
                    <span class="kaff-light text-primary">Center Director - Tabuk</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/jean-mayne.webp" alt="Jean Mayne">
                    </div>
                    <span class="text-24 text-blue">Jean Mayne</span>
                    <span class="kaff-light text-primary">Center Director - Madinah</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/ludovic-piniello.webp" alt="Ludovic Piniello">
                    </div>
                    <span class="text-24 text-blue">Ludovic Piniello</span>
                    <span class="kaff-light text-primary">Center Director - Riyadh</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/asma-alotaibi.webp" alt="Asma Alotaibi">
                    </div>
                    <span class="text-24 text-blue">Asma Alotaibi</span>
                    <span class="kaff-light text-primary">Head of Human Resource</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/leena-alnouri.webp" alt="Leena Alnouri">
                    </div>
                    <span class="text-24 text-blue">Leena Alnouri</span>
                    <span class="kaff-light text-primary">Head of Marketing & Spnosorships</span>
                </div>
                <div class="w-20 teamMember flex dir-col align-center row-gap-5px">
                    <div class="img_container1 absolute"></div>
                    <div class="img_container z-5 mb-2-2">
                        <img src="./assets/images/about-us/teams/mohammed-faiq.webp" alt="Muhammad Faiq">
                    </div>
                    <span class="text-24 text-blue">Muhammad Faiq</span>
                    <span class="kaff-light text-primary">Finance Manager</span>
                </div>

            </div>
            <div class="flex justify-center pt-4 ">
                <a href="#" class="btn btn-primary partnerBtn " data-text="Join Our Team"> </a>
            </div>
        </div>

    </div>
    <?php
     include('./components/footer.php')
    ?>
    <script src="./assets/js/jquery.min.js"></script>

    <script src="./assets/js/index.js"></script>
    <script src="./assets/js/numberAnimation.js"></script>
</body>

</html>