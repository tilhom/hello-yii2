<?php 
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\components\AlertWidget;
/**
 * @var $content string
 */
AppAsset::register($this);

 ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset='<?= Yii::$app->charset ?>'>
	<title><?= Yii::$app->name ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
	<?php 
		NavBar::begin(
			['brandLabel'=>'Тестовое приложение',]
			);
		ActiveForm::begin(
				[
					'action'=>['/найти'],
					'method'=>'get',
					'options'=>[
						'class'=>'navbar-form navbar-right',
					]
				]
			);
			echo "<div class='input-group input-group-sm'>";
			echo Html::input(
					'text',
					'search',
					'',
					[
						'Placeholder'=>'Найти..',
						'class'=>'form-control' 
					]


				);
			echo '<span class="input-group-btn">';
			echo Html::submitButton(
				'<span class="glyphicon glyphicon-search"> </span>',
				[
					'class'=>'btn btn-success',
					'onClick'=>'window.location.href=this.form.action + "-" + 
					this.form.search.value.replace(/[^\w\а-яё\А-ЯЁ]+/g,"_")+".html";return true;'
				]
				);
			echo "</span></div>";

		ActiveForm::end();

		echo Nav::widget([
				'items'=>[
					[
						'label'=>'Главная <span class="glyphicon glyphicon-home"></span> ',
						'url'=>['main/index']
					],
					[
						'label'=>'Из коробки <span class="glyphicon glyphicon-inbox"></span> ',
						'items'=>
						[
							'<li class="dropdown-header">Расширения</span>',
							'<li class="divider"></li>',
							[
								'label'=>'Перейти к просмотру..',
								'url'=>['widget-test/index']
							]
						]
					],
					'<li> 
					<a data-toggle="modal" data-target="#modal" style="cursor:pointer">
					О проекте <span class="glyphicon glyphicon-question-sign"></span>
					</a>
					</li>',
				[
					'label'=>'Регистрация',
					'url'=>['main/reg']
				],
				[
					'label'=>'Войти',
					'url'=>['main/login']
				],
			],
				'encodeLabels'=>false,
				'options'=>[
					'class'=>'navbar-nav navbar-right'
					]
			]);

		Modal::begin([
		    'header' => '<h2>Saflor</h2>',
		    'id'=>'modal',
		]);

		echo 'Проект для продвинутых PHP разработчиков...';

		Modal::end();

		NavBar::end();
	 ?>

	<div class="container">
		<?= AlertWidget::widget();?>
		<?= $content ?>
	</div>
</div>
<footer class="footer">
	<div class="container">
		<span class="badge">
			<span class="gliphicon gliphicon-copyright-mark"></span>Saflor
			<?= date('Y')?>
		</span>
	</div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>