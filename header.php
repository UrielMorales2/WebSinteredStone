

 <!--=============== REMIXICONS ===============-->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/styles.css">
   <!--=============== HEADER ===============-->
   <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="index.php" class="nav__logo">
               <!-- <i class="ri-planet-line"></i> Company -->
                  <img src="img/logo_home_ssm.svg" class="logo_pequeño" alt="">
               </a>
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line nav__burger"></i>
               <i class="ri-close-line nav__close"></i>
            </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="index.php" class="nav__link">HOME</a></li>

                  <!-- <li><a href="#" class="nav__link">¿QUÉ ES?</a></li> -->

                  <!--=============== DROPDOWN 1 ===============-->
                  <!-- <li class="dropdown__item">
                     <div class="nav__link">
                        Analytics <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Overview
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Transactions
                           </a>
                        </li> -->

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <!-- <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Refunds
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li> -->
                  
                  <li><a href="catalogo.php" class="nav__link">CATÁLOGO</a></li>

                  <!--=============== DROPDOWN 2 ===============-->
                  <!-- <li class="dropdown__item">
                     <div class="nav__link">
                        Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Profiles
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-lock-line"></i> Accounts
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Messages
                           </a>
                        </li>
                     </ul>
                  </li> -->

                  <li><a href="ventajas.php" class="nav__link">VENTAJAS</a></li>

                  <li><a href="proyectos.php" class="nav__link">PROYECTOS</a></li>
                  
                  <li><a href="contacto.php" class="nav__link">CONTACTO</a></li>

                  <li><a href="fqa.php" class="nav__link">FAQ</a></li>
               </ul>
            </div>
         </nav>
      </header>
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

      <style>
        .logo_pequeño{
            width: 20%;
        }


        @media screen and (min-width: 1120px)
         
        {
            header{
                display: none;
            } 
         }

      </style>