<?php
namespace App\Classes;
use DateTime;

class Eventogy
{
    // A function to convert UNIX timesstamps to readable code
    public function convertTimstamp(int $timeStamp)
    {
        // Using a DateTime class to work with its methods
        $date = new DateTime();
        $date->setTimestamp($timeStamp);
        $readAbleDate = $date->format('Y-m-d H:i:s');
        $offset = $date->getOffset();
        return $readAbleDate . '  The Offset is ' . $offset;
    }

    // Function to validate email
    public function checkValidEmail($email)
    {
        // Email Validatation using filter_vars() function
        $string = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'True' : 'False';
        return $string;

        // Email Validatation  with regular expression (regexp)
        /*$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $string = preg_match($regex, $email) ? 'True': 'False';

    return $string;*/

    }

    // Flips a coin a number of times
    public function flipCoin($counter)
    {
        // Define an array to hold a number of times that a coin flips
        $coin = array();
        for ($i = 1; $i <= $counter; $i++) {
            $flips = rand(0, 1);
            $coin[] = $flips === 0 ? 'head' : 'tail';
        }

        $tail = 0;
        $head = 0;
        $i = 0;
        // Using above varables to hold the number of heads or tails
        foreach ($coin as $c) {
            if ($c === 'head') {
                $head++;
            } else {
                $tail++;
            }

            $i++;
            echo "Round $i: $c" . '</br>';
        }
        // Converting a raw number to a percentage
        $percentageHead = ($head * 100) / $counter;
        $percentageTail = ($tail * 100) / $counter;
        echo '</br>' . 'Number of flips :' . count(($coin)) . ' Times</br>' .
            'Heads :' . $percentageHead . ' %</br>' .
            'Tails :' . $percentageTail . ' %' .'</br>';
    }
}
