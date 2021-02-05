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
               <form action="{{route('it-development.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="imageit">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageit" value="{{$item->imageit}}">
                </div>
                <div class="form-group">
                    <label for="titleit">Nama</label>
                    <input type="text" class="form-control" name="titleit" placeholder="fill in your title contactit here" value="{{$item->titleit}}">
                </div>
                <div class="form-group">
                    <label for="paragraphit">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphit" placeholder="fill in your paragraph" value="{{$item->paragraphit}}"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="facebookit">Facebook</label>
                    <input type="text" class="form-control" name="facebookit" placeholder="fill in your here" value="{{$item->facebookit}}">
                </div>
                <div class="form-group">
                    <label for="emailit">Email</label>
                    <input type="text" class="form-control" name="emailit" placeholder="fill in your here" value="{{$item->emailit}}">
                </div>
                <div class="form-group">
                    <label for="whatsappit">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappit" placeholder="fill in your here" value="{{$item->whatsappit}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection