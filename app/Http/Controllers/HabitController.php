<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Requests\HabitRequest;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    public function index(): View
    {
        $habits = Auth::user()->habits()->orderBy('created_at', 'desc')->get();

        return view('dashboard', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('habits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HabitRequest $request)
    {
        $validated = $request->validated();

        Auth::user()->habits()->create($validated);

        return redirect()->route('habits.index')->with('success', 'Hábito criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação não autorizada.');
        }

        $habit->update($request->all());

        return redirect()
            ->route('site.dashboard')
            ->with('success', 'Hábito atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação não autorizada.');
        }

        $habit->delete();

        return redirect()
            ->route('habits.index')
            ->with('success', 'Hábito deletado com sucesso!');
    }

    public function settings()
    {
        $habits = Auth::user()->habits;
        return view('habits.settings', compact('habits'));
    }

    public function toggle(Habit $habit)
    {
        // 1.
        if ($habit->user_id !== Auth::user()->id) {
            abort(403, 'Ação não autorizada.');
        }

        // 2.
        $today = Carbon::today()->toDateString();

        $log = HabitLog::query()
            ->where('user_id', Auth::id())
            ->where('habit_id', $habit->id)
            ->whereDate('completed_at', $today)
            ->first();

        // 3.
        if ($log) {
            // 4.
            $log->delete();
            $message = 'Hábito desmarcado.';
        } else {
            // 5.
            HabitLog::create([
                'user_id' => Auth::user()->id,
                'habit_id' => $habit->id,
                'completed_at' => $today,
            ]);
            $message = 'Hábito concluído com sucesso 👏';
        }

        // 6.
        return redirect()
            ->route('habits.index')
            ->with('success', $message);
    }
}
