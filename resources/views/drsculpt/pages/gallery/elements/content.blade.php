<section id="gallery-content" class="gallery-content d-flex flex-column justify-content-center align-items-center py-5">
    <ul class="nav nav-pills mb-3 align-self-center" id="gallery-tab" role="tablist">
        <li class="nav-item p-1">
            <a class="nav-link px-5 active" id="men-tab" data-toggle="pill" href="#men" role="tab" aria-controls="men" aria-selected="true">MEN</a>
        </li>
        <li class="nav-item p-1">
            <a class="nav-link px-5" id="women-tab" data-toggle="pill" href="#women" role="tab" aria-controls="women" aria-selected="false">WOMEN</a>
        </li>
    </ul>
    <div class="tab-content align-self-center" id="gallery-tabContent">
        <div class="tab-pane fade show active" id="men" role="tabpanel" aria-labelledby="men-tab">
            @include('drsculpt.pages.gallery.elements.men')
        </div>
        <div class="tab-pane fade" id="women" role="tabpanel" aria-labelledby="women-tab">
            @include('drsculpt.pages.gallery.elements.women')
        </div>
    </div>
</section>