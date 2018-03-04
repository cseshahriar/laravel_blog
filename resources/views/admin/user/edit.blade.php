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
              <h3 class="box-title">Add Admin</h3>
            </div>
            <!-- /.box-header -->
			
            <!-- form start -->
            <form role="form" action="{{ route('user.update', $user->id) }}" method="post"> 
              {{ csrf_field() }}
            	{{ method_field('PUT') }}
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group">
	                  <label for="name">Name</label>
	                  <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" placeholder="Enter name here">
	                </div> 

	                <div class="form-group">
	                  <label for="email">Email</label>
	                  <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}" placeholder="Enter email here">
	                </div>  

	                <div class="form-group">
	                  <label for="password">Password</label>
	                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password here">
	                </div>  

	                <div class="form-group">
	                  <label for="password-confirm">Confirm Password</label>
	                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	                </div> 

	                <div class="form-group">
                    <label>Assign Role</label>
                    
                    <div class="row">
                      @foreach($roles as $role)
                        <div class="col-md-4">
                            <div class="checkbox">
                               <label>
                                  <input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}
                              </label>  
                            </div>
                        </div>
                      @endforeach
                    </div>

	                </div> 

              	</div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('user.index') }}" class="btn btn-info">Back</a>
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