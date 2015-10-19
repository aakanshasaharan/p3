@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')
  <h1>Lorem Ipsum Generator</h1>
  <h4>How many paragraphs do you want?</h4>
  <form method="POST" actions="/loremipsum">
      <input type="hidden" value="{{ csrf_token() }}" name="_token">
      <fieldset>
        <label for="paragraphs"><h4>Paragraphs (1-50):</h4></label>
        <input type="text" id="paragraphs" name="paragraphs" value={{ $paragraphs or '2' }}>
      </fieldset>
      <button type="submit" class="btn btn-success">Generate Paragraphs</button>
  </form>


  @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <h3><span class="label label-danger">{{ $error }}</span></h3>
    @endforeach
  @endif


  @if ($_SERVER['REQUEST_METHOD'] == 'POST')
    <?php
      $generator = new Badcow\LoremIpsum\Generator();
      $text = $generator->getParagraphs($paragraphs);
      echo implode('<p>', $text );
    ?>
  @endif
	@stop
