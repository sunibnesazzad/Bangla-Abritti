@if(Session::has('success'))
  <div class="row">
      <div class="col-md-12">
          <p class="success">{{ Session::get('success')}}</p>
      </div>
  </div>
  <!--
  <div class="row">
       <div class="col-md-12">
            <p class="not_succed">upload fail</p>
        </div>
  </div>
  -->        
@endif
@if(Session::has('error'))
  @if(Session::get('error') != '')
  <div class="row">
      <div class="col-md-12">
          <p class="not_succed">{{ Session::get('error')}}</p>
      </div>
  </div>
  <!--
  <div class="row">
       <div class="col-md-12">
            <p class="not_succed">upload fail</p>
        </div>
  </div>
  -->       
  @endif 
@endif