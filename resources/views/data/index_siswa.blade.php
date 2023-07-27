@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body px-0 pb-2">
                <h4 class="font-weight-bolder mb-0 ms-2">Students Table</h4>
                <a href="/students/create"><button class="btn btn-primary ms-2 mt-2">Create New Student</button></a>
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">no</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sex</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Class</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Guardian's phone number</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $item => $student)
                            <tr>
                                <td>
                                    <div class="tex-sm mb-0 ms-3">{{$item+1}}</div>
                                </td>
                                <td>
                                    <div class="d-flex px-2">
                                        <h6 class="mb-0 text-sm">{{$student->name}}</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">{{$student->sex}}</p>
                                </td>
                                <td>
                                    <span class="text-xs font-weight-bold">{{$student->class}}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center">
                                        {{$student->number_phone}}
                                    </div>
                                </td>
                                <td class="d-flex">
                                    <a href="/students/{{$student->id}}" class="ms-1 me-1"><button class="btn btn-success">detil</button></a>
                                    <a href="/students/{{$student->id}}/edit" class="ms-1 me-1"><button class="btn btn-warning">edit</button></a>
                                    <form action="/students/{{$student->id}}" method="POST" class="ms-1 me-1">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection