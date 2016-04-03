@extends('master')

@section('content')
<main id="publisher-add-section" class="container">
      <div class="row">
        <div class="col s12 valign-wrapper">
          <h3>Enter Information</h3>
        </div>
      </div>
      <div style="margin-bottom: 0px;" class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12"><i class="fa fa-book prefix"></i>
              <input type="text" name="publisher-name" value="&lt;?php echo 'publisher-name-add'; ?&gt;" id="publisher-name-detail">
              <label for="publisher-name-add">Name</label>
            </div>
          </div>
          <div class="row right"><a href="{{route('list-publisher')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-publisher')}}" class="waves-effect waves-light btn"><i class="fa fa-user-plus"></i></a></div>
        </div>
      </div>
    </main>

@endsection
