@extends('layouts.master')
@section('title')

@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item"><a href="">Student</a></li>
            <li class="breadcrumb-item active" aria-current="page">List</li>
        </ol>
    </nav>
    <div class="panel-body widget-shadow">
        <table class="table table-hover table-bordered">
            <h3 class="page-header">Student Manager<a class="btn btn-sm btn-success pull-right" href="{{route('student.create')}}" title=""><i class="fa fa-plus"></i></a></h3>
            <thead>
            <tr>
                <th>#</th>
                <th>Student name</th>
                <th>Class</th>
                <th>Gender</th>
                <th>Avatar</th>
                <th>Birthday</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if (isset($students))
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->class->name}}</td>
                        <td>{{$student->gender == 1 ? 'Male' : 'Femaile'}}</td>
                        <td></td>
                        <td>{{date_format( 'd/m/Y',$student->birthday)}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href=""><b><i class="fa fa-edit" title="Sửa"></i></b></a>
                            <a class="btn btn-danger btn-sm" href="" title="Xóa"><b><i class="fa fa-remove"></i></b></a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection