<?php
if( is_active_sidebar( 'footer' ) ):
	dynamic_sidebar( 'footer' );
else: ?>
	<p>Insira na página de Widgets o widget "Conteúdo Footer" menu "Footer"!</p>
<?php endif; ?>