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
            <legend><b>Escrever resenha</b></legend>
            <br>
            <div style="display: flex; justify-content: space-between;">
            <div class="inputBox" style="width: 48%;">
                    <label>Data</label><br>
                    <input class="inputo" type="date" class="form-control" name="data" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Título</label><br>
                    <input class="inputo" type="text" class="form-control" name="titulo" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Texto</label><br>
                    <input class="inputo" type="text" class="form-control" name="texto" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Crítica</label><br>
                    <input class="inputo" type="number" class="form-control" name="critica" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Imagem</label><br>
                    <input class="inputo" type="text" class="form-control" name="imagem" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Categoria</label><br>
                    <input class="inputo" type="text" class="form-control" name="categoria" placeholder="" required>
                </div>
                <div class="inputBox" style="width: 48%;">
                    <label>Escritor</label><br>
                    <input class="inputo" type="text" class="form-control" name="pessoa" placeholder="" required>
                </div>
           
            <br><br>
            <input type="submit" name="submit" id="submit" value="Cadastrar">
       
    </form>
</div>

</body>
</html>