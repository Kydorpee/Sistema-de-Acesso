<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <header>
        <main>
            <style>
                .container {
                    text-align: center;
                    display: flex; 
                    justify-content: center; 
                    align-items: center; 
                    width: 100vw;
                }
                .caixa {
                    width: 300px; 
                    height: 225px; 
                    background-color: gray; 
                    border: 1px solid black; 
                }
            </style>

            <div class="container">
                <div class ="caixa">
                    <h2 style="color:white">Sistema de acesso</h2><hr>
                    <form action="./views/login.php" method="post">
                        <h1></h1>
                        <input type="submit" value="Logar">
                        <h1></h1>
                    </form>
                    <form action="./views/cadastro.php" method="post">
                        <input type="submit" value="Cadastrar">                    
                    </form>

                </div>
            </div>
        </main>
    </header>
</body>
</html>