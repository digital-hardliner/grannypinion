@if (!Auth::guest())
<header>
  <h3 style="text-align:center;">Grannypinion</h3>
  <nav class="navbar navbar-default" style="background-color:white;">
    <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="/{{Auth::user()->id}}"> <h3> Mein Profil </h3> </a></li>
         <li> <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <h3> Logout </h3>
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST">
            {{ csrf_field() }}
          </form>
          </li>
          <li>
          <form class="navbar-form" role="search" action="/searchuser" method="GET">
            <input type="text" class="form-control" placeholder="Vorname" name="firstname">
            <input type="text" class="form-control" placeholder="Nachname" name="lastname">
            <button class="btn btn-default" style="background-color:white;" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </form>
      </li>
    </ul>
  </div>
</div>
</nav>
</header>
@else
<header>
<nav class="navbar navbar-default" style="background-color:white;">
<h1 style="text-align:center"> Grannypinion </h1>
<h4 style="text-align:center"> Erfahre was deine Freunde und Bekannte wirklich über dich denken. </h4>
</nav>
</header>
@endif