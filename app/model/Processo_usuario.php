<?php

include_once ("conexao.php");
//recebendo dados do formulario
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING); 

$arquivo = $_FILES['arquivo']['name'];
$_UP['pasta'] = '../public/images/img_usuario/ ';
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

            $result_usuario = "insert into usuario values (default,'$nome','$celular','$email','$senha','$cidade','$cep','$nome_final')";
            $retorno = mysqli_query($conn, $result_usuario);

            //verificando se a conexao foi feita
            if(mysqli_insert_id($conn)){
                $_SESSION['msg'] = "true";
                header('Location: index-login');

                exit();
            }
            else{
                $_SESSION['msg'] = "false";
                header('Location: index-cadastro');

                exit();
            }	
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
?>

