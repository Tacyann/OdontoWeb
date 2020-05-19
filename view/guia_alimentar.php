<!DOCTYPE html>
<html>
<?php include '../view/util/head.php'; ?>

<body>
    <?php include '../view/util/menu.php'; ?>
    <!-- Grid -->
    <div class="row container">
        <div class="col s12 m12">
            <div class="card white">
                <div class="card-content black-text">
                    <h1><strong>TESTE COMO ESTÁ SUA ALIMENTAÇÃO?</strong></h1>
                    <h3>Para pessoas de 20 e 60 anos de idade</h3>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <ol type="I">
                                        <li>Se você achar que mais de uma resposta está certa, escolha a que você mais costuma fazer quando come.</li>
                                        <li>Lembre - se:responda o que você realmente come, e não o que gostaria ou acha que seria melhor.</li>
                                        <li>Se você tiver alguma dificuldade para responder, peça ajuda a alguém próximo da familía, amigo ou vizinho.</li>
                                        <li>Escolha só UMA resposta. Vamos começar!</li>
                                    </ol>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <FONT> 1- Qual é, em média, a quantidade de frutas (unidade/fatia/pedaço/copo de suco natural) que você come por dia?</FONT>
                            </tr>
                            <td>
                                <form action="#">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Não como frutas, nem tomo suco de frutas natural todos os dias.</span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" />
                                        <span>3 ou mais unidades/fatias/pedaços/copos de suco natural.</span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" />
                                        <span>2 unidades/fatias/pedaços/copos de suco natural.</span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" />
                                        <span>1 unidade/fatias/pedaços/copo de suco natural.</span>
                                    </label>
                                    <br>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <FONT> 2- Qual é, em média, a quantidade de legumes e verduras que você come por dia?</FONT>
                                    <p><strong>Atenção!</strong></p>
                                    <p>Não considere nesse grupo os tubérculos e as raízes (veja a pergunta 4).</p>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <form action="#">

                                        <label>
                                            <input type="checkbox" />
                                            <span>Não como legumes, nem verduras todos os dias.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>3 ou menos coleres de sopa.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>4 a 5 colheres de sopa.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>6 a 7 colheres de sopa.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>8 ou mais colheres de sopa.</span>
                                        </label>
                                        <br>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <FONT> 3- Qual é, em média, a quantidade que você come dos seguintes alimentos: feijão de qualquer tipo ou cor, lentilhas,ervilha,grão-de-bico, soja,fava,sementes ou castanhas? </FONT>
                            </tr>
                            <td>
                                <form action="#">

                                            <label>
                                                <input type="checkbox" />
                                                <span>Não consumo.</span>
                                            </label>
<br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>2 ou mais colheres de sopa por dia.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Consumo menos de 5 vezes por semana.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>1 colher de sopa ou menos por dia.</span>
                                            </label>
                                            <br>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <td>
                                    <FONT> 4- Qual a quantidade, em média, que você consome por dia dos alimentos listados abaixo? </FONT>
                            </tr>
                            <td>
                                <form action="#">

                                    <label>
                                        <input type="checkbox" />
                                        <span>Arroz,milho e outros cereais(inclusive matinais); mandioca/macaxeira/aipim/cará ou inhame; macarrão e outras massas; batata inglesa, batata doce, batata-baroa ou mandioquinha, quantidade de colheres de sopa: .</span>
                                    </label>

                                    <select>
                                        <option value="" disabled selected>Informe a quantidade:</option>
                                        <option value=" "> </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>

                                </form>

                                <form action="#">

                                    <label>
                                        <input type="checkbox" />
                                        <span>Pães:</span>
                                    </label>

                                    <select>
                                        <option value="" disabled selected>Informe a quantidade:</option>
                                        <option value=" "> </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </form>

                                <form action="#">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Bolos sem cobertura e/ ou recheio quantas fatias:</span>
                                    </label>
                                    <select>
                                        <option value=" " selected> Informe a quantidade:</option>
                                        <option value=" "> </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </form>

                                <form action="#">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Biscoito ou bolacha sem recheio, quantas unidades:</span>
                                    </label>
                                    <select>
                                        <option value=" " selected>Informe a quantidade: </option>
                                        <option value=" "> </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </form>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 5- Qual é, em média, a quantidade de carnes (gado, porco, aves, peixes e outros) ou ovos que você come por dia?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não consumo nenhum tipo de carne.</span>
                                            </label>

                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>1 pedaço/fatia/colher de sopa ou 1 ovo.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>2 pedaços/fatias/colheres de sopa ou 2 ovos.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Mais de 2 pedaços/fatias/colheres de sopa ou mais de 2 ovos.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 6- Você costuma tirar a gordura aparente das carnes, a pele do frango ou outro tipo de ave?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Sim.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não como carne vermelha ou frango.</span>
                                            </label>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 7- Você costuma comer peixe com qual frequência?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não consumo.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Somente algumas vezes no ano.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>2 ou mais vezes por semana.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>De 1 a 4 vezes por mês.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 8- Qual é, em média, a quantidade de leite e seus derivados (iogurtes, bebidas lácteas, coalhada, requeijão, queijos e outros) que você come por dia?</FONT>
                                        <p><strong>Pense na quantidade usual que você consome: pedaço, fatia ou porções em colheres de sopa ou copo grande (tamanho do copo de requeijão) ou xícara grande, quando for o caso.</strong></p>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não consumo leite, nem derivados(vá para a questão 10).</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>3 ou mais copos de leite ou pedaços/fatias/porções.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>2 copos de leite ou pedaços/fatias/porções.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>1 ou menos copos de leite ou pedaçõs/fatias/porções.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 9- Qual tipo de leite e seus derivados você habitualmente consome?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Integral.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Com baixo teor de gorduras (semidesnatado, desnatado ou ligth).</span>
                                            </label>
                                            <br>

                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 10- Pense nos seguintes alimentos: frituras, salgadinhos fritos ou em pacotes, carnes salgadas, hambúrgueres, presuntos e embutidos (salsichas,mortadela, salame. linguça e outros). Você costuma comer qualquer um deles com que frequncia?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Raramente ou nunca.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Todos os dias.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>De 2 a 3 vezes por semana.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>De 4 a 5 vezes por semana.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Menos que 2 vezes por semana.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 11- Pense nos seguintes alimentos: doces de qualquer tipo, bolos recheados com coberturas, biscoitos doces, refrigerantes e sucos industrializados. Você costuma comer qualquer um deles com que frequência?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">

                                            <label>
                                                <input type="checkbox" />
                                                <span>Raramente ou nunca.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Menos que 2 vezes por semana.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>De 2 a 3 vezes por semana.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>De 4 a 5 vezes por semana.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Todos os dias.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 12-Qual tipo de gordura é mais usado na sua casa para cozinhas almientos?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">

                                            <label>
                                                <input type="checkbox" />
                                                <span>Banha animal ou manteiga.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Óleo vegetal como: soja, girassol, milho, algodão ou canola.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Margarina ou gordura vegetal.</span>
                                            </label>
                                            <br>

                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 13-Você costuma colocar mais sal nos almientos quando já servidos em seu prato?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Sim.</span>
                                            </label>
                                            <br>

                                            <label>
                                                <input type="checkbox" />
                                                <span>Não.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 14-Pense na sua rotina semanal: quais as refeições voccê costuma fazer habitualmente no dia?</FONT>
                                        <p><strong>Assinale no quadro abaixo as suas opções. Cada item vale um ponto, a pontuação será a soma deles.</strong></p>
                                </tr>
                                <tr>
                                    <td>

                                        <table>
                                            <tr>
                                                <th> </th>
                                                <th>Não(0)</th>
                                                <th>Sim (1)</th>
                                            </tr>
                                            <tr>
                                                <td>Café da manhã</td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Lanche da manhã</td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>Almoço</td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            <tr>


                                                <td>Lanche ou café da tarde</td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Jantar ou café da noite</td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="#">
                                                        <label>
                                                            <input type="checkbox" />
                                                            <span></span>
                                                        </label>
                                                    </form>
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
                                    <td>
                                        <FONT> 15-Quantos copos de água você bebe por dia? Inclua no seu cálculo sucos de frutas naturais ou chás (exceto café, chá preto e chá mate).</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">

                                            <label>
                                                <input type="checkbox" />
                                                <span>Menos de 4 copos.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>8 copos ou mais.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>4 a 5 copos.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>6 a 8 copos.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 16-Você costuma consumir bebidas alcoólicas ( uísque, cachaça, vinho, cerveja, conhaque etc.) Com qual frequência?</FONT>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="#">
                                            <label>
                                                <input type="checkbox" />
                                                <span>Diariamente.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>1 a 6 vezes por semana.</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Eventualemte ou raramente (menos de 4 vezes ao mês).</span>
                                            </label>
                                            <br>
                                            <label>
                                                <input type="checkbox" />
                                                <span>Não consumo.</span>
                                            </label>
                                            <br>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <FONT> 17-Você faz atividade física REGULAR, isto é, pelo menos 30 minutos por dia, todos os dias da semana, durante o seu tempo livre?</FONT>
                                        <p><strong>Considere aqui as atividades da sua rotina diária como o deslocamento a pé ou bicicleta para o trabalho, subir escadas, atividades domésticas, atividades praticadas em academias e clubes. Os 30 minutos podem ser divididos em 3 etapas de 10 minutos.</strong></p>
                                </tr>

                            <tr>
                                <td>
                                    <form action="#">
                                        <label>
                                            <input type="checkbox" />
                                            <span>Diariamente.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>1 a 6 vezes por semana.</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Eventualemte ou raramente (menos de 4 vezes ao mês).</span>
                                        </label>
                                        <br>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Não consumo.</span>
                                        </label>
                                        <br>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <FONT> 18-Você costuma ler a informação nutricional que está presente no rótulo de alimentos industrializados antes de comprá-los?</FONT>
                            </tr>
                            <td>
                                <form action="#">

                                    <label>
                                        <input type="checkbox" />
                                        <span>Nunca.</span>
                                    </label>
                                    <br>

                                    <label>
                                        <input type="checkbox" />
                                        <span>Quase Nunca.</span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" />
                                        <span>Algumas vezes, para alguns produtos.</span>
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" />
                                        <span>Sempre ou quase sempre, para todos os produtos.</span>
                                    </label>
                                    <br>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <td>

                        </tbody>
                    </table>
                    </div>
                <div class="card-action">
                    <a href="#">Limpar</a>
                    <a onclick="M.toast({html: 'Preencha todos os campos!'})">Salvar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid -->
    <?php include '../view/util/script.php'; ?>

</body>

</html>