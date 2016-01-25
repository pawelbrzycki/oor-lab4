<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8"/>
<title>jQuery - .queue()</title>
</head>
</html>



  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 <br><br><center>jQuery - .queue()<br><br><br><br><br>


<button id="start" class="button button1">Start</button>
<button id="stop" class="button button2">Stop</button>

<div></div>
 
<script>
$( "#start" ).click(function() {
  $( "div" )
    .show( "slow" )
    .animate({ left: "+=200" }, 5000 )
    .queue(function() {
      $( this ).addClass( "newcolor" ).dequeue();
    })
    .animate({ left: '-=200' }, 1500 )
    .queue(function() {
      $( this ).removeClass( "newcolor" ).dequeue();
    })
    .slideUp();
});
$( "#stop" ).click(function() {
  $( "div" )
    .queue( "fx", [] )
    .stop();
});
</script></center>
</body>
</html>