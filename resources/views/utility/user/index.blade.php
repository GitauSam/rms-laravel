<x-app-beta>
    <x-slot name="links">
        <div class="link">
            <a href="{{ route('utility.create') }}">Add Utility</a>
        </div>
        <div class="link">
            <a href="{{ route('payments.index') }}">View Payments</a>
        </div>
    </x-slot>
    <x-slot name="games">
        <div class="games">
            <div class="status">
                <h1>View Utilities</h1>
            </div>
            @if(session('success_notif'))
                <div x-show="success_notif" class="notification-card notification-card-success" x-cloak>
                    <p>{{ session('success_notif') }}</p>
                    <i @click="success_notif = false" class="far fa-window-close"></i>
                </div>
            @elseif(session('failure_notif'))
                <div x-show="failure_notif" class="notification-card notification-card-failure" x-cloak>
                    <p>{{ session('failure_notif') }}</p>
                    <i @click="failure_notif = false" class="far fa-window-close"></i>
                </div>
            @endif
            <livewire:user-index-utility />
        </div>
    </x-slot>
</x-app-beta>