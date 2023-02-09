<?php 
  include_once("templates/header.php"); 

  if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $currentPost;

    foreach($posts as $post) {
      if ($post["id"] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>

  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title">
        <?php echo $currentPost["title"]; ?>
      </h1>
      <p id="post-description">
        <?php echo $currentPost["description"]; ?>
      </p>
      <div class="img-container">
        <img 
          src="<?php echo $BASE_URL; ?>img/<?php echo $currentPost["img"]; ?>" 
          alt="<?php echo $currentPost["title"]; ?>"
        > 
      </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam maxime porro ut molestias dolorum dolores facilis. Eius delectus officia minus temporibus sint reprehenderit cumque at. Sapiente error officia tempore illo.
        Magnam fugiat voluptatibus nulla eaque error, consequuntur laborum delectus iste, ut ex ad ipsam molestiae eius. Tempora amet, eum sint dolorem recusandae enim quidem quod, magnam a debitis sed nulla.
        Rerum numquam magni optio ducimus repellendus, animi qui dolorem! Earum repudiandae suscipit dignissimos animi explicabo exercitationem molestiae necessitatibus soluta blanditiis, sunt, ipsum omnis possimus quam hic maiores voluptatem veritatis adipisci?
        Quibusdam ducimus ut recusandae nostrum ratione mollitia id quis non distinctio nulla laborum, impedit ipsam debitis, iusto voluptates culpa nesciunt sequi, quam voluptas eius dolor vel eligendi beatae harum? Numquam!
        Explicabo odio, quam illum reprehenderit commodi cupiditate tempora voluptas nostrum nesciunt? Maiores in harum, necessitatibus animi commodi illum voluptatum aperiam, magnam accusamus enim, voluptatibus molestiae provident unde reprehenderit incidunt voluptas!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam maxime porro ut molestias dolorum dolores facilis. Eius delectus officia minus temporibus sint reprehenderit cumque at. Sapiente error officia tempore illo.
        Magnam fugiat voluptatibus nulla eaque error, consequuntur laborum delectus iste, ut ex ad ipsam molestiae eius. Tempora amet, eum sint dolorem recusandae enim quidem quod, magnam a debitis sed nulla.
        Rerum numquam magni optio ducimus repellendus, animi qui dolorem! Earum repudiandae suscipit dignissimos animi explicabo exercitationem molestiae necessitatibus soluta blanditiis, sunt, ipsum omnis possimus quam hic maiores voluptatem veritatis adipisci?
        Quibusdam ducimus ut recusandae nostrum ratione mollitia id quis non distinctio nulla laborum, impedit ipsam debitis, iusto voluptates culpa nesciunt sequi, quam voluptas eius dolor vel eligendi beatae harum? Numquam!
        Explicabo odio, quam illum reprehenderit commodi cupiditate tempora voluptas nostrum nesciunt? Maiores in harum, necessitatibus animi commodi illum voluptatum aperiam, magnam accusamus enim, voluptatibus molestiae provident unde reprehenderit incidunt voluptas!</p>
    </div>

    <aside id="nav-container">
      <h3 id="tags-title">Tags</h3>
      <ul id="tag-list">
        <?php foreach($currentPost["tags"] as $tag): ?>
          <li>
            <a href="#"><?php echo $tag; ?></a>
          </li>
        <?php endforeach;?>
      </ul>
      <h3 id="categories-title">Categorias</h3>
      <ul id="categories-list">
        <?php foreach($categories as $category): ?>
          <li>
            <a href="#"><?php echo $category; ?></a>
          </li>
        <?php endforeach;?>
      </ul>
    </aside>
  </main>

<?php 
  include_once("templates/footer.php"); 
?>