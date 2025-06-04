<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saucy Chic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: white;
            max-width: 800px;
            margin: 0 auto;
        }
        .page {
            margin-bottom: 30px;
        }
        .page img {
            width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .social-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }
        .social-button {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 32px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            transition: transform 0.2s;
        }
        .social-button:hover {
            transform: scale(1.1);
        }
        .whatsapp {
            background-color: #25D366;
        }
        .instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }
    </style>
</head>
<body>
    <div class="page">
        @foreach(File::files(public_path('images')) as $image)
            <img src="{{ asset('images/' . basename($image)) }}" alt="{{ basename($image) }}">
        @endforeach
    </div>

    <div class="social-buttons">
        <a href="https://wa.me/6282173093009" class="social-button whatsapp" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://instagram.com/saucychicindonesia" class="social-button instagram" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</body>
</html>
