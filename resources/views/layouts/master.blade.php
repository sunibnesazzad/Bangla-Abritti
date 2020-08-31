<!DOCTYPE html>

<html lang="en">

@include('include.head')

<body class="dashboard-page">

	@if(Request:: is ('recitation'))
	<div id="overlay">
       <img src="{{ asset('assets2/img/ajax-loader.gif') }}" alt="Loading" /><br/>
        Loading...
    </div>
	@endif

@include('include.navbar')

<div >
    
     @yield('content')

</div>


 <!-- Adding footer -->
        @include('include.new_footer')

 <!-- End footer -->

  <!-- Adding script part -->
        @include('include.footer_script')
 <!-- End footer -->

</body>
</html>