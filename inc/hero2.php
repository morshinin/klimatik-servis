	<section class="hero hero2">
		<div class="heroInner">
			<div class="hero2Descriptor">
				<h4 class="formTitle hero2Title font-boblic white-text font-s uppercase">
					Не дует холод?
				</h4>
				<p class="hero2Subtitle">
					<span class="hero2SubtitleText">
						Устраним все неполадки. От вас только
					</span><br>
					<span class="hero2SubtitleText">
						заполнить форму заявки.
					</span>
				</p>
				<form name="Formverh" 
							method="post" 
							enctype="multipart/form-data" 
							accept-charset="UTF-8" 
							action="sendmail.php" 
							id="Form1" 
							onsubmit="return ValidateFormverh(this)" 
							class="form hero2Form"
				>
					<input type="hidden" name="formid" value="form1">

					<div class="form-group form-group-new">
						<input 
							type="text" 
							id="Editbox1" 
							name="Name:" 
							value="" 
							placeholder="Ваше Имя?"
							class="form-control form-control-new" 
						>
					</div>
					<div class="form-group form-group-new">
						<input 
							type="text" 
							id="Editbox2" 
							name="Telephone:" 
							value="" 
							placeholder="Ваш Телефон?"
							class="form-control form-control-new" 
						>
					</div>
					<button type="submit" id="Button1" name="Knopka" class="btn btn-new">Оставить заявку</button>
				</form>
			</div><!-- end of hero2Descriptor -->
		</div><!-- end of .heroInner -->
	</section><!-- end of .hero -->