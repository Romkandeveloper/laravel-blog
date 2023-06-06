@extends('layouts.default')

@section('content')
    <div class="container mt-100">
        <section class="section">
            <div class="container">
                <div class="section__title">
                    <h3 class="section__name">Post details</h3>
                    <p class="section__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
                </div>

                <div class="card">
                    @include('components.posts.post-item', ['showActions' => true, 'showText' => true])
                </div>
            </div>
        </section>
    </div>
@endsection
