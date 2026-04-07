<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новый член семьи</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div class="flex justify-center">
        <form action="/AddFam" method="POST"> 
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" class="p-4 m-4 text-[20px] border-2 border-black">
                <input type="text" placeholder="Ник" name="nickname" class="p-4 m-4 text-[20px] border-2 border-black">
                <input type="text" placeholder="Вк" name="vk" class="p-4 m-4 text-[20px] border-2 border-black">
                <input type="text" placeholder="Тг" name="tg" class="p-4 m-4 text-[20px] border-2 border-black">
                <input type="text" placeholder="Семья" name="family" class="p-4 m-4 text-[20px] border-2 border-black">
            </div>
                <div class="flex justify-center">
                <button class="p-4 m-4 text-[20px] bg-green-300 border-2 border-green-300 rounded-[10px]">Добавить</button>
                </div>
                
        </form>
    </div>
    


</body>
</html>