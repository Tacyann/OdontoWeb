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
                    <span class="card-title"><strong> Índice de Cárie</strong></span>
                    <p>Classes de Risco</p>
                    <br>
                    <!--Conteudo checkbox-->
                    <table>
                        <thead>
                            <tr>
                                <th>Gravidade</th>
                                <td>Pequena &#128522;</td>
                                <td>Média &#128528;</td>
                                <td>Grande &#128532;</td>
                            </tr>
                        </thead>

                        <tbody>
                            <form action="#">
                                <tr>
                                    <td>1.Comer (ex:Refeição, Sorvete)</td>
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
                                    <td>2.Falar claramente</td>
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
                                    <td>3.Limpar a boca(ex:escovar os dentes e bochecar)</td>
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
                                    <td>4.Dormir</td>

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
                                    <td>5.Mantero seu estado emocional(humor) sem se irritar ou estressar</td>

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
                                    <td>6.Sorrir, rir e mostrar os dentes sem sentir vergonha</td>
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
                                    <td>7.Fazer as tarefas da escola(ex:ir a escola,aprender em sala de aula, fazer o
                                        dever de casa)</td>
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
                                    <td>8.Ter contato com as pessoas(ex:sair com amigos, ir à casa de um amigo)</td>

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