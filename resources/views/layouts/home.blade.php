@extends('homepage1')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Created At</th>
                  <th>Updated At</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				@foreach($records as $rec)
                <tr>
				
                  <td>{{$rec->id}}</td>
								<td>{{$rec->name}}</td>
								<td>{{$rec->email}}</td>
								<td>{{$rec->created_at}}</td>
								<td>{{$rec->updated_at}}</td>
								<td>
									<div class="btn-group">
									<a href="{{ URL::route('edit') }}" >
									
									  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal" >
										<i class="fa fa-edit"></I>
									  </button> </a>
									  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete-modal">
										<i class="fa fa-trash"></i>
									  </button>
									</div>
								</td>
				
                </tr>
				@endforeach
				
                </tbody>
                <tfoot>
                
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
   

@include('layouts.sidemenu')

@endsection
