<!DOCTYPE html>
<html>
  <body class="hold-transition skin-blue sidebar-mini fixed">
    <div class="se-pre-con"></div>
    <?php include '../../view/util/menu.php'; ?>
    <div class="content-wrapper" id="sec">
      <section class="content" id="content">
      <div class="row">
        <section class="col-md-12 ">
          <div class="tab-pane active" id="dados_basicos">
            <div class="panel panel-default border-form" style="margin-bottom: 43px;">
                <h1><strong>TESTE COMO ESTÁ SUA ALIMENTAÇÃO?</strong></h1>
                <h3>Para pessoas de 20 e 60 anos de idade</h3>
                <br>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>
                          <p>Se você achar que mais de uma resposta está certa, escolha a que você mais costuma fazer quando comer.</p>
                          <p>Lembre - se:responda o que você realmente come, e não o que gostaria ou acha que seria melhor.</p>
                          <p>Se você tiver alguma dificuldade para responder, peça ajuda a alguém próximo da familía, amigo ou vizinho.</p>
                          <p>Escolha só UMA resposta. Vamos começar!</p>  
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <FONT COLOR="000080"> 1- Qual é, em média, a quantidade de frutas (unidade/fatia/pedaço/copo de suco natural) que você come por dia?</FONT>
                      </tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não como frutas, nem tomo suco de frutas natural todos os dias.</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">3 ou mais unidades/fatias/pedaços/copos de suco natural</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">2 unidades/fatias/pedaços/copos de suco natural</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">1 unidade/fatias/pedaços/copo de suco natural</label>
                           </p>
                        </form>
                        <tr>
                        <td> <FONT COLOR="000080"> 2- Qual é, em média, a quantidade de legumes e verduras que você come por dia?</FONT>
                        </tr>
                        <td>
                        <b>Atenção!</b><p>Não considere nesse grupo os tubérculos e as raízes (veja a pergunta 4).</p>
                        </td>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não como legumes, nem verduras todos os dias</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">3 ou menos coleres de sopa</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">4 a 5 colheres de sopa</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">6 a 7 colheres de sopa</label>
                           </p>
                           <p>e.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">8 ou mais colheres de sopa</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 3- Qual é, em média, a quantidade que você come dos seguintes alimentos: feijão de qualquer tipo ou cor, lentilhas,ervilha,grão-de-bico, soja,fava,sementes ou castanhas? </FONT>
                      </tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não consumo.</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">2 ou mais colheres de sopa por dia</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">Consumo menos de 5 vezes por semana</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">1 colher de sopa ou menos por dia</label>
                           </p>
                        </form>
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 4- Qual a quantidade, em média, que você consome por dia dos alimentos listados abaixo? </FONT>
                      </tr>
                        <td>
                        <form>
                        <p>a.
                           <label for="cars">Arroz,milho e outros cereais(inclusive matinais); mandioca/macaxeira/aipim/cará ou inhame; macarrão e outras massas; batata inglesa, batata doce, batata-baroa ou mandioquinha, quantidade de colheres de sopa: </label>
                           <select id="numbers">
                           <option value=" " selected> </option>  
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           </select>
                        </p>   
                        <p>b.
                           <label for="cars">Pães quantas unidades/fatias: </label>
                           <select id="numbers">
                           <option value=" " selected> </option>  
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           </select>
                        </p>
                        <p>c.
                           <label for="cars">Bolos sem cobertura e/ ou recheio quantas fatias: </label>
                           <select id="numbers">
                           <option value=" " selected> </option>  
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           </select>
                        </p>
                        <p>d.
                           <label for="cars">Biscoito ou bolacha sem recheio, quantas unidades: </label>
                           <select id="numbers">
                           <option value=" " selected> </option>  
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           </select>
                        </p>  
                        </form>
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 5- Qual é, em média, a quantidade de carnes (gado, porco, aves, peixes e outros) ou ovos que você come por dia?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não consumo nenhum tipo de carne</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">1 pedaço/fatia/colher de sopa ou 1 ovo</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">2 pedaços/fatias/colheres de sopa ou 2 ovos</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">Mais de 2 pedaços/fatias/colheres de sopa ou mais de 2 ovos</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 6- Você costuma tirar a gordura aparente das carnes, a pele do frango ou outro tipo de ave?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Sim</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Não</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">Não como carne vermelha ou frango</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 7- Você costuma comer peixe com qual frequência?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não consumo</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Somente algumas vezes no ano</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">2 ou mais vezes por semana</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">De 1 a 4 vezes por mês</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 8- Qual é, em média, a quantidade de leite e seus derivados (iogurtes, bebidas lácteas, coalhada, requeijão, queijos e outros) que você come por dia?</FONT>
                        </tr>
                        <td>
                        <p>Pense na quantidade usual que você consome: pedaço, fatia ou porções em colheres de sopa ou copo grande (tamanho do copo de requeijão) ou xícara grande, quando for o caso.</p>
                        </td>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Não consumo leite, nem derivados(vá para a questão 10)</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">3 ou mais copos de leite ou pedaços/fatias/porções</label>
                           </p>
                           <p>c.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">2 copos de leite ou pedaços/fatias/porções</label>
                           </p>
                           <p>d.
                           <input type="radio" id="c" name="letters" value="c">
                           <label for="c">1 ou menos copos de leite ou pedaçõs/fatias/porções</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 9- Qual tipo de leite e seus derivados você habitualmente consome?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Integral</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Com baixo teor de gorduras (semidesnatado, desnatado ou ligth)</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 10- Pense nos seguintes alimentos: frituras, salgadinhos fritos ou em pacotes, carnes salgadas, hambúrgueres, presuntos e embutidos (salsichas,mortadela, salame. linguça e outros). Você costuma comer qualquer um deles com que frequncia?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Raramente ou nunca</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Todos os dias</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">De 2 a 3 vezes por semana</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">De 4 a 5 vezes por semana</label>
                           </p>
                           <p>e.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Menos que 2 vezes por semana</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 11- Pense nos seguintes alimentos: doces de qualquer tipo, bolos recheados com coberturas, biscoitos doces, refrigerantes e sucos industrializados. Você costuma comer qualquer um deles com que frequência?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Raramente ou nunca</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> Menos que 2 vezes por semana</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">De 2 a 3 vezes por semana</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">De 4 a 5 vezes por semana</label>
                           </p>
                           <p>e.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Todos os dias</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 12-Qual tipo de gordura é mais usado na sua casa para cozinhas almientos?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Banha animal ou manteiga</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> Óleo vegetal como: soja, girassol, milho, algodão ou canola</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Margarina ou gordura vegetal</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 13-Você costuma colocar mais sal nos almientos quando já servidos em seu prato?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Sim</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> Não</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
                        <tr>
                        <td> <FONT COLOR="000080"> 14-Pense na sua rotina semanal: quais as refeições voccê costuma fazer habitualmente no dia?</FONT>
                        </tr>
                        <tr>
                        <td>
                        Assinale no quadro abaixo as suas opções.Cada item vale um ponto, a pontuação será a soma deles.
                        </td>
                        <table  style="width:100%" >
                        <tr>
                           <th> </th>
                           <th>Não(0)</th>
                           <th>Sim (1)</th>
                        </tr>
                        <tr>
                           <td>Café da manhã</td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                        </tr>
                        <tr>
                           <td>Lanche da manhã</td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                        </tr>
                        <tr>
                           <td>Almoço</td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                        </tr>
                        <tr>
                           <td>Lanche ou café da tarde</td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                        </tr>
                        <tr>
                           <td>Jantar ou café da noite</td>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           <td>
                           <form action="/action_page.php">
                           <input type="checkbox" id="opcao" name="opcao" value=" ">
                           <label for="opcao"> </label>
                           </form>
                           </td>
                           </td>
                        </tr>
                        <tr>
                           <td><b>Pontuação</b></td>
                           <td> </td>
                           <td> </td>
                        </tr>
                        </table>
                        </tr>
                        <br>
                        <tr>
                        <td> <FONT COLOR="000080"> 15-Quantos copos de água você bebe por dia? Inclua no seu cálculo sucos de frutas naturais ou chás (exceto café, chá preto e chá mate).</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Menos de 4 copos</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> 8 copos ou mais</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">4 a 5 copos</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">6 a 8 copos</label>
                           </p>
                           </form>
                        </td> 
                        </tr>
                        </form>
                        </td> 
                        </tr><br>
                        <tr>
                        <td> <FONT COLOR="000080"> 16-Você costuma consumir bebidas alcoólicas ( uísque, cachaça, vinho, cerveja, conhaque etc.) Com qual frequência?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Diariamente</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> 1 a 6 vezes por semana</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Eventualemte ou raramente (menos de 4 vezes ao mês)</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Não consumo</label>
                           </p>
                        </form>
                        </td> 
                        </tr><br>
                        <tr>
                        <td> <FONT COLOR="000080"> 17-Você faz atividade física REGULAR, isto é, pelo menos 30 minutos por dia, todos os dias da semana, durante o seu tempo livre?</FONT>
                        </tr>
                        <td> 
                        <p>Considere aqui as atividades da sua rotina diária como o deslocamento a pé ou bicicleta para o trabalho, subir escadas, atividades domésticas, atividades praticadas em academias e clubes. Os 30 minutos podem ser divididos em 3 etapas de 10 minutos.</p>
                        </td>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Diariamente</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> 1 a 6 vezes por semana</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Eventualemte ou raramente (menos de 4 vezes ao mês)</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Não consumo</label>
                           </p>
                        </form>
                        </td> 
                        </tr><br>
                        <tr>
                        <td> <FONT COLOR="000080"> 18-Você costuma ler a informação nutricional que está presente no rótulo de alimentos industrializados antes de comprá-los?</FONT>
                        </tr>
                        <tr>
                        <td>
                        <form>
                           <p>a.
                           <input type="radio" id="a" name="letters" value="a">
                           <label for="a">Nunca</label>
                           </p>
                           <p>b.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b"> Quase Nunca</label>
                           </p>
                           <p>c.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Algumas vezes, para alguns produtos</label>
                           </p>
                           <p>d.
                           <input type="radio" id="b" name="letters" value="b">
                           <label for="b">Sempre ou quase sempre, para todos os produtos</label>
                           </p>
                        </form>
                        </td> 
                        </tr>
        
    </tbody>
    </table>
    <div class="float-left">
      <button type="button" class="btn btn-success">Salvar</button>
      </div>
      </div>
      </div>
      </section>
      </div>
  </body>
</html>