@layout('home.index')

@section('content')
<!-- Content Area
    ==================================================== -->
    <div class="container" style="margin-top:50px;">
      <div class="row">
        @foreach ($users as $user)
          {{ $user->username }} ({{ $user->email }})<br/>
        @endforeach
      </div>
    </div>
@endsection