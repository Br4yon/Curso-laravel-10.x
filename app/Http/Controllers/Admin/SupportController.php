<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {

        return view('admin.supports.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Support::create([
            'subject' => $data['subject'],
            'body' => $data['body'],
        ]);

        return redirect()->route('supports.index');
    }
}
