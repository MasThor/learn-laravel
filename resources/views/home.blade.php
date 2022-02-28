<x-app-layout title="Learn Laravel">
    <p>Home</p>

    @component('components.alert')
        @slot('header')
            It's Header
        @endslot
        it's slot (children). <br>
        It's Default Component
        @slot('footer')
            It's Footer
        @endslot

    @endcomponent
    <br>
    <br>
    <x-alert>
        <x-slot name="header">
            Anonymous Component
        </x-slot>

        <p>It's use anonymous component</p>
       
        <x-slot name="footer">
            This can only be used, if the component file is in the <strong>views > components</strong> folder 
        </x-slot>
    </x-alert>
</x-app-layout>