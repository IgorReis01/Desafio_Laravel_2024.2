<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transferencia Bancaria') }}
        </h2>
    </x-slot> 
    <div>
        <form action="/cria-transferencia" method="POST">
            <input type="hidden" name="user_id">
            <label for="agencia">Agencia</label>
            <input type="text" name="agencia">
            <label for="conta">Conta</label>
            <input type="text" name="conta">
            <label for="valor">Valor</label>
            <input type="number" name="valor">
            <label for="password">Senha</label>
            <input type="password" name="password">
        </form>
    </div>
</x-app-layout>