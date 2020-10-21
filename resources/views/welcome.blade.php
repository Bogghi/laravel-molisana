@extends('layouts.header')

<body>
    @php
        
        $data = config("pasta");        

        $lunga = [];
        $corta = [];
        $cortissima = [];

        foreach ($data as $value) {
            switch ($value["tipo"]) {
                case "lunga":
                    $lunga[] = $value;
                    break;
                case "corta":
                    $corta[] = $value;
                    break;
                case "cortissima":
                    $cortissima[] = $value;
                    break;
                default: 
                    //..code
                    break;
            }
        }

    @endphp

    <header class="flex-wrapper">
        <div class="container">
            <div class="logo">
            <img src="{{ asset("images/marchio-sito-test.png") }}" alt="">
            </div>
            <nav>
                <ul>
                    <li class="active">Home</li>
                    <li>Prodotti</li>
                    <li>News</li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="lunga flex-wrapper">
            <div class="container">
                <h2>Lunga</h2>
                <div class="row">
                @foreach ($lunga as $item)
                <div class="col">
                    <img src="{{ $item["src"] }}" alt="">
                </div>
                @endforeach
                </div>
            </div>
        </section>


        <section class="corte flex-wrapper">
            <div class="container">
                <h2>Corta</h2>
                <div class="row">
                    @foreach ($corta as $item)
                    <div class="col">
                        <img src="{{ $item["src"] }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="cortissime flex-wrapper">
            <div class="container">
                <h2>Cortissima</h2>
                <div class="row">
                    @foreach ($cortissima as $item)
                    <div class="col">
                        <img src="{{ $item["src"] }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
    
    @extends('layouts.footer')

</body>
</html>