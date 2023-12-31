@extends('layout')  <!-- Assuming you have a main layout named 'layout' -->

@section('content')

.main-content
	div.month.month--feb(style="--color:#db7a7a") February
	each val, index in ['#db7f7a', '#db847a','#db8d7a','#db8d7a','#db917a','#db967a', '#db9a7a', '#db9a7a','#db9f7a','#dba37a', '#dba87a','#dbac7a', '#dbb07a', '#dbb57a', '#dbbe7a', '#dbc27a', '#dbc77a', '#dbd07a', '#dbd47a', '#dbd97a', '#d9db7a', '#d0db7a', '#cbdb7a', '#c7db7a', '#c2db7a', '#bedb7a', '#b9db7a', '#b5db7a']
		div.date(style="--color:"+val)= index+1
		
	div.month.month--mar(style="--color:#b0db7a") March
	each val, index in [ '#acdb7a', '#a7db7a', '#a3db7a','#9adb7a','#96db7a', '#91db7a', '#8ddb7a', '#88db7a', '#7fdb7a',	'#7bdb7a', '#7adb7e', '#7adb82', '#7adb87', '#7adb90', '#7adb9d', '#7adba6', '#7adbaf', '#7adbb3', '#7adbb8', '#7adbc1', '#7adbce', '#7adbd3','#7adbd7', '#7adadb', '#7ad6db', '#7ad1db', '#7acddb', '#7ac8db', '#7ac4db','#7abfdb', '#7ab6db']
		div.date(style="--color:"+val)= index+1
	div.month.month--title(style="--color:#7ab6db") you've got plans
	div.explanation(style="--color:#7ab2db")
		| Part of the 
		a(href="https://codepen.io/collection/DQvYpQ/" target="_blank") CSS Grid collection here
		| .
	footer(style="--color:#7ab2db")
		a(href="https://twitter.com/meowlivia_" target="_blank")
			i.icon-social-twitter.icons
		a(href="https://github.com/oliviale" target="_blank")
			i.icon-social-github.icons
		a(href="https://dribbble.com/oliviale" target="_blank")
			i.icon-social-dribbble.icons
	//more colors: '#7aaddb', '#7aa9db','#7aa5db', '#7a9cdb', '#7a97db', '#7a8edb', '#7a81db', '#7c7adb', '#817adb', '#8a7adb', '#8e7adb', '#977adb', '#9c7adb', '#a57adb', '#a97adb', '#ae7adb', '#b27adb', '#b67adb', '#bb7adb', '#bf7adb', '#c47adb', '#c87adb', '#cd7adb', '#d17adb', '#d67adb', '#da7adb', '#db7ac5', '#db7ac1','#db7ab8','#db7ab3', '#db7aaf', '#db7aaa', '#db7aa6', '#db7aa2', '#db7a9d', '#db7a99', '#db7a94', '#db7a90', '#db7a87', '#db7a82', '#db7a82', '#db7a7a']
	div.event.event--1 
		.event__name Valentines party with Ames ❤️
	div.event.event--2
		.event__name 😎 Die Hard binge weekend 😎
	div.event.event--3
		.event__name Dinner w/ Gina 💯
	div.event.event--4a
		.event__name Charles' Taco...
	div.event.event--4b
		.event__name ... Food Truck Opening 🌯
	div.event.event--5
		.event__name Run-through 🎃

@endsection

