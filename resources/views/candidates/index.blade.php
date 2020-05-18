<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comment</title>

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
                   
                    <div><a href =  "{{url('/candidates/create')}}"> Add new candidate</a></div>
                    <h1>List of candidates</h1>
                    <table>
                        <tr>
                            <th>id</th><th>Name</th><th>Email</th><th>Created</th><th>Updated</th>
                        </tr>
                        <!-- the table data -->
                        @foreach($candidates as $candidate)
                            <tr>
                                <td>{{$candidate->id}}</td>
                                <td>{{$candidate->name}}</td>
                                <td>{{$candidate->email}}</td>
                                <td>{{$candidate->created_at}}</td>
                                <td>{{$candidate->updated_at}}</td>
                            </tr>
                        @endforeach
                    </table>

    </body>
</html>
