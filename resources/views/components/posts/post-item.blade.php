<div class="card__item">
    <a class="card__photo" href="{{ route('posts.show', ['post' => $post]) }}">
        <img  src="https://romkandeveloper.github.io/Startup/image/card/Layer_27.jpg" class="img card__img-shadow" alt="">
    </a>
    <div class="card__description">
        <div class="card__header">
            <div class="card__date">
                <div class="card__number">{{ $post->created_at->format('d') }}</div>
                <div class="card__mounth">{{ $post->created_at->format('M') }}</div>
                <div class="card__time">{{ $post->created_at->format('H:i') }}</div>
            </div>
            <h4 class="card__title">
                <a class="card__title" href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a>
            </h4>
            <p>By <span class="card__text-color">Firstname</span> Lastname in <span class="card__text-color">Blog name</span></p>
        </div>
        <div class="card__text">
            @if ($showText)
                {{ $post->text }}
            @else
                {{ Str::limit($post->text, $limit = 500, $end = '...') }}
            @endif
        </div>

        @if($showActions)
            <div class="card__actions">
                <div class="form mt-50">
                    <a href="{{ route('posts.edit', ['post' => $post]) }}" class="form__input form__input-btn text-center">Edit post</a>
                </div>

                @include('components.posts.delete-btn')
            </div>
        @else
            <a href="{{ route('posts.show', ['post' => $post]) }}" class="card__btn">Read more</a>
        @endif

    </div>
</div>
