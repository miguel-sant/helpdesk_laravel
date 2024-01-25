
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>

    <div class="wrapper">
        <h1>Login</h1>
        <div class="input-box">
        <input type="text" placeholder="Username" required>
        </div>

        <div class="input-box">
        <input type="password" placeholder="Password">
        </div>

        <div class="remember-forgot">
        <label class="sexo"> <input type="checkbox"> Lembrar senha</label>
        
        <a href="/">Esqueceu a senha?</a>
        </div>
        <button type="submit" class="btn">Login</button>

        <div class="register-link">
        <p>Você não tem uma conta?<a href=""> <strong>Registrar</strong></a></p></div>

    </div>
</body>

</html>