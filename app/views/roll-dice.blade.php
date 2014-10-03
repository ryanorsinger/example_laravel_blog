<!doctype html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    <h1>Welcome to the 20 sided dice roller!</h1>
    <h2>You rolled {{{ $roll }}}</h2>
    <h2>You guessed {{{ $guess }}}</h2>
    @if($guess == $roll)
        {{{ "You guessed the roll." }}}
    @else
        {{{ "You didn't guess the roll." }}}
    @endif

</body>
</html>
