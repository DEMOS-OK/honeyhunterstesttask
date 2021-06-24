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
</head>
<body>

    <header>
        <div class="container">
            <div class="main">
                <div class="logo">
                    <img src="/images/logo.png" alt="Honey Hunters">
                </div>
            </div>
        </div>
    </header>

    <section class='form-section'>
        <div class="container">
            <div class="icon-block">
                <img src="/images/contact_icon.png" alt="Contact icon">
            </div>
            <div class="form-block">
                <form action="" method='POST'>
                    <div class="row">
                        <div class="form-items">
                            <div class="row">
                                <div class="col col-md-4">
                                    <div class="form-group">
                                        <label for="name"> Имя <span>*</span> </label>
                                        <input type="text" name='name'>
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
                                        <textarea name="comment" class='comment-textarea' rows='8' maxlength="480"></textarea>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-button">
                            <button type='submit'> Записать </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section>
    </section>

    <footer>

    </footer>

</body>
</html>