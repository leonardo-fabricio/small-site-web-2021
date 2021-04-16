<?php
    include_once ("../../model/conexao.php");


    if($_GET['acao'] == 'turno'){	

        $id_imovel = $_GET['id_imovel']; 
        //echo $id_imovel;
    }
    echo (json_encode($id_imovel));
?>