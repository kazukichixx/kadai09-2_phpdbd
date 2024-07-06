<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <div class="flex justify-center mb-6">
            <img src="ロゴ.png" alt="Logo Image" class="w-60 h-60">
        </div>
        <form>
            <div class="mb-4">
                <input type="text" placeholder="your name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <input type="email" placeholder="Email address" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Enter</button>
            </div>
            <div class="text-center">
                <button type="button" class="w-full bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500">Google accountでログイン</button>
            </div>
        </form>
    </div>
</body>
<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        window.location.href = 'index.php';
    });
</script>



</html>

