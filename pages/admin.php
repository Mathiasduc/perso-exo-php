<?php $array_message = getLastMessage();?>
<div class="main contact-message">
	<h2>Nom:<?= htmlspecialchars($array_message['nom']); ?></h2>
	<h3>Object du contact: <?=  htmlspecialchars($array_message['object_du_contact']); ?></h3>
	<h3>Message:</h3>
	<p><?= htmlspecialchars($array_message['message']); ?></p>
</div>

