@include("component.navbar")
<div>
    <form wire:submit="create" class="lg:mx-80 lg:mb-10 m-5">
        {{ $this->form }}
        
        <button type="submit" class="bg-slate-300 p-2 mt-2">
            Submit
        </button>
    </form>
    
    <x-filament-actions::modals />
</div>
@include("component.footer")