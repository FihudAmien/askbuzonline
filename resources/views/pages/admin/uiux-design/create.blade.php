@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Contact Ui Ux Design</h1>
        </div>
       @if ($errors->any())
       <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                   <li>
                       {{ $error }}
                   </li>
               @endforeach
           </ul>
       </div>
           
       @endif

       <div class="card shadow">
           <div class="card-body">
               <form action="{{route('uiux-design.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    
                    <label for="imageuiux">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageuiux" placeholder="imageuiux">
                </div>
                <div class="form-group">
                    <label for="titleuiux">Nama</label>
                    <input type="text" class="form-control" name="titleuiux" placeholder="text in here" value="{{old('titleuiux')}}">
                </div>
                <div class="form-group">
                    <label for="paragraphuiux">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphuiux" placeholder="fill in your paragraph" value="{{old('paragraphuiux')}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="facebookuiux">Facebook</label>
                    <input type="text" class="form-control" name="facebookuiux" placeholder="Link in here" value="{{old('facebookuiux')}}">
                </div>
                <div class="form-group">
                    <label for="emailuiux">Email</label>
                    <input type="text" class="form-control" name="emailuiux" placeholder="Link in here" value="{{old('emailuiux')}}">
                </div>
                <div class="form-group">
                    <label for="whatsappuiux">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappuiux" placeholder="Link in here" value="{{old('whatsappuiux')}}">
                </div>whatsapp
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection