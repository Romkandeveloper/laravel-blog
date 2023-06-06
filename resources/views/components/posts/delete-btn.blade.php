<form class="form" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete post" class="form__input form__input-btn form__input-danger">
</form>
