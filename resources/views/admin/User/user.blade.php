@extends('admin.includes.include')
@section('content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Settings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Profile</a></li>
              <li class="breadcrumb-item active">User Management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      <div class="content-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">All User</h2>
                        <div class="float-right"><a href="{{url('/')}}/admin/profile/adduser" class="btn btn-primary">Add User</a></div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Profile</th>
                                <th>Status</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{$item->admin_name}}</td>
                                <td>{{$item->admin_email}}</td>
                                <td><img src="{{url('/')}}/assets/images/profile/{{$item->admin_profile}}"  height="100px" alt=""></td>
                                <td>@if($item->admin_status==1) <div class="badge badge-success">Active</div> @else <div class="badge badge-danger">Deactive</div> @endif</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>Profile</th>
                                <th>Status</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection