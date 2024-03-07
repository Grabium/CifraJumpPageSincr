@extends('pages/top')
@section('content')


<?php $fator = 0; ?>



<div id="div_page">
  <form action="{{ route('changed_chords') }}" method='POST'> 
    @csrf
    

    <div class="div_alterar">
      <div class="div_filha_alterar">

        <input name="fator" id="fator" value="{{ $fator }}" /> 
        <button id="diminuir" class="btn btn-danger aument_dimin" onclick="intervalo('-')">-</button>
        <label id="lab_fator">0</label>
        <button id="aumentar" class="btn btn-danger aument_dimin" onclick="intervalo('+')" >+</button>

      </div>
    </div>

    <div class="div_alterar">
      <div class="div_filha_alterar">
        <button id="but_alterar" class="btn btn-danger" >Alterar</button>
      </div>
    </div>
    
    <div class="div_coleabaixo">Insira o texto no campo abaixo</div>
    <div class="div_coleabaixo">Ajuste a tonalidade desejada.</div>

    <div>{{ $errors->has('fator') ? $errors->first('fator') : '' }}</div>

    <div id="div_text">
      <textarea
        id="texto" 
        name="texto"
        value="{{ $response ?? old('texto') }}"
        rows="10" 
        cols="120" 
        class="container-fluid -body-color">
      {{ print_r($lines) }}
      </textarea>
    </div>
  </form>
</div>

@endsection