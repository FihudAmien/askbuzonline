@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Contact BussinesAnalysis</h1>
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
               <form action="{{route('bussines-analysis.update' , $item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="imageba">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageba" value="{{$item->imageba}}">
                </div>
                <div class="form-group">
                    <label for="titleba">Nama</label>
                    <input type="text" class="form-control" name="titleba" placeholder="fill in your title contactit here" value="{{$item->titleba}}">
                </div>
                <div class="form-group">
                    <label for="paragraphba">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphba" placeholder="fill in your paragraph" value="{{$item->paragraphba}}"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="facebookba">Facebook</label>
                    <input type="text" class="form-control" name="facebookba" placeholder="fill in your here" value="{{$item->facebookba}}">
                </div>
                <div class="form-group">
                    <label for="emailba">Email</label>
                    <input type="text" class="form-control" name="emailba" placeholder="fill in your here" value="{{$item->emailba}}">
                </div>
                <div class="form-group">
                    <label for="whatsappba">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappba" placeholder="fill in your here" value="{{$item->whatsappba}}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Edit Data
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection