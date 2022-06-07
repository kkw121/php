• Movie.php
<?php
$doc=new DOMDocument();
$doc->load("movie.xml");
echo"<h1> Movie Info</h1>";
$Mtitle=$doc->getElementsByTagName("MovieTitle");
$Aname=$doc->getElementsByTagName("ActorName");
echo "<br><br>Movie Title:<br>";
foreach($Mtitle as $value)
{
echo "<br>".$value->textContent;
}
echo "<br><br> Actor Name:<br>";
foreach($Aname as $value)
{
echo "<br>".$value->textContent;
}
?>
• Movie.xml
<?xml version='1.0' encoding ='UTF-8' ?>
<MovieInfo>
<movie>
<MovieNo> 1 </MovieNo>
<MovieTitle> Mission Mangal</MovieTitle>
<ActorName>Akshay Kumar</ActorName>
<ReleaseYear>2019</ReleaseYear>
</movie>
<movie>
<MovieNo> 2 </MovieNo>
<MovieTitle>RRR </MovieTitle>
<ActorName> Ram Charan</ActorName>
<ReleaseYear> 2022 </ReleaseYear>
</movie>
<movie>
<MovieNo> 3 </MovieNo>
<MovieTitle> 3 idiots </MovieTitle>
<ActorName>Amir Khan</ActorName>
<ReleaseYear> 2009 </ReleaseYear>
</movie>
<movie>
<MovieNo> 4 </MovieNo>
<MovieTitle> Chhichore </MovieTitle>
<ActorName> Sushant singh Rajput</ActorName>
<ReleaseYear> 2019 </ReleaseYear>
</movie><movie>
<MovieNo> 5 </MovieNo>
<MovieTitle> Uri </MovieTitle>
<ActorName> Vicky Kaushal</ActorName>
<ReleaseYear> 2019 </ReleaseYear>
</movie>
</MovieInfo>






