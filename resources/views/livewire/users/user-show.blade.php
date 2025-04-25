<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Show a user') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        <a href="{{route("users.index")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-800 focus:ring-green-300 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out">
            Back
        </a>

        <div class="mt-4">
            <p><strong>Name</strong>{{ $user->name }}</p>
            <p><strong>Email</strong>{{ $user->email }}</p>
        </div>
    </div>
</div>
