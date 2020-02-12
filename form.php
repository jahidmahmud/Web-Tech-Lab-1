<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if (isset($_POST['Submit'])) {
	$xml= new DOMDocument("1.0","UTF-8");
	$xml->load('a.xml');
	$rootTag=$xml->getElementByTagName("document")->item(0);
	$dataTag=$xml->createElement("data");
	$aTag=$xml->createElement("name",$_POST['name']);
	$bTag=$xml->createElement("email",$_POST['email']);
	$dataTag->appendChild($aTag);
	$dataTag->appendChild($bTag);
	$rootTag->appendChild($dataTag);
	$xml->save('a.xml');
}
?>
	<form action="start.php" method="post">
Name:
<input type="text" name="name"><br>
Email:
<input type="text" name="email"><br>
<input type="submit" name="Submit">
</form>
</body>
</html>
