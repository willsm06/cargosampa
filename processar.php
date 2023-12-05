<?php
    require_once "includes/conexao.php";
    // Informações de Despache
    // $empresa_desp = $_POST["empresa_desp"];
    // $cnpj_desp = $_POST["cnpj_desp"];
    // $tel_desp = $_POST["tel_desp"];
    // $email_desp = $_POST["email_desp"];

    // // Informações Retirada
    // $empresa_ret = $_POST["empresa_ret"];
    // $cnpj_ret = $_POST["cnpj_ret"];
    // $tel_ret = $_POST["tel_ret"];
    // $email_ret = $_POST["email_ret"];

    // // Informações Rota
    // $partida = $_POST["partida"];
    // $chegada = $_POST["chegada"];

    // // Informações Carga
    // $nome_carga = $_POST["nome_carga"];
    // $quantidade_carga = $_POST["quantidade_carga"];
    // $descricao_carga = $_POST["descricao_carga"];
    // $risco_carga = $_POST["risco_carga"];
    // $peso_carga = $_POST["peso_carga"];
    // $alimenticio_carga = $_POST["alimenticio_carga"];

    // $query = "INSERT INTO nome_da_tabela (coluna1, coluna2, coluna3, coluna4, coluna5, coluna6, coluna7, coluna8, coluna9, coluna10, coluna11, coluna12, coluna13, coluna14)
    // VALUES ('$empresa_desp', '$cnpj_desp', '$tel_desp', '$email_desp', '$empresa_ret', '$cnpj_ret', '$tel_ret', '$email_ret', '$partida', '$chegada', '$nome_carga', '$quantidade_carga', '$descricao_carga', '$risco_carga', '$peso_carga', '$alimenticio_carga')";

	// $sql = mysqli_query($conn,$query);
	// $n = mysqli_affected_rows($conn);

    // if($n == 1){
    //     $_SESSION['logado']=true;
    //     $_SESSION['erro']=0;
    //     header("location:dados.php");
    // }
    // else{
    //     $_SESSION['logado']=false;
    //     $_SESSION['erro']=1;
    //     header("location:index.php");
    // } 


    $empresa_desp = $_POST["empresa_desp"];
    $cnpj_desp = $_POST["cnpj_desp"];
    $tel_desp = $_POST["tel_desp"];
    $email_desp = $_POST["email_desp"];

    $query_despacho = "INSERT INTO Despacho (empresa, cnpj, tel, email)
                    VALUES ('$empresa_desp', '$cnpj_desp', '$tel_desp', '$email_desp')";

    mysqli_query($conn, $query_despacho);

    $id_despacho = mysqli_insert_id($conn);

    $empresa_ret = $_POST["empresa_ret"];
    $cnpj_ret = $_POST["cnpj_ret"];
    $tel_ret = $_POST["tel_ret"];
    $email_ret = $_POST["email_ret"];

    $query_retirada = "INSERT INTO Retirada (empresa, cnpj, tel, email)
                    VALUES ('$empresa_ret', '$cnpj_ret', '$tel_ret', '$email_ret')";

    mysqli_query($conn, $query_retirada);

    $id_retirada = mysqli_insert_id($conn);

    $partida = $_POST["partida"];
    $chegada = $_POST["chegada"];

    $nome_carga = $_POST["nome_carga"];
    $quantidade_carga = $_POST["quantidade_carga"];
    $descricao_carga = $_POST["descricao_carga"];
    $risco_carga = $_POST["risco_carga"];
    $peso_carga = $_POST["peso_carga"];
    $alimenticio_carga = $_POST["alimenticio_carga"];

    $query_carga = "INSERT INTO Carga (partida, chegada, nome, quantidade, descricao, risco, peso, alimenticio)
                    VALUES ('$partida', '$chegada', '$nome_carga', $quantidade_carga, '$descricao_carga', '$risco_carga', $peso_carga, '$alimenticio_carga')";

    if (mysqli_query($conn, $query_carga)) {
        echo "Registro inserido com sucesso!";
        header("location:aviso.php");
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conn);
        header("refresh:10;url=reservar.php");
    }

    mysqli_close($conn);
?>