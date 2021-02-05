@extends('layouts.contact')

@section('title')
AskBuz Website | Let's consults with us
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kontak Ui Ux Design</li>
    </ol>
</nav>
<div class="section paddinf-off tmm-team">
    <div class=" text-center colorheader ">
        <h3 class="text-center mt-2 mb-1">Team Ui/Ux Design</h3>
        <p class="text-center mb-4 ">Kontak Konsultan Dengan Bidang Mereka</p>

    </div>
    <section class="tmm-container">
        <div class="tmm-row text-center mb-5">
            @foreach ($items1 as $item)
            <div class="item-square-2">
                <div class="title">
                    <h3>{{ $item->titleuiux }}</h3>
                </div>
                <div class="face-container">
                    <div class="face">
                        <img src="{{asset('frontend/img/' . $item->imageuiux)}}" />
                    </div>
                </div>
                <div class="item-content">
                    <div class="footer">
                        <h4>{{ $item->paragraphuiux }}</h4>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/{{ $item->facebookuiux }}"><i class="fab fa-facebook-f icon"></i></a></li>
                            <li><a href="{{ $item->emailuiux }}"><i class="fas fa-envelope-open-text"></i></a></li>
                            <li><a href="https://wa.me/{{ $item->whatsappuiux }}"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>

<script src="{{url('frontend/scripts.js')}} "></script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
@endsection