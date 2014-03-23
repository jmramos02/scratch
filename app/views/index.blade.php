@extends('layout')

@section('title')
	Scratch Pad
@stop
@section('content')
	<div class = "pure-g-r top-bar">
		<div class="pure-u-5-24">
			<img src="images/scratch-logo.png" alt="scratch-logo"  class = "logo">
		</div>
	</div>
	<div class="pure-g-r navigation">
		<div class="pure-u-3-24" id = "home"><i class="top-icon ion-home"></i> <h6>Home</h6></div>
		<div class="pure-u-3-24" id = "courses"><i class = "top-icon ion-ios7-bookmarks"></i><h6>Courses</h6></div>
		<div class="pure-u-3-24" id = "about-us"><i class="top-icon ion-android-social"></i><h6>Who are we?</h6></div>
		<div class="pure-u-3-24" id = "login"><i class="top-icon ion-log-in"></i> <h6>Login</h6> </div>
		<div class="pure-u-3-24" id = "sponsors"><i class="top-icon ion-person-stalker"></i><h6>Sponsors</h6> </div>	
	</div>
	<div class = "pure-g-r window-row">
		<div class="pure-u-7-24 window">
			<div id="search" class = "window-icon">
				<i class = "ion-ios7-search"> </i>
			</div>
			<div class="window-description">
				<h1>Search Courses</h1>
				<h6>Find courses that are suitable to you. Don't worry, we will try our best to get you the best courses with the best
				instructors.</h6>
			</div>
		</div>
		<div class="pure-u-7-24 window">
			<div id="watch" class = "window-icon">
				<i class = "ion-ios7-videocam-outline" id = "video"> </i>
			</div>
			<div class="window-description">
				<h1>Watch Videos</h1>
				<h6>You can watch, or download videos for your chosen course. Watch at your leisure. just don't forget to answer
				your problem sets</h6>
			</div>
		</div>
		<div class="pure-u-7-24 window">
			<div id="apply" class = "window-icon">
				<i class = "ion-ios7-lightbulb-outline" id = "video"> </i>
			</div>
			<div class="window-description">
				<h1>Apply Your Learning</h1>
				<h6>Teach other people, or invite them to our site! We believe that learning has no boundaries.</h6>
			</div>
		</div>	
	</div>
	<button id = "sign-up" class = "scratch-button">
		Sign Up Now &gt;
	</button>
	<div class="pure-g-r featured-courses">
		<div class="pure-u-1">
			<h1>Featured Courses</h1>
		</div>
	</div>
@stop