<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/img-icon.jpg" type="image/x-icon">
    <title>Trabalho</title>
</head>

<body>

    <div class="cabecario">
        <h1>Seja Bem-Vindo ao QUIZ!</h1>
    </div>

    <section class="quiz">
        <div class="digitar-nome">
            <form action="exibir-respostas.php" method="get">
                <label for="nome1">Digite seu nome:</label>
                <input type="text" name="nome1" id="nome-usuario"> <br> <br>
        </div>

        <div class="pergunta-1">
            <label for="perg-1">Qual a sua idade?</label>
            <input type="number" name="perg-1" id="perg-1"> <br> <br>

            <div class="pergunta-2">
                <label for="perg-2">Qual sua data de nascimento?</label>
                <input type="date" name="perg-2" id="perg-2"> <br> <br>

                <div class="pergunta-3">
                    <label for="perg-3">Oque você mais gosta de fazer?</label>
                    <input type="text" name="perg-3" id="perg-3"> <br> <br>
                </div>

                <p class="pergunta-4">
                    Qual a cor do Sol? <select name="perg-4">
                        <option value="azul">Azul</option>
                        <option value="amarelo">Amarelo</option>
                        <option value="preto">Preto</option>
                        <option value="vermelho">Vermelho</option>
                    </select>
                <p class="pergunta-5">
                    Qual a cor do Céu? <select name="perg-5">
                        <option value="azul">Azul</option>
                        <option value="amarelo">Amarelo</option>
                        <option value="preto">Preto</option>
                        <option value="vermelho">Vermelho</option>
                    </select>


                <p class="pergunta-6">
                    Qual a cor da Lua? <select name="perg-6">
                        <option value="azul">Azul</option>
                        <option value="amarelo">Amarelo</option>
                        <option value="preto">Preto</option>
                        <option value="branco">Branco</option>
                    </select>

    </section>

    <button class="botao" type="submit">Enviar</button>
    
    </form>
    <footer>
        <div class="rodape">
            <p>Eduardo Mendes &copy 2023</p>
        </div>
    </footer>
</body>

</html>