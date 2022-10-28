@extends('master')

@section('title')
Edit student
@endsection

@section('body')

<div class="container p-5" >
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center ">Edit Student Information</h4>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        <h5>{{ Session::get('message') }}</h5>
                    </div>       
                    @endif
                    <form action="{{ route('update-student',['id'=>$student->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3">Name :</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ $student->name }}" id="name" placeholder="Name" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-3">Email :</label>
                            <div class="col-md-9">
                                <input type="email" name="email" value="{{ $student->email }}" id="email" placeholder="Email" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mobile" class="col-md-3">Mobile No. :</label>
                            <div class="col-md-9">
                                <input type="number" name="mobile" value="{{ $student->mobile }}" id="mobile"  placeholder="Mobile" class="form-control" >
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-3">Address :</label>
                            <div class="col-md-9">
                               <input type="text" name="address" value="{{ $student->address }}" id="address" placeholder="Adderss" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3">Image :</label>
                            <div class="col-md-9">
                                <input type="file" name="image"  id="image" class="form-control" >
                                <img src="{{ asset($student->image) }}" alt="" height="200" width="180">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Edit Student" >
                                <a href="{{ route('home') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
