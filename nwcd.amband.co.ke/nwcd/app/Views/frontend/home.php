<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('./partials/head') ?>

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
   <?= $this->include('./partials/navbar') ?>
    <!-- ..::  header area end ::.. -->

    

    <!-- ..::  scripts  start ::.. -->
    <?= $this->include('./partials/script') ?>
    <!-- ..::  scripts  end ::.. -->

    <?= $this->renderSection('./script') ?>
</body>

</html>