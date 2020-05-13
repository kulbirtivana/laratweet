@if ( session()->get('success') )
<div role="alert">
{{ session()->get('success') }}
</div>
@endif



<div class="mt-5">

<a href="{{ route('profiles.edit', $profile->id) }}" class="navbar-brand" class="nav-link" class="text-center"> Profile</a>

<figure  >
    <img class="img-responsive" height="12%" alt="profile image" src="{{URL('/images/logo.png')}}">
</figure>

</div> 