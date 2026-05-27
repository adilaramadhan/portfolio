<!-- Navbar -->
<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 glass-card border-t-0 border-x-0 border-b border-zinc-800/80 backdrop-blur-md bg-zinc-950/70 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo / Brand -->
            <div class="flex-shrink-0">
                <a href="#home" class="flex items-center space-x-2 font-mono-tech text-lg font-bold tracking-wider text-zinc-100 hover:text-emerald-400 transition-colors">
                    <i data-lucide="shield-check" class="w-6 h-6 text-emerald-500 animate-pulse"></i>
                    <span>ADILA<span class="text-emerald-400">.QA</span></span>
                </a>
            </div>

            <!-- Desktop Nav Items -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="#home" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">Home</a>
                <a href="#about" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">About</a>
                <a href="#skills" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">Skills</a>
                <a href="#projects" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">Projects</a>
                <a href="#experience" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">Experience</a>
                <a href="#contact" class="px-3 py-2 rounded-md text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-all">Contact</a>
            </div>

            <!-- Terminal Badge / Action Button -->
            <div class="hidden md:block">
                <a href="#contact" class="inline-flex items-center px-4 py-2 border border-emerald-500/30 rounded-full text-xs font-mono-tech text-emerald-400 bg-emerald-500/5 hover:bg-emerald-500/10 transition-all duration-300">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping mr-2"></span>
                    Available for Work
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu Icon -->
                    <svg :class="{'hidden': open, 'block': !open }" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close Icon -->
                    <svg :class="{'block': open, 'hidden': !open }" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-150" 
         x-transition:enter-start="opacity-0 -translate-y-4" 
         x-transition:enter-end="opacity-100 translate-y-0" 
         x-transition:leave="transition ease-in duration-100" 
         x-transition:leave-start="opacity-100 translate-y-0" 
         x-transition:leave-end="opacity-0 -translate-y-4" 
         class="md:hidden border-b border-zinc-800 bg-zinc-950/95" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#home" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">Home</a>
            <a href="#about" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">About</a>
            <a href="#skills" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">Skills</a>
            <a href="#projects" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">Projects</a>
            <a href="#experience" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">Experience</a>
            <a href="#contact" @click="open = false" class="block px-3 py-2 rounded-md text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900">Contact</a>
            
            <div class="pt-4 pb-2 border-t border-zinc-800 px-3">
                <a href="#contact" @click="open = false" class="flex items-center justify-center w-full px-4 py-2 border border-emerald-500/30 rounded-full text-sm font-mono-tech text-emerald-400 bg-emerald-500/5 hover:bg-emerald-500/10 transition-all duration-300">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping mr-2"></span>
                    Available for Work
                </a>
            </div>
        </div>
    </div>
</nav>
