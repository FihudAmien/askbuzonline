@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Contact IT Development</h1>
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
               <form action="{{route('it-development.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    
                    <label for="imageit">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageit" placeholder="imageit">
                </div>
                <div class="form-group">
                    <label for="titleit">Nama</label>
                    <input type="text" class="form-control" name="titleit" placeholder="text in here" value="{{old('titleit')}}">
                </div>
                <div class="form-group">
                    <label for="paragraphit">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphit" placeholder="fill in your paragraph" value="{{old('paragraphit')}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="facebookit">Facebook</label>
                    <input type="text" class="form-control" name="facebookit" placeholder="Link in here" value="{{old('facebookit')}}">
                </div>
                <div class="form-group">
                    <label for="emailit">Email</label>
                    <input type="text" class="form-control" name="emailit" placeholder="Link in here" value="{{old('emailit')}}">
                </div>
                <div class="form-group">
                    <label for="whatsappit">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappit" placeholder="Link in here" value="{{old('whatsappit')}}">
                </div>whatsapp
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection