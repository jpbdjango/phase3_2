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


<i class="ae flag"></i>
<i class="france flag"></i>
<i class="myanmar flag"></i>

<div class="ui animated button" tabindex="0">
  <div class="visible content">Next</div>
  <div class="hidden content">
    <i class="right arrow icon"></i>
  </div>
</div>
<div class="ui vertical animated button" tabindex="0">
  <div class="hidden content">Shop</div>
  <div class="visible content">
    <i class="shop icon"></i>
  </div>
</div>
<div class="ui animated fade button" tabindex="0">
  <div class="visible content">Sign-up for a Pro account</div>
  <div class="hidden content">$12.99 a month </div>
</div>

<div class="ui top attached button">Button before grid</div>
<div class="ui grid">
  <div class="sixteen wide column">sixteen</div>
  <div class="ten wide column">ten</div>
  <div class="six wide column">six</div>
</div>
<div class="ui grid">
  <div class="sixteen wide column">sixteen</div>
</div>
<div class="ui bottom attached button">Button after grid</div>
</div>

</div>
        
    </div> <!-- APP -->

        <script src="{{ URL::asset('js/app.js') }}"></script>
        <script src="{{ URL::asset('js/semantic.min.js') }}"></script>
        
        <script type="text/javascript">
            $(document).ready(function(){
                console.log('Jquery Loaded');                    
            });
        </script>

    </body>

</html>
