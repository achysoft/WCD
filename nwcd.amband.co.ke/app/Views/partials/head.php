<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wowdash - Tailwind CSS Admin Dashboard Laravel-11 Template</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>" sizes="16x16">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- remix icon font css  -->
     <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/remixicon.css') ?>">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/apexcharts.css') ?>">
    
    <!-- Data Table css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/dataTables.min.css') ?>">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor-katex.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor.atom-one-dark.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/editor.quill.snow.css') ?>">
    <!-- Date picker css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/flatpickr.min.css') ?>">
    <!-- Calendar css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/full-calendar.css') ?>">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/jquery-jvectormap-2.0.5.css') ?>">
    <!-- Popup css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/leaflets.css') ?>">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/slick.css') ?>">
    <!-- prism css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/prism.css') ?>">
    <!-- file upload css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/file-upload.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lib/audioplayer.css') ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
     <link rel="stylesheet" href="<?= base_url('assets/css/lib/bootstrap.min.css') ?>">
     <style>
  body{
  background-color:#dde8f1;
}
header {
    transition: all 0.3s ease-in-out;
    box-shadow: 0 1px 6px 0 rgba(214, 220, 239, 1);
    top: 0px;
    background-color: #fff;
    position: sticky;
    z-index: 40;
    height: auto;
}
.logo {
    padding: 26px 0px;
}
.logo a {
    color: #3a76cb;
    text-transform: capitalize;
    color: #000000;
    font-size: 35px;
    font-weight: 500;
    text-decoration: none;
}
.mob-menu {
    display: none;
}
.main-menu {
    margin: 20px 0px;
    float: right;
}
.main-menu ul.nav {
    float: left;
    margin-right: 20px;
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    padding-top:10px;
}
.nav li:first-child {
    margin-left: 0px;
}
.main-menu ul {  display: inline-block; }
.main-menu ul li {
    position: relative;
    display: inline-block;
    margin: 12px 20px;
}
.main-menu ul li a {
    font-size: 20px;
    font-weight: 500;
    line-height: 1.3;
    color: #3a76cb;
    display: block;
   text-decoration:none;
}
.main-menu ul.right-nav{   
 padding-left:0px;
}
.main-menu ul.right-nav li a {
    width: 150px;
    height: 45px;
    border-radius: 4px;
    background-color: #fff;
    text-align: center;
    color: #3a76cb;
    border: solid 1px #3a76cb;
    vertical-align: middle;
    display: table-cell;
}
.main-menu ul.right-nav li:last-child {
    margin-right: 0px;
}
.main-menu ul.right-nav li.active a {
    background-color: #3a76cb;
    color: #fff;
}
@media(max-width:1000px){
  .logo {
    display: inline-block;
    width: 78%;
    padding: 10px 10px 10px 0px;
}
.mob-menu {
    display: inline-block;
    width: 20%;
}
.mob-menu span {
    border: solid 2px #3a76cb;
    display: block;
    text-align: center;
    border-radius: 4px;
    padding: 2px 6px;
    width: 50px;
    color: #3a76cb;
    font-size: 25px;
    cursor: pointer;
} 
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
} 
.main-menu ul {
    list-style: none;
    padding-left: 0px;
    margin-bottom: 0px;
    width: 100%;
}
  .main-menu ul.right-nav {
    text-align: center;
    margin-top: 6px;
}
ul.right-nav {
    margin-bottom: 10px;
}
.main-menu {
    margin: 0px 0px 20px 0px;
    float: left;
    background-color: #f1f1f1;
    width: 100%;
    display: none;
}
.main-menu ul li {
    display: block;
    width: 100%;
    margin: 0px;
}
 .nav li:first-child {
    margin-left: 0px;
}
.main-menu ul li a {
    padding: 10px 15px;
    display: block;
    border-bottom: solid 1px #e2e4e6;
    text-align: center;
}
 .main-menu ul.right-nav li {
    margin-left: 0px;
    margin-right: 30px;
    display: inline-block;
    width: 150px;
}
 .main-menu ul.right-nav li a {
    font-size: 18px !important;
}
}

        </style>
</head>