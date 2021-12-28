<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\Blog;
use App\Models\User;
use Auth;
use Livewire\WithFileUploads;

//class UploadPhoto extends Component
class Create extends Component

{
    use WithFileUploads;
    public $title, $text, $photo;
    public function render()
    {
        return view('livewire.blog.create');
    }

    public function send()
    {
        $this->validate([
            'title'=>'required',
            'text'=>'required',
            'photo'=>'image|max:1024', // 1mb max
        ]);

        $path=$this->photo->store('public/blogs');

        $blog = new Blog();  
        $blog->title=$this->title;
        $blog->text=$this->text;
        $blog->photo=$path;
        $blog->user_id=Auth::id();
        $blog->save();
        $this->clean();
        $this->emit('refreshBlog');
    }
    public function clean()
    {
        $this->title='';
        $this->text='';
        $this->photo='';
    }
}
