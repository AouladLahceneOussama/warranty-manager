<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Modifier le Dossier') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[url('https://www.looknbe.com/wp-content/uploads/2021/10/assurance-sante.jpg')] bg-no-repeat bg-cover bg-center bg-fixed">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="flex justify-between items-start flex-wrap bg-teal-50 my-2 py-4 rounded-md">
                <div class="w-full md:w-1/2">
                    <livewire:comment.show :folderId="$folderId" />
                    @if(Gate::check('admin') || Gate::check('edit'))
                    <livewire:comment.create :folderId="$folderId" />
                    @endif
                </div>
                <div class="w-full md:w-1/2">
                    <livewire:appointment.show :folderId="$folderId" />
                    @if(Gate::check('admin') || Gate::check('edit'))
                    <livewire:appointment.create :folderId="$folderId" />
                    @endif
                </div>
            </div>
            

            <div class="bg-white  bg-opacity-70  overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mb-4">
                    <livewire:folder.form-edit :folderId="$folderId">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>