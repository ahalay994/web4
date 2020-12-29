<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
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

        $data['teams'] = Team::orderBy('id', 'DESC')->get();

        return view('teams', $data);
    }

    public function indexItem(Request $request, $id) {
        $data = [];
        $data['title'] = 'Главная | ' . env('APP_NAME');
        $data['menu'] = $this->buildMenu();
        $data['settings'] = $this->buildSettings();

        $team = Team::whereId($id)->first();
        $data['team'] = $team;
        $data['gallery'] = $team->gallery;

        return view('teams_item', $data);
    }
}
