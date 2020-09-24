<?php

/*
 * LibreNMS
 *
 * Copyright (c) 2016 Aaron Daniels <aaron@daniels.id.au>
 *
 * This program is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the
 * Free Software Foundation, either version 3 of the License, or (at your
 * option) any later version.  Please see LICENSE.txt at the top level of
 * the source code distribution for details.
 */

if (! Auth::user()->hasGlobalAdmin()) {
    exit('ERROR: You need to be admin');
}

$service_template_id = $vars['service_template_id'];

if (is_numeric($service_template_id) && $service_template_id > 0) {
    $service_template = service_template_get($service_template_id);

    $output = [
        'device_group_id' => $service[0]['device_group_id'],
        'stype'     => $service[0]['service_type'],
        'desc'      => $service[0]['service_desc'],
        'ip'        => $service[0]['service_ip'],
        'param'     => $service[0]['service_param'],
        'ignore'    => $service[0]['service_ignore'],
        'disabled'  => $service[0]['service_disabled'],
    ];

    header('Content-Type: application/json');
    echo _json_encode($output);
}