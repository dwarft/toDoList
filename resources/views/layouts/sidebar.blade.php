<div class="sidebar flex flex-col justify-between bg-linear-to-b from-[#200533] to-[#400C48] h-screen w-[16em] px-5 py-6 shadow-2xl">

    {{-- BRAND / LOGO --}}
    <div>
        <div class="flex items-center gap-2 px-1 mb-8">
            <div class="w-8 h-8 rounded-lg bg-amber-500/15 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-amber-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 11l3 3L22 4" />
                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                </svg>
            </div>
            <h2 class="font-bold text-white text-xl tracking-tight">Task<span class="text-amber-500">er</span></h2>
        </div>

        {{-- MAIN NAVIGATION --}}
        <p class="text-[11px] uppercase tracking-wider text-white/40 font-semibold px-3 mb-2">Menu</p>
        <ul class="text-sm text-white/80 space-y-1">

            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg bg-white/10 text-white font-medium relative">
                    <span class="absolute left-0 top-1/2 -translate-y-1/2 h-5 w-[3px] rounded-r-full bg-amber-500"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="9" rx="1.5" />
                        <rect x="14" y="3" width="7" height="5" rx="1.5" />
                        <rect x="14" y="12" width="7" height="9" rx="1.5" />
                        <rect x="3" y="16" width="7" height="5" rx="1.5" />
                    </svg>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/70 hover:text-white hover:bg-white/5 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0 text-white/40 group-hover:text-amber-500 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 11l3 3L22 4" />
                        <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" />
                    </svg>
                    My Task
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/70 hover:text-white hover:bg-white/5 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0 text-white/40 group-hover:text-amber-500 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" />
                        <path d="M16 2v4M8 2v4M3 10h18" />
                    </svg>
                    Today
                    <span class="ml-auto text-[11px] font-semibold bg-amber-500/20 text-amber-400 rounded-full px-2 py-0.5">3</span>
                </a>
            </li>

            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/70 hover:text-white hover:bg-white/5 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0 text-white/40 group-hover:text-amber-500 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l2.4 7.2H22l-6 4.6 2.3 7.2L12 16.4l-6.3 4.6L8 13.8 2 9.2h7.6z" />
                    </svg>
                    Important
                </a>
            </li>
        </ul>

        {{-- SECONDARY NAVIGATION --}}
        <p class="text-[11px] uppercase tracking-wider text-white/40 font-semibold px-3 mt-8 mb-2">Workspace</p>
        <ul class="text-sm text-white/80 space-y-1">
            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/70 hover:text-white hover:bg-white/5 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0 text-white/40 group-hover:text-amber-500 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="7" r="4" />
                        <path d="M2 21v-2a4 4 0 014-4h6a4 4 0 014 4v2" />
                        <path d="M17 11a4 4 0 100-8" />
                        <path d="M23 21v-2a4 4 0 00-3-3.87" />
                    </svg>
                    Team
                </a>
            </li>
            <li>
                <a href="#" class="group flex items-center gap-3 px-3 py-2.5 rounded-lg text-white/70 hover:text-white hover:bg-white/5 transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] shrink-0 text-white/40 group-hover:text-amber-500 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3" />
                        <path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 11-2.83 2.83l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-4 0v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 11-2.83-2.83l.06-.06A1.65 1.65 0 004.6 15a1.65 1.65 0 00-1.51-1H3a2 2 0 010-4h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 112.83-2.83l.06.06A1.65 1.65 0 009 4.6a1.65 1.65 0 001-1.51V3a2 2 0 014 0v.09A1.65 1.65 0 0015.4 4.6a1.65 1.65 0 001.82-.33l.06-.06a2 2 0 112.83 2.83l-.06.06A1.65 1.65 0 0019.4 9a1.65 1.65 0 001.51 1H21a2 2 0 010 4h-.09a1.65 1.65 0 00-1.51 1z" />
                    </svg>
                    Settings
                </a>
            </li>
        </ul>
    </div>

    {{-- PROFILE FOOTER --}}
    <div class="border-t border-white/10 pt-4">
        <div class="flex items-center gap-3 px-1 group cursor-pointer">
            <img src="https://ui-avatars.com/api/?name=John+Doe&background=f59e0b&color=200533&bold=true"
                 alt="User avatar"
                 class="w-9 h-9 rounded-full ring-2 ring-white/10 group-hover:ring-amber-500/40 transition-all" />
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-white truncate">John Doe</p>
                <p class="text-xs text-white/40 truncate">john@example.com</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white/30 group-hover:text-white/60 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 18l6-6-6-6" />
            </svg>
        </div>
    </div>

</div>