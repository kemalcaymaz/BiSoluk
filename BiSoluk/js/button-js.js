
/*This function is written to open "Destek ol" window and supply that when a user click to "Destek Ol" button for an item,
it will write its name automatically to form in opened window.
 */
function destek_ol_buton(e){
	var pencere = document.getElementsByClassName("destek-ol-pencere")[0];
	pencere.style.display = "block";
	var text1 = e.parentElement.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
	pencere.getElementsByTagName("td")[1].getElementsByTagName("input")[0].value = "Seçilen ürün: "+text1;
	}
/*This function is written to close the "Destek Ol" form window.*/
function destek_ol_kapat(){
	var pencere = document.getElementsByClassName("destek-ol-pencere")[0];
	pencere.style.display = "none";
}