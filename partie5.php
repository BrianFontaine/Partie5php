<?php
// exercice 1
    echo "<h1>Exercices 1</h1>";

    $months= array();
        $months[0]='janvier';
        $months[1]='février';
        $months[2]='mars';
        $months[3]='avril';
        $months[4]='mai';
        $months[5]='juin';
        $months[6]='juillet';
        $months[7]='aout';
        $months[8]='septembre';
        $months[9]='octobre';
        $months[10]='novembre';
        $months[11]='décembre';

    echo $months[1];

    echo "<h1>Exercices 2</h1>";

    echo $months[2];

    echo "<h1>Exercices 3</h1>";

    echo $months[5];

    echo "<h1>Exercices 4</h1>";

    echo $months[5] = 'août';

    echo "<h1>Exercices 5</h1>";

    $hautDeFrance = ['59' => 'nord', '62' => 'Nord Pas De Calais','02'=> 'Aisne','80' => 'Somme'];
    var_dump($hautDeFrance);

    echo "<h1>Exercices 6</h1>";
    echo $hautDeFrance['59'];

    echo "<h1>Exercices 7</h1>";
    $hautDeFrance ['51'] = 'département de la marte';
    var_dump($hautDeFrance);

    echo "<h1>Exercices 8</h1>";

    foreach ($months as $element) 
    {
        echo "<p>$element</p>";
    }

   echo "<h1>Exercices 9</h1>";

   foreach ($hautDeFrance as $element) 
    {
        echo "<p>$element</p>";
    }

    echo "<h1>Exercices 10</h1>";

    foreach ($hautDeFrance as $element => $key) 
    {
        echo "<p>$key à le numero $element </p>";
    }
?>
