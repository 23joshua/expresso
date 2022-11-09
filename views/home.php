<article class="banner">
    <div class="bannerContainer container">
        <div class="boxContent">
            <header class="headerContent">
                <h1>Expresso carga & serviços</h1>
                <p>faça parte da nossa grande familia ECS</p>
            </header>
            <p class="text">oferecemos os melhores serviços de correios expresso no pais!</p>
            <a href="?file=about" class="btn btn_ecs">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                sobre nós
            </a>
        </div>
    </div>
</article>
<article class="aboutHome container">
    <figure data-anime="top">
        <img src="assets/img/bgAbout.jpeg" alt="sobre nós">
        <figcaption>
            <h3>14</h3>
            <p>anos</p>
        </figcaption>
    </figure>
    <header data-anime="right">
        <h2>sobre nós</h2>
        <p>por sí chegamos mais longe</p>
    </header>
    <div class="aboutContent" data-anime="right">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem mollitia distinctio veniam? Unde
            architecto repellendus facilis omnis explicabo quia accusantium sunt quam, tempore obcaecati cumque
            maiores
            blanditiis quis aliquam odio?</p>
        <div class="aboutValue">
            <div class="vAbout active_vAbout">
                <h3>valor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum maxime laborum perspiciatis nisi
                    laudantium sed officiis, sequi sint dolor quo nihil magnam esse optio, incidunt perferendis hic.
                    Nihil, pariatur?</p>
            </div>
            <div class="vAbout">
                <h3>visão</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum maxime laborum perspiciatis nisi
                    laudantium sed officiis, sequi sint dolor quo nihil magnam esse optio, incidunt perferendis hic.
                    Nihil, pariatur?</p>
            </div>
            <div class="vAbout">
                <h3>missão</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eum maxime laborum perspiciatis nisi
                    laudantium sed officiis, sequi sint dolor quo nihil magnam esse optio, incidunt perferendis hic.
                    Nihil, pariatur?</p>
            </div>
        </div>
        <p class="assinatura">assinatura</p>
        <a href="?file=about" class="btn btn_ecs">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            sobre nós
        </a>
    </div>
</article>
<section class="contentService container">
    <div class="serviceIcon">
        <figure data-anime="left">
            <img src="assets/img/logistics.webp" alt="carro de entregas">
        </figure>
        <figure data-anime="top">
            <img src="assets/img/worldwide-shipping.webp" alt="serviços rápidos">
        </figure>
        <figure data-anime="right">
            <img src="assets/img/delivery-man.webp" alt="caixas de entrega">
        </figure>
    </div>
    <header class="headerContent" data-anime="opacity">
        <h2>nossos serviços</h2>
        <p>Nós trazemos o mundo até a sua porta, do pedido ao destino.</p>
    </header>
    <?php require __DIR__ . "/card-service.php"; ?>
    <br>
    <a href="?file=about" class="btn btn_ecs">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        saiba mais
    </a>
</section>

<?php require __DIR__ . "/quotation.php"; ?>

<section class="whoUs container" data-anime="right">
    <header class="headerContent">
        <h2>porque nos escolher?</h2>
        <p>prestamos o melhor serviço de correio expresso no pais!</p>
    </header>
    <article class="us active_us" data-item="quality" data-anime="left">
        <header>
            <h3>Qualidade</h3>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, a.</p>
    </article>
    <article class="us" data-item="experience">
        <header>
            <h3>experiência</h3>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, a.</p>
    </article>
    <article class="us" data-item="speed">
        <header>
            <h3>entregas rápidas</h3>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, a.</p>
    </article>
    <article class="us" data-item="personalDelivery">
        <header>
            <h3>entrega personalizadas</h3>
        </header>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, a.</p>
    </article>
    <aside class="asideWhoUs" data-anime="right">
        <div class="boxAsideUS" data-filter="speed">
            <figure><img src="assets/img/rocket.webp" alt="entregas rápidas"></figure>
            <h5>entregas rápidas</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="boxAsideUS" data-filter="personalDelivery">
            <figure><img src="assets/img/handshake.webp" alt="entregas personalizadas"></figure>
            <h5>entregas personalizadas</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="boxAsideUS" data-filter="experience">
            <figure><img src="assets/img/testimonials.webp" alt="experiência"></figure>
            <h5>experiência</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
        <div class="boxAsideUS active_boxAsideUS" data-filter="quality">
            <figure><img src="assets/img/high-quality.webp" alt="qualidade"></figure>
            <h5>qualidade</h5>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>

    </aside>
</section>

<section class=" article container">
    <header class="headerContent">
        <h2>blog</h2>
        <p>fique por dentro das novidades do nossos blog</p>
    </header>
    <div class="blogArticle blogArticleHome" data-anime="left">
        <?php for ($i = 0; $i < 3; $i++) : ?>
        <?php require __DIR__ . "/article.php"; ?>
        <?php endfor; ?>
    </div>
</section>