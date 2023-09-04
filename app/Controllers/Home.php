<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // $head_page =
        //     '
        //     <link href="' . base_url() . 'assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        //     ';
        // $js_page =
        //     '
        //     <script src="' . base_url() . 'assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        //     <script src="' . base_url() . 'assets/libs/metismenujs/metismenujs.min.js"></script>
        //     <script src="' . base_url() . 'assets/libs/simplebar/simplebar.min.js"></script>
        //     <script src="' . base_url() . 'assets/libs/eva-icons/eva.min.js"></script>

        //     ';

        // $datapage = array(
        //     // 'head_page' => $head_page,
        //     'js_page'   => $js_page,
        // );
        // return view('layout_page/layout_page_1', $datapage);
        return view('layout_page/layout_page_1');
    }
}
