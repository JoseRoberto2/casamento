<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TESTE ENVIAR LOCAL</title>
        <script type="text/javascript">
            
            var cont;
            
            function cliqueCasa(elemento) {
                if(cont == null){
                    cont=elemento;
                }
                else{
                    document.getElementById(cont).style='background-color: green;';
                    cont=elemento;
                }
                document.getElementById('op1').value= elemento;
                //document.getElementById('linha').style='background-color: green;'
                document.getElementById(elemento).style='background-color: red;'
            }
        </script>
        
        <style>
            #tabuleiro{

                border: none;
                background: #ebebe0;
                border-spacing: 5px;
                border-collapse: separate;
            }

            .linha{
                background: #c2c2a3;
                text-align: center;  
            }

            .coluna{
                text-align: center;
                font-size: 80px;
                width: 100px;
                height: 100px;
                background-color: green;
            }

            .titulo{
                text-align: center;
                font-size: 50px;
                color: blue;
            }

            .mensagem{
                text-align: center;
                font-size: 25px;
                color: blue;
            }

            .msgvencedor{
                text-align: center;
                font-size: 40px;
                color: green;
            }

            .aviso{
                text-align: center;
                font-size: 20px;
                color: blue;
            }
        </style>
        
    </head>
    <body>
        <?php
        echo "testephp";
        ?>
        <div align="center">	
            <table id="tabuleiro">
                <tr class="linha">
                    <td >
                        <div class="coluna" id="cel0"  onclick="cliqueCasa('cel0')"  onmouseover="mouse('cel0')" onmouseout=""></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel1" onclick="cliqueCasa('cel1')"></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel2" onclick="cliqueCasa('cel2')"></div>
                    </td>
                </tr>
                <tr class="linha" id="linha">
                    <td>
                        <div class="coluna" id="cel3" onclick="cliqueCasa('cel3')"></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel4" onclick="cliqueCasa('cel4')"></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel5" onclick="cliqueCasa('cel5')"></div>
                    </td>
                </tr>
                <tr class="linha" id="linha">
                    <td>
                        <div class="coluna" id="cel6" onclick="cliqueCasa('cel6')"></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel7" onclick="cliqueCasa('cel7')"></div>
                    </td>
                    <td>
                        <div class="coluna" id="cel8" onclick="cliqueCasa('cel8')"></div>
                    </td>
                </tr>
            </table>
        </div>
        <div>
            <form action="index2.php" method="POST">
                <input type=hidden id="op1" name="op1"  />
                <input type="submit" name="ENVIAR"/>
                       
            </form>
            
            <?php
            if(isset($_POST['op1']))
                echo $_POST['op1'];
            ?>
            
        </div>
    </body>
</html>
