<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['post-slug'])) {
  $post = getPost($_GET['post-slug']);
}
$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title>
  <?php echo $post['title'] ?> | LifeBlog
</title>
</head>

<body>
  <div class="container">
    <!-- Navbar -->
    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <!-- // Navbar -->

    <div class="content">
      <!-- Page wrapper -->
      <div class="post-wrapper">
        <!-- full post div -->
        <div class="full-post-div">
          <h2 class="post-title">
            <?php echo $post['title']; ?>
          </h2>
          <div class="post-body-div">
            <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
            <?php echo html_entity_decode($post['body']); ?>
          </div>
        </div>
        <!-- // full post div -->

        <!-- comments section -->
        <!--  coming soon ...  -->
      </div>
      <!-- // Page wrapper -->

      <!-- post sidebar -->
      <div class="post-sidebar">
        <div class="card">
          <div class="card-header">
            <h2>Topics</h2>
          </div>
          <div class="card-content">
            <?php foreach ($topics as $topic): ?>
              <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                <?php echo $topic['name']; ?>
              </a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <!-- // post sidebar -->
    </div>
  </div>
  <!-- // content -->

  <?php include(ROOT_PATH . '/includes/footer.php'); ?>