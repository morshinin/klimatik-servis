const cta1Btn = document.getElementById('cta1Btn'),
      modal1 = document.getElementById('modal1')

const checkClicks = function(e) {
   switch (e.target.id) {
      case 'cta1Btn':
         e.preventDefault()
         modal1.classList.toggle('display-none')
         break
      default:
         break
   }
}

window.addEventListener('click', checkClicks)

function ValidateFormverh(theForm)
{
   var regexp;
   if (theForm.Editbox1.value == "")
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 2)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 25)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox2.value == "")
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length < 7)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length > 14)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox2.focus();
      return false;
   }
   return true;
}
function ValidateFormseredina(theForm)
{
   var regexp;
   if (theForm.Editbox3.value == "")
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox3.value.length < 2)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox3.value.length > 25)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox3.focus();
      return false;
   }
   if (theForm.Editbox4.value == "")
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length < 7)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox4.focus();
      return false;
   }
   if (theForm.Editbox4.value.length > 14)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox4.focus();
      return false;
   }
   return true;
}
function ValidateFormniz(theForm)
{
   var regexp;
   if (theForm.Editbox5.value == "")
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox5.value.length < 2)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox5.value.length > 25)
   {
      alert("Введите Ваше Имя!");
      theForm.Editbox5.focus();
      return false;
   }
   if (theForm.Editbox6.value == "")
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length < 7)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length > 14)
   {
      alert("Введите Ваш телефон!");
      theForm.Editbox6.focus();
      return false;
   }
   return true;
}
