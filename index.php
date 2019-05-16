<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>iii</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- JQuery needed for Boostrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/responsive.css">
</head>

<body>
    <header> 
        <?php
            require 'header.php';
        ?>
    </header>

    <div id="main">
        <!-- BANNER -->
        <div class="banner-wrapper">
            <!-- <img src="res/img/banner.jpg" alt="Banner"> -->

            <!-- CAROUSEL -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="4000">
                        <img src="res/img/banner1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="res/img/banner2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="4000">
                        <img src="res/img/banner3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- END OF CAROUSEL -->
        </div>
        

        <!-- THREE CARDS (welcome) -->
        <div class="welcome-wrapper">
            <h1 id="title">WELCOME TO OUR COMPANY</h1>
            <h1 id="subtitle">
                
                <span class="underline">WE BRING MAINTENANCE TO THE NEXT LEVEL</span>
            </h2>

            <div class="cardIMG-wrapper">
                <div class="cardIMG-item">
                    <div class="cardIMG" id="cardIMG-one">
                        <div class="cardIMG-caption"> Technology </div>
                    </div>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>

                <div class="cardIMG-item">
                    <div class="cardIMG" id="cardIMG-two">
                        <div class="cardIMG-caption"> Quality </div>
                    </div>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>

                <div class="cardIMG-item">
                    <div class="cardIMG" id="cardIMG-three">
                        <div class="cardIMG-caption"> The Staff </div>
                    </div>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>
            </div>
        </div>

        <!-- THREE CARDS (Product) -->
        <div class="product-wrapper">
            <h1>Products</h1>

            <div class="product-card">
                <img src="res/img/product1.jpg" alt="">
                <div class="product-caption">
                    <h3 class="needRev">New Technologies</h3>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>
            </div>

            <div class="product-card">
                <img src="res/img/product2.jpg" alt="">
                <div class="product-caption">
                    <h3 class="needRev">New Technologies</h3>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>
            </div>

            <div class="product-card">
                <img src="res/img/product3.jpg" alt="">
                <div class="product-caption">
                    <h3 class="needRev">New Technologies</h3>
                    <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures and prescribes detailed actions to mitigate risks and solve problems.</p>
                </div>
            </div>

        </div>

        <!-- Services and Three Logo -->
        <div class="service-wrapper">
            <div class="service-item" id="svc1">
                <h1>Services</h1>
                <p class="needRev">Most condition monitoring products only detect anomalies by trying to identify when actual behavior differs from what is expected. The most common approach is to use mathematical or statistical models based on engineering, thermodynamic and heat/mass balance equations. Such models typically contain inaccuracies; they also fail to factor in process changes.</p>
                <p class="needRev">Most condition monnitoring products only detect anomalies by trying to identify when actual behavior differs from what is expected. The most common approach is to use mathematical or statistical models based on engineering,</p>
            </div>

            <div class="service-item" id="threeIcon-wrapper">
                <div id="icon-item">
                    <div class="icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="icon-caption">
                        <h6>Worldwide Provider</h6>
                        <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures</p>
                    </div>
                </div>

                <div id="icon-item">
                    <div class="icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="icon-caption">
                        <h6>Number One Supplier</h6>
                        <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures</p>
                    </div>
                </div>

                <div id="icon-item">
                    <div class="icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="icon-caption">
                        <h6>New Technologies</h6>
                        <p class="needRev">Vibsense delivers the earliest and most accurate warning of equipment failures</p>
                    </div>
                </div>
            </div>

            <div class="service-item" id="svc3">
                <!-- EMPTY SPACER -->
                <img src="res/img/service.jpg" alt="" id="service-img">
            </div>
        </div>
    </div>

    <!-- contact us -->
    <footer>
        <h1>Contact Us</h1>
        <div class="contact-wrapper">
            <div class="contact-spacer"></div>

            <div class="contact-item">
                <div class="contact-details">
                    <h3>Phone</h3>
                    <p>(+62) 813 999 88 972</p>
                </div>
            </div>

            <div class="contact-item">
            <div class="contact-details">
                    <h3>Email</h3>
                    <p>sales@iii.sg</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-details">
                    <h3>Address</h3>
                    <p>8 Burn Road #12-05<br>Trivex Singapore<br>369977<br>Singapore</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-details" id="sosmed-resp">
                    <h3>Get in Touch</h3>
                    <div class="contact-sosmed">
                        <a href="https://www.facebook.com/" target="_blank" id="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" id="instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" id="linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-spacer"></div>
        </div>
    </footer>
    
</body>

</html>

