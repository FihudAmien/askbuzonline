<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('includes.style')
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="9888ab79-5fb1-4505-b7b5-fbdfc4322ed6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    
</head>

<body>

    <!-- Navbar -->
    @include('includes.navbar')
    <!-- Akhir navbar -->


    <!-- container -->
    <div class="container">
        
        @yield('content')


        <!-- Footer -->
<footer class="footerset">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto">
                <a href="#homepage"> <img src="{{url('frontend/img/LogoAskBuz.svg')}}"> </a>
                <p class="paragraph-footer">mari kita mulai bisnis dan tingkatkan bisnis untuk meningkatkan lalu lintas Anda</p>

            </div>

            <div class="col-lg-3">

                <h6 class="footer-heading text-uppercase textset">For users</h6>
                <ul class="list-unstyled footer-link mt-4">
                    <li>
                        <a href="#Forumpage" ">Diskusi Dengan Semuanya </a></li>
                    <li><a href="#Bussines-Analysis-Page ">Kontak Dengan Konsultan</a></li>
                    <li><a href=" ">Masuk Akun</a></li>
                </ul>

            </div>

            <div class="col-lg-2 ">
                <h6 class="footer-heading text-uppercase textset ">Explore us</h6>
                <ul class="list-unstyled footer-link mt-4 ">
                    <li><a href="#homepage ">Homepage</a> </li>
                    <li><a href="#servicepage ">Layanan</a></li>
                    <li><a href="#aboutpage ">Tentang Kami</a></li>
                    <li><a href=" ">Sign In</a></li>
                </ul>
            </div>

            <div class="col-lg-3 ">
                <h6 class="footer-heading text-uppercase textset ">Lakukan Sentuhan</h6>
                <ul class="list-unstyled footer-link mt-4 ">
                    <li><a href=" ">AskBuz@Support.com</a> </li>
                    <li><a href=" ">0129 - 3910 - 1393</a></li>
                    <li><a href=" ">AskBuz Indonesia </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center mt-5 ">
        <p class="footer-alt mb-5 ">Copyright 2020 • All right reserved • AskBuz</p>
    </div>
</footer>

<!-- Akhir Footer -->
        
    </div>

    <!-- akhir container -->

    @include('includes.script')
</body>

</html>