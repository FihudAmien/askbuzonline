@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">About Us</h1>
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
               <form action="{{route('aboutus-packages.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="fill in your title aboutus here" value="{{$item->title}}">
                </div>
                <div class="form-group">
                    <label for="imageAboutus1">
                        Image 1 Upload
                    </label>
                    <input type="file" class="form-control" name="imageAboutus1" value="{{$item->imageAboutus1}}">
                </div>
                <div class="form-group">
                    <label for="paragraphAboutus1">paragraph</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphAboutus1" placeholder="fill in your paragraph" value="{{$item->paragraphAboutus1}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="paragraphAboutus2">paragraph 2</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphAboutus2" placeholder="fill in your paragraph" value="{{$item->paragraphAboutus2}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection