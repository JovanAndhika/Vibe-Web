<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- connect fonts -->
    <link rel="stylesheet" type="text/css" href="fonts.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="library.css">

    <!-- datatables -->
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">



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

        .resizable span {
            display: none;
        }
    </style>

</head>

<body class="text-white bg-dark">
    {{-- rgb(239,237,231) --}}
    <section class="p-5">
        <div class="px-5 container-fluid table-responsive-lg">
            <table class="table table-striped table-hover dataTable no-footer table-dark" id="jazz_list">
                <thead>
                    <tr>
                        <th class="fontMonsseratSemiBold" scope="col">Song</th>
                        <th class="fontMonsseratSemiBold" scope="col">Artist</th>
                        <th class="fontMonsseratSemiBold" scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-left">

                    @yield('containerResult')
                    
                </tbody>
            </table>

            <script>
                $(document).ready(function() {
                    $('#jazz_list').DataTable();
                });

                $('#jazz_list').dataTable({
                    "ordering": true,
                });
            </script>
        </div>
    </section>
</body>