<div class="menu collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="d-flex justify-content-end m-0 navbar-nav ml-auto mt-1">
        <li class="nav-item"><a href="/" title="CoolSculpting" class="nav-link {{\Route::current()->getName() == 'home' ? 'active' : ''}}">Home</a></li>
        <li class="nav-item"><a href="/cool-sculpting" title="CoolSculpting" class="nav-link {{\Route::current()->getName() == 'cool-sculpting' ? 'active' : ''}}">CoolSculpting</a></li>
        <li class="nav-item"><a href="/cool-tone" title="CoolTone" class="nav-link {{\Route::current()->getName() == 'cool-tone' ? 'active' : ''}}">CoolTone</a></li>
        <li class="nav-item"><a href="/prices" title="Prices" class="nav-link {{\Route::current()->getName() == 'prices' ? 'active' : ''}}">Prices</a></li>
        <li class="nav-item"><a href="/gallery" title="Gallery" class="nav-link {{\Route::current()->getName() == 'gallery' ? 'active' : ''}}">Gallery</a></li>
        {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{\Route::current()->getName() == 'cool-sculpting' ? 'active' : ''}}" id="dropdownMenuButtonGallery" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery <i class="fa fa-chevron-down"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonGallery">
                <a class="dropdown-item" href="#">Gallery 1</a>
                <a class="dropdown-item" href="#">Gallery 2</a>
                <a class="dropdown-item" href="#">Gallery 3</a>
            </div>
        </li> --}}
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{\Route::current()->getName() == 'supporting-articles-research' || \Route::current()->getName() == 'faqs' || \Route::current()->getName() == 'videos' ? 'active' : ''}}" id="dropdownMenuButtonLibrary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Library <i class="fa fa-chevron-down"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonLibrary">
                <a class="dropdown-item" href="/faqs">FAQs</a>
                <a class="dropdown-item" href="/supporting-articles-research">Articles + Research</a>
                <a class="dropdown-item" href="/videos">Videos</a>
            </div>
        </li>
        @if(!$agent->isMobile())
        <li class="nav-item px-0"><a href="tel:+18582567548" title="Contact Us" class="nav-link btn1 blue">(858) 256-7548</a></li>
        @endif
    </ul>
    
</div>