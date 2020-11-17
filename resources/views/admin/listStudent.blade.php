@extends('layouts.main')

@section('content')
    <x-header></x-header>
    <main class="container mx-auto">
        <div class="mb-12 flex justify-between items-center">
            <h1 class="text-4xl">
                Liste des étudiants
            </h1>
            <form action="" method="get">
                <label for="name"  class="sr-only">Recherche</label>
                <input type="search" name="name" id="name" class="px-4 py-3">
            </form>
        </div>

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blueLightCustom">
                <tr>
                <th class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                    Prénom
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                    Nom
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                    Groupe
                </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $key=>$user)
                <tr class="{{ $key%2 ? 'bg-green-200' : 'bg-blue-200'  }}">
                    <td class="px-6 py-4 text-left font-bold">{{ $user->firstname }}</td>
                    <td class="px-6 py-4 text-left font-bold">{{ $user->name }}</td>
                    <td class="px-6 py-4 text-left font-bold">{{ $user->group }}</td>
                </tr>
                @foreach ($user->orders as $i=>$order)
                <tr class="{{ $key%2 ? 'bg-green-200' : 'bg-blue-200'  }}">
                    <td class="px-6 py-5 bg-gray-50">
                        {{ $order->id }}
                    </td>
                    <td class="px-6 py-5 bg-gray-50">
                        {{ $order->updated_at }}
                    </td>
                    <td class="px-6 py-5 bg-gray-50">
                        {{ $order->status[0]->name }}
                    </td>
                    <td class="px-6 py-5 bg-gray-50">
                        <form action="/order/changeStatus" method="post">
                            @csrf
                            <select name="status" id="status" class="px-3 py-2 border-2 border-red-700">
                                @foreach ($statusList as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="statusOrderId" value="{{ $order->status[0]->id }}">
                            <input type="hidden" name="orderId" value="{{ $order->id}}">
                            <input type="submit" value="Modifier" class="px-3 py-2">
                        </form>
                    </td>
                </tr>
                @endforeach
                @endforeach

            </tbody>
            </table>
        </div>
        <div class="mt-6">
            {{$users->links()}}
        </div>

        <div class="mb-12 flex justify-between items-center">
            <h1 class="text-4xl">
                Liste des étudiants
            </h1>
            <form action="" method="get">
                <label for="name"  class="sr-only">Recherche</label>
                <input type="search" name="name" id="name" class="px-4 py-3">
            </form>
        </div>

        <div>
            @foreach ($users as $user)
            <div class="mb-10">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blueLightCustom">
                        <tr>
                        <th class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                            {{ $user->firstname }}
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                            {{ $user->name }}
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-lg font-bold">
                            {{ $user->group }}
                        </th>
                        </tr>
                    </thead>
                </table>

                @if ($user->orders)
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody>
                        @foreach ($user->orders as $order)
                            <tr class="flex justify-between p-5 bg-teal-300">
                                <td class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                                    {{ $order->id }}
                                </td>
                                <td class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                                    {{ $order->updated_at }}
                                </td>
                                <td class="px-6 py-5 bg-gray-50 text-left text-lg font-bold">
                                    {{ $order->status[0]->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <p>
                        Il n'y a pas de commande pour l'instant
                    </p>
                @endif

            </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{$users->links()}}
        </div>

    </main>
@endsection
