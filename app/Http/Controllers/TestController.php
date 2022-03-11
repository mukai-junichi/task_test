<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();

        $tests = DB::table('tests')
                    ->select('id')
                    ->get();
        dd($tests);

        return view('tests.test', compact('values'));
    }
}
