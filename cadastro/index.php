<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Tectreinamentos Informática</h1>
        <h3>Oferta de Material</h3>
    </header>
    
    <section>
        <h2>Preencha os campos abaixo e cadastre-se</h2>
        
        <form action="validar.php" method="post" id="usuarios">
            <label for="usuario">Usuário</label><br>
            <input type="text" id="usuario" name="usuario" placeholder="Crie um Nome de Usuário" required>
            <br><br>
            
            <label for="email">E-Mail</label><br>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
            <br><br>
            
            <label for="senha">Senha</label><br>
            <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required><br><br>

            <input type="submit" class="botao" name="cadastrar" value="Cadastrar">
        </form>
    </section>
    
    <footer>
        <h3>TECTREINAMENTOS INFORMÁTICA LTDA</h3>
        <h3>CONTATO: wagner.inst@gmail.com</h3>
        <h3>CNPJ: 40.963.840/0001-74</h3>        
    </footer>

</body>
</html>
