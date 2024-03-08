@extends('pages/layouts/top')
@section('content')

<?php $fator = (isset($fator)) ? $fator : 0 ; ?>


<div>
  <div>
    <a href="{{ route('home') }}"><button id="but_home" class="btn btn-danger" >Home (vazia)</button></a>
    <button id="but_quero_outro_tom" class="btn btn-danger" >Quero outro tom</button>
  </div>
  <form action="{{ route('outroTom') }}" method="POST" > 
    @csrf
    <div class="div_alterar">
      <div class="div_filha_alterar">
  
        <input name="fator" id="fator" class='invisible' value="{{ $fator }}" /> 
        <button id="diminuir" class="btn btn-danger aument_dimin" onclick="intervalo('-')">-</button>
        <label id="lab_fator">0</label>
        <button id="aumentar" class="btn btn-danger aument_dimin" onclick="intervalo('+')" >+</button>
  
      </div>
    </div>
  
    <div class="div_alterar">
      <div class="div_filha_alterar">
        <button id="but_outro_tom" class="btn btn-danger" onclick="outroTom()">Alterar</button>
      </div>
    </div>
    <input name="fatorAntigo" id="fatorAntigo" class='invisible' value="{{ $fatorAntigo }}"/>
    <textarea name="texto" id="texto" class='invisible'>{{ $textoAntigoString }}</textarea>
  </form>
  
@if(isset($lines)) 
  @foreach($lines as $line) 
    <label id='lab_resultado' style="color:{{ ($line['cifer']) ? 'orange' : 'black' }}">{{ $line['content'] }}</label><br />
  @endforeach 
@endif
        
      
</div>

@endsection