@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .kreisi {
                float: left;
                padding-right: 15px;
            }

            .col-6 {
                text-align: center;
                margin-left: 12cm;
            }
        </style>
    </head>
    <?php
    $articles = DB::select('SELECT * from articles');
    foreach ($articles as $article) {
        echo $article->creator;
    }
    ?>

    <body>
        <div class="col-6">
            <h1>My posts</h1>
        </div>
        <div class="container">
            <ul class="list-unstyled">
                <li class="media">
                    <div class="media-body">
                        <div class="kreisi">
                            <img class="mr-3"
                                src="https://images.pexels.com/photos/85773/pexels-photo-85773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1/64x64"
                                alt="Generic placeholder image" style="width:70px;height:70px;">
                        </div>
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
                <li class="media my-4">
                    <div class="media-body">
                        <div class="kreisi">
                            <img class="mr-3"
                                src="https://images.pexels.com/photos/85773/pexels-photo-85773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1/64x64"
                                alt="Generic placeholder image" style="width:70px;height:70px;">
                        </div>
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
                <li class="media">
                    <div class="kreisi">
                        <img class="mr-3"
                            src="https://images.pexels.com/photos/85773/pexels-photo-85773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1/64x64"
                            alt="Generic placeholder image" style="width:70px;height:70px;">
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0 mb-1" style="">List-based media object</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                        vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </li>
            </ul>
        </div>
    </body>

    </html>
@endsection
