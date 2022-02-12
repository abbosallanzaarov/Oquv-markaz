@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center align-items-center" >
            <h5>Boshqaruv paneliga kirishni xoxlaysizmi ?</span>
                <a href="{{route('admin.dash')}}" style="width: 80%; margin:10px 0;" class="btn btn-primary ">Kirish</a>
        </div>
    </div>
</div>
@endsection
