<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackages;
use App\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view(
            'pages.admin.dashboard',
            [
                'travel_package' => TravelPackages::count(),
                'transaction' => Transaction::count(),
                'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
                'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),

            ]
        );
    }
}
