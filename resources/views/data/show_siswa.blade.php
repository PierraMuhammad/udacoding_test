@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card">
            <div class="ms-5 mt-2 mb-5">
                <div class="">
                    <h1>{{$student->name}} Detail Information</h1>
                </div>
                <div class="">
                    <table>
                        <tr>
                            <td>name</td>
                            <td>: {{$student->name}}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>: {{$student->NISN}}</td>
                        </tr>
                        <tr>
                            <td>class</td>
                            <td>: {{$student->class}}</td>
                        </tr>
                        <tr>
                            <td>age</td>
                            <td>: {{$student->age}}</td>
                        </tr>
                        <tr>
                            <td>sex</td>
                            <td>: {{$student->sex}}</td>
                        </tr>
                        <tr>
                            <td>Guardian number phone</td>
                            <td>: {{$student->number_phone}}</td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="">
                    <h4>Score</h4>
                    <h5>Math: {{$student->math}}</h5>
                    <h5>Science: {{$student->science}}</h5>
                    <h5>Social: {{$student->social}}</h5>
                    <h5>Physical Education: {{$student->pe}}</h5>
                    <h5>Art: {{$student->art}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection