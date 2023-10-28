<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
<header class="l-header">
      <a href="http://localhost:8080/"
        ><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="mv" class="l-header__logo"
      /></a>
      <div class="l-header__wrapper">
        <nav class="l-header__nav">
          <ul class="l-header__list">
            <li class="l-header__item">
              <a class="l-header__link l-header__home-link" href="http://localhost:8080/"
                >ホーム</a
              >
            </li>
            <li class="l-header__item">
              <a class="l-header__link l-header__message-link" href="http://localhost:8080/message/">メッセージ</a>
            </li>
            <li class="l-header__item">
              <a class="l-header__link l-header__company-link" href="http://localhost:8080/company/">会社概要</a>
            </li>
          </ul>
        </nav>
      <div class="c-toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    </header>