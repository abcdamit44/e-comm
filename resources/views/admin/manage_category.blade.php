@extends('admin.layout')

@section('content')
    <div class="row justify-content-between">
        <h2>Add Category</h2>
        <a href="category" class="btn btn-secondary">Back</a>

    </div>
    <div class="row justify-content-center my-3">
    <div class="col-md-10">
    <div class="card">
        <div class="card-header">Credit Card</div>
            <div class="card-body">
                <div class="card-title">
                    <h3 class="text-center title-2">Add Category</h3>
                </div>
                <hr>
               <form>
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3 form-check">
                    <label for="" class="form-label">Image</label>

                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
