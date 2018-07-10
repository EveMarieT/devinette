<div id="container">
    <h2>Ajouter une devinette</h2>

    <form action="<?= HOST;?>ajout.html" method="post">
      <?php if($devinette->getId()):?>
        <input type="hidden" name="values['id']" value="<?= $devinette->getId();?>"/>
      <?php endif;?>

      Titre : <input type="text" name="values[name]" value="<?= $devinette->getName();?>"/><br/>
      Question : <textarea name="values[question]"><?= $devinette->getQuestion();?></textarea><br/>
      Réponse : <textarea name="values[answer]"><?= $devinette->getAnswer();?></textarea><br/>
      <input type="submit" value="ajouter" />
    </form>
  </div>
