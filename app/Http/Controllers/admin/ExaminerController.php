<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Examiner;
use Illuminate\Http\Request;

class ExaminerController extends Controller
{
    public function index()
    {
        $examiners = Examiner::paginate(10);
        return view('pages.admin.penguji.index', compact('examiners'));
    }

    public function create()
    {
        return view('pages.admin.penguji.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        Examiner::create($request->all());

        return redirect()->route('penguji.index')
            ->with('success', 'Examiner created successfully.');
    }

    public function edit($id)
    {
        $examiner = Examiner::findOrFail($id);
        return view('pages.admin.penguji.edit', compact('examiner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $examiner = Examiner::findOrFail($id);
        $examiner->update($request->all());

        return redirect()->route('examiners.index')
            ->with('success', 'Examiner updated successfully.');
    }

    public function destroy($id)
    {
        $examiner = Examiner::findOrFail($id);
        $examiner->delete();

        return redirect()->route('examiners.index')
            ->with('success', 'Examiner deleted successfully.');
    }
}
