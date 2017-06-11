<?php include('header_other_dirs.html'); ?>

	<section id="fh5co-home" style="height:320px;top:50px;" data-section="order">
		<div class="core-features">
			<div class="grid2 to-animate" style="background-image: url(images/full_image_5.jpg);">
				<div class="col-md-12 section-heading text-center" style="position: relative;top: 50%;transform: translateY(-50%); ">
					<h2 class="to-animate"><span>Bestellen</span></h2>
				</div>
			</div>
			<div class="grid2 fh5co-bg-color">
				<div class="core-f">
					<h2 class="to-animate">Angaben</h2>
			<form class="contact-form" action="send_mail.php" method="post">
				<div class="form-group">
					<label for="orderCount" class="sr-only">Anzahl der Monate</label>
					<input type="number" class="form-control" id="orderCount" placeholder="3 Monate" 
					min="1" max="48" value="<?php echo $_GET['orderCount'];?> Monate">
				</div>
				<div class="form-group">
					<label for="name" class="sr-only">Vor- und Nachname</label>
					<input type="name" class="form-control" id="name" placeholder="Vor- und Nachname">
				</div>
				<div class="form-group">
					<label for="email" class="sr-only">E-Mail</label>
					<input type="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="message" class="sr-only">Metatrader4-Kontonummer</label>
					<input class="form-control" id="message" placeholder="Metatrader4-Kontonummer"></textarea>
				</div>
				<div class="form-group">
					<label for="btn-submit_paypal" class="sr-only">Verbindlich kaufen über PayPal</label>
					<input type="submit" id="btn-submit_paypal" class="btn btn-send-message btn-md" value="Weiter zu PayPal"> 
					<font color="black"><b>oder</b></font>
					<input type="submit" id="btn-submit_bank_transfer" class="btn btn-send-message btn-md" value="Überweisungsdaten">
				</div>
			</form>
			</div>
			</div>
		</div>
	</section>
	
<?php include('footer_other_dirs.html'); ?>