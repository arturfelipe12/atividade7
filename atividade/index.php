<html>
<head>
    <title>Cadastro Xteam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <form>
        <h2>Cadastre-se</h2>
        <fieldset>
            <legend></legend>
            <table>
                <tr>
                    
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                </tr>
                <tr>
                    
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                </tr>

                <tr>
                    
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </tr>
                
                <tr>

                    <td><label for="idade">Idade:</label></td>
                    <td> <input type="number" id="idade" name="idade" min="13" max="100" required></td>
                </tr>
                <tr>

                    <td> <label for="genero">Gênero:</label></td>
                    <td> <select id="genero" name="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select></td>
                </tr>
            </table>
        
        
            
            <table>

                <label>Escolha seu tipo de jogo:</label>
                <tr>
                    <td><input type="radio" id="fps" name="jogo" value="fps"></td>
                    <td> <label for="fps">FPS</label></td>
                </tr>
                <tr>
                    <td> <input type="radio" id="rpg" name="jogo" value="rpg"></td>
                    <td> <label for="oft">RPG</label></td>
                </tr>
                <tr>
                    <td><input type="radio" id="corrida" name="jogo" value="corrida"></td>
                    <td><label for="corrida">CORRIDA</label></td>
                </tr>
                <tr>

                    <td> <input type="checkbox" id="lembrete" name="lembrete" value="sim"></td>
                    <td><label for="lembrete">Desejo receber ofertas via e-mail</label></td>
                </tr>
            </table>
        
        
            
            <table>
                <tr>
                    <td><label for="color">Escolha a cor tema do seu background:</label></td>
                    <td><input type="color" id="color" name="color" required></td>
                </tr>
                <tr>
                    <td><label for="date">Data de nascimento:</label></td>
                    <td><input type="date" id="date" name="date" required></td>
                </tr>
            </table>
        </fieldset>
        <table>



        <td><input type="submit" value="Cadastrar"></td>
        </table>
    </form>

    <script>
        var email = document.getElementById('email');
        var password = document.getElementById('senha');
        var nome = document.getElementById('nome');

            email.addEventListener('focus',()=>{
            email.style.borderColor = "#071d40";});

            email.addEventListener('blur',()=>{
            email.style.borderColor = "#ccc";});

            senha.addEventListener('focus',()=>{
            senha.style.borderColor = "#071d40";});

            senha.addEventListener('blur',()=>{
            senha.style.borderColor = "#ccc";});

            nome.addEventListener('focus',()=>{
            nome.style.borderColor = "#071d40";});

            nome.addEventListener('blur',()=>{
            nome.style.borderColor = "#ccc";});
            

        
    </script>
</body>

</html>