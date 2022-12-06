@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>My profile</title>
        <style>
            .container {
                display: flex;
                align-content: center;
                justify-content: center;
            }

                {
                padding: 0;
                margin: 0;
                font-family: 'Poppins', sans-serif
            }

            .card {
                width: 450px;
                height: 470px;
                background-color: #fff;
                box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden
            }

            .card .info {
                padding: 15px;
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #e1dede;
                background-color: #e5e5e5
            }

            .card .info button {
                height: 30px;
                width: 80px;
                border: none;
                color: #fff;
                border-radius: 4px;
                background-color: #000;
                cursor: pointer;
                text-transform: uppercase
            }

            .card .forms {
                padding: 15px
            }

            .card .inputs {
                display: flex;
                flex-direction: column;
                margin-bottom: 10px
            }

            .card .inputs span {
                font-size: 12px
            }

            .card .inputs input {
                height: 40px;
                padding: 0px 10px;
                font-size: 17px;
                box-shadow: none;
                outline: none
            }

            .card .inputs input[type="text"][readonly] {
                border: 2px solid rgba(0, 0, 0, 0)
            }

            */
        </style>
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="info">
                    <span>Change profile info:</span>
                    <button id="savebutton">edit</button>
                </div>
                <div class="forms">
                    <div class="inputs">
                        <span>First name</span>
                        <input type="text" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="inputs">
                        <span>Last Name</span>
                        <input type="text" value="">
                    </div>
                    <div class="inputs">
                        <span>Email</span>
                        <input type="text" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="inputs">
                        <span>Password</span>
                        <input type="text" value="">
                    </div>
                    <div class="inputs">
                        <span>Country</span>
                        <input type="text" value="United States">
                    </div>
                </div>
            </div>
        </div>

    </html>
@endsection
