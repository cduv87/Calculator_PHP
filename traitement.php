<?php
$ops = ["+", "-", "*", "/", "%"];
$i = 1;
if (isset($_POST["cnx"])) { // submit button


    // echo "empty o1 :";
    // var_dump(empty($_POST["o1"]));
    // echo "isset o1 :";
    // var_dump(isset($_POST["o1"]));
    // echo "empty op :";
    // var_dump(empty($_POST["op"]));
    // echo "isset op :";
    // var_dump(isset($_POST["op"]));


    if (!is_numeric($_POST["o1"]) or !is_numeric($_POST["o2"]) or !isset($_POST["op"])) {

        $erreur = "Tout les champs ne sont pas remplis.";

    } else {

        $op1 = $_POST["o1"];
        $op2 = $_POST["o2"];

        switch ($_POST["op"]) {
            case 1:
                $result = $op1 + $op2;
                break;
            case 2:
                $result = $op1 - $op2;
                break;
            case 3:
                $result = $op1 * $op2;
                break;
            case 4:
                $result = $op1 / $op2;
                break;
            case 5:
                $result = $op1 % $op2;
                if ($result == null) {
                    $result = 0;
                }
                break;
        }
    }
}
