<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Users') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Manage your all your users') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    <div>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">ID</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3 w-80">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800">
                <td class="px-6 py-2 font-medium text-gray-900 dark:text-white">ID</td>
                <td class="px-6 py-2 text-gray-600 dark:text-gray-300">Title</td>
                <td class="px-6 py-2 text-gray-600 dark:text-gray-300">Body</td>
                <td class="px-6 py-2">
                    <button class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out">Edit</button>
                    <button class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red transition duration-150 ease-in-out">Edit</button>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>