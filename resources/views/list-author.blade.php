@extends('master')

@section('content')
<main id="list-book-section" class="container">
      <div class="row valign-wrapper no-more-margin-left">
        <h2>Author List</h2><a href="{{route('author-add')}}" id="add-book" class="btn-floating btn-large waves-effect waves-light red valign"><i class="material-icons">add</i></a>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <!-- i.fa.fa-book.prefix--><i class="material-icons prefix">search</i>
          <input type="text" name="search-member" placeholder="ID or Name" id="search-member-field" class="validate">
          <label for="search-member-field">SEARCH</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <table class="bordered striped centered">
            <thead>
              <tr>
                <th data-field="author-id">ID</th>
                <th data-field="author-name">Name</th>
                <th data-field="author-dob">DoB</th>
                <th data-field="detail"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>A001</td>
                    <td>Author1</td>
                    <td>3-20-2016</td>
                    <td><a href="{{route('author-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>A002</td>
                    <td>Author2</td>
                    <td>3-20-2016</td>
                    <td><a href="{{route('author-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>A003</td>
                    <td>Author3</td>
                    <td>3-20-2016</td>
                    <td><a href="{{route('author-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>A004</td>
                    <td>Author4</td>
                    <td>3-20-2016</td>
                    <td><a href="{{route('author-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>A005</td>
                    <td>Author5</td>
                    <td>3-20-2016</td>
                    <td><a href="{{route('author-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>


@endsection
