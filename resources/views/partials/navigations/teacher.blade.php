<li><a href="{{ route('profile.index') }}" class="nav-link">{{ __('Mi perfil') }}</a></li>
<li><a href="" class="nav-link">{{ __('Mi suscripciones') }}</a></li>
<li><a href="{{ route('invoices.admin') }}" class="nav-link">{{ __('Mi facturas') }}</a></li>
<li><a href="{{ route('courses.subscribed') }}" class="nav-link">{{ __('Mi cursos') }}</a></li>
<li><a href="" class="nav-link">{{ __('Cursos desarrollados por mi') }}</a></li>
<li><a href="{{ route('courses.create') }}" class="nav-link">{{ __('Crear curso') }}</a></li>
@include('partials.navigations.logged')