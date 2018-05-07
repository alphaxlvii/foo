<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: leo
 * Date: 2017/11/7
 * Time: 下午3:39
 */
class PipeController extends Controller
{
    public function post(Request $request)
    {
        $action = $request->input('action');
        $parameters = $request->input('parameters');
        $model = $request->input('model');

        dd($action, $parameters, $model);
    }
}