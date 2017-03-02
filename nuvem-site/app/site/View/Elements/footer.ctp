
<footer>
<div class="col-md-12 fundo-footer">
<div class="container">
	<div class="col-md-12 logo-footer animated pulse">
		<img src="<?php echo $this -> webroot; ?>/img/logo-nuvem.png" alt="" >
	</div>
	
		<div class="col-md-4 coluna-footer">
			<div class="titulo-footer">
				Redes Sociais
			</div>
			<ul class="lista-footer">
				<a href="https://www.facebook.com/nuvemdesenvolvimentoweb/" target="_blank"><li>Facebook</li></a>
				<a href="https://twitter.com/nuvemdevweb" target="_blank"><li>Twitter</li></a>
				<a href="ttps://plus.google.com/114932408540511850685?hl=pt_br" target="_blank"><li>Google+</li></a>
				<a href="https://www.instagram.com/nuvemdesenvolvimentoweb/" target="_blank"><li>Instagram</li></a>
			</ul>
			
			<!--<div class="titulo-footer">
				NewsLetters
			</div>
			<?php echo $this->Form->create("News", array('url' => array('controller' => 'home', 'action' => 'index'), "class" => "form")); ?>
			<form class="form-inline">
  				<div class="form-group">
    				<input type="text" class="form-control input-footer" id="NewsEmail" name='data[News][email]' required='required' placeholder="Email ">
  				</div>
  				<button type="submit" class="btn btn-default botao-news">Enviar</button>
			</form>
			<?php echo $this->Form->end(); ?>
			<?php echo $this->Html->script(array("jquery.maskedinput.min.js", "js_contato.js")); ?>-->
		</div>
		<div class="col-md-4 coluna-footer">
			<div class="titulo-footer titulo-footer-centro">
				Contato
			</div>
			<div class="endereco">
				<p>Avenida Tomaz de Aquino</p>
				<p>Caiçaras 200 Patos de Minas</p>
				<p>2º andar</p><br/>
				<p>Email: contato@nuvemdesenvolvimentoweb.com.br</p>
				<p>Telefone: (34) 9 9174-7506</p>
				<p>(34) 9 9966-4204</p>
			</div>
		</div>
		<div class="col-md-4 coluna-footer">
			<a class="twitter-timeline" data-lang="pt" data-height="200" href="https://twitter.com/nuvemdevweb">Tweets by nuvemdevweb</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		
		</div>
	<div class="col-md-12 copyright">
			&copy Copyright 2017 - todos os direitos reservados
	</div>
	</div>
</div>
</footer>
