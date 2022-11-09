<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- icon -->

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="css/index.css" />
    <script src="js/index.js" defer></script>
    <!-- custon style Sheet & JavaScript -->
    <title>Ecommerce Website</title>
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body class="home">
    @include('layouts.header')

    <!-- ===========Hero Section===================== -->

    @yield('content')

    @include('layouts.footer')
  </body>
</html>
