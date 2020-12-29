<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $data['slider'] = Slider::get();

        $data['teams'] = Team::orderBy('id', 'DESC')->limit(8)->get();
        $data['news'] = News::orderBy('published_at', 'DESC')->limit(8)->get();

        return view('home', $data);
    }


}
