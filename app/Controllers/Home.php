<?php

namespace App\Controllers;

class Home extends BaseController
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
            'titlepage' => "Home",
            'head_page' => $head_page,
            'js_page'   => $js_page,
        );
        return view('content_page/dashboard', $datapage);
        // return view('layout_page/layout_page_1', $datapage);
        // return view('layout_page/layout_page_1');
    }
}
