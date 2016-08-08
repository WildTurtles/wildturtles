<div class="callout large secondary">
 <div class="row">
  <div class="large-2 columns">
      <?= $this->Html->image('wild-turtles_gris_yeuxblanc.svg', ['alt' => __('Turtle'), 'class' => 'width-150']); ?>

  </div>
  <nav>
   <div class="large-2 large-offset-2 columns">
    <ul class="menu vertical">
     <li>
         <?php echo $this->Html->link(__('TWITTER'), ['href' => 'https://twitter.com/Wild_Turtles', 'class' => 'button ']); ?>
     </li>
     <li><a href="#">Archives</a></li>

    </ul>
   </div>
   <div class="large-2 large-offset-2 columns">
    <ul class="menu vertical">
     <li>
         <?php echo $this->Html->link(__('Wild Turtles'), ['controller' => 'Pages', 'action' => 'display', 'home']); ?>
     </li>
     <li><a href="#">Archives</a></li>

    </ul>
   </div>
   <div class="large-4 columns">
    <ul class="menu vertical">
     <li>
         <?php echo $this->Html->link(__('About'), ['controller' => 'Pages', 'action' => 'display', 'about_us']); ?>
     </li>
     <li>
         <?php echo $this->Html->link(__('Contact'), ['controller' => 'Pages', 'action' => 'display', 'contact']); ?>
     </li>
    </ul>
   </div>
  </nav>
 </div>
</div>
