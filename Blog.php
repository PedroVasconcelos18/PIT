<?php include "header.php";?>
<?php include "nav.php";?>
<body>

<div class="container">
	<br/>
<p>Algumas ofertas de trabalho:</p>
<table class="col-sm-2" id="table1" align="center">
	
            <thead>
            <tr>
                <th>#</th>
                <th>Vaga</th>
                <th>ID</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Auxiliar de caixa</td>
                <td>1350</td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>2</td>
                <td>Baba</td>
                <td>298</td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>3</td>
                <td>Chef de cozinha</td>
                <td>235</td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td>4</td>
                <td>Segurança</td>
                <td>1254</td>
            </tr>
            </tbody>
</table>

<div class="col-sm-8">
            <div id="section1">
                <h1>Texto 1</h1>

                <br><br>
                <p>Lorem Ipsum</p>
            </div>
            <br/>
            <button class="btn btn-default">Curtir</button>
            <button class="btn btn-success">Comentar</button>
            <br/>
            <br/>
            <div id="section2">
                <h1>Texto 2</h1>
                
                <br><br>
                <p>Lorem Ipsum</p>
            </div>
            <br/>
            <button class="btn btn-default">Curtir</button>
            <button class="btn btn-success">Comentar</button>
            <br/>
            <br/>
            <div id="section3">
                <h1>Texto 3</h1>
                
                <br><br>
                <p>Lorem Ipsum</p>
            </div>
            <br/>
            <button class="btn btn-default">Curtir</button>
            <button class="btn btn-success">Comentar</button>
            <br/>
            <br/>
            <div id="section4">
                <h1>Texto 4</h1>
                
                <br><br>
                <p>Lorem Ipsum</p>
            </div>
            <br/>
            <button class="btn btn-default">Curtir</button>
            <button class="btn btn-success">Comentar</button>
            <br/>
            <br/>
            <div id="section41">
                <h1>Texto 4-1</h1>
                
                <br><br>
                <p>Lorem Ipsum</p>
            </div>
            <br/>
            <button class="btn btn-default">Curtir</button>
            <button class="btn btn-success">Comentar</button>
            <br/>
        </div>
    
    
    <div class="col-sm-2">
    <?php if (isset($_SESSION['usuario'])){ ?>}
                  
         <?php } else { ?>
            <button class="btn btn-success">Nova postagem</button>
            <br><br>
            <button class="btn btn-default">Editar postagem</button>
            <br><br>
            <button class="btn btn-danger">Excluir postagem</button>
                <?php } ?>

</div>
</div>
</body>
<br/><br/>
</html>


<style>
    body {
        position: relative;
    }
    div.col-sm-8 div {
        height: 215px;
        width: 740px;
        font-size: 28px;
        border-radius: 8px;
    }
    #section1 {color: #fff; background-color: black; border: 2px black; padding: 8px;}
    #section2 {color: #fff; background-color: black; border: 2px black; padding: 8px;}
    #section3 {color: #fff; background-color: black; border: 2px black; padding: 8px;}
    #section4 {color: #fff; background-color: black; border: 2px black; padding: 8px;}
    #section41 {color: #fff; background-color: black; border: 2px black; padding: 8px;}

    @media screen and (max-width: 740px) {
        #section1, #section2, #section3, #section4, #section41  {
            margin-left: 150px;
        }
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>




