<?php  
require 'header.phtml';
?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/aperitivo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carnes.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/molhos.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <h2>Receita de Bolo</h2>
      Bata as claras em neve e reserve.
      Misture as gemas, a margarina e o açúcar até obter uma massa homogênea.
      Acrescente o leite e a farinha de trigo aos poucos, sem parar de bater.
      Por último, adicione as claras em neve e o fermento.
      Despeje a massa em uma forma grande de furo central untada e enfarinhada.
      Asse em forno médio 180 °C, preaquecido, por aproximadamente 40 minutos ou ao furar o bolo com um garfo, este saia limpo.
    </div>
    <div class="col-sm">
    <h2>Receita de Pipoca</h2>
    Misturar todos os ingredientes numa panela de fundo grosso;
    Tampar e levar ao fogo médio, mexendo sempre a panela (use luvas de proteção térmica) até estourar todo o milho;
    Assim que parar os estouros, tire imediatamente a pipoca da panela para não queimar e coloque na travessa em que vai servir.
    </div>
    <div class="col-sm">
    <h2>Receita de Sopa</h2>
    Em uma panela de pressão, refogue os cubos de carne;
    Acrescente a cebola e refogue até ficar translúcida;
    Coloque a páprica, o caldo de carne e a água;
    Tampe a panela e, assim que pegar pressão, conte 20 minutos;
    Tire a pressão e coloque os legumes, mantendo a tampa aberta. Cozinhe por 5 minutos;
    Adicione o macarrão, cozinhe por 3 minutos;
    Acerte o sal e salpique cheiro-verde.
    </div>
  </div>
</div>

<?php  
require 'footer.phtml';
?>
