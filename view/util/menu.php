 <!--NAVBAR-->
 <nav class="teal darken-3">
     <div class="nav-wrapper">
         
         <a href="../view/dashboard.php" class="brand-logo"><i class="material-icons"></i>OdontoWeb</a>

         <!-- Ícone para abrir no Mobile -->
         <a href="#" data-target="mobile-navbar" class="sidenav-trigger">
             <i class="material-icons">menu</i>
         </a>

         <ul id="navbar-items" class="right hide-on-med-and-down">
             <li><a href="../view/dashboard.php">Início</a></li>
             <li><a href="#">Sobre</a></li>
             <li>
                 <a class="dropdown-trigger" data-target="dropdown-menu" href="#">
                     Questionários <i class="material-icons right">arrow_drop_down</i>
                 </a>
             </li>
         </ul>

         <!-- Dropdown -->
         <ul id="dropdown-menu" class="dropdown-content">
             <li><a href="../view/indice_carie.php">Índice de carie</a></li>
             <li><a href="../view/saude_bocal.php">Índice risco saúde bucal</a></li>
             <li><a href="../view/sociodemografico.php">Sociodemográfico</a></li>
             <li><a href="#">Guia Alimentar</a></li>
             <li><a href="#">Inventario alimentar</a></li>
         </ul>
         <!-- Dropdown -->
     </div>
 </nav>
 <!-- Menu Mobile -->
 <ul id="mobile-navbar" class="sidenav">
     <li><a href="#">Início</a></li>
     <li><a href="../view/indice_carie.php">Índice de carie</a></li>
     <li><a href="../view/saude_bocal.php">Índice risco saúde bucal</a></li>
     <li><a href="../view/sociodemografico.php">Sociodemográfico</a></li>
     <li><a href="#">Guia Alimentar</a></li>
     <li><a href="#">Inventario alimentar</a></li>
 </ul>
 <!-- Menu Mobile -->