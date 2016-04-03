@extends('master')

@section('content')
<main id="return-info-section" class="container">
      <div class="row">
        <div class="col s12">
          <h2>Information of php search result</h2>
        </div>
      </div>
      <div id="test1" class="row">
        <div class="input-field col s12"><i class="material-icons prefix">credit_card</i>
          <input disabled type="text" name="card-number" value="&lt;?php echo 'receipt-id-info'; ?&gt;" id="card-number">
          <label for="card-number">Card Number </label>
        </div>
      </div>
      <div id="test2" class="row">
        <div class="input-field col s12"><i class="material-icons prefix">perm_identity</i>
          <input type="text" name="member-name-info" disabled value="&lt;?php echo 'member-name-info'; ?&gt;" id="member-name-info">
          <label for="member-name-info">Member</label>
        </div>
      </div>
      <h4>Renting    </h4>
      <div class="row">
        <div class="col s12">
          <table class="bordered striped responsive-table centered">
            <thead>
              <tr>
                <th data-field="id">ID</th>
                <th data-field="title">Title</th>
                <th data-field="author">Author</th>
                <th data-field="state">State</th>
                <th data-field="return">Return</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>B001</td>
                    <td>The Theory Of EveryThing</td>
                    <td>Jane Wilde Hawking</td>
                    <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                    <td>
                      <input type="checkbox" checked="checked" id="add-book" class="filled-in">
                      <label for="add-book" class="add-book-check"></label>
                    </td>
                  </tr>
                  <tr>
                    <td>B003</td>
                    <td>Don't Make Me Think</td>
                    <td>Steve Krugh</td>
                    <td><a id="book-state" class="btn blue lighten-1">2</a></td>
                    <td>
                      <input type="checkbox" checked="checked" id="add-book3" class="filled-in">
                      <label for="add-book3" class="add-book-check"></label>
                    </td>
                  </tr>
                  <tr>
                    <td>B004</td>
                    <td>The Non-Designer's Design Book</td>
                    <td>Robin Williams</td>
                    <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                    <td>
                      <input type="checkbox" checked="checked" id="add-book4" class="filled-in">
                      <label for="add-book4" class="add-book-check"></label>
                    </td>
                  </tr>
                  <tr>
                    <td>B006</td>
                    <td>How To Win Friends and Influence People</td>
                    <td>Dale Carnegie</td>
                    <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                    <td>
                      <input type="checkbox" checked="checked" id="add-book6" class="filled-in">
                      <label for="add-book6" class="add-book-check"></label>
                    </td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row right"><a href="#return-info-modal" class="waves-effect waves-light btn-large return-info-modal-trigger">Next<i class="material-icons right">trending_flat</i></a>
            <div id="return-info-modal" class="modal">
              <div class="modal-content">
                <div class="row">
                  <div class="col s12">
                    <h4>Information</h4>
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
                              <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                            </tr>
                            <tr>
                              <td>B003</td>
                              <td>Don't Make Me Think</td>
                              <td>Steve Krugh</td>
                              <td><a id="book-state" class="btn blue lighten-1">2</a></td>
                            </tr>
                            <tr>
                              <td>B004</td>
                              <td>The Non-Designer's Design Book</td>
                              <td>Robin Williams</td>
                              <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                            </tr>
                            <tr>
                              <td>B006</td>
                              <td>How To Win Friends and Influence People</td>
                              <td>Dale Carnegie</td>
                              <td><a id="book-state" class="btn blue lighten-1">1</a></td>
                            </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row right">
                  <div class="col s12"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancel</a><a href="#!" onclick="Materialize.toast('Success!', 4000)" id="confirm-info" class="modal-action modal-close waves-effect waves-green btn">OK     </a></div>
                </div>
              </div>
            </div>
      </div>
    </main>


@endsection
