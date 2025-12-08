<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter | JSSATEB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
        }
        .student-info {
            position: absolute;
            top: 20px;
            left: 20px;
            text-align: left;
            font-size: 0.95em;
            color: white;
            background: rgba(0, 0, 0, 0.3);
            padding: 12px 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        .container {
            background: #fff;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            margin: 0 auto;
            width: 90%;
            max-width: 500px;
        }
        h1 {
            font-size: 2.5em;
            margin: 0 0 20px 0;
            color: #667eea;
        }
        p {
            font-size: 1.1em;
            color: #555;
            margin: 20px 0;
        }
        .counter {
            font-size: 3em;
            font-weight: bold;
            color: #764ba2;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="student-info">
        <strong>Name:</strong> Rishikesh Gowda K K<br>
        <strong>USN:</strong> 1JS23CS136
    </div>
    <div class="container">
        <h1>Welcome to Our Website!</h1>
        <p>You are visitor number:</p>
        <div class="counter" id="counter">1</div>
    </div>
    <script>
        // Visitor Counter using localStorage
        function updateCounter() {
            let count = localStorage.getItem('visitorCount');
            if (count === null) {
                count = 1;
            } else {
                count = parseInt(count) + 1;
            }
            localStorage.setItem('visitorCount', count);
            document.getElementById('counter').textContent = count;
        }
        window.addEventListener('load', updateCounter);
    </script>
</body>
</html>
