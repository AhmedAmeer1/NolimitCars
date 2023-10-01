<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>faq</title>
<link rel="icon" type="img/png" sizes="32x32" href="<?php echo base_url('assets/images/favicon.png')?>">
<!-- <link rel="stylesheet" href="./css/faqs.css"> -->
<link rel="stylesheet" href="<?= base_url('assets/css/faqs.css') ?>">
</head>
    <body>


    <?php $this->load->view('common_components/header'); ?>
    <section id="content">
    <section class="commonbanner">
        <div class="sub_banner_overlay"></div>
        <img src="<?php echo base_url('assets/images/nolimit-banner.jpg')?>">
    </section>
    <section class="subpagecontent">
        <img src="<?php echo base_url('assets/images/nolimit-body.jpg')?>">
        <div class="wrapper">
            <div class="subcontent_wrapper">
                <h1>Nolimit Client FAQS</h1>
                <span class="contenthead">HOW DO I MAKE BOOKING?</span>
                <p>Online or by phone. If you don’t know the address (postcode) please email us and fill the details as much as possible.</p>
                <span class="contenthead">WILL I RECEIVE A BOOKING CONFIRMATION?</span>
                <p>You will receive a welcome email containing your login details and password on your first booking with us. You will automatically receive a NOLIMIT CARS acknowledgement email for the journey you have made. We will send you your journey details, pick up instructions and the driver phone number when the journey has been assigned to driver.</p>
                <span class="contenthead">IF I HAVEN'T RECEIVED MY BOOKING CONFIRMATIONS AND TRANSFER IMMINENT</span>
                <p>Please call us above phone number we will deal ASAP. We are available 24/7 so you call us at any time.</p>
                <span class="contenthead">EXTRA CHARGES AND RECEIPT</span>
                <p>We won’t charge for flight delays as we will track your flight. If you are delayed more than one hour after flight landed there may some be some additional charges, please see our T&amp;C. You will receive your RECEIPT 12 hours after the journey.</p>
            </div>
        </div>
    </section>
</section>
<?php $this->load->view('common_components/footer'); ?>
<script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    </body>
    </html>