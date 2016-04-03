@extends('master')

@section('content')
<main id="list-book-section" class="container">
      <div id="renting-books-content" class="row no-more-margin-bottom">
        <div class="col s12">
          <ul data-collapsible="accordion" class="collapsible light-blue lighten-4">
            <li>
              <div class="collapsible-header blue lighten-1">Renting Books<i class="fa fa-bookmark"></i></div>
              <div class="collapsible-body">
                <table class="bordered striped responsive-table centered">
                  <thead>
                    <tr>
                      <th data-field="id">ID</th>
                      <th data-field="title">Title</th>
                      <th data-field="author">Author</th>
                      <th data-field="state">State</th>
                      <th data-field="add">Return Date</th>
                    </tr>
                  </thead>
                  <tbody>
                        <tr>
                          <td>B001</td>
                          <td>The Theory Of EveryThing</td>
                          <td>Jane Wilde Hawking</td>
                          <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>B002</td>
                          <td>The Design Of Everyday Things</td>
                          <td>Donald A. Norman</td>
                          <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>B003</td>
                          <td>Don't Make Me Think</td>
                          <td>Steve Krugh</td>
                          <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>B004</td>
                          <td>The Non-Designer's Design Book</td>
                          <td>Robin Williams</td>
                          <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>B005</td>
                          <td>Clean Code</td>
                          <td>Robert C. Martin</td>
                          <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                        <tr>
                          <td>B006</td>
                          <td>How To Win Friends and Influence People</td>
                          <td>Dale Carnegie</td>
                          <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                          <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                        </tr>
                  </tbody>
                </table>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row valign-wrapper no-more-margin-left">
        <h2>Book List</h2><a href="{{route('book-add')}}" id="add-book" class="btn-floating btn-large waves-effect waves-light red valign"><i class="material-icons">add</i></a>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <!-- i.fa.fa-book.prefix--><i class="material-icons prefix">search</i>
          <input type="text" name="search-book" placeholder="ID or Title" id="search-book-field" class="validate">
          <label for="search-book-field">SEARCH</label>
        </div>
      </div>
      <div class="row">
        <div id="sort-field" class="input-field col s6"><i class="material-icons prefix">swap_vert</i>
          <select>
            <option value="" disabled selected>Choose your Option</option>
            <option value="sort-id">ID</option>
            <option value="sort-title">Title</option>
            <option value="sort-author">Author</option>
            <option value="sort-generas">Generas</option>
            <option value="sort-type">Type</option>
            <option value="sort-state">State</option>
          </select>
          <label>SORT</label>
        </div>
        <div id="sort-order" class="input-field col s4">
          <select>
            <option value="" disabled selected>Choose your Option</option>
            <option value="order-a-z">A-Z</option>
            <option value="order-z-a">Z-A</option>
          </select>
          <label>ORDER BY</label>
        </div>
        <div class="col s2"><a id="sort-button" class="waves-effect waves-light btn-large"><i class="material-icons large">swap_vert</i></a></div>
      </div>
      <div class="row">
        <div class="col s12">
          <table class="bordered striped responsive-table centered">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="title">Title</th>
                <th data-field="author">Author</th>
                <th data-field="generas">Generas</th>
                <th data-field="type">Type</th>
                <th data-field="state">State</th>
                <th data-field="detail"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>B001</td>
                    <td>The Theory Of EveryThing</td>
                    <td>Jane Wilde Hawking</td>
                    <td>Drama, Romantic</td>
                    <td>
                      <!-- a(id = "book-state" class!=attributes.class data-position="top" data-delay="50" data-tooltip="Fiction").btn.tooltipped-->
                      <!--   i.fa.fa-folder--><i id="book-state" data-position="top" data-delay="50" data-tooltip="Fiction" class="blue-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i>
                    </td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light"><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>B002</td>
                    <td>The Design Of Everyday Things</td>
                    <td>Donald A. Norman</td>
                    <td>Drama, Romantic, Adult</td>
                    <td>
                      <!-- a(id = "book-state" class!=attributes.class data-position="top" data-delay="50" data-tooltip="Fiction").btn.tooltipped-->
                      <!--   i.fa.fa-folder--><i id="book-state" data-position="top" data-delay="50" data-tooltip="Fiction" class="red-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i>
                    </td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">2</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light"><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>B003</td>
                    <td>Don't Make Me Think</td>
                    <td>Steve Krugh</td>
                    <td>Drama, Romantic, Children</td>
                    <td><i id="book-state" data-position="top" data-delay="50" data-tooltip="Non-Fiction" class="cyan-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i></td>
                    <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>B004</td>
                    <td>The Non-Designer's Design Book</td>
                    <td>Robin Williams</td>
                    <td>Drama, Romantic</td>
                    <td>
                      <!-- a(id = "book-state" class!=attributes.class data-position="top" data-delay="50" data-tooltip="Fiction").btn.tooltipped-->
                      <!--   i.fa.fa-folder--><i id="book-state" data-position="top" data-delay="50" data-tooltip="Fiction" class="green-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i>
                    </td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light"><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>B005</td>
                    <td>Clean Code</td>
                    <td>Robert C. Martin</td>
                    <td>Drama</td>
                    <td><i id="book-state" data-position="top" data-delay="50" data-tooltip="Non-Fiction" class="pink-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i></td>
                    <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light lighten-1 "><i class="material-icons">open_in_new</i></a></td>
                  </tr>
                  <tr>
                    <td>B006</td>
                    <td>How To Win Friends and Influence People</td>
                    <td>Dale Carnegie</td>
                    <td>Drama, Romantic</td>
                    <td>
                      <!-- a(id = "book-state" class!=attributes.class data-position="top" data-delay="50" data-tooltip="Fiction").btn.tooltipped-->
                      <!--   i.fa.fa-folder--><i id="book-state" data-position="top" data-delay="50" data-tooltip="Fiction" class="lime-text text-lighten-1 tooltipped fa fa-2x fa-folder"></i>
                    </td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a href="{{route('book-detail')}}" class="btn-floating waves-effect waves-light"><i class="material-icons">open_in_new</i></a></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>


@endsection
