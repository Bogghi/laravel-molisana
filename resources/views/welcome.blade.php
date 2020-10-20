<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana</title>
</head>
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

    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li>Home</li>
                <li>Prodotti</li>
                <li>News</li>
            </ul>
        </nav>
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
    
    <footer>
        
    </footer>

</body>
</html>