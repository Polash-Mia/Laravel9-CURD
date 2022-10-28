@extends('master')

@section('title')
create student
@endsection

@section('body')

<div class="container p-5" >
    <div class="row">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center ">Create Student Information</h4>
                </div>
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        <h5>{{ Session::get('message') }}</h5>
                    </div>       
                    @endif
                    
                    <form action="{{ route('save-student') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3">Name :</label>
                            <div class="col-md-9">
                                <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Name" class="form-control" >
                                @error('name')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                           
                            
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-3">Email :</label>
                            <div class="col-md-9">
                                <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email" class="form-control" >
                                @error('email')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mobile" class="col-md-3">Mobile No. :</label>
                            <div class="col-md-9">
                                <input type="number" name="mobile" value="{{ old('mobile') }}" id="mobile"  placeholder="Mobile" class="form-control" >
                                @error('mobile')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-3">Address :</label>
                            <div class="col-md-9">
                               <input type="text" name="address" value="{{ old('address') }}" id="address" placeholder="Adderss" class="form-control" />
                               @error('address')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3">Image :</label>
                            <div class="col-md-9">
                                <input type="file" name="image" value="{{ old('image') }}" id="image" class="form-control" >
                                @error('image')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Create Student" >
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
