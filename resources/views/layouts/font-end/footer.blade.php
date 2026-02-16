<style type="text/css">
    .footer-contact .add-area a:hover {
        text-decoration: none;
    }
</style>

<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Success
                    <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for contacting us. We will get back to you
                    soon.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<div class="footer-contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="add-area">
                    <div class="arrow bounce"></div>
                    <h3>Customer Support</h3>
                    <ul class="list-unstyled">
                        <li>T: <a href="tel:03303801000">0330 380 1000</a></li>
                        <li>
                            <img src="{{ asset('') }}assets/images/customer-support-contact.jpg"
                                width="165" height="15" class="footer-contact-img" alt="contact">
                        </li>
                        <li>Mon - Fri: 9:30 am - 11:00 pm
                            <br>Sat: 10:00 am - 11:00 pm <br>
                            Sun: 2:00 pm - 11:00 pm
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="add-area">
                    <div class="arrow bounce"></div>
                    <h3>Sales and Marketing</h3>
                    <ul class="list-unstyled">
                        <li>T: <a href="tel:02035985956">0203 598 5956</a></li>
                        <li><img src="{{ asset('') }}assets/images/hello-chefonline-com.png"
                                width="144" height="16" class="footer-contact-img" alt="contact"></li>
                        <a href="https://www.chefonline.com/contact" class="btn btn-danger">Contact Us</a>
                    </ul>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                <div class="add-area">
                    <div class="arrow bounce"></div>
                    <h3>Customer Service</h3>
                    <ul class="list-unstyled">
                        <li>T: <a href="tel:03303801000">0330 380 1000</a></li>
                        <li><img src="{{ asset('') }}assets/images/customer-service-chefonline-com.png"
                                width="220" height="45" class="footer-contact-img" alt="contact"></li>
                        <!-- <li>customer.service@chefonline.com</li> -->
                        <li>Mon - Fri: 9:30 am - 11:00 pm
                            <br>Sat - Sun: 10:00 am - 11:00 pm
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</div>

<!--Footer area starts Here -->
<footer id="footer">
    <!--Footer box starts Here -->
    <div class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">

                    <div class="sign-up">
                        <h5>SOCIAL MEDIA</h5>
                        <p>Follow us on</p>
                    </div>
                    <div class="quick-list footer-social-div">
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/ChefOnlinePartners/" target="_blank"> <i
                                        class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/chef-online" target="_blank"> <i
                                        class="fa fa-linkedin"></i> </a>
                            </li>

                            <li>
                                <a target="_blank" href="https://www.youtube.com/channel/UC8rNSm4umip2dGbmlR7ph6g">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sign-up mt-5">
                        <h5>Newsletter Signup</h5>
                        <p>Sign up for newsletter</p>
                        <form>
                            <input type="text" class="newsletter-input input-md newsletter-input mb-0"
                                placeholder="Enter your e-mail" maxlength="100" name="subscription_email"
                                id="subscription_email">
                            <button onclick="subscribe(event);" class="fa fa-paper-plane"></button>

                            <div id="return_msg">&nbsp;</div>
                        </form>
                        <div id="successmsg"> You Have Added Successfully </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="our-address">
                        <h5>Quick Links</h5>
                        <div class="quick-list">
                            <ul>
                                <li>
                                    <a href="faq">Faq</a>
                                </li>
                                <li>
                                    <a href="terms-conditions">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="terms-of-use">Terms of Use</a>
                                </li>
                                <li>
                                    <a href="privacy-policy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="cookie-policy">How do we use cookies?</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-md-offset-1">
                    <div class="our-address">
                        <!-- <h5>Quick Links</h5> -->
                        <div class="quick-list">
                            <a href="https://www.google.com/partners/agency?id=8390177523" target="_blank">
                                <img src="https://www.gstatic.com/partners/badge/images/2025/PartnerBadge.png" style="max-width: 150px;" />
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Footer box ends Here -->
</footer>
<div class="copyright text-center">
    <div class="container">
        <div class="col-xs-12 col-sm-12 copyright-content">
            Copyright &copy; <?php echo date("Y"); ?> ChefOnline. All rights reserved.
        </div>
    </div>
</div>
<!--Footer area ends Here -->
</div>
<!--Wrapper Section Ends Here -->

<script type="text/javascript" src="{{asset('')}}assets/js/jquery-ui.js">
</script>
<script type="text/javascript" src="{{asset('')}}assets/js/owl.carousel.js">
</script>
<script type="text/javascript" src="{{asset('')}}assets/js/validation.min.js">
</script>
<script type="text/javascript" src="{{asset('')}}assets/js/bootval.js"></script>
<script type="text/javascript"
    src="{{asset('')}}assets/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('')}}assets/js/masonry.pkgd.min.js"></script>
<script src="{{asset('')}}assets/js/jquery.fancybox.js"></script>
<script type="text/javascript"
    src="{{asset('')}}assets/js/jquery.fancybox-media.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/js/site.js"></script>
<script src="{{asset('')}}assets/js/script.js" type="text/javascript"></script>
<script type="text/javascript"
    src="{{asset('')}}assets/js/jquery.magnific-popup.min.js"></script>

<script src="{{asset('')}}assets/js/wow.min.js"></script>
<script src="{{asset('')}}assets/js/custom.js"></script>
<script>
    new WOW().init();
</script>
<script src='{{asset('')}}assets/js/jquery.justifiedGallery.min.js'
    type='text/javascript'></script>
<link href='{{asset('')}}assets/css/justifiedGallery.min.css' rel='stylesheet'
    type='text/css' />
<script type="text/javascript" src="{{asset('')}}assets/js/livicons-1.4.min.js">
</script>
<script src="{{asset('')}}assets/js/raphael.min.js"></script>
<script src="{{asset('')}}assets/js/main.js"></script>
<script src="{{asset('')}}assets/js/businessform.script.js"></script>
<script src="{{asset('')}}assets/js/blackFridayScript.js"></script>

<script type="text/javascript">
    function subscribe(e) {

        e.preventDefault();
        var email = document.getElementById('subscription_email').value;
        var pattern = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

        if (pattern.test(email)) {
            document.getElementById('return_msg').innerHTML =
                "<img src='http://www.gtechsolution.co.uk/assets/images/loader.gif' height='16' width='16'>";
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    if (xmlhttp.responseText == 1) {
                        document.getElementById('return_msg').innerHTML = 'You are successfully subscribed.';
                    } else if (xmlhttp.responseText == 2) {
                        document.getElementById('return_msg').innerHTML = 'Your email already in subscription list.';
                    } else {
                        document.getElementById('return_msg').innerHTML = 'Subscription Failed. Please Try Later';
                    }
                    document.getElementById('subscription_email').value = "";
                }
            }
            xmlhttp.open("POST", "subscribe.php", true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("email=" + email);
        } else {
            document.getElementById('return_msg').innerHTML = "Invalid E-mail Address";
        }

    }
</script>

<script>
    jQuery(document).ready(function($) {
        $(".read-more-content").click(function() {
            $(".more-content").show();
            $(".read-less-content").show();
            $(".read-more-content").hide();
        });

        $(".read-less-content").click(function() {
            $(".more-content").hide();
            $(".read-more-content").show();
            $(this).hide();
        });
    });
</script>

</body>

</html>
