@extends('layouts.app')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">


                <!-- Top 10 Ranks -->
                <div class="col-md-6">
                    <h3 class="mb-4">Top 10 Ranks</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Player</th>
                            <th scope="col">Time</th>
                            <th scope="col">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mapTop10 as $value => $rank)
                            <tr>
                                <th scope="row">{{ $value+1 }}</th>
                                <td>{{ $rank->Name }}</td>
                                <td>{{ $rank->Time }}</td>
                                <td>{{ $rank->Timestamp }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Last 10 Ranks -->
                <div class="col-md-6">
                    <h3 class="mb-4">Last 10 Ranks</h3>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Rank</th>
                            <th scope="col">Player</th>
                            <th scope="col">Time</th>
                            <th scope="col">Timestamp</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($last10Finishes as $value => $rank)
                            <tr>
                                <th scope="row">{{ $value+1 }}</th>
                                <td>{{ $rank->Name }}</td>
                                <td>{{ $rank->Time }}</td>
                                <td>{{ $rank->Timestamp }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
