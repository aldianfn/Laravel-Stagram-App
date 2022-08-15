@extends('main.layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mb-3 me-2">
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between">
                            <a href="{{ url()->previous() }}" class="text-dark mt-1"><i class="bi bi-arrow-left"></i></a>
                            <span class="pt-1 pb-0">Create new post</span>
                            <button type="submit" class="btn btn-link text-decoration-none px-0 py-0">Share</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <input type="file" class="form-control" id="image" name="image" onchange="previewImage()" required>
                                <img src="" alt="" class="img-preview img-fluid mb-3">
                            </div>
                            <div class="col-lg">
                                <img src="/assets/img/anju2.png" style="max-width:30px; max-height:30px" class="me-2">
                                <span>{{ auth()->user()->username }}</span>
                                <div class="d-block">
                                    <textarea name="caption" id="caption" cols="35" rows="10" class="border-0" style="resize: none; outline:none; min-width:100%" placeholder="Write a caption..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
