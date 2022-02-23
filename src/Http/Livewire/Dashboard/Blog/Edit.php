<?php

namespace Bolsainmobiliariape\ModuleBlog\Http\Livewire\Dashboard\Blog;

use Bolsainmobiliariape\ModuleBlog\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    public Blog $blog;

    public $picture;

    public function mount(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function rules()
    {
        return config('module-blog.rules');
    }

    public function store()
    {
        $this->validate();

        if($this->picture){
            if($this->blog->picture){
                Storage::delete($this->blog->picture);
            }
            $this->blog->picture = $this->picture->store('public/blog');
        }
        $this->blog->slug = Str::slug($this->blog->title);

        if($this->blog->isDirty()){
            $this->blog->save();

            $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Se ha guardado con exito!']);
            return ;
        }

        $this->dispatchBrowserEvent('notice', ['type'=>'info','text'=> 'No hay nada que guardar']);
    }

    public function render()
    {
        return view('module-blog::dashboard.blog.edit')->layoutData(['header' => "Blog / Form"]);
    }
}