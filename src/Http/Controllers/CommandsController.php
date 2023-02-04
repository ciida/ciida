<?php

namespace Ciida\Ciida\Http\Controllers;

use Illuminate\View\View;

class CommandsController extends Controller
{
    public function index(): View
    {
        return view('ciida::commands.index');
    }
}