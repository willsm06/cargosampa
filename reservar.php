<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reservar.css">
    <title>Formulário para Reserva</title>
</head>

<body>
    <?php
    require_once("includes/header.php");
    ?>
    <h1>Preencha as informações para a sua reserva!</h1>
    <form action="processar.php" method="post">

        <h2>Informações de Despache</h2>

        <label for="empresa_desp">Empresa: *</label>
        <input type="text" id="empresa_desp" name="empresa_desp" required>

        <label for="cnpj_desp">CNPJ: *</label>
        <input type="text" id="cnpj_desp" name="cnpj_desp" required>

        <label for="tel_desp">Tel: *</label>
        <input type="tel" id="tel_desp" name="tel_desp" required>

        <label for="email_desp">Email: *</label>
        <input type="email" id="email_desp" name="email_desp" required>

        <h2>Informações Retirada</h2>

        <label for="empresa_ret">Empresa: *</label>
        <input type="text" id="empresa_ret" name="empresa_ret" required>

        <label for="cnpj_ret">CNPJ: *</label>
        <input type="text" id="cnpj_ret" name="cnpj_ret" required>

        <label for="tel_ret">Tel: *</label>
        <input type="tel" id="tel_ret" name="tel_ret" required>

        <label for="email_ret">Email: *</label>
        <input type="email" id="email_ret" name="email_ret" required>

        <h2>Informações Rota</h2>

        <label for="partida">Partida: *</label>
        <select id="partida" name="partida" required>
            <option value="">Selecione...</option>
            <option value="Porto Colombia">Porto Colombia</option>
            <option value="Cachoeira Dourada">Cachoeira Dourada</option>
            <option value="São Simao">São Simao</option>
            <option value="Volta Grande">Volta Grande</option>
            <option value="Ilha Solteira">Ilha Solteira</option>
            <option value="Capivara">Capivara</option>
        </select>

        <label for="chegada">Chegada: *</label>
        <select id="chegada" name="chegada" required>
            <option value="">Selecione...</option>
            <option value="Porto Colombia">Porto Colombia</option>
            <option value="Cachoeira Dourada">Cachoeira Dourada</option>
            <option value="São Simao">São Simao</option>
            <option value="Volta Grande">Volta Grande</option>
            <option value="Ilha Solteira">Ilha Solteira</option>
            <option value="capivara">Capivara</option>
        </select>

        <h2>Informações Carga</h2>

        <label for="nome_carga">Nome: *</label>
        <input type="text" id="nome_carga" name="nome_carga" required>

        <label for="quantidade_carga">Quantidade: *</label>
        <input type="number" id="quantidade_carga" name="quantidade_carga" required>

        <label for="descricao_carga">Descrição: *</label>
        <input type="text" id="descricao_carga" name="descricao_carga" required>

        <label for="risco_carga">Possui risco? *</label>
        <select id="risco_carga" name="risco_carga" required>
            <option value="">Selecione...</option>
            <option value="nenhum">Nenhum</option>
            <option value="corrosivas">Substâncias Corrosivas</option>
            <option value="explosivos">Explosivos</option>
            <option value="gases">Gases</option>
            <option value="liquidos_inflamaveis">Líquidos Inflamáveis</option>
            <option value="oxidantes_peroxidos">Substâncias oxidantes e peróxidos orgânicos</option>
            <option value="radioativos">Materiais Radioativos</option>
            <option value="solidos_inflamaveis">Sólidos Inflamáveis</option>
            <option value="venenosas_infectantes">Substâncias venenosas (tóxicas) e substâncias infectantes</option>
            <option value="fragil">Material frágil</option>
        </select>

        <label for="peso_carga">Peso em Toneladas(T): *</label>
        <input type="number" id="peso_carga" name="peso_carga" maxlength="24" required>

        <label for="alimenticio_carga">Produto Alimentício? *</label>
        <select id="alimenticio_carga" name="alimenticio_carga" required>
            <option value="">Selecione...</option>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>