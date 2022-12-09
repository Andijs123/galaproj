@extends('layouts.app')
@section('content')
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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <span>{{$articles[0]->user->name}}</span>
                    <span>{{$articles[0]->description}}</span>
                    <span>{{$articles[0]->title}}</span>
                    <span>{{$articles[0]->body}}</span>

                    {{ __('You are logged in ') }}{{Auth::user()->name}}!

                </div>
            </div>
        </div>
    </div>
</div>

<span>{{$articles[0]->user->name}}</span><br>
<span>{{$articles[0]->description}}</span><br>
<span>{{$articles[0]->title}}</span><br>
<span>{{$articles[0]->body}}</span><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <?php
                foreach ($articles as $key => $value) {
                echo'
                              <div class="kreisi">
                                 <img class="mr-3"
                                     src="https://images.pexels.com/photos/85773/pexels-photo-85773.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1/64x64"
                                     alt="Generic placeholder image" style="width:70px;height:70px;">
                             </div>
                             <div class="media-body">
                                 <h5 class="mt-0 mb-1" style="">',$articles[$key]->title,'</h5>
                                 <div>',$articles[$key]->description,'</div
                             </div>
                     '
                ;
                };
         ?>
            </div>
        </div>
    </div>
</div>

@endsection


