@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Contact UI UX Landing</h1>
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
               <form action="{{route('contactui-packages.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="image_contactui">
                        Image Upload
                    </label>
                    <input type="file" class="form-control" name="image_contactui" value="{{$item->image_contactui}}">
                </div>
                <div class="form-group">
                    <label for="title_contactui">Title</label>
                    <input type="text" class="form-control" name="title_contactui" placeholder="fill in your title contactui here" value="{{$item->title_contactui}}">
                </div>
                <div class="form-group">
                    <label for="paragraph_contactui">paragraph</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraph_contactui" placeholder="fill in your paragraph" value="{{$item->paragraph_contactui}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection