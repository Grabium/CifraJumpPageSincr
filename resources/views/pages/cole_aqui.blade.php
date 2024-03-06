@extends('pages/top')
@section('content')
<div id="div_page">



<?php 
  $fator = 0;
  $response;// = 'Insira a cifra aqui.';
?>


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

    <div id="div_text">
      <textarea id="texto" name="texto" rows="10" cols="120" class="container-fluid -body-color">{{ $response }}</textarea>
    </div>
  </form>
</div><!-- page -->



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" ></script>



<script type="text/javascript">
function intervalo(operacao){ //recebe "+" ou "-".
  event.preventDefault();  //previne recarregamento de página.
  var st = document.getElementById("fator").value; //captura valor atual de fator
  st = parseInt(st); //converte a inteiro.
  if((st>-11)&&(operacao == "-")){ //diminui o valor. limite de -11.
    st = st - 1;
  }else if((st<11)&&(operacao == "+")){ //aumenta o valor. limite de 11.
    st = st + 1;
  }
  document.getElementById("fator").value = st;  //atribui o valor calculado a id="fator"
  document.getElementById("lab_fator").innerHTML = document.getElementById("fator").value; //resolvi exivbir o valor numa label, por estética, e deixar o imput com display:none; no CSS.
}
</script>


@endsection('content')