<div>
    <form class="w-full py-2 px-8 mt-4 h-full">

        {{-- information generale --}}
        <div class="w-full p-4 mb-4 bg-teal-50 rounded">

            <div class="w-full mb-3">
                <span class="text-teal-600 text-xl ">{{ __('Informations générales') }}</span>
                <div class="bg-gray-200 w-full h-px"></div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="compagnie">
                        {{ __('Compagnie') }}
                    </label>
                    <input wire:model="folder.compagnie" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Compagnie" id="compagnie" />
                    @error('folder.compagnie')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="souscripteur">
                        {{ __('Souscripteur') }}
                    </label>
                    <input wire:model="folder.souscripteur" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Nom prénom" id="souscripteur" />
                    @error('folder.souscripteur')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="date_effet">
                        {{ __('Date d\'effet') }}
                    </label>
                    <input wire:model="folder.date_effet" type="date" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="date d'effet" id="date_effet" />
                    @error('folder.date_effet')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="cotisation_ht">
                        {{ __('Cotisation') }}
                    </label>
                    <input wire:model="folder.cotisation_ht" type="number" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Cotisation" id="cotisation_ht" />
                    @error('folder.cotisation_ht')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-4">

                  <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="numero_adheration">
                        {{ __('Numero d\'adhesion') }}
                    </label>
                    <input wire:model="folder.numero_adheration" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Numero d'adhesion" id="numero_adheration" />
                    @error('folder.numero_adheration')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="statut">
                        {{ __('Status') }}
                    </label>
                    <div class="flex  items-center">
                        <label class="inline-flex relative items-center cursor-pointer">
                            <input wire:model="folder.status" type="checkbox" value="COMPLET" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-teal-600">
                            </div>
                            <span class="ml-3 text-sm font-medium text-gray-700 ">Dossier
                                Complet</span>
                        </label>
                        @error('folder.statut')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        {{-- assuré principal --}}
        <div class="w-full p-4 mb-4 bg-teal-50 rounded">

            <div class="w-full mb-3">
                <div class="flex justify-between items-center">
                    <span class="text-teal-600 text-xl ">{{ __('Informations de l\'assuré principal') }}</span>
                </div>
                <div class="bg-gray-200 w-full h-px"></div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="civilite">
                        {{ __('Civilité') }}
                    </label>
                    <select wire:model="insureds.primary.civilite" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="civilite">
                        <option value="M.">M.</option>
                        <option value="Mme">Mme</option>
                        <option value="Mlle">Mlle</option>
                    </select>
                    @error('civilite')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="nom">
                        {{ __('Nom') }}
                    </label>
                    <input wire:model="insureds.primary.nom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Nom de l'assuré" id="nom" />
                    @error('nom')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="prenom">
                        {{ __('Prénom') }}
                    </label>
                    <input wire:model="insureds.primary.prenom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Prénom de l'assuré" id="prenom" />
                    @error('prenom')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="date_naissance">
                        {{ __('Date de naissance') }}
                    </label>
                    <input wire:model="insureds.primary.date_naissance" type="date" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="date_naissance" />
                    @error('date_naissance')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="code_securite_social">
                        {{ __('Code securité social') }}
                    </label>
                    <input wire:model="insureds.primary.code_securite_social" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Code securité social" id="code_securite_social" />
                    @error('code_securite_social')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>

        
            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="primary_phone">
                        {{ __('Numero Telephone primaire') }}
                    </label>
                    <input wire:model="insureds.primary.primary_phone" type="tel" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Numero telephone primaire" id="primary_phone" />
                    @error('primary_phone')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="secondary_phone">
                        {{ __('Numero Telephone secondaire') }}
                    </label>
                    <input wire:model="insureds.primary.secondary_phone" type="tel" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Numero telephone secondaire" id="secondary_phone" />
                    @error('secondary_phone')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="email">
                        {{ __('Email') }}
                    </label>
                    <input wire:model="insureds.primary.email" type="email" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="jhon.doe@gmail.com" id="email" />
                    @error('email')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="flex flex-wrap -mx-3 mb-4">

                <div class="w-full md:w-2/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="iban">
                        {{ __('IBAN') }}
                    </label>
                    <input wire:model="insureds.primary.iban" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="IBAN" id="iban" />
                    @error('iban')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="jour_prelevement">
                        {{ __('Jour de prélèvement') }}
                    </label>
                    <div class="flex items-center">
                        <input wire:model="insureds.primary.jour_prelevement" id="disabled-radio-2" type="radio" value="5" name="disabled-radio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                        <label for="disabled-radio-2" class="mx-2 text-sm font-medium text-gray-700 ">5</label>

                        <input wire:model="insureds.primary.jour_prelevement" id="disabled-radio-2" type="radio" value="10" name="disabled-radio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                        <label for="disabled-radio-2" class="mx-2 text-sm font-medium text-gray-700 ">10</label>

                        <input wire:model="insureds.primary.jour_prelevement" id="disabled-radio-2" type="radio" value="15" name="disabled-radio" class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2">
                        <label for="disabled-radio-2" class="mx-2 text-sm font-medium text-gray-700 ">15</label>
                    </div>
                    @error('jour_prelevement')
                    <span class="text-red-500 text-xs italic">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        {{-- assuré secondaire --}}
        <div class="w-full p-4 mb-4 bg-teal-50 rounded">
            <div class="w-full mb-3">
                <div class="flex justify-between items-center">
                    <span class="text-teal-600 text-xl ">{{ __('Informations de l\'assuré secondaire') }}</span>

                </div>
                <div class="bg-gray-200 w-full h-px"></div>
            </div>
            <div class="w-full">

                <div class="flex flex-wrap -mx-3 mb-4">

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="nom">
                            {{ __('Nom de famille') }}
                        </label>
                        <input wire:model="insureds.secondary.nom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Nom de l'assuré" id="nom" />
                        @error('nom')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="prenom">
                            {{ __('Prénom') }}
                        </label>
                        <input wire:model="insureds.secondary.prenom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Prénom de l'assuré" id="prenom" />
                        @error('prenom')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="date_naissance">
                            {{ __('Date de naissance') }}
                        </label>
                        <input wire:model="insureds.secondary.date_naissance" type="date" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="date_naissance" />
                        @error('date_naissance')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="civilite">
                            {{ __('Civilité') }}
                        </label>
                        <select wire:model="insureds.secondary.civilite" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="civilite">
                            <option value="M.">M.</option>
                            <option value="Mme">Mme</option>
                            <option value="Mlle">Mlle</option>
                        </select>
                        @error('civilite')
                        <span class="text-red-500 text-xs italic">{{ $message }}</span>
                        @enderror
                    </div>
                    




                </div>
            </div>
        </div>

        {{-- Enfants --}}
        <div class="w-full p-4 mb-4 bg-teal-50 rounded">
            <div class="w-full">
                <div class="flex justify-between items-center">
                    <span class="text-teal-600 text-xl ">{{ __('Enfants') }}</span>

                </div>
                <div class="bg-gray-300 my-2 w-full h-px"></div>
            </div>

            @foreach ($insureds['children'] as $key => $value)
            <div wire:key="{{ $key }}" class="w-full bg-white bg-opacity-70 p-2 my-2 rounded">
                <div class="w-full mb-3">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-xs ">{{ __('Enfant') . ' N°' . $key + 1 }}</span>
                        <button wire:click.prevent="removeChild({{ $key }})" class="mb-2 px-8 py-2 bg-red-500 border rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 focus:outline-none focus:border-gray-900 disabled:opacity-25 transition">
                            {{ __('Supprimer l\'enfant') }}
                        </button>
                    </div>
                    <div class="bg-gray-200 w-full h-px"></div>
                </div>
                <div class="w-full">

                    <div class="flex flex-wrap -mx-3 mb-4">

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="civilite_enf_{{ $key }}">
                                {{ __('Civilité') }}
                            </label>
                            <select wire:model="insureds.children.{{ $key }}.civilite" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="civilite_enf_{{ $key }}">
                                <option value="M.">M.</option>
                                {{-- <option value="Mme">Mme</option> --}}
                                <option value="Mlle">Mlle</option>
                            </select>
                            @error('civilite_enf_{{ $key }}')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="nom_enf_{{ $key }}">
                                {{ __('Nom') }}
                            </label>
                            <input wire:model="insureds.children.{{ $key }}.nom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Nom de l'assuré" id="nom_enf_{{ $key }}" />
                            @error('nom_enf_{{ $key }}')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>

                       

                    </div>

                    <div class="flex flex-wrap -mx-3 mb-4">

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="prenom_enf_{{ $key }}">
                                {{ __('Prénom') }}
                            </label>
                            <input wire:model="insureds.children.{{ $key }}.prenom" type="text" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Prénom de l'assuré" id="prenom_enf_{{ $key }}" />
                            @error('prenom_enf_{{ $key }}')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-1" for="date_naissance__enf_{{ $key }}">
                                {{ __('Date de naissance') }}
                            </label>
                            <input wire:model="insureds.children.{{ $key }}.date_naissance" type="date" class="text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-gray-500 focus:outline-none focus:transition-shadow" placeholder="Date de naissance" id="date_naissance__enf_{{ $key }}" />
                            @error('date_naissance__enf_{{ $key }}')
                            <span class="text-red-500 text-xs italic">{{ $message }}</span>
                            @enderror
                        </div>
                       
                       




                    </div>
                </div>
            </div>
            @endforeach
            <button wire:click.prevent="addChild()" class="mb-2 px-4 py-2 bg-teal-600 border rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 focus:outline-none focus:border-gray-900 disabled:opacity-25 transition">
                {{ __('Ajouter un enfant') }}
            </button>
        </div>

        {{-- Documments --}}
        <livewire:media.upload />

        <button wire:click.prevent="create" class="px-8 py-2 bg-teal-600 border rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-600 focus:outline-none focus:border-gray-900 disabled:opacity-25 transition">
            {{ __('Enregistrer') }}
        </button>
    </form>
</div>