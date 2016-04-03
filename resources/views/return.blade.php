@extends('master')

@section('content')
<main class="container">
      <div class="row">
        <div class="col s8 offset-s2">
          <div class="row">
            <div class="col s12">
              <h3 class="center-align">Search Member</h3>
            </div>
          </div>
          <div id="return-search-content" class="row">
            <div class="input-field"><i class="material-icons prefix">account_circle</i>
              <input type="text" id="member-search" class="validate">
              <label for="member-search">Enter ID or Name</label>
            </div>
            <div class="input-field">
              <button data-target="book-search-result" type="submit" name="search-member" id="search-member" class="btn-large waves-effect waves-light"><i class="material-icons">search</i></button>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
