<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Quote::whereNull('deleted_at')->select('id', 'kalimat', 'pengarang', 'status')->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $btn = '<div class="d-flex">
                        <button type="button" title="EDIT"   class="btn btn-sm btn-biru me-1" data-bs-toggle="modal" data-bs-target="#updateData" 
                            data-id="'.$row->id.'"
                            data-kalimat="'.$row->kalimat.'"
                            data-pengarang="'.$row->pengarang.'"
                            data-status="'.$row->status.'"
                            data-url="'.route('quote.update', ['id' => $row->id]).'">
                            <i class="bi bi-pen"></i>
                        </button>
                        <form id="deleteForm" action="'.route('quote.delete', ['id' => $row->id]).'" method="POST">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                            <button type="button" title="DELETE" class="btn btn-sm btn-biru btn-delete" onclick="confirmDelete(event)">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        </div>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('crud.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            Quote::create($request->validated());

            DB::commit();

            return redirect()->back()->with(['message'=>'Quote berhasil ditambahkan','status'=>'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with(['message'=>$th->getMessage(),'status'=>'error']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
