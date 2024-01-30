
<div>
@include("component.navbar")
    @livewire('notifications')
    <form wire:submit="create" class="lg:mx-80 lg:mb-10 m-5">
        {{ $this->form }}

        <button type="submit" class="bg-blue1 p-2 mt-2 rounded text-white">
            Kirim
        </button>
    </form>

    <x-filament-actions::modals />
    @include("component.footer")
</div>
