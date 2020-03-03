<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php wp_title ( '-', true,'right' ); ?><?php bloginfo('name'); ?>
    </title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"
      href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/tomorrow.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('url') ?>/wp-content/themes/my-wordpress-theme/style.css" />
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="wrap container-fluid m-0 p-0">
      <header class="myHeader text-white container-fluid m-0 p-0">
        <div class="row">
          <div class="col">
            <h1>By Mikiri</h1>
          </div>
          <div class="col text-right text-white">
            <p>
                <a target="_brank" href="<?php bloginfo('rss2_url'); ?>">RSS</a>
            </p>
          </div>
        </div>
      </header>
      <main class="container">
        <div class="row">
            <h2 class="col mySectionHead">
              <?php wp_title ( '-', true,'right' ); ?><?php bloginfo('name'); ?>
            </h2>
        </div>

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <article class="col myArticle">
                        <h3><?php the_title(); ?></h3>
                        <pre class="body myBody Markdown">
                          <code class="Markdown">
                            <?php the_content(); ?>
                          </code>
                        </pre>
                    </article>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <nav class="row">
            <div class="col text-left">
                <?php previous_posts_link( '新しい投稿' ); ?>
            </div>
            <div class="col text-right">
                <?php next_posts_link( '過去の投稿' ); ?>
                
            </div>
        </nav>
        
      </main>
      <footer class="container-fluid m-0 p-0">
        <div class="row">
          <p class="col text-center">
            Copyright &copy; mi.ki.ri.hassha.p@gmail.com All Rights Reserved.
          </p>
        </div>
        <div class="row">
          <address class="col text-center">
            mi.ki.ri.hassha.p@gmail.com
          </address>
        </div>
      </footer>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
 
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
          document.querySelectorAll('.myBody').forEach((block) => {
            hljs.highlightBlock(block);
          });
        });
    </script>
  </body>
</html>
