@extends('master')

@section('content')
<main id="author-detail-section" class="container">
     <div class="row">
       <div class="col s12 valign-wrapper">
         <h3>Author A001</h3><a href="#!" id="edit-author-detail-button" class="btn-floating btn-large waves-effect waves-light blue lighten-1 valign"><i id="edit-author-detail-button-icon" class="fa fa-pencil-square-o"></i></a>
       </div>
     </div>
     <div style="margin-bottom: 0px;" class="row">
       <div class="col s12">
         <div class="row">
           <div class="input-field col s12"><i class="fa fa-book prefix"></i>
             <input type="text" name="author-name" disabled value="&lt;?php echo 'author-name-detail'; ?&gt;" id="author-name-detail">
             <label for="author-name-detail">Name</label>
           </div>
         </div>
         <div class="row">
           <div class="input-field col s12 left-align"><i class="fa fa-calendar-plus-o left prefix"></i>
             <label for="author-dob">Date of Birth</label>
             <input type="date" disabled id="author-dob">
           </div>
         </div>
         <div id="renting-books-content" class="row no-more-margin-bottom">
           <div class="col s12">
             <ul data-collapsible="accordion" class="collapsible light-blue lighten-4">
               <li>
                 <div class="collapsible-header blue lighten-1 white-text">Book List<i class="fa fa-bookmark"></i></div>
                 <div class="collapsible-body">
                   <table class="bordered striped responsive-table centered">
                     <thead>
                       <tr>
                         <th data-field="id">ID</th>
                         <th data-field="title">Title</th>
                         <th data-field="author">Author</th>
                         <th data-field="state">Rent Date</th>
                         <th data-field="add">Return Date</th>
                       </tr>
                     </thead>
                     <tbody>
                           <tr>
                             <td>B001</td>
                             <td>The Theory Of EveryThing</td>
                             <td>Jane Wilde Hawking</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                           <tr>
                             <td>B002</td>
                             <td>The Design Of Everyday Things</td>
                             <td>Donald A. Norman</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                           <tr>
                             <td>B003</td>
                             <td>Don't Make Me Think</td>
                             <td>Steve Krugh</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                           <tr>
                             <td>B004</td>
                             <td>The Non-Designer's Design Book</td>
                             <td>Robin Williams</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                           <tr>
                             <td>B005</td>
                             <td>Clean Code</td>
                             <td>Robert C. Martin</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                           <tr>
                             <td>B006</td>
                             <td>How To Win Friends and Influence People</td>
                             <td>Dale Carnegie</td>
                             <td><a id="list-return-date" class="btn blue lighten-1">03/12/2016</a></td>
                             <td><a id="list-return-date" class="btn green lighten-1">03/12/2016</a></td>
                           </tr>
                     </tbody>
                   </table>
                 </div>
               </li>
             </ul>
           </div>
         </div>

         <div class="row right">
           <div class="col s12"><a href="{{route('list-author')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-author')}}"class="waves-effect waves-green btn">OK</a></div>
         </div>
       </div>
     </div>
   </main>

@endsection
