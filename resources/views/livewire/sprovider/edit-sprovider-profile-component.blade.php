<div>
<div>
<div>
<div class="section-title-01 honmob">
            <div class="bg_parallax image_02_parallax"></div>
            <div class="opacy_bg_02">
                <div class="container">
                    <h1>Edit new Profile</h1>
                    <div class="crumbs">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>/</li>
                            <li>Edit new Profile</li>
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

                                <h3>Add new Service Profile Info</h3>

</div>
<div class="col-md-6">

profile
</div>
</div>
</div>
<div class="panel-body">

<div class ="row">
<div class ="col-md-4">
    @if($sprovider->image)
    <img src="{{asset('images/sproviders')}}/{{$provider->image}}" width="100" />
    @else
    <img src="{{asset('images/sproviders/default.jpg')}}" width="100" />
@endif
</div>
<div class="col-md-8">
<h3>Name: {{Auth::user()->name}}</h3>
<p> {{$sprovider->about}}</p>
<h3>Email: {{Auth::user()->email}}</h3>
<h3>Phone: {{Auth::user()->phone}}</h3>
<h3>City: <p> {{$sprovider->city}}</p>
</h3>
<h3> Servive Locations: {{$sprovider->service_location}}</h3>

<h3> Servive Category:
@if($sprovider->service_category_id)
{{$sprovider->category->name}}
@endif
</h3>


    
   

                                        </div>
                                    </div>                      
                     
                    
                                    
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


</div>

</div>
