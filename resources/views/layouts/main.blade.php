<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- connect jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- connect fonts -->
    <link rel="stylesheet" type="text/css" href="fonts.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="library.css">


    <!-- for resizable and scrollable div -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <style>
        .scrollable-div {
            height: 100vh;
            overflow-y: auto;
        }

        /* kasih border ke handle */
        .ui-resizable-handle {
            border: 3px solid #494949;
            background: #5f5f5f;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .outlined {
            border: 1px solid #fff; 
            box-sizing: border-box;
        }

        .genre:hover {
            transform: scale(1.04); 
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); 
        }

        .fontMonsseratBold {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }


    </style>

</head>
<body class="text-white bg-dark">
    {{-- rgb(239,237,231) --}}

@include('partials.navup')
@include('partials.navleft')

            
            @yield('container')
            

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script>
                $(document).ready(function () {
                    $(".resizable").resizable({
                        handles: 'e',
                        minWidth: 0, // Minimum width of the resizable div
                        maxWidth: 800, // Maximum width of the resizable div
                    });
                });
            </script>
        
        
        
    </body>
        
</html>