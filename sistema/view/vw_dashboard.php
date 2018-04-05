<?php
    //VARIÁVEIS PARA A PÁGINA
    $title = 'Dashboard';
    $page_css = 'dashboard.css';
    $bootstrap_version = "4.0";

?>      
        <?php require_once('vw_menu.php') ?>
        <div class="container col-sm-4">
            
            <div class="container-enviar-enunciado">
                <h1>Desafio da Semana</h1>
                <p id="desafio_enunciado">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vestibulum porta libero hendrerit pellentesque. Quisque non accumsan enim. Suspendisse eleifend sapien ac libero facilisis, sed interdum erat pretium. Proin tincidunt neque eu tellus viverra, non ultrices lectus iaculis. Maecenas pulvinar dui lacus, a condimentum nisi posuere ac. Vestibulum vehicula ut lorem in semper. Proin non hendrerit quam. Vestibulum mattis, quam a aliquam eleifend, eros dui varius enim, fringilla dignissim neque turpis in lorem.
                </p>

                    <form method="post" action="#">
                        <!--CONTROLFILE PERSONALIZADO-->
                        <div type="button" class="btn btn-primary btn-block" id="btn-custom-file">Selecionar arquivo...</div>
                        <input type="file" id="file">
                        <small id="nome_arquivo">nome do arquivo..</small>
                        <!--ENCERRA-SE CONTROLFILE PERSONALIZADO-->
                        
                        <button type="submit" class="btn btn-primary btn-block">Enviar Resposta</button>
                    </form>
            </div>
            
        </div>
        
        <script>
            //CUIDA DO CUSTOMFILE
            var btnCustomFile = document.getElementById("btn-custom-file");
            var inputFile = document.getElementById("file");
            var smallName = document.getElementById("nome_arquivo");

            btnCustomFile.addEventListener("click", function(){
                inputFile.click();
            });
            inputFile.addEventListener("change", function(){
                var nome = "Não há arquivo selecionado. Selecionar arquivo...";
                if(inputFile.files.length > 0) nome = inputFile.files[0].name;
                smallName.textContent = nome;
            });
            //ENCERRA-SE JS PARA CUSTOMFILE
                       
        </script>
    </body>
</html>