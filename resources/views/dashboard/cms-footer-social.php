<?php include 'cms-header.blade.php'; ?>

  <div class="cms">

		<div class="cms-container">

      <?php include 'cms-menu.blade.php'; ?>

			<div class="cms-content">

        <h2>Редактировать социальные сети</h2>

        <div class="cms-social">


          <div class="cms-social__content sortable">

            <div class="cms-social__item">
              <div class="cms-social__item-pic">
                <div class="cms-social__item-img">
                  <img src="img/vk-2.svg" alt="">
                </div>
                <button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
              </div>
              <div class="cms-social__item-name">
                <input type="text" value="Вконтакте">
              </div>
              <div class="cms-social__item-link">
                <input type="text" value="http://vk.com">
              </div>
              <div class="cms-social__item-edit">
                <button class="cms-btn cms-btn--mini">Сохранить</button>
              </div>
            </div>

            <div class="cms-social__item">
              <div class="cms-social__item-pic">
                <div class="cms-social__item-img">
                  <img src="img/fb-2.svg" alt="">
                </div>
                <button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
              </div>
              <div class="cms-social__item-name">
                <input type="text" value="Facebook">
              </div>
              <div class="cms-social__item-link">
                <input type="text" value="http://facebook.com">
              </div>
              <div class="cms-social__item-edit">
                <button class="cms-btn cms-btn--mini">Сохранить</button>
              </div>
            </div>

            <div class="cms-social__item">
              <div class="cms-social__item-pic">
                <div class="cms-social__item-img">
                  <img src="img/ig-2.svg" alt="">
                </div>
                <button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
              </div>
              <div class="cms-social__item-name">
                <input type="text" value="Instagram">
              </div>
              <div class="cms-social__item-link">
                <input type="text" value="https://www.instagram.com/?hl=ru">
              </div>
              <div class="cms-social__item-edit">
                <button class="cms-btn cms-btn--mini">Сохранить</button>
              </div>
            </div>

            <div class="cms-social__item">
              <div class="cms-social__item-pic">
                <div class="cms-social__item-img">
                  <img src="img/ok-2.svg" alt="">
                </div>
                <button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
              </div>
              <div class="cms-social__item-name">
                <input type="text" value="Одноклассники">
              </div>
              <div class="cms-social__item-link">
                <input type="text" value="http://ok.ru">
              </div>
              <div class="cms-social__item-edit">
                <button class="cms-btn cms-btn--mini">Сохранить</button>
              </div>
            </div>


            <div class="cms-social__item">
              <div class="cms-social__item-pic">
                <div class="cms-social__item-img">
                  <img src="" alt="">
                </div>
                <button class="cms-btn--edit"><img src="img/pencil.svg" alt=""></button>
              </div>
              <div class="cms-social__item-name">
                <input type="text" value="" placeholder="Название">
              </div>
              <div class="cms-social__item-link">
                <input type="text" value="" placeholder="Ссылка">
              </div>
              <div class="cms-social__item-edit">
                <button class="cms-btn cms-btn--mini">Добавить</button>
              </div>
            </div>

          </div>
          <!-- /cms-social__content -->

        </div>
        <!-- /cms-social -->


			</div>
			<!-- /cms-content -->

		</div>
		<!-- /cms-container -->

	</div>
	<!-- /cms -->

<?php include 'cms-footer.blade.php'; ?>
