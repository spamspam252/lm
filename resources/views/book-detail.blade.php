@extends('master')

@section('content')
<main id="book-detail-section" class="container">
      <div class="row">
        <div class="col s12 valign-wrapper">
          <h3>Book B001</h3><a href="#!" id="edit-book-detail-button" class="btn-floating btn-large waves-effect waves-light blue lighten-1 valign"><i id="edit-book-detail-button-icon" class="fa fa-pencil-square-o"></i></a>
        </div>
      </div>
      <div style="margin-bottom: 0px;" class="row">
        <div class="col l5 m6 offset-m3 s12 no-more-margin-bottom"><img src="{{URL::to('assets/img/the-design-of-everyday-things.jpg')}}" alt="Nope" width="350" height="450" class="book-image"></div>
        <div class="col l7 m12 s12">
          <div class="row">
            <div class="input-field col s12"><i class="i fa fa-book prefix black-text"></i>
              <input type="text" name="book-title" disabled value="&lt;?php echo 'book-title-detail'; ?&gt;" id="book-title-detail">
              <label for="book-title-detail">Title</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 left-align"><i class="fa fa-pencil left prefix"></i>
              <select multiple id="book-author-detail">
                <option value="A001" selected>Author1</option>
                <option value="A002">Author2</option>
                <option value="A003" selected>Author3</option>
                <option value="A004">Author4</option>
              </select>
              <label for="book-author-detail">Author</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 left-align"><i class="fa fa-paper-plane-o left prefix"></i>
              <select id="book-publisher-detail">
                <option value="P001" selected>Publisher1</option>
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
                <option value="T001" selected>Type1</option>
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
                <option value="G001" selected>generas1</option>
                <option value="G002">generas2</option>
                <option value="G003" selected>generas3</option>
                <option value="G004">generas4</option>
              </select>
              <label for="book-generas-detail">Generas</label>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 0px;" class="row">
        <div class="input-field col s12"><i class="material-icons prefix black-text">library_books</i>
          <textarea type="text" name="book-type" disabled id="book-des-detail" class="materialize-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente qui quibusdam, eaque incidunt consectetur officiis, consequatur asperiores, mollitia voluptas illo id ipsum ab. Saepe voluptate, dolorum non voluptatem, ut natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo officiis repellendus soluta quod architecto labore quasi ipsam assumenda repellat, molestias quia ab tenetur itaque veniam, laboriosam aliquid minus, vel maiores! Lorem ipsum dolor sit amet</textarea>
          <label for="book-des-detail">Description</label>
        </div>
      </div>
      <div class="row right">
        <div class="col s12"><a href="{{route('list-book')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-book')}}"class="waves-effect waves-green btn">OK</a></div>
      </div>
    </main>

@endsection
