@livewire('location-component')

 <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">

                <ul class="collapse">
                    <li class="title">
                        <a href="index.php.html"><img src="images/logo.png"></a>
                    </li>
                    
            <li> <a href="{{route('home.service_categories')}}">Service Categories</a> </li>

                    <!-- <li> <a href="{{route('home.service_categories')}}">Service Categories</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/ac-wet-servicing.html">Wet Servicing</a></li>
                            <li><a href="service-details/ac-dry-servicing.html">Dry Servicing</a></li>
                            <li><a href="service-details/ac-installation.html">Installation</a></li>
                            <li><a href="service-details/ac-uninstallation.html">Uninstallation</a></li>
                            <li><a href="service-details/ac-gas-top-up.html">Gas Top Up</a></li>
                            <li><a href="service-details/ac-gas-refill.html">Gas Refill</a></li>
                            <li><a href="service-details/ac-repair.html">Repair</a></li>
                        </ul>
                    </li> -->
                    <li> <a href="#">Appliances</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/11.html">Computer Repair</a></li>
                            <li><a href="servicesbycategory/12.html">TV</a></li>
                            <li><a href="servicesbycategory/1.html">AC</a></li>
                            <li><a href="servicesbycategory/14.html">Geyser</a></li>
                            <li><a href="servicesbycategory/21.html">Washing Machine</a></li>
                            <li><a href="servicesbycategory/22.html">Microwave Oven</a></li>
                            <li><a href="servicesbycategory/9.html">Chimney and Hob</a></li>
                            <li><a href="servicesbycategory/10.html">Water Purifier</a></li>
                            <li><a href="servicesbycategory/13.html">Refrigerator</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Needs</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/19.html">Laundry</a></li>
                            <li><a href="servicesbycategory/4.html">Electrical</a></li>
                            <li><a href="servicesbycategory/8.html">Pest Control</a></li>
                            <li><a href="servicesbycategory/7.html">Carpentry</a></li>
                            <li><a href="servicesbycategory/3.html">Plumbing </a></li>
                            <li><a href="servicesbycategory/20.html">Painting</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers</a></li>
                            <li><a href="servicesbycategory/5.html">Shower Filters </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Home Cleaning</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="service-details/bedroom-deep-cleaning.html">Bedroom Deep Cleaning</a></li>
                            <li><a href="service-details/overhead-water-storage.html">Overhead Water Storage </a></li>
                            <li><a href="/service-details/tank-cleaning">Tank Cleaning</a></li>
                            <li><a href="service-details/underground-sump-cleaning.html">Underground Sump Cleaning</a>
                            </li>
                            <li><a href="service-details/dining-chair-shampooing.html">Dining Chair Shampooing </a></li>
                            <li><a href="service-details/office-chair-shampooing.html">Office Chair Shampooing</a></li>
                            <li><a href="service-details/home-deep-cleaning.html">Home Deep Cleaning </a></li>
                            <li><a href="service-details/carpet-shampooing.html">Carpet Shampooing </a></li>
                            <li><a href="service-details/fabric-sofa-shampooing.html">Fabric Sofa Shampooing</a></li>
                            <li><a href="service-details/bathroom-deep-cleaning.html">Bathroom Deep Cleaning</a></li>
                            <li><a href="service-details/floor-scrubbing-polishing.html">Floor Scrubbing &amp; Polishing
                                </a></li>
                            <li><a href="service-details/mattress-shampooing.html">Mattress Shampooing </a></li>
                            <li><a href="service-details/kitchen-deep-cleaning.html">Kitchen Deep Cleaning </a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Special Services</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="servicesbycategory/16.html">Document Services</a></li>
                            <li><a href="servicesbycategory/15.html">Cars &amp; Bikes</a></li>
                            <li><a href="servicesbycategory/17.html">Movers &amp; Packers </a></li>
                            <li><a href="servicesbycategory/18.html">Home Automation</a></li>
                        </ul>
                    </li>
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype=='ADM')
                    <li class="login-form"> <a href="#" title="Register">My Account(Admin)</a>
 <ul class="drop-down one-column hover-fade">
     <li> <a href="{{route('admin.dashboard')}}">Dashboard </a> <li>
             <li> <a href="{{route('admin.service_categories')}}">Service Categories </a> <li>
             <li> <a href="{{route('admin.all_services')}}">All Services </a> <li>
             <li> <a href="{{route('admin.slider')}}">Manage Slider </a> <li>

     <li> <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a> <li>
  </ul>
                    </li>
                                 @elseif(Auth::user()->utype=='SVP')
                         <li class="login-form"> <a href="#" title="Register">My Account(S Provider)</a>
 <ul class="drop-down one-column hover-fade">
     <li> <a href="{{route('sprovider.dashboard')}}">Dashboard </a> <li>
     <li> <a href="{{route('sprovider.profile')}}">Profile </a> <li>

        <li> <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a> <li>
  </ul>
                    </li>
       @else
        <li class="login-form"> <a href="#" title="Register">My Account(customer)</a>
 <ul class="drop-down one-column hover-fade">
     <li> <a href="{{route('customer.dashboard')}}">Dashboard </a> <li>
        <li> <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a> <li>
  </ul>
                    </li>
              @endif
            <form id="logout-form" method="POST" action="{{route('logout')}}">
            @csrf
            </form>  
              @else
              <li class="login-form"> <a href="{{route('register')}}" title="Register">Register</a> </li>
       <li class="login-form"> <a href="{{route('login')}}" title="Login">Login</a> </li>       
                    @endif
                                        @endif

                    <li class="search-bar">
                    </li>
                </ul>
            </nav>
        </header>
        <section class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="assets/img/slide/1.jpg" alt="fullslide1" data-bgposition="center center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                    <li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="1000"
                        data-saveperformance="off" data-title="Slide">
                        <img src="assets/img/slide/2.jpg" alt="fullslide1" data-bgposition="top center"
                            data-kenburns="on" data-duration="6000" data-ease="Linear.easeNone" data-bgfit="130"
                            data-bgfitend="100" data-bgpositionend="right center">
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
            <div class="filter-title">
                <div class="title-header">
                    <h2 style="color:#fff;">BOOK A SERVICE</h2>
                    <p class="lead">Book a service at very affordable price, </p>
                </div>
                <div class="filter-header">
                    <form id="sform" action="{{route('searchService')}}" method="post">    
                        @csrf                    
                        <input type="text" id="q" name="q" required="required" placeholder="What Services do you want?"
                            class="input-large typeahead" autocomplete="off">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
            </div>
        </section>
        <section class="content-central">
            <div class="content_info content_resalt">
                <div class="container" style="margin-top: 40px;">
                    <div class="row">
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul id="sponsors" class="tooltip-hover">
                   @foreach($scategories as $scategory)             
        <li data-toggle="tooltip" title="" data-original-title="{{$scategory->name}}"> 
            <a href="{{route('home.services_by_category',['category_slug'=>$scategory->slug])}}">
                <img src="{{ asset('images/categories')}}/{{$scategory->image}}"
                                            alt="{{$scategory->name}}"></a></li>
                               
@endforeach                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="semiboxshadow text-center">
                <img src="assets/img/img-theme/shp.png" class="img-responsive" alt="">
            </div>
            <div class="content_info">
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="titles">
                                <h2>SurfsideMedia <span>Choice</span> of Services</h2>
                                <i class="fa fa-plane"></i>
                                <hr class="tall">
                            </div>
                        </div>
                        <div class="portfolioContainer" style="margin-top: -50px;">
                        @foreach($fservices as $service)
                            <div class="col-xs-6 col-sm-4 col-md-3 hsgrids"
                                style="padding-right: 5px;padding-left: 5px;">
                                <a class="g-list" href="{{route('home.service_details',['service_slug'=>$service->slug])}}">
                                    <div class="img-hover">
                                        <img src="{{ asset('images/services/thumbnails')}}/{{$service->thumbnail}}" alt="{{$service->name}}"
                                            class="img-responsive">
                                    </div>
                                    <div class="info-gallery">
                                        <h3>{{$service->name}}</h3>
                                        <hr class="separator">
                                        <p>{{$service->tagline}}</p>
                                        <div class="content-btn"><a href="{{route('home.service_details',['service_slug'=>$service->slug])}}"
                                                class="btn btn-primary">Book Now</a></div>
                                        <div class="price"><span>&#36;</span><b>From</b>${{$service->price}}</div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            
            <div class="content_info">
                <div class="bg-dark color-white border-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ">
                                <div class="services-lines-info">
                                    <h2>WELCOME TO DIVERSIFIED</h2>
                                    <p class="lead">
                                        Book best services at one place.
                                        <span class="line"></span>
                                    </p>

                                    <p>Find a wide variety of home services.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <ul class="services-lines">
                           @foreach($fscategories as $fscategory)         
                                    <li>
                                        <a href="{{route('home.services_by_category',['category_slug'=>$fscategory->slug])}}">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                 src="{{ asset('images/categories')}}/{{$fscategory->image}}"></i>
                                                <h5>{{$fscategory->name}}</h5>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <a href="servicesbycategory/3.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Plumbing</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/4.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Electrical</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/6.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Home Cleaning</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/8.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Pest Control</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/11.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Computer Repair</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/12.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>TV</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="servicesbycategory/13.html">
                                            <div class="item-service-line">
                                                <i class="fa"><img class="icon-img"
                                                        src="images/sercat/service-icon.png"></i>
                                                <h5>Refrigerator</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="titles">
                            <h2><span>Appliance</span>Services</h2>
                            <i class="fa fa-plane"></i>
                            <hr class="tall">
                        </div>
                    </div>
                </div>
                <div id="boxes-carousel">
                    @foreach($aservices as $aservice)
                    <div>
                        <a class="g-list" href="{{route('home.service_details',['service_slug'=>$aservice->slug])}}">
                            <div class="img-hover">
                                <img src="{{ asset('images/services/thumbnails')}}/{{$aservice->thumbnail}}" alt="{{$aservice->name}}" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>{{$aservice->name}}</h3>
                                <hr class="separator">
                                <p>{{$aservice->price}}</p>
                                <div class="content-btn"><a href="service-details/ac-wet-servicing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>${{$aservice->price}}</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        @endforeach
                        <a class="g-list" href="service-details/bedroom-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Bedroom Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Bedroom Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/bedroom-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>300</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/dining-chair-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Dining Chair Shampooing</h3>
                                <hr class="separator">
                                <p>Dining Chair Shampooing</p>
                                <div class="content-btn"><a href="service-details/dining-chair-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>400</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/carpet-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Carpet Shampooing</h3>
                                <hr class="separator">
                                <p>Carpet Shampooing</p>
                                <div class="content-btn"><a href="service-details/carpet-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>200</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/fabric-sofa-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Fabric Sofa Shampooing</h3>
                                <hr class="separator">
                                <p>Fabric Sofa Shampooing</p>
                                <div class="content-btn"><a href="service-details/fabric-sofa-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>211</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/bathroom-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Bathroom Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Bathroom Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/bathroom-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>233</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/floor-scrubbing-polishing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Floor Scrubbing &amp; Polishing</h3>
                                <hr class="separator">
                                <p>Floor Scrubbing &amp; Polishing</p>
                                <div class="content-btn"><a href="service-details/floor-scrubbing-polishing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>411</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/mattress-shampooing.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Mattress Shampooing</h3>
                                <hr class="separator">
                                <p>Mattress Shampooing</p>
                                <div class="content-btn"><a href="service-details/mattress-shampooing.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>222</div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a class="g-list" href="service-details/kitchen-deep-cleaning.html">
                            <div class="img-hover">
                                <img src="images/services/thumbnails/thumbnail.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="info-gallery">
                                <h3>Kitchen Deep Cleaning</h3>
                                <hr class="separator">
                                <p>Kitchen Deep Cleaning</p>
                                <div class="content-btn"><a href="service-details/kitchen-deep-cleaning.html"
                                        class="btn btn-primary">Book Now</a></div>
                                <div class="price"><span>&#36;</span><b>From</b>111</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @stack('scripts')

        @push('scripts')
        <script type="text/javascript">
            var path = "{{route('autocomplete')}}";
            $('input.typeahead').typeahead({
                source: function(query,process){
            return $.get(path,{query:query},function(data){
                return process(data);
            });
                }
            });
            $(document).ready(function(){
                $('input.typeahead').change(function(){
                    $('sform').submit();
                })
            })
            </script>
            @endpush