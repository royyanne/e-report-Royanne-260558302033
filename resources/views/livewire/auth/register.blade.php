<div x-data="{ showPass: false, showConfirm: false }">
    <div class="mb-6">
        <span class="inline-flex items-center gap-1.5 rounded-full bg-indigo-950/70 px-3 py-1 text-xs font-bold tracking-wider text-indigo-300 uppercase border border-indigo-700/60 shadow-xs">
            <span class="h-1.5 w-1.5 rounded-full bg-indigo-400 animate-pulse"></span>
            REGISTRASI WARGA
        </span>
        <h1 class="mt-3 font-display text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
            Buat Akun Warga
        </h1>
        <p class="mt-2 text-sm text-slate-400">
            Daftarkan diri Anda untuk menyuarakan aspirasi dan memantau penanganan pengaduan secara transparan.
        </p>
    </div>

    <form wire:submit="register" method="POST" action="#" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                Nama Lengkap
            </label>
            <div class="relative">
                <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                    <i data-lucide="user" class="h-4 w-4"></i>
                </span>
                <input
                    type="text"
                    id="name"
                    name="name"
                    aria-describedby="name-error"
                    @error('name') aria-invalid="true" @enderror
                    wire:model="name"
                    autocomplete="name"
                    placeholder="Nama lengkap sesuai KTP"
                    required
                    class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-4 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                >
            </div>
            @error('name')
                <p id="name-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                    <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
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
                        autocomplete="email"
                        placeholder="nama@email.com"
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
                <label for="no_whatsapp" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                    Nomor WhatsApp
                </label>
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i data-lucide="phone" class="h-4 w-4"></i>
                    </span>
                    <input
                        type="tel"
                        id="no_whatsapp"
                        name="no_whatsapp"
                        aria-describedby="no_whatsapp-error"
                        @error('no_whatsapp') aria-invalid="true" @enderror
                        wire:model="no_whatsapp"
                        autocomplete="tel"
                        placeholder="08xxxxxxxxxx"
                        required
                        class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-4 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                    >
                </div>
                @error('no_whatsapp')
                    <p id="no_whatsapp-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                        <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>
        </div>

        <div>
            <label for="alamat" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                Alamat Domisili
            </label>
            <div class="relative">
                <textarea
                    id="alamat"
                    name="alamat"
                    aria-describedby="alamat-error"
                    @error('alamat') aria-invalid="true" @enderror
                    wire:model="alamat"
                    autocomplete="street-address"
                    placeholder="Contoh: Jl. Mawar No. 12, RT 02 / RW 04, Kelurahan..."
                    rows="3"
                    required
                    class="w-full rounded-xl border border-slate-700 bg-slate-800/80 p-3 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none resize-none"
                ></textarea>
            </div>
            @error('alamat')
                <p id="alamat-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                    <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                    <span>{{ $message }}</span>
                </p>
            @enderror
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <label for="password" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                    Kata Sandi
                </label>
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i data-lucide="lock" class="h-4 w-4"></i>
                    </span>
                    <input
                        :type="showPass ? 'text' : 'password'"
                        id="password"
                        name="password"
                        aria-describedby="password-help password-error"
                        @error('password') aria-invalid="true" @enderror
                        wire:model="password"
                        autocomplete="new-password"
                        placeholder="Min. 8 karakter"
                        required
                        class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-11 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                    >
                    <button
                        type="button"
                        @click="showPass = !showPass"
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-white focus:outline-none"
                        aria-label="Lihat kata sandi"
                    >
                        <i x-show="!showPass" data-lucide="eye" class="h-4 w-4"></i>
                        <i x-show="showPass" x-cloak data-lucide="eye-off" class="h-4 w-4"></i>
                    </button>
                </div>
                <p id="password-help" class="mt-1 text-[11px] text-slate-500">Minimal 8 karakter.</p>
                @error('password')
                    <p id="password-error" role="alert" class="mt-1.5 text-xs font-medium text-rose-400 flex items-center gap-1.5">
                        <i data-lucide="alert-circle" class="h-3.5 w-3.5 shrink-0"></i>
                        <span>{{ $message }}</span>
                    </p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation" class="mb-1.5 block text-xs font-bold text-slate-300 uppercase tracking-wider">
                    Konfirmasi Sandi
                </label>
                <div class="relative">
                    <span class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400">
                        <i data-lucide="shield" class="h-4 w-4"></i>
                    </span>
                    <input
                        :type="showConfirm ? 'text' : 'password'"
                        id="password_confirmation"
                        name="password_confirmation"
                        wire:model="password_confirmation"
                        autocomplete="new-password"
                        placeholder="Ulangi kata sandi"
                        required
                        class="w-full rounded-xl border border-slate-700 bg-slate-800/80 py-3 pr-11 pl-10 text-sm text-white transition placeholder:text-slate-500 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/20 focus:outline-none"
                    >
                    <button
                        type="button"
                        @click="showConfirm = !showConfirm"
                        class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-slate-400 hover:text-white focus:outline-none"
                        aria-label="Lihat konfirmasi kata sandi"
                    >
                        <i x-show="!showConfirm" data-lucide="eye" class="h-4 w-4"></i>
                        <i x-show="showConfirm" x-cloak data-lucide="eye-off" class="h-4 w-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <button
            type="submit"
            wire:loading.attr="disabled"
            class="group mt-2 flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-indigo-600 to-violet-600 px-5 py-3.5 text-sm font-bold text-white shadow-md shadow-indigo-600/30 transition-all duration-150 hover:from-indigo-500 hover:to-violet-500 hover:shadow-lg hover:shadow-indigo-600/40 active:scale-[0.99] disabled:opacity-60"
        >
            <span wire:loading.remove wire:target="register" class="inline-flex items-center gap-2">
                <span>Daftar Akun Warga</span>
                <i data-lucide="arrow-right" class="h-4 w-4 transition group-hover:translate-x-0.5"></i>
            </span>
            <span wire:loading wire:target="register" class="inline-flex items-center gap-2">
                <i data-lucide="loader-2" class="h-4 w-4 animate-spin"></i>
                <span>Menyiapkan akun…</span>
            </span>
        </button>
    </form>

    <div class="mt-6 rounded-xl border border-slate-800 bg-slate-800/60 p-4 text-center">
        <p class="text-xs text-slate-400">
            Sudah memiliki akun?
            <a href="{{ route('login') }}" wire:navigate class="font-bold text-indigo-400 hover:text-indigo-300 hover:underline">
                Masuk di sini
            </a>
        </p>
    </div>
</div>