<!--  -->

<script
    src="{{asset('')}}hayper/assets/js/equal-height.min.js">
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<script type="text/javascript"
    src="{{asset('')}}assets/js/livicons-1.4.min.js">
</script>
<script type="text/javascript"
    src="{{asset('')}}assets/js/jquery.themepunch.tools.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/jquery.appear.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/jquery.easing.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/jquery.magnific-popup.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/progress-bar.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/modernizr.custom.13711.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/owl.carousel.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/wow.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/imagesloaded.pkgd.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/count-to.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/bootsnav.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/YTPlayer.min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/typed.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/jquery.ripples-min.js">
</script>
<script
    src="{{asset('')}}hayper/assets/js/main.js">
</script>
<!--  -->
<script type="text/javascript"
    src="{{asset('')}}assets/js/livicons-1.4.min.js">
</script>
<script
    src="{{asset('')}}assets/js/raphael.min.js">
</script>

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
    // jQuery(document).ready(function() {
    //     var containerEl = document.querySelector('.grapgic-wrapper');

    //     var mixer = mixitup(containerEl);
    // });
</script>

<script>
    $(".offer-discount-slider").owlCarousel({
        autoplay: true,
        slideSpeed: 2000,
        items: 4,
        margin: 15,
        loop: true,
        mouseDrag: true,
        dots: true,
        autoHeight: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            }
        }
    });
</script>
