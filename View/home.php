
<div id="container">
  <h2>Liste des devinettes</h2>

  <?php foreach($devinettes as $devinette):?>
    <div class="question">
      <h3><?= $devinette->getName();?></h3>
      <?= $devinette->getQuestion();?>
      <br/>
      <button style="">
        <a href ="edit.php?id=<?= $devinette->getId();?>">
          modifier
        </a>
      </button>
      <button class="deleteButton">
        <a href="<?= HOST;?>'delete/id/<?= $devinette->getId();?>">
          effacer
        </a>
      </button>
      <button class="showAnswer">
        Voir la réponse
      </button>
      <div class="divAnswer">
        <?= $devinette->getAnswer();?>
      </div>
    </div>
    <?php endforeach;?>

</div>


<script type="text/javascript">
  $('.showAnswer').click(function(){
    $(this).next().toogle();
  })
</script>
