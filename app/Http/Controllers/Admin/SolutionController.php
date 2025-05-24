<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = DB::table('solutions')->orderBy('created_at', 'desc')->get();
        return view('admin.solutions.index', compact('solutions'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $imagePath = $request->file('image')->store('solutions', 'public');

            $id = DB::table('solutions')->insertGetId([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $imagePath,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            DB::commit();

            $solution = DB::table('solutions')->find($id);
            return response()->json([
                'success' => true,
                'solution' => $solution,
                'message' => 'Решение успешно добавлено'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Ошибка базы данных: ' . $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        $solution = DB::table('solutions')->find($id);
        return response()->json($solution);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        DB::beginTransaction();
        try {
            $data = [
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'updated_at' => now()
            ];

            if ($request->hasFile('image')) {
                $oldImage = DB::table('solutions')->where('id', $id)->value('image');
                Storage::disk('public')->delete($oldImage);
                $data['image'] = $request->file('image')->store('solutions', 'public');
            }

            DB::table('solutions')->where('id', $id)->update($data);
            DB::commit();

            $solution = DB::table('solutions')->find($id);
            return response()->json([
                'success' => true,
                'solution' => $solution,
                'message' => 'Решение успешно обновлено'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Ошибка базы данных: ' . $e->getMessage()
            ], 500);
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $solution = DB::table('solutions')->where('id', $id)->first();
            if ($solution) {
                Storage::disk('public')->delete($solution->image);
                DB::table('solutions')->where('id', $id)->delete();
            }

            DB::commit();
            return response()->json([
                'success' => true,
                'message' => 'Решение успешно удалено'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Ошибка при удалении: ' . $e->getMessage()
            ], 500);
        }
    }
}
