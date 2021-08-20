@extends('layouts.success')
@section('title', 'Checkout Success')


@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/img/icon/ic_success.png')}}" alt="" width="300" class="image-success mb-4">
            <h1>Yaiy ! Success</h1>
            <p>We Have Sent You Email for Trip Instruction
                <br>
                Please Read it as Well </p>
            <a href="index.html" class="btn btn-homepage mt-3 px-5">Homepage</a>
        </div>
    </div>
</main>
@endsection
