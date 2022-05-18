@extends('dashboard.index')
@section('content')
<div class="container py-5 shadow p-3 mb-5 bg-white rounded rounded m-5">
    <div class="row justify-content-center">
        <div class="col mt-2">
            <h1> Add a Business</h1>
        </div>
    </div>

    <form method="POST" action="{{ route('apilistingstore') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
            <label for="usr">Title of Business:</label>
            <input type="text" class="form-control" name="Btitle">
        </div>
        <div class="form-group">
            <label for="pwd">Description:</label>
            <textarea class="form-control" rows="3" cols="10" name="desc"></textarea>
        </div>
        <div class="form-group">
            <label for="pwd">Slogan:</label>
            <input type="text" class="form-control" name="Sdesc">
        </div>
        <div class="form-group">
            <label for="pwd">Type of Business:</label>
            <input type="text" class="form-control" name="type_of_bus">
        </div>

        <div class="form-group">
            <label for="pwd">Banner:</label>
            <input type="file" class="form-control" name="snipshot">
        </div>
        <div class="form-group">
            <label for="pwd">Country:</label>
            <input type="text" class="form-control" name="country">
        </div>
        <div class="form-group">
            <label for="pwd">City:</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="form-group">
            <label for="pwd">Address Line 1:</label>
            <input type="text" class="form-control" name="Address_1">
        </div>
        <div class="form-group">
            <label for="pwd">Address Line 2:</label>
            <input type="text" class="form-control" name="Address_2">
        </div>
        <div class="form-group">
            <label for="pwd">Whatsapp:</label>
            <input type="tel" class="form-control" name="whatsapp">
        </div>
        <div class="form-group">
            <label for="pwd">Phone:</label>
            <input type="tel" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label for="pwd">website:</label>
            <input type="text" class="form-control" name="website">
        </div>
        <div class="form-group">
            <label for="pwd">Open time:</label>
            <input type="time" class="form-control" name="opentime">
        </div>
        <div class="form-group">
            <label for="pwd">Close time:</label>
            <input type="time" class="form-control" name="Closetime">
        </div>
        <div class="form-group">
            <label for="pwd">Keywords:</label>
            <input type="text" class="form-control" name="meta_desc">
        </div>
        <div class="form-group">
            <label for="pwd">Categories:</label>
            <input type="text" class="form-control" name="categories">
        </div>

        <div class="form-group">
            <label for="pwd">tags:</label>
            <input type="text" class="form-control" name="tags">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
@endsection