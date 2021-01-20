
<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php 
    $matches = 
    [
        0 => [
            'homeTeam' => 'Los Angeles Lakers',
            'guest' => 'Huston Rockets',
            'homeTeamScore' => '2',
            'guestScore' => '5',

        ],
        1 => [
            'homeTeam' => 'Boston Celtics',
            'guest' => 'Golden State Warriors',
            'homeTeamScore' => '6',
            'guestScore' => '8',

        ],
        2 => [
            'homeTeam' => 'Chicago Bulls',
            'guest' => 'Brooklyn Nets',
            'homeTeamScore' => '1',
            'guestScore' => '90',

        ],
    ];
    // var_dump($matches);
    for($i= 0; $i > count($maches); $i++) {
        var_dump($maches[$i]);
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snack 1</title>
</head>
<body>
    
</body>
</html>