
<html>
<head>
  <title>Warrior Project</title>
  <!-- Fonts -->
  <link href="simple.css" rel="stylesheet" type="text/css">

</head>
<body>

  <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <?php echo $__env->make('error', ['txt' => $e], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


  <h1>Warrior Project</h1>

  <table>
  <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <tr>
    <td>
      <?php if($result->valid_ok): ?>
        <div class="led-green"></div>
      <?php else: ?>
        <div class="led-red"></div>
      <?php endif; ?>
    </td>
      <td><?php echo $result->title; ?></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </table>


  <?php if(checkNbBadAnswers($results) < 4): ?>
    <h1>Ready to fight ? </h1>
    <a href="<?php echo e(BattleField::getHost()); ?>?do=createMy&me=<?php echo e($me); ?>">Create My</a> <br>
    <a href="<?php echo e(BattleField::getHost()); ?>?do=createOther&me=<?php echo e($me); ?>">Create Other</a> <br>
    <a href="<?php echo e(BattleField::getHost()); ?>?do=deleteAll&me=<?php echo e($me); ?>">Delete All</a> <br>

    <?php echo $__env->make('battlefield', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php endif; ?>

  <?php if(checkNbBadAnswers($results) == 0): ?>
    <h1>Pour aller plus loin ... </h1>
    <ul>
      <li>Créez plus de  guerriers</li>
      <li>Affichez les caractéristiques de vos guerriers (Je vous conseille de le faire dans battlefield.blade.php)</li>
      <li>Pour avoir un vrai champ de bataille, faites hériter warrior de DistantWarrior</li>
      <li>Créez le guerrier le plus fort de l'arène</li>
      <li>Battez tous les autres guerriers</li>
      <li>Devenez immortels</li>
      <li>Passez, si ce n'est déjà fait, tous les membres de Warrior en private</li>
      <li>Implémentez un "vrai" serveur de jeux, à partir de <a href="https://github.com/campus-digital-grenoble/POO_serv">POO Serv</a></li>
    </ul>

  <?php endif; ?>



</body>
</html>
