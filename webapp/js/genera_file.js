var numero = 0, proyec0 = 0, proyec = 0; //Esta es una variable de control para mantener nombres
var pro = 11; //Numero de proyectos - 1
var myarray=new Array(3)
myarray[1] = "Arquitectura Residencial"; myarray[2] = "Arquitectura Comercial"; myarray[3] = "Arquitectura Pública"; myarray[4] = "Interiorismo Residencial";
myarray[5] = "Interiorismo Comercial"; myarray[6] = "Interiorismo de Oficinas";
var num=new Array();
//Esta es una variable para el control del numero de filas (Max 7)
num[0] = 6; num[1] = 6; num[2] = 6; num[3] = 6; num[4] = 6; num[5] = 6; num[6] = 6; 
num[7] = 6; num[8] = 6; num[9] = 6; num[10] = 6; num[11] = 6; num[12] = 6;
//diferentes de cada campo creado dinamicamente.
//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
function addFile(val) {
   if(num[val]){
  //Creamos un nuevo div para que contenga el nuevo campo
	 var nDiv = document.createElement('div');
  //este es el id de la div, aqui la utilidad de la variable numero
  //nos permite darle un id unico
	 nDiv.id = 'file' + (++numero);  
	 var nCampo = document.createElement('input');//creamos el input para el formulario:
  //le damos un nombre, es importante que lo nombren como vector, pues todos los campos
  //compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
	 nCampo.name = 'fotos'+val+'[]';  
	 nCampo.type = 'file';//Establecemos el tipo de campo
	 nCampo.className = 'required';//Establecemos la clase para el link
  //otro
	 var esp = document.createTextNode(' ');  
	 var a = document.createElement('a');//Ahora creamos un link para poder eliminar un campo que ya no deseemos
	 a.name = nDiv.id;//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
	 a.href = val;//Este link no debe ir a ningun lado
	 a.onclick = elimFile;//Establecemos que dispare esta funcion en click
	 a.className = 'link_file';//Establecemos la clase para el link  
	 a.innerHTML = 'Eliminar';//Con esto ponemos el texto del link
  //campo activo oculto
  	 /*nOcult = document.createElement('input');//creamos el input hidden
	 nOcult.name = 'act'+val+'[]';//le ponemos el nombre
	 nOcult.type = 'checkbox';//Establecemos el tipo de campo
	 nOcult.value = 1;//Establecemos la clase para el link*/
  //primero usamos la función appendChild para adicionar el campo file nuevo
	 nDiv.appendChild(nCampo);
  //incluimos incluimos el espacio en blanco entre file y txt
	 nDiv.appendChild(esp);
  //Adicionamos el Link
	 nDiv.appendChild(a);
  //Adicionamos el oculto
  	 //nDiv.appendChild(nOcult);
  //Ahora si recuerdan, en el html hay una div cuyo id es 'adjuntos', bien
  //con esta función obtenemos una referencia a ella para usar de nuevo appendChild
  //y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
	 var container = document.getElementById('files' + (val));
	 container.appendChild(nDiv);
	 num[val]--;
   }
}
function addProyect(){
	if(proyec0 < pro){
	//Creamos un nuevo div para que contenga el nuevo campo
	   var nDiv = document.createElement('div');
	//este es el id de la div, proyec nos permite darle un id unico
	   nDiv.id = 'proyecto' + (++proyec0);
	//Creamos el p q contiene a todo
	   var p0 = document.createElement('p');
	//Creamos el label
	   var label = document.createElement('LABEL');
	//Texto para el label
	   var txt = document.createTextNode('Proyecto ' + (proyec0 + 1));
	   label.appendChild(txt);
	
	   var br0 = document.createElement('br');//Creamos los Br
	   var br1 = document.createElement('br');
	   var br2 = document.createElement('br');
	   var br3 = document.createElement('br');
	   var br4 = document.createElement('br');
	   var br5 = document.createElement('br');
	   var br6 = document.createElement('br');
	   
	   var spanTiOb = document.createElement('span');//span que contine titulo obra
	   var txt_TiOb = document.createTextNode('Título de la obra:');
	   spanTiOb.appendChild(txt_TiOb);
	   
	   var nCampoTi = document.createElement('input');//creamos el input para el p
	   nCampoTi.name = 'tit'+proyec0;
	   nCampoTi.id = 'tit'+proyec0;
	   nCampoTi.type = 'text';//Establecemos el tipo de campo	
	   nCampoTi.className = 'text required';//Establecemos la clase para el link
	   
	   var label_cat = document.createElement('LABEL');//label categoria
	   var txt_cat = document.createTextNode('Categoría');//texto label categoria
	   var cate = document.createElement('select');
	   cate.name = "categoria"+(proyec0);
	   cate.className = "text required";
	   for (i=1; i<7; i++) {
		 opt = document.createElement('option');
		 opt.value = i;
		 opt.innerHTML = myarray[i];
		 cate.appendChild(opt);
	   }
	   label_cat.appendChild(txt_cat);
	   label_cat.appendChild(br0);
	   label_cat.appendChild(cate);
	   var txt_o = document.createTextNode('Breve descripción de la obra:');
	   nCampoDes = document.createElement('textarea');//creamos el input para el p
	   nCampoDes.name = 'desc'+proyec0;
	   nCampoDes.className = 'text required';//Establecemos la clase para el link
	   	   
	   //Los Files
	   var nSpanFil = document.createElement('span');//Creamos un div para que contenga los files
	   nSpanFil.id = 'files' + (proyec0);//id de la div, proyec nos permite darle un id unico	
	   var nDivFilTitl = document.createElement('div');//div titulo para conten de fotos
	   txtFilTitl = document.createTextNode('Agregue las Fotos de la obra:');//Texto del titulo para conten de fotos
	   nDivFilTitl.appendChild(txtFilTitl);
	   nSpanFil.appendChild(nDivFilTitl);
	   var nDivCon = document.createElement('div');//Creamos un div para que contenga el nuevo campo	
	   var nCampo = document.createElement('input');//creamos el input para el formulario
	//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
	//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
	   nCampo.name = 'fotos'+proyec0+'[]';	
	   nCampo.type = 'file';//Establecemos el tipo de campo	
	   nCampo.className = 'required';//Establecemos la clase para el link
	   nDivCon.appendChild(nCampo);
	   nSpanFil.appendChild(nDivCon);
	   //El add Files
	   var nDivAddFile = document.createElement('div');//Div para agregar campos
	   nDivAddFile.align = 'right';
	   var a = document.createElement('a');
	   a.className = 'link_file';
	   a.id = proyec0;
	   a.onclick = add;
	   a.appendChild(document.createTextNode('Subir otro archivo'));
	   nDivAddFile.appendChild(a);
	   
	//usamos appendChild para adicionar elementos al contenedor
	   p0.appendChild(label);
	   p0.appendChild(br6);
	   p0.appendChild(spanTiOb);	   
	   p0.appendChild(nCampoTi);	   
	   p0.appendChild(br1);	   
	   p0.appendChild(label_cat);	   
	   p0.appendChild(br2);
	   p0.appendChild(br3);
	   p0.appendChild(br4);
	   p0.appendChild(txt_o);
	   p0.appendChild(br5);
	   p0.appendChild(nCampoDes);
	   p0.appendChild(nSpanFil);
	   p0.appendChild(nDivAddFile);
	   nDiv.appendChild(p0);
	//Ahora si recuerdan, en el html hay una div cuyo id es 'proyectos', bien
	//con esta función obtenemos una referencia a ella para usar de nuevo appendChild
	//y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
	   var container = document.getElementById('proyectos');
	   container.appendChild(nDiv);
	}
}
function addProyect2(val){
	if(proyec==0){proyec = val;}
	if(proyec < pro){
	   var u = proyec;
	//Creamos un nuevo div para que contenga el nuevo campo
	   var nDiv = document.createElement('div');
	//este es el id de la div, proyec nos permite darle un id unico
	   nDiv.id = 'proyecto' + (proyec);
	//Creamos el p q contiene a todo
	   var p0 = document.createElement('p');
	//Creamos el label
	   var label = document.createElement('LABEL');
	//Texto para el label
	   var txt = document.createTextNode('Proyecto ' + (++u));
	   label.appendChild(txt);
	
	   var br0 = document.createElement('br');//Creamos los Br
	   var br1 = document.createElement('br');
	   var br2 = document.createElement('br');
	   var br3 = document.createElement('br');
	   var br4 = document.createElement('br');
	   var br5 = document.createElement('br');
	   var br6 = document.createElement('br');
	   
	   var spanTiOb = document.createElement('span');//span que contine titulo obra
	   var txt_TiOb = document.createTextNode('Título de la obra:');
	   spanTiOb.appendChild(txt_TiOb);
	   
	   var nCampoTi = document.createElement('input');//creamos el input para el p
	   nCampoTi.name = 'tit'+proyec;
	   nCampoTi.id = 'tit'+proyec;
	   nCampoTi.type = 'text';//Establecemos el tipo de campo	
	   nCampoTi.className = 'text required';//Establecemos la clase para el link
	   
	   var label_cat = document.createElement('LABEL');//label categoria
	   var txt_cat = document.createTextNode('Categoría');//texto label categoria
	   var cate = document.createElement('select');
	   cate.name = "categoria"+(proyec);
	   cate.className = "text required";
	   for (i=1; i<7; i++) {
		 opt = document.createElement('option');
		 opt.value = i;
		 opt.innerHTML = myarray[i];
		 cate.appendChild(opt);
	   }
	   label_cat.appendChild(txt_cat);
	   label_cat.appendChild(br0);
	   label_cat.appendChild(cate);
	   var txt_o = document.createTextNode('Breve descripción de la obra:');
	   var nCampoDes = document.createElement('textarea');//creamos el input para el p
	   nCampoDes.name = 'desc'+proyec;
	   nCampoDes.className = 'text required';//Establecemos la clase para el link
	   	   
	   //Los Files
	   var nSpanFil = document.createElement('span');//Creamos un div para que contenga los files
	   nSpanFil.id = 'files' + (proyec);//id de la div, proyec nos permite darle un id unico	
	   var nDivFilTitl = document.createElement('div');//div titulo para conten de fotos
	   var txtFilTitl = document.createTextNode('Agregue las Fotos de la obra:');//Texto del titulo para conten de fotos
	   nDivFilTitl.appendChild(txtFilTitl);
	   nSpanFil.appendChild(nDivFilTitl);
	   var nDivCon = document.createElement('div');//Creamos un div para que contenga el nuevo campo	
	   var nCampo = document.createElement('input');//creamos el input para el formulario
	//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
	//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
	   nCampo.name = 'fotos'+proyec+'[]';	
	   nCampo.type = 'file';//Establecemos el tipo de campo	
	   nCampo.className = 'required';//Establecemos la clase para el link
	   nDivCon.appendChild(nCampo);
	   nSpanFil.appendChild(nDivCon);
	   //El add Files
	   var nDivAddFile = document.createElement('div');//Div para agregar campos
	   nDivAddFile.align = 'right';
	   var a = document.createElement('a');
	   a.className = 'link_file';
	   a.id = proyec;
	   a.onclick = add;
	   a.appendChild(document.createTextNode('Subir otro archivo'));
	   nDivAddFile.appendChild(a);
	   
	//usamos appendChild para adicionar elementos al contenedor
	   p0.appendChild(label);
	   p0.appendChild(br6);
	   p0.appendChild(spanTiOb);	   
	   p0.appendChild(nCampoTi);	   
	   p0.appendChild(br1);	   
	   p0.appendChild(label_cat);	   
	   p0.appendChild(br2);
	   p0.appendChild(br3);
	   p0.appendChild(br4);
	   p0.appendChild(txt_o);
	   p0.appendChild(br5);
	   p0.appendChild(nCampoDes);
	   p0.appendChild(nSpanFil);
	   p0.appendChild(nDivAddFile);
	   nDiv.appendChild(p0);
	//Ahora si recuerdan, en el html hay una div cuyo id es 'proyectos', bien
	//con esta función obtenemos una referencia a ella para usar de nuevo appendChild
	//y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
	   var container = document.getElementById('proyectos');
	   container.appendChild(nDiv);
	   proyec++;
	}
}
//para agregar proyectos
function add(evt){ 
	evt = evento(evt);
	obj = rObj(evt);
	addFile(obj.id);
	return false;
}
//con esta función eliminamos el campo cuyo link de eliminación sea presionado
function elimFile(evt){
   var evt = evento(evt);
   var nCampo = rObj(evt);
   var data = nCampo.href.split("/");
   var div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
   num[data[data.length-1]]++;
   return false;
}
function elimProyect(){
   if(proyec){
	 var div = document.getElementById('proyecto' + (proyec));
	 div.parentNode.removeChild(div);
	 proyec--;
   }
   return false;
}
function evento(evt) { //esta funcion nos devuelve el tipo de evento disparado
   return (!evt) ? event : evt;
}
//con esta función recuperamos una instancia del objeto que disparo el evento
function rObj(evt) {
   return evt.srcElement ? evt.srcElement : evt.target;
}