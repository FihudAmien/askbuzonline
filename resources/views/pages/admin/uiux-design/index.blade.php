@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Contact Ui Ux Design</h1>
          <a href="{{route('uiux-design.create')}}" class="btn btn-sm btn-primary shadow=sm">
        <i class="fas fa-plus fa-sm text-white-50">
        </i> Add data
        </a>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                 <table class="table table-bordered" width="100%" cellspacing="0" >
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Image</th>
                             <th>Nama</th>
                             <th>Skill</th>
                             <th>Facebook</th>
                             <th>Email</th>
                             <th>WhatsApp</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($items1 as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                <img src="{{ asset('frontend/img/'. $item->imageuiux)}}" alt="" style="width: 150px" class="img-thumbnail"/>
                            
                            </td>
                            <td>{{$item->titleuiux}}</td>
                            <td>{{$item->paragraphuiux}}</td>
                            <td>{{$item->facebookuiux}}</td>
                            <td>{{$item->emailuiux}}</td>
                            <td>{{$item->whatsappuiux}}</td>
                            
                            <td>
                                <a href="{{route('uiux-design.edit', $item->id)}}" class="btn btn-info mb-2">
                                <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{route('uiux-design.destroy', $item->id)}}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fa fa-trash">
                                        </i>
                                    </button>

                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Anda Kosong

                            </td>
                        </tr>
                        

                         @endforelse
                     </tbody>
                 </table>
                </div>
            </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection