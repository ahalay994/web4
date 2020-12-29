<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Slider;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminSliderController extends Controller
{
    protected $model = \App\Models\Slider::class;

    public function anyData()
    {
        $query = Slider::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->editColumn('image', function($row) {
                return '/' . Slider::IMAGE_PATH . '/' . $row->image;
            })
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.slider.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
                        'data-method' => 'delete',
                        'data-confirm' => 'Вы действительно хотите это удалить?',
                    ]],
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function index()
    {
        return view('admin::slider.index');
    }

    public function edit() {
        $entity = $this->model::get();

        return view('admin::slider.edit', ['entity' => $entity]);
    }

    public function create() {
        return view('admin::slider.create');
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $imageName = null;

        if (count($data['image']) > 0) {
            foreach($data['image'] as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path(Slider::IMAGE_PATH), $imageName);
                $this->model::create([
                    'image' => $imageName
                ]);
            }
        }

        return redirect()->route('admin.slider.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id)
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.slider.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.slider.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }
}
