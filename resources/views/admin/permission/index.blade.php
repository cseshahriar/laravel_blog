@extends('admin.layouts.app')

@section('extracss') 
 <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"> 
@endsection

@section('main-content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> 
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="box">
                  <div class="box-header">
                      <h3 class="box-title">Permissions
                      </h3>
                      <span class="pull-right">
                         <a href="{{ route('permission.create') }}" class="btn btn-success pull-right">Add New</a>
                      </span>
                      <br><br>
                      @include('admin.layouts.messages')
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Permission Name</th>
                            <th>Permission For</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                          @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td> 
                                <td>{{ $permission->name }}</td> 
                                <td>{{ $permission->for }}</td>
                                <td>
                                  <a href="{{ route('permission.edit', $permission->id) }}" onclick="return confirm('Are you sure, Want to edit this?');">  
                                    <i class="fa fa-edit"></i></a> 
                                  </td>
                                <td>
                                  <form id="delete-form-{{ $permission->id }}" action="{{ route('permission.destroy', $permission->id) }}" method="post" style="display: none;">  
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  </form>
                                  <a href="" onclick="if(confirm('Are you sure, Want to delete this?')) { 
                                      event.preventDefault(); 
                                        document.getElementById('delete-form-{{ $permission->id }}').submit();
                                       } else { 
                                          event.preventDefault();   
                                      }">
                                    <i class="fa fa-trash"></i>     
                                  </a>
                                </td>
                            </tr>
                          @endforeach

                          <tfoot>
                            <th>S.No</th>
                            <th>Permission Name</th>
                            <th>Permission For</th>
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