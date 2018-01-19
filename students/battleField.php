<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
  	public static function createMyWarrior(){

  		$myWarrior = new PokemonWarrior ($GLOBALS['warriorID']);
  		$myWarrior->SetImageUrl('https://www.hillwalktours.com/walking-hiking-blog/wp-content/uploads/2017/02/highland-cow-getty-large-700x438.jpg');
  		$myWarrior->level=10000000000000000000000000;
  		$myWeapon = new Weapon('Corne dans le cul',1230);
        $myWeapon->SetImageUrl('http://squeletteskulls.free.fr/photo/corne%20mouflon.JPG');
        $myWarrior->SetWeapon($myWeapon);
        $myWarrior->life = 200;
        $myWarrior->saveNew();




  	}
      public static function createOtherWarrior(){

          $otherWarrior = new StartrekWarrior ('Flipper le dauphin');
          $otherWarrior->SetImageUrl('http://yerm.my.tripper-tips.com/photo/flipper-le-dauphin-700-54864.jpg');
          $otherWeapon = new Weapon('Pistolet Laser',120);
          $otherWeapon->SetImageUrl('https://vignette.wikia.nocookie.net/callofduty/images/3/3b/COD_BO2_Ray_Gun.png/revision/latest?cb=20130326204711&path-prefix=fr');
          $otherWarrior->SetWeapon($otherWeapon);
          $otherWarrior->saveNew();



      }


  }
