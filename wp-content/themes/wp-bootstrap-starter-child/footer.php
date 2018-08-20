<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->


	<section id="ln-pre-footer">
		<div class="container">
			<article class="row align-items-center pl-3 pr-3">
				<div class="col-12 p-0">
					<h4 class="float-left ln-h4">Libro de la semana</h4>
					<p class="text-right"><a href="#">Conocer más ></a></p>
					<hr>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 ln-pre-footer-week-book">
					<img class="img-fluid" src="https://dummyimage.com/180x276/000/fff.png" >
				</div>
				<div class="col-xl-9 col-lg-9 col-md-8 ln-pre-footer-week-book-data">
					<h1 class="ln-h1">El caballero de la armadura oxidada</h1>
					<p class="ln-p3">
						<img src="/existaya-test/wp-content/uploads/2018/08/mini-bar.png" >
						&nbsp;
						Robert Fisher
					</p>
					<p class="ln-p3">
						<span data-star="1" class="ln-star"></span>
						<span data-star="2" class="ln-star"></span>
						<span data-star="3" class="ln-star"></span>
						<span data-star="4" class="ln-star"></span>
						<span data-star="5" class="ln-star-no-fill"></span>
						&nbsp;
						3 Reseñas
					</p>
					<h2 class="ln-h2">$57.000</h2>
					<p class="ln-p3">
						El Caballero de la Armadura Oxidada no es un libro... es una experiencia que expande nuestra mente, que nos llega al corazón y alimenta nuestra alma. Sus profundas enseñanzas éticas son de una sencillez y humildad tal que se consiguen interiorizar naturalmente y la riqueza de su prosa nos inunda de belleza. El protagonista, un caballero deslumbrado por el brillo de su propia armadura, a pesar de ser...
					</p>
				</div>
			</article>
		</div>
	</section>

    <?php get_template_part( 'footer-widget' ); ?>

	<footer class="ln-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-auto col-lg-auto col-md-6 col-sm-12 ln-address">
					<img class="mb-2" src="/existaya-test/wp-content/uploads/2018/08/logo-footer.png" >
					<p class="text-uppercase mb-0"><b>librería nacional s.a.</b></p>
					<p class="text-uppercase mb-0 font-weight-light">nit: 890.301.951-0</p>
					<p class=" mb-0 font-weight-light">Dirección Cra. 5 N° 11-50. Cali - Valle del Cauca</p>
					<p class=" mb-0 font-weight-light">Email: <a href="mailto:servicioalcliente@librerianacional.com">servicioalcliente@librerianacional.com</a></p>
					<p class=" mb-2 font-weight-light">Teléfono: <a href="tel:5728841114">(57) 2 884 11 14</a></p>
					<p class="mb-0"><b>Confederación Colombiana de Consumidores</b></p>
					<p class=" mb-0 font-weight-light"><a href="#">www.consumidores.org.co</a></p>
				</div>
				<div class="col-xl-auto col-lg-auto col-md-6 col-sm-12 ln-corp mt-lg-0 mt-xl-0 mt-md-0 mt-sm-0 mt-4">
					<p class="text-uppercase mb-0"><b>corporativo</b></p>
					<ul>
						<li><a class="font-weight-light" href="#">Quiénes Somos</a></li>
						<li><a class="font-weight-light" href="#">Sedes</a></li>
						<li><a class="font-weight-light" href="#">Café</a></li>
						<li><a class="font-weight-light" href="#">Regala un Bono</a></li>
						<li><a class="font-weight-light" href="#">Eventos</a></li>
					</ul>
				</div>
				<div class="col-xl-auto col-lg-auto col-md-6 col-sm-12 ln-corp mt-lg-0 mt-xl-0 mt-md-4 mt-sm-4">
					<p class="text-uppercase mb-0"><b>centro de ayuda</b></p>
					<ul>
						<li><a class="font-weight-light" href="#">PQRS</a></li>
						<li><a class="font-weight-light" href="#">Preguntas frecuentes</a></li>
						<li><a class="font-weight-light" href="#">Política de tratamientos de datos personales</a></li>
						<li><a class="font-weight-light" href="#">Política para cambio de mercancía</a></li>
						<li><a class="font-weight-light" href="#">Manuales</a></li>
					</ul>
				</div>
				<div class="col-xl-auto col-lg-auto col-md-6 col-sm-12 ln-corp mt-lg-0 mt-xl-0 mt-md-4 mt-sm-4 ln-pay">
					<p>Aceptamos todos los medios de pago</p>
					<ul class="list-inline">
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/pse.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/visa.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/mc.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/ae.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/dc.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/via.png" ></a></li>
						<li class="list-inline-item ln-li-pt"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/baloto.png" ></a></li>
						<li class="list-inline-item ln-li-pt"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/efecty.png" ></a></li>
					</ul>
					<p class="font-weight-light">Pagos seguros con: &nbsp; <a href="#"><img src="/existaya-test/wp-content/uploads/2018/08/payU.png" ></a></p>
					<ul class="list-inline">
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/fb.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/tw.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/g.png" ></a></li>
						<li class="list-inline-item"><a href=""><img src="/existaya-test/wp-content/uploads/2018/08/ins.png" ></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<section id="ln-post-footer">
		<div class="container">
			<div class="row">
				<div class="col pl-5 pr-5">
					<p class="float-left mb-0 font-weight-light">&copy; Librería Nacional <?php echo date('Y') ?> - Todos los derechos reservados</p>
					<p class="float-right mb-0 font-weight-light">Powerd by <a href="#"><img src="/existaya-test/wp-content/uploads/2018/08/e.png" ></a></p>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>