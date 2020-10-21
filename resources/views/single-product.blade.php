@include('partials.head')


@include('partials.header')

<div class="single-prod">
    <div class="text">
        <h1>{{$pasta["titolo"]}}</h1>
    </div>
    <div class="main-img">
        <img src="{{$pasta["src-h"]}}" alt="">
        <img src="{{$pasta["src-p"]}}" alt="">
    </div>
    <div class="text flex-wrapper">
        <div class="row">
            <div class="desc">{!!$pasta["descrizione"]!!}</div>
        </div>
    </div>
</div>
    
@include('partials.footer')