<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferHistoryController extends Controller
{
    public function TransferHistory()
    {
        return TransferHistory::all();
    }
}
