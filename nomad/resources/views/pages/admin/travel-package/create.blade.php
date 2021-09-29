@extends('layouts.admin')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Tambah Paket Travel</h1>
                        
                    </div>

                    <!-- Content Row -->
                    

               
{{-- <div class="card-body">
   
</div> --}}

@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{$error}}</li>
            
        @endforeach
    </ul>
</div>
    
@endif

<div class="card shadow">
   <div class="card-body">
       <form action="{{route('travel-package.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title..." value="{{old('title')}}" id="">
        </div>
        <div class="form-group">
            <label for="Location">Location</label>
            <input type="text" class="form-control" name="location" placeholder="Location..." value="{{old('location')}}" id="">
        </div>
        <div class="form-group">
            <label for="about">About</label>
            <textarea name="about" id="" rows="10" class="d-block w-100 form-control">{{old('about')}}</textarea>
        </div>
        <div class="form-group">
            <label for="featured_event">Featured Event</label>
            <input type="text" class="form-control" name="featured_event" placeholder="Featured Event..." value="{{old('featured_event')}}" id="">
        </div>
        <div class="form-group">
            <label for="Language">Language</label>
            <input type="text" class="form-control" name="language" placeholder="Language..." value="{{old('language')}}" id="">
        </div>
        <div class="form-group">
            <label for="Foods">Foods</label>
            <input type="text" class="form-control" name="foods" placeholder="Foods..." value="{{old('foods')}}" id="">
        </div>
        <div class="form-group">
            <label for="departure_date">Departure Date</label>
            <input type="date" class="form-control" name="departure_date" placeholder="Departure Date..." value="{{old('departure_date')}}" id="">
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" name="duration" placeholder="Duration..." value="{{old('duration')}}" id="">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Type..." value="{{old('type')}}" id="">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price..." value="{{old('price')}}" id="">
        </div>

        <button type="submit" class="btn btn-primary btn-block"> Simpan</button>

    
    
    </form>
   </div>
</div>
              

                   

                   
                    

               


                </div>
                <!-- /.container-fluid -->
@endsection