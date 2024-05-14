<?php

namespace App\Http\Controllers;

use App\LogApi;
use Illuminate\Http\Request;

class LogApiController extends Controller
{
    public function index(Request $request)
    {
        $logsApi = LogApi::paginate(20);
        $viewData = [
            'logs' => $logsApi
        ];

        return view('log-api.index', $viewData);
    }

    public function delete(Request $request, $id)
    {
        LogApi::find($id)->delete();
        return redirect()->back();
    }
}
