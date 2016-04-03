@extends('master')

@section('content')
<main id="list-book-section" class="container">
      <div id="renting-books-content" class="row no-more-margin-bottom">
        <div class="col s12">
          <ul data-collapsible="accordion" class="collapsible light-blue lighten-4">
            <li>
              <div class="collapsible-header blue lighten-1">Member Currently Renting<i class="fa fa-bookmark"></i></div>
              <div class="collapsible-body">
                <table class="bordered striped responsive-table centered">
                  <thead>
                    <tr>
                      <th data-field="member-id">ID</th>
                      <th data-field="member-name">Name</th>
                      <th data-field="CMND">CMND</th>
                      <th data-field="book-num">Number of Book</th>
                      <th data-field="latest-return-date">Latest Return Date</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                          <td>M001</td>
                          <td>Member1</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">2</a></td>
                          <td><a id="list-latest-return-date" class="btn green lighten-1">03/20/2016</a></td>
                        </tr>
                        <tr>
                          <td>M002</td>
                          <td>Member2</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-latest-return-date" class="btn deep-orange">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>M003</td>
                          <td>Member3</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">3</a></td>
                          <td><a id="list-latest-return-date" class="btn deep-orange">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>M004</td>
                          <td>Member4</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">2</a></td>
                          <td><a id="list-latest-return-date" class="btn green lighten-1">03/20/2016</a></td>
                        </tr>
                        <tr>
                          <td>M005</td>
                          <td>Member5</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-latest-return-date" class="btn deep-orange">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>M006</td>
                          <td>Member6</td>
                          <td>0000000001</td>
                          <td><a id="book-num" class="btn-floating blue lighten-1">2</a></td>
                          <td><a id="list-latest-return-date" class="btn green lighten-1">03/20/2016</a></td>
                        </tr>
                  </tbody>
                </table>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row valign-wrapper no-more-margin-left">
        <h2>Member List</h2><a href="{{route('member-add')}}" id="add-book" class="btn-floating btn-large waves-effect waves-light red valign"><i class="material-icons">add</i></a>
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
          <table class="bordered striped responsive-table centered">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="title">Name</th>
                <th data-field="author">CMND</th>
                <th data-field="type">Work</th>
                <th data-field="state">Expired Date</th>
                <th data-field="detail"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>M001</td>
                    <td>Member1</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/Student-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>M002</td>
                    <td>Member2</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/Worker-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>M003</td>
                    <td>Member3</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/School_Director-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>M004</td>
                    <td>Memebr4</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/Fortune_Teller-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>M005</td>
                    <td>Member5</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/Doctor-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>M006</td>
                    <td>Member6</td>
                    <td>0000000001</td>
                    <td><img id="user-type" data-position="top" data-delay="50" data-tooltip="Student" src="{{URL::to('assets/icon/Fireman-48.png')}}" class="type-icon tooltipped"></td>
                    <td><a id="list-ex-date" class="btn green lighten-1">03/20/2016</a></td>
                    <td><a href="{{route('member-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>



@endsection
