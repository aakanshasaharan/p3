@extends('layouts.master')

@section('title')
  Random User
@stop

@section('content')
<h1> Random Users</h1>
  <form method="POST" actions="/randomuser">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <fieldset>
      <label for="number"><h3>Number Of Users (1-50):</h3></label>
      <input type="text" id="number" name="number" value={{ old('number', '5') }}>
    </fieldset>
    <h3>What details would you like to have?</h3>
    <fieldset>
      <label for="name">Name:</label>
      <input type="checkbox" name="options[name]" value="name" {{ old('options.name') ? "checked" : "" }}>
    </fieldset>
    <fieldset>
      <label for="email">Email:</label>
      <input type="checkbox" name="options[email]" value="email" {{ old('options.email') ? "checked" : "" }}>
    </fieldset>
    <fieldset>
      <label for="username">Username:</label>
      <input type="checkbox" name="options[username]" value="username" {{ old('options.username') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="company">Company:</label>
      <input type="checkbox" name="options[company]" value="company" {{ old('options.company') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="address">Address:</label>
      <input type="checkbox" name="options[address]" value="address" {{ old('options.address') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="phone">Phone Number:</label>
      <input type="checkbox" name="options[phone]" value="phone" {{ old('options.phone') ? 'checked' : '' }}>
    </fieldset>
    <fieldset>
      <label for="text">Text:</label>
      <input type="checkbox" name="options[text]" value="text" {{ old('options.text') ? 'checked' : '' }}>
    </fieldset>
    <button type="submit" class="btn btn-success">Generate Answer</button>
  </form>

  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <h3><span class="label label-danger">{{ $error }}</span></h3>
    @endforeach
  @endif

  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
    <hr>
    @foreach ($randomuser as $user)
      @foreach ($user as $key=>$value)
        <p>{{ $key }}: {{ $value }}</p>
      @endforeach
      <hr>
    @endforeach
  @endif

  @stop
