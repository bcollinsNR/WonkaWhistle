<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Wonka Whistle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto 
        }       
        body {
        background-image:url('pics/wonka.gif');
        }
        </style>
    </head>
    <body>
        <img class="center" src="pics/wonka.jpg" alt="BASED">        
        <button class="center" onclick="myFunction()" ceter>Play a tune!</button>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/howler.min.js"></script>
        <script type="text/javascript"> 

            var sound = new Howl({  urls: ['whistle.mp3']}); 
            function myFunction()
            {
              sound.play();
            }
            function closeIt()
            {
              return "It's all there, black and white, clear as crystal! You stole fizzy lifting drinks! You bumped into the ceiling which now has to be washed and sterilized, so you get nothing! You lose! Good day, sir!";
            }
          $( document ).ready(function() {            
            if ($.QueryString["alice"]) { //if we want lots of noise
                sound.play();         
                window.onbeforeunload = closeIt; // more annonyances :)
                window.setInterval(function () {
                 sound.play();         
              }, 3001); // repeat forever, starting sound every 1/2 second
            }
          });
          (function($) {
            $.QueryString = (function(a) {
                if (a == "") return {};
                var b = {};
                for (var i = 0; i < a.length; ++i)
                {
                    var p=a[i].split('=');
                    if (p.length != 2) continue;
                    b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
                }
                return b;
            })(window.location.search.substr(1).split('&'))
          })(jQuery);
        </script>
    </body>
</html>