
	<?php require_once('plugin/contact-form/config.php'); ?>

	<div class="page page_6">
	
		<div class="page-header">
			<h2>Contact</h2>
			<h3>I'd love to hear from you</h3>
		</div>
	
		<div class="page-content">
	
			<div class="layout-50">
				
				<div class="layout-50-left">
						
					<h3>Contact Form</h3>
					 	
					<form name="contact-form" id="contact-form" action="" method="post">
						
						<div>
						
							<div class="form-line block">
								<label class="infield" for="contact-form-name"><?php echo CONTACT_FORM_LABEL_DATA_NAME; ?></label>
								<input type="text" name="contact-form-name" id="contact-form-name"/>	
							</div>
							<div class="form-line block">
								<label class="infield" for="contact-form-mail"><?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?></label>
								<input type="text" name="contact-form-mail" id="contact-form-mail"/>	
							</div>					
							<div class="form-line block">
								<label class="infield" for="contact-form-message"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></label>
								<textarea rows="0" cols="0" name="contact-form-message" id="contact-form-message"></textarea>	
							</div>
							<div class="form-line">
								<div class="block float-right">
									<input type="submit" class="button" name="contact-form-send" id="contact-form-send" value="Send"/>
								</div>
							</div>
						
						</div>	

					</form>
							
				</div>
			
				<div class="layout-50-right">
				
					<div class="contact-section">
				
						<h3>Emma Moreau</h3>
					
						<p>9 rue de la Paix</p>
						<p>75002 Paris, France</p>
						
						<br/>
						
						<p>Phone: +33 (0) 1 22 33 44 00</p>
						<p>Fax.: +33 (0) 1 22 33 44 00</p>
						<p>Mail: <a href="mailto:emma.moreau@paris.fr">mailto:emma.moreau@paris.fr</a></p>
				
					</div>
					
					<div>
				
						<h3>On The Map</h3>
						<div id="gmap"></div>
					
					</div>

				</div>
				
			</div>
			
		</div>
		
	</div>