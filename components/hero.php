<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center pt-24 pb-16 overflow-hidden tech-grid">
    <!-- Background Glows -->
    <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-80 h-80 rounded-full bg-emerald-500/10 blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-96 h-96 rounded-full bg-cyan-500/10 blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Hero Text Details (Left 7 Cols) -->
            <div class="lg:col-span-7 flex flex-col justify-center space-y-6 text-left" data-aos="fade-right">
                
                <!-- Welcome tag -->
                <div class="inline-flex items-center space-x-2 bg-zinc-900 border border-zinc-800 rounded-full px-4 py-1.5 w-fit">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    <span class="text-xs font-mono-tech text-zinc-300">Ready to test & automate</span>
                </div>

                <!-- Name & Role -->
                <div class="space-y-2">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white">
                        Hi, I'm <span class="bg-gradient-to-r from-emerald-400 to-cyan-400 bg-clip-text text-transparent">Adila Ramadhan</span>
                    </h1>
                    <h2 class="text-2xl sm:text-3xl font-bold font-mono-tech text-zinc-400 flex items-center h-12">
                        &gt;&nbsp;<span id="typing-text" class="typing-cursor text-emerald-400"></span>
                    </h2>
                </div>

                <!-- Intro text -->
                <p class="text-base sm:text-lg text-zinc-400 max-w-xl leading-relaxed">
                    A junior QA Engineer specializing in manual testing, API validation, and test automation. I focus on ensuring software reliability, performance, and delivering high-quality user experiences through rigorous testing methodologies.
                </p>

                <!-- Core Stack Small Badges -->
                <div class="flex flex-wrap gap-2 pt-2">
                    <span class="px-2.5 py-1 text-xs font-mono-tech rounded border border-zinc-800 bg-zinc-900/60 text-zinc-400">Postman</span>
                    <span class="px-2.5 py-1 text-xs font-mono-tech rounded border border-zinc-800 bg-zinc-900/60 text-zinc-400">Selenium</span>
                    <span class="px-2.5 py-1 text-xs font-mono-tech rounded border border-zinc-800 bg-zinc-900/60 text-zinc-400">Katalon</span>
                    <span class="px-2.5 py-1 text-xs font-mono-tech rounded border border-zinc-800 bg-zinc-900/60 text-zinc-400">JMeter</span>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="assets/Adila_Ramadhan_CV.pdf" download class="inline-flex items-center justify-center px-6 py-3 rounded-xl border border-zinc-700 bg-zinc-900 hover:bg-zinc-800 hover:border-zinc-600 text-white font-medium transition-all group duration-300">
                        <i data-lucide="download" class="w-5 h-5 mr-2 text-emerald-400 group-hover:translate-y-0.5 transition-transform"></i>
                        Download CV
                    </a>
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 text-zinc-950 font-bold transition-all shadow-lg shadow-emerald-500/20 duration-300">
                        <i data-lucide="mail" class="w-5 h-5 mr-2"></i>
                        Contact Me
                    </a>
                </div>
            </div>

            <!-- Technical QA Mock Console (Right 5 Cols) -->
            <div class="lg:col-span-5 relative" data-aos="fade-left" data-aos-delay="200">
                <!-- Decorative elements -->
                <div class="absolute -inset-1 rounded-2xl bg-gradient-to-r from-emerald-500 to-cyan-500 opacity-20 blur-xl"></div>
                
                <!-- Terminal Console -->
                <div class="relative glass-card rounded-2xl border border-zinc-800 overflow-hidden glow-emerald">
                    <!-- Title Bar -->
                    <div class="flex items-center justify-between px-4 py-3 bg-zinc-900/90 border-b border-zinc-800/80">
                        <div class="flex items-center space-x-2">
                            <span class="w-3 h-3 rounded-full bg-red-500"></span>
                            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                            <span class="w-3 h-3 rounded-full bg-green-500"></span>
                        </div>
                        <span class="text-xs font-mono-tech text-zinc-400">qa_automation_runner.sh</span>
                        <div class="w-12"></div> <!-- Spacer -->
                    </div>
                    
                    <!-- Code Terminal Output -->
                    <div class="p-6 font-mono-tech text-xs sm:text-sm text-zinc-300 space-y-3 bg-zinc-950/80 min-h-[300px] relative">
                        <div class="scan-line"></div>
                        <div class="flex items-center space-x-2 text-zinc-500">
                            <span>$</span>
                            <span class="text-zinc-300">npm run test:automation</span>
                        </div>
                        <div class="text-cyan-400">[INFO] Launching WebDriver (Chrome Headless)...</div>
                        <div class="text-zinc-500">[DEBUG] Connection established on port 4444</div>
                        
                        <div class="pt-2 space-y-1">
                            <div class="flex items-center space-x-2 text-emerald-400">
                                <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                                <span>PASS: Auth Suite - Login valid credentials (842ms)</span>
                            </div>
                            <div class="flex items-center space-x-2 text-emerald-400">
                                <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                                <span>PASS: Auth Suite - Login error response validation (412ms)</span>
                            </div>
                            <div class="flex items-center space-x-2 text-emerald-400">
                                <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                                <span>PASS: API Suite - GET /profile response headers (215ms)</span>
                            </div>
                            <div class="flex items-center space-x-2 text-emerald-400">
                                <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                                <span>PASS: Performance - JMeter login stress baseline (1103ms)</span>
                            </div>
                        </div>

                        <div class="border-t border-zinc-800/80 pt-3 mt-4 space-y-1 text-zinc-400">
                            <div class="text-emerald-400 font-bold">Tests: 4 passed, 4 total</div>
                            <div>Snapshots: 0 total</div>
                            <div>Time: 2.572s, estimated 3.0s</div>
                            <div class="text-zinc-500 animate-pulse">Ran all test suites. Active waiting for next commit...</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
