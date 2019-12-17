@extends('layouts.app')
@include('inc.nav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="profile.png" class="card-img" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{auth()->user()->name}}</h5>
                      <p class="card-text">{{auth()->user()->email}}</p>
                      <p class="card-text"><small class="text-muted">Account created on {{auth()->user()->created_at}}</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Students Dashboard</a>
                    </nav>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav mr-auto"  style="cursor:pointer">
                                <li class="nav-item">
                                  <a class="nav-link" onclick="document.getElementById('download_file').style.display='inline';document.getElementById('manage_profile').style.display='none';">Download Content</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" onclick="document.getElementById('manage_profile').style.display='inline';document.getElementById('download_file').style.display='none';">Manage Profile</a>
                                </li>
                              </ul> 
                            </div>
                          </nav>
                    </nav>
                </div>
            </div>
            <div id="manage_profile" style="display:none">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="profile.png" class="card-img" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{auth()->user()->name}}</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Account created on {{auth()->user()->created_at}}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div id="download_file">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Description</th>
              <th scope="col">Date Uploaded</th>
              <th scope="col">Download</th>
            </tr>
          </thead>
          <tbody>
          @foreach($files as $file)
            <tr><td>{{$file->title}}</td><td>{{$file->description}}</td><td>{{$file->created_at}}</td><td> <a>Download</a></td><tr>
          @endforeach
          </tbody>
      </table>
    </div>
</div>
@endsection
