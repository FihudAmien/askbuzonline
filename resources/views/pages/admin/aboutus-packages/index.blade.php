@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">About Us</h1>
          <a href="{{route('aboutus-packages.create')}}" class="btn btn-sm btn-primary shadow=sm">
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
                             <th>Title</th>
                             <th>Paragraph 1</th>
                             <th>Paragraph 2</th>
                         </tr>
                     </thead>
                     <tbody>
                        @forelse ($items1 as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                <img src="{{ asset('frontend/img/'. $item->imageAboutus1)}}" alt="" style="width: 150px" class="img-thumbnail"/>
                            </td>

                            <td>{{$item->title}}</td>
                            <td>{{$item->paragraphAboutus1}}</td>
                            <td>{{$item->paragraphAboutus2}}</td>
                            <td>
                                <a href="{{route('aboutus-packages.edit', $item->id)}}" class="btn btn-info mb-2">
                                <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{route('aboutus-packages.destroy', $item->id)}}" method="post" class="d-inline">
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