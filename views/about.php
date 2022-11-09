<section class="about">
    <?php require __DIR__ . "/banner.php"; ?>
    <div class="aboutContainer container">
        <ul class="ul-about">
            <li class="li-history">
                <h2>bem vindo a <strong>ecs</strong></h2>
                <p>a Expresso Carga & Serviços (ecs) Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima
                    ipsam sit aliquam delectus
                    praesentium iste laborum dolor minus quas? Odio
                    alias odit quibusdam possimus nihil ex accusantium nemo magnam exercitationem.</p>
            </li>
            <li>
                <h3>cobertura</h3>
                <span class="icon-bullhorn"></span>
                <p>Estamos situados em todos os aeroportos à nível Nacional com escritórios optimizados para
                    manuseamento e movimentação de carga.</p>
            </li>
            <li>
                <h3>políticas</h3>
                <span class="icon-point-of-interest"></span>
                <p>Garantir um serviço de excelência aos nossos clientes
                    produto de experiência acumulada ao longo de 13 anos de operações;</p>
            </li>
            <li>
                <h3>porque nós</h3>
                <span class="icon-trophy"></span>
                <p>Somos uma empresa com 14 anos de experiencia no sector de Logística e Transporte de cargas,
                    dispomos de uma mão de obra qualificada e treinada e altamente profissional.</p>
            </li>
            <li>
                <h3>clientes</h3>
                <span class="icon-group-full"></span>
                <p>Estamos no mercado a a mais de 13 anos e com mais de 500 clientes em todo o território Moçambicano
                </p>
            </li>
        </ul>

        <figure class="photo-about">
            <img src="assets/img/ecs-about.png" alt="sobre nós">
        </figure>

        <ul class="ul-vision">
            <li class="li-vision">
                <h3>visão</h3>
                <span class="icon-lightbulb-o"></span>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos nemo rem, pariatur error deserunt aut?
                </p>
            </li>
            <li class="li-value">
                <h3>valor</h3>
                <span class="icon-diamond"></span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae inventore, vero magni
                    voluptatibus voluptates quasi.</p>
            </li>
            <li class="li-mission">
                <h3>missão</h3>
                <span class="icon-map-signs"></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam aliquam deserunt unde id nostrum
                    saepe.</p>
            </li>
        </ul>
    </div>
</section>

<article class="aboutNumber">
    <ul class="ulNumber">
        <li class="liBox1 li1">
            110
            <div class="liText1"></div>
            <h6>clientes</h6>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </li>
        <li class="liBox2 li2">
            62
            <div class="liText2"></div>
            <h6>colaboradores</h6>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </li>
        <li class="liBox1 li3">
            +10
            <div class="liText1"></div>
            <h6>Agências</h6>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </li>
        <li class="liBox2 li4">
            60k
            <div class="liText2"></div>
            <h6>clientes</h6>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </li>
    </ul>
</article>

<article class="videoAbout">
    <h2>saiba mais sobre a ECS</h2>
    <div class="embed">
        <span class="btn_close icon icon-power-off"></span>
        <iframe width="560" height="315"
                src="https://www.youtube.com/embed/<?= $video; ?>?rel=0&amp;showinfo=0" frameborder="0"
                allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <span class="btn_open icon icon-play"></span>
</article>

<?php require __DIR__ . "/faq.php"; ?>