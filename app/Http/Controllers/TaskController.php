<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;




class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all(); 
        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::categories();
        return view('task.create', compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'nullable|boolean',
            'due_date' => 'nullable|date',
            'category_id' => 'required|exists:categories,id'
        ],
        [],//custom message
        ['category_id' => 'Category'] //custom attribute
    );
    
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->input('completed', false),
            'due_date' => $request->due_date,
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id
        ]);
    
        return redirect()->route('task.show', $task->id)->with('success', 'Task created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {   
        return view('task.show', ['task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('task.edit', ['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     * @param $request represents the incoming HTTP request
     * @param $task    represents the task to be updated
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'nullable|boolean',
            'due_date' => 'nullable|date',
        ]);
    
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->input('completed', false),
            'due_date' => $request->due_date,
        ]);
    
        return redirect()->route('task.show', $task->id)->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
    
        return redirect()->route('task.index')->with('success', 'Task deleted successfully.');
    }

    public function completed($completed){
        $tasks = Task::where('completed', $completed)->get();
        return view('task.index', ["tasks" => $tasks]);
    }

/* public function pdf(Task $task){
    $pdf = new Dompdf();
    $pdf->setPaper('letter', 'portrait');
    $pdf->loadHtml(view('task.show-pdf', ["task" => $task]));
    $pdf->render();
    return $pdf->stream('task.pdf');
} */

public function pdf(Task $task){
    $qrCode = QrCode::size(200)->generate(route('task.show', $task->id));
    $pdf = new Dompdf();
    $pdf->setPaper('letter', 'portrait');
    $pdf->loadHtml(view('task.show-pdf', ["task" => $task, "qrCode"=> $qrCode]));
    $pdf->render();
    return $pdf->stream('task.pdf');
}

    
}
