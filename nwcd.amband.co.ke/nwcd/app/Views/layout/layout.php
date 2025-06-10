<!DOCTYPE html>
<html lang="en" data-theme="light">

<?= $this->include('partials/head') ?>

<body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">

    <!-- ..::  header area start ::.. -->
    <?= $this->include('partials/sidebar') ?>
    <!-- ..::  header area end ::.. -->

    <main class="dashboard-main">

        <!-- ..::  navbar start ::.. -->
        <?= $this->include('partials/navbar') ?>
        <!-- ..::  navbar end ::.. -->
        <div class="dashboard-main-body">
            
            <!-- ..::  breadcrumb  start ::.. -->
            <?= $this->include('partials/breadcrumb') ?>
            <!-- ..::  header area end ::.. -->

            <?= $this->renderSection('content') ?>
        
        </div>
        <!-- ..::  footer  start ::.. -->
        <?= $this->include('partials/footer') ?>
        <!-- ..::  footer area end ::.. -->

    </main>

    <!-- ..::  scripts  start ::.. -->
    <?= $this->include('partials/script') ?>
    <!-- ..::  scripts  end ::.. -->

    <?= $this->renderSection('script') ?>
</body>

</html>