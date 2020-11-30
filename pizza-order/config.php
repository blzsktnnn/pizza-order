<?php

$_POST['pizzas'] = array(
    'Hawaii' => 450,
    'Italiano' => 230,
    'Mexican' => 250,
    'Quadrosesoni' => 340
);
if (isset($_POST['name']) and !empty($_POST['name']) and !is_numeric($_POST['name'])) {
    $name = $_POST['name'];
} else {
    echo '<script>alert("Name is required, and can\'t be numeric")</script>';
    include('index.php');
}
if (isset($_POST['email']) and !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    echo '<script>alert("Email is required")</script>';
    include('index.php');
}
if (isset($_POST['year']) and !empty($_POST['year'])) {
    $year = $_POST['year'];
} else {
    echo '<script>alert("Year is required")</script>';
    include('index.php');
}
if (isset($_POST['amount']) and !empty($_POST['amount'])) {
    $amount = $_POST['amount'];
} else {
    echo '<script>alert("Amount of pizza is required")</script>';
    include('index.php');
}

echo "<h2>ORDER DETAILS</h2> <br>";
echo "Your name is <b>$name</b>" . "<br>";
echo "Your Email address is <b>$email</b>" . "<br>";
##### AGE CALCULATOR #####
if (!empty($_POST['year']) and !empty($_POST['month']) and !empty($_POST['day'])) {
    $age = $_POST['year'];
    $yourAge = date('Y') - $age;
    echo "You are $yourAge years old. <br>";
}
##### PRICE CHECK #####
function Price() {
    foreach ($_POST['pizzas'] as $key => $pizza) {
        $amount = $_POST['amount'];
        $selected = $_POST['Pizza'];
        $newPrice = $pizza * 0.03;
        $newPrice2 = $pizza * 0.02;
        $newPrice3 = $pizza * 0.05;
        $normalPrice = $pizza * $amount;
        $yearDiscount = ($pizza - $newPrice) * $amount;
        $cashDiscount = ($pizza - $newPrice2) * $amount;
        $yearCashDiscount = ($pizza - $newPrice3) * $amount;
        $age = $_POST['year'];
        $yourAge = date('Y') - $age;
        $radioCash = $_POST['payment'];
        if ($key == $selected) {
            if ($yourAge >= 60 and $radioCash == 'cash') {
                echo "You have chosen: " . "<b> $selected </b>" . " pizza," . " the price is " . $yearCashDiscount . " RSD" . "<br>";
            } elseif ($yourAge >= 60) {
                echo "You have chosen: " . "<b> $selected </b>" . " pizza," . " the price is " . $yearDiscount . " RSD" . "<br>";
            } elseif ($radioCash == 'cash') {
                echo "Your pizza is $selected Your price is: $cashDiscount ";
            } else {
                echo "You have chosen: " . "<b> $selected </b>" . " pizza," . " the price is " . $normalPrice . " RSD" . "<br>";
            }
        }
    }
}
Price();
##### COMMENT CHECK #####
if (isset($_POST['comment']) and !empty($_POST['comment'])) {
    $comment = $_POST['comment'];
    $words = array("kill", "pay", "shoot", "die");

    foreach ($words as $word) {
        $length = strlen($word);
        $firstChar = $word[0];
        $lastChar = $word[$length - 1];
        $pattern = str_repeat("*", $length - 2);
        $replaceWord = $firstChar . $pattern . $lastChar;
        $comment = str_ireplace($word, $replaceWord, $comment);
    }
    echo "<br><br>" . "Comment: " . $comment;
}
