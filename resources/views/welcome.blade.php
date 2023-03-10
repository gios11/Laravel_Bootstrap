<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>
    <!-- Styles -->
    @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
        <style>
            body
            {
                margin: 20px;
            }
        </style>
</head>
<body>
<div id="c-esquerda">
    <!-- Card "Entrar com uma conta" -->
    <div class="card text-white bg-dark mb-3" style="max-width: 30rem;">
        <div class="card-header">Entre com sua conta</div>
            <div class="card-body">
                <!-- Username -->
                <h5 class="card-title">Username:</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="maria" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                <!-- Senha -->
                <h5 class="card-title">Senha:</h5>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-light" style="margin: 10px;">Entrar com sua conta</button>
        </div>
    </div>
    
    <!-- Card "Criar Conta" -->
    <div class="card text-white bg-dark mb-3" style="max-width: 30rem;">
        <div class="card-header">Crie uma conta</div>
            <div class="card-body">
                <!-- Username -->
                <h5 class="card-title">Username:</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="maria" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <!-- Email -->
                <h5 class="card-title">Email:</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="maria123" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                    </div>
                 </div>
                <!-- Senha -->
                <h5 class="card-title">Senha:</h5>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-light" style="margin: 10px;">Criar conta</button>
        </div>
    </div>
</div>
</body>
</html>