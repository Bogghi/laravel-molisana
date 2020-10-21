@include('partials.head')


@include('partials.header')

<main>

@foreach ($container as $key => $items)
    <section class="flex-wrapper">
        <div class="container">
            <h2>{{$key}}</h2>
            <div class="row">
                @foreach ($items as $item)
                <div class="col">
                    <a href="{{asset("products")."/".$item['id']}}">
                        <img src="{{$item["src"]}}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endforeach

</main>
    
@include('partials.footer')