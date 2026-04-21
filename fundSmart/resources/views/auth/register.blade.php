<x-guest-layout>
    <h1 class="font-['Playfair_Display'] text-[40px] text-[#0f5132] text-center leading-tight">FundSmart</h1>
    <div class="text-center text-[13px] text-[#6b8f7a] tracking-[1px] mb-5 uppercase">CRIAR CONTA</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="mb-3">
            <label class="block font-semibold text-[#0f5132] mb-1">Nome</label>
            <input type="text" name="name" :value="old('name')" required autofocus class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]">
            <x-input-error :messages="$errors->get('name')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="block font-semibold text-[#0f5132] mb-1">E-mail</label>
            <input type="email" name="email" :value="old('email')" required class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]">
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <div class="mb-3" x-data>
            <label class="block font-semibold text-[#0f5132] mb-1">CPF</label>
            <input type="text" name="cpf" :value="old('cpf')" required class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]" x-mask="999.999.999-99">
            <x-input-error :messages="$errors->get('cpf')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="block font-semibold text-[#0f5132] mb-1">Senha</label>
            <input type="password" name="password" required autocomplete="new-password" class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]">
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="block font-semibold text-[#0f5132] mb-1">Confirmar Senha</label>
            <input type="password" name="password_confirmation" required class="w-full border-gray-300 rounded-lg focus:ring-[#198754] focus:border-[#198754]">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            <button class="w-full bg-[#198754] hover:bg-[#157347] text-white h-[48px] rounded-[12px] font-semibold transition">
                Cadastrar
            </button>

            <div class="mt-3 text-sm text-center">
                Já tem uma conta? 
                <a class="text-[#198754] hover:underline font-semibold" href="{{ route('login') }}">
                    Fazer Login
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>