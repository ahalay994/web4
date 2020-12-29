<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\True_;

class AdminTypesController extends Controller
{
    protected $model = Type::class;

    public function anyData()
    {
        $query = Type::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.types.edit', ['id' => $row->id]), 'Редактировать', 'icon-pencil7', null],
                    [route('admin.types.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
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
        return view('admin::types.index');
    }

    public function edit($id) {
        $entity = $this->model::findOrFail($id);

        return view('admin::types.edit', ['entity' => $entity]);
    }

    public function update(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $entity = $this->model::findOrFail($data['id']);

        $entity->update($data);
        $entity->save();

        return redirect()->route('admin.types.index')
            ->with('msg.success', 'Запись сохранена.')
        ;
    }

    public function create() {
        return view('admin::types.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        $this->model::create($data);

        return redirect()->route('admin.types.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id)
    {
        $entity = $this->model::findOrFail($id);

        if ($entity->delete()) {
            return redirect()->route('admin.types.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.types.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }
}
