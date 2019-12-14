@extends('layouts.app')
<div class="jumbotron">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
  <div class="row justify-content-center">
    <div class="col-md-8">
      <a href='admin' type="button" class="btn btn-info">Back</a>
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
            <tr><td>{{$teacher->name}}</td><td>{{$teacher->subject}}</td><td>{{$teacher->email}}</td><td><a style="color:white;text-decoration:none"type="button" class="btn btn-primary">Edit</a> | {!!Form::open(['action'=>['TeachersController@destroy',$teacher->id],'method'=>'POST','class'=>'pull-right'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
              {!!Form::close()!!}</td><tr>
            @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>


