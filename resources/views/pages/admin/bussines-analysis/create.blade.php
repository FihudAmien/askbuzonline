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
               <form action="{{route('bussines-analysis.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    
                    <label for="imageba">
                        Image Upload <p>rekomendasi (343 x 343)</p>
                    </label>
                    <input type="file" class="form-control" name="imageba" placeholder="imageba">
                </div>
                <div class="form-group">
                    <label for="titleba">Nama</label>
                    <input type="text" class="form-control" name="titleba" placeholder="text in here" value="{{old('titleba')}}">
                </div>
                <div class="form-group">
                    <label for="paragraphba">Skill</label>
                    <textarea type="text" rows="10" class="d-block w-100 form-control" name="paragraphba" placeholder="fill in your paragraph" value="{{old('paragraphba')}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="facebookba">Facebook</label>
                    <input type="text" class="form-control" name="facebookba" placeholder="Link in here" value="{{old('facebookba')}}">
                </div>
                <div class="form-group">
                    <label for="emailba">Email</label>
                    <input type="text" class="form-control" name="emailba" placeholder="Link in here" value="{{old('emailba')}}">
                </div>
                <div class="form-group">
                    <label for="whatsappba">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappba" placeholder="Link in here" value="{{old('whatsappba')}}">
                </div>whatsapp
                <button type="submit" class="btn btn-primary btn-block">
                    Save
                </button>
               </form>
           </div>
      </div>
      <!-- /.container-fluid -->
@endsection