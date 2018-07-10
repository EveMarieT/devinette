<?php

/***
* Class Home
*
* use to show the home page
*/

class Home
{
  public function showHome($params)
  {
    $manager = new DevinetteManager();
    $devinettes = $manager->findAll();

    $myView = new View('home');
    $myView->render(array('devinettes' => $devinettes));
  }

  public function showContact($params)
  {
    $myView = new View('contact');
    $myView->render();

  }

  public function editDev($params)
  {
      if(isset($_GET['id'])) {

          $id = $_GET['id'];

          $manager = new Devinette();
          $devinette = $manager->find($id);

      } else {
          $devinette = new Devinette();
      }

      $myView = new View('edit');
      $myView->render(array('devinette' => $devinette));
  }

  public function addDev($params)
  {
    $values = $_POST['values'];

    $manager = new DevinetteManager();
    $manager->create($values);

    $myView = new View();
    $myView->redirect('home.html');
  }

  public function delDev($params)
  {

      $id = $_GET['id'];
      $manager = new DevinetteManager();
      $manager->delete($id);

      $myView = new View();
      $myView->redirect('home.html');
  }

}
