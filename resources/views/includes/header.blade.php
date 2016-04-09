<header>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper"><a href="{{route('home')}}" class="brand-logo">Library<strong>Manager</strong></a><a href="#" data-activates="side-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <!--SIDENAV-->
        <ul id="side-out" class="side-nav">
          <li style="padding:0 !important"><a id="logo-container">Library<strong>Manager</strong></a></li>
          @if (!Auth::guest())
          <li><a href="">Hello, {{ Auth::user()->name }}!</a></li>
          <li><a href="{{route('rent')}}" >Rent<i class="fa fa-sign-in left fa-2x"></i></a></li>
          <li><a href="{{route('return')}}">Return<i class="fa fa-sign-out left fa-2x"></i></a></li>
          <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
              <li><a class="collapsible-header">List<i class="material-icons left">view_list</i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="{{route('list-member')}}">Member<i class="fa fa-user left"></i></a></li>
                    <li><a href="{{route('list-book')}}">Book<i class="fa fa-book left"></i></a></li>
                    <li><a href="{{route('list-author')}}">Author<i class="fa fa-pencil left"></i></a></li>
                    <li><a href="{{route('list-publisher')}}">Publisher<i class="fa fa-paper-plane-o left"></i></a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="{{ url('/logout') }}">Log Out<i class="material-icons left">power_settings_new</i></a></li>
        @endif
        </ul>
        <!-- END SIDENAV -->
        @if (!Auth::guest())
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Hello, {{ Auth::user()->name }}!</a></li>
          <li><a href="{{route('rent')}}" class="nav-item">Rent<i class="fa fa-sign-in left fa-2x"></i></a></li>
          <li><a href="{{route('return')}}" class="nav-item">Return<i class="fa fa-sign-out right fa-2x"></i></a></li>
          <li><a data-activates="dropdown" class="dropdown-button" data-beloworigin="true" aria-haspopup="true" aria-expanded="false">List<i class="material-icons right">view_list</i></a></li>
          <li><a href="{{ url('/logout') }}" class="nav-item">Log Out<i class="material-icons right">power_settings_new</i></a></li>
          <!-- DROPDOWN-->
          <ul id="dropdown" class="dropdown-content">
            <li><a href="{{route('list-member')}}">Member<i class="fa fa-user left"></i></a></li>
            <li><a href="{{route('list-book')}}">Book<i class="fa fa-book left"></i></a></li>
            <li><a href="{{route('list-author')}}">Author<i class="fa fa-pencil left"></i></a></li>
            <li><a href="{{route('list-publisher')}}">Publisher<i class="fa fa-paper-plane-o left"></i></a></li>
          </ul>
        </ul>
      @endif
      </div>
    </nav>
  </div>
</header>
