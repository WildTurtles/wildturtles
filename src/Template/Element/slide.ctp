<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
            <?php echo $this->element('Slide/turtle'); ?>
        </li>
        <!--        <li class="orbit-slide">
        <?php echo $this->element('Slide/choose_free_software'); ?>
                </li>-->
        <li class="orbit-slide">
            <?= $this->element('Slide/advantages'); ?>
        </li>
    </ul>
</div>
<!--<nav class="orbit-bullets">
  <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
  <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
  <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
</nav>-->
<hr>
