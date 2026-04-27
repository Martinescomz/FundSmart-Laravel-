<x-app-layout>
    <x-slot name='title'>
        menu
    </x-slot>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>

    <div class="py-12">
        <div class="max-w-[450px] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-[#014e0740] shadow-[0_8px_25px_rgba(0,0,0,0.08)] rounded-[22px] p-8 text-center animate-fadeUp">
                
                <h1 class="font-playfair text-[44px] text-[#0f5132] leading-tight">FundSmart</h1>
                <div class="text-[13px] text-[#6b8f7a] tracking-[1px] mb-7 uppercase font-semibold">
                    Olá, {{ Auth::user()->name }}!
                </div>

                <div x-data class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <a href="{{ url('/despesa') }}" 
                       class="flex flex-col items-center justify-center h-[90px] rounded-[16px] border border-[#198754] text-[#198754] font-semibold transition-all duration-300 hover:bg-[#198754] hover:text-white hover:-translate-y-1 hover:shadow-lg">
                        <i class="bi bi-plus-circle text-2xl mb-1"></i>
                        <span>Lançamento</span>
                    </a>

                    <a href="{{ url('/consulta') }}" 
                       class="flex flex-col items-center justify-center h-[90px] rounded-[16px] border border-[#198754] text-[#198754] font-semibold transition-all duration-300 hover:bg-[#198754] hover:text-white hover:-translate-y-1 hover:shadow-lg">
                        <i class="bi bi-search text-2xl mb-1"></i>
                        <span>Consulta</span>
                    </a>

                    <a href="{{ url('/analise') }}" 
                       class="flex flex-col items-center justify-center h-[90px] rounded-[16px] border border-[#198754] text-[#198754] font-semibold transition-all duration-300 hover:bg-[#198754] hover:text-white hover:-translate-y-1 hover:shadow-lg">
                        <i class="bi bi-graph-up text-2xl mb-1"></i>
                        <span>Análise</span>
                    </a>

                    <a href="{{ route('profile.edit') }}" 
                       class="flex flex-col items-center justify-center h-[90px] rounded-[16px] border border-[#198754] text-[#198754] font-semibold transition-all duration-300 hover:bg-[#198754] hover:text-white hover:-translate-y-1 hover:shadow-lg">
                        <i class="bi bi-person-circle text-2xl mb-1"></i>
                        <span>Perfil</span>
                    </a>

                </div>

                <div class="mt-6 text-[10px] text-[#6b8f7a] uppercase tracking-widest opacity-70">
                    FundSmart • Versão 1.0
                </div>

                <form method="POST" action="{{ route('logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="text-xs text-red-600 hover:underline">
                        Sair do sistema
                    </button>
                </form>

            </div>
        </div>
    </div>

</x-app-layout>