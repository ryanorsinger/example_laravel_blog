<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/calculator.css">

</head>
<body>

<div class="calculator">
    <div id="lcd">
        <div id="output">.</div>
    </div>
    <div class="keys">

        <button><span id="7">7</span></button>
        <button><span id="8">8</span></button>
        <button><span id="9">9</span></button>
        <button><div class="operand" id="divide">÷</div></button>
        <br>
        <button><span id="4">4</span></button>
        <button><span id="5">5</span></button>
        <button><span id="6">6</span></button>
        <button><div class="operand" id="multiply">x</div></button>
        <br>
        <button><span id="1">1</span></button>
        <button><span id="2">2</span></button>
        <button><span id="3">3</span></button>
        <button><div class="operand" id="minus">-</div></button>
        <br>
        <button><span id="0">0</span></button>
        <button><span id="dot">.</span></button>
        <button><span id="=">=</span></button>
        <button><div class="operand" id="plus">+</div></button>
        <br>


    </div>

</div>

<script type="text/javascript">

var display = document.getElementById(output);

for(var i=0; i <= 9; i++)
{
    console.log('<span id="' + i + '"> ' + i + '</span>');
}


</script>
</body>
</html>
