<section id="playvideo" class="playvideo">
    <div class="playvideo-bg padding-100 background-fullwidth background-fixed" style="background-image: url(/drsculpt/assets/img/NoPath.png);background-position:center center;backgroumd-size:cover;">
        <div class="d-flex flex-column justify-content-center align-items-center playvideo-content">
            <h2 class="text-center">Is CoolSculpting® right for you?*</h2>
            <div class="text-center play-icon" data-toggle="modal" data-target="#videoModal"><i class="material-icons">play_circle_outline</i></div>
        </div>
    </div>
    @if(!$agent->isMobile())
    <div class="playvideo-footer d-flex justify-content-center align-items-center">
        <p>*The same results featured here may NOT occur for all patients. In fact, results may vary SIGNIFICANTLY with individual circumstances.</p>
    </div>
    @endif

    <div id="videoModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                        <iframe width="100%" height="430" src="https://www.youtube.com/embed/5e0LxrLSzok?rel=0&amp;controls=0" "frameborder="0" allowfullscreen autoplay></iframe>
                </div>
    
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
    
        </div>
    </div>
</section>