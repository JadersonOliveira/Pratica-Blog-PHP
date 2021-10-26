<?php
    include_once("templates/header.php");

    if(isset($_GET["id"])){
        $postId = $_GET["id"];
        $currentPost;

        foreach($posts as $post){
            if($post["id"] == $postId){
                $currentPost = $post;
            }
        }

    }

?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost["title"] ?></h1>
            <p id="post-description"><?= $currentPost["description"] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at leo tellus.
                Curabitur enim nibh, pharetra at metus quis, pharetra pharetra augue. Curabitur ultrices gravida
                laoreet. Pellentesque varius arcu in sem semper, vel sodales nulla sagittis. Vestibulum aliquet 
                metus vitae diam elementum molestie. Donec ultrices commodo lacus, et fringilla erat varius ac.
                Fusce in hendrerit arcu, sit amet pulvinar diam. Donec a dolor quis neque condimentum ullamcorper
                id et libero. Nulla facilisi. Vivamus vel malesuada nunc, in posuere nunc.</p>
            <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In at leo tellus.
                Curabitur enim nibh, pharetra at metus quis, pharetra pharetra augue. Curabitur ultrices gravida
                laoreet. Pellentesque varius arcu in sem semper, vel sodales nulla sagittis. Vestibulum aliquet 
                metus vitae diam elementum molestie. Donec ultrices commodo lacus, et fringilla erat varius ac.
                Fusce in hendrerit arcu, sit amet pulvinar diam. Donec a dolor quis neque condimentum ullamcorper
                id et libero. Nulla facilisi. Vivamus vel malesuada nunc, in posuere nunc.</p>
        </div>
        <aside id="nav-container">
                <h3 id="tags-title">Tags</h3>
                <ul id="tag-list">
                    <?php foreach($currentPost["tags"] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
                <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>