<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body style="background-color:<?php the_field('color', 'option'); ?>">
 	
		<nav class="navbar navbar-default" id="header">
  			 
			      <a class="navbar-brand" href="http://localhost/creative-cooking/public/">
			        <img alt="Brand" src="<?php bloginfo('template_url'); ?>/images/fuckinglogo_small-03.png" class="logo">
			      </a>
  
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li class=><a href="http://localhost/creative-cooking/public/about/">About<span class="sr-only">(current)</span></a></li>
				        <li><a href="http://localhost/creative-cooking/public/recipes/">Recipes</a></li>
				         <li><a href="http://localhost/creative-cooking/public/contact/">Contact</a></li>
				         <li><a href="http://localhost/creative-cooking/public/faq/">FAQ</a></li>

				      
				      </ul>
				      <form class="nav navbar-form navbar-right" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">Submit</button>
				      </form>
     
 		</nav>



