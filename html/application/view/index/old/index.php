<!--<div class="container">
    <h1>IndexController/index</h1>
    <div class="box">

        echo out the system feedback (error and success messages) 
        <?php $this->renderFeedbackMessages(); ?>

        <h3>What happens here ?</h3>
        <p>
            This is the homepage. As no real URL-route (like /register/index) is provided, the app uses the default
            controller and the default action, defined in application/config/config.php, by default it's
            IndexController and index()-method. So, the app will load application/controller/IndexController.php and
            run index() from that file. Easy. That index()-method (= the action) has just one line of code inside
            ($this->view->render('index/index');) that loads application/view/index/index.php, which is basically
            this text you are reading right now.
        </p>
    </div>
</div>-->
<!DOCTYPE html>
<html lang="en" >
<head>
<script src="<?php echo Config::get('URL'); ?>js/news.js"> language="javascript" type="text/javascript"</script>
<link href="<?php echo Config::get('URL'); ?>css/news/news.css" rel='stylesheet' type='text/css' media="all">
<link href="<?php echo Config::get('URL'); ?>css/news/news-normalize.min.css" rel='stylesheet' type='text/css' media="all">
  <meta charset="UTF-8">
  <title>Media Cards</title>
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">-->
<link rel="stylesheet" href="./normalize.min.css"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="root"></div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>