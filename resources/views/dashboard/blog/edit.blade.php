<x-panel title="Informacion del articulo" description="Llene todos los campos">
    <div class="col-span-6">
        <x-form.image-field wire:model="picture" name="picture" :path="isset($blog->picture) ? (string) url(Storage::url($blog->picture)) : 'null'" :required="empty($blog->id)"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="text" label="Titulo" identifier="blog.title" name="blog.title" wire:model="blog.title"/>
    </div>

    <div class="col-span-6">
        <x-form.label for="description" value="{{ __('Description') }}" />
        <textarea name="description" wire:model="blog.description" class="block w-full px-4 mt-2 border-gray-300 rounded-lg"></textarea>
        @error('blog.description') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    </div>


    <div class="col-span-6" wire:ignore>
        @if($blog->id)
        <div class="my-2 p-2 bg-gray-300 text-sm">
            <span class="font-bold">Consejo!</span>
            Si no se rellena el contenido refresca la pagina con <span class="py-1 px-2 bg-gray-600 text-white">Ctrl+Shift+R</span>
        </div>
        @endif

        <x-form.label for="content" value="{{ __('Contenido') }}" />
        <textarea id="content" name="content" wire:model="blog.content" class="block w-full px-4 mt-2 border-gray-300 rounded-lg"></textarea>
    </div>
    <div class="col-span-6">
        @error('blog.content')<p class="text-sm text-red-500">{{ $message }}</p> @enderror
    </div>

    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
        const editor = CKEDITOR.replace('content');
        editor.on('change', function(event){
            @this.set('blog.content', event.editor.getData());
        })
    </script>
</x-panel>