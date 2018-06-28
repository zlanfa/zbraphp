<!DOCTYPE html>
<html>

<head>
	<title>Dookonka</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
     
     <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/green.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.transitions.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.min.css">
    

</head>

<body>

<div class="container-fluid" >
	<?php 
		$this->load->view('header/top-menu-bar', null , FALSE);
		$this->load->view('header/header-lower', null , FALSE);
		$this->load->view('header/breadcrumb', null, FALSE);
		
	?>
</div>


