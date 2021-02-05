@extends('layouts.aboutus')

@section('title')
AskBuz Website | Let's consults with us
@endsection

@section('content')
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
        </ol>
    </nav>
    
    <div class="container">
        @foreach ($items1 as $item)
        <div class="row">
            <div class="col-lg-12">
                <h3 class="textnormal">
                    {{ $item->title }}
                </h3>
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

                            <div class="img-box"><img src="{{asset('frontend/About/imgAbout/potoprofile2.jpeg')}}" alt=""></div>
                            
                            <p class="overview"><b>Dhimas Aufarul Minan</b> | 18050974004</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{asset('frontend/About/imgAbout/potoprofile3.jpeg')}}" alt=""></div>
                            
                            <p class="overview"><b>Muhammad Iqbal Fathan</b> | 18050974006</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{asset('frontend/About/imgAbout/potoprofile1.jpeg')}}" alt=""></div>
                           
                            <p class="overview"><b>Fihud Amien Wahidin</b> | 18050974039</p>
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
        
        
        <div class="row">
            <div class="col-lg-12">
                <img class="photoheader" src="{{asset('frontend/img/' . $item->imageAboutus1)}}" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <img class="photoheader displayimage" src="{{asset('frontend/About/imgAbout/Photo2.svg')}}" alt="">
            </div>
            <div class="col-lg-4">
                <img class="photoheader displayimage" src="{{asset('frontend/About/imgAbout/Photo3.svg')}}" alt="">
            </div>

        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <img class="photoheader displayimage" src="{{asset('frontend/About/imgAbout/Photo4.svg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <img class="photoheader displayimage" src="{{asset('frontend/About/imgAbout/Photo5.svg')}}" alt="">
            </div>

        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <p class="positiontext">
                    {{ $item->paragraphAboutus1 }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <p class="textarea positiontext">
                    {{ $item->paragraphAboutus2 }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <script src="{{url('frontend/scripts.js ')}}"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>

    @endsection