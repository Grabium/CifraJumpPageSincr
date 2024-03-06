@extends('pages/top')
@section('content')
<div id="div_page">



<?php 
  $fator = 0;
?>

  <form id="formul" method='POST'>

  {{-- <form action="{{ route('enviar') }}" method='POST'>  --}}
    @csrf


    <div id="div_alterar">
      <div id="div_filha_alterar">

        <input name="fator" id="fator" value="{{ $fator }}" /> 
        <button id="diminuir" class="btn btn-danger aument_dimin" onclick="intervalo('-')">-</button>
        <!--<label id="lab_fator">0</label>-->
        <button id="aumentar" class="btn btn-danger aument_dimin" onclick="intervalo('+')" >+</button>

      </div>
    </div>


    <div class="div_coleabaixo">Insira o texto no campo abaixo</div>
    <div class="div_coleabaixo">Ajuste a tonalidade desejada.</div>

    <div id="div_text">
      <textarea id="texto" name="texto" rows="10" cols="120" class="container-fluid -body-color"></textarea>
    </div>
  </form>
</div><!-- page -->



<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
  {{--
<script type="text/javascript">

function chose(aum_dim){
  document.getElementById("fator").value = aum_dim;
  var form = document.getElementById("formul");
  form.action = "/enviar";
}

</script>
--}}


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