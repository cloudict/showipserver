<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Server</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .blink {
            font-size: 48px; /* Ukuran teks besar */
            color: #ff0000; /* Warna teks */
            animation: blink-animation 1s steps(5, start) infinite; /* Efek berkedip */
        }
        @keyframes blink-animation {
            to {
                visibility: hidden; /* Teks akan menghilang */
            }
        }
    </style>
</head>
<body>
    <div class="blink">
        IP Server Anda: <?php echo $_SERVER['SERVER_ADDR']; ?>
    </div>
</body>
</html>
