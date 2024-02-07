
<div class="bg-gradient-to-b from-babyblue to-white">
@include("component.navbar")
    @livewire('notifications')
    <form wire:submit.prevent="create" class="lg:mx-80 lg:mb-10 m-5">
        {{ $this->form }}

        @if(!$formSubmitted)
            <button type="submit" class="bg-blue1 p-2 mt-2 rounded text-white">
                Kirim
            </button>
        @else
            <button type="button" class="bg-pink1 p-2 mt-2 rounded text-white" disabled>
                Diterima
            </button>
        @endif
    </form>

    <x-filament-actions::modals />
    @include("component.footer")
</div>
