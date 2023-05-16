<?php get_header(); ?>

<?php
/**
 * Template Name: HOME
 */
?>

<main class="home page__main">
  <div class="main-visual">
    <div class="main-visual__inner page__inner">
      <div class="main-visual__flex page__flex">
        <div class="main-visual__flex1">
          <div class="main-visual__flex1-slider" id="js-slider1">
            <p class="main-visual__flex1-slider-alpha page__flex">
              <span class="page__bold page__wte page__en">Sapporo</span>
              <span class="page__bold page__wte page__en">Gourmet</span>
              <span class="page__bold page__wte page__en">Immigration</span>
            </p>
            <div class="main-visual__flex1-slider-flex page__flex">
              <p class="main-visual__flex1-slider-flex-cat page__wte">
                カテゴリー
              </p>
              <p class="main-visual__flex1-slider-flex-title page__bold page__wte">
                オンライン＆オフラインで、とっておきの上野を満喫！
              </p>
            </div>
          </div>
        </div>
        <div class="main-visual__flex2">
          <div class="main-visual__flex2-slider" id="js-slider2">
          </div>
          <div class="main-visual__flex2-wrap">
            <nav class="main-visual__flex2-nav">
              <ul class="main-visual__flex2-nav-list">
                <li class="main-visual__flex2-nav-item">
                  <a href="#" class="main-visual__flex2-nav-link page__flex">
                    <span class="main-visual__flex2-nav-link-num page__key page__en page__bold">01</span>
                    <div class="main-visual__flex2-nav-link-texts">
                      <h2 class="main-visual__flex2-nav-link-title page__bold">
                        ラーメン・麺類を探す
                      </h2>
                      <p class="main-visual__flex2-nav-link-desc">
                        キーワードからマッチする学科を探そう
                      </p>
                    </div>
                  </a>
                </li>
                <li class="main-visual__flex2-nav-item">
                  <a href="#" class="main-visual__flex2-nav-link page__flex">
                    <span class="main-visual__flex2-nav-link-num page__key page__en page__bold">02</span>
                    <div class="main-visual__flex2-nav-link-texts">
                      <h2 class="main-visual__flex2-nav-link-title page__bold">
                        カレーを探す
                      </h2>
                      <p class="main-visual__flex2-nav-link-desc">
                        キーワードからマッチする学科を探そう
                      </p>
                    </div>
                  </a>
                </li>
                <li class="main-visual__flex2-nav-item">
                  <a href="#" class="main-visual__flex2-nav-link page__flex">
                    <span class="main-visual__flex2-nav-link-num page__key page__en page__bold">03</span>
                    <div class="main-visual__flex2-nav-link-texts">
                      <h2 class="main-visual__flex2-nav-link-title page__bold">
                        肉料理を探す
                      </h2>
                      <p class="main-visual__flex2-nav-link-desc">
                        キーワードからマッチする学科を探そう
                      </p>
                    </div>
                  </a>
                </li>
                <li class="main-visual__flex2-nav-item">
                  <a href="#" class="main-visual__flex2-nav-link page__flex">
                    <span class="main-visual__flex2-nav-link-num page__key page__en page__bold">04</span>
                    <div class="main-visual__flex2-nav-link-texts">
                      <h2 class="main-visual__flex2-nav-link-title page__bold">
                        スイーツ・お菓子を探す
                      </h2>
                      <p class="main-visual__flex2-nav-link-desc">
                        キーワードからマッチする学科を探そう
                      </p>
                    </div>
                  </a>
                </li>
                <li class="main-visual__flex2-nav-item">
                  <a href="#" class="main-visual__flex2-nav-link page__flex">
                    <span class="main-visual__flex2-nav-link-num page__key page__en page__bold">05</span>
                    <div class="main-visual__flex2-nav-link-texts">
                      <h2 class="main-visual__flex2-nav-link-title page__bold">
                        寿司を探す
                      </h2>
                      <p class="main-visual__flex2-nav-link-desc">
                        キーワードからマッチする学科を探そう
                      </p>
                    </div>
                  </a>
                </li>
              </ul>
            </nav>
            <p class="main-visual__flex2-wrap-allert">
              当メディアは札幌のSEQUENCEが運営しています。掲載に関するお問い合わせは<a href="#">こちら</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="search">
    <div class="search__inner page__inner">
      <form method="get" action="<?php echo esc_url(home_url("/")); ?>">
        <div class="search-key">
          <div class="search-key__flex page__flex">
            <div class="search-key__flex1">
              <h3 class="search-key__flex1-ttl page__bold">
                キーワードから<br>
                お店を探す
              </h3>
            </div>
            <div class="search-key__flex2">
              <ul class="search-key__flex2-list page__flex">
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
                <li class="search-key__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">#中華</span>
                  </label>
                </li>
              </ul>
              <p class="search-key__flex2-allert">
                複数のキーワードを選択し、お店を探すことができます。
              </p>
            </div>
          </div>
        </div>
        <div class="search-area">
          <div class="search-area__flex page__flex">
            <div class="search-area__flex1">
              <h3 class="search-area__flex1-ttl page__bold">
                エリアから<br>
                お店を探す
              </h3>
            </div>
            <div class="search-area__flex2">
              <ul class="search-area__flex2-list page__flex">
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
                <li class="search-area__flex2-item">
                  <label>
                    <input type="checkbox" name="keyword" value="chuka">
                    <span class="page__bold">札幌市中央区</span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- radio-search -->
        <input type="submit" value="Keyword & Area Search">
        <!-- word-search -->
        <?php get_search_form(); ?>
      </form>
    </div>
  </div>
  <div class="latest">
    <div class="latest__inner page__inner">

    </div>
  </div>
</main>

<?php get_footer(); ?>