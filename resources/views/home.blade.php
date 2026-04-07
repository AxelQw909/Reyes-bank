<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <div>
        <div class="header">
            <div class="header2">

                <a href="{{ url('addCash')}}">
                    <button>Пополнить</button>
                </a>
                


                <a href="{{ url('history')}}">
                    <button>История</button>
                </a>
                

                <a href="{{ url('profile')}}">
                   <button>Личный кабинет</button> 
                </a>
                
            </div>
        </div>

        <div class="main">
            <h1>Блок меню</h1>
        </div>

        <div class="footer">
            <h2>Банк семьи Reyes</h2>
        </div>
    </div>
</body>
</html>