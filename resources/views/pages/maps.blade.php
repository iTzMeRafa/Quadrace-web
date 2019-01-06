@extends('layouts.app')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                @foreach($maps as $map)
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a href="{{ route('map', ['map' => $map->Map]) }}">
                                <img class="card-img-top" src="{{ asset('img/thumbnail.png') }}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <a href="{{ route('map', ['map' => $map->Map]) }}">
                                    <p class="card-text">{{ $map->Map }}</p>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!--
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    -->
                                    <small class="text-muted">{{ $map->finishes }} finishes</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

@endsection
