<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Home - CargoSampa</title>
</head>

<body>
    <?php 
        require_once("includes/header.php");
    ?>
    <main>
        <div class="presentation_wrapper">
            <div class="presentation_text">
                CONHEÇA O NAVIO<br>
                CARGUEIRO DE<br>
                SÃO PAULO!
            </div>
        </div>
        <div class="content_home">
            <div class="description">
                <div class="description_title">
                    Tenha rapidez
                    na sua entrega!
                    <a href="sobrenos.php"><button>SAIBA MAIS</button></a>
                </div>
                <div class="description_text">
                    Somos uma empresa comprometida em enfrentar os desafios
                    do tráfego rodoviário em São Paulo. O transporte fluvial
                    de cargas nos rios Tietê e Paraná surge como nossa solução
                    eficiente e sustentável.
                </div>
            </div>
            <h2>O que nossa empresa <br>favorece?</h2>
            <div class="content_boxes_one">
                <div class="content_boxes_one_image">
                    <img src="assets/img/cidade_sustentavel.png" alt="cidade_sustentavel">
                </div>
                <div class="content_boxes_one_text">
                    Além dos benefícios ambientais, o transporte fluvial
                    destaca-se por sua capacidade de reduzir impactos adversos
                    ao meio ambiente. Ao optar por essa modalidade, minimizamos
                    a pegada de carbono e preservamos ecossistemas sensíveis.
                    A escolha pelo transporte fluvial, portanto, não apenas atende
                    às necessidades logísticas, mas também demonstra um compromisso
                    efetivo com a sustentabilidade ambiental.
                </div>
            </div>
            <div class="content_boxes_two">
                <div class="content_boxes_two_text">
                    Além dos benefícios ambientais, o transporte fluvial
                    impulsiona o desenvolvimento econômico local ao criar empregos.
                    Apesar dos desafios de infraestrutura e regulamentações, nossa
                    abordagem integrada visa superá-los. Essa iniciativa não
                    apenas alivia o congestionamento rodoviário, mas também contribui
                    para um transporte de mercadorias mais resiliente e equilibrado
                    em São Paulo.
                </div>
                <div class="content_boxes_two_image">
                    <img src="assets/img/caminhoes_transito.png" alt="caminhoes_transito">
                </div>
            </div>
            <div class="extra_info">
                <div class="extra_info_image">
                    <img src="assets/img/embarcacoes.png" alt="embarcações">
                </div>
                <div class="extra_info_text">
                    Nossa embarcação segue uma rota única,
                    possibilitando carregamento e descarregamento em
                    paradas específicas. A reserva antecipada de espaços na
                    embarcação otimiza a capacidade de transporte, reduz tempos
                    de espera e oferece garantia de espaço para mercadorias.
                </div>
            </div>
        </div>
    </main>
    <?php 
        require_once("includes/footer.php");
    ?>
</body>
</html>