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
</style>

<h1></h1>
<div class="card">
<?php foreach ($articles as $article) {
    if($article['id'] == 1){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
    
        </div>

<?php }}?>

<?php foreach ($articles as $article) {
    if($article['id'] == 2){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
    
        </div>

<?php }}?>

<?php foreach ($articles as $article) {
    if($article['id'] == 3){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
    
        </div>

<?php }}?>

<?php foreach ($articles as $article) {
    if($article['id'] == 4){?>

        <div>
            <img src="<?php echo $article['image']; ?>">   
            <p><?php echo $article['prix']; ?> $</p>
            <h2><?= $article['description'] ?></h2>
    
        </div>

<?php }}?>
</div>