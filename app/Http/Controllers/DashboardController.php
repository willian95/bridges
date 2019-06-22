<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    function index(){

        $url = "https://apps.cbp.gov/bwt/bwt.xml";
        $ports = simplexml_load_file($url);

        $bridges = [];

        foreach($ports as $port){

            if($port->port_number != '' && strpos($port->crossing_name, "Bridge"))
            {   
                $bridges[] = [
                    "port_number" => $port->port_number,
                    "crossing_name" => $port->crossing_name,
                    "border" => $port->border,
                    "hours" => $port->hours,
                    "port_status" => $port->port_status
                ];
            }

        }

        return view('welcome', ['bridges' =>$bridges]);

    }

}
