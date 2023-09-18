<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="<?= base_url('assets/css/contact.css') ?>">
</head>
<body>
<?php $this->load->view('common_components/header'); ?>
    <section id="content">
        <section class="commonbanner">
            <div class="sub_banner_overlay"></div>
            <img src="https://www.nolimitcars.co.uk/wp/wp-content/uploads/2020/02/about-us.jpg">
        </section>
        <section class="subpagecontent">
            <img src="https://www.nolimitcars.co.uk/wp/wp-content/uploads/2020/02/faq-content.jpg">
            <div class="wrapper">
                <div class="contact_wrapper">
                    <div class="columnwrapper">
                        <div class="contact_column">
                            <h1>Contact details</h1>
                            <div class="address_wrapper">
                                <!--<span class="sitename">NoLimit Cars Limited</span><br>-->
                                <!--Smallmead House<br>
                                Smallmead<br>
                                Gatwick<br>
                                RG6 9LW<br>
                                  <br>-->
                                <!--Redhill Kingsgate<br />
                                62 High Street<br />
                                Redhill<br />
                                Surrey<br />
                                RH1 1SG<br /><br />-->
                                <span class="sitename">NOLIMIT CARS LTD</span><br>
                                102 MULBERRY CRESCENT<br>
                                WEST DRAYTON<br>
                                UB7 9AJ<br><br>
    
                                Email us at <a class="contactmail" href="mailto:info@nolimitcars.co.uk">info@nolimitcars.co.uk</a><br>
                                Telephone: <a href="tel:01293775422">01293 775422</a><br>
                                <br>
                                <span class="sitename">NOLIMIT AIRPORT LTD.</span> <br>
                                Registered England and Wales.<br>
                                Registration No: 11212437
                            </div>
                        </div>
                        <div class="contact_column">
                        <form action="" method="post" name="form1" id="form1">
                            <h1>Enquiry form</h1>
                            <ul class="formfields">
                                <li><input name="contactname" id="contactname" type="text" placeholder="YOUR NAME*" class="validate[required] text-input"></li>
                                <li><input name="contactmail" id="contactmail" type="text" placeholder="YOUR EMAIL*" class="validate[required,custom[email]] text-input"></li>
                                <li><input name="contactnumber" id="contactnumber" type="text" placeholder="CONTACT NUMBER" class=""></li>
                                <li><textarea name="contactmessage" cols="" rows="" id="contactmessage" placeholder="YOUR ENQUIRY" class=""></textarea></li>
                                <li><input name="Gcode" id="Gcode" size="10" maxlength="6" type="text" class="captcha validate[required] text-input" placeholder="CODE"><div class="capimage"><img src="https://www.nolimitcars.co.uk/wp/wp-content/themes/twentysixteen/captcha.php" alt="Enter captcha" title="Enter captcha" id="captcha"></div></li>
                            </ul>
                            <button class="btnsubmit" name="" id="">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>    
    
    <?php $this->load->view('common_components/footer'); ?>
</body>
</html>