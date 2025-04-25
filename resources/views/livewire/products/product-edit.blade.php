<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Edit Product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('form for edit a product') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        <a href="{{route("products.index")}}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-green-600 rounded-md hover:bg-green-800 focus:ring-green-300 focus:outline-none focus:shadow-outline-green transition duration-150 ease-in-out">
            Back
        </a>

        <div class="w-150">
            <form class="mt-6 space-y-6" wire:submit="submit">
                <flux:input wire:model="name" label="Name" placeholder="Name" />
                <flux:textarea wire:model="detail"
                               label="Detail"
                               placeholder="Details"
                />
                <flux:button type="submit" variant="primary">Submit</flux:button>
            </form>
        </div>
    </div>
</div>