

<div class="container-fluid">
    <div class="row">

      <div class="col">
          <h1>Hello, world... </h1>
          <h2>Salut les copains </h2>
          <h3>Il est temps de faire des choses amusantes en PHP</h3>
          <h4>Commençons aujourd'hui le <?php echo date('D, d/M/Y');  ?></h4>
      </div>
    </div>
</div>
<?php

include_once ("../connexion/requete.php");
$res=selectAll("paramConx","auteur");
?>

//afficher les resultats
<table border =\"1\">

<?php
while($row=$res->fetch_array(MYSQLI_NUM))
{
    echo "<tr>";
    foreach ($row as $c)
    {
        echo "<td>$c</td>";
    }
    echo "</tr>";
    echo "<br>";
}
$res->free();

?>
</table>
