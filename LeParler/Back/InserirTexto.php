<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrever resenha</title>
    
    <style>
        body {
           
            font-family: Arial, sans-serif;
           
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('/sitevet/img/fundo.png'); /* Substitua pelo caminho da sua imagem de fundo */
            
        }

        .box {
            background: #E5BC90;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 340px;
        }

        .box form {
            text-align: center;
        }

        .inputBox {
            margin: 4px 0;
            color:#fff;
        }

        .box legend {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 19px;
            color:#fff;
        }
        .inputBox label {
            display: block;
            
        }

        .inputo {
            width: 90%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 9px;
            font-size: 13px;
            
        }

        #submit {
            background: #000;
            border: 0;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            width: 100%;;
        }
    </style>   
</head>
<body>
<div class="box">
    <form action="./Insert.php" method="post">
            <legend><b>escrever resenha</b></legend>
            <br>
            <div style="display: flex; justify-content: space-between;">
                <div class="inputBox" style="width: 48%;">
                    <label>Nome Completo</label><br>
                    <input class="inputo" type="text" class="form-control" name="nomeTutor" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Endereço</label><br>
                    <input class="inputo" type="text" class="form-control" name="enderecoTutor" placeholder="">
                </div>
            </div>
            <br><br>
            <div style="display: flex; justify-content: space-between;">
                <div class="inputBox" style="width: 48%;">
                    <label>CPF</label><br>
                    <input class="inputo" type="text" class="form-control" name="cpfTutor" placeholder="" oninput="formatarCPF(this)">
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Email</label><br>
                    <input class="inputo" type="email" class="form-control" name="email" placeholder="">
                </div>
            </div>
            <br><br>
            <div style="display: flex; justify-content: space-between;">
            <div class="inputBox"  style="width: 48%;">
                <label>Telefone (Opcional)</label><br>
                <input class="inputo" type="tel" class="form-control" name="telefone2" oninput="formatarTelefone(this)" placeholder="">
            </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Telefone</label><br>
                    <input class="inputo" type="tel" class="form-control" name="telefone1" oninput="formatarTelefone(this)" placeholder="">
                </div>
            </div>
            <div class="inputBox">
                    <label>Senha</label><br>
                    <input class="inputo" type="password" class="form-control" name="senha" placeholder="">
                </div>
           
            <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
       
    </form>
</div>

</body>
</html>