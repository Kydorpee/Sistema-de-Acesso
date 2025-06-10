<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<body>

    <h1 class="centralizar"> Bem vindo a página teste de login! </h1><br>

    <?php
        $usuario =
        [
            "login" => $_POST["login"],

            "senha" => $_POST["senha"]
        ];

        $validador = 
        [
            "vaLogin" => "Pedro.Costa",
            "vaSenha" => "123456"
        ];

        if ($usuario["login"]==$validador["vaLogin"]) {
            if ($usuario["senha"]==$validador["vaSenha"]) {
                $logado = True;
            };
        }
        else {
            $logado = False;
        };
    ?>

    <section>

       <style>
                
                .centralizar{
                    text-align: center;
                }
                .container {
                    text-align: center;
                    display: flex; 
                    justify-content: center; 
                    align-items: center; 
                    width: 100vw;
                }
                .caixa {
                    width: 300px; 
                    height: 125px; 
                    background-color: whitesmoke; 
                    border: 1px solid black; 
                }

        </style>

        <div class = "container">
            <div class="caixa">
                <h2> Status de acesso </h2><hr>
                <p style="color: <?= $status = $logado == true ? "green":"red"; ?>">
                     <?php 
            
                        if ($logado == true) {
                            echo "Você esta logado!";
                        }else {
                            echo "Você digitou o login ou senha errados! ";
                        };

                    ?>
                 </p>

            </div>
        </div>
            
        
    </section>


</body>
</html>