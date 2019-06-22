@extends('layouts.main')

@push('styles')

    <style>
        .bridges-info i{
            margin-right: 10px;
        }
    </style>

@endpush

@section('content')

    <div class="container bridges-info">

        @foreach($data as $info)

            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">{{ $info['crossing_name'] }}</h2>
                    <h4 class="text-center">{{ $info['border'] }}</h4>
                    <h4 class="text-center"><i class="fas fa-clock"></i>{{ $info['crossing_name'] }}</h4>
                    @if($info['port_status'] == 'CLOSED')
                        <h4 class="text-center"><i class="fas fa-lock"></i>{{ $info['port_status'] }}</h4>
                    @else
                        <h4 class="text-center"><i class="fas fa-unlock"></i>{{ $info['port_status'] }}</h4>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card services-box">
                        <div class="card-body p-4">
                            <h3 class="mb-3 text-center">Canal Comercial</h3>
                            <hr>
                            <h5>Canal standard</h5>
                            @if(strlen($info['comercial_standard_status']) > 0)
                                <p>Status: {{ $info['comercial_standard_status'] }}</p>
                            @endif
                            @if(strlen($info['comercial_standard_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['comercial_standard_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['comercial_standard_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['comercial_standard_lanes_open'] }}</p>
                            @endif
                            <hr>
                            <h5>Canal rápido</h5>
                            @if(strlen($info['comercial_fast_status']) > 0)
                                <p>Status: {{ $info['comercial_fast_status'] }}</p>
                            @endif
                            @if(strlen($info['comercial_fast_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['comercial_fast_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['comercial_fast_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['comercial_fast_lanes_open'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card services-box">
                        <div class="card-body p-4">
                            <h3 class="mb-3 text-center">Canal Pasajeros</h3>
                            <hr>
                            <h5>Canal standard</h5>
                            @if(strlen($info['passenger_standard_status']) > 0)
                                <p>Status: {{ $info['passenger_standard_status'] }}</p>
                            @endif
                            @if(strlen($info['passenger_standard_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['passenger_standard_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['passenger_standard_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['passenger_standard_lanes_open'] }}</p>
                            @endif
                            <hr>
                            <h5>Canal Nexus Sentri</h5>
                            @if(strlen($info['passenger_NEXUS_SENTRI_status']) > 0)
                                <p>Status: {{ $info['passenger_NEXUS_SENTRI_status'] }}</p>
                            @endif
                            @if(strlen($info['passenger_NEXUS_SENTRI_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['passenger_NEXUS_SENTRI_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['passenger_NEXUS_SENTRI_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['passenger_NEXUS_SENTRI_lanes_open'] }}</p>
                            @endif
                            <h5>Canal listo</h5>
                            @if(strlen($info['passenger_ready_status']) > 0)
                                <p>Status: {{ $info['passenger_ready_status'] }}</p>
                            @endif
                            @if(strlen($info['passenger_ready_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['passenger_ready_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['passenger_ready_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['passenger_ready_lanes_open'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card services-box">
                        <div class="card-body p-4">
                            <h3 class="mb-3 text-center">Canal Peatones</h3>
                            <hr>
                            <h5>Canal standard</h5>
                            @if(strlen($info['pedestrian_standard_status']) > 0)
                                <p>Status: {{ $info['pedestrian_standard_status'] }}</p>
                            @endif
                            @if(strlen($info['pedestrian_standard_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['pedestrian_standard_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['pedestrian_standard_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['pedestrian_standard_lanes_open'] }}</p>
                            @endif
                            <hr>
                            <h5>Canal listo</h5>
                            @if(strlen($info['pedestrian_ready_status']) > 0)
                                <p>Status: {{ $info['pedestrian_ready_status'] }}</p>
                            @endif
                            @if(strlen($info['pedestrian_ready_delay_minutes']) > 0)
                                <p>Retraso: {{ $info['pedestrian_ready_delay_minutes'] }} minutos</p>
                            @endif
                            @if(strlen($info['pedestrian_ready_lanes_open']) > 0)
                                <p>Canales abiertos: {{ $info['pedestrian_ready_lanes_open'] }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection