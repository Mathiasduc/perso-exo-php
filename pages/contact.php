<div class="contact main">
	<form action="save.php" method="post" class="ui form">
		<h3 class="ui dividing header">Contactez moi:</h3>
		<div class="field">
			<div class="two fields">
				<div class="field">
					<label>Nom</label>
					<input type="text" name="nom" placeholder="Albert Dupont">
				</div>
				<div class="field">
					<label >Object du contact</label>
					<input type="text" name="object du contact" placeholder="Proposition de projet">
				</div>
			</div>
		</div>	
		<div class="field">
			<label >Message</label>
			<textarea name="message" id="textarea-contact" cols="30" rows="10"></textarea>
		</div>
		<button class="button">Envoyer</button>
		<div class="ui error message"></div>
	</form>
</div>