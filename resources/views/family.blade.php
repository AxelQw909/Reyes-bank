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

    <div class="flex justify-center">
        <table>
            <thead>
                <tr>
                    <th class="text-[20px] border-2 border-black">Ник</th>
                    <th class="text-[20px] border-2 border-black">Вк</th>
                    <th class="text-[20px] border-2 border-black">Тг</th>
                    <th class="text-[20px] border-2 border-black">Семья</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($members as $member)
                    <tr class="border-2 border-black">
                        <td class="p-4 m-4 text-[20px] border-2 border-black">{{ $member->nickname}}</td>
                        <td class="p-4 m-4 text-[20px] border-2 border-black">{{ $member->vk}}</td>
                        <td class="p-4 m-4 text-[20px] border-2 border-black">{{ $member->tg}}</td>
                        <td class="p-4 m-4 text-[20px] border-2 border-black">{{ $member->family}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        
    </div>
    <div class="flex justify-center">
    <a href="{{url('addfamily')}}"><button class="p-4 m-4 text-[20px] bg-green-300 border-2 border-green-300 rounded-[10px]">Добавить</button>
        
        </a>
    <div class="footer">

    </div>
    

    </div>

</body>
</html>