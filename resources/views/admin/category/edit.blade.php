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
              <h3 class="box-title">Write an articel</h3>
            </div>
            <!-- /.box-header -->
			
            <!-- form start -->
            <form role="form"> 
              <div class="box-body">
              	<div class="col-md-6">
	                <div class="form-group">
	                  <label for="title">Article Title</label>
	                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter article title here">
	                </div> 

	                <div class="form-group">
	                  <label for="subtitle">Article Subtitle</label>
	                  <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter article subtitle here">
	                </div>  

	                <div class="form-group">
	                  <label for="slug">Article Slug</label>
	                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter article slug here">
	                </div>
              	</div>

              	<div class="col-md-6">

	                <div class="form-group">
	                  <label for="image">Articel Image</label>
	                  <input type="file" name="image" id="image">
	                </div>

	                <br>
	                <div class="checkbox">
	                  <label>
	                    <input type="checkbox" name="status"> Publish
	                  </label>
	                </div> 

              	</div>
              </div>
               {{-- editor --}}
		<div class="box">
		  <div class="box-header">
		    <h3 class="box-title">Write Articel Body Here
		      <small>Simple and fast</small>
		    </h3>
		    <!-- tools box -->
		    <div class="pull-right box-tools">
		      <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
		              title="Collapse">
		        <i class="fa fa-minus"></i></button>
		      <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
		              title="Remove">
		        <i class="fa fa-times"></i></button>
		    </div>
		    <!-- /. tools -->
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body pad">
		    <form>
		      <textarea class="textarea" name="body" id="visualeditor" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		    </form>
		  </div>
		</div>
		{{-- editor end  --}}
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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