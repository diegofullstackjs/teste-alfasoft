@props(['data'])
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Nome</th>
            <th scope="col" class="px-6 py-3">Contato</th>
            <th scope="col" class="px-6 py-3">Email</th>
            <th scope="col" class="px-6 py-3">Endereço</th>
            <th scope="col" class="px-6 py-3 text-right">Ação</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($data))
        @foreach ($data as $contact)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->name }}</th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->contact }}</th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->email }}</th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $contact->address }}</th>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            <div class="flex w-full justify-end">
               
                    <a href="{{ route('form.contact.edit.form',['id' => $contact->id]) }}" class="p-2 border rounded bg-yellow-600  hover:bg-yellow-700 text-white">EDITAR</a>
                    <a 
                    href="{{ route('form.contact.delete',['id' => $contact->id]) }}" class="p-2 border rounded bg-red-800 hover:bg-red-700 text-white">
                    EXCLUIR</a>
            </div></th>
        </tr>
        @endforeach  
        @else
        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                no records found
            </th>
        </tr>
        @endif
    </tbody>
  </table>