<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                     nome
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3">
                    endereco
                </th>
                <th scope="col" class="px-6 py-3">
                    telefone
                </th>
                <th scope="col" class="px-6 py-3">
                    data de nascimento
                </th>
                <th scope="col" class="px-6 py-3">
                    cpf
                </th>
                <th scope="col" class="px-6 py-3">
                    açoes
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->id}}
                </th>
                <td class="px-6 py-4">
                {{$user->name}}
                </td>
                <td class="px-6 py-4">
                {{$user->email}}
                </td>
                <td class="px-6 py-4">
                {{$user->endereco}}
                </td>
                <td class="px-6 py-4">
                {{$user->telefone}}
                </td>
                <td class="px-6 py-4">
                {{$user->data_de_nascimento}}
                </td>
                <td class="px-6 py-4">
                {{$user->cpf}}
                </td>
                <td class="px-6 py-4">
               <a href="{{route('user.show',$user->id)}}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Visualizar</button></a>
               <a href=""><button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button></a>
               <a href="{{route('user.edit',$user->id)}}"><button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Editar</button></a>
            
                </td>

            </tr>
            @endforeach

           
        </tbody>
    </table>
    <a href="{{route('user.create')}}"><button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Criar</button></a>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
