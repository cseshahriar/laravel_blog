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
              <h3 class="box-title">Add Admin</h3>
            </div>
            <!-- /.box-header -->
			 
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post"> 
            	{{ csrf_field() }}
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
	                  <label for="name">Name</label>
	                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter name here">
                    <label>{{ $errors->first('name') }}</label>
	                </div> 

                  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email here">
                    <label>{{ $errors->first('email') }}</label>
                  </div>

	                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
	                  <label for="phone">phone</label>
	                  <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" placeholder="Enter phone here">
                    <label>{{ $errors->first('phone') }}</label>
	                </div>  

	                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
	                  <label for="password">Password</label>
	                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password here">
                    <label>{{ $errors->first('password') }}</label>
	                </div>  

	                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"> 
                    <label>{{ $errors->first('password_confirmation') }}</label> 
                  </div>  
                  
                  <div class="form-group">
                    <label for="status">Status</label>
                     <div class="checkbox"> 
                         <label>
                            <input type="checkbox" name="status" id="status" value="1" @if(old('status') == 1) {{ 'checked' }} @endif> Status
                        </label>  
                      </div>
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