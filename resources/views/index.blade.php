<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Honey Hunters </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/index_media.css">
</head>
<body>

    {{-- Верхняя часть страницы--}}
    <header>
        <div class="container">
            <div class="main">
                <div class="logo">
                    <img src="/images/logo.png" alt="Honey Hunters">
                </div>
            </div>
        </div>
    </header>

    {{-- Секция с формой создания комментариев --}}
    <section class='form-section'>
        <div class="container">

            <div class="icon-block">
                <img src="/images/contact_icon.png" alt="Contact icon">
            </div>

            <div class="form-block">
                <div class="row">
                    <div class="form-items">
                        <div class="row">
                            <div class="col col-md-4">
                                <div class="form-group">
                                    <label for="name"> Имя <span>*</span> </label>
                                    <input type="text" name='name' maxlength='15'>
                                </div>
                                <div class="form-group">
                                    <label for="email"> E-Mail <span>*</span> </label>
                                    <input type="text" name='email'>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col col-md-6">
                                <div class="form-group">
                                    <label for="comment"> Комментарий <span>*</span> </label>
                                    <textarea name="text" class='comment-textarea' rows='8' maxlength="50"></textarea>
                                </div>
                            </div>
                            <div class="col hidden">
                                <input type="hidden" name='url' value="{{route('comments.store')}}"">
                                @csrf
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-button">
                        <button type='submit' id='sendComment'> Записать </button>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    {{-- Секция с комментариями --}}
    <section class='comments-section'>
        <div class="container">
            <div class="row comments-section-header">
                <h2> Выводим комментарии </h2>
            </div>
            <div class="row comments-section-content">
                @foreach ($comments as $comment)
                <div class="comment-col">
                    <div class="comment">
                        <div class="comment-header">
                            <p>{{$comment->name}}</p>
                        </div>
                        <div class="comment-body">
                            <p class="email">
                                {{$comment->email}}
                            </p>
                            <p class='comment-text'>
                                {{$comment->text}}
                            </p> 
                        </div>                     
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Подвал сайта --}}
    <footer>
        <div class="container">
            <div class="main">
                <div class="logo">
                    <img src="/images/logo.png" alt="Honey Hunters">
                </div>
                <div class="contacts">
                    <div></div>
                    <div class="icon vk">
                        <a href="https://vk.com" target='_blank'>
                            <img src="/images/vk_icon.png" alt="Vk">
                        </a>
                    </div>
                    <div class="icon fb">
                        <a href="https://facebook.com" target='_blank'>
                            <img src="/images/fb_icon.png" alt="Facebook">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{--Подключение js-скриптов--}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
</body>
</html>