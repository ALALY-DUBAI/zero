<main>
  <h1>WELCOME TO <span><?=$title?> </span> PAGE</h1>
  <h3>THE SERVER <span class="uri">REQUEST URI</span> IS : <span><?= $_SERVER['REQUEST_URI']?></span></h3>
</main>
<section class="<?php if ($_SERVER['REQUEST_URI'] === '/zero/') {echo 'red';} else if ($_SERVER['REQUEST_URI'] === '/zero/about') {echo 'blue';}else if ($_SERVER['REQUEST_URI'] === '/zero/contacts') {echo 'brown';} else {echo 'not good';} ?>">
  <h4>
    SECTION <?=$title?>
  </h4>
</section>