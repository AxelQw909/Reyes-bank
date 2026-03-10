<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="pl-4 pt-4 text-[30px]">Reyes банк</h1>
    <div class="header flex justify-center gap-4 p-4">
        <a href="{{ url('addCash')}}">
        <button class="text-[25px]">Пополнить</button>
        </a>
        
        <a href="{{ url('history')}}">
            <button class="text-[25px]">История</button>
        </a>
        
    </div>

    <div class="main flex justify-center">
        <div class="box_profile border-2 border-black p-4 w-[250px] m-16 rounded-[15px]">
            <h1 class="text-[35px]">Axel Reyes</h1>
            <h2 class="text-[25px]">98 уровень</h2>
            <h2 class="text-[25px]">Транспорт: </h2>
            <h2 class="text-[25px]">Дом: </h2>
            <h2 class="text-[25px]">Номер счета: </h2>
        </div>

        <div class="cash border-2 border-black p4 w-[250px] m-16 rounded-[15px]">
            <h2 class="text-[25px] p-4">Баланс: </h2>
        </div>
    </div>
    
</body>
</html>