<?php

namespace App\Controllers\DiesManufacturingController;

use App\Controllers\BaseController;

class Dashboards extends BaseController
{
    public function index(): string
    {
        $head_page =
            '
            <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
            ';
        $js_page =
            '
            <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
            <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>
            ';

        $datapage = array(
            'titlepage' => "Dashboard",
            'head_page' => $head_page,
            'js_page'   => $js_page,
        );
        return view('content_page/dashboard', $datapage);
    }
}
