<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    <h1>Welcome to the 20 sided dice roller!</h1>
    <h2>You rolled <?php echo "$roll" ?></h2>
    <h2>You guessed <?php echo "$guess" ?></h2>
    <?php if ($guess == $roll) {
        echo "\n You guessed the roll.";
    } else {
        echo "\n You didn't guess the roll.";
    }
    ?>

</body>
</html>
