<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Role;

use Carbon\Carbon;

use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
{
    protected $model = \App\Models\User::class;

    public function anyData()
    {
        $query = User::get();

        return Datatables::of($query)
            ->addIndexColumn()
            ->addColumn('isActive', function($row) {
                return $row->active == 0 ? 'Активный' : 'Не активный';
            })
            ->addColumn('action', function($row){
                return admin_buttons([
                    [route('admin.users.edit', ['id' => $row->id]), 'Редактировать', 'icon-pencil7', null],
                    [route('admin.users.view', ['id' => $row->id]), 'Карточка', 'icon-profile', null],
                    [route('admin.users.delete', ['id' => $row->id]), 'Удалить', 'icon-bin', [
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
        return view('admin::users.index');
    }

    public function edit($id) {
        $entity = User::findOrFail($id);

        return view('admin::users.edit', ['entity' => $entity]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if (!isset($data['active'])) {
            $data['active'] = 0;
        }

        $entity = User::findOrFail($data['id']);

        $entity->update($data);

        $entity->save();

        return redirect()->route('admin.users.index')
            ->with('msg.success', 'Запись сохранена.')
        ;
    }

    public function create() {
        return view('admin::users.create');
    }

    public function save(Request $request) {
        $data = $request->all();

        if (!isset($data['active'])) {
            $data['active'] = 0;
        }

        User::create($data);

        return redirect()->route('admin.users.index')
            ->with('msg.success', 'Запись сохранена.')
            ;
    }

    public function destroy($id)
    {
        $entity = User::findOrFail($id);

        if ($entity->isAdmin()) {
            return redirect()->route('admin.users.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }

        if ($entity->delete()) {
            return redirect()->route('admin.users.index')
                ->with('msg.success', 'Запись удалена.');
        } else {
            return redirect()->route('admin.users.index')
                ->with('msg.error', 'Нельзя удалить запись.');
        }
    }

    public function view($id)
    {
        $entity = User::findOrFail($id);

        return view('admin::users.view', compact('entity'));
    }

}
