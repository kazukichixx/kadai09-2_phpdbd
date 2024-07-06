<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品セレクト</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <style>
        div {
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">Ordered List</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>Ordere List</legend>
                <label>商品名<input type="text" name="content"></label><br>
                <label>個数：<input type="text" name="age"></label><br>

                <label>注文者名：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>

                <button type="submit" class="btn btn-primary">Order</button>
            </fieldset>
  
    <main class="p-8">
        <h1 class="text-3xl font-bold text-center mb-8">On Sale Now!</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleA</span>
                    <span>¥10,000</span>
                </div>
            </div>
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleB</span>
                    <span>¥10,000</span>
                </div>
            </div>
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleC</span>
                    <span>¥10,000</span>
                </div>
            </div>
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleD</span>
                    <span>¥10,000</span>
                </div>
            </div>
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleE</span>
                    <span>¥10,000</span>
                </div>
            </div>
            <div class="border border-gray-300 rounded overflow-hidden">
                <div class="bg-gray-200 h-48 flex items-center justify-center">Image</div>
                <div class="p-4 flex justify-between items-center">
                    <span>SampleF</span>
                    <span>¥10,000</span>
                </div>
            </div>
        </div>
    </main>
</body>


        </div>
    </form>
</body>

</html>
