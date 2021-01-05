<div>
    <div class="flex items-center justify-between mb-12">
        <h1 class="text-4xl">
            Liste des livres disponibles
        </h1>
        <div class="flex">
            <form action="#" method="get">
                <input type="search" name="search" id="search" class="px-4 py-2 mr-10" placeholder="Rechercher un livre" wire:model='name'>
                <noscript>
                    <input type="submit" value="Filtrer">
                </noscript>
            </form>
            <a href="book/create" class="px-4 py-2 rounded shadow cursor-pointer bg-blueLightCustom hover:font-bold">Ajouter un livre</a>
        </div>

    </div>

    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-blueLightCustom">
            <tr>
                <th class="px-6 py-5 text-lg font-bold text-left bg-gray-50">
                    Titre
                </th>
                <th class="px-6 py-3 text-lg font-bold text-left bg-gray-50">
                    ISBN
                </th>
                <th class="px-6 py-3 text-lg font-bold text-left bg-gray-50">
                    Mise a jour
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($books as $book)
                <tr class="mb-5">
                    <td class="px-6 py-4"><a href="book/{{ $book->id }}" class="hover:font-bold">{{ $book->name }}</a></td>
                    <td class="px-6 py-4">{{ $book->ISBN }}</td>
                    <td class="px-6 py-4">{{ $book->updated_at }}</td>
                </tr>
            @endforeach

        </tbody>
        </table>
    </div>
</div>
