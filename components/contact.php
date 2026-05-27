<?php
// CONFIGURATION:
// Untuk mengirim pesan form ke email Anda, daftar gratis di https://formspree.io
// Setelah membuat form di Formspree, ganti "YOUR_FORMSPREE_ID" di bawah dengan ID yang Anda dapatkan.
// Contoh: $formspree_id = "xrgnjkpq";
$formspree_id = "mwvzwgag"; 
?>

<!-- Contact Section -->
<section id="contact" class="py-20 relative bg-zinc-950/60 overflow-hidden border-t border-zinc-900">
    <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full bg-emerald-500/5 blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-xs font-mono-tech text-emerald-400 uppercase tracking-widest mb-3">// 05. Get In Touch</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Contact & Connect</h3>
            <div class="h-1 w-12 bg-emerald-500 mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
            
            <!-- Left: Direct Contact Information (5 cols) -->
            <div class="lg:col-span-5 flex flex-col justify-between space-y-6" data-aos="fade-right">
                
                <div class="space-y-4">
                    <h4 class="text-xl font-bold text-white flex items-center">
                        <i data-lucide="message-square" class="w-5 h-5 text-emerald-500 mr-2"></i>
                        Let's collaborate!
                    </h4>
                    <p class="text-sm text-zinc-400 leading-relaxed">
                        Jika Anda sedang mencari seorang Junior QA Engineer untuk magang, kontrak, atau posisi fulltime, silakan hubungi saya. Saya terbuka untuk berdiskusi tentang automation testing, API testing, maupun manual testing.
                    </p>
                </div>

                <!-- Direct Connections Cards -->
                <div class="space-y-4">
                    
                    <!-- Email Card -->
                    <a href="mailto:adilaramadhan25@gmail.com" class="glass-card hover-lift flex items-center p-4 rounded-xl border border-zinc-800 transition-all duration-300">
                        <div class="p-3 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-lg mr-4 flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <div class="text-xs text-zinc-500 font-mono-tech">EMAIL ADDRESS</div>
                            <div class="text-sm font-semibold text-white">adilaramadhan25@gmail.com</div>
                        </div>
                    </a>

                    <!-- Github Card -->
                    <a href="https://github.com/adilaramadhan" target="_blank" rel="noopener noreferrer" class="glass-card hover-lift flex items-center p-4 rounded-xl border border-zinc-800 transition-all duration-300">
                        <div class="p-3 bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path>
                                <path d="M9 18c-4.51 2-5-2-7-2"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-zinc-500 font-mono-tech">GITHUB PROFILE</div>
                            <div class="text-sm font-semibold text-white">github.com/adilaramadhan</div>
                        </div>
                    </a>

                    <!-- LinkedIn Card -->
                    <a href="https://linkedin.com/in/adila-ramadhan-a3549a40b/" target="_blank" rel="noopener noreferrer" class="glass-card hover-lift flex items-center p-4 rounded-xl border border-zinc-800 transition-all duration-300">
                        <div class="p-3 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-lg mr-4 flex-shrink-0">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-zinc-500 font-mono-tech">LINKEDIN PROFILE</div>
                            <div class="text-sm font-semibold text-white">linkedin.com/in/adilaramadhan</div>
                        </div>
                    </a>

                </div>
            </div>

            <!-- Right: Interactive Contact Form (7 cols) -->
            <div class="lg:col-span-7" data-aos="fade-left" data-aos-delay="200">
                <div x-data="{ 
                    success: false, 
                    name: '', 
                    email: '', 
                    message: '', 
                    loading: false,
                    formspreeId: 'mwvzwgag',
                    submitForm() {
                        if (this.formspreeId === 'YOUR_FORMSPREE_ID' || this.formspreeId === '') {
                            this.loading = true;
                            setTimeout(() => {
                                this.loading = false;
                                this.success = true;
                            }, 1000);
                            return;
                        }
                        
                        this.loading = true;
                        fetch('https://formspree.io/f/' + this.formspreeId, {
                            method: 'POST',
                            headers: { 
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                name: this.name,
                                email: this.email,
                                message: this.message
                            })
                        })
                        .then(response => {
                            this.loading = false;
                            if (response.ok) {
                                this.success = true;
                            } else {
                                alert('Gagal mengirim pesan. Silakan coba kirim email manual.');
                            }
                        })
                        .catch(error => {
                            this.loading = false;
                            alert('Terjadi kesalahan koneksi. Silakan kirim email manual.');
                        });
                    }
                }" class="glass-card rounded-2xl p-6 border border-zinc-800 relative dot-grid h-full">
                    
                    <!-- Form Title inside card -->
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-zinc-800/80">
                        <span class="text-xs font-mono-tech text-emerald-400 flex items-center">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 mr-2 animate-ping"></span>
                            SEND SECURE MESSAGE
                        </span>
                        <span class="text-[10px] font-mono-tech text-zinc-600">PORT_COMM_V1</span>
                    </div>

                    <!-- Success State -->
                    <div x-show="success" x-transition class="bg-emerald-500/10 border border-emerald-500/30 rounded-xl p-6 text-center space-y-4 my-8">
                        <div class="w-12 h-12 bg-emerald-500/20 text-emerald-400 rounded-full flex items-center justify-center mx-auto border border-emerald-500/30">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <h5 class="text-lg font-bold text-white">Message Transmitted!</h5>
                        <p class="text-xs text-zinc-400 max-w-sm mx-auto">
                            Terima kasih. Pesan Anda telah berhasil terkirim. Saya akan segera menghubungi Anda kembali.
                        </p>
                        <button @click="success = false; name = ''; email = ''; message = '';" class="px-4 py-2 bg-zinc-900 border border-zinc-800 text-xs font-mono-tech rounded hover:bg-zinc-850 text-zinc-300">
                            Send Another Message
                        </button>
                    </div>

                    <!-- Message Form -->
                    <form x-show="!success" @submit.prevent="submitForm()" class="space-y-4">
                        
                        <!-- Name Field -->
                        <div class="space-y-2">
                            <label class="block text-xs font-mono-tech text-zinc-400">SENDER_NAME :</label>
                            <input x-model="name" required type="text" placeholder="Enter your name" class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 transition-all font-mono-tech">
                        </div>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label class="block text-xs font-mono-tech text-zinc-400">SENDER_EMAIL :</label>
                            <input x-model="email" required type="email" placeholder="name@company.com" class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 transition-all font-mono-tech">
                        </div>

                        <!-- Message Body -->
                        <div class="space-y-2">
                            <label class="block text-xs font-mono-tech text-zinc-400">MESSAGE_PAYLOAD :</label>
                            <textarea x-model="message" required rows="4" placeholder="Type your message here..." class="w-full bg-zinc-900/60 border border-zinc-800 rounded-xl px-4 py-3 text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:border-emerald-500 focus:ring-1 focus:ring-emerald-500/30 transition-all font-mono-tech"></textarea>
                        </div>

                        <!-- Submit CTA -->
                        <div class="pt-2">
                            <button type="submit" :disabled="loading" class="w-full inline-flex items-center justify-center px-6 py-3 rounded-xl bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-400 hover:to-emerald-500 text-zinc-950 font-bold transition-all shadow-lg shadow-emerald-500/20 disabled:opacity-50">
                                <span x-show="!loading" class="flex items-center">
                                    <i data-lucide="send" class="w-4 h-4 mr-2"></i>
                                    SUBMIT
                                </span>
                                <span x-show="loading" class="flex items-center">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-zinc-950" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    TRANSMITTING...
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
