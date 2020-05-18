<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit candidate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>               
        <h1>Edit candidate</h1>
        <form method = "post" action = "{{action('CandidatesController@update',$candidate->id)}}">
        @csrf 
        <div>
            <label for = "name">Candiadte name</label>
            <input type = "text" name = "name" value = {{$candidate->name}}>
        </div>     
        <div>
            <label for = "email">Candiadte email</label>
            <input type = "text" name = "email" value = {{$candidate->email}}>
        </div> 
        <div>
            <input type = "submit" name = "submit" value = "Update candidate">
        </div>                       
        </form>    
    </body>
</html>
