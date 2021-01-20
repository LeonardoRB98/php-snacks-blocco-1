
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
    $matches = [
        [
            'homeTeam' => 'Los Angeles Lakers',
            'guest' => 'Huston Rockets',
            'homeTeamScore' => '2',
            'guestScore' => '5',
        ],
        [
            'homeTeam' => 'Boston Celtics',
            'guest' => 'Golden State Warriors',
            'homeTeamScore' => '6',
            'guestScore' => '8',
        ]
    ];
    
    for ($i = 0; $i < count($matches);$i++) {
        // var_dump($matches[$i]);
        echo $matches[$i][homeTeam] . ' - ' . $matches[$i][guest] . ' | ' . $matches[$i][homeTeamScore] . ' - ' . $matches[$i][guestScore] . '<br>';
        
    }
?>


