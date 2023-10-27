<!doctype html>
<html>
<style>
    .image-width{
        width:57%;
    }
    .hide{
        display:none
    }
	.paymentalert{
		position:relative;
		color:#f38422;
		font-size:20px;
		text-align:center;
		padding:50px 20px 0;
	}
	.paymentalert a{
		text-decoration:underline;
	}
	.menu-side-wrapper li a{
		color:#fff;
	}
	p.flagimg{
		font-size:33px !important;
		line-height:40px !important;
		margin-top:35px !important;
		font-weight:bold;
		padding-left: 45px;
		background-image: url(../assets/images/union-flag.jpg);
		background-position: left center;
		background-size: 40px;
		background-repeat: no-repeat;
	}
	/*================(640)================*/
	@media screen and (max-width: 40em) {
		.paymentalert{
			font-size:16px;
			padding:50px 5px 0;
		}
		p.flagimg{
			font-size:26px !important;
			padding-left:40px;
			background-size:35px;
			margin-top:15px !important;
		}
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
    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-230246454-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-230246454-1');
   </script> 
 
</head>

<body>



<?php $this->load->view('common_components/header'); ?>



    <main class="home">
       
        <div class="responsive-header-image"></div>
        <section class="limits-banner">
            <div class="container no-gutter-responsive">
                <div class="row no-gutter-responsive">
                    <div class="col-md-6 no-gutter-responsive lite-gutter">
                        <div class="book-form-box">
                            <div class="head">
                                <h1>BOOK NOW</h1>
                                <img src="assets/images/pay-options.png" class="img-fluid image-width" alt="Payement">
                            </div>
                            <?php 
                           $redirectUrl = (isset($customer_id) && !empty($customer_id))
                            ?'Index/Search'.$customer_id
                            :'Index/Search';
                            if($this->session->flashdata('message')) { 
                                $flashdata = $this->session->flashdata('message'); ?>
                                <div class="alert alert-<?= $flashdata['class'] ?>">
                                <?= $flashdata['message'] ?>
                            </div>
                        <?php } ?>
                            <div class="content">
                                <div class="form-inner">
                                <form id="createCustomerForm" role="form" action="<?=base_url($redirectUrl)?>" method="post" class="validate" data-parsley-validate="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>PICKUP LOCATION</label>
                                        <div id="search_car"> 
											<input type="text" class="form-control autocompleteDoc" name="source" required id="pickPoint" placeholder="Enter a location">
											<input type="hidden" class="lat_perfect" id="sourceLat" name="sourceLat">
											<input type="hidden" class="lon_perfect" id="sourceLon" name="sourceLon">
                                            <input type="hidden" id="total_way_points" name="total_way_points">
										</div>
                                    </div>
                                    <div class="way-points">
                                       
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>DESTINATION</label>
                                           
                                            <button style="float:right"><i class="fa fa-plus-circle multi-root " ></i> Multi Route</button>
                                        </div>
                                        
                                        <input type="text" class="form-control autocompleteDoc" name="destination" required id="dropPoint" placeholder="Enter a location">
										<input type="hidden" class="lat_perfect" id="destLat" name="destLat">
										<input type="hidden" class="lon_perfect" id="destLong" name="destLong">
                                    </div>
                                    <button id="createCustomerSubmit" type="submit" class="submit-btn">GET A QUOTE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 no-gutter-responsive lite-gutter">
                        <div class="banner-details">
                            <h1>ALL UK AIRPORTS & OTHER SERVICES</h1>
                            <p>WE specialise in  minicabs transfers to and from all UK airports for both individuals and groups, with the accent on a courteous and thoroughly professional personal service at affordable prices. 24 hours a day, 7 days
                                a week </p>
                            <p>Please <a href="mailto:info@nolimitcars.co.uk">email us</a> with as many details as possible and we will email you back with a quote as soon as possible. The price we quote is the price you pay.</p>
                            <p> If you would like a quote for a journey you are planning please use our online booking form or call us on <a href="tel:02039822911" class="block-span">02039 822 911</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="carlist-wrapper">
            <div class="container no-gutter-responsive">
                <h1>OUR FLEET</h1>
                <div class="row mt-2 no-gutter-responsive">
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>SALOON CAR</h2>
                            <img src="assets/images/fleet-1.png" class="img-fluid" alt="car">
                            <h3><span>3</span> Passengers</h3>
                            <h3><span>3</span> Suitcases</h3>
                            <p>Up to 3 passengers plus 3 suitcases (20kg max) or 4 passengers plus hand luggage.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>ESTATE CAR</h2>
                            <img src="assets/images/fleet-2.png" class="img-fluid" alt="car">
                            <h3><span>4</span> Passengers</h3>
                            <h3><span>4</span> Suitcases</h3>
                            <p>Up to 4 passengers plus 4 suitcases (20kg max).</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>PEOPLE CARRIER</h2>
                            <img src="assets/images/fleet-3.png" class="img-fluid" alt="car">
                            <h3><span>5</span> Passengers</h3>
                            <h3><span>5</span> Suitcases</h3>
                            <p>Up to 5 passengers plus 5 suitcases (20kg max) or 6 passengers plus hand luggage.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>EXECUTIVE CAR</h2>
                            <img src="assets/images/fleet-4.png" class="img-fluid" alt="car">
                            <h3><span>3</span> Passengers</h3>
                            <h3><span>3</span> Suitcases</h3>
                            <p>Up to 3 passengers plus 3 suitcases (20kg max) or 4 passengers plus hand luggage</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>8 SEATER MINIBUS</h2>
                            <img src="assets/images/fleet-6.png" class="img-fluid" alt="car">
                            <h3><span>8</span> Passengers</h3>
                            <h3><span>8</span> Suitcases</h3>
                            <p>8 passengers plus up to 8 suitcases (20kg max)</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>EXECUTIVE PEOPLE CARRIER</h2>
                            <img src="assets/images/fleet-5.png" class="img-fluid" alt="car">
                            <h3><span>5</span> Passengers</h3>
                            <h3><span>5</span> Suitcases</h3>
                            <p>Up to 5 passengers plus 5 suitcases (20kg max) or 6 passengers plus hand luggage.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>MOBILITY TAXIS</h2>
                            <img src="assets/images/fleet-8.png" class="img-fluid" alt="car">
                            <h3><span>4</span> Passengers</h3>
                            <h3><span>1</span> Suitcases</h3>
                            <p>Exclusive to wheelchairs and passengers with disabilities. Any mobility scooter and wheelchair. Up to 4 passengers along with a 1 wheelchair passenger and luggages (20kg max).</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>VIP</h2>
                            <img src="assets/images/fleet-9.png" class="img-fluid" alt="car">
                            <h3><span>2</span> Passengers</h3>
                            <h3><span>2</span> Suitcases</h3>
                            <p>Up to 2 passengers plus 2 suitcases (20kg max) or 3 passengers plus hand luggage.</p>
                        </div>
                    </div>
                  
      
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>SUV</h2>
                            <img src="assets/images/fleet-10.png" class="img-fluid" alt="car">
                            <h3><span>3</span> Passengers</h3>
                            <h3><span>3</span> Suitcases</h3>
                            <p>Up to 3 passengers plus 3 suitcases (20kg max) or 4 passengers plus hand luggage.</p>
                        </div>
                    </div>
                  
                  
               
                    <div class="col-md-3">
                        <div class="car-box">
                            <h2>16 SEATER MINIBUS</h2>
                            <img src="assets/images/fleet-7.png" class="img-fluid" alt="car">
                            <h3><span>12</span> Passengers</h3>
                            <h3><span>12</span> Suitcases</h3>
                            <p>12 passengers plus up to 12 suitcases (20kg max) or 16 passengers with hand luggage.</p>
                        </div>
                    </div>
                
  
                
                    <div class="col-md-6">
                        <div class="list-details-box">
                            <h4>Your destination is our goal</h4>
                            <p>From the moment you contact us, we will do everything we can to ensure that your booking and transfer go as smoothly as possible. That means we provide highly professional minicabs, minibus, executive, chauffeur and parcel services
                                for the number of passengers and the luggage requirements specified by you and provide you with an experienced driver with proven customer service skills and an extensive knowledge of the local area.</p>
                           
                            <p class="disability">We provide wheelchair vehicles, specially designed vehicles for disability people. You can see our large fleet service.     </p>
                            <p class="flagimg">SERVICES NATIONWIDE</p>
                            
                        </div>
                    </div>
                </div>
                <!-- <div class="paymentalert">Our payment system is under maintenance, please call us on <a href="tel:02039822911">02039822911</a> or email on <a href="mailto:info@nolimitcars.co.uk">info@nolimitcars.co.uk</a> for booking</div> -->
            </div>
        </section>
        



    </main>

    <?php $this->load->view('common_components/footer'); ?>

   

    
    
    

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.3.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.touchSwipe.min.js')?>"></script>
    <script src="https://use.fontawesome.com/1e36072efd.js"></script>
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
</body>
<!-- AIzaSyBn6hOlr6YHcZAmbptlsmbhvH5iQllWflE -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $result->google_api_key; ?>&sensor=false&libraries=places"></script>
 
 <script type="text/javascript">



var chnaged_id ="pickPoint";

$( "#createCustomerForm" ).delegate( 'input', "keyup", function() {
    chnaged_id = $(this).attr('id');
    find_locations(chnaged_id)
    
})



 function find_locations(chnaged_id){ 

    var options = {
   // types: ['(cities)'],
    componentRestrictions: {country: "uk"}
        };
    var places = new google.maps.places.Autocomplete(document.getElementById(chnaged_id),options);
    //console.log('places',places.getPlace())
        google.maps.event.addListener(places, 'place_changed', function () {
        var place = places.getPlace();
             var address = place.formatted_address;
             var latitude = place.geometry.location.lat();
             var longitude = place.geometry.location.lng();
              var mesg = "Address: " + address;
             mesg += "\nLatitude: " + latitude;
             mesg += "\nLongitude: " + longitude;
           // alert(mesg)
             if(chnaged_id=="pickPoint")
             {
                
                 $("#sourceLat").val(latitude);
                 $("#sourceLon").val(longitude);
                 
             }else if(chnaged_id=="dropPoint"){
               
                 $("#destLat").val(latitude);
                 $("#destLong").val(longitude);
             }
            
         });
    
         
        }
$( "#createCustomerForm" ).delegate( '.multi-root', "click", function() {
    var total_way_points = $('.multi-btn').length;
    var next_way_point = parseInt(total_way_points)+1;
    $("#total_way_points").val(next_way_point) ;
    if(next_way_point > 3){
        $("#total_way_points").val('3');
        alert("OOPS !!! way Points limited to 3");
        return;
    }
    
     var html ='<div id="way-points-div-'+next_way_point+'" class="form-group"><div class="d-flex justify-content-between"><label>WAY POINT</label> <span class="chbs-location-remove chbs-meta-icon-minus remove-multi-root"></span> <button style="float:right" class="multi-btn" ><i class="fa fa-plus-circle multi-root " ></i> Multi Route</button><button style="float:right"><i class="fa fa-minus-circle remove-multi-root" data-index = '+next_way_point+' ></i> </button></div><input type="text" class="form-control autocompleteDoc" name="wayPoint-'+next_way_point+'" required id="wayPoint-'+next_way_point+'" placeholder="Enter a location"><input type="hidden" class="lat_perfect" id="lat_doc" name="destLat"><input type="hidden" class="lon_perfect" id="lon_doc" name="destLong">';
     if($('.way-points').hasClass('hide')){
        $('.way-points').removeClass('hide')
        
     }
     $('.way-points').append(html)
});
$( "#createCustomerForm" ).delegate( '.remove-multi-root', "click", function() {
    var id = $(this).attr('data-index')
   $("#way-points-div-"+id).remove();
})

 </script>
</html>
