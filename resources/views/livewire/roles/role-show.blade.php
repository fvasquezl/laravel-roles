<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show a role') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        <a href="{{route("roles.index")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-800 focus:ring-green-300 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out">
            Back
        </a>

        <div class="mt-4">
            <p><strong>Name:</strong> {{ $role->name }}</p>
            <p><strong>Permissions:</strong>
                @if ($role->permissions)
                    @foreach ($role->permissions as $permission)
                        <flux:badge> {{ $permission->name }}</flux:badge>
                    @endforeach
                @endif
                </p>
        </div>
    </div>
</div>
