<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')  </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }
        .bg-image {
            background: url('/images/Background.jpg');
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .heading{
            font-size: 64px;
        }


        
    </style>
</head>
<body>
    <div class = "w-100 h-100 bg-image px-5">
        <nav class="navbar pt-4 pb-2">
            <div class="container-fluid">
                <a class="navbar-brand " href="#">
                    <img src="/images/LOGO SC.png" alt="Logo" width="40" height="50">
                    <img src="/images/LOGO UC.png" alt="Logo" width="50" height="50">
                </a>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
    </div>

    
    
</body>
</html>