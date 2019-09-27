<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Roboto&display=swap" rel="stylesheet">
    <script src="headlineani.js"></script>
    <script src="generator.js"></script>
    <title>Random Joke Generator</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body onload="generator()">
   
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=UL3t1V1c"></script>
    <div class="jokewrapper"></div>
    <div class="bg1"><div id="text"></div></div>
    <div class="bg2"><button onclick="generator(), responsiveVoice.speak($('#text').text(), 'Danish Female')" type='button' value='🔊 Play'>Ny Joke!</button></div>
    <div class="bg3"></div>
    <div class="bg4"></div>
</body>
</html>