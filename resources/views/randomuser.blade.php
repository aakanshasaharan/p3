@extends('layouts.master')

@section('title')
  Random Users
@stop

@section('content')
	<form method="POST" actions="/randomuser">
		<label for="randomuser"><h4>Random Users (1-5):</h4></label>
			<input type="hidden" value="{{ csrf_token() }}" name="_token">
			<fieldset>
				<input type="text" id="randomuser" name="randomuser" value={{ $randomuser or '2' }}>

				<button type="submit" class="btn btn-success">Random User</button>
			</fieldset>
	</form>

  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <h3><span class="label label-danger">{{ $error }}</span></h3>
    @endforeach
  @endif

  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
		<?php
		// use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create('en_US');
		// array to store all the randonuser
		$randomuser= array();
		//for limited no of users
		$number_of_randomuser = 5;
		for ($i=0; $i < $number_of_randomuser; $i++) {
		  $user = array();
		  $user['Name'] = $faker->name;
			$user['City'] = $faker->city;
		  $user['Email'] = $faker->email;
		  $user['Phone'] = $faker->phoneNumber;
		  $user['Password'] = $faker->password;
		  array_push($randomuser, $user);
		}
		?>
    @foreach ($randomuser as $user)
      @foreach ($user as $key=>$value)
        <p>{{ $key }}: {{ $value }}</p>
      @endforeach
      <hr>
    @endforeach
  @endif

  <h4><a href='/'>Back to home page</a></h4>
  @stop
