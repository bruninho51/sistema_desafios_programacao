<?php
    //VARIÁVEIS PARA A PÁGINA
    $title = 'Adicionar Desafio';
    $page_css = 'addDesafio.css';
    $active_page = 'link_cadastrar_desafio';

?>
        <?php require_once('vw_menu.php') ?>
		<div class="container">
			<section>
				<form action="" method="POST" name="FormAddDesafio" class="form-group">
                    <div class="row">
                        <div class="col-md-1">
                            <label for="EnunciadoTxt" name="EnunciadoLbl">Enunciado:</label>
                        </div>
                        <div class="col-md-10 col-md-offset-1">
                            <textarea name="EnunciadoTxt" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <label for="DificuldadeSelect" name="DificuldadeLbl">Dificuldade:</label>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <select name="DificuldadeSelect" class="form-control">
                                <option>Fácil</option>
                                <option>Médio</option>
                                <option>Difícil</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <input type="submit" name="btnEnviar" class="form-control btn-primary" />
                        </div>
                    </div>
                </form>
			</section>
		</div>
	</body>
</html>