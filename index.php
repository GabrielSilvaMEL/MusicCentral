<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: hsl(285, 85%, 46%);;
        }
        p{
            color:hsl(285, 85%, 46%);
        }
        i {
            font-size: 2rem;
        }
        
        
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-5 col-md-8 col-sm-10 formulario rounded">
            <div class="text-center">
                <i class="bi bi-people"></i>
                <h3>Bem-vindo</h3>
                <p>Faça login para continuar</p>
                <form action="login.php" method="POST">
                    <div class="campos-formulario-login">
                        <div class="d-flex gap-3">
                            <i class="bi bi-person"></i>
                            <input type="text" class="form-control input-style" id="username" name="username" required>
                        </div>
                        <div class="d-flex gap-3 ">
                            <i class="bi bi-key"></i>
                            <input type="password" class="form-control input-style" id="password" name="password" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

</body>

</html>