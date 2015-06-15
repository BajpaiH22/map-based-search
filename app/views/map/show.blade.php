@include('layouts.header')
<div id="loading" class="loading">
  <div class="loading-inner">
    <div class="loading-section">
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
      <div class="box box-dance">&nbsp;</div>
    </div>
  </div>
  <p class="loading-text">loading</p>
</div><!-- .loading -->
<div class="map-loading hidden">
	<div class="loading-overlay"></div>
	<div class="loading-icon">
		<i class="fa fa-cog fa-spin"></i>
		<div class="loading-text">Loading</div>
	</div>
</div><!-- .map-loading -->
<div class="history-panel hidden">
	<div class="history-overlay"></div>
	<ul class="history-list">
		<li class="history-back history-btn">Back to the tweets</li>
	</ul>
</div><!-- .history-panel -->
<div id="map-config">
	<div class="zoom-level-box">
		<label for="zoom-level">Zoom Level: </label><input type="text" name="zoom-level" id="zoom-level" placeholder="Zoom level">
	</div>
	<div class="lat-box">
		<label for="lat">Lat: </label><input type="text" name="lat" id="lat" placeholder="Latitude">
	</div>
	<div class="lng-box">
		<label for="lng">Lng: </label><input type="text" name="lng" id="lng" placeholder="Longitude">	
	</div>
	<div class="btn-box">
		<div class="remove-all-markers btn">Remove All Markers</div>
		<div class="add-text-overlay btn">Add text overlay</div>
		<div class="update-text-overlay btn">Update text overlay</div>
		<div class="remove-text-overlay btn">Remove text overlay</div>	
	</div>
	<div class="history btn">History</div>
	<div class="latest-log">
		<span>Latest log:</span>
		<span class="log-msg">No error</span>
	</div>
	{{ Form::open(array('id' => 'city-form')) }}
		{{ Form::text('city', Input::old('city'), array('placeholder' => 'City name', 'id' => 'city', 'required' => 'required')) }}
		{{ Form::submit('Search') }}
	{{ Form::close() }}
</div><!-- #map-config -->
<div id="map-canvas"></div><!-- #map-canvas -->
<noscript>
	<div class="nojs">
		<div class="nojs-overlay">&nbsp;</div>
		<div class="nojs-text">Sorry, Javascript is disabled on your machine. Enable Javascript or Please open the site on any other Browser</div>
	</div>
</noscript>

@include('layouts.footer')
