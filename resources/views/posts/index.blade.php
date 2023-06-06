@extends('layouts.default')

@section('content')
    <div class="container mt-100">
        <section class="section">
            <div class="container">
                <div class="section__title">
                    <h3 class="section__name">Posts list</h3>
                    <p class="section__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
                </div>

                <div class="card">
                    @foreach ($posts as $post)
                        @include('components.posts.post-item', ['showActions' => false])
                    @endforeach
                </div>

                <div class="mt-50">{{ $posts->links() }}</div>
            </div>
        </section>
    </div>
@endsection
