
<x-modal >
<x-slot name="title">
        Hello World
    </x-slot>

    <x-slot name="content">
        Hi! 👋 {{ $counter }}
    </x-slot>

    <x-slot name="buttons">
        <button type="submit">Start counting</button>
    </x-slot>
    <button onclick="Livewire.emit('closeModal', 'hello-world')">Close Modal</button>
</x-modal>

