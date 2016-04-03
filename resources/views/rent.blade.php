@extends('master')

@section('content')

<div id="rent-section" class="container">
  <div class="row">
    <h2>Information</h2>
    <form action="&lt;?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?&gt;" method="post">
      <div class="row">
        <div class="input-field col s12"><i class="material-icons prefix">credit_card</i>
          <input type="text" name="cardnumber" id="cardnumber" class="validate">
          <label for="cardnumber">Card Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col l10 s12"><i class="i fa fa-book prefix"></i>
          <input type="text" name="book-id" id="book" class="validate">
          <label for="book-id">Book</label>
        </div>
        <div class="input-field col l2 s12">
          <button data-target="book-search-result" type="submit" name="search-book" id="search-book" class="btn-large waves-effect waves-light modal-trigger"><i class="material-icons">search</i></button>
          <!-- SEARCH-RESULT MODAL-->
          <div id="book-search-result" class="modal">
            <form action="#" method="post">
              <div class="modal-content">
                <div class="row">
                  <div class="col s12">
                    <h4>Search result</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <table class="bordered striped responsive-table centered">
                      <thead>
                        <tr>
                          <th data-field="id">ID</th>
                          <th data-field="title">Title</th>
                          <th data-field="author">Author</th>
                          <th data-field="state">State</th>
                          <th data-field="add">Add</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td>B001</td>
                              <td>The Theory Of EveryThing</td>
                              <td>Jane Wilde Hawking</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                              <td>
                                <input type="checkbox" checked="checked" id="add-book-rent" class="filled-in">
                                <label for="add-book-rent" class="add-book-check"></label>
                              </td>
                            </tr>
                            <tr>
                              <td>B002</td>
                              <td>The Design Of Everyday Things</td>
                              <td>Donald A. Norman</td>
                              <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                              <td>
                                <input type="checkbox" checked="checked" disabled="disabled" id="add-book-rent2" class="filled-in">
                                <label for="add-book-rent2" class="add-book-check"></label>
                              </td>
                            </tr>
                            <tr>
                              <td>B003</td>
                              <td>Don't Make Me Think</td>
                              <td>Steve Krugh</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">2</a></td>
                              <td>
                                <input type="checkbox" checked="checked" id="add-book-rent3" class="filled-in">
                                <label for="add-book-rent3" class="add-book-check"></label>
                              </td>
                            </tr>
                            <tr>
                              <td>B004</td>
                              <td>The Non-Designer's Design Book</td>
                              <td>Robin Williams</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                              <td>
                                <input type="checkbox" checked="checked" id="add-book-rent4" class="filled-in">
                                <label for="add-book-rent4" class="add-book-check"></label>
                              </td>
                            </tr>
                            <tr>
                              <td>B005</td>
                              <td>Clean Code</td>
                              <td>Robert C. Martin</td>
                              <td><a id="book-state" class="btn-floating deep-orange">0</a></td>
                              <td>
                                <input type="checkbox" checked="checked" disabled="disabled" id="add-book-rent5" class="filled-in">
                                <label for="add-book-rent5" class="add-book-check"></label>
                              </td>
                            </tr>
                            <tr>
                              <td>B006</td>
                              <td>How To Win Friends and Influence People</td>
                              <td>Dale Carnegie</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                              <td>
                                <input type="checkbox" checked="checked" id="add-book-rent6" class="filled-in">
                                <label for="add-book-rent6" class="add-book-check"></label>
                              </td>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row right">
                  <div class="col s12"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a><a href="#!" class="modal-action modal-close waves-effect waves-green btn">OK </a></div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- h4 Book List-->
      </div>
      <div class="row">
        <div class="col s12">
          <table class="bordered striped responsive-table centered">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="title">Title</th>
                <th data-field="author">Author</th>
                <th data-field="state">State</th>
                <th data-field="remove"></th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>B001</td>
                    <td>The Theory Of EveryThing</td>
                    <td>Jane Wilde Hawking</td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a id="remove-book-rent" class="waves-effect waves-orange btn deep-orange"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>B003</td>
                    <td>Don't Make Me Think</td>
                    <td>Steve Krugh</td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">2</a></td>
                    <td><a id="remove-book-rent3" class="waves-effect waves-orange btn deep-orange"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>B004</td>
                    <td>The Non-Designer's Design Book</td>
                    <td>Robin Williams</td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a id="remove-book-rent4" class="waves-effect waves-orange btn deep-orange"><i class="fa fa-times"></i></a></td>
                  </tr>
                  <tr>
                    <td>B006</td>
                    <td>How To Win Friends and Influence People</td>
                    <td>Dale Carnegie</td>
                    <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                    <td><a id="remove-book-rent6" class="waves-effect waves-orange btn deep-orange"><i class="fa fa-times"></i></a></td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select id="reader-choose">
            <option value="1">In Place</option>
            <option value="2">Take Away</option>
          </select>
          <label>READER</label>
        </div>
      </div>
      <div id="date-picker" class="row">
        <div class="col s7">
          <p class="range-field">
            <input type="range" value="7" min="0" max="30" id="date-slider">
          </p>
        </div>
        <div class="col s2">
          <label for="return-days">DAYS</label>
          <input type="text" value="7" disabled id="return-days">
        </div>
        <div class="col s3">
          <label for="return-date">RETURN DATE</label>
          <input type="date" disabled id="return-date" class="datepicker">
        </div>
      </div>
      <!-- SLIDER-->
      <!---->
      <div class="row right">
        <div class="col s12">
          <!-- a(href="#rent-confirm-inplace").waves-effect.waves-light.btn-large.modal-confirm-trigger Nexti.material-icons.right trending_flat
          --><a href="#rent-confirm-takeaway" class="waves-effect waves-light btn-large modal-confirm-trigger">Next<i class="material-icons right">trending_flat  </i></a>
        </div>
        <!--RENT CONFIRM TAKEAWAY MODAL-->
        <!-- +inplace-info-modal-->
            <div id="rent-confirm-takeaway" class="modal">
              <div id="no-more-padding-bottom" class="modal-content">
                <div class="row">
                  <div class="col s12">
                    <h4>Information</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12"><i class="material-icons prefix">receipt</i>
                    <input type="text" name="receipt" disabled value="&lt;?php echo 'receipt-id-info'; ?&gt;" id="receipt-id-info">
                    <label for="receipt-id-info">Receipt Number </label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12"><i class="material-icons prefix">credit_card</i>
                    <input type="text" name="card-number-info" disabled value="&lt;?php echo 'card-number-info'; ?&gt;" id="card-id-info">
                    <label for="card-number-info">Card Number </label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12"><i class="material-icons prefix">perm_identity</i>
                    <input type="text" name="member-name-info" disabled value="&lt;?php echo 'member-name-info'; ?&gt;" id="member-name-info">
                    <label for="member-name-info">Member</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <table class="bordered striped responsive-table centered">
                      <thead>
                        <tr>
                          <th data-field="id">ID</th>
                          <th data-field="title">Title</th>
                          <th data-field="author">Author</th>
                          <th data-field="state">State</th>
                        </tr>
                      </thead>
                      <tbody>
                            <tr>
                              <td>B001</td>
                              <td>The Theory Of EveryThing</td>
                              <td>Jane Wilde Hawking</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                            </tr>
                            <tr>
                              <td>B003</td>
                              <td>Don't Make Me Think</td>
                              <td>Steve Krugh</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">2</a></td>
                            </tr>
                            <tr>
                              <td>B004</td>
                              <td>The Non-Designer's Design Book</td>
                              <td>Robin Williams</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                            </tr>
                            <tr>
                              <td>B006</td>
                              <td>How To Win Friends and Influence People</td>
                              <td>Dale Carnegie</td>
                              <td><a id="book-state" class="btn-floating blue lighten-1">1</a></td>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label for="return-date-info">Return Date</label>
                    <input type="date" disabled id="return-date-info">
                  </div>
                </div>
                <div class="row right">
                  <div class="col s12"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a><a href="#!" onclick="Materialize.toast('Success!', 4000)" id="confirm-info" class="modal-action modal-close waves-effect waves-green btn">OK     </a></div>
                </div>
              </div>
            </div>
      </div>
      <!-- FOR LOADING DATABASE-->
      <div id="progress" class="row">
        <div class="col s12">
          <div class="progress">
            <div class="indeterminate"></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>


@endsection
