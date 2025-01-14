<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/inicio.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body>

    <div class="row ">

        <div class="col-4 align-center div1">
            <h1>Bem-Vindo ao TaskManager!</h1>

            <div class="toggle-buttons">
                <button id="login-button" class="active">Login</button>
                <button id="signup-button">Cadastro</button>
            </div>
        </div>


        <div class="col-8 div2">
            <!-- Formulário de Login -->
            <form id="login-form" class="active">
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" placeholder="Digite seu email" />
                </div>
                <div class="form-group">
                    <label for="login-password">Senha</label>
                    <input
                        type="password"
                        id="login-password"
                        placeholder="Digite sua senha" />
                </div>
                <button type="button" class="submit">Entrar</button>
            </form>

            <!-- Formulário de Cadastro -->
            <form id="signup-form">
                <div class="form-group">
                    <label for="signup-name">Nome</label>
                    <input type="text" id="signup-name" placeholder="Digite seu nome" />
                </div>
                <div class="form-group">
                    <label for="signup-email">Email</label>
                    <input
                        type="email"
                        id="signup-email"
                        placeholder="Digite seu email" />
                </div>
                <div class="form-group">
                    <label for="signup-password">Senha</label>
                    <input
                        type="password"
                        id="signup-password"
                        placeholder="Crie uma senha" />
                </div>
                <button type="button" class="submit">Cadastrar</button>
            </form>
        </div>


    </div>
</body>
<script src="../JavaScript/inicio.js"></script>

</html>