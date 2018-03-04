@extends('admin.layouts.app')
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header"> 
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
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
              <h3 class="box-title">Add New Role</h3>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <br>
			           @include('admin.layouts.messages')
              </div>  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('role.store') }}" method="post"> 
              {{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6 col-md-offset-3">

	                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
	                  <label for="name">Role Title</label>
	                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter tag name here">
                    <label>{{ $errors->first('name') }}</label>
	                </div> 

                  <div class="col-md-6">
                      <label for="name">Posts Permissions</label>
                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div> 

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>
                  </div>
                    
                    <div class="col-md-6">
                        <label for="name">User Permissions</label>
                          <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label> 
                      </div> 

                      <div class="checkbox">
                        <label><input type="checkbox">Create</label>
                      </div>
                    </div>  

		              <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
		                <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
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