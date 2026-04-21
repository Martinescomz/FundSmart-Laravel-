<x-guest-layout>
    <h1 class="font-['Playfair_Display'] text-[40px] text-[#0f5132] text-center leading-tight">FundSmart</h1>
    <div class="text-center text-[13px] text-[#6b8f7a] tracking-[1px] mb-5 uppercase">FAÇA SEU LOGIN</div>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3" x-data>
            <label class="block font-semibold text-[#0f5132] mb-1">Cpf</label>
            <input type="text" name="cpf" value="{{ old('cpf') }}" required autofocus class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]" x-mask="999.999.999-99" placeholder="xxx.xxx.xxx-xx">
            <x-input-error :messages="$errors->get('cpf')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="block font-semibold text-[#0f5132] mb-1">Senha</label>
            <input type="password" name="password" required class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]">
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="block mb-3">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#198754] shadow-sm focus:ring-[#198754]" name="remember">
                <span class="ms-2 text-sm text-gray-600">Lembrar de mim</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            <button class="w-full bg-[#198754] hover:bg-[#157347] text-white h-[48px] rounded-[12px] font-semibold transition">
                Entrar
            </button>

            <div class="mt-3 text-sm text-center">
                Ainda não tem conta? 
                <a class="text-[#198754] hover:underline font-semibold" href="{{ route('register') }}">
                    Criar conta
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>