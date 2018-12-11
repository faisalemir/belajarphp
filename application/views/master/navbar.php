<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?=($aktif=='index')?'active':''?>"><a href="<?=base_url()?>">Home</a></li>
      <li class="<?=($aktif=='page1')?'active':''?>"><a href="<?=base_url('pertama/page')?>">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>