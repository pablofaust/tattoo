
<!-- MENU -->
	
<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
		 <a class="navbar-brand" href="<?php echo $url ?>">
		 	<!-- This is the title -->
		 	<h1>Tattoo Factory</h1></a>
	</div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">

			<!-- This is the first link of the menu -->
			<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perforaciones</span></a>
          		<ul class="dropdown-menu">
		            <li><a href="<?php echo $url ?>category1">2015</a></li>
		            <li><a href="<?php echo $url ?>category1">2014</a></li>
		            <li><a href="<?php echo $url ?>category1">2013</a></li>
	          </ul>
	        </li>

			<!-- This is the first link of the menu -->
			<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tatuajes</span></a>
          		<ul class="dropdown-menu">
		            <li><a href="<?php echo $url ?>category1">Tatuador 1</a></li>
		            <li><a href="<?php echo $url ?>category1">Tatuador 2</a></li>
		            <li><a href="<?php echo $url ?>category1">Tatuador 3</a></li>
	          </ul>
	        </li>

			<!-- This is the fourth link of the menu -->
			<li>
				<a href="<?php echo $url ?>contact">Contacto</a>
			</li>
			
		</ul>
	</div>
	
</nav>