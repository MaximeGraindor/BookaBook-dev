<div>
    <div class="flex items-center justify-between mb-12">
        <h1 class="text-4xl">
            Liste des étudiants
        </h1>
        <form action="" method="get">
            <label for="name"  class="sr-only">Recherche</label>
            <input  type="search"
                    name="name"
                    id="name"
                    class="px-4 py-3"
                    placeholder="rechercher un étudiant"
                    wire:model="name">
        </form>
    </div>

    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-blueLightCustom">
            <tr>
            <th class="px-6 py-5 text-lg font-bold text-left bg-gray-50">
                Prénom
            </th>
            <th class="px-6 py-3 text-lg font-bold text-left bg-gray-50">
                Nom
            </th>
            <th class="px-6 py-3 text-lg font-bold text-left bg-gray-50">
                Groupe
            </th>
            <th class="px-6 py-3 text-lg font-bold text-left bg-gray-50">
                Mise a jour
            </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $key=>$user)
            <tr class="{{ $key%2 ? 'bg-green-200' : 'bg-blue-200'  }}">
                <td class="px-6 py-4 font-bold text-left">{{ $user->firstname }}</td>
                <td class="px-6 py-4 font-bold text-left">{{ $user->name }}</td>
                <td class="px-6 py-4 font-bold text-left">{{ $user->group }}</td>
                <td class="px-6 py-4 font-bold text-left">{{ $user->updated_at }}</td>
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
</div>
