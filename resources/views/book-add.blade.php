@extends('master')

@section('content')
<main id="book-add-section" class="container">
  <div class="row">
    <div class="col s12 valign-wrapper">
      <h3>Enter Information</h3>
    </div>
  </div>
  <div style="margin-bottom: 0px;" class="row">
    <div class="col l5 m6 offset-m3 s12 no-more-margin-bottom"><img src="" width="350" height="450" onerror="this.src = '{{URL::to('assets/img/default-placeholder.png')}}'" class="book-image"></div>
    <div class="col l7 m12 s12">
      <div class="row">
        <div class="input-field col s12"><i class="i fa fa-book prefix"></i>
          <input type="text" name="book-title" id="book-title-detail">
          <label for="book-title-detail">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 left-align"><i class="fa fa-pencil left prefix"></i>
          <select multiple id="book-author-detail">
            <option value="" disabled selected>Choose your Option</option>
            <option value="A001">Author1</option>
            <option value="A002">Author2</option>
            <option value="A003">Author3</option>
            <option value="A004">Author4</option>
          </select>
          <label for="book-author-detail">Author</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 left-align"><i class="fa fa-paper-plane-o left prefix"></i>
          <select id="book-publisher-detail">
            <option value="" disabled selected>Choose your Option</option>
            <option value="P001">Publisher1</option>
            <option value="P002">Publisher2</option>
            <option value="P003">Publisher3</option>
            <option value="P004">Publisher4</option>
          </select>
          <label for="book-publisher-detail">Publisher</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 left-align"><i class="fa fa-folder left prefix"></i>
          <select id="book-type-detail" class="icons">
            <option value="" disabled selected>Choose your Option</option>
            <option value="T001">Type1</option>
            <option value="T002">Type2</option>
            <option value="T003">Type3</option>
            <option value="T004">Type4</option>
          </select>
          <label for="book-type-detail">Type</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 left-align"><i class="material-icons prefix">loyalty</i>
          <select id="book-generas-detail" multiple>
            <option value="" disabled selected>Choose your Option</option>
            <option value="G001">generas1</option>
            <option value="G002">generas2</option>
            <option value="G003">generas3</option>
            <option value="G004">generas4</option>
          </select>
          <label for="book-generas-detail">Generas</label>
        </div>
      </div>
    </div>
  </div>
  <div style="margin-top: 0px;" class="row">
    <div class="input-field col s12"><i class="material-icons prefix">library_books</i>
      <textarea type="text" name="book-type" id="book-des-detail" class="materialize-textarea"></textarea>
      <label for="book-des-detail">Description</label>
    </div>
  </div>
  <div class="row">
    <div class="file-field input-field col s12">
      <div class="btn"><span>Image</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input type="text" class="file-path validate">
      </div>
    </div>
  </div>
  <div class="row right"><a href="{{route('list-book')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-book')}}" class="waves-effect waves-light btn"><i class="material-icons">playlist_add</i></a></div>
</main>
@endsection
