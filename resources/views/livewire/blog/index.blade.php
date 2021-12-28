<div class="container">
    <section class="text-center">
        <div class="input-group mb-3">
            <input type="text" class="form-control" wire:model="search" placeholder="Search posts..." aria-label="Recipient's username"
                aria-describedby="button-addon2"/>
            @if ($search!='')
                <button wire:click="search"class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    Search
                </button>    
            @endif
        </div>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay hover-zoom ripple"  data-mdb-ripple-color="light">
                            <img src="{{ Storage::url($blog->photo) }}" class="img-fluid"/>
                            <a href="{{ route('readBlog', $blog->id) }}">
                                <div class="mask" style="background-color: rgba(57, 192, 237, 0.2);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="">{{ Str::limit($blog->title, 20, '...') }}</h5>
                            <p class="card-text">{{ Str::limit($blog->text, 55, '...') }}</p>
                            <a href="{{ route('readBlog', $blog->id) }}"class="btn btn-sm btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach   
            <div class="pagination justify-content-center">
                {{ $blogs->links() }} 
            </div>
        </div>
    </section>
</div>