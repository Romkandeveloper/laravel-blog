<div class="card__item">
    <div class="card__photo">
        <img  src="https://romkandeveloper.github.io/Startup/image/card/Layer_27.jpg" class="img card__img-shadow" alt="">
    </div>
    <div class="card__description">
        <div class="card__header">
            <div class="card__date">
                <div class="card__number">{{ $post->created_at->format('d') }}</div>
                <div class="card__mounth">{{ $post->created_at->format('M') }}</div>
                <div class="card__time">{{ $post->created_at->format('H:i') }}</div>
            </div>
            <h4 class="card__title">{{ $post->title }}</h4>
            <p>By <span class="card__text-color">Firstname</span> Lastname in <span class="card__text-color">Blog name</span></p>
        </div>
        <div class="card__text">
            {{ $post->text }}
        </div>

        @if('show-actions')
            <div class="card__actions">
                <div class="form mt-50">
                    <a href="{{ route('posts.edit', ['post' => $post]) }}" class="form__input form__input-btn text-center">Edit post</a>
                </div>

                @include('components.posts.delete-btn')
            </div>
        @else
            <a href="#" class="card__btn">Read more</a>
        @endif

    </div>
</div>
