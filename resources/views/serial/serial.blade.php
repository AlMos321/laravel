@extends('layouts.app')

@section('content')

    <style>
        .wind{
            height: 160px;
            width: 145px;
            position: relative;
            display: inline-block;
            margin-left: 10px;
            margin-bottom: 5px;
            cursor: pointer;
        }
        .wind-img:hover{
            border: 2px solid #f39a5a;
            -moz-box-shadow: 0px 0px 1px #f39a5a;
            -webkit-box-shadow: 0px 0px 1px #f39a5a;
            box-shadow: 0px 0px 1px #f39a5a;
        }
        .wind-img{
            height: 130px;
            width: 140px;
        }
        .wind-name{
            margin-left: 4px;
            margin-right: 4px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
        }
        .wind-name:hover{
            text-decoration: underline;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">dd</div>
                    <div class="panel-body">
                        <div class="row">
                            @foreach ($serial as $ser)

                                    <div class="wind">
                                        <div class="wind-img" style='background-image: url("/uploads/serial/icon/{{$ser->images}}");'></div>
                                        <div class="wind-name">{{$ser->name}}</div>
                                    </div>

                            @endforeach
                        </div>
                        {{--{{$users->render()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

