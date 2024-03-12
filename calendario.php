<?php 
include("ligacao.php");
@session_start();
?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <?php include "head.html";?>
    <link href='calendario/css/maincore.css' rel='stylesheet' />
    <link href='calendario/css/maindaygrid.css' rel='stylesheet' />
    <link rel="stylesheet" href="calendario/css/style.css">
  </head>

  <body id="page-top">
    <?php include "menu.php";?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Calendário</h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Calendário-->
    <div class="content">
        <div id='calendar'></div>
    </div>
    <script src='calendario/js/pt.js'></script>
    <script src='calendario/js/main.js'></script>
    <script src='calendario/js/mainn.js'></script>
    <script src='calendario/js/mainnn.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: ['interaction', 'dayGrid'],
          locale: 'pt',
          editable: true,
          eventLimit: true,
          events: [
            <?php
              $sql = "SELECT `CodigoProva`, `Nome`, `DataInicio`, `DataFim`, `Descricao`, `CodigoLocal`, `CodigoTipoProva`, `Inscricao` FROM `Prova` limit 5";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  //print_r($row);
                  //$abc=preg_replace('/[^A-Za-z0-9\- ]/', '', $row["Descricao"]);
                  //echo $row["Descricao"];
                  $abc=str_replace('/r', '<br>', $row["Descricao"]);
                  $abc=str_replace('/n', '<br>', $abc);
                  $abc=str_replace('\'', '"', $abc);
            ?>
                {
                  title: '<?=$row["Nome"];?>',
                  start: '<?=$row["DataInicio"];?>',
                  end: '<?=$row["DataFim"];?>',
                  descricao: '<?=$abc;?>',
                  inscricaoUrl: '<?=$row["Inscricao"];?>' // Adiciona uma propriedade separada para o link de inscrição
                },
            <?php
                }
              }
            ?>
          ],
          eventClick: function (info) {
            // Criar e exibir um pop-up com informações do evento
            var popup = document.createElement('div');
            popup.className = 'event-popup';
            popup.innerHTML = '<h3>' + info.event.title + '</h3>' +
                              '<p>' + info.event.extendedProps.descricao + '</p>' +
                              '<button onclick="openInscricao(\'' + info.event.extendedProps.inscricaoUrl + '\')">Inscrever</button>' + // Chama a função para abrir a página de inscrição
                              '<button onclick="closePopup()">X</button>'; // Fechar Pop Up
            document.body.appendChild(popup);
          }
        });

        calendar.render();
      });

      function closePopup() {
        // Remover o pop-up ao clicar em "Fechar"
        var popup = document.querySelector('.event-popup');
        if (popup) {
          popup.parentNode.removeChild(popup);
        }
      }

      function openInscricao(url) {
        // Função para abrir a página de inscrição
        window.location.href = url;
      }
    </script>  
    <?php include "rodape.html";?>
  </body>
</html>
