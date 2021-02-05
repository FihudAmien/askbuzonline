@extends('layouts.showarticle')

@section('title')
AskBuz Website | Let's consults with us
@endsection

@section('content')
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('/Articlemore')}}">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Artikel</li>
        </ol>
    </nav>
    <div class="container">
        


        <div class="cs-blog-detail">
            <div class="cs-main-post">
                <figure><img src="{{asset('frontend/img/' . $items4->imagearticle)}}"></figure>
            </div>
            <div class="cs-post-title">
                <div class="cs-author">
                    <figure>
                        <a href=""><img width="32" height="32" class="avatar avatar-32 photo" src="{{asset('frontend/img/logo.png')}}"></a>
                    </figure>
                    <div class="cs-text">
                        <a href="">DiPublikasikan Oleh : Admin</a>
                    </div>
                </div>
                <div class="post-option">

                    <span class="post-date"><a href=""><i class="cs-color icon-calendar6"></i> {{ $items4->created_at->diffForHumans()}}</a></span> <br> 
                    <span class="post-date"><a href=""><i class="cs-color icon-calendar6"></i> {{ $items4->created_at->format('l, d F Y H:i')}}</a></span>
                </div>
            </div>
            <div class="cs-post-option-panel">
                <div class="rich-editor-text">
                    <h4>
                        {{ $items4->titlearticle }}
                    </h4>
                    <p>{{ $items4->paragrapharticle }}</p>

                </div>
            </div>


        </div>
    </div>
    
    
    <script src="{{url('frontend/scripts.js ')}}"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>

    @endsection