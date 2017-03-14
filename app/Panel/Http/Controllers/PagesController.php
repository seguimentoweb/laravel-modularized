<?php

namespace App\Panel\Http\Controllers;

class PagesController extends BaseController
{
    /**
     * @return \Illuminate\View\View
     */
    public function home()
    {

        return $this->view('panel::pages.home');
    }
}