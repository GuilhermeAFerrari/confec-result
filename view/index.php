<?php

    include_once('../controller/conexao.php');

echo '

<html>
    <head>
        <title>SysResultado - Login</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
    <script>
        function RefreshWindow(){
         window.location.reload (true);
        }
    </script>
        <nav class="navbar navbar-dark bg-dark"> 
            <a class="navbar-brand">SysResultado</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Produção <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </nav>
        <div style="margin-top:20px; margin-left:10px; margin-right:10px">
            <input class="btn btn-warning" type = "button" value = "Atualizar" onclick = "RefreshWindow();" />
        </div>';
        
        $pdo = Banco::conectar();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT MAX(id) AS id FROM leitura";
        $q = $pdo->prepare($sql);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Banco::desconectar();

        echo '
        <div style="margin-top:20px; margin-left:10px; margin-right:10px">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Máquina 1</h5>
                            <p class="card-text">Maquina Singer - Travete - ...</p>
                            <p class="card-text"><b>Operador(a) Pablo Mello</b></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Número de Peças:</b></li>';
                                echo $data['id'];
                                echo '
                            </ul>
                            <br />
                            <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Máquina 2</h5>
                            <p class="card-text">Maquina Singer - Travete - ...</p>
                            <p class="card-text"><b>Operador(a) Guilherme Ferrari</b></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Número de Peças:</b></li>
                            </ul>
                            <br />
                            <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Máquina 3</h5>
                            <p class="card-text">Maquina Singer - Travete - ...</p>
                            <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Número de Peças:</b></li>
                            </ul>
                            <br />
                            <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Máquina 3</h5>
                        <p class="card-text">Maquina Singer - Travete - ...</p>
                        <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Número de Peças:</b></li>
                        </ul>
                        <br />
                        <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Máquina 3</h5>
                    <p class="card-text">Maquina Singer - Travete - ...</p>
                    <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Número de Peças:</b></li>
                    </ul>
                    <br />
                    <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Máquina 3</h5>
                <p class="card-text">Maquina Singer - Travete - ...</p>
                <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Número de Peças:</b></li>
                </ul>
                <br />
                <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Máquina 3</h5>
            <p class="card-text">Maquina Singer - Travete - ...</p>
            <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Número de Peças:</b></li>
            </ul>
            <br />
            <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
        </div>
    </div>
</div>
<div class="col-sm-4">
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Máquina 3</h5>
        <p class="card-text">Maquina Singer - Travete - ...</p>
        <p class="card-text"><b>Operador(a) Fulano de Tal</b></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Número de Peças:</b></li>
        </ul>
        <br />
        <a href="#" class="btn btn-primary">Ver dados estatísticos</a>
    </div>
</div>
</div>
            </div>
        </div>
    </body>
</html>

';
?>