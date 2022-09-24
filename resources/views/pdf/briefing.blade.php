<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Briefing</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            margin-top: 30px;
            max-width: 100%;
            padding: 30px
        }

        div.title {
            display: inline-block;
            max-width: 70%;
        }

        div.title h3 {
            font-size: 25px;
        }

 
    </style>
</head>

<body>

    <header class="container">
        <div class="title">
            <h3>Briefing</h3>
        <div>
    </header>

    <div class="container">
       
     @foreach ($data as $item )
     <div>
        @if ($item['type'] === 'h1')

        <div>
            <h1>
                {{$item['type']}} -  {{$item['keyword']}}
            </h1>
            @if($item['incluir'] != null)
            <h1>
              incluir :   {{$item['incluir']}}
            </h1>
            @endif   

        </div>

        @elseif ($item['type'] === 'h2')
        <hr>
        <div>
            <h2>
                {{$item['type']}} - {{$item['keyword']}}
            </h2>
            @if($item['incluir'] != null)
            <h2>
                incluir :  {{$item['incluir']}}
            </h2>
            @endif
        </div>
        @elseif ($item['type'] === 'h3')
        <hr>
        <div>
            <h3>
                {{$item['type']}} - {{$item['keyword']}}
            </h3>
            @if($item['incluir'] != null)
            <h3>
                incluir :   {{$item['incluir']}}
            </h3>
            @endif
            <hr>
        </div>

        @endforelse       

    </div>
     @endforeach
     <hr>
       
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
