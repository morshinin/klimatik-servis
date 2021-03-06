<?php $text = "кондиционера";
if (isset($_GET['utm_term'])) {
	$utm_term = $_GET['utm_term'];
}
?>
<?php include('header.php'); ?>
	<?php if (!empty($utm_term)) {
					if ($utm_term == 'holod') {
						include 'inc/pageHeader/pageHeader2.php';
						include 'inc/hero2.php';
					} elseif ($utm_term == 'vkluchaet') {
						include 'inc/pageHeader/pageHeader1.php';
						include 'inc/hero1.php';
					}
					
				} else {
					include 'inc/pageHeader/pageHeader1.php';
					include 'inc/hero1.php';
					
				}
	 ?>
	<section class="benefits">
		<div class="benefitsInner">
			<div class="cardBenefits">
				<div class="cardBenefitsHeader">1 час</div>
				<p class="cardBenefitsBody">
					Срочный выезда всего за 1 час и никаких переплат
				</p>
			</div>
			<div class="cardBenefits">
				<div class="cardBenefitsHeader">95%</div>
				<p class="cardBenefitsBody">
					Случаях мастер<br>приедет с необходимой<br>запчастью и выполнит<br>ремонт при первом визите
				</p>
			</div>
			<div class="cardBenefits">
				<div class="cardBenefitsHeader">от 3 лет</div>
				<p class="cardBenefitsBody">
					Гарантия на все<br>работы +<br>постгарантийное<br>обслуживание
				</p>
			</div>
			<div class="cardBenefits">
				<div class="cardBenefitsHeader">750</div>
				<p class="cardBenefitsBody">
					Отремонтировано<br>бытовой техники за год
				</p>
			</div>
			<div class="cardBenefits">
				<div class="cardBenefitsHeader">от 5 лет</div>
				<p class="cardBenefitsBody">
					Опыт работы<br>наших мастеров
				</p>
			</div>
		</div>
	</section>
	<section class="cta1">
		<div class="cta1Inner">
			<div class="cta1Col1">
				<img class="cta1Image img-responsive" src="img/conditioner.jpg" alt="Фото кондиционера" class="img-responsive">
				<p class="text-center">
					<a data-fancybox data-src="#modal1" href="javascript:;" class="btn btn-legacy btn-accent">Заказать ремонт</a>
				</p>
			</div>
			<div class="cta1ListWrapper">
				<ul class="cta1List">
					<li class="cta1ListItem">
						- Загрязнение фильтров кондиционера;
					</li>
					<li class="cta1ListItem">
						- Неисправность дренажной системы;
					</li>
					<li class="cta1ListItem">
						- Загрязнение радиатора конденсатора;
					</li>
					<li class="cta1ListItem">
						- Неисправность терморезисторов;
					</li>
					<li class="cta1ListItem">
						- Короткое замыкание компрессора;
					</li>
					<li class="cta1ListItem">
						- Неполадки пульта управления.
					</li> 
				</ul>
			</div>
		</div>
	</section>
	<section class="guarantee">
		<h2 class="h2 text-center">Наши гарантии</h2>
		<div class="guaranteeInner">
			<div class="cardGuarantee">
				<div class="cardGuaranteeHeader">
					<img src="img/gribbon.png" alt="">
				</div>
				<div class="cardGuaranteeBody">
					<h3 class="cardGuaranteeTitle">
						Качество
					</h3>
					<p class="cardGuaranteeCopy">
						До 3 лет гарантии на запчасти и работы. Мастера с опытом от 5 лет. Запчасти высокой надежности и длительным сроком службы.
					</p>
				</div>
			</div>
			<div class="cardGuarantee">
				<div class="cardGuaranteeHeader">
					<img src="img/handshake.png" alt="">
				</div>
				<div class="cardGuaranteeBody">
					<h3 class="cardGuaranteeTitle">
						Честность
					</h3>
					<p class="cardGuaranteeCopy">
						После диагностики вам скажут, стоит ли заменить те или иные запчасти или же лучше сразу купить новую технику.
					</p>
				</div>
			</div>
			<div class="cardGuarantee">
				<div class="cardGuaranteeHeader">
					<img src="img/mop.png" alt="">
				</div>
				<div class="cardGuaranteeBody">
					<h3 class="cardGuaranteeTitle">
						Чистота
					</h3>
					<p class="cardGuaranteeCopy">
						Наши мастера уберут всю грязь, а также старые детали после ремонта. Так что Вам не придется после мастера приводить все в порядок.
					</p>
				</div>
			</div>
			<div class="cardGuarantee">
				<div class="cardGuaranteeHeader">
					<img src="img/clock.png" alt="">
				</div>
				<div class="cardGuaranteeBody">
					<h3 class="cardGuaranteeTitle">
						Сроки
					</h3>
					<p class="cardGuaranteeCopy">
						Собственная служба логистики обеспечивает приезд мастера точно в срок. В нашем сервисе более 30 квалифицированных мастеров.
					</p>
				</div>
			</div>
			<div class="cardGuarantee">
				<div class="cardGuaranteeHeader">
					<img src="img/docs.png" alt="">
				</div>
				<div class="cardGuaranteeBody">
					<h3 class="cardGuaranteeTitle">
						Документация
					</h3>
					<p class="cardGuaranteeCopy">
						После проведения работ, вы получаете бланк строгой отчетности БСО-1, на основании которого можете обратиться к нам, в случае возникновения гарантийного случая.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="howWeWork">
		<h2 class="h2">Как мы работаем</h2>
		<div class="howWeWorkInner">
			<div class="cardHowWeWork">
				<div class="cardHowWeWorkHeader">
					<img src="img/pen.png" alt="">
				</div>
				<div class="cardHowWeWorkBody">
					<h3 class="cardHowWeWorkTitle">Заказ</h3>
					<p class="cardHowWeWorkCopy">
						Вы делаете заказ<br>по телефону или<br>онлайн через наш сайт.
					</p>
				</div>
			</div>
			<div class="cardHowWeWork">
				<div class="cardHowWeWorkHeader">
					<img src="img/gear.png" alt="">
				</div>
				<div class="cardHowWeWorkBody">
					<h3 class="cardHowWeWorkTitle">Диагностика</h3>
					<p class="cardHowWeWorkCopy">
						Мастер приезжает к<br>Вам и производит<br>диагностику.
					</p>
				</div>
			</div>
			<div class="cardHowWeWork">
				<div class="cardHowWeWorkHeader">
					<img src="img/tag.png" alt="">
				</div>
				<div class="cardHowWeWorkBody">
					<h3 class="cardHowWeWorkTitle">Стоимость</h3>
					<p class="cardHowWeWorkCopy">
						Если Вас устраивает<br>стоимость услуг,<br>мы приступаем к работам.
					</p>
				</div>
			</div>
			<div class="cardHowWeWork">
				<div class="cardHowWeWorkHeader">
					<img src="img/powerBtn.png" alt="">
				</div>
				<div class="cardHowWeWorkBody">
					<h3 class="cardHowWeWorkTitle">Исправная техника</h3>
					<p class="cardHowWeWorkCopy">
						Мастер приезжает к<br>Вам и производит<br>диагностику.
					</p>
				</div>
			</div>
			<div class="cardHowWeWork">
				<div class="cardHowWeWorkHeader">
					<img src="img/smile.png" alt="">
				</div>
				<div class="cardHowWeWorkBody">
					<h3 class="cardHowWeWorkTitle">Диагностика</h3>
					<p class="cardHowWeWorkCopy">
						Мастер приезжает к<br>Вам и производит<br>диагностику.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="cta2">
		<div class="cta2Inner">
			<div class="offer">
				<div class="offerCircle offerCircle1">
					<h3 class="offerCircle1Title">Акция</h3>
					<p class="offerCircleCopy offerCircle1Copy">
						только сегодня к каждой заявке
					</p>
				</div>
				<div class="offerCircle offerCircle2">
					<p class="offerCircle2Subtitle">20%</p>
					<p class="offerCircleCopy offerCircle2Copy">
						скидка <br>на все услуги + подарок
					</p>
				</div>
				<div class="offerMessage">
					Ремонтируем абсолютно все бренды и модели!
				</div>
			</div>
			<div class="cta2FormWrapper">
				<form 
					name="Formseredina" 
					method="post" 
					enctype="multipart/form-data" 
					accept-charset="UTF-8" 
					action="<?php echo basename(__FILE__); ?>" 
					id="Form2" 
					onsubmit="return ValidateFormseredina(this)" 
					class="form form-main"
				>
					<input type="hidden" name="formid" value="form2">
					<h4 class="formTitle font-boblic white-text font-s uppercase">
						Оставьте заявку на бесплатный выезд мастера и получите скидку по акции!
					</h4>
					<div class="form-group">
						<input type="text" class="form-control" id="Editbox3" name="Name:" value="" placeholder="Ваше Имя?">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Editbox4" name="Telephone:" value="" placeholder="Ваш Телефон?">
					</div>
					<button type="submit" id="Button2" name="Knopka" class="btn btn-legacy btn-form">Оставить заявку</button>
					<p class="px-s mt-2">
						<small class="white-text uppercase font-xxs font-boblic">
							Ваши данные не будут переданы третим лицам
						</small>
					</p>
				</form>
			</div>
			<!-- end of cta2FormWrapper -->
		</div>
	</section>
	<section class="advantages">
		<h2 class="h2 advantagesTitle hide-on-large">7 причин почему нас выбирают</h2>
		<div class="advantagesInner">
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advMoney.png" alt="">
				<p class="advantagesCopy">
					Цены ниже рыночных по сравнению с другими компаниями на 30%, за счёт собственного склада запчастей
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advClock.gif" alt="">
				<p class="advantagesCopy">
					Мы даем гарантию, что специалисты прибудут на объект в оговоренное время или же проведут работы со скидкой
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advCog.gif" alt="">
				<p class="advantagesCopy">
					Мы устанавливаем запчасти только высокой надежности и длительным сроком службы. Что позволяет давать гарантию до 3-х лет
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advPerson.gif" alt="">
				<p class="advantagesCopy">
					Квалифицированные специалисты с опытом более 5 лет, прошедшие полную аттестацию
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advTalk.gif" alt="">
				<p class="advantagesCopy">
					Наши мастера и менеджеры бесплатно проконсультируют и дадут рекомендации по использованию бытовой техники
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advPercent.gif" alt="">
				<p class="advantagesCopy">
					Скидки для пенсионеров и инвалидов. скидка при повторном обращении, приятные бонусы постоянным клиентам
				</p>
			</div>
			<div class="cardAdvantages">
				<img class="hide-on-large" src="img/advTools.gif" alt="">
				<p class="advantagesCopy">
					У наших мастеров профессиональные инструменты это напрямую влияет на скорость работ, качество и долговечность работы оборудования
				</p>
			</div>
		</div>
		<!-- end of .advantagesInner -->
	</section>
	<section class="services">
		<h2 class="h2">Ремонтируем и устанавливаем</h2>
		<div class="container">
			<div class="servicesRow">
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service8.png" alt="">
					<h3 class="cardServicesTitle">Кондиционеры</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service8.png" alt="">
					<h3 class="cardServicesTitle">Сплит-системы</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service4.png" alt="">
					<h3 class="cardServicesTitle">Холодильники</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service4.png" alt="">
					<h3 class="cardServicesTitle">Морозильники</h3>
				</div>
			</div>
<!-- 			<div class="servicesRow">
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service1.png" alt="">
					<h3 class="cardServicesTitle">Стиральные машины</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service2.png" alt="">
					<h3 class="cardServicesTitle">Сушильные машины</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service7.png" alt="">
					<h3 class="cardServicesTitle">Газовые и электроплиты</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service6.png" alt="">
					<h3 class="cardServicesTitle">Варочные панели</h3>
				</div>
				<div class="cardServices">
					<img class="cardServicesImage" src="img/service5.png" alt="">
					<h3 class="cardServicesTitle">Духовые шкафы</h3>
				</div>
			</div> -->
		</div>
	</section>
	<section class="testimonials">
		<h2 class="h2 text-center">Отзывы наших клиентов</h2>
		<div class="testimonialsInner">
			<div class="testimonialsRow space-around mb-3">
				<div class="cardTestimonials">
					<div class="cardTestimonialsHeader">
						<h3 class="cardTestimonialsTitle">Марина</h3>
						<img src="img/testimonialMarina.jpg" alt="" class="cardTestimonialsAvatar">
					</div>
					<div class="cardTestimonialsCopy">
						Здравствуйте хочу поблагодарить мастера по имени Алексей, который ремонтировал мою стиральную машину "Bosh", которая перестала греть воду. Буду рекомендовать ваш сервис друзьям.
					</div>
				</div>
				<div class="cardTestimonials">
					<div class="cardTestimonialsHeader">
						<h3 class="cardTestimonialsTitle">Дмитрий</h3>
						<img src="img/testimonialDmitry.jpg" alt="" class="cardTestimonialsAvatar">
					</div>
					<div class="cardTestimonialsCopy">
						Часто сомневаюсь, когда говорят, что мастер приедет в течение часа. В случае с вашим сервисом сомнения отпали! Мастер приехал и починил быстро и качественно!
					</div>
				</div>
			</div>
			<div class="testimonialsRow space-around mb-3">
				<div class="cardTestimonials">
					<div class="cardTestimonialsHeader">
						<h3 class="cardTestimonialsTitle">Алла</h3>
						<img src="img/testimonialAlla.jpg" alt="" class="cardTestimonialsAvatar">
					</div>
					<div class="cardTestimonialsCopy">
						Никогда не оставлял отзывы. Но решил, что уж очень хочется, чтоб другие тоже знали. Бесплатный выезд мастера и проделанная работа за 30 минут говорят сами за себя!
					</div>
				</div>
				<div class="cardTestimonials">
					<div class="cardTestimonialsHeader">
						<h3 class="cardTestimonialsTitle">Кристина</h3>
						<img src="img/testimonialKristina.jpg" alt="" class="cardTestimonialsAvatar">
					</div>
					<div class="cardTestimonialsCopy">
						Подруга посоветовала обратиться в ваш сервис. Результатом довольна. Теперь сама буду советовать Ваш сервис.
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="cta3">
		<div class="cta3Inner">
			<div class="cta3Col">
				<h2 class="h2">Остались вопросы?<br>Звоните!</h2>
			</div>
			<div class="cta3Col">
				<form name="Formniz" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="Form3" onsubmit="return ValidateFormniz(this)" class="form form-vintage text-center p-s shadow-m">
					<input type="hidden" name="formid" value="form3">
					<h4 class="formTitle formTitle-vintage font-boblic white-text font-s uppercase">
						Оставьте заявку на бесплатный выезд мастера и получите скидку по акции!
					</h4>
					<div class="form-group">
						<input type="text" class="form-control" id="Editbox5" name="Name:" value="" placeholder="Ваше Имя?">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="Editbox6" name="Telephone:" value="" placeholder="Ваш Телефон?">
					</div>
					<button type="submit" id="Button3" name="Knopka" class="btn btn-legacy btn-form">Оставить заявку</button>
					<p class="px-s mt-2">
						<small class="red-text uppercase font-xxs font-boblic">
							Ваши данные не будут переданы третим лицам
						</small>
					</p>
				</form>
			</div>
		</div>
	</section>
<?php include 'footer.php'; ?>