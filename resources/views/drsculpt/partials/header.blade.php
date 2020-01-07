<!-- Navbar -->
    <div class="header" id="header">
        @if(!$agent->isMobile())
        <div class="header-bar d-none d-md-block" id="header-bar">
            <div class="container-fluid wrapper-fluid p-0">
                <div class="d-flex justify-content-between">
                    <p>1707 Grand Avenue, Suite B, San Diego, CA 92109 <strong class="dot">• </strong>Call: <strong class="bold-text-3">(858) 256-7548</strong></p>
                    <a href="https://www.coolmarketing.com/" target="_blank" title="Launch a Dr. Sculpt Center">Launch a Dr. Sculpt Center</a>
                </div>
            </div>
        </div>
        <nav class="header-body wrapper-fluid navbar navbar-expand-md">
            <div class="container-fluid d-flex justify-content-between align-items-center p-0 mx-1">
                <div class="logo navbar-brand d-flex justify-content-between py-0">
                    <a href="/" class="align-self-center">
                        <img src="/drsculpt/assets/img/logo.svg" alt="DR. SCULPT" class="main-logo"/>
                        <img src="/drsculpt/assets/img/slogan.svg" alt="COOLSCULPTING CENTER" class="slogan d-none d-md-block" id="slogan"/>
                    </a>
                </div>
                @include('drsculpt.partials.menu')
            </div>
        </nav>
        @else
        <nav class="header-body mobile-body navbar px-2">
            <div class="container-fluid">
                <div class="logo navbar-brand d-flex justify-content-between py-0 w-100">
                    <button id="menu-toggle" class="navbar-toggler px-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span id="menu-toggle-content">MENU</span>
                    </button>
                    <a href="/" class="align-self-center">
                        <img src="/drsculpt/assets/img/logo.svg" alt="DR. SCULPT" class="main-logo"/>
                    </a>
                    <a href="tel:+18582567548" class="menu-phone d-block d-sm-none pt-1"><i class="material-icons">phone_enabled</i></a>
                </div>
                @include('drsculpt.partials.menu')
            </div>
        </nav>
        <div class="header-bar-m d-flex justify-content-between align-items-center px-2 py-3" id="header-bar-m">
            <p>Schedule a free consultation</p>
            <i class="material-icons mr-2" id="header-bar-m-icon">add</i>
        </div>
        <div class="header-schedule-m" id="header-schedule-m">
            <div class="schedule-m">
                @include('drsculpt.partials.schedule')
            </div>
        </div>
        @endif
    </div>
<!--End Navbar-->
