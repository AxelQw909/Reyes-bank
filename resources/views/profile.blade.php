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
        <div class="box_profile border-2 border-black p-4 m-16 rounded-[15px]">
            
            <h1 class="text-[20px]">{{ $user->nickname }}</h1>
            <h2 class="text-[20px] m-2">Основное</h2>
            <div class="grid grid-cols-2 gap-4 border-2 border-black p-2">
            <h2 class="text-[20px]">Уровень: {{ $user->lvl }}</h2>
            <h2 class="text-[20px]">Телефон: {{ $user->phone }} </h2>
            <h2 class="text-[20px]">Банковский счет: {{ $user->schet }} </h2>
            </div>


            <h2 class="text-[20px] m-2">Транспорт</h2>
            <div class="grid grid-cols-2 gap-4 border-2 border-black p-2">
            <h2 class="text-[20px]">Транспорт 1: {{ $user->ts1 }} </h2>
            <h2 class="text-[20px]">Транспорт 2: {{ $user->ts2 }} </h2>
            <h2 class="text-[20px]">Транспорт 3: {{ $user->ts3 }} </h2>
            <h2 class="text-[20px]">Транспорт 4: {{ $user->ts4 }} </h2>
            <h2 class="text-[20px]">Транспорт 5: {{ $user->ts5 }} </h2>
            </div>
            
            <h2 class="text-[20px] m-2">Дом</h2>
            <div class="grid grid-cols-2 gap-4 border-2 border-black p-2">
            <h2 class="text-[20px]">Дом 1: {{ $user->home1 }} </h2>
            <h2 class="text-[20px]">Дом 2: {{ $user->home2 }} </h2>
            </div>
            
            

        </div>

        <div class="cash border-2 border-black p4 w-[250px] m-16 rounded-[15px]">
            <h2 class="text-[25px] p-4">Баланс: </h2>
        </div>
    </div>
    
</body>
</html>