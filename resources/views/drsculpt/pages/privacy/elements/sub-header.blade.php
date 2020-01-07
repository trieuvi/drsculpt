<section id="sub-header" class="sub-header pt-4 pb-2">
    <div class="d-flex justify-content-between align-items-center">
        <h3 class="">Privacy & Legal</h3>
        @if(!$agent->isMobile())
        <ul class="sub-items list-unstyled d-flex" id="sub-header-pl">
            <li class="active px-2" id="sub-header-pp"><a href="#pp">Privacy Policy</a></li>
            <li class="px-2" id="sub-header-ts"><a href="#ts">Terms of service</a></li>
            <li class="px-2" id="sub-header-trademarks"><a href="#trademarks">Trademarks</a></li>
        </ul>
        @endif
    </div>
</section>