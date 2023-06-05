@extends('layouts.default')

@section('content')
    <div class="container mt-100">
        <section class="section">
            <div class="container">
                <div class="section__title">
                    <h3 class="section__name">Edit post</h3>
                    <p class="section__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr amet</p>
                </div>
                <div class="inners">
                    <form class="form" method="PUT" action="{{ route('posts.update', $post->id) }}">
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
                                value="{{ $post->title }}"
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
                            >{{ $post->text }}</textarea>

                            @error('text')
                            <div class="validation-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="submit" value="Update post" class="form__input form__input-half form__input-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
