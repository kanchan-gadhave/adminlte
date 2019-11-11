@extends('homepage1')
@section('content')
 <div class="content-wrapper">
		<!-- Content Header (Page header) -->
	<section class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1>General Form</h1>
			  </div>
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item active">General Form</li>
				</ol>
			  </div>
			</div>
		  </div><!-- /.container-fluid -->
	</section>
	<section class="content">
		  <div class="container-fluid">
			<div class="row">
			  <!-- left column -->
			  <div class="col-md-5">
				<div class="card card-primary">
			
			
				  <!-- /.card-header -->
				  <!-- form start -->
				<?php
				//print_r($datas); exit;
				?>
				  <form role="form"  method="post" action="{{ url('/home') }}">
				  {{ csrf_field() }}
					<div class="card-body">
					  <div class="form-group">
						  <label for="exampleInputEmail1">First Name</label>
						  <input class="form-control" type="text" placeholder="First Name" value="{{$datas->id}}" >
					   </div>
					   <div class="form-group">
						   <label for="exampleInputEmail1">Last Name</label>
						   <input class="form-control" type="text" placeholder="Last Name">
					   </div>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					  </div>
					  <div class="form-group">
						  <label>Select State</label>
						  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
							<option selected="selected">Alabama</option>
							<option>Alaska</option>
							<option>California</option>
							<option>Delaware</option>
							<option>Tennessee</option>
							<option>Texas</option>
							<option>Washington</option>
						  </select>
				      </div>
					  <div class="form-group">
                            <label for="exampleInputEmail1">Gender</label>
					    <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" >
                          <label class="form-check-label">Female</label>
                        </div>
                      </div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
					  <button type="submit" class="btn btn-primary">Submit</button>
				
					</div>
				  </form>
				</div>
			  </div>
			</div>
		</div>
	</section>
</div>
@include('layouts.sidemenu')

@endsection