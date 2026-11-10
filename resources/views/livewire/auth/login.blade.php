<div x-data="{ showPassword: false }">
    <div class="mb-8">
        <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-950/70 px-3 py-1 text-xs font-bold tracking-wider text-indigo-300 uppercase border border-indigo-700/60 shadow-xs">
            <span class="h-1.5 w-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
            MASUK PORTAL
        </span>
        <h1 class="mt-3 font-display text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
            Selamat Datang Kembali
        </h1>
        <p class="mt-2 text-sm text-slate-400">
            Masuk ke akun Anda untuk memantau status atau menyampaikan pengaduan baru.
        </p>
    </div>

    {{-- Demo Account Quick Assist Box --}}
    <div x-data="{ showDemo: false }" class="mb-6 rounded-2xl border border-indigo-800/80 bg-gradient-to-br from-indigo-950/80 via-slate-900 to-violet-950/50 p-4 shadow-xs">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="flex h-7 w-7 items-center justify-center rounded-lg bg-indigo-600 text-white shadow-xs">
                    <i data-lucide="key-round" class="h-3.5 w-3.5"></i>
                </span>
                <div>
                    <h3 class="text-xs font-bold text-indigo-200">Akun Demo Pengujian</h3>
                    <p class="text-[11px] text-indigo-400">Gunakan akun ini untuk langsung mencoba sistem</p>
                </div>
            </div>
            <button
                type="button"
                @click="showDemo = !showDemo"
                class="rounded-lg border border-indigo-700 bg-slate-800 px-2.5 py-1 text-[11px] font-bold text-indigo-300 hover:bg-indigo-950 transition"
            >
                <span x-text="showDemo ? 'Sembunyikan' : 'Buka Kredensial'"></span>
            </button>
        </div>

        <div x-show="showDemo" x-cloak class="mt-3.5 space-y-2 border-t border-indigo-800/60 pt-3 text-xs">
            <div class="rounded-xl border border-slate-700 bg-slate-800/90 p-2.5">
                <div class="flex items-center justify-between">
                    <span class="font-bold text-indigo-200">Administrator</span>
                    <button
                        type="button"
                        @click="$wire.set('email', 'admin@ereport.test'); $wire.set('password', 'Admin#Password123!')"
                        class="text-[10px] font-bold text-indigo-400 hover:text-indigo-300 hover:underline"
                    >
                        Isi Otomatis
                    </button>
                </div>
                <div class="mt-1 font-mono text-[11px] text-slate-300">
                    <p>Email: <strong class="text-white">admin@ereport.test</strong></p>
                    <p>Pass: <strong class="text-white">Admin#Password123!</strong></p>
                </div>
            </div>
            <p class="text-[10px] text-slate-400 italic">Untuk akun warga, Anda dapat langsung mendaftar akun baru melalui menu Registrasi.</p>
        </div>
    </div>

    <form wire:submit="login" method="POST" action="#" class="space-y-4">
        @csrf
        <div>
            <label for="email" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                Alamat Email
            </label>
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                    <i data-lucide="mail" class="h-4 w-4"></i>
                </span>
                <input
                    type="email"
                    id="email"
                    name="email"
                    aria-describedby="email-error"
                    @error('email') aria-invalid="true" @enderror
                    wire:model="email"
                    placeholder="nama@email.com"
                    autocomplete="email"
                    required
                    class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-4 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                >
            </div>
            @error('email')
                <p id="email-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                    <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
        </div>

        <div>
            <div class="flex items-center justify-between mb-1.5">
                <label for="password" class="block text-xs font-bold text-slate-300 uppercase tracking-wider">
                    Kata Sandi
                </label>
            </div>
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                    <i data-lucide="lock" class="h-4 w-4"></i>
                </span>
                <input
                    :type="showPassword ? 'text' : 'password'"
                    id="password"
                    name="password"
                    aria-describedby="password-error"
                    @error('password') aria-invalid="true" @enderror
                    wire:model="password"
                    placeholder="Masukkan kata sandi"
                    autocomplete="current-password"
                    required
                    class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-11 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                >
                <button
                    type="button"
                    @click="showPassword = !showPassword"
                    class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-white focus:outline-none"
                    aria-label="Lihat kata sandi"
                >
                    <i x-show="!showPassword" data-lucide="eye" class="h-4 w-4"></i>
                    <i x-show="showPassword" x-cloak data-lucide="eye-off" class="h-4 w-4"></i>
                </button>
            </div>
            @error('password')
                <p id="password-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                    <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
        </div>

        <div class="flex items-center justify-between py-1">
            <label class="flex items-center gap-2.5 text-xs font-medium text-slate-300 cursor-pointer select-none">
                <input type="checkbox" wire:model="remember" class="h-4 w-4 rounded-md border-slate-700 bg-slate-800 text-indigo-600 accent-indigo-600 focus:ring-indigo-500">
                <span>Ingat saya di perangkat ini</span>
            </label>
        </div>

        <button
            type="submit"
            wire:loading.attr="disabled"
            class="group flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-indigo-600 to-violet-600 px-5 py-3.5 text-sm font-bold text-white shadow-md shadow-indigo-600/30 transition-all duration-150 hover:from-indigo-500 hover:to-violet-500 hover:shadow-lg hover:shadow-indigo-600/40 active:scale-[0.99] disabled:opacity-60"
        >
            <span wire:loading.remove wire:target="login" class="inline-flex items-center gap-2">
                <span>Masuk Sekarang</span>
                <i data-lucide="arrow-right" class="h-4 w-4 transition group-hover:translate-x-0.5"></i>
            </span>
            <span wire:loading wire:target="login" class="inline-flex items-center gap-2">
                <i data-lucide="loader-2" class="h-4 w-4 animate-spin"></i>
                <span>Memvalidasi kredensial…</span>
            </span>
        </button>
    </form>

    <div class="mt-8 rounded-xl border border-slate-800 bg-slate-800/60 p-4 text-center">
        <p class="text-xs text-slate-400">
            Belum memiliki akun warga?
            <a href="{{ route('register') }}" wire:navigate class="font-bold text-indigo-400 hover:text-indigo-300 hover:underline">
                Daftar sekarang
            </a>
        </p>
    </div>
</div>