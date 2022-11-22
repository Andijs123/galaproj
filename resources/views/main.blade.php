<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script
  src="https://browser.sentry-cdn.com/7.20.1/bundle.min.js"
  integrity="sha384-ksXx74Cski/cokZPVeTXHKKlYYiMlbqL3Wl6IM4q/+7FFg1WyPyqabLu65X844KT"
  crossorigin="anonymous"
    ></script>
    <style> 


    </style>
</head>
<body>
    <input id = "input" type="form">
    <button id= "button" type="button">Click Me!</button>
</body>
    <script>
$("#button").click(function(){
    $.ajax({
    url: "https://eun1.api.riotgames.com/lol/summoner/v4/summoners/by-name/"+ $('#input').val() +"?api_key=RGAPI-9c17e0f4-a6a5-4ba2-9ab3-b16c0443212a",
    context: document.body,
    success:function(response){
        console.log(response)
        document.write(response).val()
    }
    }).done(function() {
        $( this ).addClass( "done" );
    });
});
    </script>

</body>
</html>
