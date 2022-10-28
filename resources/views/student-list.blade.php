@extends('master')

@section('title')
student list
@endsection

@section('body')


    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('create-student') }}" class="btn btn-primary ">Create Student</a>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Student List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student )
                                    
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->mobile }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>
                                        <img src="{{ asset( $student->image ) }}" alt="" height="80" width="70">
                                    </td>
                                    <td>
                                       <a href="{{ route('detail.student',['id'=>$student->id]) }}" class="btn btn-primary" title="open"><i class="fa fa-book-open"></i></a> 
                                       <a href="{{ route('edit.student',['id'=>$student->id]) }}" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a> 
                                       <a href="{{ route('delete.student',['id'=>$student->id]) }}" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>           
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    
