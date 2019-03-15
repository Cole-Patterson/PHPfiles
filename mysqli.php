<?php
    $txt = "coding";
    echo "Sometimes when learning " .$txt. " it can be difficult, other times it can be fun!";

    $wage = 15;
    $time = 30;
    echo "Your wage is: " .$wage. "         ";
    echo "You have worked: " .$time. " hours.            ";
    echo "You have made: $" .$wage * $time. "!";

    $time = date("H");
    if ($time % 2 == 0){
        echo "even";
    } else {
        echo "odd";
    }

    ?>