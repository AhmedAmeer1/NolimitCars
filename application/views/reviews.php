<!doctype html>
<html>
<style>
    .hide{
        display:none
    }
	.menu-side-wrapper li a{
		color:#fff;
	}
</style>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo $result->meta_keyword; ?>" />
    <meta name="description" content="<?php echo $result->index_meta_desc; ?>" />
    <meta name="title" content="<?php echo $result->index_meta_title; ?>" />
    <meta name="language" content="ES">
   

  


    <title>NoLimitCars</title>

    <link rel="icon" type="img/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon.png')?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min1.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" />
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>

<body>

    <header class="limits-header-wrapper d-md-block d-none">

        <div class="sub-header">
            <div class="container pa-50">
                <div class="row">
                    <div class="col-md-12 text-right no-gutter">
                        <ul>
                      
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container pa-50">
                <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/images/logo.png')?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <div>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url()?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.nolimitcars.co.uk/wp/about-us/">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.nolimitcars.co.uk/wp/faqs/">Faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Reviews/review')?>">reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.nolimitcars.co.uk/wp/contact-us/">contact</a>
                        </li>
                    </ul>                   
                </div>
                <div class="container  text-right new-number" style="padding-top:60px;padding-right: 0px !important;">
                    <a href="tel:02039822911"><img src="<?php echo base_url('assets/images/call.png')?>" alt=""> 02039822911</a>
                </div>
            </div>
                 
            </div>
        </nav>
        
        
    </header>

    <!-- responsive menu -->
    <header class="res-side-menu d-md-none d-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="<?php echo base_url('assets/images/logo.png')?>" class="img-fluid" alt="Logo">
                    <ul class="sub-header-res-new">
                        <!-- <li>
                            <a href="mailto:info@nolimitcars.co.uk"><img src="<?php echo base_url('assets/images/mail.png')?>" alt=""></a>
                        </li> -->
                        <li>
                            <a href="tel:02039822911"><img src="<?php echo base_url('assets/images/call.png')?>" alt=""> 02039822911</a>
                        </li>
                    </ul>
                    <!-- <a href="<?php echo base_url('BookingForm')?>" class="res-head-btn">Book Online</a> -->
                </div>
            </div>
            <!-- <button id="menu-btn" class="brgn-btn">X</button> -->
            <button id="menu-btn" class="navbar-toggler brgn-btn collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        </button>
        </div>
    </header>

    

    <div class="menu-side-wrapper d-md-none d-block">
        <ul>
            <li>
                <a href="<?php echo base_url()?>">Home</a>
            </li>
            <li>
                <a href="https://www.nolimitcars.co.uk/wp/about-us/">About Us</a>
            </li>
            <li>
                <a href="https://www.nolimitcars.co.uk/wp/faqs/">Faq</a>
            </li>
            <li>
                <a href="<?php echo base_url('Reviews/review')?>">reviews</a>
            </li>
            <li>
                <a href="https://www.nolimitcars.co.uk/wp/contact-us/">contact</a>
            </li>
        </ul>
    </div>

    <section class="review-wrapper-main">
    </section>
<?php
  // pr($reviews);exit;
?>
    <section class="review-content">
        <h1>REVIEWS</h1>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <?php foreach($reviews['data'] as $rvw){?>
                    <div class="col-md-4">
                        <div class="box">
                            <a href="<?php echo base_url('Reviews/reviewDetails/'.encode_param($rvw['id']))?>" class="user"><?php echo $rvw['first_name'];?> <?php echo $rvw['last_name'];?></a>
                            <h3><?php echo date_format(new DateTime($rvw['created_at']),"dS M Y"); ?></h3>
                                <fieldset class="rating prevent-click">
                                    <input type="radio" <?php echo $rvw['rating'] == '5' ? 'checked':''?> 
                                    id="star5_<?php echo $rvw['id']?>" name="rating_<?php echo $rvw['id']?>" value="5" />
                                    <label for="star5_<?php echo $rvw['id']?>" title="Rocks!">5 stars</label>
                                    <input type="radio" <?php echo $rvw['rating'] == '4' ? 'checked':''?> 
                                    id="star4_<?php echo $rvw['id']?>" name="rating_<?php echo $rvw['id']?>" value="4" />
                                    <label for="star4_<?php echo $rvw['id']?>" title="Pretty good">4 stars</label>
                                    <input type="radio" <?php echo $rvw['rating'] == '3' ? 'checked':''?> 
                                    id="star3_<?php echo $rvw['id']?>" name="rating_<?php echo $rvw['id']?>" value="3" />
                                    <label for="star3_<?php echo $rvw['id']?>" title="Meh">3 stars</label>
                                    <input type="radio" <?php echo $rvw['rating'] == '2' ? 'checked':''?> 
                                    id="star2_<?php echo $rvw['id']?>" name="rating_<?php echo $rvw['id']?>" value="2" />
                                    <label for="star2_<?php echo $rvw['id']?>" title="Kinda bad">2 stars</label>
                                    <input type="radio" <?php echo $rvw['rating'] == '1' ? 'checked':''?> 
                                    id="star1_<?php echo $rvw['id']?>" name="rating_<?php echo $rvw['id']?>" value="1" />
                                    <label for="star1_<?php echo $rvw['id']?>" title="Sucks big time">1 star</label>
                                </fieldset>
                            <div class="clear"></div>
                            <h4><?php echo $rvw['comment']; ?></h4>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <footer class="limits-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center order-md-0 order-1">
                    <h1>Book a Taxi</h1>
                    <h2>Tel: <a href="tel:02039822911" class="footer-contact">02039822911</a></h2>
                </div>
                <div class="col-md-4 no-gutter text-center order-md-1 order-0">
                    <img src="<?php echo base_url('assets/images/logo.png')?>" class="img-fluid footr-logo" alt="Logo">
                    
                </div>
                <div class="col-md-4 text-center order-md-2 order-2">
                    <h1>Email us</h1>
                    <h2><a href="mailto:info@nolimitcars.co.uk" class="footer-contact">info@nolimitcars.co.uk</a></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>All major credit cards accepted</h3>
                    <ul class="social-media">
                        <li>
                            <a href="https://twitter.com/nolimit_cars" target="_blank"><img src="<?php echo base_url('assets/images/twitter.png')?>" alt="icon"></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/nolimitcars/" target="_blank"><img src="<?php echo base_url('assets/images/linkedin.png')?>" alt="icon"></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/nolimitcars8/" target="_blank"><img src="<?php echo base_url('assets/images/insta.png')?>" alt="icon"></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/nolimitcarsltd/" target="_blank"><img src="<?php echo base_url('assets/images/facebook.png')?>" alt="icon"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-md-4 mt-3">
                <div class="col-md-6">
                    <ul class="side-menu">
                        <li><a href="">© NOLIMIT Cars 2017</a></li>
                        <li><a href="https://www.nolimitcars.co.uk/wp/about-us/">About</a></li>
                        <li><a href="https://www.nolimitcars.co.uk/wp/terms-and-conditions/">Terms</a></li>
                        <li><a href="https://www.nolimitcars.co.uk/wp/drivers/">Drivers</a></li>
                        <!--<li><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Areas</a>-->
                    </ul>
                </div>
                <div class="col-md-6">
                   <h6 class="credit"> Crafted by <a href="https://www.solutions2xl.com/" target="_blank" >2XL</a></h6>
                </div>
            </div>
            
        </div>
    </footer>

    <!--<div class="collapse areas-main" id="collapseExample">
        <div class="container">
            <div class="areas-wrapper">
                <h1>Popular Destinations</h1>
                <ul class="mb-5">
                    <li>Birmingham</li>
                    <li>Blackpool</li>
                    <li>Bournemouth</li>
                    <li>Bristol</li>
                    <li>Cardiff</li>
                    <li>Coventry</li>
                    <li>East Midlands</li>
                    <li>Exeter</li>
                    <li>Euston Station</li>
                    <li>Gatwick</li>
                    <li>Heathrow</li>
                    <li>humberside</li>
                    <li>Leeds-Bradford</li>
                    <li>Liverpool</li>
                    <li>London City</li>
                </ul>
                <ul>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-brighton/"> LOCAL TAXI CAB HIRE COMPANY BRIGHTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-brighton/"> LOCAL MINI CAB HIRE COMPANY BRIGHTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-brighton/"> LOCAL CORPORATE TAXI CAB COMPANY BRIGHTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-brighton/"> LOCAL CHAUFFEURED CAR HIRE COMPANY BRIGHTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-brighton/"> LOCAL AIRPORT TAXI TRANSFER COMPANY BRIGHTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-clifton-in-bristol/"> LOCAL TAXI CAB HIRE COMPANY CLIFTON IN BRISTOL</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-clifton-in-bristol/"> LOCAL MINI CAB HIRE COMPANY CLIFTON IN BRISTOL</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-clifton-in-bristol/"> LOCAL CORPORATE TAXI CAB COMPANY CLIFTON IN BRISTOL</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-clifton-in-bristol/"> LOCAL CHAUFFEURED CAR HIRE COMPANY CLIFTON IN BRISTOL</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-clifton-in-bristol/"> LOCAL AIRPORT TAXI TRANSFER COMPANY CLIFTON IN BRISTOL</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-gatwick-airport/"> LOCAL TAXI CAB HIRE COMPANY GATWICK AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-gatwick-airport/"> LOCAL MINI CAB HIRE COMPANY GATWICK AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-gatwick-airport/"> LOCAL CORPORATE TAXI CAB COMPANY GATWICK AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-gatwick-airport/"> LOCAL CHAUFFEURED CAR HIRE COMPANY GATWICK AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-heathrow-airport/"> LOCAL TAXI CAB HIRE COMPANY HEATHROW AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-heathrow-airport/"> LOCAL MINI CAB HIRE COMPANY HEATHROW AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-heathrow-airport/"> LOCAL CORPORATE TAXI CAB COMPANY HEATHROW AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-heathrow-airport/"> LOCAL CHAUFFEURED CAR HIRE COMPANY HEATHROW AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-heathrow-airport/"> LOCAL AIRPORT TAXI TRANSFER COMPANY HEATHROW AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-hove/"> LOCAL TAXI CAB HIRE COMPANY HOVE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-hove/"> LOCAL MINI CAB HIRE COMPANY HOVE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-hove/"> LOCAL CORPORATE TAXI CAB COMPANY HOVE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-hove/"> LOCAL CHAUFFEURED CAR HIRE COMPANY HOVE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-hove/"> LOCAL AIRPORT TAXI TRANSFER COMPANY HOVE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-luton-airport/"> LOCAL TAXI CAB HIRE COMPANY LUTON AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-luton-airport/"> LOCAL MINI CAB HIRE COMPANY LUTON AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-luton-airport/"> LOCAL CORPORATE TAXI CAB COMPANY LUTON AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-luton-airport/"> LOCAL CHAUFFEURED CAR HIRE COMPANY LUTON AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-luton-airport/"> LOCAL AIRPORT TAXI TRANSFER COMPANY LUTON AIRPORT</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-ocean-village/"> LOCAL TAXI CAB HIRE COMPANY OCEAN VILLAGE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-ocean-village/"> LOCAL MINI CAB HIRE COMPANY OCEAN VILLAGE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-ocean-village/"> LOCAL CORPORATE TAXI CAB COMPANY OCEAN VILLAGE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-ocean-village/"> LOCAL CHAUFFEURED CAR HIRE COMPANY OCEAN VILLAGE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-ocean-village/"> LOCAL AIRPORT TAXI TRANSFER COMPANY OCEAN VILLAGE</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-preston-park/"> LOCAL TAXI CAB HIRE COMPANY PRESTON PARK</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-preston-park/"> LOCAL MINI CAB HIRE COMPANY PRESTON PARK</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-preston-park-2/"> LOCAL CORPORATE TAXI CAB COMPANY PRESTON PARK</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-preston-park/"> LOCAL CHAUFFEURED CAR HIRE COMPANY PRESTON PARK</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-preston-park/"> LOCAL AIRPORT TAXI TRANSFER COMPANY PRESTON PARK</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-taxi-cab-hire-company-southampton/"> LOCAL TAXI CAB HIRE COMPANY SOUTHAMPTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-mini-cab-hire-company-southampton/"> LOCAL MINI CAB HIRE COMPANY SOUTHAMPTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-corporate-taxi-cab-company-southampton/"> LOCAL CORPORATE TAXI CAB COMPANY SOUTHAMPTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-chauffeured-car-hire-company-southampton/"> LOCAL CHAUFFEURED CAR HIRE COMPANY SOUTHAMPTON</a></li>
                    <li><a href="https://www.nolimitcars.co.uk/local-airport-taxi-transfer-company-southampton/"> LOCAL AIRPORT TAXI TRANSFER COMPANY SOUTHAMPTON</a></li>
                </ul>
            </div>
        </div>
    </div>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.3.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.touchSwipe.min.js')?>"></script>
    <script src="https://use.fontawesome.com/1e36072efd.js"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
</html>