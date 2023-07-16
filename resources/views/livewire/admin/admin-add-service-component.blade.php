<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Add service</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Add service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <section class="content-central">
                <div class="content_info">
                <div class="paddings-mini">
                    <div class="container">
                    <div class="row portfolioContainer">
   
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                            <div class="row">
                            <div class="col-md-6">

                                <h3>Add new Service Category Info</h3>

</div>
<div class="col-md-6">

    <a href="{{route('admin.service_categories')}}" class="btn btn-info pull right">All Categories</a>

</div>
</div>
</div>
<div class="panel-body">
@if(Session::has('message'))
<div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
@endif
<form class="form-horizontal" wire:submit.prevent="createService">
    @csrf
    <div class="form-group">
        <label for="name" class="control-label col-sm-3"> Name</label>
                                        <div class="col-sm-9">
    <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug"/>
                 @error('name') <p class="text-danger">{{$message}}  </p>  @enderror         
                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> slug</label>
                                        <div class="col-sm-9">
    <input type="text" class="form-control" name="slug" wire:model="slug"/>
    @error('slug') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> Service Category</label>
                                        <div class="col-sm-9">
                                        <select class="form-control" wire:model="service_category_id">
                                        <option value="">Select Service Category</option>
                         @foreach($categories as $category)                                                                 
                         <option value="{{$category->id}}">{{$category->name}}</option>
                         @endforeach
</select>
@error('slug')<p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                    </div>                  
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> Tagline</label>
                                        <div class="col-sm-9">
    <input type="text" class="form-control" name="tagline" wire:model="tagline"/>
    @error('tagline') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> price</label>
                                        <div class="col-sm-9">
    <input type="text" class="form-control" name="price" wire:model="price"/>
    @error('price') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> discount</label>
                                        <div class="col-sm-9">
    <input type="text" class="form-control" name="discount" wire:model="discount"/>
    @error('discount') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> discount</label>
        <div class="col-sm-9">
        <select class="form-control" wire:model="discount_type">
        <option value="">Select Service Category</option>                   
        <option value="fixed">fixed</option>                   
        <option value="percent">Percent</option> 
</select>
@error('discount_type') <p class="text-danger">{{$message}}</p>@enderror</div>                  

                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> description</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" wire:model="description"></textarea>                                
    @error('description') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> inclusion</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" wire:model="inclusion"></textarea>                                
    @error('inclusion') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> exclusion</label>
                                        <div class="col-sm-9">
                                        <textarea class="form-control" wire:model="exclusion"></textarea>                                
    @error('exclusion') <p class="text-danger">{{$message}}  </p>  @enderror         

                                        </div>
                                    </div>
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> image</label>
                                        <div class="col-sm-9">
    <input type="file" class="form-control-file" name="image" wire:model="image"/>
    
    @error('image') <p class="text-danger">{{$message}}  </p>  @enderror  
    @if($image)
    <img src="{{$image->temporaryUrl()}}" width="60" />
    @endif      

                                        </div>
                                    </div>   
                                       
                                    <div class="form-group">
        <label for="slug" class="control-label col-sm-3"> thumbnail</label>
                                        <div class="col-sm-9">
    <input type="file" class="form-control-file" name="thumbnail" wire:model="thumbnail"/>
    
    @error('thumbnail') <p class="text-danger">{{$message}}  </p>  @enderror  
    @if($thumbnail)
    <img src="{{$thumbnail->temporaryUrl()}}" width="60" />
    @endif      

                                        </div>
                                    </div>                      
<button type="submit" class="btn btn-success pull-right">Add Service</button>
                     
                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="section-twitter">
                <i class="fa fa-twitter icon-big"></i>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </section>
      
                        </div>
                    </div>
                </div>                
            </div>          
              </div>          

