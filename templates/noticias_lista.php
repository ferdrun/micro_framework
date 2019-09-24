<html>
<body>
<h3>Notícias</h3>
<ul>
<?php foreach($data['news'] as $new): ?>
<li><a href="./noticias/<?php echo $new['id']; ?>"><?php echo($new['titulo']); ?></a></li>

<?php endforeach; ?>
</ul>

<form method="POST">
	<input type="text" name="nome">
	<input type="submit" value="ENVIAR">
</form>
</body>

</html>
