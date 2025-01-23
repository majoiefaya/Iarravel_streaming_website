<section class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-sm ring-1 ring-red-500/20 p-6">
    <header class="border-b border-red-200 dark:border-red-800 pb-4">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-red-100 dark:bg-red-900/50 rounded-full">
                <svg class="w-5 h-5 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            </div>
            <h2 class="text-xl font-semibold text-red-600 dark:text-red-400">
                {{ __('Delete Account') }}
            </h2>
        </div>
        <p class="mt-3 text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <div class="mt-6">
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="px-4 py-2 flex items-center gap-2"
        >
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
            {{ __('Delete Account') }}
        </x-danger-button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="bg-white dark:bg-gray-800 p-6">
            <header class="flex items-start gap-4 mb-6">
                <div class="p-2 bg-red-100 dark:bg-red-900/50 rounded-full shrink-0">
                    <svg class="w-6 h-6 text-red-600 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>
                </div>
            </header>

            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="space-y-3">
                    <div class="relative">
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="block w-full border-red-300 dark:border-red-700 focus:border-red-500 focus:ring-red-500"
                            placeholder="{{ __('Password') }}"
                        />
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <x-secondary-button x-on:click="$dispatch('close')" class="px-4 py-2">
                        {{ __('Cancel') }}
                    </x-secondary-button>
                    <x-danger-button class="px-4 py-2">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>
        </div>
    </x-modal>
</section>