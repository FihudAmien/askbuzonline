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
               <form action="{{route('uiux-design.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="imageuiux">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageuiux" value="{{$item->imageuiux}}">
                </div>
                <div class="form-group">
                    <label for="titleuiux">Nama</label>
                    <input type="text" class="form-control" name="titleuiux" placeholder="fill in your title contactit here" value="{{$item->titleuiux}}">
                </div>
                <div class="form-group">
                    <label for="paragraphuiux">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphuiux" placeholder="fill in your paragraph" value="{{$item->paragraphuiux}}"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="facebookuiux">Facebook</label>
                    <input type="text" class="form-control" name="facebookuiux" placeholder="fill in your here" value="{{$item->facebookuiux}}">
                </div>
                <div class="form-group">
                    <label for="emailuiux">Email</label>
                    <input type="text" class="form-control" name="emailuiux" placeholder="fill in your here" value="{{$item->emailuiux}}">
                </div>
                <div class="form-group">
                    <label for="whatsappuiux">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappuiux" placeholder="fill in your here" value="{{$item->whatsappuiux}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection