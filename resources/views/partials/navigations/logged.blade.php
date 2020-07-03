<li class="nav-item dropdown">
  <a 
  href="#" 
  id="navbarDropdown" 
  class="nav-link dropdown-toggle" 
  role="button" 
  data-toggle="dropdown" 
  aria-haspoppup="true" 
  aria-expanded="false">
    {{ auth()->user()->name}} <span class="caret"></span>
  </a>

  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a href="{{ route('logout') }}" class="dropdown-item"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      {{ __('Cerrar sesión') }}
    </a>
    
    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
      @csrf
    </form>

  </div>
</li>