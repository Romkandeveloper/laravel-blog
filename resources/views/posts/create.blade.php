@extends('layouts.default')

@section('content')
    <div class="container mt-100">
        <section class="section">
            <div class="container">
                <div class="section__title">
                    <h3 class="section__name">Create post</h3>
                    <p class="section__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
                </div>
                <div class="inners">
                    <form class="form" method="POST" action="{{ route('posts.store') }}">
                        @csrf

                        <div class="w-100">
                            <input
                                required
                                type="text"
                                name="title"
                                placeholder="Title"
                                class="form__input"
                                minlength="5"
                                maxlength="255"
                            >
                            @error('title')
                            <div class="validation-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="w-100">
                            <textarea
                                required
                                name="text"
                                placeholder="Write your message"
                                class="form__input form__input-all textarea"
                                minlength="5"
                                maxlength="2000"
                            ></textarea>
                            @error('text')
                            <div class="validation-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Create post" class="form__input form__input-half form__input-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
