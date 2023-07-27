@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-body">
                <h4 class="font-weight-bolder mt-2 mb-0">Create New Student</h4>
                <form role="form" class="text-start" method="POST" action="/students">
                    @csrf
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                    </div>
                    @error('age')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">NISN</label>
                        <input type="text" class="form-control" name="NISN" id="NISN">
                    </div>
                    @error('NISN')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Sex</label>
                        <input type="text" class="form-control" name="sex" id="sex">
                    </div>
                    @error('sex')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Guardian Phone Number</label>
                        <input type="text" class="form-control" name="number_phone" id="number_phone">
                    </div>
                    @error('number_phone')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">class</label>
                        <input type="text" class="form-control" name="class" id="class">
                    </div>
                    @error('class')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <h5>Score</h5>
                    <div class="d-flex">
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Math</label>
                            <input type="text" class="form-control" name="math" id="math">
                        </div>
                        @error('math')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Science</label>
                            <input type="text" class="form-control" name="science" id="science">
                        </div>
                        @error('science')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Social</label>
                            <input type="text" class="form-control" name="social" id="social">
                        </div>
                        @error('social')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Physical Education</label>
                            <input type="text" class="form-control" name="pe" id="pe">
                        </div>
                        @error('pe')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Art</label>
                            <input type="text" class="form-control" name="art" id="art">
                        </div>
                        @error('art')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn bg-gradient-primary my-4 mb-2"> Create </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection