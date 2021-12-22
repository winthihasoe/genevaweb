<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{
            $title
        }}

        <!-- Font Awesome -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
        />
        <!-- MDB -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
            rel="stylesheet"
        />

        <!-- Custom CSS  -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    </head>
    <body>
        <!-- Sidebar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 my-5 p-3">
                    <x-sidenav></x-sidenav>
                </div>
                <div class="col-md-9">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Footer  -->
        <x-footer></x-footer>
        <!-- MDB -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
        ></script>
    </body>
</html>
