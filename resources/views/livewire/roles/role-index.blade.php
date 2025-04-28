<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Roles') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all your roles') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        @session('success')
            <div class="text-xs bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ $value }}</span>
            </div>
        @endsession

        <a href="{{route("roles.create")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-800 focus:ring-green-300 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out">
            Create Role
        </a>

        <div class="overflow-x-auto mt-6">
            <table class="min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Permissions</th>
                <th scope="col" class="px-6 py-3 w-80">Actions</th>
            </tr>
            </thead>
            <tbody>
  
            @foreach($roles as $role)
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                    <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">{{$role->id}}</td>
                    <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{$role->name}}</td>
                    <td class="px-6 py-2 text-gray-600 dark:text-gray-300">{{$role->email}}</td>
                    <td class="px-6 py-2">
                        <a href="{{ route('roles.show', $role->id) }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-gray-600 rounded-md hover:bg-gray-500 transition duration-150 ease-in-out">Show</a>
                        <a href="{{ route('roles.edit', $role->id) }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none  transition duration-150 ease-in-out">Edit</a>
                        <button wire:click="delete({{$role->id}})" wire:confirm ="Are you sure to remove this role" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-500 transition duration-150 ease-in-out">Delete</button>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
