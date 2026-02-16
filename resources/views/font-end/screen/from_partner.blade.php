@extends('font-end.app')
@section('content')

@section('styles')
    @include('layouts.font-end.style_home')
    <style>
        * {
            ul li {
                line-height: normal !important;
            }
        }
        @layer components {

            /* Headings */
            .t-h1 {
                @apply text-[28px] sm: text-[36px] lg:text-[44px] font-extrabold leading-tight text-neutral-900;
            }

            .t-h2 {
                @apply text-[24px] sm: text-[30px] lg:text-[36px] font-extrabold leading-tight text-neutral-900;
            }

            .t-h3 {
                @apply text-[18px] sm: text-[20px] lg:text-[22px] font-semibold leading-snug text-neutral-900;
            }

            /* Body text */
            .t-body {
                @apply text-[15px] sm: text-[16px] leading-8 text-neutral-700;
            }

            .t-small {
                @apply text-[13px] leading-6 text-neutral-600;
            }

            /* Section container */
            .t-container {
                @apply mx-auto max-w-[960px] px-4 sm: px-6 lg:px-8;
            }
        }

        /* ---- namespace: #co-stats to avoid Bootstrap conflicts ---- */
        #co-stats {
            --co-accent: #E81D3D;
            --co-text: #2b2b2b;
            --co-muted: #6b6f76;
        }

        #co-stats * {
            box-sizing: border-box;
            font-family: "Poppins", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
        }

        #co-stats {
            background: #fff;
            padding: 64px 0;
            color: var(--co-text);
        }

        #co-stats .co-wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Top grid (left intro, right two stats) */
        #co-stats .co-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 56px;
        }

        #co-stats h2 {
            margin: 0;
            font-weight: 800;
            line-height: 1.2;
            font-size: clamp(28px, 3.2vw, 40px);
        }

        #co-stats .co-sub {
            margin: 14px 0 0;
            font-size: clamp(16px, 1.8vw, 18px);
            color: var(--co-muted);
        }

        #co-stats .co-body {
            margin-top: 16px;
            font-size: clamp(14px, 1.7vw, 16px);
            color: var(--co-muted);
            line-height: 1.8;
            max-width: 520px;
        }

        /* Stat rows */
        #co-stats .co-stat {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 36px;
        }

        #co-stats .co-icon {
            width: 48px;
            height: 48px;
            object-fit: contain;
            flex: 0 0 48px;
        }

        #co-stats .co-num {
            font-weight: 800;
            font-size: clamp(22px, 2.6vw, 28px);
            color: var(--co-text);
            line-height: 1.1;
        }

        #co-stats .co-label {
            margin-top: 4px;
            font-size: clamp(14px, 1.7vw, 16px);
            color: var(--co-muted);
        }

        /* Bottom grid (left two stats, right Why Choose Us) */
        #co-stats .co-bottom {
            margin-top: 52px;
        }

        #co-stats h3 {
            margin: 0;
            font-weight: 800;
            font-size: clamp(22px, 2.6vw, 28px);
        }

        #co-stats .co-right .co-sub {
            margin-top: 10px;
        }

        .mobile_banner {
            display: none !important;
        }

        .banner-grid {
            width: 60%;
            margin-left: 220px;
        }

        .banner-main {
            margin-top: 64px;
        }

        .textarea {
            resize: none;
        }

        @media (max-width: 450px) {
            .mobile-banner {
                display: block !important;
            }

            .banner-grid {
                width: 100%;
                margin-left: 0px;
            }

            .banner-main {
                margin-top: 120px;
            }
        }

        /* Responsive: stack on narrow screens */
        @media (max-width: 900px) {
            #co-stats .co-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            #co-stats .co-body {
                max-width: none;
            }

            .mobile-banner {
                display: block !important;
            }

            .banner-grid {
                width: 100%;
                margin-left: 0px;
            }

            .banner-main {
                margin-top: 120px;
            }
        }

        /* Hide on ≥640px */
        @media (min-width: 640px) {
            .only-mobile {
                display: none !important;
            }

        }

        .warning-message p {
            color: red;
        }
    </style>
@endsection

@section('header')
    @include('layouts.font-end.header_home')
@endsection




<!-- Partners (Google + Meta) — Red Background, Mobile Responsive -->
<section class="bg-gradient-to-r from-[#E81D3D] to-[#E81761] text-white py-12 sm:py-16">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <h2 class="text-center font-extrabold"
            style="font-size: 44px; line-height: 1.1; font-weight: 800; margin-bottom: 50px;">Chefonline
            means Opportunities and Growth.
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10 items-stretch">

            <!-- Google Partner -->
            <div class="flex flex-col">
                <div
                    class="rounded-xl bg-white/10 border border-white/20 p-3 sm:p-4 flex items-center justify-center min-h-[72px] sm:min-h-[84px]">
                    <img src="https://www.gstatic.com/partners/badge/images/2025/PartnerBadge.png" alt="Google Partner"
                        class="h-auto w-auto object-contain" loading="lazy" decoding="async" />
                </div>

                <h3 class="mt-4 sm:mt-5 font-extrabold text-center md:text-left"
                    style="font-size: clamp(20px,2.6vw,28px); line-height:1.15">
                    Proud Google Partner
                </h3>

                <p class="mt-2 sm:mt-3 text-white/90 text-center md:text-left"
                    style="font-size: clamp(14px,1.7vw,16px); line-height:1.8">
                    ChefOnline is officially a Google Partner Digital Marketing Agency! Ready to supercharge your
                    restaurant’s online presence? With Google-backed expertise and data-driven strategies, we’re here to
                    drive real results and put your brand on the map.
                </p>
            </div>

            <!-- Meta Business Partners -->
            <div class="flex flex-col">
                <div
                    class="rounded-xl bg-white/10 border border-white/20 p-3 sm:p-4 flex items-center justify-center min-h-[72px] sm:min-h-[84px]">
                    <img src="{{url('assets/images/partner/meta-business-logo.png')}}"
                        alt="Meta Business Partner" class="h-[auto] w-auto object-contain" loading="lazy"
                        decoding="async" />

                </div>

                <h3 class="mt-4 sm:mt-5 font-extrabold text-center md:text-left"
                    style="font-size: clamp(20px,2.6vw,28px); line-height:1.15">
                    Member of Meta Business Partners
                </h3>

                <p class="mt-2 sm:mt-3 text-white/90 text-center md:text-left"
                    style="font-size: clamp(14px,1.7vw,16px); line-height:1.8">
                    ChefOnline is now a Member of Meta Business Partners! Leverage the full potential of Facebook,
                    Instagram, and Messenger with tailored marketing strategies designed to boost your restaurant’s
                    online presence. Let’s take your brand further!
                </p>
            </div>

        </div>
    </div>
</section>


<!-- Trusted Section (matches screenshot) -->
<section class="bg-white py-8">
    <div class="mx-auto max-w-[960px] px-4">
        <div class="flex flex-col md:flex-row items-center md:items-center justify-center md:justify-between gap-6">

            <!-- Heading -->
            <p
                class="text-center md:text-right text-neutral-700 leading-snug text-[16px] sm:text-[17px] md:text-[18px]">
                Trusted and loved by <span class="font-bold text-neutral-900">4000+</span><br class="hidden sm:block">
                Restaurants and Takeaways in the UK
            </p>

            <!-- Logos -->
            <div class="w-full md:w-auto">
                <div class="flex flex-wrap md:flex-nowrap items-center justify-center md:justify-start gap-x-6 gap-y-4">
                    <img src="{{url('assets/images/partner/curry.png')}}" alt="Curry Palace"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                    <img src="{{url('assets/images/partner/jalpari.png')}}" alt="Jalpari"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                    <img src="{{url('assets/images/partner/tamasha.png')}}" alt="Tamasha"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                    <img src="{{url('assets/images/partner/burghfield.png')}}" alt="Burghfield Spices"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                    <img src="{{url('assets/images/partner/royal-jaipur.png')}}" alt="Royal Jaipur"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                    <img src="{{url('assets/images/partner/moonlight.png')}}" alt="Moonlight Tandoori"
                        class="h-8 sm:h-9 md:h-10 object-contain">

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Opportunities Section -->
<section class="bg-gradient-to-r from-[#E81D3D] to-[#E81761] py-16 text-white">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <h2 class="text-center font-extrabold" style="font-size: 44px; line-height: 1.1; font-weight: 800;">
            Discover Exciting New Opportunities with
            <div class="py-5"></div>
            <span class="bg-white text-rose-600 px-3 py-1 rounded-md" style="font-weight: 700">
                ChefOnline!
            </span>

        </h2>

        <!-- Features -->
        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 text-center pt-[60px]">
            <!-- Item 1 -->
            <div class="" style="">
                <div class="flex justify-center">
                    <!-- 👥 Icon -->
                    <img src="{{url('assets/images/partner/customers.png')}}" alt="Partnership" />

                </div>
                <h3 class="mt-4" style="font-size: clamp(18px, 2.2vw, 22px); font-weight: 700;">
                    Connect With New Customers
                </h3>
                <p class="mt-2 text-white/90" style="font-size: clamp(14px, 1.8vw, 16px); line-height: 1.7;">
                    Add your restaurant to ChefOnline and attract new customers instantly across Multiple
                    neighbourhoods!
                </p>
            </div>

            <!-- Item 2 -->
            <div>
                <div class="flex justify-center">
                    <!-- 💷 Icon -->
                    <img src="{{url('assets/images/partner/revenue.png')}}" alt="Partnership" />

                </div>
                <h3 class="mt-4" style="font-size: clamp(18px, 2.2vw, 22px); font-weight: 700;">
                    Boost Sales &amp; Unlock Revenue
                </h3>
                <p class="mt-2 text-white/90" style="font-size: clamp(14px, 1.8vw, 16px); line-height: 1.7;">
                    With ChefOnline, your customers can enjoy your food wherever they are, while capturing the attention
                    of new diners who haven't tried your food yet.
                </p>
            </div>

            <!-- Item 3 -->
            <div>
                <div class="flex justify-center">
                    <!-- 🎯 Icon -->
                    <!-- <img src="assets/images/partner/focus.png" alt="Partnership" /> -->
                    <img src="{{url('assets/images/partner/focus.png')}}" alt="Partnership" />

                </div>
                <h3 class="mt-4" style="font-size: clamp(18px, 2.2vw, 22px); font-weight: 700;">
                    Focus on Your Business
                </h3>
                <p class="mt-2 text-white/90" style="font-size: clamp(14px, 1.8vw, 16px); line-height: 1.7;">
                    We take care of all the payments, leaving you to focus on what matters!
                </p>
            </div>

        </div>
    </div>
</section>


<!-- brings New Opportunities -->
<section class="w-full">
    <img src="{{url('assets/images/partner/section-image.png')}}" alt="Restaurant dining"
        class="w-full h-[300px] object-cover" />

    <!-- <img src="assets/images/partner/section-image.png" alt="Restaurant dining" class="w-full h-[300px] object-cover" /> -->
</section>


<!-- Leverage new possibilities with ChefOnline -->
<section id="co-stats">
    <div class="co-wrap" style="max-width: 960px; margin: 0 auto">

        <!-- Row 1 -->
        <div class="co-grid">
            <!-- Left: Intro -->
            <div>
                <h2>Leverage new possibilities <br> with ChefOnline</h2>
                <p class="co-sub">A unique online food ordering solution</p>
                <p class="co-body">
                    ChefOnline is the ultimate one-stop solution for all your restaurant needs, from e-commerce to
                    digital marketing. With ChefOnline, bring your business into the digital era. Take orders online,
                    manage your operations efficiently, and keep your customers informed about the latest meals and
                    offers.
                </p>
            </div>

            <!-- Right: Two stats -->
            <div>
                <div class="co-stat">
                    <img class="co-icon" src="{{url('assets/images/partner/orders_processed.png')}}"
                        alt="Orders processed">

                    <!-- <img class="co-icon" src="assets/images/partner/orders_processed.png" alt="Orders processed"> -->
                    <div>
                        <div class="co-num">10M+</div>
                        <div class="co-label">Orders Processed</div>
                    </div>
                </div>

                <div class="co-stat">
                    <img class="co-icon" src="assets/images/partner/restaurant.png" alt="Partners">
                    <div>
                        <div class="co-num">4000+</div>
                        <div class="co-label">Restaurant &amp; Takeaway<br>Partners</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 -->
        <div class="co-grid co-bottom">
            <!-- Left: Two stats -->
            <div>
                <div class="co-stat">
                    <img class="co-icon" src="{{url('assets/images/partner/active_customers.png')}}"
                        alt="Active customers icon">

                    <!-- <img class="co-icon" src="assets/images/partner/active_customers.png" alt="Active customers icon"> -->
                    <div>
                        <div class="co-num">1M+</div>
                        <div class="co-label">Active Customers</div>
                    </div>
                </div>

                <div class="co-stat">
                    <img class="co-icon" src="{{url('assets/images/partner/all_over_uk.png')}}"
                        alt="All over UK icon">

                    <!-- <img class="co-icon" src="assets/images/partner/loved_by.png" alt="All over UK icon"> -->
                    <div>
                        <div class="co-num">All over UK</div>
                        <div class="co-label">Loved by Customers</div>
                    </div>
                </div>
            </div>

            <!-- Right: Why Choose Us -->
            <div class="co-right">
                <h3>Why Choose Us?</h3>
                <p class="co-sub">A food delivery system dedicated for UK</p>
                <p class="co-body">
                    We provide a proven and highly effective way to market your restaurant or takeaway business online.
                    With our competitive pricing and comprehensive digital solutions, we offer the best value in the
                    market.
                    Let us handle your digital needs while you focus on delivering exceptional service to your
                    customers.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Key Features of ChefOnline -->
<section class="bg-neutral-50 py-16">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <!-- Heading -->
        <h2 class="text-center text-2xl sm:text-3xl lg:text-4xl font-extrabold text-neutral-900"
            style="font-size: clamp(22px, 2.2vw, 38px); font-weight: bold;">
            Key Features of <span class="text-rose-600">ChefOnline</span>
        </h2>

        <!-- Features Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-8">

            <!-- Example Feature -->
            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/nationwide.png')}}" alt="Nationwide Platform"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/nationwide.png" alt="Nationwide Platform" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    ChefOnline Nationwide Platform
                </p>
            </div>

            <!-- Repeat for all features -->
            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/owners.png')}}" alt="Owners' Control Panel"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/owners.png" alt="Owners' Control Panel" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Owners' Control Panel
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/online_ordering.png')}}" alt="Online Ordering Website"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/online_ordering.png" alt="Online Ordering Website" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Online Ordering Website
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/sim.png')}}" alt="Android Data SIM Printer"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/sim.png" alt="Android Data SIM Printer" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Android Data SIM Printer
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/mobile_app.png')}}" alt="Mobile App" class="w-14 h-14">

                <!-- <img src="assets/images/partner/mobile_app.png" alt="Mobile App" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Mobile App &amp; Partner App
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/certification.png')}}" alt="Domain Hosting SSL"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/certification.png" alt="Domain Hosting SSL" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Domain, Hosting &amp; SSL Certification
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/table_reservation.png')}}" alt="Table Reservation"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/table_reservation.png" alt="Table Reservation" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Table Reservation System
                </p>
            </div>

            <div class="flex items-center gap-5">
                <img src="{{url('assets/images/partner/support.png')}}" alt="Customer Support"
                    class="w-14 h-14">

                <!-- <img src="assets/images/partner/support.png" alt="Customer Support" class="w-14 h-14"> -->
                <p class="text-neutral-800 font-medium" style="font-size: clamp(16px, 1.6vw, 22px);">
                    Customer Support Available 7 Days a Week
                </p>
            </div>

        </div>
    </div>
</section>

<!-- brings New Opportunities -->
<section class="w-full">
    <img src="{{url('assets/images/partner/price.png')}}" alt="Restaurant dining" class="w-full object-cover" />

    <!-- <img src="assets/images/partner/price.png" alt="Restaurant dining" class="w-full object-cover" /> -->
</section>

<!-- Client Testimonials -->
<section class="bg-[#F2F2F2] py-16" style="background-color: #F2F2F2!important;">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl sm:text-4xl font-extrabold text-neutral-800">
            Client Testimonials
        </h2>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Row 1 — Left: Image -->
            <article
                class="rounded-2xl p-8 text-white bg-gradient-to-r from-rose-600 to-pink-500 flex flex-col justify-between">
                <blockquote class="text-xl sm:text-2xl font-semibold leading-relaxed">
                    “Undoubtedly, you can choose ChefOnline as your restaurant platform. I am personally satisfied with
                    their service.”
                </blockquote>
                <div class="mt-6">
                    <div class="font-semibold text-lg">Mohammad Mojnu
</div>
                    <div class="text-white/80 text-sm">Vantage Indian Restaurant</div>
                </div>
            </article>

            <!-- Row 1 — Right: Quote Card -->
            <article
                class="rounded-2xl p-8 text-white bg-gradient-to-r from-rose-600 to-pink-500 flex flex-col justify-between">
                <blockquote class="text-xl sm:text-2xl font-semibold leading-relaxed">
                    “ChefOnline has been a game-changer for my restaurant. Their platform is easy to use, and the
                    customer support is always available. I’ve seen a significant boost in sales!”
                </blockquote>
                <div class="mt-6">
                    <div class="font-semibold text-lg">Kausar Ali</div>
                    <div class="text-white/80 text-sm">Jaipur Express</div>
                </div>
            </article>

            <!-- Row 2 — Left: Quote Card -->
            <article class="rounded-2xl p-8 text-white bg-rose-600 flex flex-col justify-between">
                <blockquote class="text-xl sm:text-2xl font-semibold leading-relaxed">
                    “Thanks to ChefOnline, we’ve expanded our reach beyond the local area. The platform is incredibly
                    user-friendly, and the results speak for themselves. Highly recommended!”
                </blockquote>
                <div class="mt-6">
                    <div class="font-semibold text-lg">Mr Kosru Miah</div>
                    <div class="text-white/90 text-sm">Curry Palace</div>
                </div>
            </article>

            <!-- Row 2 — Right: Image -->
            <article class="rounded-2xl p-8 text-white bg-rose-600 flex flex-col justify-between">
                <blockquote class="text-xl sm:text-2xl font-semibold leading-relaxed">
                    “My products have been sold a lot from ChefOnline and I have made a lot of profit during the
                    Covid-19 pandemic. Thanks to their relentless effort.”
                </blockquote>
                <div class="mt-6">
                    <div class="font-semibold text-lg">Mr Ali Babor Chowdhury</div>
                    <div class="text-white/90 text-sm">Saffron</div>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- FAQ -->
<!-- FAQ -->
<section id="faq" class="bg-neutral-50 py-16" aria-labelledby="faq-title">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <h2 id="faq-title" class="text-center font-extrabold text-neutral-900"
            style="font-size: clamp(22px, 2.2vw, 30px); line-height: 1.2">
            Any Questions?
        </h2>

        <!-- remove default marker -->
        <style>
            #faq details summary::-webkit-details-marker {
                display: none;
            }
        </style>

        <div id="faq-accordion" class="mt-10 divide-y divide-neutral-200 border-t border-neutral-200">
            <!-- Item -->
            <details class="group">
                <summary class="flex items-center justify-between py-5 cursor-pointer select-none"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <span class="text-neutral-900 font-medium" style="font-size: clamp(16px, 1.8vw, 18px)">How do I get
                        started?</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-600 transition-transform group-open:rotate-180"
                        style="font-size: 30px;" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                            clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pb-6 -mt-1 text-neutral-600" style="font-size: clamp(14px, 1.7vw, 16px); line-height: 1.8">
                    Complete the form with your business information, and our team will assist in setting up your menu,
                    defining delivery areas, and planning your go-live date.
                </div>
            </details>

            <!-- Item -->
            <details class="group">
                <summary class="flex items-center justify-between py-5 cursor-pointer select-none"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <span class="text-neutral-900 font-medium" style="font-size: clamp(16px, 1.8vw, 18px)">Why should my
                        restaurant partner with ChefOnline?</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-600 transition-transform group-open:rotate-180"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                            clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pb-6 -mt-1 text-neutral-600" style="font-size: clamp(14px, 1.7vw, 16px); line-height: 1.8">
                    Expand with a nationwide platform, secure payment solutions, marketing help, and tools built to
                    increase orders and simplify daily operations.
                </div>
            </details>

            <!-- Item -->
            <details class="group">
                <summary class="flex items-center justify-between py-5 cursor-pointer select-none"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <span class="text-neutral-900 font-medium" style="font-size: clamp(16px, 1.8vw, 18px)">How far do
                        you deliver?</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-600 transition-transform group-open:rotate-180"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                            clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pb-6 -mt-1 text-neutral-600" style="font-size: clamp(14px, 1.7vw, 16px); line-height: 1.8">
                    Our flexible delivery radius allows you to set zones and fees based on your kitchen's capacity.
                </div>
            </details>

            <!-- Item -->
            <details class="group">
                <summary class="flex items-center justify-between py-5 cursor-pointer select-none"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <span class="text-neutral-900 font-medium" style="font-size: clamp(16px, 1.8vw, 18px)">How does a
                        partnership with ChefOnline work?</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-600 transition-transform group-open:rotate-180"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                            clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pb-6 -mt-1 text-neutral-600" style="font-size: clamp(14px, 1.7vw, 16px); line-height: 1.8">
                    We take care of the online ordering, payment integration, and marketing, while you manage orders
                    from your POS/printer and enjoy hassle-free settlements.
                </div>
            </details>

            <!-- Item -->
            <details class="group">
                <summary class="flex items-center justify-between py-5 cursor-pointer select-none"
                    style="display: flex; align-items: center; justify-content: space-between; cursor: pointer;">
                    <span class="text-neutral-900 font-medium" style="font-size: clamp(16px, 1.8vw, 18px)">Can I stop
                        orders if it gets too busy?</span>
                    <svg class="h-4 w-4 shrink-0 text-neutral-600 transition-transform group-open:rotate-180"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.24a.75.75 0 01-1.06 0L5.21 8.29a.75.75 0 01.02-1.08z"
                            clip-rule="evenodd" />
                    </svg>
                </summary>
                <div class="pb-6 -mt-1 text-neutral-600" style="font-size: clamp(14px, 1.7vw, 16px); line-height: 1.8">
                    Yes, you can manage rush hours effortlessly by pausing orders or extending prep times from your
                    control panel.
                </div>
            </details>
        </div>
    </div>
</section>

<div class="mx-auto max-w-[960px] px-4 py-12">
    <!-- Payment logos -->
    <div class="text-center mb-6">
        <div class="payment-method-logos modify-payment-logo">
            <img class="mx-auto block h-auto max-w-full" alt="payments" width="335" height="34"
                src="{{url('assets/new_home/images/payment-logo/payment.png')}}" loading="lazy" />

            <div class="cardlists mt-4">
                <div class="mobile-margin-s m-align">
                    <img class="mx-auto block h-auto max-w-full" alt="Accepted cards" width="336" height="42"
                        src="{{url('assets/new_home/images/payment-logo/accepted-cards.png')}}" loading="lazy" />
                </div>
            </div>
        </div>
    </div>

    <!-- Secured by -->
    <div class="text-center">
        <div class="our-address">
            <h4 class="text-lg font-semibold text-neutral-800">Secured by</h4>

            <div class="quick-list mt-3">
                <ul class="flex flex-wrap items-center justify-center gap-4">
                    <li>
                        <a href="https://www.securitymetrics.com/site_certificate?id=1750641&amp;tk=3942c5bd4d7d8fd1e6a98f971a548429"
                            rel="noopener noreferrer" target="_blank" class="inline-block">
                            <img src="{{url('assets/new_home/images/security-metrics01.png')}}"
                                class="w-auto block" width="77" height="42" alt="SecurityMetrics certificate"
                                loading="lazy" decoding="async" />
                        </a>
                    </li>

                    <li>
                        <a href="https://www.securitymetrics.com/site_certificate?id=1750641&amp;tk=3942c5bd4d7d8fd1e6a98f971a548429"
                            rel="noopener noreferrer" target="_blank" class="inline-block">
                            <img src="{{url('assets/new_home/images/security-metrics02.png')}}"
                                class="w-auto block" width="77" height="100" alt="SecurityMetrics certificate"
                                loading="lazy" decoding="async" />
                        </a>
                    </li>

                    <!-- BlockmarkTech certificate -->
                    <li>
                        <a href="https://registry.blockmarktech.com/certificates/182f9674-f48d-4172-8d5b-c3c904c1941f/"
                            rel="noopener noreferrer" target="_blank" class="inline-block">
                            <img src="{{url('assets/new_home/images/blockmark-tech.png')}}"
                                class="block w-[90px] h-[116px]" alt="BlockmarkTech certificate" loading="lazy"
                                decoding="async" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>


<!-- Footer Contact -->
<section class="bg-white py-12" aria-labelledby="footer-contact-title">
    <div class="mx-auto max-w-[960px] px-4 sm:px-6 lg:px-8">
        <h2 id="footer-contact-title" class="sr-only">Contact Information</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Customer Support -->
            <div class="text-center">
                <div class="rounded-2xl p-6">
                    <img src="https://www.chefonline.com/assets/images/arrowbottom2.png" width="165" height="15"
                        class="mx-auto block h-auto w-auto" alt="Customer Support contact" loading="lazy"
                        decoding="async" />
                    <div>

                    </div>
                    <h3 class="text-[22px] sm:text-[24px] font-extrabold leading-snug text-neutral-900">Customer Support
                    </h3>

                    <ul class="mt-3 space-y-2">
                        <li class="text-[15px] sm:text-[16px] leading-7 text-neutral-800">
                            T: <a href="tel:03303801000" class="font-medium text-rose-600 hover:underline">0330 380
                                1000</a>
                        </li>
                        <li class="text-[15px] sm:text-[16px] leading-7 text-neutral-800">
                            <a href="tel:03303801000"
                                class="font-medium text-rose-600 hover:underline">support@chefonline.com</a>
                        </li>
                        <li class="text-[15px] sm:text-[16px] leading-7 text-neutral-600">
                            Mon - Fri: <time datetime="T09:30">9:30 am</time> - <time datetime="T23:00">11:00
                                pm</time><br>
                            Sat: <time datetime="T10:00">10:00 am</time> - <time datetime="T23:00">11:00 pm</time><br>
                            Sun: <time datetime="T14:00">2:00 pm</time> - <time datetime="T23:00">11:00 pm</time>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sales and Marketing -->
            <div class="text-center">
                <div class="rounded-2xl p-6">
                    <div>
                        <img src="https://www.chefonline.com/assets/images/arrowbottom2.png" width="144" height="16"
                            class="mx-auto block h-auto w-auto" alt="Sales & Marketing contact" loading="lazy"
                            decoding="async" />
                    </div>
                    <h3 class="text-[22px] sm:text-[24px] font-extrabold leading-snug text-neutral-900">Sales and
                        Marketing</h3>

                    <ul class="mt-3 space-y-2">
                        <li class="text-[15px] sm:text-[16px] leading-7 text-neutral-800">
                            T: <a href="tel:02035985956" class="font-medium text-rose-600 hover:underline">0203 598
                                5956</a>
                        </li>
                        <li class="text-[15px] sm:text-[16px] leading-7 text-neutral-800">
                            <a href="tel:02035985956"
                                class="font-medium text-rose-600 hover:underline">hello@chefonline.co.uk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- Single-open behavior (vanilla JS) -->
<script>
    (function() {
        const container = document.getElementById('faq-accordion');
        if (!container) return;
        const items = Array.from(container.querySelectorAll('details'));
        items.forEach((el) => {
            el.addEventListener('toggle', () => {
                if (!el.open) return;
                items.forEach((other) => {
                    if (other !== el) other.open = false;
                });
            });
        });
    })();
</script>

@section('footer')
    @include('layouts.font-end.footer')
@endsection

@section('scripts')
@include('layouts.font-end.scripts_home')
@endsection

@endsection
