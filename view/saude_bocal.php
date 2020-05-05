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
                    <span class="card-title"><strong> Índice de Risco em Saúde Bocal</strong></span>
                    <p>Classes de Risco</p>
                    <br>
                    <!--Conteudo checkbox-->
                    <table>
                        <thead>
                            <tr>
                                <th>Gravidade</th>


                               
                                <td>Baixo</td>
                                <td>Moderado</td>
                                <td>Alto</td>
                            </tr>
                        </thead>

                        <tbody>
                            <form action="#">
                                <tr>
                                    <td>1.Ausência de lesão de cárie, sem placa, sem gengivite e/ou sem mancha branca ativa</td>
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
                                    <td>2.História de dente restaurado, sem placa, sem gengivite e/ou sem mancha branca ativa</td>
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
                                    <td>3.Uma ou mais cavidades em situação de lesão de cárie crônica, mas sem placa, sem gengivite e/ou sem mancha branca ativa</td>
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
                                    <td>4.Ausência de lesão de cárie ou presença de dente restaurado, mas com placa, gengivite e/ou mancha branca ativa</td>

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
                                    <td>5.Uma ou mais cavidades em situação de lesão de cárie aguda</td>

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
                                    <td>6.Presença de dor referida e/ou abcesso</td>
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
    <?php include '../view/util/footer.php'; ?>
    <?php include '../view/util/script.php'; ?>

</body>

</html>