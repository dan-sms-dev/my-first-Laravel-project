<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Requests\HabitRequest;
use App\Models\HabitLog;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HabitController extends Controller
{
    use AuthorizesRequests;

    public function index(): View
    {
        $habits = Auth::user()->habits()
            ->with('habitLogs')
            ->get();

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
        $this->authorize('update', $habit);
        return view('habits.edit', compact('habit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HabitRequest $request, Habit $habit)
    {
        $this->authorize('update', $habit);

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
        $this->authorize('delete', $habit);

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
        $this->authorize('toggle', $habit);

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
