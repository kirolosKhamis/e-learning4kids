@extends('Frontend.master')
<!DOCTYPE html>
<html>
    <head>
        <title>Calculate expression based on other answers - Expression question, jQuery Survey Library Example</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://unpkg.com/jquery"></script>
        <script src="https://surveyjs.azureedge.net/1.0.60/survey.jquery.js"></script>
        <link href="https://surveyjs.azureedge.net/1.0.60/survey.css" type="text/css" rel="stylesheet"/>
        <!-- <link rel="stylesheet" href="style.css"> -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Learning for Kids</title>
        <link rel="icon" href="{{asset('images/icon2.jpg')}}" />
        <link rel='stylesheet'href ="{{asset('css/bootstrap.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/font-awesome.min.css')}}"/>
        <link rel='stylesheet'href ="{{asset('css/style.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/media.css')}}"/>
        <link rel='stylesheet'href="{{asset('css/animate.css')}}"/>
    </head>
    <body>
        <div id="surveyElement"></div>
        <div id="surveyResult"></div>
        <script type="text/javascript" src="{{asset('js/file.js')}}"></script>

    </body>
</html>


