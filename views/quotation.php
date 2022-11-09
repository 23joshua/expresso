<section class=" homeForm" data-anime="top">
    <div class="container formContent">
        <aside class="asideNav">
            <nav class="navAside">
                <a href="#" title="cotação" class="homeQ active_fHome" data-filter="speck-us">
                    <span>o</span>
                    fale connosco
                </a>
                <a href="#" title="fale connosco" class="homeQ" data-filter="quotation">
                    <span>o</span>
                    cotação
                </a>
                <a href="#" title="fale connosco" class="homeQ" data-filter="registration">
                    <span>o</span>
                    cadastro
                </a>
                <a href="#" title="contacto" class="homeQ" data-filter="contact">
                    <span>o</span>
                    contacto
                </a>
            </nav>
        </aside>

        <article class="boxForm">
            <?php require __DIR__ . "/address.php" ?>
            <?php require __DIR__ . "/form.php" ?>
            <form action="" method="post" name="contact" data-item="registration" class="registration form a_form">
                <h4>Dados da pessoais / da empresa</h4>
                <p><input ty pe="text" name="" id="" placeholder="Nome da empresa"></p>
                <p><input type="text" name="" id="" placeholder="endereço"></p>
                <p><input type="number" name="" id="" placeholder="numero de telefone da empresa"></p>
                <p><input type="text" name="" id="" placeholder="cidade"></p>
                <p><input type=" number" name="" id="" placeholder="nuit"></p>
                <p><input type="text" name="" id="" placeholder="site"></p>
                <h4>Dados da pessoa responsável</h4>
                <p><input type="text" name="" id="" placeholder="Nome"></p>
                <p><input type="text" name="" id="" placeholder="cargo"></p>
                <p><input type="number" name="" id="" placeholder="numero de telefone"></p>
                <p><input type="email" name="" id="" placeholder="E-mail"></p>
                <button class="btn btn_ecs">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    enviar
                </button>
            </form>
            <form action="" method="post" name="contact" data-item="quotation" class="form  formQuote a_form">
                <h4>dados pessoais / da empresa</h4>
                <p><input type="text" name="" id="" placeholder="Nome pessoal"></p>
                <p><input type="text" name="" id="" placeholder="nome da empresa"></p>
                <p><input type="email" name="" id="" placeholder="E-mail"></p>
                <p><input type="tel" name="" id="" placeholder="Telefone"></p>
                <p><input type="text" name="" id="" placeholder="endereço"></p>
                <p><input type="number" name="" id="" placeholder="número de NUIT"></p>
                <h4>dados da encomenda</h4>
                <p>
                    <select name="" id="" placeholder="Tipo de encomenda">
                        <option value="">marítimo</option>
                        <option value="">aéreo</option>
                        <option value="">rodoviário</option>
                        <option value="">ferroviário</option>
                    </select>
                </p>
                <p><input type="text" name="" id="" placeholder="origem"></p>
                <p><input type="text" name="" id="" placeholder="Destino"></p>
                <p><input type="text" name="" id="" placeholder="valor comercial"></p>
                <!-- <p><input type="date" name="" id=""></p> -->
                <p class="inBox peso"> <input type="text" name="" id="" placeholder="p"></p>
                <!-- <p class="inBox comprimento"><input type="number" name="" id="" placeholder="c"></p>
                <p class="inBox largura"><input type="number" name="" id="" placeholder="l"></p>
                <p class="inBox altura"><input type="number" name="" id="" placeholder="a"></p> -->
                <textarea name="" id="" cols=" 30" rows="4" placeholder="descrição"></textarea>
                <textarea name="" id="" cols=" 30" rows="6" placeholder="mensagem"></textarea>
                <button class="btn btn_ecs">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    enviar
                </button>
            </form>
        </article>
        <figure>
            <img src="assets/img/logo.webp" alt="logo">
        </figure>
    </div>
</section>