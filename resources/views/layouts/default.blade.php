<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/style/style.css">
    <title>@yield('title') - Larajobs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                },
                fontFamily: {
                    sans: ['Scandia', 'Helvetica', 'Arial', 'sans-serif'],
                }
            }
        }
    </script>
</head>
<body>
    @include("partials.header")

    @yield('content')

    @include("partials.footer")
</body>
</html>
