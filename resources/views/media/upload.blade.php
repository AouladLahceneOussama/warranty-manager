<div class="w-full p-4 mb-4 bg-teal-50 rounded">
    <div class="w-full">
        <div class="flex justify-between items-center">
            <span class="text-teal-600 text-xl ">{{ __('Les fichiers attachés ') }}</span>
        </div>
        <div class="bg-gray-300 my-2 w-full h-px"></div>
    </div>

    <label class="block">
        <div class="w-full my-2 flex justify-center items-center">
            <input wire:model="medias" type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-teal-600 file:text-white hover:file:bg-teal-700" multiple />
            <div wire:loading role="status">
                <svg aria-hidden="true" class="mr-2 w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-teal-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        @error('medias.*')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </label>



    @forelse($allMedias as $media)
    <div class="flex justify-between items-center py-4 px-4 rounded-md shadow-lg my-3">
        <div>
            <span class="text-xs font-bold">{{ $media->getClientOriginalName() }}</span>
            <span class="text-xs text-gray-600"> ( {{ $media->getSize() / 1000 }} <strong>mb</strong> ) </span>
        </div>

        <i wire:click.prevent="delete({{$loop->index}})" class="fa-solid fa-trash text-xs text-red-300 hover:text-red-500 duration-150 ease-in-out cursor-pointer"></i>
    </div>
    @empty
    <div class="my-2">
        <span class="text-xs text-gray-600">Telecharger vos documents (pdf, docs)</span>
    </div>
    @endforelse
</div>