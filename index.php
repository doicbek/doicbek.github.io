<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="resources/ico/favicon.ico">

	<title>Dominic Beck - Personal Website</title>

	<link href="resources/css/bootstrap.css" rel="stylesheet">
	<link href="resources/css/font-awesome.min.css" rel="stylesheet">
	<link href="resources/css/main.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="resources/js/html5shiv.js"></script>
		<script src="resources/js/respond.min.js"></script>
	<![endif]-->
	
	<script>
	if (window.innerHeight > 622) {
	document.getElementById("footer").classList.remove("hidden");
	}
	</script>
 </head>

 <body>
  

	<div class="container">

		<div class="col-lg-10 col-lg-offset-1">
    	
			<!-- Navigation -->
			<div class="row w">
				<div class="col-md-4">
					<div class="profile-header">
					<img src="resources/img/avatar_bg.jpg" class="background"/>
					<img src="resources/img/avatar.jpg" class="profile"/> 
					<figcaption> 
					<h3>Dominic Beck<span>Master's Student in Physics</span></h3> 
					</figcaption> 
					</div>
					<ul class="nav nav-tabs nav-stacked" id="myTab">
						<li class="active"><a href="#about">About</a></li>
						<li><a href="#profile">CV</a></li>
						<li><a href="#research">Research</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>    			
				</div><!-- col-md-4 -->

    		<!-- Content -->
    			<div class="col-md-8">
	    			<div class="tab-content">


						<!-- About Tab -->
						<div class="tab-pane active" id="about">
							<h3>About</h3>
							<hr>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet felis sem, sit amet venenatis nibh efficitur ac. Sed auctor, augue id convallis fringilla, mi diam consequat odio, sit amet lobortis tellus ligula a tortor. Ut ornare felis sed ipsum gravida, a tincidunt dui eleifend. Fusce venenatis nisi a vestibulum suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							</p> 
							<p>
								Aenean consectetur dui nec nunc mollis bibendum. Nam varius nulla eu lectus ultrices, vel pretium purus sodales. Suspendisse id mauris sit amet velit pellentesque porttitor. Pellentesque turpis lectus, tincidunt sed metus ac, viverra auctor felis. In sapien nulla, vehicula sit amet convallis eu, imperdiet ac lectus. Proin pretium finibus elit, ac venenatis sapien finibus ut.								
							</p>
						</div>


						<!-- CV Tab -->
						<div class="tab-pane" id="profile">
							<h3>Curriculum Vitae</h3> 
							<hr>
							<h4><i class="fa fa-university" aria-hidden="true"></i> Education</h4>
								<p class="sm">
								<grey>Master's Degree in Physics</grey> | <a href="https://www.polytechnique.edu/">École Polytechnique Paris, France</a><br/>
								<grey>Master's Degree in Physics</grey> | <a href="https://www.ethz.ch">Federal Institute of Technology (ETH) Zürich, Switzerland</a><br/>
								<grey>Bachelor's Degree in Physics</grey> | <a href="http://www.tu-berlin.de/">Technical University Berlin, Germany</a><br/>
								</p>

							<h4><i class="fa fa-briefcase" aria-hidden="true"></i> Professional Experience</h4>
								<p class="sm">
								<grey>March 2016 - Now</grey> | <a href="http://www.apc.univ-paris7.fr/">Laboratoire Astroparticule et Cosmologie, CNRS UMR 7164, France</a><br/>
								<grey>October 2011 - January 2014</grey> | <a href="http://www.atotech.com/">Atotech Deutschland GmbH, Germany</a><br/>
								</p>
								
							<h4><i class="fa fa-trophy" aria-hidden="true"></i> Grants</h4>
								<p class="sm">
								<grey>September 2015 - August 2016</grey> | <a href="https://www.daad.de/">German Academic Exchange Service (DAAD), Scholarship </a><br/>
								</p>
								
							<center><a role="button" class="btn btn-primary" href="docs/DBeck_CV.pdf" target="_blank"><i class="fa fa-download"></i> Download full CV with list of attended Master courses</a></center>
						</div>

						
						<!-- ===== Research Tab ===== -->
						<div class="tab-pane" id="research">
							<h3>Research Interests</h3>
							<hr>
							<div class="span clearfix">
								<h4>Cosmology</h4>
								<div class="col-xs-4">
								<img class="img-responsive" src="resources/img/p01.png" alt="">
								</div>
								<div class="col-xs-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nunc pretium faucibus pretium. Mauris pharetra nunc nec metus malesuada.</p>
									<p>
										<a class="btn btn-default" href="cosmology.php" role="button">Learn more &raquo;</a>
									</p>
								</div>
							</div>
							
							<div class="span clearfix">
								<h4>CMB Lensing</h4>
								<div class="col-xs-4">
								<img class="img-responsive" src="resources/img/p02.png" alt="">
								</div>
								<div class="col-xs-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nunc pretium faucibus pretium. Mauris pharetra nunc nec metus malesuada.</p>
									<p>
									<a class="btn btn-default" href="http://background.uchicago.edu/~whu/CMBlens/cmblens.html" role="button">Learn more &raquo;</a>
									<a class="btn btn-primary" target="_blank" role="button"><i class="fa fa-download" title="Align Right"></i> Master's Thesis</a>
									<a class="btn btn-success disabled" href="#" role="button"  data-toggle="collapse" data-target="#collapseSoftware" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Software</a>
									</p>
								</div>
								
								<div class="collapse col-xs-8 col-lg-offset-4" id="collapseSoftware">
									<div class="list-group">
										<a href="#" class="list-group-item"><span class="badge">new</span>
											<h4 class="list-group-item-heading">Lensnoise</h4>
											<p class="list-group-item-text">Program to compute the Noise of the displacement field</p>
										</a>
									</div>
								</div>
							</div>

							<div class="span clearfix">
								<h4>Scientific Computing</h4>
								<div class="col-xs-4">
								<img class="img-responsive" src="resources/img/p03.png" alt="">
								</div>
								<div class="col-xs-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nunc pretium faucibus pretium. Mauris pharetra nunc nec metus malesuada.</p>
									<p><a class="btn btn-default" href="http://www.nersc.gov/" role="button">NERSC &raquo;</a></p>
								</div>
							</div>
								
							<div class="span clearfix">
								<h4>Theoretical Physics</h4>
								<div class="col-xs-4">
								<img class="img-responsive" src="resources/img/p04.png" alt="">
								</div>
								<div class="col-xs-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque efficitur nunc pretium faucibus pretium. Mauris pharetra nunc nec metus malesuada.</p>
								</div>
							</div>

						</div>

						
						<!-- Contact Tab -->
						<div class="tab-pane" id="contact">
							<h3>Contact Information</h3>
							<hr>
							<p>
								<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
								</span> 
								beckdo<i class="fa fa-at" aria-hidden="true"></i>student.ethz.ch<br/>
							</p>

							<p>
								<a class="skype" href="#" data-toggle="popover" data-placement="bottom" html=true title="Skype Name" data-content="<a href='skype:doicbek?chat'>doicbek</a>">
									<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-skype fa-stack-1x fa-inverse"></i>
									</span>
								</a>

								<a class="linkedin" href="https://www.linkedin.com/in/dominicbeck" title="LinkedIn">
									<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								
								<a class="github" href="https://github.com/doicbek" title="Github">
									<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-github fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</p>

							<div class="panel panel-default">
							<div class="panel-body">Impressum</div>
							<div class="panel-footer">
							<h4>Kontaktadresse</h4>
								<address>
								Dominic Beck<br>
								13 Route de Saclay<br>
								91120 Palaiseau<br>
								France
								</address>
							<h4>Haftungsausschluss</h4>
								<p>Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und  Vollständigkeit der Informationen.</p>
								<p>Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw.  Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der  Verbindung oder durch technische Störungen entstanden sind, werden  ausgeschlossen.</p>
								<p>Alle  Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern,  zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig  einzustellen.</p>
							<h4>Haftung für Links</h4>
								<p>Verweise und Links auf Webseiten Dritter liegen ausserhalb meines Verantwortungsbereichs. Es wird jegliche Verantwortung für solche Webseiten  abgelehnt.  Der Zugriff und die Nutzung solcher Webseiten erfolgen  auf eigene Gefahr des Nutzers oder der Nutzerin. </p>
							<h4>Urheberrechte</h4>
								<p>Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien auf der Website gehören ausschliesslich <strong></strong> oder den speziell genannten  Rechtsinhabern. Für die Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im Voraus einzuholen.</p>
							</div>
							</div>
						</div>
						
						
					</div><!-- Tab Content -->
				</div><!-- col-md-8 -->
			</div><!-- row w -->
		</div><!-- col-lg-10 -->
	</div><!-- /.container -->

	<p style="text-align: center; font-size: 10pt;">© 2016 by Dominic Beck. All rights reserved. <?php
	$filename = 'index.php';
	if (file_exists($filename)) {
		echo "Last modified on " . date ("F d, Y.", filemtime($filename));
	}
	?></p>

    <!-- Bootstrap core JavaScript -->
    <script src="resources/js/jquery.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
	<script>
	$('#myTab a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	})	
	$(document).ready(function(){
		$('[data-toggle="popover"]').popover({html:true}); 
	});
	</script>
	
  </body>
</html>
