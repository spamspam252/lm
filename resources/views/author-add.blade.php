@extends('master')

@section('content')
<main id="author-add-section" class="container">
     <div class="row">
       <div class="col s12 valign-wrapper">
         <h3>Enter Information</h3>
       </div>
     </div>
     <div style="margin-bottom: 0px;" class="row">
       <div class="col s12">
         <div class="row">
           <div class="input-field col s12"><i class="fa fa-book prefix"></i>
             <input type="text" name="author-name" value="&lt;?php echo 'author-name-add'; ?&gt;" id="author-name-detail">
             <label for="author-name-add">Name</label>
           </div>
         </div>
         <div class="row">
           <div class="input-field col s12 left-align"><i class="fa fa-calendar-plus-o left prefix"></i>
             <label for="author-dob-add">Date of Birth</label>
             <input type="date" id="author-dob-add">
           </div>
         </div>
         <div class="row right"><a href="{{route('list-author')}}" class="waves-effect waves-green btn-flat">Cancel</a><a href="{{route('list-author')}}" class="waves-effect waves-light btn"><i class="fa fa-user-plus"></i></a></div>
       </div>
     </div>
   </main>

@endsection
