<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}">
        
    </head>

    <body>
    
    <div id="app">
        
        <div class="container">
            <div class="row">
                <div class="col s12">This div is 12-columns wide</div>
                <div class="col s6">This div is 6-columns wide</div>
                <div class="col s6">This div is 6-columns wide</div>
            </div>
        </div>                

        <div class="valign-wrapper center-align" style="background-color: red; height: 100px">
            <h5 class="valign" style="background-color: green;">This should be vertically aligned</h5>
        </div>
        
    </div> <!-- APP -->

        <script src="{{ URL::asset('js/app.js') }}"></script>
        <script src="{{ URL::asset('js/materialize.js') }}"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                console.log('Jquery Loaded');                    
            });
        </script>

    </body>

</html>
