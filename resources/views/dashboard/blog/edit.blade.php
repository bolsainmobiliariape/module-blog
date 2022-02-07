<x-panel title="Informacion del articulo" description="Llene todos los campos">
    <div class="col-span-6">
        <x-form.image-field wire:model="picture" name="picture" :path="isset($blog->picture) ? (string) url(Storage::url($blog->picture)) : 'null'"/>
    </div>

    <div class="col-span-6">
        <x-form.input-field type="text" label="Titulo" identifier="title" name="title" wire:model="blog.title"/>
    </div>

    <div class="col-span-6">
        <x-form.label for="description" value="{{ __('Description') }}" />
        <textarea name="description" wire:model="blog.description" class="block w-full px-4 mt-2 border-gray-300 rounded-lg"></textarea>
        @error('blog.description') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    </div>


    <div class="col-span-6" wire:ignore>
        <x-form.label for="content" value="{{ __('Contenido') }}" />
        <textarea id="content" name="content" wire:model="blog.content" class="block w-full px-4 mt-2 border-gray-300 rounded-lg"></textarea>
        @error('blog.content') <p class="text-sm text-red-500">{{ $message }}</p> @enderror
    </div>

    <script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
    <script>
        const editor = CKEDITOR.replace('content');
        editor.on('change', function(event){
            @this.set('blog.content', event.editor.getData());
        })
    </script>

    {{-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    {{-- <script src="{{asset('ckeditor/ckeditor.js')}}"></script> 
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        // CKEDITOR.replace('content',{
        // });
    </script> --}}
</x-panel>