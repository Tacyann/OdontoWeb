<!DOCTYPE html>
<html>
<?php include '../view/util/head.php'; ?>

<body>
    <?php include '../view/util/menu.php'; ?>

    <!-- Grid -->
    <div class="row ">
        <div class="col s12 m12">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title"><strong> Sociodemográfico</strong></span>
                    <p>Informações Iniciais</p>
                    <br>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">format_list_numbered</i>
                                    <input id="icon_prefix" type="text" class="validate">
                                    <label for="icon_prefix">Número da inscrição</label>
                                </div>
                                <div class="input-field col s4">
                                    <i class="material-icons prefix">date_range</i>
                                    <input type="text" class="datepicker validate">

                                    <label for="icon_telephone">Data da coleta dos dados</label>
                                </div>
                                <div class="input-field col s2">
                                    <i class="material-icons prefix">school</i>
                                    <input id="icon_prefix" type="number" class="validate">
                                    <label for="icon_prefix">Série</label>
                                </div>
                                <div class="input-field col s2">
                                    <i class="material-icons prefix">person</i>
                                    <input id="icon_prefix" type="number" class="validate">
                                    <label for="icon_prefix">Idade</label>
                                </div>

                                <div class="input-field col s3">
                                    <select>
                                        <option value="" disabled selected>Selecione uma opção</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                        <option value="3">Outros</option>
                                    </select>
                                    <label>Sexo</label>
                                </div>
                                <div class="input-field col s3">
                                    <select>
                                        <option value="" disabled selected>Selecione uma opção</option>
                                        <option value="S">Solteiro(a)</option>
                                        <option value="C">Casado(a)</option>
                                        <option value="D">Divorciado(a)</option>
                                        <option value="V">Viúvo (a)</option>
                                        <option value="O">Outros</option>
                                    </select>
                                    <label>Estado Civil</label>
                                </div>
                                <div class="input-field col s3">
                                    <select>
                                        <option value="" disabled selected>Selecione uma opção</option>
                                        <option value="BR">Branco</option>
                                        <option value="PD">Pardo</option>
                                        <option value="NG">Negro</option>
                                        <option value="IN">Indígena</option>
                                        <option value="ND">Não Declarado</option>
                                    </select>
                                    <label>Etinia/Raça</label>
                                </div>
                                <div class="input-field col s3">
                                    <select>
                                        <option value="" disabled selected>Selecione uma opção</option>
                                        <option value="AF">Alfabeto</option>
                                        <option value="FD">Fundamental</option>
                                        <option value="IN">Incompleto</option>
                                        <option value="FC">Fundamental completo</option>
                                        <option value="FI">Fundamental incompleto</option>
                                    </select>
                                    <label>Grau de Escolaridade do Responsável</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--Conteudo checkbox-->
                    <table>
                        <thead>
                            <tr>
                                <th>SCORE -APEB</th>
                                <td>Não Possui</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4+</td>
                            </tr>
                        </thead>

                        <tbody>
                            <form action="#">
                                <tr>
                                    <td>1. Itens de Conforto</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. Quantidade de automóveis de passeio exclusivamente para uso particular</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. Quantidade de empregados mensalistas, considerando apenas os que trabalham
                                        pelo menos cinco dias por semana</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4. Quantidade de máquinas de lavar roupa, excluindo tanquinho</td>

                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5. Quantidade de Banheiros</td>

                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6. DVD, incluindo qualquer dispositivo que leia DVD e desconsiderando DVD de
                                        automóvel</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>7. Quantidade de geladeiras</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>8. Quantidade de freezers independentes ou parte da geladeira duplex</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>9. Quantidade de microcomputadores, considerando computadores de mesa, laptops,
                                        notebooks e desconsideranto tablets, palms ou smartphones</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>10. Quantidade de lavadora de louças</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>11. Quantidade de fornos de mocro-ondas</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>12. Quantidade de motocicletas, desconsiderando as usadas exclusivamente para
                                        uso profissional</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>13. Quantidade de máquinas secadoras de roupas, considerando lava seca</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>14. Quantidade de aparelhos celulares</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            <input type="checkbox" />
                                            <span></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>

                                </tr>
                            </form>
                        </tbody>
                    </table>
                    <!--Conteudo checkbox-->
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