<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mapalu
 */

?>

	<footer id="footer">
		<div class="container">
		<div class="group-1">
			<div class="box">
				<figure>
					<a href="#">
					<img src="<?= get_theme_file_uri('/images/mapalu-black.png') ?>" alt="Logo mapalu">
					</a>
				</figure>
			</div>
			<div class="box industry">
				<h2>Industrias</h2>
				<a href="#">Terminos y Condiciones</a>
				<a href="#">Politica de privacidad</a>
				<a href="#">Medios de pago</a>
				<a href="#">Radicar PQRS</a>
				<a href="#">Politica de Devoluciones</a>
				<a href="#">Quiero ser Proveedor</a>
			</div>
			<div class="box">
				<h2>Contacto</h2>
				<h3>Horario</h3>
				<p>Lunes a vierdes de 8:30am a 5:30pm</p>
				<p>Sabaos de 9:00am a 12:30pm</p>
				<h3>Llamanos</h3>
				<p>3045512521 - 3023322423</p>
				<h3>Email</h3>
				<p>Ferreventas20@gmail.com</p>
				<p>Calle 37 a 40 16 Itaqui - Colombia</p>
			</div>
			<div class="box">
				<h2>Metodos de pago</h2>
				<img class="pay" src="<?= get_theme_file_uri('/images/visa.png') ?>" alt="visa">
				<img class="pay" src="<?= get_theme_file_uri('/images/mastercard.png') ?>" alt="mastercard">
				<img class="pay" src="<?= get_theme_file_uri('/images/express.png') ?>" alt="express">
				<img class="pay" src="<?= get_theme_file_uri('/images/pse.png') ?>" alt="pse">
				<img class="pay" src="<?= get_theme_file_uri('/images/nequi.png') ?>" alt="nequi">
				<img class="pay" src="<?= get_theme_file_uri('/images/pay.png') ?>" alt="pay">
				<img class="pay" src="<?= get_theme_file_uri('/images/boloto.png') ?>" alt="boloto">
				<h2>Siguenos</h2>
				<a href="#"><img class="social" src="<?= get_theme_file_uri('/images/ig.png') ?>" alt="Instagram"></a>
				<a href="#"><img class="social" src="<?= get_theme_file_uri('/images/fb.png') ?>" alt="Facebook"></a>
				<a href="#"><img class="social" src="<?= get_theme_file_uri('/images/yt.png') ?>" alt="Youtube"></a>
			</div>
		</div>
		</div>
		<div class="copy">
		<div class="container">
		<p>Copyright ® Mapalu Store 2022. Todos los derechos reservados.</p>
		</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
