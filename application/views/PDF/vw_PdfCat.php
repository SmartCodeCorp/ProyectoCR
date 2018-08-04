<html>
  <head>
      <link rel="stylesheet" type="text/css" href="./assets/css/dompdf.css">
  </head>

<body>

  <header>
      <table>
          <tr>
              <td id="header_logo">
                  <img id="logo" src="./././FrontEnd/Template/img/logoR.png" width="15%">

                  <br>
              </td>
              <td id="header_texto"><br><br><br><br><br>
                  <div><h1>Casa Rocha</h1></div>
                  <div>  Centro, Libramiento Sur N.2 CP 61250
                         Maravatio, Michoacan.</div>
                  <div>  . </div>
                  <div>"Agua solar" Sin electricidad, sin gas, sin carbón y lo mejor SIN GASTO!!.</div>
                   <br>
                  <br>
              </td>


          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Lista de categorias</div> <br>
      <br>
  </footer>

  <table border="1" id="table_info">
       <thead>
           <tr>
               <th>Id categorías</th>
               <th>Titulo</th>
               <th>Descripción</th>


           </tr>
       </thead>
       <tbody>
          <?php foreach ($categorias as $categ) { ?>
            <tr>
                <td><?php echo $categ->id_categoria;?></td>
                <td><?php echo $categ->titulo_categoria;?></td>
                <td><?php echo $categ->descripcion_categoria;?></td>

            </tr>
          <?php  }?>
       </tbody>
</table>



</body>
</html>
