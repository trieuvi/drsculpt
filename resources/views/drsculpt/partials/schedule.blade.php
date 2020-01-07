    <div class="container-form">
        <h3>Schedule a Free Consultation</h3>
        <form id="schedule_form" name="schedule_form" method="post" action="{{route('contact-form')}}" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                <div class="col-md-6" id="schedule_name">
                    <div class="form-group">
                        <div class="">
                            <input id="schedule_name" name="schedule_name"  type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="schedule_email">
                    <div class="form-group">
                        <div class="">
                            <input id="schedule_email" name="schedule_email"  type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" id="schedule_phone">
                    <div class="form-group">
                        <div class="">
                            <input id="schedule_phone" name="schedule_phone"  type="number" class="form-control" placeholder="Phone" pattern="[0-9]*" inputmode="numeric">
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="schedule_interested">
                    <div class="form-group">
                        <div class="">
                            <select class="selectbox-input" id="schedule_title" name="schedule_title">
                                <option value="" selected disabled>I am interested in:</option>
                                <option value="1|Interested 1">Interested 1</option>
                                <option value="2|Interested 2">Interested 2</option>
                                <option value="3|Interested 3">Interested 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center py-4">
                <button class="btn1 text-right" type="submit" id="contact_me_asap">CONTACT ME ASAP</button>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                @if(Session::has('info'))
                    @if(Session::get('info')['message'] == 'contact-done')
                    <p class="text-success"><i class="fa fa-check-square"></i> Thank you for the schedule!</p>
                    @else
                    <p class="note text-danger">All fields required. By proceeding you agree that we may contact you via email, phone, or SMS using the info provided above, including for marketing purposes.</p>
                    @endif
                @else
                    <p class="note">All fields required. By proceeding you agree that we may contact you via email, phone, or SMS using the info provided above, including for marketing purposes.</p>
                @endif
            </div>
        </form>
    </div>