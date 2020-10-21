<header class="flex-wrapper">
    <div class="container">
        <div class="logo">
        <img src="{{ asset("images/marchio-sito-test.png") }}" alt="">
        </div>
        <nav>
            <ul>

                @if ($url == "Home")
                    <a href="{{asset("home")}}"><li class="active">Home</li></a>
                    <a href="{{asset("products")}}"><li>Prodotti</li></a>
                    <a href="{{asset("news")}}"><li>News</li></a>
                @endif
                @if ($url == "Prodotti")
                    <a href="{{asset("home")}}"><li>Home</li></a>
                    <a href="{{asset("products")}}"><li class="active">Prodotti</li></a>
                    <a href="{{asset("news")}}"><li>News</li></a>
                @endif
                @if ($url == "News")
                    <a href="{{asset("home")}}"><li>Home</li></a>
                    <a href="{{asset("products")}}"><li>Prodotti</li></a>
                    <a href="{{asset("news")}}"><li class="active">News</li></a>
                @endif
                
            </ul>
        </nav>
    </div>
</header>