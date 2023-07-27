@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-8">
        <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-body">
                <h4 class="font-weight-bolder mt-2 mb-0">Update Student: {{$student->name}}</h4>
                <form role="form" class="text-start" method="POST" action="/students/{{$student->id}}">
                    @csrf
                    @method('PUT')
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $student->name) }}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" name="age" id="age" value="{{ old('age', $student->age) }}">
                    </div>
                    @error('age')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">NISN</label>
                        <input type="text" class="form-control" name="NISN" id="NISN" value="{{ old('NISN', $student->NISN) }}">
                    </div>
                    @error('NISN')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Sex</label>
                        <input type="text" class="form-control" name="sex" id="sex" value="{{ old('sex', $student->sex) }}">
                    </div>
                    @error('sex')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">Guardian Phone Number</label>
                        <input type="text" class="form-control" name="number_phone" id="number_phone" value="{{ old('number_phone', $student->number_phone) }}">
                    </div>
                    @error('number_phone')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <div class="input-group input-group-outline mt-3">
                        <label class="form-label">class</label>
                        <input type="text" class="form-control" name="class" id="class" value="{{ old('class', $student->class) }}">
                    </div>
                    @error('class')
                        <div class="alert alert-danger">{{ $message}}</div>
                    @enderror
                    <h5>Score</h5>
                    <div class="d-flex">
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Math</label>
                            <input type="text" class="form-control" name="math" id="math" value="{{ old('math', $student->math) }}">
                        </div>
                        @error('math')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Science</label>
                            <input type="text" class="form-control" name="science" id="science" value="{{ old('science', $student->science) }}">
                        </div>
                        @error('science')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Social</label>
                            <input type="text" class="form-control" name="social" id="social" value="{{ old('social', $student->social) }}">
                        </div>
                        @error('social')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Physical Education</label>
                            <input type="text" class="form-control" name="pe" id="pe" value="{{ old('pe', $student->pe) }}">
                        </div>
                        @error('pe')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                        <div class="input-group input-group-outline mt-3 me-2">
                            <label class="form-label">Art</label>
                            <input type="text" class="form-control" name="art" id="art" value="{{ old('art', $student->art) }}">
                        </div>
                        @error('art')
                            <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="">
                        <button type="submit" class="btn bg-gradient-primary my-4 mb-2"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection