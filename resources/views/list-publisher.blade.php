@extends('master')

@section('content')
<main id="list-publisher-section" class="container">
      <div class="row valign-wrapper no-more-margin-left">
        <h2>Publisher List</h2><a href="{{route('publisher-add')}}" id="add-publisher" class="btn-floating btn-large waves-effect waves-light red valign"><i class="material-icons">add</i></a>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <!-- i.fa.fa-book.prefix--><i class="material-icons prefix">search</i>
          <input type="text" name="search-publisher" placeholder="ID or Name" id="search-publisher-field" class="validate">
          <label for="search-publisher-field">SEARCH</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <table class="bordered striped centered">
            <thead>
              <tr>
                <th data-field="publisher-id">ID</th>
                <th data-field="publisher-name">Name</th>
                <th data-field="detail"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>P001</td>
                    <td>Publisher1</td>
                    <td><a href="{{route('publisher-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>P002</td>
                    <td>Publisher2</td>
                    <td><a href="{{route('publisher-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>P003</td>
                    <td>Publisher3</td>
                    <td><a href="{{route('publisher-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>P004</td>
                    <td>Publisher4</td>
                    <td><a href="{{route('publisher-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>P005</td>
                    <td>Publisher5</td>
                    <td><a href="{{route('publisher-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>

@endsection
