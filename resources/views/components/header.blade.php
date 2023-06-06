<header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="{{ route('dashboard') }}" class="header__logo">Blog</a>
            <nav class="nav">
                <a href="{{ route('dashboard') }}" class="nav__item">Home</a>
                <a href="{{ route('posts.create') }}" class="nav__item">Create post</a>
                <span href="#" class="nav__item nav__item--disabled">About</span>
                <span href="#" class="nav__item nav__item--disabled">Works</span>
                <span href="#" class="nav__item nav__item--disabled">Blog</span>
                <span href="#" class="nav__item nav__item--disabled">Clients</span>
                <span href="#" class="nav__item nav__item--disabled">Contact</span>
            </nav>
        </div>
    </div>
</header>
