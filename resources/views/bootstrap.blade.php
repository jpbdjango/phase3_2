<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    </head>

    <body>
    
    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Hello</h1>  
                </div>
                <div class="col-md-4">
                    <h1>4</h1>
                </div>
            </div>
        </div>

    </div> <!-- APP -->

        <script src="{{ URL::asset('js/app.js') }}"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                console.log('Jquery Loaded');                    
            });
        </script>

    </body>

</html>
