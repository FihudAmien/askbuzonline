@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Article</h1>
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
               <form action="{{route('article-packages.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="imagearticle">
                        Image Upload
                    </label>
                    <input type="file" class="form-control" name="imagearticle" value="{{$item->imagearticle}}">
                </div>
                <div class="form-group">
                    <label for="titlearticle">Title</label>
                    <input type="text" class="form-control" name="titlearticle" placeholder="fill in your title article here" value="{{$item->titlearticle}}">
                </div>
                <div class="form-group">
                    <label for="paragrapharticle">paragraph</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragrapharticle" placeholder="fill in your paragraph" value="{{$item->paragrapharticle}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection