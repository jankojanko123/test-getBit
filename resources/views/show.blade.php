@extends('layout.app')
@section('content')

<div class="">


    <div class="content text-center">
        <h1 class="pl-3 pt-5">Your Block</h1>
        <div class="col pl-3 pr-3">


            <h3 style="color: gold">Block HashID: {{$blocks->hash}}</h3>

            <table>
                <tr>
                    <td>Version</td>
                    <td>{{$blocks->ver}}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{date('H:i',$blocks->time)}} hrs</td>
                </tr>
                <tr>
                    <td>Fee</td>
                    <td>{{$blocks->fee}}</td>
                </tr>
                <tr>
                    <td>Nonce</td>
                    <td>{{$blocks->nonce}}</td>
                </tr>
                <tr>
                    <td>Size</td>
                    <td>{{$blocks->size}} bit</td>
                </tr>
            </table>
        </div>
    </div>




    <div class="pl-5 pt-5">
        <a class="btn btn-success" href="{{ URL::previous() }}">Back</a>

        <a class="btn btn-primary" href="http://localhost/getBlock/public/show/raw">Raw</a>
    </div>
</div>
@endsection
