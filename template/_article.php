<div class="col-md-4 my-2">
    <div class="card">
      <img src="uploads/articles/<?=htmlentities($article['image']) ?>" class="card-img-top" alt="<?=htmlentities($article['title']) ?>">
      <div class="card-body">
        <h5 class="card-title"><?=htmlentities($article['title']) ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="actualite.php?id=<?=htmlentities($key)?>" class="btn btn-primary">Acceder à l'article</a>
      </div>
    </div>
  </div>