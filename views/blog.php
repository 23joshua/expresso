<section class="blog">
    <article class="bAbout bServices bBlog bContact bTerms">
        <header class="blog_page_header">
            <h1>blog</h1>
            <p>Confira nossas dicas para controlar melhor suas contas</p>
            <form name="search" action="" method="post" enctype="multipart/form-data">
                <label>
                    <input type="text" name="s" placeholder="Encontre um artigo:" required />
                    <button class="icon-search icon-notext">pesquisar</button>
                </label>
            </form>
        </header>
    </article>
</section>
<section class="article container">

    <!--EMPTY CONTENT-->
    <div class="emptyContent">
        <div class="empty_content">
            <h3 class="empty_content_title">Sua pesquisa não retornou resultados :/</h3>
            <p class="empty_content_desc">Você pesquisou por <b>teste</b>. Tente outros termos. :)</p>
            <a class="btn btn_ecs" href="" title="Blog">
                ...ou Voltar ao blog
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>

    <div class="emptyContent">
        <div class="empty_content">
            <h3 class="empty_content_title">Ainda estamos trabalhando aqui!</h3>
            <p class="empty_content_desc">Nosso editores estão preparando um conteúdo para você. :)</p>
        </div>
    </div>

    <div class="blogArticle">
        <?php for ($i = 0; $i < 6; $i++) : ?>
        <?php require __DIR__ . "/article.php"; ?>
        <?php endfor; ?>
        <?php require __DIR__ . "/paginator.php"; ?>
    </div>

    <?php require __DIR__ . "/aside.php"; ?>
</section>