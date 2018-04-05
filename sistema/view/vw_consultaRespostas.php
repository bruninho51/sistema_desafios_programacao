<?php
    //VARIÁVEIS PARA A PÁGINA
    $title = 'Consultar Respostas';
    $page_css = 'consultaRespostas.css';
    $active_page = 'link_res_desafios_anteriores';

?>
        <?php require_once('vw_menu.php') ?>
		<section class="container">
			<div class="row">
				<form name="FormularioSearch" method="POST" action="" class="form-group">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-1">
                            <input type="text" placeholder="Search" class="form-control"/>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <input type="submit"  class="form-control btn-primary"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <table class="table">
                                <tr>
                                    <th>Desafio</th>
                                    <th>Programador</th>
                                    <th>Arquivos</th>
                                </tr>
                                <tr>
                                    <td>teste</td>
                                    <td>teste</td>
                                    <td>teste</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>
			</div>
		</section>
	</body>
</html>