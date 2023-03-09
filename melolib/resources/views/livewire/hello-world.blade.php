<x-modal form-action="update">
    <x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋 {{ $counter }}
    </x-slot>

    <x-slot name="buttons">
        <button type="submit">Start counting</button>
        <button class="bg-red-600" onclick="Livewire.emit('closeModal', 'hello-world')">Close Modal</button>
        <button wire:click='$emit("openModal", "child-modal", @json(["name" => "Philo"]))' type="button">Open Child</button>
    </x-slot>
</x-modal> 