<?php
$favcolor="red";
$color="marvel";
switch ($favcolor) {
    case 'red':
        switch ($color) {
            case 'marcy':
                echo "marvel is your area\n";
                break;
            
            default:
                echo "marvel cant exist in this area\n";
                break;
        }
        echo "Your fav color is red\n";
        break;
        case 'blue':
           echo  "Your fav color is blue\n";
            break;
            case 'green':
            echo "Your fav color is green\n";
            break;
    
    default:
        echo "Your color doesnot exist\n";
        break;
}
?>