	<section class="hero hero1">
		<div class="heroInner">
			<form name="Formverh" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="sendmail.php" id="Form1" onsubmit="return ValidateFormverh(this)" class="form form-main text-center p-s shadow-m">
				<input type="hidden" name="formid" value="form1">
				<h4 class="formTitle font-boblic white-text font-s uppercase">
					Оставьте заявку на бесплатный выезд мастера и получите скидку по акции!
				</h4>
				<div class="form-group">
					<input type="text" class="form-control" id="Editbox1" name="Name:" value="" placeholder="Ваше Имя?">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="Editbox2" name="Telephone:" value="" placeholder="Ваш Телефон?">
				</div>
				<button type="submit" id="Button1" name="Knopka" class="btn btn-legacy btn-form">Оставить заявку</button>
				<p class="px-s mt-2">
					<small class="white-text uppercase font-xxs font-boblic">
						Ваши данные не будут переданы третим лицам
					</small>
				</p>
			</form>
		</div>
	</section><!-- end of .hero -->