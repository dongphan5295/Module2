<?php
function checkPalindrome($input)
{
    if (empty($input) || strlen($input) === 1) {
        return true;
    }

    $queue = new SplQueue();
    $length = strlen($input);
    for ($i = 0; $i < $length; $i++) {
        $queue->push($input[$i]);
    }

    $reverString = '';

    while (!$queue->isEmpty()) {
        $reverString .= $queue->pop();
    }
    // var_dump($reverString);
    if ($input === $reverString) {
        return "is Palindrome";
    } else {
        return "is not Palindrome";
    }
}

$str = 'DonggnoD1';

echo checkPalindrome($str);
