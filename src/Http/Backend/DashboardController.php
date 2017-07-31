<?php

namespace Culture\Framework\Http\Backend;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return 'Welcome to the Dashboard.';
    }
}