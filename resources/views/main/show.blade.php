@extends('main.layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            {{-- <img src="{{ asset('storage/' . $posts->image) }}" alt=""> --}}
            <div class="card mb-3 me-2"> {{-- Card start (username) --}}
                <div class="row">
                    <div class="col-lg-7">
                        <img src="{{ asset('storage/' . $posts->image) }}" alt="" class="card-img h-100">
                    </div>
                    <div class="col-lg">
                        <div class="card-header bg-white">
                            <img src="{{ asset('storage/' . $posts->image) }}" style="max-width:30px; max-height:30px" class="me-1">
                            <span><a href="/profile/{{ $posts->user->username }}" class="text-decoration-none text-dark fw-semibold">{{ $posts->user->username }}</a></span>
                        </div>
                        <div class="card-body h-75">
                            <img src="{{ asset('storage/' . $posts->image) }}" style="max-width:30px; max-height:30px" class="me-1">
                            <span><a href="/profile/{{ $posts->user->username }}" class="text-decoration-none text-dark fw-semibold">{{ $posts->user->username }}</a> {{ $posts->caption }}</span>
                        </div>
                        <div class="card-footer bg-white">
                            <div class="row mt-auto">
                                <span class="d-block mb-2"><i class="bi bi-heart me-4"></i><i class="bi bi-chat me-4"></i><i class="bi bi-send"></i></span>
                                <div class="col-10">
                                    <input type="text" name="" id="" class="form-control border-0 d-inline" placeholder="Add a comment...">
                                </div>
                                <div class="col pt-1">
                                    <span class="d-inline"><a href="" class="text-decoration-none">Post</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  {{-- Card end --}}   
        </div>
    </div>
</div>
@endsection