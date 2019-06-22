@extends('layouts.main')

@section('content')

@push('styles')
    <style>
        .services-box i{
            margin-right: 10px;
        }
    </style>
@endpush

<div class="container-fluid">

        <!-- start page title -->
        <div class="page-title-alt-bg"></div>
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div> 
        <!-- end page title -->

        <div class="row">

            @foreach($bridges as $bridge)

                <div class="col-lg-4 col-sm-6">
                    <div class="card services-box">
                        <div class="card-body p-4">
                            <h4 class="mb-3">{{ $bridge['crossing_name'] }}</h4>
                            <p>{{ $bridge['border'] }}</p>
                            <p><i class="fas fa-clock"></i>{{ $bridge['hours'] }}</p>
                            @if($bridge == 'CLOSED')
                                <p><i class="fas fa-lock"></i>{{ $bridge['port_status'] }}</p>
                            @else
                                <p><i class="fas fa-unlock"></i>{{ $bridge['port_status'] }}</p>
                            @endif  
                            <a href="{{ url('/bridge/'.$bridge['port_number']) }}" class="text-primary">Learn more <i class="mdi mdi-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

            @endforeach
            

        </div>
        


@endsection
