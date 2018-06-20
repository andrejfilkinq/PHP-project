@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/foto.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in admin!<br/>
                    {{ Auth::user()->images }}<br/>
                    <!--{!!Html::image('foto_user/'.Auth::user()->images) !!}-->
                    <img style="width:130px;" src="foto_user/{{Auth::user()->images}}"class="round">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
