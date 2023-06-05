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
                    <form class="form">
                        <input type="text" placeholder="Title" class="form__input">
                        <textarea placeholder="Write your message" class="form__input form__input-all textarea"></textarea>
                        <input type="button" value="Create post" class="form__input form__input-half form__input-btn">
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
