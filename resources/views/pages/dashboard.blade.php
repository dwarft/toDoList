@extends('master')
@section('content')

<div class="bg-[#F4F5F7] min-h-screen p-8">

    {{-- HEADER --}}
    <div class="flex items-center justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">Good morning, {{ auth()->user()->name ?? 'Sajibur' }}</h1>
            <p class="text-sm text-slate-400 mt-1">Stay on top of your tasks, monitor progress, and track status.</p>
        </div>

        <div class="flex items-center gap-3">
            <div class="flex items-center gap-1 bg-white rounded-full p-1 border border-slate-100 shadow-sm">
                <a href="#" class="px-4 py-1.5 rounded-full bg-slate-900 text-white text-sm font-medium">Overview</a>
                <a href="#" class="px-4 py-1.5 rounded-full text-slate-500 text-sm font-medium hover:bg-slate-50">Activity</a>
                <a href="#" class="px-4 py-1.5 rounded-full text-slate-500 text-sm font-medium hover:bg-slate-50">Reports</a>
            </div>

            <div class="flex items-center gap-2 bg-white rounded-full pl-3 pr-4 py-1.5 border border-slate-100 shadow-sm">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'Sajibur Rahman') }}&background=FF6B35&color=fff&bold=true"
                     class="w-8 h-8 rounded-full" alt="avatar">
                <div class="text-left">
                    <p class="text-xs font-semibold text-slate-800 leading-none">{{ auth()->user()->name ?? 'Sajibur Rahman' }}</p>
                    <p class="text-[11px] text-slate-400 mt-0.5">{{ auth()->user()->email ?? 'sajibur@gmail.com' }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

        {{-- TASK SUMMARY --}}
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <div class="flex items-center justify-between mb-2">
                <p class="text-sm text-slate-400">Total Tasks</p>
                <span class="text-xs font-medium bg-slate-100 text-slate-600 px-2 py-0.5 rounded-full">This week</span>
            </div>
            <h2 class="text-3xl font-bold text-slate-900">128 Tasks</h2>
            <p class="text-xs text-emerald-500 font-medium mt-1">↑ 12% than last week</p>

            <div class="flex gap-3 mt-5">
                <button class="flex-1 bg-slate-900 text-white text-sm font-medium py-2.5 rounded-xl hover:bg-slate-800 transition">
                    + New Task
                </button>
                <button class="flex-1 bg-slate-50 text-slate-700 text-sm font-medium py-2.5 rounded-xl hover:bg-slate-100 transition">
                    View All
                </button>
            </div>

            <p class="text-xs text-slate-400 mt-6 mb-3">Categories · 4 total</p>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-slate-50 rounded-xl p-3">
                    <p class="text-xs font-semibold text-slate-700">Work</p>
                    <p class="text-[11px] text-slate-400 mt-1">42 tasks</p>
                    <span class="inline-block mt-2 text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Active</span>
                </div>
                <div class="bg-slate-50 rounded-xl p-3">
                    <p class="text-xs font-semibold text-slate-700">Personal</p>
                    <p class="text-[11px] text-slate-400 mt-1">18 tasks</p>
                    <span class="inline-block mt-2 text-[10px] font-semibold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-full">Active</span>
                </div>
            </div>
        </div>

        {{-- QUICK STATS 2x2 --}}
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-[#FF6B35] rounded-2xl p-5 text-white">
                <p class="text-xs text-white/80">Completed</p>
                <h3 class="text-2xl font-bold mt-1">86</h3>
                <p class="text-[11px] text-white/80 mt-2">↑ 7% This month</p>
            </div>
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400">Overdue</p>
                <h3 class="text-2xl font-bold text-slate-900 mt-1">5</h3>
                <p class="text-[11px] text-rose-500 mt-2">↓ 5% This month</p>
            </div>
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400">In Progress</p>
                <h3 class="text-2xl font-bold text-slate-900 mt-1">24</h3>
                <p class="text-[11px] text-emerald-500 mt-2">↑ 8% This month</p>
            </div>
            <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
                <p class="text-xs text-slate-400">Pending</p>
                <h3 class="text-2xl font-bold text-slate-900 mt-1">13</h3>
                <p class="text-[11px] text-emerald-500 mt-2">↑ 4% This month</p>
            </div>
        </div>

        {{-- PRODUCTIVITY CHART --}}
        <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <div class="flex items-center justify-between mb-1">
                <h3 class="text-sm font-semibold text-slate-800">Productivity</h3>
            </div>
            <p class="text-xs text-slate-400 mb-4">Tasks completed vs created over time</p>

            <div class="flex items-center gap-4 text-[11px] text-slate-500 mb-2">
                <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-[#FF6B35] inline-block"></span> Completed</span>
                <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-slate-800 inline-block"></span> Created</span>
            </div>

            <canvas id="productivityChart" height="160"></canvas>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        {{-- LEFT COLUMN --}}
        <div class="space-y-6">

            {{-- WEEKLY GOAL --}}
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                <h3 class="text-sm font-semibold text-slate-800 mb-4">Weekly Goal</h3>
                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                    <div class="h-full bg-[#FF6B35] rounded-full" style="width: 65%"></div>
                </div>
                <p class="text-xs text-slate-400 mt-3">32 tasks completed out of 50 goal</p>
            </div>

            {{-- TEAM MEMBERS --}}
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-sm font-semibold text-slate-800">Team Members</h3>
                    <button class="text-xs font-medium text-[#FF6B35] flex items-center gap-1">+ Add member</button>
                </div>

                <div class="flex gap-3">
                    <div class="flex-1 bg-slate-900 rounded-xl p-4 text-white relative overflow-hidden">
                        <span class="text-[10px] font-semibold bg-emerald-500/20 text-emerald-400 px-2 py-0.5 rounded-full">Online</span>
                        <p class="text-sm font-semibold mt-3">Sarah Lee</p>
                        <p class="text-[11px] text-white/50">UI Designer</p>
                    </div>
                    <div class="flex-1 bg-[#FF6B35] rounded-xl p-4 text-white relative overflow-hidden">
                        <span class="text-[10px] font-semibold bg-white/20 text-white px-2 py-0.5 rounded-full">Away</span>
                        <p class="text-sm font-semibold mt-3">Dimas A.</p>
                        <p class="text-[11px] text-white/70">Backend Dev</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- RECENT TASKS TABLE --}}
        <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-sm">
            <div class="flex items-center justify-between mb-5">
                <h3 class="text-sm font-semibold text-slate-800">Recent Activities</h3>
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2 bg-slate-50 rounded-lg px-3 py-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        <input type="text" placeholder="Search" class="bg-transparent text-xs outline-none w-24 placeholder:text-slate-400">
                    </div>
                    <button class="text-xs font-medium text-slate-600 bg-slate-50 px-3 py-1.5 rounded-lg">Filter</button>
                </div>
            </div>

            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-xs text-slate-400 border-b border-slate-100">
                        <th class="pb-3 font-medium">Task ID</th>
                        <th class="pb-3 font-medium">Task</th>
                        <th class="pb-3 font-medium">Assignee</th>
                        <th class="pb-3 font-medium">Status</th>
                        <th class="pb-3 font-medium">Due Date</th>
                    </tr>
                </thead>
                <tbody class="text-slate-700">
                    @php
                        $tasks = [
                            ['TSK-0076', 'Design mobile app', 'Sarah Lee', 'Completed', '17 Apr, 2026'],
                            ['TSK-0075', 'Client meeting prep', 'Dimas A.', 'Pending', '15 Apr, 2026'],
                            ['TSK-0074', 'Fix login bug', 'You', 'Completed', '15 Apr, 2026'],
                            ['TSK-0073', 'Write documentation', 'Sarah Lee', 'In Progress', '14 Apr, 2026'],
                            ['TSK-0073', 'Update dependencies', 'Dimas A.', 'Completed', '10 Apr, 2026'],
                        ];
                        $statusStyle = [
                            'Completed' => 'bg-emerald-50 text-emerald-600',
                            'Pending' => 'bg-amber-50 text-amber-600',
                            'In Progress' => 'bg-blue-50 text-blue-600',
                        ];
                    @endphp

                    @foreach ($tasks as $t)
                    <tr class="border-b border-slate-50 last:border-0 hover:bg-slate-50/50 transition">
                        <td class="py-3 text-xs text-slate-400">{{ $t[0] }}</td>
                        <td class="py-3 font-medium">{{ $t[1] }}</td>
                        <td class="py-3 text-xs text-slate-500">{{ $t[2] }}</td>
                        <td class="py-3">
                            <span class="text-[11px] font-semibold px-2.5 py-1 rounded-full {{ $statusStyle[$t[3]] }}">{{ $t[3] }}</span>
                        </td>
                        <td class="py-3 text-xs text-slate-400">{{ $t[4] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
<script>
    const ctx = document.getElementById('productivityChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
            datasets: [
                {
                    label: 'Completed',
                    data: [22, 35, 28, 40, 45, 38, 30],
                    backgroundColor: '#FF6B35',
                    borderRadius: 6,
                    barThickness: 10,
                },
                {
                    label: 'Created',
                    data: [12, 18, 14, 20, 15, 12, 10],
                    backgroundColor: '#1E293B',
                    borderRadius: 6,
                    barThickness: 10,
                }
            ]
        },
        options: {
            plugins: { legend: { display: false } },
            scales: {
                x: { grid: { display: false } },
                y: { grid: { color: '#F1F5F9' }, ticks: { stepSize: 10 } }
            }
        }
    });
</script>
@endpush
@endsection