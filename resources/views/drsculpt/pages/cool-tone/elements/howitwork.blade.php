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
            <h3 class="mb-5">How does CoolTone work?</h3>
            <p>
                The CoolTone applicator generates a magnetic field that creates a current when it passes through a conductive material. Muscles are good conductors of magnetic fields, unlike skin and fat, which are poor conductors. The induced current is stronger in the muscle layer and the body responds to these contractions by strengthening its muscle fibers and improving muscle conditioning. The result is stronger, firmer, and more toned abdomen, thighs, and buttocks. <br/><br/><br/>
                
                <strong>What is Magnetic Muscle Stimulation? </strong><br/><br/>
                
                CoolTone™ uses Magnetic Muscle Stimulation (MMS) to selectively deliver strong pulses to muscle tissues in a noninvasive manner. CoolTone's MMS technology penetrates into the muscle layers and induces involuntary muscle contractions, all in a safe and effective treatment. CoolTone™ is FDA-cleared to strengthen, tone, and firm the abdomen, buttocks, and thighs.
            </p>
        </div>
        <div class="col-md-6">
            <iframe width="100%" height="415" src="https://www.youtube.com/embed/lMA25ltPbcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- Banner end -->