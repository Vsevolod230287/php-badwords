<!-- Descrizione:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *
-->

  <?php
    $bad_word = $_GET['badword'];
    $testo = ' Il Vero programmatore finisce tutte le sue frasi con un punto e virgola;  <br>
               Il Vero programmatore entra in casa dalla porta 8080. <br>
               Il Vero programmatore può scrivere un metodo che lancia un’eccezione che conferma la regola.';

    $aster = '***';
    $testo_replace = str_replace($bad_word, '***', $testo);
    $str_length = strlen($testo_replace);
  ?>

<div>
<h1>  Lungezza del paragrafo: <?php echo $str_length . ' caratteri.' . '<br>';?></h1>
      <?php  echo $testo_replace; ?>
       <br>
       Indovina chi e: <?php echo $aster . ' ?' ?>

</div>
