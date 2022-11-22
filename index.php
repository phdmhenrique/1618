<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>1618</title>
  <link rel="icon" href="img/icons/icon_1618_c.ico">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>

<body>
  <!--Header-->
  <header id="header">
    <div class="header-logo">

      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 520.38 134.79" id="logo-a-size">
          <title>Asset 2</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Layer_7_copy" data-name="Layer 7 copy">
              <path class="cls-1"
                d="M294.15,38.15c-1.85-8.64-6.28-13.32-15.69-13.32-14.22,0-19.76,11.7-19.94,37.08,5.35-8.46,16.24-13.5,28.61-13.5,23.45,0,40.07,14.94,40.07,42.29,0,26.09-17,44.09-46,44.09-40.63,0-50.6-28.07-50.6-67.31C230.63,22.5,245,0,279.93,0c29,0,41.92,18.72,43.58,38.15Zm-33,52.19c0,11.52,6.83,18.36,18.83,18.36,10.71,0,17.54-6.66,17.54-17.82,0-11-6.09-18.18-17.91-18.18C269.59,72.7,261.1,78.46,261.1,90.34Z" />
              <path class="cls-1" d="M366.84,29.36H348.56V0h51.15V134.79H366.84Z" />
              <path class="cls-1" d="M178.08,29.36H159.8V0H211V134.79H178.08Z" />
              <path class="cls-1"
                d="M423.82,34.81C423.82,16.34,438.77,0,470.53,0s46.53,16.34,46.53,34.81c0,13.32-7.2,22.73-17.36,27.88,13.11,6,20.68,16.87,20.68,31.61,0,25.93-22.34,40.49-49.85,40.49s-49.85-14.56-49.85-40.49c0-14.74,7.57-25.75,20.49-31.61C430.83,57.36,423.82,48.48,423.82,34.81Zm27.32,58.07c0,9.77,7.2,17.05,19.39,17.05,12,0,19-7.46,19-17.05,0-10.66-7.76-17-19-17S451.14,81.87,451.14,92.88Zm35.27-53.46c0-9.76-6.46-15.27-15.88-15.27s-15.88,5.51-15.88,15.45c0,9.41,6.83,14.92,15.88,14.92S486.41,48.84,486.41,39.42Z" />
              <rect class="cls-1" x="201.11" y="57.55" width="19.68" height="19.68" rx="9.84" ry="9.84"
                transform="translate(278.35 -143.56) rotate(90)" />
              <path class="cls-1" d="M67.38,0A67.38,67.38,0,0,0,0,67.42v67.37H92.1a41.62,41.62,0,1,1,42.65-41.58V0Z" />
              <path class="cls-1"
                d="M131.53,109.29a15.91,15.91,0,0,0-28.59,9.6,15.94,15.94,0,0,0,6.31,12.68,41.18,41.18,0,0,1-7.06,2.25,41.65,41.65,0,0,1-8,1h40.51V93.21a41.83,41.83,0,0,1-1,9A41.16,41.16,0,0,1,131.53,109.29Z" />
              <path class="cls-1"
                d="M118.84,103a15.9,15.9,0,0,0-15.9,15.91,15.72,15.72,0,0,0,.88,5.2,67.55,67.55,0,0,0,20.24-20.23A15.8,15.8,0,0,0,118.84,103Z" />
            </g>
          </g>
        </svg>
      </a>

      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 520.38 134.79" id="logo-b-size">
          <title>Asset 4</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="Layer_4" data-name="Layer 4">
              <path class="cls-3"
                d="M294.15,38.15c-1.85-8.64-6.28-13.32-15.69-13.32-14.22,0-19.76,11.7-19.94,37.08,5.35-8.46,16.24-13.5,28.61-13.5,23.45,0,40.07,14.94,40.07,42.29,0,26.09-17,44.09-46,44.09-40.63,0-50.6-28.07-50.6-67.31C230.63,22.5,245,0,279.93,0c29,0,41.92,18.72,43.58,38.15Zm-33,52.19c0,11.52,6.83,18.36,18.83,18.36,10.71,0,17.54-6.66,17.54-17.82,0-11-6.09-18.18-17.91-18.18C269.59,72.7,261.1,78.46,261.1,90.34Z" />
              <path class="cls-3" d="M366.84,29.36H348.56V0h51.15V134.79H366.84Z" />
              <path class="cls-4" d="M178.08,29.36H159.8V0H211V134.79H178.08Z" />
              <path class="cls-3"
                d="M423.82,34.81C423.82,16.34,438.77,0,470.53,0s46.53,16.34,46.53,34.81c0,13.32-7.2,22.73-17.36,27.88,13.11,6,20.68,16.87,20.68,31.61,0,25.93-22.34,40.49-49.85,40.49s-49.85-14.56-49.85-40.49c0-14.74,7.57-25.75,20.49-31.61C430.83,57.36,423.82,48.48,423.82,34.81Zm27.32,58.07c0,9.77,7.2,17.05,19.39,17.05,12,0,19-7.46,19-17.05,0-10.66-7.76-17-19-17S451.14,81.87,451.14,92.88Zm35.27-53.46c0-9.76-6.46-15.27-15.88-15.27s-15.88,5.51-15.88,15.45c0,9.41,6.83,14.92,15.88,14.92S486.41,48.84,486.41,39.42Z" />
              <rect class="cls-3" x="201.11" y="57.55" width="19.68" height="19.68" rx="9.84" ry="9.84"
                transform="translate(278.35 -143.56) rotate(90)" />
              <g id="Layer_6" data-name="Layer 6">
                <path class="cls-4"
                  d="M67.38,0A67.38,67.38,0,0,0,0,67.42v67.37H92.1a41.62,41.62,0,1,1,42.65-41.58V0Z" />
                <path class="cls-4"
                  d="M131.53,109.29a15.91,15.91,0,0,0-28.59,9.6,15.94,15.94,0,0,0,6.31,12.68,41.18,41.18,0,0,1-7.06,2.25,41.65,41.65,0,0,1-8,1h40.51V93.21a41.83,41.83,0,0,1-1,9A41.16,41.16,0,0,1,131.53,109.29Z" />
                <path class="cls-3"
                  d="M118.84,103a15.9,15.9,0,0,0-15.9,15.91,15.72,15.72,0,0,0,.88,5.2,67.55,67.55,0,0,0,20.24-20.23A15.8,15.8,0,0,0,118.84,103Z" />
              </g>
            </g>
          </g>
        </svg>
      </a>

    </div>
    <ul>
      <li><a href="#home" onclick="toggle()">Home</a></li>
      <li><a href="#about" onclick="toggle()">Sobre</a></li>
      <li><a href="#services" onclick="toggle()">Serviços</a></li>
      <li><a href="#project" onclick="toggle()">Dandelion</a></li>
      <li><a href="#team" onclick="toggle()">Nosso Time</a></li>
      <li><a href="#contact" onclick="toggle()">Contato</a></li>
    </ul>
    <div class="toggle" onclick="toggle()"></div>
  </header>
  <!--Banner-->
  <section class="banner" id="home">
    <!-- <h2>Inspire se<br>Seja Incrível<br>Seja <span>1618</span></h2> -->
    <h2>SEJA <span></span></h2>
  </section>
  <!--About-->
  <section class="sec" id="about">
    <div class="content photo-about-content">
      <div class="mxw800p">
        <div class="content-title">
          <h3>Quem somos nós</h3>
          <div class="mark-quad"></div>
        </div>
      </div>
      <div class="about-container">
        <div class="about-container-l">
          <div class="photo-container">
            <div class="clip clip1"></div>
            <div class="clip clip2"></div>
            <div class="clip clip3"></div>
          </div>
        </div>
        <div class="about-container-r">
          <p>          
            <?php
                // MOSTRA TEXTO DA SEÇÃO "QUEM SOMOS NÓS" //  
                $query = mysqli_query($conexao,"SELECT * FROM quemSomos;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[1];
                }
            ?> 
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--Services-->
  <section class="sec" id="services">
    <div class="content">
      <div class="mxw800p">
        <div class="content-title">
          <h3>O que fazemos</h3>
          <div class="mark-quad"></div>
        </div>
        <p>
          <?php
            // MOSTRA TEXTO PRINCIPAL SEÇÃO "O QUE FAZEMOS" //  
            $query = mysqli_query($conexao,"SELECT * FROM oQueFazemos;");
            while($mostraQuery = mysqli_fetch_array($query)) {
              echo $mostraQuery[1];
            }
            ?> 
        </p>
      </div>
      <div class="services">
        <div class="box">
          <div class="iconBx">
            <img src="img/icons/icon1.png">
          </div>
          <div class="content">
            <h2>Design</h2>
            <p>
              <?php
                // MOSTRA TEXTO NA BOX 'DESIGN' //  
                $query = mysqli_query($conexao,"SELECT * FROM oQueFazemos;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[2];
               }
              ?> 
            </p>
          </div>
        </div>
        <div class="box">
          <div class="iconBx">
            <img src="img/icons/icon2.png">
          </div>
          <div class="content">
            <h2>Desenvolvimento</h2>
            <p>
              <?php
                // MOSTRA TEXTO NA BOX 'DESENVOLVIMENTO' //  
                $query = mysqli_query($conexao,"SELECT * FROM oQueFazemos;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[3];
                }
              ?> 
            </p>
          </div>
        </div>
        <div class="box">
          <div class="iconBx">
            <img src="img/icons/icon3.png">
          </div>
          <div class="content">
            <h2>Marca</h2>
            <p>
              <?php
                // MOSTRA TEXTO NA BOX 'MARCA' //  
                $query = mysqli_query($conexao,"SELECT * FROM oQueFazemos;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[4];
                }
              ?> 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Stats-->
  <section class="sec stats" id="project">
    <div class="content_project">
      <div>
        <div class="content-title">
          <h3>Nosso Projeto</h3>
          <div class="mark-quad-w"></div>
        </div>
        <div class="stats-container">
          <div class="stats-container-logo">
            <img src="img/assets/dandelion_logo_c.svg" alt="Dandelion">
          </div>
          <h3>
            <?php
              // MOSTRA TEXTO INICIAL //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                echo $mostraQuery[1];
              }
            ?> 
          </h3>
          <div class="stats-container-img">
            <img src="img/<?php 
                // img/compartilhar_1 //
                $query = mysqli_query($conexao,"SELECT * FROM images where id=4;");
                  while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[1]; } ?>">    
          </div>
          <p>
            <?php
              // MOSTRA DESCRIÇÃO DANDELION //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                echo $mostraQuery[2];
              }
            ?>
          </p>
          <div class="project-about">
            <div class="content-title">
              <h3>Por que compartilhar?</h3>
              <div class="mark-quad-w-2"></div>
            </div>
            <p>
            <?php
              // MOSTRA DESCRIÇÃO DANDELION //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                echo $mostraQuery[3];
              }
            ?>
            </p>
            <div class="content-title">
              <h3>Como funciona o Dandelion</h3>
              <div class="mark-quad-w-2"></div>
            </div>
            <div class="how-work">
              <div class="how-work-l">
                <img src="img/<?php 
                  // img/dandelion_1 //
                  $query = mysqli_query($conexao,"SELECT * FROM images where id=6;");
                    while($mostraQuery = mysqli_fetch_array($query)) {
                      echo $mostraQuery[1]; } ?>">    
              </div>
              <div class="how-work-r">
                <p>
                  <?php
                    // MOSTRA TEXTO COMO FUNCIONA 1 //  
                    $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
                    while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[4];
                  }
                  ?>
                </p>
              </div>
            </div>
            <div class="how-work">
              <div class="how-work-r">
                <p>
                  <?php
                      // MOSTRA TEXTO COMO FUNCIONA 2 //  
                      $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
                      while($mostraQuery = mysqli_fetch_array($query)) {
                      echo $mostraQuery[5];
                    }
                    ?>
                </p>
              </div>
              <div class="how-work-l">
                <img src="img/<?php 
                  // img/dandelion_2 //
                  $query = mysqli_query($conexao,"SELECT * FROM images where id=7;");
                    while($mostraQuery = mysqli_fetch_array($query)) {
                      echo $mostraQuery[1]; } ?>">    
              </div>
            </div>
            <div class="stats-container-img">
              <img src="img/<?php 
                // img/compartilhar_2 //
                $query = mysqli_query($conexao,"SELECT * FROM images where id=5;");
                  while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[1]; } ?>">    
            </div>
          </div>
        </div>
        <div class="content-title">
          <h3>E por que utilizar o Dandelion?</h3>
          <div class="mark-quad-w-2"></div>
        </div>
        <p>
          <?php
              // MOSTRA TEXTO "POR QUE UTILIZAR" //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[6];
              }
          ?>
        </p>
      </div>
      <div class="statsBox">
        <div class="box">
          <h2>
            <?php
              // MOSTRA QUANTIDADE DE USUÁRIOS //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[7];
              }
            ?>
          </h2>
          <h4>Usuários</h4>
        </div>
        <div class="box">
          <h2>
            <?php
                // MOSTRA QUANTIDADE DE CONTRIBUIÇÕES //  
                $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[8];
                }
              ?>
          </h2>
          <h4>Contribuições</h4>
        </div>
        <div class="box">
          <h2>
            <?php
                // MOSTRA QUANTIDADE DE COMUNIDADES //  
                $query = mysqli_query($conexao,"SELECT * FROM nossoProjeto;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[9];
                }
            ?>
          </h2>
          <h4>Comunidades</h4>
        </div>
      </div>
    </div>
  </section>
  <!--Team-->
  <section class="sec" id="team">
    <div class="content">
      <div class="mxw800p">
        <div class="content-title">
          <h3>Conheça nosso time</h3>
          <div class="mark-quad"></div>
        </div>
        <p>
          <?php
            // MOSTRA DESCRIÇÃO DA SEÇÃO "NOSSO TIME" //  
            $query = mysqli_query($conexao,"SELECT * FROM nossoTime;");
            while($mostraQuery = mysqli_fetch_array($query)) {
                echo $mostraQuery[1];
            }
          ?>
        </p>
      </div>
      <div class="teamBx">

        <div class="card">
          <div class="content">
            <h2>
              <?php
              // DIOGO PEREIRA //  
              $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=1;");
              while($mostraQuery = mysqli_fetch_array($query)) {
                echo $mostraQuery[2];
              }
              ?>
            </h2>
            <p>
              <?php
                // DESCRIÇÃO DIOGO PEREIRA //  
                $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=1;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[3];
                }
                ?>
            </p>
          </div>
          <img src="img/<?php 
                        // EXIBE IMAGEM DIOGO PEREIRA //
                        $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=1;");
                           while($mostraQuery = mysqli_fetch_array($query)) {
                            echo $mostraQuery[4]; } ?>">                     
        </div>

        <div class="card">
          <div class="content">
            <h2>
              <?php
                // PABLO MONTEIRO //  
                $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=2;");
                while($mostraQuery = mysqli_fetch_array($query)) {
                  echo $mostraQuery[2];
                }
                ?>
            </h2>
            <p>
              <?php
                  // DESCRIÇÃO PABLO MONTEIRO //  
                  $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=2;");
                  while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[3];
                  }
                ?>
            </p>
          </div>
          <img src="img/<?php 
                        // EXIBE IMAGEM DIOGO PEREIRA //
                        $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=2;");
                           while($mostraQuery = mysqli_fetch_array($query)) {
                            echo $mostraQuery[4]; } ?>">    
        </div>

        <div class="card">
          <div class="content">
            <h2>
              <?php
                    // WOLNEI CORDEIRO //  
                    $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=3;");
                    while($mostraQuery = mysqli_fetch_array($query)) {
                      echo $mostraQuery[2];
                    }
                ?>
            </h2>
            <p>
            <?php
                  // DESCRIÇÃO WOLNEI CORDEIRO //  
                  $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=3;");
                  while($mostraQuery = mysqli_fetch_array($query)) {
                    echo $mostraQuery[3];
                  }
                ?>
            </p>
          </div>
          <img src="img/<?php 
                        // EXIBE IMAGEM DIOGO PEREIRA //
                        $query = mysqli_query($conexao,"SELECT * FROM nossoTime where id=3;");
                           while($mostraQuery = mysqli_fetch_array($query)) {
                            echo $mostraQuery[4]; } ?>">    
        </div>

      </div>
    </div>
  </section>
  <!--Contact-->
  <section class="sec contact" id="contact">
    <div class="content">
      <div class="mxw800p">
        <div class="content-title">
          <h3>Nos envie uma mensagem</h3>
          <div class="mark-quad-w"></div>
        </div>
        <p>
          Encorajados a interagir e colaborar, mantendo o foco no usuário e atendendo rápido as mudanças
        </p>
      </div>
      <div class="contactForm">
        <form>
          <div class="row100">
            <div class="inputBx50">
              <input type="text" name="" placeholder="Nome Completo">
            </div>
            <div class="inputBx50">
              <input type="text" name="" placeholder="E-mail">
            </div>
          </div>
          <div class="row100">
            <div class="inputBx100">
              <textarea placeholder="Mensagem"></textarea>
            </div>
          </div>
          <div class="row100">
            <input type="submit" name="" value="Enviar">
          </div>
        </form>
      </div>
      <div class="sci">
        <ul>
          <li><a href="#"><img src="img/icons/facebook.png"></a></li>
          <li><a href="#"><img src="img/icons/twitter.png"></a></li>
          <li><a href="#"><img src="img/icons/linkedin.png"></a></li>
        </ul>
      </div>
      <p class="copyright">Design & Desenvolvimento por <a href="#">©1618</a></p>
    </div>
  </section>
  <script type="text/javascript">
    var path = document.querySelector('#logo-a-size');
    window.addEventListener('scroll', function () {
      path.classList.toggle("logoa", window.scrollY > 0)
    });

    var visible = document.querySelector('#logo-b-size');
    window.addEventListener('scroll', function () {
      visible.classList.toggle("logob", window.scrollY > 0)
    });

    window.addEventListener("scroll", function () {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0)
    })

    function toggle() {
      var header = document.querySelector("header");
      header.classList.toggle("active");
    }

  </script>
</body>

</html>