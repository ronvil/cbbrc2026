<?php get_header( ); ?>

  <main>
    
    <section class="hero">
      
      <video class="hero__video" src="<?php bloginfo( 'stylesheet_directory' ); ?>/videos/hero-bg.mp4" playsinline autoplay muted loop>
      </video>
      
      <div class="container hero__container">
        <div class="hero__content">
          <h1>Continuing the legacy of Ka Bel</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur facere cupiditate ipsam possimus aperiam. Repudiandae laudantium eveniet, tempore inventore, nisi voluptate nulla quod, itaque vero omnis minus voluptates? Quod, ducimus?</p>
          <div class="button__container">
            <a href="#" class="button">Find out More</a>
            <a href="#" class="button button-urgent">Support our work</a>
          </div>
        </div>
      </div>

    </section>

    <section class="aboutkb">
      <div class="container aboutkb__container">
        <div class="aboutkb__text">
          <h1>Labor leader. Legislator. Revolutionary.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In non, eligendi ut, provident alias ex dolore voluptas soluta hic, tempora corporis incidunt quam rerum cupiditate ipsam rem? Quis, nulla eos?</p>
          <div class="button__container">
            <a href="#" class="button">Who is Crispin B. Beltran?</a>
          </div>
        </div>
        <div class="aboutkb__img">
          <img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/kabel.jpg">
        </div>
      </div>
    </section>

    <section class="ourwork">
      <div class="container ourwork__container">
        <h1>What we do</h1>
        
        <div class="ourwork__card">
          
          <header class="ourwork__cardheader">
            <h2>Research</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis architecto saepe enim. Nulla ducimus animi laborum, iusto enim eligendi vitae odio porro mollitia. Nobis possimus sapiente reprehenderit vero aliquam.</p>
            
            <div class="button__container">
              <a href="#" class="button">Reserch Archive</a>
            </div>
          </header>

          <div class="ourwork__articlecardcontainer">
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
          </div>

        </div>

        <div class="ourwork__card">
          
          <header class="ourwork__cardheader">
            <h2>Advocacy</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis architecto saepe enim. Nulla ducimus animi laborum, iusto enim eligendi vitae odio porro mollitia. Nobis possimus sapiente reprehenderit vero aliquam.</p>
            
            <div class="button__container">
              <a href="#" class="button">Reserch Archive</a>
            </div>
          </header>

          <div class="ourwork__articlecardcontainer">
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
          </div>

        </div>

        <div class="ourwork__card">
          
          <header class="ourwork__cardheader">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis architecto saepe enim. Nulla ducimus animi laborum, iusto enim eligendi vitae odio porro mollitia. Nobis possimus sapiente reprehenderit vero aliquam.</p>
            <div class="button__container">
              <a href="#" class="button">Reserch Archive</a>
            </div>
          </header>

          <div class="ourwork__articlecardcontainer">
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
          </div>

        </div>

        <div class="ourwork__card">
          
          <header class="ourwork__cardheader">
            <h2>Ka Bel Memorial</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quis architecto saepe enim. Nulla ducimus animi laborum, iusto enim eligendi vitae odio porro mollitia. Nobis possimus sapiente reprehenderit vero aliquam.</p>
            
            <div class="button__container">
              <a href="#" class="button">Reserch Archive</a>
            </div>
          </header>

          <div class="ourwork__articlecardcontainer">
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
            <?php get_template_part( 'inc/card', 'article' ); ?>
          </div>

        </div>

      </div>
    </section>


  </main>

<?php get_footer( ); ?>