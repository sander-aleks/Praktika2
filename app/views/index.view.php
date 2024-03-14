<div class="container">
 <?php require_once('partials/head.php'); ?>
  <div class="content">
    <h1>Liikumispäev</h1>
    <div class="BlogSec">
        <ul>
            <?php foreach ( $tasks as $task ): ?>
                <li>
                     <?php if ( $task->title ): ?>
                        <?= $task->title; ?>
                        <?php endif; ?>
                   
                     <?php if ( $task->description ): ?>
                        <?= $task->description; ?>
                        <?php endif; ?>
                        
                     <?php if  ($task->time ): ?>
                        <?= $task->time; ?>
                        <?php endif; ?>
               
                     <?php if ( $task->name ): ?>
                        <?= $task->name; ?>
                        <?php endif; ?>
                </li>    
            <?php endforeach; ?>
        </ul>
    </div>
  </div> 
  <form action='home' method="post">
        <p>
            <label for="isikukood">
                Sisesta enda isikukood:
                <input type="text" name="isikukood" placeholder="Isikukood" value="" maxlength="11">
            </label>
            <button type="submit">Registreeruma</button>
            <button type="submit" name="vaata">Minu Alad</button> 
        </p>
    </form>
</div> 

<?php require_once('partials/footer.php'); ?>