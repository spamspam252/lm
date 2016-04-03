@extends('master')

@section('content')
<main id="member-add-section" class="container">
      <div class="row">
        <div class="valign-wrapper">
          <h3>Enter Information</h3>
        </div>
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12"><i class="i fa fa-book prefix"></i>
              <input type="text" name="member-name" id="member-name-add">
              <label for="member-name-add">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12"><i class="i fa fa-credit-card prefix"></i>
              <input type="text" name="member-cmnd" id="member-cmnd-add">
              <label for="member-cmnd-add">CMND</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12"><i class="fa fa-calendar-plus-o prefix black-text"></i>
              <label for="register-date">REGISTER DATE</label>
              <input type="date" disabled id="register-date">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 black-text"><i class="fa fa-calendar-minus-o prefix black-text"></i>
              <label for="expired-date">EXPIRED DATE</label>
              <input type="date" id="expired-date">
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12"><i class="material-icons prefix">work</i>
              <select id="member-type-add">
                <option value="" selected disabled>Choose your Option</option>
                <option value="student" data-icon="{{URL::to('assets/icon/Student-48.png')}}" class="circle left">Student</option>
                <option value="doctor" data-icon="{{URL::to('assets/icon/Doctor-48.png')}}" class="circle left">Doctor</option>
                <option value="teacher" data-icon="{{URL::to('assets/icon/School_Director-48.png')}}" class="circle left">Teacher</option>
                <option value="Worker" data-icon="{{URL::to('assets/icon/Worker-48.png')}}" class="circle left">Worker</option>
              </select>
              <label for="member-type-detail">Work</label>
            </div>
          </div>
        </div>
      </div>
      <div class="row right"><a href="{{route('list-member')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-member')}}" class="waves-effect waves-light btn"><i class="fa fa-user-plus"></i></a></div>
    </main>


@endsection
