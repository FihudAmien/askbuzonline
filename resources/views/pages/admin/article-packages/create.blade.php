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
               <form action="{{route('article-packages.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    
                    <label for="imagearticle">
                        Image Upload
                    </label>
                    <input type="file" class="form-control" name="imagearticle" placeholder="imagearticle">
                </div>
                <div class="form-group">
                    <label for="titlearticle">Title</label>
                    <input type="text" class="form-control" name="titlearticle" placeholder="text in here" value="{{old('titlearticle')}}">
                </div>
                <div class="form-group">
                    <label for="paragrapharticle">paragrapharticle</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragrapharticle" placeholder="fill in your paragraph" value="{{old('paragrapharticle')}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection