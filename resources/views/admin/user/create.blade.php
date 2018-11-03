@extends('admin.layouts.app')
@section('main-content')
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
            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store')}}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class=" col-lg-offset-3 col-lg-6">

                <div class="form-group">
                  <label for="name">New User Name</label>
                  <input type="text" class="form-control" id="name" name="name"placeholder="User Name" value="{{old('name')}}">
                </div>
                

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email"placeholder=" email"value="{{old('email')}}" >
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone"placeholder=" phone" value="{{old('phone')}}">
                </div> 
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password"placeholder=" password" value="{{old('password')}}">
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confrim Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"placeholder=" confirm_password">
                </div>

                <div class="form-group">
                  <label for="status">Status</label>
                <div class="checkbox">
                   <label>
                  <input type="checkbox" name="status"  @if(old('status') == 1)

                  checked

                  @endif  value="1">Status</label>
                  </div>
                  
                </div>


                 <div class="form-group">
                   <label >Assign Role</label>
                   <div class="row">

                  @foreach($roles as $role)

                  <div class="col-lg-4">

                 <div class="checkbox">
                   <label>
                  <input type="checkbox" name="role[]" value="{{$role->id}}">{{$role->name}}</label>
                  </div>
                 </div> 
                  @endforeach
                   </div>
                </div>
                 <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a  href="{{route('user.index')}}" class="btn btn-warning">Back</a>
              </div>
                 </div>
                  
            </div>
              
        
        
    
             
            </form>
          </div>
          <!-- /.box -->
           
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection