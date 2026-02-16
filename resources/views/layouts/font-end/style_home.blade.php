<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- <meta name="description" content="ChefOnline - Restaurant management system; free online ordering, cheap mobile apps, best Epos & reservation system for restaurants."> -->
    <meta name="msvalidate.01" content="044B5B16E29E9EEC3B37057E8F524A87" />
    <title>@yield('title')
    </title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="@yield('canonical_link')" />
    <link rel="shortcut icon" type="image/x-icon"
        href="{{asset('')}}assets/images/favicon.png">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet'
        type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('')}}assets/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('')}}assets/css/homepage7.css" />

    <link rel="stylesheet" href="{{asset('')}}assets/css/global.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/themify-icons.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/responsive.css" />

    <link href="{{asset('')}}hayper/assets/css/flaticon-set.css"
        rel="stylesheet" />
    <link href="{{asset('')}}hayper/assets/css/magnific-popup.css"
        rel="stylesheet" />
    <link href="{{asset('')}}hayper/assets/css/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="{{asset('')}}hayper/assets/css/owl.theme.default.min.css"
        rel="stylesheet" />
    <link href="{{asset('')}}hayper/assets/css/animate.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/themify-icons.css" />



    <link href="{{asset('')}}hayper/style.css" rel="stylesheet">
    <link href="{{asset('')}}hayper/assets/css/responsive.css"
        rel="stylesheet" />

    <!--  -->
    <script type="text/javascript"
        src="{{asset('')}}assets/js/jquery-1.11.3.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-82222126-1', 'auto');
        ga('send', 'pageview');
    </script>



    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('meta_title')" />
    <meta property="og:description" content="@yield('meta_desc')" />
    <meta property="og:url" content="@yield('canonical_link')" />
    <meta property="og:image" content="https://www.chefonline.com/assets/images/home-right.png" />

    <!--Twitter :card tag-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ChefOnlineUK">
    <meta name="twitter:title" content="@yield('twitter_title')" />
    <meta name="twitter:description" content="@yield('twitter_desc')" />
    <meta name="twitter:image" content="https://www.chefonline.com/assets/images/home-right.png" />


    {{-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#Organization",
            "@type": "Organization",
            "name": "ChefOnline",


            "url": "https://www.chefonline.com/",
            "logo": "https://www.chefonline.com/assets/images/logo.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": ["+442035985956", "+443303801000"],
                "contactType": "Customer Service",
                "areaServed": ["UK"]
            }],
            "sameAs": [
                "https://www.facebook.com/ChefOnlinePartners/",
                "https://twitter.com/ChefOnlineUK",
                "https://www.youtube.com/channel/UCiuWjkTLdvJQ6EJECQa-7Zw",
                "https://www.linkedin.com/company/chef-online"
            ]
        }
    </script>



    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#website",
            "@type": "WebSite",
            "url": "https://www.chefonline.com/",
            "name": "ChefOnline",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.chefonline.com/?search/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>




    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#webpage",
            "@type": "WebPage",
            "url": "<?php echo $canonical_link; ?>",
            "name": "ChefOnline"
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "218A Brick Lane",
                "addressLocality": "London",
                "addressRegion": "London",
                "postalCode": "E1 6SA",
                "addressCountry": "UK"
            }
        }
    </script>


    <meta name="facebook-domain-verification" content="sf4rwkbh0z8vic73o708b43nhh3kik" />


    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1404017030493503');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1404017030493503&ev=PageView&noscript=1" /></noscript> --}}

</head>
