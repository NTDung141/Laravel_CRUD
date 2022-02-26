@extends('layouts\app')

@section('title')
    New todo
@endsection

@section('content')
    <h1 class="text-center my-5">Create Todo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Create
                </div>

                <div class="card-body">
                    <form action="/store-todo" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" rows="3" placeholder="description"
                                name="description"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
