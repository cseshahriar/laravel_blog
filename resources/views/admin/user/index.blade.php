@extends('admin.layouts.app')
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
      <!-- Default box -->
      <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Users
                    </h3>
                    <span class="pull-right">
                       <a href="{{ route('user.create') }}" class="btn btn-success pull-right">Add New</a>
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
                            <th>Name</th>
                            <th>Assigned Roles</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th> 
                        </tr>
                      </thead>

                      <tbody>
                          @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td> 
                                <td>{{ $user->name }}</td>
                                <td>
                                  @foreach($user->roles as $role)
                                    {{ $role->name }},
                                  @endforeach
                                </td> 
                                <td>{{ $user->email }}</td> 
                                <td>
                                  <a href="{{ route('user.edit', $user->id) }}" onclick="return confirm('Are you sure, Want to edit this?');">  
                                    <i class="fa fa-edit"></i></a> 
                                  </td>
                                <td>
                                  <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="post" style="display: none;">  
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  </form>
                                  <a href="" onclick="if(confirm('Are you sure, Want to delete this?')) { 
                                      event.preventDefault(); 
                                        document.getElementById('delete-form-{{ $user->id }}').submit();
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
                            <th>Name</th>
                            <th>Assigned Roles</th>
                            <th>Email</th> 
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