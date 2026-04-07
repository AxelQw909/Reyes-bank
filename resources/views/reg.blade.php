<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрацйия</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
   
    <div class="header">
        <h1>Reyes банк</h1>
    </div>

    <div class="main">
        
        <div class="flex justify-center p-4 m-4">
            <div class="w-[350px]  border-black border-2">
                <h2 class="flex justify-center m-2 text-[20px]">Регистрация</h2>

                <form class="flex flex-col items-center" action="/register" method="POST">   
                    @csrf
                    <h2>Основное</h2>
                    <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Ник" name="nickname" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Уровень" name="lvl" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Телефон" name="phone" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Номер счёта" name="schet" class="border-2 border-black p-2 m-2 text-[20px]">
                    </div>
                    <h2>Транспорт</h2>
                    <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Транспорт 1" name="ts1" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Транспорт 2" name="ts2" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Транспорт 3" name="ts3" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Транспорт 4" name="ts4" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Транспорт 5" name="ts5" class="border-2 border-black p-2 m-2 text-[20px]">
                    </div>
                    <h2>Дом</h2>
                    <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Дом 1" name="home1" class="border-2 border-black p-2 m-2 text-[20px]">
                    <input type="text" placeholder="Дом 2" name="home2" class="border-2 border-black p-2 m-2 text-[20px]">
                    </div>
                    
                    
                    <button class="bg-green-300 border-2 border-green-300 rounded-[10px] text-[20px] m-9">Зарегистрироваться</button>
                </form>

                
            </div>
            
            

        </div>

    </div>

    <div class="footer">

    </div>


</body>
</html>