
    <footer class="main-footer ">
        <div class="container container--flex">
            
            <div class="column column--33">
                <img src="img/logo_footer_ssm.svg" alt="" class="imgFooter">
                <!-- <p class="column__txt" ><i class="fa-solid fa-location-dot"></i> ©2024 | SINTERED STONE®  SA de CV</p>  -->
                <p class="column__txt"><a href="" class="linkFooter">Aviso Legal</a> </p> 
                <p class="column__txt"><a href="" class="linkFooter">Política de Privacidad </a> </p> 
                <p class="column__txt"><a href="" class="linkFooter">Canal de Denuncias </a> </p> 
                <div class="social-icon">
                    <a href="https://www.facebook.com/profile.php?id=61550252834135" target="_blank" class="social-icon__link facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#" target="_blank" class="social-icon__link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="" class="social-icon__link"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <div class="column column--33 ocul">
                <h2 class="column__title">SECCIONES</h2>
                <p class="column__txt"><a href="" class="linkFooter">Inicio</a></p> 
                <p class="column__txt"><a href="" class="linkFooter">Catálogo</a></p> 
                <p class="column__txt"><a href="" class="linkFooter">Ventajas</a></p> 
                <p class="column__txt"><a href="" class="linkFooter">Proyectos</a></p> 
                <p class="column__txt"><a href="" class="linkFooter">Contacto</a></p> 
                <p class="column__txt"><a href="" class="linkFooter">FAQ</a></p> 
            </div>

            <div class="column1 column--33 ocul1">
                <h2 class="column__title1">CONTACTANOS</h2>
                <div class="column__content1">
                    <p class="column__txt1"><i class="fa-sharp fa-regular fa-envelope"></i> : comercial@sinteredstone.com.mx <br>
                        <i class="fa-solid fa-phone"></i> : (+52) 222 566 5923 <br>
                        <i class="fa-solid fa-phone"></i> : (+52) 951 109 8256 </p>
                    <p class="column__txt1"><i class="fa-solid fa-location-dot"></i> Puebla
                    <br>Carretera Tepeaca a Tecali, Kilometro 4.5, San Luis
                    Ajajalpan, Pue.</p>
                    <p class="column__txt1"><i class="fa-solid fa-location-dot"></i> Oaxaca <br>
                        Av. Símbolos Patrios 1319, Colonia Candiani, 71233
                        Oaxaca de Juárez, Oax.</p>
                    <p class="column__txt1"><i class="fa-solid fa-location-dot"></i> Monterey <br>
                        Monte de Los Olivos 314, Monte de los Olivos
                        Industrial, 66350 Santa Catarina, N.L..</p>
                    <p class="column__txt1"><i class="fa-solid fa-location-dot"></i> Guadalajara <br>
                        Sabino 1550, Paraísos del Colli, 45069 Zapopan, Jal. </p>
                    <p class="column__txt1"><i class="fa-solid fa-location-dot"></i> Cancún <br>
                        Blvd. Luis Donaldo Colosio Mz 3-Lote 4, 77533
                        Cancún, Q.R. </p>
                </div>
            </div>
        </div>
        <p class="copy">©2024 | SINTERED STONE®  SA de CV</p>
        
    
    </footer>

    <style>
        .container--flex{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}

.main-footer{
    background: #551C50;
    color: white;
    font-family: 'Montserrat', sans-serif;
    padding: 10px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: .8em;
    border: 1px solid green;
    }

    .imgFooter{
        margin: 0 auto;
        width: 20%;
        /* border: 2px solid teal; */
    }    
    .column--33{
        width: 33%;
    } 
    /* .ocul{
        width: 30%;
    } 
    .ocul1{
        width: 50%;
    } */
    .social-icon{
        display: flex;
        justify-content: center; /* Centra los íconos horizontalmente */
        align-items: center; 
    } 
.facebook, .social-icon__link{
    text-decoration: none; 
    margin: 7px;
}
    .fa-facebook, .fa-instagram, .fa-tiktok{
        color: #551C50;
        text-decoration: none;
        
        background: #FFF;
        padding: 20px;
        border-radius: 50%;
        font-size: 1.6em;
        height: 9px;
        width: 9px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
.column, .social-icon{
    text-align: center;
    /* border: 3px solid yellow; */
    
}
.linkFooter{
    color: #FFF;
    text-decoration: none;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.3em;
}
.copy{
    text-align: center;
    margin: auto;
    margin-top: 15px;
    }

    .column1 {
        /* border: 3px solid yellow; */
        display: flex;
        flex-direction: column;
    }
    
    .column__content1 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .column__title1 {
        text-align: center;
        margin-bottom: 5px;
    }
    
    .column__txt1 {
        font-family: 'Montserrat', sans-serif;

        font-size: 1.2em;
        /* border: 3px solid orange; */
        width: 48%; /* Para que los elementos se dividan en dos columnas */
    }
    .column__txt1 i{
        margin: 10px auto;
        /* border:2px solid #FFF; */
    } 

    @media screen and (max-width: 1500px) and (min-width: 600px) { 
        .column__txt1{
            font-size: 0.9em;
        }
    }
    </style>
