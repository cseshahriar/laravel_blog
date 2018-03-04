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
              <h3 class="box-title">Edit New Permission</h3>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <br>
                 @include('admin.layouts.messages')
              </div>  
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('permission.update', $permission->id) }}" method="post"> 
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="col-md-6 col-md-offset-3">

                  <div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
                    <label for="name">Permission Title</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{ $permission->name }}" placeholder="Enter tag name here">
                    <label>{{ $errors->first('name') }}</label> 
                  </div> 

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''  }}">
                    <label for="for">Permission For</label>
                      <input type="text" name="for" value="{{ $permission->for }}" class="form-control">
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