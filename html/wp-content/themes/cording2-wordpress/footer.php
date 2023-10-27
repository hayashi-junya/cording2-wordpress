<?php wp_footer(); ?>
    <footer class="l-footer">
    <nav class="l-footer__nav">
        <ul class="l-footer__list">
          <li class="l-footer__item">
            <a href="http://localhost:8080/" class="l-footer__link">ホーム</a>
          </li>
          <li class="l-footer__item">
            <a href="http://localhost:8080/message/" class="l-footer__link">メッセージ</a>
          </li>
          <li class="l-footer__item">
            <a href="http://localhost:8080/company/" class="l-footer__link">会社概要</a>
          </li>
        </ul>
      </nav>
      <div class="l-footer__logo">©START</div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>
    <script>
      $(function () {
        $(".c-toggle-btn").on("click", function () {
          if ($(".l-header__wrapper").hasClass("open")) {
            $(".l-header__wrapper").removeClass("open");
          } else {
            $(".l-header__wrapper").addClass("open");
          }
        });
      });
    </script>
  </body>
</html>
