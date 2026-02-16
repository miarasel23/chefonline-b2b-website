

<script type="text/javascript" src="{{asset('assets/js/jquery-ui.js')}}">
</script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.js')}}">
</script>
<script type="text/javascript" src="{{asset('assets/js/validation.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('assets/js/bootval.js')}}"></script>
<script type="text/javascript"
    src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script type="text/javascript"
    src="{{asset('assets/js/jquery.fancybox-media.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/site.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}" type="text/javascript"></script>
<script type="text/javascript"
    src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('assets/js/jquery.justifiedGallery.min.js')}}"
    type='text/javascript'></script>
<link href="{{asset('assets/css/justifiedGallery.min.css')}}" rel='stylesheet'
    type='text/css' />
<script type="text/javascript" src="{{asset('assets/js/livicons-1.4.min.js')}}">
</script>
<script src="{{asset('assets/js/raphael.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/businessform.script.js')}}"></script>
<script src="{{asset('assets/js/blackFridayScript.js')}}"></script>

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
