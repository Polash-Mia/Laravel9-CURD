@extends('master')

@section('body')
<div class="container p-5">
    <div class="row">
        <div class="col-md-4 mx-auto">             
            <div class="card card-body">
                <img src="{{ asset( $student->image ) }}" class="img-fluid rounded-top" alt="" style="height: 300px" />
                <div class="text-center">
                    <h5>{{ $student->name }}</h5>
                    <h6>{{ $student->email }}</h6>
                    <h6>{{ $student->mobile }}</h6>
                    {{-- <h3>{{ $student->address }}</h3> --}}
                    <hr>
                    <h4>Chilmari Cannan Junior School</h4>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection