<?php
/*
 * Template Name: TOPページ
 */
?>
<?php get_header(); ?>

<main class="l-main">
<main class="p-mv">
      <div class="p-mv__container">
        <div class="p-mv__title">
          <h2 class="p-mv__maintitle">START</h2>
          <div class="p-mv__subtitle">仕事に最高のスタートを。</div>
        </div>
      </div>
    </main>

    <!-- news -->
    <section class="p-news">
      <div class="l-inner p-news__inner">
          <h2 class="c-section-title">ニュース</h2>
        <div class="p-news__list__wrapper">
          <dl class="p-news__list">
            <div class="p-news__item">
              <a href="messege.html" class="p-news__link">
                <dd class="p-news__date">2023.02.10</dd>
                <dt class="p-news__description">
                  コーポレートサイトをリニューアルしました。
                </dt>
              </a>
            </div>
            <div class="p-news__item">
              <a href="#" class="p-news__link">
                <dd class="p-news__date">2023.02.08</dd>
                <dt class="p-news__description">
                  採用を強化中です！一緒に働きませんか？
                </dt>
              </a>
            </div>
            <div class="p-news__item">
              <a href="#" class="p-news__link">
                <dd class="p-news__date">2022.02.02</dd>
                <dt class="p-news__description">
                  人材紹介SNS『スタート』をリリースしました。3/31まで新規登録キャンペーンを開催中です！サービス内で使える500ポイントをプレゼント！
                </dt>
              </a>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <!-- service -->
    <section class="p-service">
      <div class="l-inner p-service__inner">
          <h2 class="c-section-title p-service__title">サービス</h2>
        <div class="p-service__content"></div>

        <div class="p-service__cards">
          <div class="p-service__card">
            <a href="#" class="p-service__card-link">
              <div class="p-service__card__img-area">
                <img src="<?php bloginfo('template_url'); ?>/img/work_black_24dp.png" alt="" class="p-service-card__img"/>
              </div>
              <div class="p-service__card__title">
                <p>人材紹介業</p>
              </div>
              <p class="p-service__card__description">
                新規サイトの制作はもちろんサイトリニューアルやランディングページの制作も可能です。
              </p>
            </a>
          </div>
          <div class="p-service__card">
            <a href="#" class="p-service__card-link">
              <div class="p-service__card__img-area">
                <img src="<?php bloginfo('template_url'); ?>/img/パス 20.png" alt=""  class="p-service-card__img"/>
              </div>
              <div class="p-service__card__title">
                <p>スクール事業</p>
              </div>
              <p class="p-service__card____description">
                オンラインでWeb制作を学べるスクールを運営しています。
              </p>
            </a>
          </div>
          <div class="p-service__card">
            <a href="#" class="p-service__card-link">
              <div class="p-service__card__img-area">
                <img src="<?php bloginfo('template_url'); ?>/img/パス 22.png" alt=""  class="p-service-card__img"/>
              </div>
              <div class="p-service__card__title">
                <p>Webメディア運営</p>
              </div>
              <p class="p-service__card__description">
                人事系メディアやWebデザイン関連のメディアなどを複数運営しています。
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>
