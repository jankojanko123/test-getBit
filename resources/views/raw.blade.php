@extends('layout.app')

@section('content')
    <style>
        body {
            background: #111111;
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#flip1").ready(function () {
                $("#panel1").slideDown("slow");
            });
            $("#flip1").click(function () {
                $("#panel1").slideDown("slow");
            });
        });
    </script>
    <div class="content text-center">
        <h1 class="pl-3 pt-5 ">Raw Output</h1>
        <div class="col pl-3 pr-3">

            <div class="content text-center">
                <h1 class="pl-3 pt-5">Your Block</h1>
                <div class="col pl-3">
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
            <div class="seperate pt-5" style="background: #111111">
                <h1>Block's TX items</h1>
            </div>
            <div class="pl-3" id="flip2">
                <div class="pt-0 " id="panel1">
                    <div class="content text-center pt-5" style="background: #111111">
                        <table> <!-- get all tx items too -->
                            @foreach($blocks->tx as $txItem)
                                <tr style="background: #1d643b; height: 60px">
                                    <td>TX Hash</td>
                                    <td>{{$txItem->hash}}</td>
                                </tr>
                                <tr>
                                    <td>TX Index</td>
                                    <td>{{$txItem->tx_index}}</td>
                                </tr>
                                <tr>
                                    <td>Version</td>
                                    <td>{{$txItem->ver}}</td>
                                </tr>
                                <tr>
                                    <td>Time</td>
                                    <td>{{date('H:i',$txItem->time)}} hrs</td>
                                </tr>
                                <tr>
                                    <td>Fee</td>
                                    <td>{{$txItem->fee}}</td>
                                </tr>
                                <tr>
                                    <td>Size</td>
                                    <td>{{$txItem->size}} bit</td>
                                </tr>
                                <tr>
                                    <td>Relayed by</td>
                                    <td>{{$txItem->relayed_by}}</td>
                                </tr>
                                <!-- display each item seperately -->
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pl-5 pt-5 pb-3">
        <a class="btn btn-success" href="{{ URL::previous() }}">Back</a>
    </div>


@endsection
