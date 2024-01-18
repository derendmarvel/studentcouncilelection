<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')  </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .bg-image {
            background: url('/images/Background.jpg');
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; 
        }
        .heading{
            font-size: 48px;
        }
        .heading-2{
            font-size: 64px;
        }
        .text-shadow{
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .image-container {
            position: relative;
            overflow: hidden;
        }

        .exceed-image {
            position: relative;
            margin-top: -150px;
            width: 325px;
        }

        .exceed-image-2 {
            position: relative;
            margin-top: -150px;
            width: 400px;
        }

        .exceed-image-3 {
            position: relative;
            margin-top: -690px;
            width: 500px;
        }

        .ontop-image {
            position: relative;
            margin-top: -120px;
        }

        .gradient {
            background: linear-gradient(to bottom, #FFFFFF, #F98700);
        }

        .orange-div {
            background-color: #FF7A00;
            color: white;
        }

        .orange-text {
            color: #FF7A00;
        }

        .green-div {
            background-color: #00CA45;
            color: white;
        }

        .center-div{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .start-div {
            display: flex;
            flex-direction: row; 
            align-items: top;
            justify-content: flex-start;
            text-align: start;
        }

        .custom-card {
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }

        .padding-main{
            padding-left: 80px;
            padding-right: 80px;
        }

        .no-gap{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
    </style>
</head>
<body>
    <div class = "w-100 h-100 bg-image px-5">
        <nav class="navbar p-2" data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/images/LOGO SC.png" alt="Logo" width="26" height="34">
                    <img src="/images/LOGO UC.png" alt="Logo" width="34" height="34">
                </a>
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
    </div>
    <script>
        AOS.init();
    </script>    
</body>
</html>