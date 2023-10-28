<?php
/*
 * Template Name: メッセージ
 */
?>
<?php get_header(); ?>
<main class="p-sub-mv">
      <div class="p-sub-mv__container">
        <div class="p-sub-mv__title">
          <h2 class="p-sub-mv__maintitle">メッセージ</h2>
        </div>
      </div>
    </main>

    <section class="p-message">
      <div class="p-message__inner">
          <h3 class="p-message__title">
            「仕事」をきっかけに
            <br />人生の新しいスタートを！
          </h3>
        <div class="p-message__sub-title">
          大事なお仕事探しを応援させてください
        </div>
        <div class="p-message__box">
            <img src="<?php bloginfo('template_url'); ?>/img/ceo.png" alt="ceo" class="p-message__box__img" />
          <div class="p-message__box__description">
            <p>
              はじめまして。代表取締役社長のショーン・デイビット・ジュニアです。
              <br />私はそこそこ幸せです。それは仕事が楽しいからです。もちろん仕事イコール人生ではありません。でも仕事は人生の大事な基盤のように思っています。
              <br />株式会社STARTは、みなさんが仕事をきっかけに理想の人生を実現する手助けをしています。幸せにつながるお仕事紹介サービス<a
                href=""
                class="p-message__box__description-link"
                >『スタート』</a
              >や、共通の目標を目指す仲間が見つかる人材紹介SNS<a
                href=""
                class="p-message__box__description-link"
                >『ゴール』</a
              >を運営しています。また、Webデザインの基礎スキルを身につけられるスクール<a
                href=""
                class="p-message__box__description-link"
                >『Webの学校』</a
              >も随時開講しています。
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="p-message__under-img-wrapper">
      <img src="<?php bloginfo('template_url'); ?>/img/office.png" alt="office"  class="p-message__under-img"/>
    </div>

    <script>
    document.querySelector('.l-header__message-link').classList.add('l-header__link--active');  
</script>

<?php get_footer(); ?>
