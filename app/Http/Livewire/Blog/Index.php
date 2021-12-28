<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use App\Models\User;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners=['refreshBlog'];

    public $search = '';
    public $page = 1;
    public $xPage = 6;
 
    protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['except' => 1, 'as' => 'p'],
    ];

    public function mount()
    {
        
    }

    public function render()
    {
        $blogs = Blog::where('title', 'like', '%'.$this->search.'%')->latest()->paginate($this->xPage);
        $data = array('blogs' =>$blogs);
        return view('livewire.blog.index', $data);
    }

    public function refreshBlog()
    {
        $this->mount();
    }

    public function search() 
    {
        $this ->search='' ;
        $this->xPage = 6;
        $this->page = 1;
    }
}
