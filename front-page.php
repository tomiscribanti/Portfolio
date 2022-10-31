<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mapalu
 */

get_header();
?>
<section id="header">
    <div class="left">
        <h1>Dé vida a su hogar</h1>
        <p>¿Qué mejor manera de recibir el cambio de estación que con nuevas plantas? Disfruta del envío gratuito de
            todas las plantas de interior.</p>
        <div class="left__btn">
            <a href="#" class="primary__btn">Comprar ahora</a>
            <a href="#" class="secondary__btn">Ver colecciones</a>
        </div>
    </div>
    <div class="right">
    </div>
</section>

<main>
    <div class="container">
        <section id="services">
            <div class="services">
                <img src="<?= get_theme_file_uri('/images/service4.png') ?>" alt="service">
                <div class="services__detail">
                    <h3>Entrega a domicilio</h3>
                    <span>Envio en el pedido</span>
                </div>
            </div>
            <div class="services">
                <img src="<?= get_theme_file_uri('/images/service3.png') ?>" alt="service">
                <div class="services__detail">
                    <h3>Soporte 24/7</h3>
                    <span>Contacte las 24hs del dia</span>
                </div>
            </div>
            <div class="services">
                <img src="<?= get_theme_file_uri('/images/service1.png') ?>" alt="service">
                <div class="services__detail">
                    <h3>Devolucion de dinero</h3>
                    <span>Tienes 30 dias para devolver</span>
                </div>
            </div>
            <div class="services">
                <img src="<?= get_theme_file_uri('/images/service2.png') ?>" alt="service">
                <h3>Paga con tarjeta de credito y debito</h3>
            </div>
        </section>

        <section id="products">
            <div class="products__title">
                <h2>Artículos recomendados</h2>
                <a href="#">Ver más ></a>
            </div>
            <div class="products">
                <?php echo do_shortcode( '[products columns=4 limit=4]' ); ?>
            </div>
        </section>

        <section id="promotion">
            <div class="left__promotion">
                <h3>COLECCIÓN 2022</h3>
                <h2>Decoracion colgante 2022</h2>
                <a href="#" class="secondary__btn">Ver ahora</a>
            </div>
            <div class="right__promotion">

            </div>
        </section>

        <section id="products">
            <div class="products">
                <?php echo do_shortcode( '[products columns=4 limit=4]' ); ?>
            </div>
        </section>

        <section id="flower">

            <div class="products__title">
                <h2><a href="#" class="title__a">Flores</a></h2>
                <a href="#">Ver más ></a>
            </div>

            <div class="flower__flex">
            <div class="flowers">
                <h3>COLECCIÓN 2022</h3>
                <h2>Ejemplo de título para esta sección</h2>
                <a href="#" class="secondary__btn">Ver ahora</a>
            </div>

            <div class="products__flowers">
                <?php echo do_shortcode( '[products columns=3 limit=6]' ); ?>
            </div>
            </div>
        </section>

        <section id="flower">

            <div class="products__title">
                <h2><a href="#" class="title__a">Grama Sintética</a></h2>
                <a href="#">Ver más ></a>
            </div>

            <div class="flower__flex">
            <div class="flowers">
                <h3>COLECCIÓN 2022</h3>
                <h2>Ejemplo de título para esta sección</h2>
                <a href="#" class="secondary__btn">Ver ahora</a>
            </div>

            <div class="products__flowers">
                <?php echo do_shortcode( '[products columns=3 limit=6]' ); ?>
            </div>
            </div>
        </section>

        <section id="products">
            <div class="products__title">
                <h2>Helechos y más</h2>
                <a href="#">Ver más ></a>
            </div>
            <div class="products">
                <?php echo do_shortcode( '[products columns=4 limit=8]' ); ?>
            </div>
        </section>

        <section id="interest">
            <h2>Te puede interesar</h2>
            <div class="interest__image">
            <img src="<?= get_theme_file_uri('/images/mapalu-store.jpg') ?>" alt="Mapalu store">
            <img src="<?= get_theme_file_uri('/images/mapalu-greg.jpg') ?>" alt="Mapalu y Greg">

            </div>
        </section>
        <section id="descubre">
            <h2>Descubre</h2>
            <img src="<?= get_theme_file_uri('/images/cliente.png') ?>" alt="Ejemplo">

        </section>
    </div>
</main>

<?php
get_footer();