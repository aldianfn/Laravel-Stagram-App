@extends('main.layouts.main')
{{-- Outside foreach use $data[0]->relation->field e.g. $posts[0]->user->username --}}

@section('content')
    <div class="container mt-4">
        @if ($posts->count())
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle" style="max-width:200px; max-height:200px" src="/assets/img/logo-black.png" alt="username">
                    </div>
                    <div class="col-lg-8">
                        <div class="d-block">
                            {{-- Problem --}}
                            @if ($posts->count())
                                <span class="me-5" style="font-size: 28px;">{{ $posts[0]->user->username }}</span>
                            @else
                                <span class="me-5" style="font-size: 28px;">{{ $user->username }}</span>
                            @endif
                            <a class="btn btn-outline-dark py-1" href="">Edit profile</a>
                        </div>
                        <div class="d-block my-4">
                            <span class="me-5"><strong>{{ $posts->count() }}</strong> posts</span>
                            <span class="me-5"><strong>20</strong> followers</span>
                            <span><strong>17</strong> following</span>
                        </div>
                        <div class="d-block">
                            {{-- Problem --}}
                            @if ($posts->count())
                                <strong>{{ $posts[0]->user->name }}</strong><br>
                            @else
                                <strong>{{ $user->name }}</strong><br>
                            @endif
                            <span>Description section</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @if($posts->count())
                        @foreach ($posts as $post)
                        <div class="col-md-4 d-flex justify-content-center">
                            <div class="card mb-4">
                                <a href="/profile/{{ $post->user->username }}/{{ $post->code }}"><img src="{{ asset('storage/' . $post->image) }}" class="img-fluid text-center" style="object-fit:cover; height:240px; width:240px" alt=""></a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        @else
        no user
        @endif
    </div>
@endsection