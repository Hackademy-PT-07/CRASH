<x-main>
    <x-slot:title>{{__('ui.editInsertion')}}</x-slot:title>
    <x-navbar/>

    <livewire:insertion-create-form :insertion="$insertion"/>
</x-main>
