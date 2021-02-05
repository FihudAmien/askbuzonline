@extends('layouts.app')

@section('title')
AskBuz Website | Let's consults with us
@endsection

@section('content')
    <!-- home -->
    <div id="homepage" class="high"></div>
    <div class="row contentgrid">
    
    
    
        @foreach ($items1 as $item)
        <div class="col-lg-4 ml-2 header1">
            <h3>{{ $item->title }}</h3>
            <p>{{ $item->paragraph }}</p>
            <a class="btn btn-primary tombolbiru sizetombol " href="#Bussines-Analysis-Page">Memulai</a>
            <a class="btn btn-outline-primary tombol sizetombol " href="#Forumpage">Pergi Ke Forum</a>
        </div>
        <div class="col-lg-7 header2 ml-auto mt-4">
            <img class="imageheader" src="{{asset('frontend/img/' . $item->image)}}">

        </div>
        @endforeach
    </div>
    
    <!-- akhir home -->

    <!-- service -->
    <div id="servicepage" class="high"></div>
    <div class="row">
        <div class="col-lg-12 textalign">
            <h3>Layanan Kami</h3>
        </div>
    </div>
    <div class="row align-items-center">
        <div class="col-lg service-border service-text-paragraph">
            <img class="imagesservice" src="{{asset('frontend/img/search.svg')}}">
            <h4>
                Bussines analysis
            </h4>
            <p class="mt-3">
                Merancang proses dan sistem, menilai model bisnis yang mengintegrasikannya dengan teknologi.
            </p>

        </div>
        <div class="col-lg service-border service-text-paragraph">
            <img class="imagesservice" src="{{asset('frontend/img/security.svg')}}">
            <h4 class="servicefont">
                Ui/Ux Design
            </h4>
            <p class="mt-3">
                Merancang antarmuka pengguna yang nyaman dan ramah pengguna
            </p>

        </div>
        <div class="col-lg service-border service-text-paragraph">
            <img class="imagesservice" src="{{asset('frontend/img/bussines.svg')}}">
            <h4>
                IT Development
            </h4>
            <p>
                Mengembangkan situs web atau aplikasi yang diinginkan oleh klien
            </p>

        </div>
    </div>



    <!-- Akhir Service -->

    <!-- Awal About -->
    @foreach ($items2 as $item)
    <div class="About" id="aboutpage" class="high1">

        <div class="row contentgrid">
            <div class="col-lg-5 mr-auto">
                <img class="imageset" src="{{asset('frontend/img/' . $item->imageabout)}}">

            </div>
            <div class="col-lg-6 header1">

                <h3>{{ $item->titleabout }}</h3>
                <p>{{ $item->paragraphabout }}</p>
                <a class="btn btn-primary tombolbiru sizetombol tombolabout" href="{{url('/AboutUs')}}">Lihat Lainnya</a>

            </div>

        </div>
    </div>
    @endforeach


    <!-- Akhir About -->

    <!-- Forum -->
    <div class="Forum" id="Forumpage">
        <div class="row">
            <div class="col-lg-12 textalign">
                <h3>Forum & Diskusi</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">

                            <div class="img-box"><img src="{{asset('frontend/img/Ellipse 1.svg')}}"></div>
                            <p class="ParagraphForum">Selain dengan diiringi dengan usaha dan doa, kamu juga perlu motivasi ataupun dorongan untuk bangkitkan semangat berbisnis. Misalnya saja membaca pengalaman-pengalaman tokoh yang telah sukses berbisnis ataupun memotivasi bangkitkan semangat berbisnis.</p>
                            <p class="overview"><b>Dhimas Aufarul Minan</b>, UX Writing</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{asset('frontend/img/Ellipse 3.svg')}}"></div>
                            <p class="ParagraphForum">Sebab terkadang risiko dan perencanaan yang terlalu lama seringkali menjadi penghambat seseorang untuk maju dan menjalankan usahanya. Untuk membangun bisnis dan menjadi entrepreneur, sebagai langkah awal seseorang harus menumbuhkan jiwa wirausaha.</p>
                            <p class="overview"><b>Muhammad Iqbal Fathan</b>, UX Research</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{asset('frontend/img/Ellipse 2.svg')}}"></div>
                            <p class="ParagraphForum">Jika ada waktu, kalian bisa bertukar pikiran dan berdiskusi mengenai hambatan yang menimpa bisnis Anda. Rekrut orang yang memiliki dedikasi, komitmen, dan integritas yang tinggi.</p>
                            <p class="overview"><b>Fihud Amien Wahidin</b>, Web Developer</p>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </div>
        </div>
        @auth
            <form action="" method="post">
                <a class="btn btn-outline-primary tombol sizetombol" href="https://t.me/joinchat/O-XYgxiHZe3eRMGWLqXogw">Pergi Diskusi</a>
            </form>
        @endauth
        @guest
        <a class="btn btn-outline-primary tombol sizetombol " href="{{route('login')}}">Login Diskusi</a>
        @endguest
        


    </div>





    <!-- akhir forum -->

     <!-- article -->
     
        <section class="wrapper" id="Articlepage">
            <div class="container-fostrap">
                <div class="content">
                    <div class="container">
                        <div class="col-lg-12 textalign mb-5 textareaarticle">
                            <h3>Artikel yang tersedia</h3>
                        </div>
                        <div class="row">
                            @foreach ($items4 as $item)
                           
                            <div class="col-xs-12 col-lg-4">
                                    <div class="card" href="{{route('showarticle', [$item->id])}}">
                                        <a class="img-card" href="{{route('showarticle', [$item->id])}}">
                                            <img src="{{asset('frontend/img/' . $item->imagearticle)}}" />
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="{{route('showarticle', [$item->id])}}"> {{ $item->titlearticle }}
                                              </a>
                                            </h4>
                                            <p class="{{route('showarticle', [$item->id])}}">
                                                {{ Str::limit($item->paragrapharticle ,  100)  }}
                                            </p>
                                        </div>
                                        <div class="card-read-more">
                                            <a href="{{route('showarticle', [$item->id])}}" class="btn btn-link btn-block ">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                 
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="btn btn-outline-primary tombol sizetombol mt-3" href="{{url('/Articlemore')}}">Artikel Lainnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
           
        </section>


        <!-- Akhir Article -->

    <!-- Contact -->
    <div class="Contact">
        <div class="row " id="Bussines-Analysis-Page">
            <div class="col-lg-12 contactheader">
                <h3>"Kontak Konsultan" <br> Dengan Bidang Mereka</h3>
            </div>
        </div>
        @foreach ($items3 as $item)
        <div class="row textcontact ">
            <div class="col-lg-5 mr-auto hover01">
                <figure> <img class="imageset" src="{{asset('frontend/img/' . $item->image_contact)}}"></figure>
            </div>
            <div class="col-lg-5 header1 mr-auto ">
                <h3>{{ $item->title_contact }}</h3>
                <p>{{ $item->paragraph_contact }}</p>
                <a class="btn btn-outline-primary tombol sizetombol" href="{{url('/BussinesAnalysisContact')}}">Kontak Lainnya</a>
            </div>
        </div>
        @endforeach


        <!-- akhir image -->
        @foreach ($items5 as $item)
        <div class="row textcontact1" id="Ui/Ux-Design-Page">

            <div class="col-lg-5 order-lg-12  ml-auto hover01 ">

                <figure> <img class="imageset" src="{{asset('frontend/img/' . $item->image_contactui)}}"></figure>

            </div>
            <div class="col-lg-5 order-lg-1 header1 ml-auto">
                <h3>{{ $item->title_contactui }}</h3>
                <p>{{ $item->paragraph_contactui }}</p>
                <a class=" btn btn-outline-primary tombol sizetombol " href="{{url('/UiUXDesign')}}">Kontak Lainnya</a>
            </div>
        </div>
        @endforeach
        @foreach ($items6 as $item)
        <div class="row textcontact" id="IT-Development-Page">
            <div class="col-lg-5 mr-auto hover01 ">
                <figure><img class="imageset" src="{{asset('frontend/img/' . $item->image_contactit)}}"></figure>
            </div>
            <div class="col-lg-5 header1 mr-auto  ">

                <h3>{{ $item->title_contactit }}</h3>
                <p>{{ $item->paragraph_contactit }}</p>
                <a class="btn btn-outline-primary tombol sizetombol" href="{{url('/ITDevelopment')}}">Kontak Lainnya</a>

            </div>

        </div>
        @endforeach



    </div>
@endsection