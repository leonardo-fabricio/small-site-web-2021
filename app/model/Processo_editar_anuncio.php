<?php 
    session_start();
    include_once("conexao.php");
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $tipoImovel = filter_input(INPUT_POST, 'tipo-imovel', FILTER_SANITIZE_STRING);
    $tipoAnuncio = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $descrissao = filter_input(INPUT_POST, 'w3review', FILTER_SANITIZE_STRING);
    $situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);

    $arquivo = $_FILES['arquivo']['name'];
    $_UP['pasta'] = '../public/images/img_anuncios/ ';
    //Renomeiar
        $_UP['renomeia'] = false;
        
        //Array com os tipos de erros de upload do PHP
        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

        $_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
        
        //Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
        if($_FILES['arquivo']['error'] != 0){
            die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
            exit; //Para a execução do script
        }
        
        //Faz a verificação da extensao do arquivo
        $tmp = explode('.', $arquivo);
        $extensao = end($tmp);
        if(array_search($extensao, $_UP['extensoes'])=== false){		
            echo "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/public/Pages/showme/anunciar-imoveis'>
                <script type=\"text/javascript\">
                    alert(\"A imagem não foi cadastrada extesão inválida.\");
                </script>
            ";
        }
        
        //O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
        else{
            
            $nome_final = $_FILES['arquivo']['name'];
            
            //Verificar se é possivel mover o arquivo para a pasta escolhida
            if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
                //Upload efetuado com sucesso, exibe a mensagem

                $query = "update anuncios set cidade_anuncio = '$cidade', tipoImovel = '$tipoImovel', tipoAnuncio = '$tipoAnuncio', preco = '$preco', descricao = '$descrissao', caminho = '$nome_final', situacao = '$situacao' where id = '".$_SESSION['idanuncio']."'";
                $resultado= mysqli_query($conn,$query);

                $_SESSION['msg9'] = 'true';
                header('Location: index-dashboard');
                exit();
                	
            }else{
                //Upload não efetuado com sucesso, exibe a mensagem
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
                    <script type=\"text/javascript\">
                        alert(\"Imagem não foi cadastrada com Sucesso.\");
                    </script>
                ";
            }
        }





    

// tendi 
?>