@extends('admin.layouts.app')

@section('extracss') 
 <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"> 
@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> 
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
     <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Tags
                    </h3>
                    <span class="pull-right">
                       <a href="{{ route('post.create') }}" class="btn btn-success pull-right">Add New</a> 
                    </span>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                          @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td> 
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->subtitle}}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                <td><i class="fa fa-edit"></i></td>
                                <td><i class="fa fa-trash"></i></td>
                            </tr>
                          @endforeach

                          <tfoot>
                            <th>S.No</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tfoot>
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
        </div>
      <!-- /.box -->
		</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection 

@section('extrajs')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script> 
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection 