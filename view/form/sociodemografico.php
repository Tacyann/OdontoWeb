<!DOCTYPE html>
<html>

   <body class="hold-transition skin-blue sidebar-mini fixed">
   <div class="load"> <i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> </div>
      <?php include '../../view/util/menu.php'; ?>
      <div class="content-wrapper" id="sec">
         <section class="content" id="content">
         <div class="row">
            <section class="col-md-12 ">
               <div class="tab-pane active" id="dados_basicos">
                  <div class="panel panel-default border-form" style="margin-bottom: 43px;">
                     <div class="panel-body">
                        <h4><strong>QUESTIONÁRIO SOCIODEMOGRÁFICO:</strong></h4>
                        <br>
                        <div class="row form-group">
                           <div class="col-md-3">
                              <label>Número da inscrição</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                 </div>
                                 <input type="number" class="form-control" placeholder="01" />
                              </div>
                           </div>
                           <div class="col-md-3">
                              <label>Data da coleta dos dados</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                 </div>
                                 <input type="date" class="form-control"  />
                              </div>
                           </div>
                           <div class="col-md-3">
                              <label>Série</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                 </div>
                                 <input type="text" class="form-control" placeholder="8º ano"/>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <label>Idade</label>
                              <div class="input-group">
                                 <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                 </div>
                                 <input type="text" class="form-control" placeholder="10 anos"/>
                              </div>
                           </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-xs-3">
                              <div class="form-group">
                                 <label>Sexo</label>
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-venus-mars"></i></div>
                                    <select id="sexo" name="sexo" class="form-control">
                                       <option value="">Selecione o sexo</option>
                                       <option value="M">Masculino</option>
                                       <option value="F">Feminino</option>
                                       <option value="N">Não declarado</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-3">
                              <div class="form-group">
                                 <label>Estado Civil</label>
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <select id="estado_civil" name="estado_civil" class="form-control">
                                       <option value="">Selecione o estado civil</option>
                                       <option value="S">Solteiro(a)</option>
                                       <option value="C">Casado(a)</option>
                                       <option value="D">Divorciado(a)</option>
                                       <option value="V">Viúvo (a)</option>
                                       <option value="O">Outros</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-3">
                              <div class="form-group">
                                 <label>Etnia/Raça</label>
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <select id="estado_civil" name="estado_civil" class="form-control">
                                       <option value="">Selecione a etnia/raça</option>
                                       <option value="BR">Branco</option>
                                       <option value="PD">Pardo</option>
                                       <option value="NG">Negro</option>
                                       <option value="IN">Indígena</option>
                                       <option value="ND">Não Declarado</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-3">
                              <div class="form-group">
                                 <label>Qual o grau de escolaridade do responsavel </label>
                                 <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                    <select id="estado_civil" name="estado_civil" class="form-control">
                                       <option value="">Selecione o grau</option>
                                       <option value="AF">Alfabeto</option>
                                       <option value="FD">Fundamental</option>
                                       <option value="IN">Incompleto</option>
                                       <option value="FC">Fundamental completo</option>
                                       <option value="FI">Fundamental incompleto</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th>
                                       <h3>SCORE -APEB</h3>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Itens de Conforto</td>
                                    <td>Não Possui</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4+</td>
                                 </tr>
                                 <tr>
                                    <td>Quantidade de automóveis de passeio exclusivamente para uso particular
                                    </td>
                                    <td>
                                       <label class="form-check-label" for="check1">
                                       <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                                       </label>
                        </div>
                        </td>
                        <td>
                        <label class="form-check-label" for="check1">
                        <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                        </label>
                     </div>
                     </td>
                     <td>
                     <label class="form-check-label" for="check1">
                     <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                     </label>
                  </div>
                  </td>
                  <td>
                  <label class="form-check-label" for="check1">
                  <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
                  </label>
               </div>
               </td>
               <td>
               <label class="form-check-label" for="check1">
               <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
               </label>
         </div>
         </td>
         </tr>
         <tr>
         <td>Quantidade de empregados mensalistas, considerando apenas os que trabalham pelo menos cinco dias por semana</td>
         <td>
         <label class="form-check-label" for="check1">
         <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
         </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de máquinas de lavar roupa, excluindo tanquinho</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de Banheiros</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>DVD, incluindo qualquer dispositivo que leia DVD e desconsiderando DVD de automóvel</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de geladeiras</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de freezers independentes ou parte da geladeira duplex</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de microcomputadores, considerando computadores de mesa, laptops, notebooks e desconsideranto tablets, palms ou smartphones</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de lavadora de louças</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de fornos de mocro-ondas</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de motocicletas, desconsiderando as usadas exclusivamente para uso profissional</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de máquinas secadoras de roupas, considerando lava seca</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      </tr>
      <tr>
      <td>Quantidade de aparelhos celulares</td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
      </td>
      <td>
      <label class="form-check-label" for="check1">
      <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something">
      </label>
      </div>
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