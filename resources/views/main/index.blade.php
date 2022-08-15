@extends('main.layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @foreach ($posts as $post)
            <div class="card mb-3 me-2"> {{-- Card start (username) --}}
                <div class="card-header bg-white">  {{-- Card header --}}
                    <img src="{{ $post->image }}" style="max-width:30px; max-height:30px" class="me-1">
                    <span><a href="/profile/{{ $post->user->username }}" class="text-decoration-none text-dark">{{ $post->user->username }}</a></span>
                </div>  {{-- End card header --}}
                <div class="card-body"> {{-- Card body (image) --}}
                    <a href="/profile/{{ $post->user->username }}/{{ $post->code }}"><img src="{{ asset('storage/' . $post->image) }}" class="card-img" style="max-h" alt="..."></a>
                </div>  {{-- End card body --}}
                <div class="card-footer bg-white border-top-0"> {{-- Card footer (caption) --}}
                    <span class="d-block"><i class="bi bi-heart me-4"></i><i class="bi bi-chat me-4"></i><i class="bi bi-send"></i></span>
                    <span>
                        <strong><a href="/profile/{{ $post->user->username }}" class="text-decoration-none text-dark">{{ $post->user->username }}</a></strong> {{ $post->caption }}                    </span>
                    <span class="d-block">{{ $post->created_at->diffForHumans() }}</span>
                </div>  {{-- End card footer --}}
                <div class="card-footer bg-white">  {{-- Card footer (comment) --}}
                    <div class="row">
                        <div class="col-10">
                            <input type="text" name="" id="" class="form-control border-0 d-inline" placeholder="Add a comment...">
                        </div>
                        <div class="col pt-1">
                            <span class="d-inline"><a href="" class="text-decoration-none">Post</a></span>
                        </div>
                    </div>
                </div>  {{-- End card footer --}}
            </div>  {{-- Card end --}}    
            @endforeach
        </div>
    </div>
</div>
@endsection