<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request): \Illuminate\Contracts\Support\Renderable
    {
        $data = [];
        $data['title'] = 'Главная | ' . env('APP_NAME');
        $data['menu'] = $this->buildMenu();
        $data['settings'] = $this->buildSettings();

        $data['gallery'] = Gallery::orderBy('id', 'DESC')->get();

        return view('gallery', $data);
    }
}
