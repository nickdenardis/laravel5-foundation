<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller {

    /**
     * Homepage
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages/index');
    }
}
