@extends('layouts.app')
@include('inc.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrator - Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="reg_teachers">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{\Session::get('success')}}</p>
                    </div>
                    @endif
                    <form method="POST" action="{{url('teacher')}}">
                        {{csrf_field()}}
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Name</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Subject</label>
                                <input type="text" class="form-control" id="inputPassword4" name="subject">
                              </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label for="inputEmail4">NIC Number</label>
                                  <input type="text" class="form-control" id="inputEmail4" name="nic_no">
                                </div>
                                <div class="form-group col-md-6">
                                  <label for="inputPassword4">Phone No.</label>
                                  <input type="text" class="form-control" id="inputPassword4" name="phone">
                                </div>
                              </div>
                            <div class="form-group">
                              <label for="inputAddress">Qualification</label>
                              <input type="text" class="form-control" id="inputAddress" placeholder="Qualifications" name="qualification">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">District</label>
                                <input type="text" class="form-control" id="inputCity" name="district">
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" name='email'>
                                  </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Register</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="jumbotron">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              Teachers list
              <div style="float:right">
                 Total Number of teachers : {{count($teachers)}}
              </div>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                <tr><td>{{$teacher->name}}</td><td>{{$teacher->subject}}</td><td>{{$teacher->email}}</td><td> {!!Form::open(['action'=>['TeachersController@destroy',$teacher->id],'method'=>'POST','class'=>'pull-right'])!!}{{Form::hidden('_method','DELETE')}}{{Form::submit('Remove',['class'=>'btn btn-danger'])}}{!!Form::close()!!}</td><tr>
                @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>
@endsection
