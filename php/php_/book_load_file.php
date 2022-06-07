• book.php
<?php
$xml=simplexml_load_file("book.xml") or die("eror:cannot create object");
echo "<table border=1 align=center>";
echo "<tr><td>book no 
</td><td>Bookname</td><td>authorname</td><td>price</td><td>year</td></tr>";
foreach($xml->children() as $book)
{
echo "<tr><td>".$book->bookno."</td>";
echo "<td>".$book->bookname."</td>";
echo "<td>".$book->authorname."</td>";
echo "<td>".$book->price."</td>";
echo "<td>".$book->year."</td></tr>";
}
echo "<table>";
?>


