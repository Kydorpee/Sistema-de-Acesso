<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema Acesso</title>
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
                    height: 250px; 
                    background-color: gray; 
                    border: 1px solid black; 
                }

            </style>

            <div class="container">
                <div class ="caixa">
                    <h1 style = "color:white">Cadastro</h1><hr>
                    <section>
                        <form action="acesso.php" method="get">
                            <br>
                            <label for="login"style = "color:white">Login</label><br>
                            <input type="text" name="login" value=""><br>
                            <br>
                            <label for="senha" style="color:white">Senha</label><br>
                            <input type="text" name="senha" value=""><br><br>

                            <input type="submit" value="Criar">

                        </form>
                    </section>
                </div>
            </div>
        </main>
    </header>
</body>
</html>