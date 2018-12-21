<?php get_header(); ?>

	<div class="contenido clearfix">
		
		<h2>Contacto</h2>
		<div class="clearfix contacto">
			<p>Mándanos un correo a contacto@ajaraca.org o si lo prefieres, déjanos tu mensaje.</p>
			<form id="contacto_ajaraca" method="post">
				<div class="fields clearfix">
					
					<input type="text" name="nombre" placeholder="Nombre">
				</div>
				<div class="fields clearfix">
					
					<input type="email" name="correo" placeholder="Correo">
				</div>
				<div class="fields clearfix">
					
					<input type="text" name="asunto" placeholder="Asunto">
				</div>
				<div class="fields clearfix">
					
					<textarea name="mensaje" rows="5" cols="40" placeholder="Mensaje"></textarea>
				</div>
					<input type="submit" value="Enviar" name="Enviar" id="enviar">

			</form>
		</div>

	</div>

<?php get_footer(); ?>