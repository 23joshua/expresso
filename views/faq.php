<section class="faqContainer container-fluid">
    <header class="headerContent">
        <h2>perguntas frequentes</h2>
        <p>tire as suas duvidas</p>
    </header>
    <?php
    for ($i = 0; $i < 4; $i++) {

        echo '<article class="faq">';
        echo '<header>';
        echo '<h2>perguntas mais frequentes</h2>';
        echo '</header>';
        echo '<div class="faqContent">';
        echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis,
        quaerat temporibus architecto necessitatibus aliquid consectetur commodi
        in nam iusto officiis ea eius, pariatur officia dolorum. Consequatur
        obcaecati quam accusamus. Asperiores.</p>';
        echo '</div>';
        echo '</article>';
    }
    ?>
</section>