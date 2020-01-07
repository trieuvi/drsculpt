<!-- Banner start -->
<div class="where-treat wrapper py-5">
    <div class="d-flex flex-column justify-content-between align-items-center">
        <h3 class="pb-0">CoolSculpting Can Target</h3>
        
        @if($agent->isMobile())
        <ul class="nav nav-tabs mt-4" id="treatTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="front-tab" data-toggle="tab" href="#front" role="tab" aria-controls="front"
                aria-selected="true">Front</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="back-tab" data-toggle="tab" href="#back" role="tab" aria-controls="back"
                aria-selected="false">Back</a>
            </li>
        </ul>
        <div class="tab-content" id="treatTabContent">
            <div class="tab-pane fade show active" id="front" role="tabpanel" aria-labelledby="front-tab">
                <img src="/drsculpt/assets/img/treat-front.jpg" alt="CoolSculpting Can Target">
            </div>
            <div class="tab-pane fade" id="back" role="tabpanel" aria-labelledby="back-tab">
                <img src="/drsculpt/assets/img/treat-back.jpg" alt="CoolSculpting Can Target">
            </div>
          </div>
        @else
        <img src="/drsculpt/assets/img/where-treat-img.jpg" alt="CoolSculpting Can Target">
        @endif
        {{-- <a href="#" class="btn1">Check our Packages</a> --}}
    </div>
</div>
<!-- Banner end -->