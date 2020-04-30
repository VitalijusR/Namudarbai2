<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
$cities[] ='Tokijas';
print_r($cities) . '<br>';
?>

<br>

<?php
$cities2= ['Tokijas' => 13.6, 'Vasingtonas' => 0.6, 'maskva' => 11.5];
$cities2['londonas'] = 8.6;
print_r($cities2);
?>

<ul>
    <?php
        echo"<li>($cities[1]);</li>"
?>
</ul>

 
<ul>
   <?php
        echo'<li>'.'Gyventoju skaicius:'.$cities2['Tokijas'].'<li>';
 ?> 
</ul>