<!-- Banner start -->
@if($agent->isMobile())  
<div class="schedule-m">
    @include('drsculpt.partials.schedule')
</div>
@endif
<div class="howitwork wrapper position-relative pb-3">
    @if(!$agent->isMobile())
    <div class="home-schedule">
        @include('drsculpt.partials.schedule')
    </div>  
    @endif
    <div class="row row-1 mt-5">
        <div class="col-md-6">
            <h3 class="mb-5">How does CoolSculpting work?</h3>
            <p>
                CoolSculpting’s fat-freezing technology gives long-term results that make trouble spots a lot less troubling.* Fat cells don’t like the cold and at a certain temperature they will freeze. <br/><br/>
                
                Once that happens, your body will naturally eliminate the dead cells in 1-3 months or more, resulting in up to 20%-25% reduction of fat in a treated area. <br/><br/>
                
                *Long term results are based on two case reports. <br/><br/><br/>
                
                <strong>Farewell treated fat cells.</strong><br/><br/>
                
                It’s technical name is cryolipolysis, which is just a science-y way to say fat freezing. Our experts spent years developing the treatment, which features one-of-a-kind technology that quite literally freezes and kills fat cells.
            </p>
        </div>
        <div class="col-md-6">
            <iframe width="100%" height="415" src="https://www.youtube.com/embed/kVEMOz8SeVM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Banner end -->