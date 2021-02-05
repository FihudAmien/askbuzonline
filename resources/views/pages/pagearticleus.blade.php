@extends('layouts.articleus')

@section('title')
AskBuz Website | Let's consults with us
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
    </ol>
</nav>
<div class="container">
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
                    <div class="pull-right">
                        {{ $items4->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <!-- Akhir Article -->
       
            
       
    </div>
    
    <script src="{{url('frontend/scripts.js ')}}"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>

    @endsection