<x-app-layout>
<div class="container mx-auto p-10 space-y-10">
    <a href="{{ route('form.contact.get') }}" class="p-5 w-1/2 bg-green-400 hover:bg-green-600 rounded text-gray-50 shadow-md transition ease-in mx-auto">ADCIONAR CONTATO</a>
    <x-table-component  :data="$contacts"/>
</div>
</x-app-layout>