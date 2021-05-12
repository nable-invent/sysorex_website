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
              <li class="breadcrumb-item active">Add User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
      <div class="content-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Add User</h2>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      @if(session('success'))
                        <div class="text-success mb-1">{{session('success')}}</div>
                      @elseif(session('error'))
                        <div class="text-danger mb-1">{{session('error')}}</div>
                      @endif
                      <form action="{{url('/')}}/admin/profile/adduserdata" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="">
                            Name
                          </label>
                          <input type="text" name="name" class="form-control">
                          @error('name')
                              <div class="text-danger">
                                {{$message}}
                              </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">
                            Email
                          </label>
                          <input type="email" name="email" class="form-control">
                          @error('email')
                            <div class="text-danger">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">
                            Password
                          </label>
                          <input type="text" name="password" class="form-control">
                          @error('password')
                            <div class="text-danger">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="">
                            Profile
                          </label>
                          <input type="file" name="profile" class="form-control">
                          @error('profile')
                            <div class="text-danger">
                              {{$message}}
                            </div>
                          @enderror
                        </div>
                        <button class="btn btn-primary">
                          Create
                        </button>
                      </form>
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