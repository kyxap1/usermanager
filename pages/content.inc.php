<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <?php include("pages/breadcrumb.inc.php"); ?>
  <h1 class="page-header">Status</h1>

  <dl class="dl-horizontal">
    <dt>Last sync</dt>
    <dd>29.09.2014 22:10:11 UTC</dd>
    <dt>Latest Git push</dt>
    <dd>29.09.2014 22:05:09 UTC</dd>
  </dl>

  <h1 class="page-header">Actions</h1>

  <div>
    <button name="query" class="btn btn-default" type="button"><span class="glyphicon glyphicon-refresh"></span><span class="hidden-xs hidden-sm"> Query</span></button>
    <button name="deploy" class="btn btn-default" type="button"><span class="glyphicon glyphicon-random"></span><span class="hidden-xs hidden-sm"> Deploy</span></button>
    <button name="commit" class="btn btn-default" type="button"><span class="glyphicon glyphicon-upload"></span><span class="hidden-xs hidden-sm"> Commit</span></button>
  </div>

  <p></p>
  <p></p>

  <h1 class="page-header">Servers</h1>
  <?php include("pages/panel.inc.php"); ?>
</div>

