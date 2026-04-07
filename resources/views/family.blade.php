<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Состав семьи</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="header">
        <h1 class="pl-4 pt-4 text-[30px]">Reyes банк</h1>
        <div class="header flex justify-center gap-4 p-4">
            <a href="{{ url('addCash')}}">
            <button class="text-[25px]">Пополнить</button>
            </a>
        
            <a href="{{ url('history')}}">
                <button class="text-[25px]">История</button>
            </a>
        
        </div>
    </div>

    <div class="main">

    </div>

    <div class="footer">

    </div>

</body>
</html>