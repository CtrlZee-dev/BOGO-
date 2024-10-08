<?php
ob_start();
session_start();
// Other PHP code follows
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesign.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js'></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            /* Prevent horizontal overflow */
        }


        .testimonial-container {
            display: grid;
            margin: 30px 100px;
            grid-template-columns: 0.5fr 0.4fr;
            gap: 30px;
            justify-content: center;
            align-items: center;
        }

        .testimonial {
            display: flex;
            border: 2px solid #e1ddd8;
            padding: 30px;
            gap: 20px;
            font-family: "Mulish", sans-serif;



        }

        .user-info p {
            margin-bottom: 14px;
        }

        .user-name {
            font-style: italic;
            font-weight: 400;
        }

        .user-testimonial {
            font-size: 0.9rem;
        }

        .testimonial img {
            width: 80px;
            border-radius: 50%;

        }

        #home-pg {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .background-section {
            width: 100%;
            padding: 0;
        }

        .home-headline {
            text-align: center;
            padding: 20px;
        }

        .who-container,
        .discover-container,
        .explore-container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .category-container {
            display: inline-block;
            margin: 10px;
            vertical-align: top;
        }


        .category-container img {
            display: block;
            margin: 0 auto;
        }

        .category {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .category-container {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            padding: 15px;
            margin-bottom: 20px;
        }

        .category-container img {
            max-width: 100%;
            height: auto;
        }

        .category-name {
            margin-top: 10px;
            font-size: 1.2em;
        }

        .shopBtns {
            width: 100%;
        }

        @media (max-width: 991.98px) {
            #headlyn {
                font-size: 3rem;
            }

            #cate {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }

        @media (max-width: 575.98px) {
            #headlyn {
                font-size: 1.7rem;
            }

            #cate {
                grid-template-columns: 0.9fr;
                gap: 15px;
            }
        }



        @media (max-width: 600px) {
            #headlyn {
                font-size: 2.3rem;
            }

            .who-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                /* Center align text */
            }

            .who-container .bogo-img {
                max-width: 100%;
                order: 1;

                height: auto;

            }

            .who-container .bogo-intro {
                margin-top: 20px;
                order: 2;

            }



        }



        @media (max-width: 768px) {
            .who-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
            }


            .bogo-img,
            .explore-container img {
                width: 100%;
            }

            .category-container {
                width: 100%;
                margin: 10px 0;
            }


            .home-headline h1,
            .home-headline p,
            .explore-headline,
            .bogo-headline,
            .explore-subheading {
                font-size: 1.2em;
            }
        }


        @media (min-width: 601px) and (max-width: 767px) {
            .who-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
                /* Adjust gap as needed */
                justify-content: center;
                align-items: center;

                /* Adjust margin as needed */
            }

            .who-container .bogo-img {
                max-width: 100%;
                height: auto;
                order: 2;
            }

            .who-container .bogo-intro {
                order: 1;
            }


        }

        .card {

            border: none;
        }

        .user-content p {
            margin-top: 5px;
            font-size: 12px;
        }


        .ratings i {
            color: yellowgreen;
        }

        a {
            color: #000;
            /* Set your desired color */
            text-decoration: none;
            /* Remove underline if needed */
        }

        a:hover {
            color: inherit;
            text-decoration: none;
            /* Set the same color on hover */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            /* Change arrow background color */
            width: 50px;
            height: 50px;
        }

        .carousel-control-prev-icon:after,
        .carousel-control-next-icon:after {
            content: '';
            font-size: 2rem;
            color: #fff;
            /* Arrow color */
        }
    </style>
</head>

<body>

    <div id="home-pg" class="background-section">
        <div>
            <?php include('./includes/w_header.php'); ?>

            <div class="home-headline">
                <h1 class="heading">Say Hello to Glow</h1>
                <p class="subheading">Because gorgeous, glowing skin<br>is for everyone.</p>
                <a href="products.php">
                    <button type="button" class=" ">Shop Now →</button>
                </a>
            </div>
        </div>
    </div>

    <!-- WHO WE ARE SECTION -->
    <section id="who-we-are">
        <h1 class="bogo-headline " id="headlyn">Buy One Give One</h1>
        <div class="who-container row">
            <div class="bogo-intro col-md-6">
                <p class="bogo-subheading">Our buy-one-give-one model empowers communities and promotes self-confidence by giving skincare products to those in need. By purchasing on our platform, not only will you improve your skincare routine, you are changing someone else's life as well.</p>
                <button type="button" id="btnToStory" class="btn btn-secondary">
                    <a href="ourStory.php">Learn More →</a>
                </button>
            </div>
            <div class="col-md-6">
                <img src="./images/g.avif" class="bogo-img img-fluid" alt="BOGO Image">
            </div>
        </div>
    </section>

    <section id="discover">
        <div class="discover-container">
            <h1 class="bogo-headline" id="headlyn">Discover Skincare Products <br /> That Make a Difference</h1>
            <div class=" category " id="cate">
                <div class="category-container">
                    <img src="./images/q1.jpg" class="img-fluid" alt="Serums & Treatments">
                    <p class="category-name">Serums & Treatments</p>
                    <button type="button" class="shopBtns btn btn-primary" id="btnShop-serums">Shop now</button>
                </div>
                <div class="category-container ">
                    <img src="./images/q1.jpg" class="img-fluid" alt="Make Up">
                    <p class="category-name">Make Up</p>
                    <button type="button" class="shopBtns btn btn-primary" id="btnShop-makeUp">Shop now</button>
                </div>
                <div class="category-container ">
                    <img src="./images/q1.jpg" class="img-fluid" alt="Moisturiser & Scrubs">
                    <p class="category-name">Moisturiser & Scrubs</p>
                    <button type="button" class="shopBtns btn btn-primary" id="btnShop-moisturiser">Shop now</button>
                </div>

                <div class="category-container ">
                    <img src="./images/q1.jpg" class="img-fluid" alt="Accessories">
                    <p class="category-name">Accessories</p>
                    <button type="button" class="shopBtns btn btn-primary" id="btnShop-accessories">Shop now</button>
                </div>
            </div>
        </div>
    </section>


    <section id="explore">
        <h1 class="bogo-headline" id="headlyn">Transforming Lives,<br> One Purchase at a Time</h1>
        <div class="who-container row">
            <div class="bogo-intro col-md-6">
                <p class="bogo-subheading">Our Goal goes beyond skincare. We're committed to empowerisng individuals in underserved communities, providing them with access to quality skincare products and the resources they need to feel confident in their own skin</p>
                <button type="button" id="btnToStory" class="btn " style="border: 1px solid black;">
                    <a href="whatWeDo.php">Learn More →</a>
                </button>
            </div>
            <div class="col-md-6">
                <img src="./images/explore.jpg" class="bogo-img img-fluid" alt="Explore Image">
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <?php include('./includes/footer.php'); ?>

    <script src="./assets/index.js"></script>

    <script>
        // Ensure the carousel wraps around continuously
        $(document).ready(function() {
            $('#testimonialCarousel').carousel({
                wrap: true
            });
        });
    </script>
</body>

</html>