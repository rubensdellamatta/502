<form method="POST" enctype="multipart/form-data">
	<p>Arquivo: <input type="file" name="arquivo"></p>
	<input type="submit" value="Enviar">
</form>
<pre>;
<?php 

if ($_POST || $_FILES) {
	print_r($_FILES);
}