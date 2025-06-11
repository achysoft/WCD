<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('./partials/head') ?>

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
   <?= $this->include('./partials/header') ?>
    <!-- ..::  header area end ::.. -->
 
  <?= $this->include('./partials/slider') ?>

    <!-- ..::  scripts  start ::.. -->
    <?= $this->include('./partials/script') ?>
  <!-- ..::  footer  start ::.. -->
        <?= $this->include('./partials/footer') ?>
        <!-- ..::  footer area end ::.. -->


    <?= $this->renderSection('./script') ?>
</body>
<script>
         
    </script>
</html>