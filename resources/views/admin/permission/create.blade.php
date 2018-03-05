@extends('admin.layouts.app')
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
     @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
		 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Permission</h3>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <br>
			           @include('admin.layouts.messages')
              </div>  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('permission.store') }}" method="post"> 
              {{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6 col-md-offset-3">
                  <div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
                    <label for="name">Permission Title</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter tag name here">
                    <label>{{ $errors->first('name') }}</label> 
                  </div> 

	                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
	                  <label for="for">Permission For</label>
	                  <select name="for" id="for" class="form-control">
                      <option selected disabled>Select Permission For</option>  
                      <option value="user">User</option> 
                      <option value="other">other</option> 
                      <option value="post">post</option> 
                    </select>
                    <label>{{ $errors->first('for') }}</label>  
	                </div> 

		              <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
		                <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
		              </div>
	                
              	</div> 
              </div>
       

            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection