@if (session('email') !== NULL)
      @extends('layout.app')
      @section('title')
      EDIT PROFILE | SHOWFORCE SECURITY AGENCY
      @endsection
      @section('links')
        @include('dashboard/links')
      @endsection
      @section('content')
        @foreach ($data1 as $row)
            @include('dashboard/cont5')
            @include('dashboard/footer')
        @endforeach
      @endsection
      {{-- @section('script')
        @include('dashboard/script')
      @endsection --}}
  @elseif (session('email') == NULL)
    <script type="text/javascript">
        window.location = "login";
    </script>
  @else
    <script type="text/javascript">
        window.location = "login";
    </script>
  @endif
