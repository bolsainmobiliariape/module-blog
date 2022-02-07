<?php

namespace Bolsainmobiliariape\ModuleBlog\Http\Livewire\Dashboard\Blog;

use Bolsainmobiliariape\ModuleBlog\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;

class Index extends Component
{
    use WithPagination;
    use WithSorting;

    public $idDelete;

    public function delete()
    {
        Blog::destroy($this->idDelete);
        $this->dispatchBrowserEvent('notice', ['type'=>'success','text'=> 'Articulo eliminado con exito!']);
    }

    public function render()
    {
        return view('module-blog::dashboard.blog.index', [
            'blogs' => Blog::orderBy($this->sortField, $this->sortDirection)->paginate($this->perPage),
        ])->layoutData(['header'=>'Contact']);
    }
}