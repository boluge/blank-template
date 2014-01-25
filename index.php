<?php 
  defined( '_JEXEC' ) or die; 
  include_once JPATH_THEMES.'/'.$this->template.'/logic.php'; // load logic.php
?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <style> 
      {behavior:url(http://cdn.jsdelivr.net/css3pie/2.0b1/PIE.htc);}
    </style>
  <![endif]-->
</head>
  
<body class="<?php echo $pageclass; ?>">
  
  <?php if($this->countModules('module')) : ?>
    <jdoc:include type="modules" name="module" style="xhtml" />
  <?php endif; ?>

  <jdoc:include type="message" />
  <jdoc:include type="component" />

  <jdoc:include type="modules" name="debug" />
</body>

</html>

