<!Document HTML>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

        <title>Progs Desenvolvimento</title>

   <style type="text/css">
       @import url("<?php echo base_url('public/css/bootstrap.min.css');?>");
       @import url("<?php echo base_url('public/css/material-wfont.min.css');?>");
       @import url("<?php echo base_url('public/css/material.min.css');?>");
       @import url("<?php echo base_url('public/css/ripples.min.css');?>");
       @import url("<?php echo base_url('public/css/style.css');?>");
   </style>

    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0)">The AnonyBay</a>
    </div>

</div>


<form class="form-horizontal" role="form" style="margin-top:7%">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Buscar</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="buscar" placeholder="filmes,videos,animes">
    </div>
     <button type="submit" class="btn btn-default">Buscar</button>
  </div>

 
  
  </div>
</form>

<div class="conteudo">
<?php echo $contents ?>
</div>
<div id="push"></div>


</div>

<div id="footer">
    <div class="container">
        <p class="muted credit">The AnonyBay  <?php echo date("Y");?></p>

</div>


<script type="text/javascript" src="<?php echo base_url('public/js/jquery-2.1.1.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('public/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/material.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/ripples.min.js');?>"></script>

<script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'pt-BR'}
</script>
</body>
</html>