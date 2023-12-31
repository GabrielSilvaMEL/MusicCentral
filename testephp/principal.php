<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        main {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            margin: 2rem;
        }
        i{
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <header class="d-flex justify-content-center p-4">
        <h1>Bem-vindo!</h1>
    </header>
    <div class="wrapper">
        <div class="my-container success">
            <i class="bi bi-person-up"></i>
            <h2>Novos usuários</h2>
            <p>220</p>
        </div>
        <div class="my-container success">
            <i class="bi bi-person-fill"></i>
            <h2>Usuários online</h2>
            <p>1029</p>
        </div>
        <div class="my-container success">
            <i class="bi bi-sticky"></i>
            <h2>Novas postagens</h2>
            <p>228</p>
        </div>
        <div class="my-container success">
            <i class="bi bi-eye"></i>
            <h2>Impressões</h2>
            <p>22827</p>
        </div>
        
    </div>
    <div class="wrapper-manager">
        <div class="my-container-manager">
            <h1 class="info rounded">Postagens aguardando aprovação</h1>
            <p>Nenhuma postagem.</p>
        </div>
    </div>
    <div class="wrapper-manager">
        <div class="my-container-manager">
            <h1 class="info rounded">Autores aguardando aprovação</h1>
            <!-- Esses seriam links que levariam a mais informações dos usuários definidos pelo elemento a -->
            <p>Henrique Guilherme</p>
            <p>Caio Morales</p>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="my-container success">
                <i class="bi bi-person-up"></i>
                <h2>Novos usuários</h2>
                <p>220</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="my-container success">
                <i class="bi bi-person-fill"></i>
                <h2>Usuários online</h2>
                <p>1029</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="my-container success">
                <i class="bi bi-sticky"></i>
                <h2>Novas postagens</h2>
                <p>228</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="my-container success">
                <i class="bi bi-eye"></i>
                <h2>Impressões</h2>
                <p>22827</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="my-container-manager">
                <h1 class="info rounded">Postagens aguardando aprovação</h1>
                <p>Nenhuma postagem.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="my-container-manager">
                <h1 class="info rounded">Autores aguardando aprovação</h1>
                <!-- Esses seriam links que levariam a mais informações dos usuários definidos pelo elemento a -->
                <p>Henrique Guilherme</p>
                <p>Caio Morales</p>
            </div>
        </div>
    </div>
</div>

</body>

</html>