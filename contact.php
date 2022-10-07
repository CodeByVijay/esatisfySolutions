<?php include('headder.php');?>

    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>Get Touch With Us</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="index-2.html"><span class="fa fa-home"></span></a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="default-form-area">
                        <div class="sec-title">
                            <h1>Drop a line us</h1>
                        </div>
                        <form id="contact-form" name="contact_form" class="contact-form" action="main.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone" required="" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Message...." required=""></textarea>
                                    </div>
                                    <div class="form-group flex-box">
                                        <div class="submit-btn">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" name="contact_us_btn" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                        <span class="hint">*Get answers to common questions through our help center.</span>
                                    </div>
                                </div>                                            
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-three">
                        <div class="single-info">
                            <h4>Adress:</h4>
                            <div class="text"> Scheme No. 94, Vijay Nagar, Near Bombay Hospital, Indore (MP)</div>
                            <a class="link-btn" href="#">Your Nearest Location</a>                            
                        </div>
                        <div class="single-info">
                            <h4>Quick Contact</h4>
                            <div class="wrapper-box">
                                <a href="mailto:supportyou@goodsoul.co">info@esatisfysolutions.com </a> <br>
                                <a href="tel:+211456789123">+91-9770713194</a>
                            </div>
                            <a class="link-btn" href="#">Get Call Back</a>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>

<center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.1546870238485!2d75.90340236468153!3d22.722491185105905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962e2cbcf357dc1%3A0x59f87c0322058956!2sScheme%2094%2C%20Indore%2C%20Madhya%20Pradesh%20452016!5e0!3m2!1sen!2sin!4v1663822104767!5m2!1sen!2sin" width="1400" height="450" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </center>

    <?php include('footer.php');?>
