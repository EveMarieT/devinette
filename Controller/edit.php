<?php
include_once('_config.php');

if(isset($_GET['id'])){

  $id = $_GET['id'];

  /** Accés au model ***/
  $query = "SELECT * FROM devinette WHERE id = :id";
  $bdd = new PDO("mysql:host=localhost; dbname=devinette; charset=utf-8", "root", "root");
  $req = $bdd->prepare($query);
  $req->bindValue(':id', $id, PDO::PARAM_INT);
  $req->execute();
  $row = $req->fetch(PDO::FETCH_ASSOC);

  $devinette['id']         = $row['id'];
  $devinette['name']       = $row['name'];
  $devinette['question']   = $row['question'];
  $devinette['answer']     = $row['answer'];
  $devinette['created_at'] = $row['created_at'];

} else {
    $devinette['id']         = null;
    $devinette['name']       = null;
    $devinette['question']   = null;
    $devinette['answer']     = null;
    $devinette['created_at'] = null;
}
;?>
  <!-- View --->
<?php include('_head.php');?>
<?php include('_header.php');?>

  <div id="container">
    <h2>Ajouter une devinette</h2>

    <form action="update.php" method="post">
      <?php if($devinette['id']);?>
        <input type="hidden" name="values['id']" value="<?= $devinette['id'];?>"/>
      <?php endif;?>

      Titre : <input type="text" name="values[name]" value="<?= $devinette['name'];?>"/><br/>
      Question : <textarea name="values[question]"><?= $devinette['question'];?></textarea><br/>
      <input type="submit" value="ajouter" />
    </form>
  </div>

<?php include('_footer.php');?>
