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



<div class="grid grid-cols-2 gap-5">
    @foreach($users as $key => $user)
        <div>
            <div class="flex flex-row justify-between p-5 bg-blueLightCustom">
                <p>
                    {{ $user->name }} - {{ $user->firstname }}
                </p>
                <p>
                    {{ $user->group }}
                </p>
            </div>
            <div class="p-5 bg-white">
                @foreach($user->orders as $i => $order)
                    <a href="/order/{{ $order->id }}" class="">
                    	<div class="flex flex-row items-center justify-between p-2 border-b-2 hover:bg-blue-200">
                    	    <span>{{ $order->status[0]->name }}</span> <span>{{ ($order->updated_at)->format('d M - G:m') }}</span>
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
                    	</div>
                    </a>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<div class="mt-6">
    {{$users->links()}}
</div>
