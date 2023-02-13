<x-app-layout>
        <div class="container mx-auto">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
    {{--         @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form method="POST" action="{{ route('form.contact.edit',['id' => $contact->id]) }}" class="flex flex-col space-x-10 space-y-10">
                @method('PUT')

                @csrf
                
                <div class="flex items-center space-x-2 mx-auto">
                    <div class="w-1/2">
                        <x-label for="name" class="font-semibold text-lg" :value="__('Nome do contato')" />
        
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name',$contact->name?? '')"  autofocus />
                    </div>
                    <div class="w-1/2">
                        <x-label for="contact" class="font-semibold text-lg" :value="__('Telefone')" />
        
                        <x-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact',$contact->contact?? '')"  autofocus />
                    </div>
                </div>
                
                <div class="flex items-center space-x-2">
                    <div class="w-1/2">
                        <x-label for="email" class="font-semibold text-lg" :value="__('Email')" />
        
                        <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email',$contact->email?? '')"  autofocus />
                    </div>
                    <div class="w-1/2">
                        <x-label for="name" class="font-semibold text-lg" :value="__('Endereço')" />
        
                        <x-input id="name" class="block mt-1 w-full" type="text" name="address" :value="old('address',$contact->address?? '')"  autofocus />
                    </div>
                </div>
                <div class="flex items-center justify-center">
                     <button type="submit" class="p-5 w-1/2 bg-green-400 hover:bg-green-600 rounded text-gray-50 shadow-md transition ease-in">CRIAR CONTATO</button>
                </div>
            </form>
        </div>
    </x-app-layout>