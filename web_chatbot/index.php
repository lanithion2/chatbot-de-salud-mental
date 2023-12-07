
<!DOCTYPE html>
<html lang="es">
<head>

     <title>EmpathyEcho Asistente de Salud Mental</title>

     


<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/styles.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
     
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
          <?php
                    include("conexion_bd.php");
                    include("controlador_registro.php");
                    ?>
               <span class="spinner-rotate"></span>
               
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">
               
                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenido a EmpathyEcho tu Asistente de salud mental</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 992 975 826</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 9:00 PM (Lunes-Viernes)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">gruponoa0@gmail.com </a></span>
                    </div>

               </div>
          </div>

     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-brand"><i class="fa fa-e-square"></i><img src="" class="img-responsive" alt="">EmpathyEcho</a>
               </div>

             




                    <ul class="nav navbar-nav navbar-right">
                    <li class="login-btn"><a href="#" onclick="location='login.php'" >Iniciar Sesion</a></li>
                    <!--<li class="chatbot-btn"><a href="#" onclick="location='index1.php'" >Chatbot</a></li>-->

                    
                    
                    <!-- comentario 
                    <input type="button" onclick="location='index1.php'" />
                    -->


                         <li><a href="#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="#about" class="smoothScroll">Sobre Nosotros</a></li>
                         <li><a href="#team" class="smoothScroll">Psicologos</a></li>
                         <li><a href="#news" class="smoothScroll">Noticias</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contacto</a></li>
                         <li class="appointment-btn"><a href="#appointment">Registrarse</a></li>
                         
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Hagamos tu vida más feliz</h3>
                                             <h1>Vida saludable</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Conozca a nuestros Profesionales</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Confia y cree en ti</h3>
                                             <h1>Un nuevo estilo de vida</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Sobre nosotros</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Liberate de todo lo que te atormenta</h3>
                                             <h1>Tendra buenos beneficios para su salud</h1>
                                             <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Leer historias</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about"> 
          <div class="container">
               <div class="row">
                    
                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bienvenido a <i class="fa fa-E-square"></i>EmpathyEcho</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Bienvenido a tu asistente de salud emocional aqui encontraras todo lo que necesitas para poder estar mejor</p>
                                   <p>si te sientes afligido, con ansiedad o preocupado aqui tenemos las soluciones para que te encuentres mejor</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/dueño.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Juan Pérez</h3>
                                        <p>Dueño de la consultoria</p>
                                   </figcaption>
                              </figure>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/socia.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dra. María Rodríguez</h3>
                                        <p>Socia principal de la consultoria</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Personal de Trabajo</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/psicologa.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Maria Paula Saman Montoya</h3>
                                        <p>Psicologa</p>
                                        <div class="team-contact-info">
                                             <p><i class="fa fa-phone"></i> 978 524 685</p>
                                             <p><i class="fa fa-envelope-o"></i> <a href="#">mariaPaSa@gmail.com</a></p>
                                        </div>
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/equipo.jpg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Equipo de Trabajo</h3>
                                        
                                        <ul class="social-icon">
                                             <li><a href="#" class="fa fa-facebook-square"></a></li>
                                             <li><a href="#" class="fa fa-envelope-o"></a></li>
                                             <li><a href="#" class="fa fa-flickr"></a></li>
                                        </ul>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Noticias</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Agosto 08, 2023</span>
                                   <h3><a href="news-detail.html">Acerca del Asistente Virtual</a></h3>
                                   <p>Es un asistente automatizado que te permitira conversar con el para 
                                        que te puedas sentir mejor si no estas preparado para conversar con un profesional</p>
                                   <div class="author">
                                        <img src="images/dueño.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Dr. Juan Pérez</h5>
                                             <p>CEO / Fundador</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/noticias.jpeg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Octubre 20, 2023</span>
                                   <h3><a href="news-detail.html">Introduccion a la salud mental en la actualidad</a></h3>
                                   <p>El chabot de salud mental es primordial ya que sirve como un tratamiento leve para personas con ansiedad u otros transtornos</p>
                                   <div class="author">
                                        <img src="images/socia.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Dra. María Rodríguez</h5>
                                             <p>Directora General</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/ansiedad.jpeg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>Setiembre 27, 2023</span>
                                   <h3><a href="news-detail.html">Salud emocional en el trabajo</a></h3>
                                   <p>Es importante la salud mental en el centro de labores ya que esto permite alcanzar los objetivos dentro del trabajo y cumplir con todo rficazmente</p>
                                   <div class="author">
                                        <img src="images/psicologa.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Maria Paula Saman Montoya</h5>
                                             <p>Psicologa</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>
                  
                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Registrarse</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nombres</label>
                                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="apellido">Apellidos</label>
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="usuario">Usuario</label>
                                        <input type="text" class="form-control" id="usuario" name="usuario" class="form-control" placeholder="Usuario">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="clave">Clave</label>
                                        <input type="password" class="form-control" id="clave" name="clave" class="form-control" placeholder="Contraseña">
                                   </div>
                                   <!--<div class="col-md-6 col-sm-6">
                                        <label for="select">Seleccionar Departamento</label>
                                        <select class="form-control">
                                             <option>Psiquiatria</option>
                                             <option>Psicologia</option>
                                             <option>Enfermeria</option>
                                        </select>
                                   !</div>
-->

                                   <div class="col-md-12 col-sm-12">
                                      <!--  <label for="telephone">Numero de telefono</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                        <label for="Message">Informacion adicional</label>
                                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
-->
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Registrarse</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>
     

     <!-- GOOGLE MAP -->
     <section id="google-map">
     <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>           


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Tecnologiia para salud mental</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Nuevos procesos de tratamiento</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horas de atencion</h4>
                                   <p>Lunes - Viernes <span>08:00 AM - 09:00 PM</span></p>
                                   <p>Sabados <span>08:00 AM - 09:00 PM</span></p>
                                   <p>Domingo <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2018 Your Company 
                                   
                                   | Design: Tooplate</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>