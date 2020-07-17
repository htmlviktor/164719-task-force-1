<?php
/**
 * @var yii\web\View $this
 * @var $detail = []
 */
use yii\helpers\Url;
?>
<main class="page-main">
	<div class="main-container page-container">
		<section class="content-view">
			<div class="content-view__card">
				<div class="content-view__card-wrapper">
					<div class="content-view__header">
						<div class="content-view__headline">
							<h1><?= $detail->name?></h1>
							<span>Размещено в категории
                                    <a href="#" class="link-regular"><?= $detail->category->name?></a>
                                   <?= Yii::$app->formatter->asRelativeTime(strtotime('-3 hour', strtotime($detail->created_at))) ?></span>
						</div>
						<b class="new-task__price new-task__price--clean content-view-price"><?= $detail->price;?><b> ₽</b></b>
						<div class="new-task__icon new-task__icon--clean content-view-icon"></div>
					</div>
					<div class="content-view__description">
						<h3 class="content-view__h3">Общее описание</h3>
						<p>
							<?= $detail->description?>
						</p>
					</div>
					<div class="content-view__attach">
						<h3 class="content-view__h3">Вложения</h3>
						<?php foreach ($detail->attachments as $item):?>

						<a href="<?= Url::to($item->url); ?>" class="link-regular"><?= $item->name;?></a>

						<?php endforeach; ?>
					</div>
					<div class="content-view__location">
						<h3 class="content-view__h3">Расположение</h3>
						<div class="content-view__location-wrapper">
							<div class="content-view__map">
								<a href="#"><img src="./img/map.jpg" width="361" height="292"
										alt="Москва, Новый арбат, 23 к. 1"></a>
							</div>
							<div class="content-view__address">
								<span class="address__town">Москва</span><br>
								<span>Новый арбат, 23 к. 1</span>
								<p>Вход под арку, код домофона 1122</p>
							</div>
						</div>
					</div>
				</div>
				<div class="content-view__action-buttons">
					<button class=" button button__big-color response-button open-modal"
						type="button" data-for="response-form">Откликнуться</button>
					<button class="button button__big-color refusal-button open-modal"
						type="button" data-for="refuse-form">Отказаться</button>
					<button class="button button__big-color request-button open-modal"
						type="button" data-for="complete-form">Завершить</button>
				</div>
			</div>
			<div class="content-view__feedback">
				<h2>Отклики <span>(2)</span></h2>
				<div class="content-view__feedback-wrapper">
					<div class="content-view__feedback-card">
						<div class="feedback-card__top">
							<a href="#"><img src="./img/man-glasses.jpg" width="55" height="55"></a>
							<div class="feedback-card__top--name">
								<p><a href="#" class="link-regular">Астахов Павел</a></p>
								<span></span><span></span><span></span><span></span><span class="star-disabled"></span>
								<b>4.25</b>
							</div>
							<span class="new-task__time">25 минут назад</span>
						</div>
						<div class="feedback-card__content">
							<p>
								Могу сделать всё в лучшем виде. У меня есть необходимый опыт и инструменты.
							</p>
							<span>1500 ₽</span>
						</div>
						<div class="feedback-card__actions">
							<a class="button__small-color request-button button"
								type="button">Подтвердить</a>
							<a class="button__small-color refusal-button button"
								type="button">Отказать</a>
						</div>
					</div>
					<div class="content-view__feedback-card">
						<div class="feedback-card__top">
							<a href="#"><img src="./img/man-blond.jpg" width="55" height="55"></a>
							<div class="feedback-card__top--name">
								<p class="link-name"><a href="#" class="link-regular">Богатырев Дмитрий</a></p>
								<span></span><span></span><span></span><span></span><span class="star-disabled"></span>
								<b>4.25</b>
							</div>
							<span class="new-task__time">25 минут назад</span>
						</div>
						<div class="feedback-card__content">
							<p>
								Примусь за выполнение задания в течение часа, сделаю быстро и качественно.
							</p>
							<span>1500 ₽</span>
						</div>
						<div class="feedback-card__actions">
							<a class="button__small-color request-button button"
								type="button">Подтвердить</a>
							<a class="button__small-color refusal-button button"
								type="button">Отказать</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="connect-desk">
			<div class="connect-desk__profile-mini">
				<div class="profile-mini__wrapper">
					<h3>Заказчик</h3>
					<div class="profile-mini__top">
						<img src="./img/man-brune.jpg" width="62" height="62" alt="Аватар заказчика">
						<div class="profile-mini__name five-stars__rate">
							<p>Николай Демченко</p>
						</div>
					</div>
					<p class="info-customer"><span>12 заданий</span><span class="last-">2 года на сайте</span></p>
					<a href="#" class="link-regular">Смотреть профиль</a>
				</div>
			</div>
			<div id="chat-container">
				<!--                    добавьте сюда атрибут task с указанием в нем id текущего задания-->
				<chat class="connect-desk__chat"></chat>
			</div>
		</section>
	</div>
</main>