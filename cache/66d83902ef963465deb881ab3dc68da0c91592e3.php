


<?php if($battleField!=NULL && $battleField->getMyWarrior()!=NULL): ?>

  <table width=100%>

      <tr>
      <td width=33%>
        <strong><?php echo e($battleField->getMyWarrior()->id); ?></strong>
        <img src="<?php echo e($battleField->getMyWarrior()->imageUrl); ?>" alt="<?php echo e(get_class ($battleField->getMyWarrior())); ?>" style="width:100%;">
        <img src="<?php echo e($battleField->getMyWarrior()->weapon->imageUrl); ?>" alt="Pan !" style="width:100%;">
          <p>
            Arme---> <?php echo e($battleField->getMyWarrior()->weapon->id); ?><br>
            Puissance---> <?php echo e($battleField->getMyWarrior()->weapon->strength); ?><br>

              <?php $__currentLoopData = $battleField->getMyWarrior()->ToArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car =>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                 <?php echo e($car); ?>'--->'<?php echo e($value); ?><br>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
          </p>
        <div class="meter">
          <span style="width:<?php echo e($battleField->getMyWarrior()->life); ?>%"></span>
        </div>
      </td>

      <?php if($battleField->getOtherWarriors()!=NULL): ?>
          <td width=33% align=center><img src="vs.png" alt="VS" style="width:100px;"></td>
          <td width=33%>
            <table>
            <?php $__currentLoopData = $battleField->getOtherWarriors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warrior): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
              <tr>
                <td>
                  <a href="<?php echo e(BattleField::getHost()); ?>?do=fight&p1=<?php echo e($battleField->getMyWarrior()->id); ?>&p2=<?php echo e($warrior->id); ?>">
                    <img src="<?php echo e($warrior->imageUrl); ?>"alt="<?php echo e(get_class ($warrior)); ?>" style="width:10%">
                  </a>
                    <p>
                        <?php $__currentLoopData = $warrior->ToArray(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car =>$value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <?php echo e($car); ?>---><?php echo e($value); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </p>
                  Arme---> <?php echo e($warrior->weapon->id); ?><br>
                  Puissance---> <?php echo e($warrior->weapon->strength); ?><br>
                  <img src="<?php echo e($warrior->weapon->imageUrl); ?>" alt="Pan !" style="width:10%;">
                  <div class="meter">
                    <span style="width:<?php echo e($warrior->life); ?>%"></span>
                  </div>
                </td>
              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </table>
          </td>
      <?php endif; ?>
    </tr>
  </table>


<?php endif; ?>
