
<style>
h1 {
    margin-top: 50px;
  }

.card{ display: grid;
  grid-template-columns:50% 50%;
  grid-template-rows: 50% 50%;

}
p{
    font-size: x-large;
    text-align: center;
}
p{
    margin-bottom: 40px;
}


</style>

<h1>Produit</h1>

<div class="card">

<?php foreach ($articles as $article) {
    if($article['id'] == 1){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
            <p><a href="?page=p1">Acheter maintenant !</a></p>
    
        </div>

        <?php if (isset($_SESSION['nom'])){ ?><?php } ?>
<?php }}?>


<?php foreach ($articles as $article) {
    if($article['id'] == 2){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
            <p><a href="?page=p2">Acheter maintenant !</a></p>
    
        </div>
<?php }}?>

<?php foreach ($articles as $article) {
    if($article['id'] == 3){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
            <p><a href="?page=p3">Acheter maintenant !</a></p>
    
        </div>
<?php }}?>

<?php foreach ($articles as $article) {
    if($article['id'] == 4){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
            <p><a href="?page=p4">Acheter maintenant !</a></p>
        </div>
<?php }}?>
    </div>
