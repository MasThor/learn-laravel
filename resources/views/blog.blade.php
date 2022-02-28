<x-app-layout title="Blog">
    @slot('styles')
        <style>
            body{
                background-color: #234
            }
        </style>
    @endslot

    Blog

    <x-slot name="scripts">
        <script>
            alert("TEst")
        </script>
    </x-slot>
</x-app-layout>