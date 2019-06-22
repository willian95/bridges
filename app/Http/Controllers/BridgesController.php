<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BridgesController extends Controller
{
    function search($port_number){

        $url = "https://apps.cbp.gov/bwt/bwt.xml";
        $ports = simplexml_load_file($url);

        $data = [];

        foreach($ports as $port){

            if($port->port_number == $port_number)
            {   
                
                $data[] = [
                    'port_number' => $port->port_number,
                    'crossing_name' => $port->crossing_name,
                    'border' => $port->border,
                    'hours' => $port->hours,
                    'port_status' => $port->port_status,

                    'comercial_standard_status' => $port->commercial_vehicle_lanes->standard_lanes->operational_status,
                    'comercial_standard_delay_minutes' => $port->commercial_vehicle_lanes->standard_lanes->delay_minutes,
                    'comercial_standard_lanes_open' => $port->commercial_vehicle_lanes->standard_lanes->lanes_open,
                    'comercial_fast_status' => $port->commercial_vehicle_lanes->FAST_lanes->operational_status,
                    'comercial_fast_delay_minutes' => $port->commercial_vehicle_lanes->FAST_lanes->delay_minutes,
                    'comercial_fast_lanes_open' => $port->commercial_vehicle_lanes->standard_lanes->lanes_open,

                    'passenger_standard_status' => $port->passenger_vehicle_lanes->standard_lanes->operational_status,
                    'passenger_standard_delay_minutes' => $port->passenger_vehicle_lanes->standard_lanes->delay_minutes,
                    'passenger_standard_lanes_open' => $port->passenger_vehicle_lanes->standard_lanes->lanes_open,
                    'passenger_NEXUS_SENTRI_status' => $port->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->operational_status,
                    'passenger_NEXUS_SENTRI_delay_minutes' => $port->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->delay_minutes,
                    'passenger_NEXUS_SENTRI_lanes_open' => $port->passenger_vehicle_lanes->NEXUS_SENTRI_lanes->lanes_open,
                    'passenger_ready_status' => $port->passenger_vehicle_lanes->ready_lanes->operational_status,
                    'passenger_ready_delay_minutes' => $port->passenger_vehicle_lanes->ready_lanes->delay_minutes,
                    'passenger_ready_lanes_open' => $port->passenger_vehicle_lanes->ready_lanes->lanes_open,

                    'pedestrian_standard_status' => $port->pedestrian_lanes->standard_lanes->operational_status,
                    'pedestrian_standard_delay_minutes' => $port->pedestrian_lanes->standard_lanes->delay_minutes,
                    'pedestrian_standard_lanes_open' => $port->pedestrian_lanes->standard_lanes->lanes_open,
                    'pedestrian_ready_status' => $port->pedestrian_lanes->ready_lanes->operational_status,
                    'pedestrian_ready_delay_minutes' => $port->pedestrian_lanes->ready_lanes->delay_minutes,
                    'pedestrian_ready_lanes_open' => $port->pedestrian_lanes->ready_lanes->lanes_open,

                ];

                break;
                
            }

        }
        
        return view('bridge', ['data' => $data]);

    }
}
