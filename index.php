<?php require_once("webapp/clases/database/database.class.php");?>
<?php //require_once("webapp/web/clases/estados.class.php");?>
<?php //require_once("webapp/web/controlador/estados.php");?>
<?php
$title = "REX SUPPLIES LLC  | Cargas aéreas y marítimas a nivel mundial con Traemetodo";

include_once('includes/header.php'); 

?>
<meta name="keywords" content="comprar por internet, compras online, comprarar en amazon, compra de repuestos, repuestos para autos, repuestos para yates, repuestos para lanchas, comprar equipos electronicos por internet, compras, envios a los estados unidos, " />
<style type="text/css">
<!--

.Estilo4 {font-size: 22px}
.Estilo5 {
	font-size: 20px;
	font-weight: bold;
}
.Estilo6 {font-size: 20px; }
.Estilo10 {font-size: 13px; color: #333333; }td img {display: block;}td img {display: block;}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<body onLoad="MM_preloadImages('sections/secc1_r9_c9_s3.jpg','sections/secc1_r9_c9_s2.jpg','repuestos-para-autos/repuestos-para-autos_2.jpg','equipos-electronicos/equipos-electronicos_2.jpg','repuestos-yates-lanchas/repuestos-para-lanchas-yates_2.jpg','compartir_a_un_amigo/compartir_r4_c8_s3.jpg','compartir_a_un_amigo/compartir_r4_c8_s2.jpg')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="right" bgcolor="#FFFFFF">&nbsp;</td>
	</tr>
	<tr>
        <td align="center" bgcolor="#FFFFFF"><table width="960" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="304" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="303">

                <!-- SECTIONS REPUESTOS PARA AUTOS -->
                <tr>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="5" height="1" id="undefined_2" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="20" height="1" id="undefined_2" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="232" height="1" id="undefined_2" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="46" height="1" id="undefined_2" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="1" height="1" id="undefined_2" /></td>
                </tr>
                <tr>
                  <td colspan="4" valign="top"><a href="repuestos-para-autos.php" target="_self" onMouseOver="MM_swapImage('Image138','','repuestos-para-autos/repuestos-para-autos_2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="repuestos-para-autos/repuestos-para-autos_r1_c1.jpg" alt="repuestos para autos" name="Image138" width="303" height="287" border="0" id="Image138" /></a></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="1" height="287" id="undefined_2" /></td>
                </tr>
                <tr>
                  <td rowspan="2"><img name="repuestosparaautos_r2_c1" src="repuestos-para-autos/repuestos-para-autos_r2_c1.jpg" width="5" height="38" id="repuestosparaautos_r2_c1" alt="" /></td>
                  <td colspan="2" style="text-align:center"><a href="#form3" class="inline cboxElement boton" target="_self"><span class="Estilo4">COTIZACIÓN DE REPUESTOS AUTOMOTRICES AQUÍ</span></a></td>
                  <td rowspan="2"><img src="repuestos-para-autos/repuestos-para-autos_r2_c4.jpg" alt="" name="repuestosparaautos_r2_c4" width="46" height="38" border="0" id="repuestosparaautos_r2_c4" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="1" height="30" id="undefined_2" /></td>
                </tr>
                <tr>
                  <td colspan="2"><img src="repuestos-para-autos/repuestos-para-autos_r3_c2.jpg" alt="" name="repuestosparaautos_r3_c2" width="252" height="8" border="0" id="repuestosparaautos_r3_c2" /></td>
                  <td><img src="repuestos-para-autos/spacer.gif" alt="" name="undefined_2" width="1" height="8" id="undefined_2" /></td>
                </tr>
            </table></td>
            <td width="625" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="351">

                <!-- SECTIONS EQUIPOS ELECTRONICOS EN GENERAL-->
                <tr>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="32" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="12" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="82" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="166" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="6" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="10" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="43" height="1" id="undefined_4" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="1" height="1" id="undefined_4" /></td>
                </tr>
                <tr>
                  <td colspan="7" valign="top"><a href="desde-eeuu.php" target="_self" onMouseOver="MM_swapImage('equipos','','equipos-electronicos/equipos-electronicos_2.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="equipos-electronicos/equipos-electronicos_r1_c1.jpg" alt="envios de carga aerea y maritima" name="equipos" width="351" height="287" border="0" id="equipos" /></a></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="1" height="287" id="undefined_4" /></td>
                </tr>
                <tr>
                  <td rowspan="2" colspan="2"><img src="equipos-electronicos/equipos-electronicos_r2_c1.jpg" alt="" name="equiposelectronicos_r2_c1" width="44" height="38" border="0" id="equiposelectronicos_r2_c1" /></td>
                  <td colspan="3"><div align="center"><a href="desde-eeuu.php" title="envios de carga aerea y maritima" target="_self" class="boton"><span class="Estilo4">ENVÍOS DE CARGA AÉREA Y MARÍTIMA</span></a></div></td>
                  <td rowspan="2" colspan="2"><img src="equipos-electronicos/equipos-electronicos_r2_c6.jpg" alt="" name="equiposelectronicos_r2_c6" width="53" height="38" border="0" id="equiposelectronicos_r2_c6" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="1" height="30" id="undefined_4" /></td>
                </tr>
                <tr>
                  <td colspan="3"><img name="equiposelectronicos_r3_c3" src="equipos-electronicos/equipos-electronicos_r3_c3.jpg" width="254" height="8" id="equiposelectronicos_r3_c3" alt="" /></td>
                  <td><img src="equipos-electronicos/spacer.gif" alt="" name="undefined_4" width="1" height="8" id="undefined_4" /></td>
                </tr>
            </table></td>
            <td width="31" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="326">

                <!-- SECTIONS REPUESTOS PARA YATES Y LANCHAS -->
                <tr>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="20" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="9" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="39" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="120" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="101" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="22" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="15" height="1" id="undefined_3" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="1" height="1" id="undefined_3" /></td>
                </tr>
                <tr>
                  <td colspan="7" valign="top"><a href="repuestos-para-yates.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('yates','','repuestos-yates-lanchas/repuestos-para-lanchas-yates_2.jpg',1)"><img src="repuestos-yates-lanchas/repuestos-para-lanchas-yates_r1_c1.jpg" alt="repuestos yates y lanchas" name="yates" width="326" height="287" border="0" id="yates" /></a></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="1" height="287" id="undefined_3" /></td>
                </tr>
                <tr>
                  <td rowspan="2" colspan="3"><img src="repuestos-yates-lanchas/repuestos-para-lanchas-yates_r2_c1.jpg" alt="" name="repuestosparalanchasyates_r2_c1" width="68" height="38" border="0" id="repuestosparalanchasyates_r2_c1" /></td>
                  <td colspan="4" style="text-align:center"><a href="#form2" class="inline cboxElement boton" target="_self"><span class="Estilo4">COTIZACIÓN DE REPUESTOS YATES Y LANCHAS AQUÍ</span></a></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="1" height="30" id="undefined_3" /></td>
                </tr>
                <tr>
                  <td colspan="4"><img src="repuestos-yates-lanchas/repuestos-para-lanchas-yates_r3_c4.jpg" alt="" name="repuestosparalanchasyates_r3_c4" width="258" height="8" border="0" id="repuestosparalanchasyates_r3_c4" /></td>
                  <td><img src="repuestos-yates-lanchas/spacer.gif" alt="" name="undefined_3" width="1" height="8" id="undefined_3" /></td>
                </tr>
            </table></td>
          </tr>
      </table>
        </td>
    </tr>
    <tr>
		<td align="center" bgcolor="#FFFFFF">
			<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" valign="top">
						<table width="960" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="center" valign="top">
									<table width="960" border="0" cellspacing="0" cellpadding="0">
										<tr>
										  <td align="center" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="960">

                                            <!-- SECTIONS 1 ESTRUCTURA -->
                                            <tr>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="5" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="252" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="49" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="12" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="29" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="70" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="12" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="105" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="18" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="43" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="6" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="10" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="4" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="34" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="3" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="12" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="36" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="75" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="38" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="108" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="22" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="14" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="1" id="undefined_5" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="1" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="25"><img name="secc1_r1_c1" src="sections/secc1_r1_c1.jpg" width="960" height="20" id="secc1_r1_c1" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="20" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td rowspan="9" colspan="4"><img name="boton1" src="sections/boton1.jpg" width="318" height="290" id="boton1" alt="" /></td>
                                              <td colspan="21"><img name="secc1_r2_c5" src="sections/secc1_r2_c5.jpg" width="642" height="17" id="secc1_r2_c5" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="17" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="11"><img name="secc1_r3_c5" src="sections/secc1_r3_c5.jpg" width="332" height="23" id="secc1_r3_c5" alt="" /></td>
                                              <td rowspan="2" colspan="5">
                                                  <a href="#form1" class="inline" target="_self"><img src="sections/secc1_r3_c16.jpg" alt="Registrarse en traemetodo" name="secc1_r3_c16" width="127" height="31" border="0" id="secc1_r3_c16" /></a>

                                                  
                                              </td>
                                              <td rowspan="3" colspan="5"><img name="secc1_r3_c21" src="sections/secc1_r3_c21.jpg" width="183" height="43" id="secc1_r3_c21" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="23" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="8" rowspan="4" valign="middle" background="sections/text1.jpg"><table width="282" height="20" border="0" align="right" cellpadding="0" cellspacing="0">
                                                <tbody>
                                                  <tr>
                                                    <td><p align="justify" class="Estilo6"><strong>ENVÍOS DESDE CUALQUIER CIUDAD 
                                                    DE LOS EEUU</strong></p></td>
                                                  </tr>
                                                  <tr>
                                                    <td>&nbsp;</td>
                                                  </tr>
                                                  <tr>
                                                    <td><span class="Estilo10">Envía tus paquetes  o equipajes desde cualquier lugar de los EEUU y desde la comodidad de tu ciudad o casa.</span></td>
                                                  </tr>
                                                </tbody>
                                              </table>                                              </td>
                                              <td rowspan="5" colspan="3"><img name="secc1_r4_c13" src="sections/secc1_r4_c13.jpg" width="39" height="214" id="secc1_r4_c13" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="8" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="5"><img name="secc1_r5_c16" src="sections/secc1_r5_c16.jpg" width="127" height="12" id="secc1_r5_c16" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="12" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td><img name="secc1_r6_c16" src="sections/secc1_r6_c16.jpg" width="1" height="111" id="secc1_r6_c16" alt="" /></td>
                                              <td colspan="2"><img name="enviarcarga" src="sections/enviar-carga.jpg" width="15" height="111" id="enviarcarga" alt="" /></td>
                                              <td colspan="3"><img name="secc1_r6_c19" src="sections/secc1_r6_c19.jpg" width="149" height="111" id="secc1_r6_c19" alt="" /></td>
                                              <td colspan="3"><img name="secc1_r6_c22" src="sections/secc1_r6_c22.jpg" width="144" height="111" id="secc1_r6_c22" alt="" /></td>
                                              <td rowspan="6"><img name="secc1_r6_c25" src="sections/secc1_r6_c25.jpg" width="1" height="248" id="secc1_r6_c25" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="111" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td rowspan="4" colspan="9"><img name="secc1_r7_c16" src="sections/secc1_r7_c16.jpg" width="309" height="119" id="secc1_r7_c16" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="76" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="8"><img name="secc1_r8_c5" src="sections/secc1_r8_c5.jpg" width="293" height="7" id="secc1_r8_c5" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="7" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td rowspan="3" colspan="4"><img name="secc1_r9_c5" src="sections/secc1_r9_c5.jpg" width="216" height="54" id="secc1_r9_c5" alt="" /></td>
                                              <td colspan="6"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','secc1_r9_c9','sections/secc1_r9_c9_s3.jpg',1);" onMouseOver="MM_nbGroup('over','secc1_r9_c9','sections/secc1_r9_c9_s2.jpg','sections/secc1_r9_c9_s3.jpg',1);" onMouseOut="MM_nbGroup('out');"><img src="sections/secc1_r9_c9.jpg" alt="videos traemetodo" name="secc1_r9_c9" width="82" height="29" border="0" id="secc1_r9_c9" /></a></td>
                                              <td rowspan="3"><img name="secc1_r9_c15" src="sections/secc1_r9_c15.jpg" width="34" height="54" id="secc1_r9_c15" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="29" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td rowspan="2" colspan="6"><img name="secc1_r10_c9" src="sections/secc1_r10_c9.jpg" width="82" height="25" id="secc1_r10_c9" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="7" id="undefined_5" /></td>
                                            </tr>
                                            <tr>
                                              <td colspan="4"><img name="secc1_r11_c1" src="sections/secc1_r11_c1.jpg" width="318" height="18" id="secc1_r11_c1" alt="" /></td>
                                              <td colspan="9"><img name="secc1_r11_c16" src="sections/secc1_r11_c16.jpg" width="309" height="18" id="secc1_r11_c16" alt="" /></td>
                                              <td><img src="sections/spacer.gif" alt="" name="undefined_5" width="1" height="18" id="undefined_5" /></td>
                                            </tr>
                                          </table></td>
										</tr>
									</table>
                                </td>
							</tr>
						</table>
                    </td>
				</tr>
			</table>
        </td>
	</tr>
	<tr>
		<td align="center" bgcolor="#FFFFFF">
			<table width="960" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="635" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="634">

					  <!-- SECTIONS 2 ESTRUCTURA-->
					  <tr>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="5" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="252" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="49" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="12" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="29" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="70" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="12" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="105" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="18" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="43" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="6" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="10" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="4" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="18" height="1" id="undefined_6" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="1" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="7" colspan="3"><img name="boton3" src="sections2/boton3.jpg" width="306" height="293" id="boton3" alt="" /></td>
					    <td colspan="12"><img name="secc3_r1_c4" src="sections2/secc3_r1_c4.jpg" width="328" height="21" id="secc3_r1_c4" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="21" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="15"><img name="secc3_r2_c4" src="sections2/secc3_r2_c4.jpg" width="12" height="611" id="secc3_r2_c4" alt="" /></td>
					    <td colspan="6" background="sections2/que-hacemos.jpg"><div align="center" class="Estilo6">
					      <div align="left"><strong>REPUESTOS</strong></div>
					    </div></td>
					    <td rowspan="4" colspan="5"><img name="secc3_r2_c11" src="sections2/secc3_r2_c11.jpg" width="39" height="234" id="secc3_r2_c11" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="37" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6"><img name="secc3_r3_c5" src="sections2/secc3_r3_c5.jpg" width="277" height="11" id="secc3_r3_c5" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="11" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6" valign="top" background="sections2/text2.jpg"><div align="justify" class="Estilo10">Necesita repuestos de las partes mecánicas, eléctrica o cualquier accesorio PARA SU AUTOMÓVIL.<br />
				          <br />
				        Nosotros se lo ubicamos en los EEUU - Panamá - Japón - China, Europa o cualquier parte del mundo, se lo cotizamos y si los acepta se lo hacemos llegar a la puerta de su casa u oficina.</div></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="180" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6"><img name="secc3_r5_c5" src="sections2/secc3_r5_c5.jpg" width="277" height="6" id="secc3_r5_c5" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="6" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="3" colspan="5"><img name="secc3_r6_c5" src="sections2/secc3_r6_c5.jpg" width="234" height="77" id="secc3_r6_c5" alt="" /></td>
					    <td colspan="4"><a href="repuestos-para-autos.php" target="_self" onClick="MM_nbGroup('down','navbar1','secc3_r6_c10','sections2/secc3_r6_c10_s3.jpg',1);" onMouseOver="MM_nbGroup('over','secc3_r6_c10','sections2/secc3_r6_c10_s2.jpg','sections2/secc3_r6_c10_s3.jpg',1);" onMouseOut="MM_nbGroup('out');"><img src="sections2/secc3_r6_c10.jpg" alt="" name="secc3_r6_c10" width="63" height="30" border="0" id="secc3_r6_c10" /></a></td>
					    <td rowspan="17" colspan="2"><img name="secc3_r6_c14" src="sections2/secc3_r6_c14.jpg" width="19" height="580" id="secc3_r6_c14" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="30" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="2" colspan="4"><img name="secc3_r7_c10" src="sections2/secc3_r7_c10.jpg" width="63" height="47" id="secc3_r7_c10" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="8" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="9" colspan="3"><img name="secc3_r8_c1" src="sections2/secc3_r8_c1.jpg" width="306" height="339" id="secc3_r8_c1" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="39" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6" rowspan="2" background="sections2/secc3_r9_c5.jpg"><div align="center" class="Estilo5">
					      <div align="left">QUE HACEMOS POR USTED </div>
					    </div></td>
					    <td rowspan="6" colspan="3"><img name="secc3_r9_c11" src="sections2/secc3_r9_c11.jpg" width="20" height="235" id="secc3_r9_c11" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="31" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="6" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="2" colspan="6"><img name="secc3_r11_c5" src="sections2/secc3_r11_c5.jpg" width="277" height="12" id="secc3_r11_c5" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="4" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="8" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6" valign="top" background="sections2/secc3_r13_c5.jpg"><p align="justify" class="Estilo10">Somos agentes de compras internacional (INTERNATIONAL PURCHASING AGENT).<br />
					      Envíos aéreos y marítimos desde los EEUU hasta el sur, centro, Norte América y Europa.<br />
					      Realizamos sus compras y se lo hacemos llegar en sus manos.<br />
					      Nos encargamos de toda la Logística desde realizar la compra, hasta hacer llegar la compra en sus manos.</p>				        </td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="180" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6"><img name="secc3_r14_c5" src="sections2/secc3_r14_c5.jpg" width="277" height="6" id="secc3_r14_c5" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="6" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="2" colspan="5"><img name="secc3_r15_c5" src="sections2/secc3_r15_c5.jpg" width="234" height="65" id="secc3_r15_c5" alt="" /></td>
					    <td colspan="4"><a href="servicios.html" target="_self" onClick="MM_nbGroup('down','navbar1','secc3_r15_c10','sections2/secc3_r15_c10_s3.jpg',1);" onMouseOver="MM_nbGroup('over','secc3_r15_c10','sections2/secc3_r15_c10_s2.jpg','sections2/secc3_r15_c10_s3.jpg',1);" onMouseOut="MM_nbGroup('out');"><img src="sections2/secc3_r15_c10.jpg" alt="" name="secc3_r15_c10" width="63" height="30" border="0" id="secc3_r15_c10" /></a></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="30" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="2" colspan="4"><img name="secc3_r16_c10" src="sections2/secc3_r16_c10.jpg" width="63" height="47" id="secc3_r16_c10" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="35" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="5" colspan="6"><img name="secc3_r17_c1" src="sections2/secc3_r17_c1.jpg" width="417" height="177" id="secc3_r17_c1" alt="" /></td>
					    <td colspan="3"><img name="secc3_r17_c7" src="sections2/secc3_r17_c7.jpg" width="135" height="12" id="secc3_r17_c7" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="12" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="5"><img name="secc3_r18_c7" src="sections2/secc3_r18_c7.jpg" width="12" height="191" id="secc3_r18_c7" alt="" /></td>
					    <td colspan="3" valign="top" background="sections2/rastrear-carga.jpg"><p class="Estilo5"><br />
					      RASTREAR<br />
				        CARGA</p>				        </td>
					    <td rowspan="2" colspan="3"><img name="secc3_r18_c11" src="sections2/secc3_r18_c11.jpg" width="20" height="127" id="secc3_r18_c11" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="78" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="3"><img name="secc3_r19_c8" src="sections2/secc3_r19_c8.jpg" width="166" height="49" id="secc3_r19_c8" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="49" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="3" colspan="2"><img name="secc3_r20_c8" src="sections2/secc3_r20_c8.jpg" width="123" height="64" id="secc3_r20_c8" alt="" /></td>
					    <td colspan="4"><a href="rastrear-carga.html" target="_self" onClick="MM_nbGroup('down','navbar1','secc3_r20_c10','sections2/secc3_r20_c10_s3.jpg',1);" onMouseOver="MM_nbGroup('over','secc3_r20_c10','sections2/secc3_r20_c10_s2.jpg','sections2/secc3_r20_c10_s3.jpg',1);" onMouseOut="MM_nbGroup('out');"><img src="sections2/secc3_r20_c10.jpg" alt="" name="secc3_r20_c10" width="63" height="30" border="0" id="secc3_r20_c10" /></a></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="30" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td rowspan="2" colspan="4"><img name="secc3_r21_c10" src="sections2/secc3_r21_c10.jpg" width="63" height="34" id="secc3_r21_c10" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="8" id="undefined_6" /></td>
				      </tr>
					  <tr>
					    <td colspan="6"><img name="secc3_r22_c1" src="sections2/secc3_r22_c1.jpg" width="417" height="26" id="secc3_r22_c1" alt="" /></td>
					    <td><img src="sections2/spacer.gif" alt="" name="undefined_6" width="1" height="26" id="undefined_6" /></td>
				      </tr>
				    </table>
                    </td>
						<td width="325" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="326">
							<!-- SIGUENOS EN LAS REDES -->
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="16" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="3" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="12" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="36" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="75" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="38" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="108" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="22" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="14" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="1" /></td>
							</tr>
							<tr>
								<td colspan="11"><img src="siguenos/sig_r1_c1.jpg" alt="" name="sig_r1_c1" width="326" height="21" border="0" id="sig_r1_c1" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="21" /></td>
							</tr>
							<tr>
								<td rowspan="2" colspan="4"><img src="siguenos/sig_r2_c1.jpg" alt="" name="sig_r2_c1" width="32" height="48" border="0" id="sig_r2_c1" /></td>
								<td rowspan="2" colspan="4"><div align="center"><span class="Estilo6">SÍGUENOS Y PREGUNTA</span></div></td>
								<td rowspan="2" colspan="3"><img src="siguenos/sig_r2_c9.jpg" alt="" name="sig_r2_c9" width="37" height="48" border="0" id="sig_r2_c9" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="37" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="11" /></td>
							</tr>
							<tr>
								<td rowspan="20" colspan="3"><img src="siguenos/sig_r4_c1.jpg" alt="" name="sig_r4_c1" width="20" height="766" border="0" id="sig_r4_c1" /></td>
								<td colspan="6" rowspan="16" align="center" valign="top">
									<table width="285" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td align="center" valign="top">&nbsp;</td>

                                        </tr>
										<tr>
											<td align="center" valign="top"><a class="twitter-timeline" href="https://twitter.com/TRAEMETODO" data-widget-id="523699025556430848">Tweets por el @TRAEMETODO.</a>
												<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                            </td>
									    </tr>
										<tr>
											<td align="center" valign="top"><a href="https://www.facebook.com/traemetodo?fref=ts"></a></td>
										</tr>
										<tr>
											<td align="center" valign="top">&nbsp;</td>
										</tr>
										<tr>
											<td align="center" valign="top"><a href="https://www.facebook.com/traemetodo" target="_blank"><img src="img/fb.jpg" alt="facebook traemetodo" width="266" height="225" /></a></td>
										</tr>
									</table>
                                </td>
								<td rowspan="20" colspan="2"><img src="siguenos/sig_r4_c10.jpg" alt="" name="sig_r4_c10" width="15" height="766" border="0" id="sig_r4_c10" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="180" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="8" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="28" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="8" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="19" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="19" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="32" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="10" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="9" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="104" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="81" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="28" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="10" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="27" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="12" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="78" /></td>
							</tr>
							<tr>
								<td rowspan="4" colspan="6"><img src="siguenos/sig_r20_c4.jpg" alt="" name="sig_r20_c4" width="291" height="113" border="0" id="sig_r20_c4" /></td>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="51" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="28" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="8" /></td>
							</tr>
							<tr>
								<td><img src="siguenos/spacer.gif" alt="" name="undefined_7" width="1" height="26" /></td>
							</tr>
						</table>
                    </td>
				</tr>
			</table>
        </td>
	</tr>
	<tr>	
		<td align="center" bgcolor="#FFFFFF">
			<table width="960" border="0" cellspacing="0" cellpadding="0">
				<tr>
				  <td colspan="2" align="left" valign="top"><table style="display: inline-table;" border="0" cellpadding="0" cellspacing="0" width="634">
                    <!-- COMPARTIR CON UN AMIGO -->
                    <tr>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="5" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="252" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="49" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="12" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="29" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="25" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="12" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="33" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="12" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="105" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="18" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="43" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="6" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="10" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="3" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="18" height="1" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="1" /></td>
                    </tr>
                    <tr>
                      <td rowspan="5" colspan="6"><img name="compartir" src="compartir_a_un_amigo/compartir.jpg" width="372" height="178" id="compartir" alt="" /></td>
                      <td colspan="12"><img name="compartir_r1_c7" src="compartir_a_un_amigo/compartir_r1_c7.jpg" width="262" height="13" id="compartir_r1_c7" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="13" /></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="3"><img name="compartir_r2_c7" src="compartir_a_un_amigo/compartir_r2_c7.jpg" width="57" height="126" id="compartir_r2_c7" alt="" /></td>
                      <td colspan="3" align="left" valign="middle" background="compartir_a_un_amigo/text-comparte.jpg"><p class="Estilo5">COMPARTE <br>
                        CON 
                        UN AMIGO
</p>
                      </td>
                      <td rowspan="2" colspan="6"><img name="compartir_r2_c13" src="compartir_a_un_amigo/compartir_r2_c13.jpg" width="39" height="126" id="compartir_r2_c13" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="119" /></td>
                    </tr>
                    <tr>
                      <td colspan="3"><img name="compartir_r3_c10" src="compartir_a_un_amigo/compartir_r3_c10.jpg" width="166" height="7" id="compartir_r3_c10" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="7" /></td>
                    </tr>
                    <tr>
                      <td rowspan="3"><img name="compartir_r4_c7" src="compartir_a_un_amigo/compartir_r4_c7.jpg" width="12" height="63" id="compartir_r4_c7" alt="" /></td>
                      
                      <td colspan="8"><a href="#form4" class="inline" style="color: black; width: 200px" target="_self" onClick="MM_nbGroup('down','navbar1','compartir_r4_c8','compartir_a_un_amigo/compartir_r4_c8_s3.jpg',1);" onMouseOver="MM_nbGroup('over','compartir_r4_c8','compartir_a_un_amigo/compartir_r4_c8_s2.jpg','compartir_a_un_amigo/compartir_r4_c8_s3.jpg',1);" onMouseOut="MM_nbGroup('out');"><img src="compartir_a_un_amigo/compartir_r4_c8.jpg" alt="compartir a un amigo" name="compartir_r4_c8" width="230" height="29" border="0" id="compartir_r4_c8" /></a></td>					  
                      <td rowspan="3" colspan="3"><img name="compartir_r4_c16" src="compartir_a_un_amigo/compartir_r4_c16.jpg" width="20" height="63" id="compartir_r4_c16" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="29" /></td>
                    </tr>
                    <tr>
                      <td rowspan="2" colspan="8"><img name="compartir_r5_c8" src="compartir_a_un_amigo/compartir_r5_c8.jpg" width="230" height="34" id="compartir_r5_c8" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="10" /></td>
                    </tr>
                    <tr>
                      <td colspan="6"><img name="compartir_r6_c1" src="compartir_a_un_amigo/compartir_r6_c1.jpg" width="372" height="24" id="compartir_r6_c1" alt="" /></td>
                      <td><img src="compartir_a_un_amigo/spacer.gif" alt="" name="undefined_8" width="1" height="24" /></td>
                    </tr>
                  </table></td>
			  </tr>
				<tr>
					<td width="196" align="center" valign="top"><a href="http://www.amazon.com/" target="_blank"><img src="img/amazon.fw.png" alt="Amazon compras" width="160" height="200" border="0"></a></td>
					<td width="764" align="center" valign="top" style="z-index:-100">
						<SCRIPT charset="utf-8" type="text/javascript" src="https://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fwidgetsamazon-20%2F8003%2Ffc6c3fda-0e6e-4aa2-9259-3368efdd8f36&Operation=GetScriptTemplate"> </SCRIPT>
						<NOSCRIPT><A HREF="https://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fwidgetsamazon-20%2F8003%2Ffc6c3fda-0e6e-4aa2-9259-3368efdd8f36&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT>					</td>
				</tr>
			</table>
        </td>
	</tr>
	<tr>
		<td align="center" bgcolor="#FFFFFF">
			<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" valign="top"><img src="banderas.jpg" alt="banderas del mundo" width="960" height="112" border="0"></td>
				</tr>
				<tr>
					<td align="center" valign="top">
						<!-- Histats.com  (div with counter) -->
						<div id="histats_counter"></div>
						<!-- Histats.com  START  (aync)-->
						<script type="text/javascript">var _Hasync= _Hasync|| [];_Hasync.push(['Histats.start', '1,2877379,4,3,170,30,00011111']);_Hasync.push(['Histats.fasi', '1']);_Hasync.push(['Histats.track_hits', '']);(function() {var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;hs.src = ('http://s10.histats.com/js15_as.js');(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);})();</script>
						<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2877379&101"alt="circuito contador" border="0"></a></noscript>
						<!-- Histats.com  END  -->
                    </td>
				</tr>
			</table>
        </td>
	</tr>
</table>
<div bgcolor="#FFC929" style="display:none" style="margin:0 auto;">
	<p>&nbsp;</p>
	<form name="form1" id="form1" class="form shadowed-all" method="post" style="margin:0 auto;" action="">
		<p>REGÍSTRATE</p>
		<label for="nombre">Nombre y Apellido:</label>
		<input name="nombre" type="text" id="nombre" placeholder="Ingrese su nombre y apellido" size="43" class="required" value="" />
		<label for="email">Email:</label>
		<input name="email" type="text" id="email" placeholder="Ingrese su email" size="43" class="required email" value="" />
		<label for="email">Repite Email:</label>
		<input name="emailr" type="text" id="emailr" placeholder="Ingrese de nuevo el email" size="43" class="required email" value="" />
		<label for="telefono_local">Teléfono Local:</label>
		<input name="telefono_local" type="text" id="telefono_local" placeholder="Ingrese su teléfono local" size="43" maxlength="50" class="required" value="" />
		<label for="telefono_movil">Teléfono movil:</label>
		<input name="telefono_movil" type="text" id="telefono_movil" placeholder="Ingrese su teléfono movil" size="43" maxlength="50" class="required" value="" />
		<label for="pais">País:</label>
		<input name="pais" type="text" id="pais" placeholder="Ingrese su pais" size="43" class="required" value="" /> <input type="checkbox" id="eeuu" value="1" /> EEUU
		<label for="estado">Estado:</label>
		<input name="estado" type="text" id="estado" placeholder="Ingrese su estado" size="43" class="required" value="" />
		<label for="ciudad">Ciudad:</label>
		<input name="ciudad" type="text" id="ciudad" placeholder="Ingrese su ciudad" size="43" class="required" value="" />
		<label for="zipcode">Código Postal</label>
		<input name="zipcode" type="text" id="zipcode" placeholder="Ingrese su código postal" size="43" class="required" value="" />
		<label for="direccion">Dirección detallada:</label>
		<textarea name="direccion" id="direccion" placeholder="Ingrese su dirección detallada" class="required"></textarea>
		<input id="enviar" value="Enviar" class="submit" type="submit" name="enviar" />
		<div id="mensaje_return">Puede envíar su consulta o cualquier solicitud.</div>
	</form>
	<form name="form2" id="form2" class="form shadowed-all" method="post" style="margin:0 auto;" action="">
	    <p>SOLICITUD DE REPUESTOS PARA YATES Y LANCHAS</p>
	    <label for="nombre"><strong>Nombre y Apellido:</strong></label>
	    <input name="nombre" type="text" id="nombre" placeholder="Ingrese su nombre y apellido" size="43" class="required" value="" />
	    <label for="email"><strong>Email:</strong></label>
	    <input name="email" type="text" id="email2" placeholder="Ingrese su email" size="43" class="required email" value="" />
	    <label for="email">Repite Email:</label>
		<input name="emailr2" type="text" id="emailr2" placeholder="Ingrese de nuevo el email" size="43" class="required email" value="" />
	    <label for="telefono"><strong>Teléfono:</strong></label>
	    <input name="telefono" type="text" id="telefono" placeholder="Ingrese su teléfono" size="43" class="required" value="" />
	    <label for="tipo_emb"><strong>Tipo de Embarcación:</strong></label>
	    <input name="tipo_emb" type="text" id="tipo_emb" placeholder="Ingrese el tipo de embarcación" size="43" class="required" value="" />
	    <label for="marca"><strong>Marca:</strong></label>
	    <input name="marca" type="text" id="marca" placeholder="Ingrese la marca" size="43" class="required" value="" />
	    <label for="modelo"><strong>Modelo:</strong></label>
	    <input name="modelo" type="text" id="modelo" placeholder="Ingrese el modelo" size="43" class="required" value="" />
	    <label for="anio"><strong>A&ntilde;o:</strong></label>
	    <input name="anio" type="text" id="anio" placeholder="Ingrese el año" size="43" class="required" value="" />
	    <label for="vin"><strong>VIN:</strong></label>
	    <input name="vin" type="text" id="vin" placeholder="Ingrese el VIN" size="43" class="required" value="" />
	    <label for="descripcion"><strong>Descripción y código de repuesto:</strong></label>
	    <textarea name="descripcion" id="descripcion" placeholder="Ingrese la descripción y código de repuesto" class="required"></textarea>
	    <input name="enviar2" id="enviar2" value="Enviar" class="submit" type="submit" />
	    <div id="mensaje_return2">Llenar y completar todos los datos solicitados, son importantes.</div>
  	</form>
  	<form name="form3" id="form3" class="form shadowed-all" method="post" style="margin:0 auto;" action="">
        <p>SOLICITUD DE REPUESTOS PARA AUTOS</p>
        <label for="nombre"><strong>Nombre y Apellido:</strong></label>
        <input name="nombre" type="text" id="nombre" placeholder="Su Nombre y Apellido" size="43" class="required" value="" />
       	<label for="email"><strong>Email:</strong></label>
        <input name="email" type="text" id="email3" placeholder="Su Email" size="43" class="required email" value="" />
        <label for="email">Repite Email:</label>
		<input name="emailr3" type="text" id="emailr3" placeholder="Ingrese de nuevo el email" size="43" class="required email" value="" />
        <label for="telefono"><strong>Teléfono:</strong></label>
        <input name="telefono" type="text" id="telefono" placeholder="Su Teléfono" size="43" maxlength="20" class="required" value="" />
        <label for="marca"><strong>Marca:</strong></label>
        <select name="marca" id="marca2" class="required">
        	<option value="">Seleccione una marca</option>
			<option value="Acura">Acura</option>
			<option value="Audi">Audi</option>
			<option value="Maston Martin">Aston Martin</option>
			<option value="Bmw">Bmw</option>
			<option value="Buick">Buick</option>
			<option value="Cadillac">Cadillac</option>
			<option value="Chrysler">Chrysler</option>
			<option value="Chevrolet">Chevrolet</option>
			<option value="Dodge">Dodge</option>
			<option value="Eagle">Eagle</option>
			<option value="Ford">Ford</option>
			<option value="Geo">Geo</option>
			<option value="Gmc">Gmc</option>
			<option value="Honda">Honda</option>
			<option value="Hummer">Hummer</option>
			<option value="Hyundai">Hyundai</option>
			<option value="Infiniti">Infiniti</option>
			<option value="Isuzu">Isuzu</option>
			<option value="Jaguar">Jaguar</option>
			<option value="Jeep">Jeep</option>
			<option value="Kia">Kia</option>
			<option value="Land Rover">Land Rover</option>
			<option value="Lexus">Lexus</option>
			<option value="Lincoln">Lincoln</option>
			<option value="Mazda">Mazda</option>
			<option value="Mercedes Benz">Mercedes Benz </option>
			<option value="Mercury">Mercury</option>
			<option value="Mini">Mini</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Nissan">Nissan </option>
			<option value="Oldsmobile">Oldsmobile</option>
			<option value="Plymouth">Plymouth</option>
			<option value="Pontiac">Pontiac</option>
			<option value="Porsche">Porsche</option>
			<option value="Saab">Saab</option>
			<option value="Scion">Scion</option>
			<option value="Volvo">Volvo</option><option value="Saturn">Saturn</option>
			<option value="Subaru">Subaru</option>
			<option value="Suzuki">Suzuki</option>
			<option value="Toyota">Toyota</option>
			<option value="Volkswagen">Volkswagen</option>
        	<option value="1">Otros</option>
       	</select>
       	<div id="div_marca" style="display:none">
       		<label for="otra_marca">Otra marca:</label>
        	<input name="otra_marca" type="text" id="otra_marca" placeholder="Ingrese otra marca" size="43" maxlength="40" class="required" value="" />
       	</div>
       	<label for="modelo"><strong>Modelo:</strong></label>
        <input name="modelo" type="text" id="modelo" placeholder="Indique el módelo del vehículo" size="43" maxlength="40" class="required" value="" />
        <label for="anio"><strong>Año:</strong></label>
        <input name="anio" type="text" id="anio" placeholder="Indique el año del vehículo" size="43" maxlength="4" class="required" value="" />
        <label for="motor"><strong>Motor:</strong></label>
        <select name="motor" id="motor" class="required">
        	<option value="">Seleccione tamaño del motor</option>
			<option value="1.1L">1.1L</option>
			<option value="1.2L">1.2L</option>
			<option value="1.3L">1.3L</option>
			<option value="1.4L">1.4L</option>
			<option value="1.5L">1.5L</option>
			<option value="1.6L">1.6L</option>
			<option value="1.7L">1.7L</option>
			<option value="1.8L">1.8L</option>
			<option value="1.9L">1.9L</option>
			<option value="2.0L">2.0L</option>
			<option value="2.1L">2.1L</option>
			<option value="2.2L">2.2L</option>
			<option value="2.3L">2.3L</option>
			<option value="2.4L">2.4L</option>
			<option value="2.5L">2.5L</option>
			<option value="2.6L">2.6L</option>
			<option value="2.7L">2.7L</option>
			<option value="2.8L">2.8L</option>
			<option value="2.9L">2.9L</option>
			<option value="3.0L">3.0L</option>
			<option value="3.1L">3.1L</option>
			<option value="3.2L">3.2L</option>
			<option value="3.3L">3.3L</option>
			<option value="3.4L">3.4L</option>
			<option value="3.5L">3.5L</option>
			<option value="3.6L">3.6L</option>
			<option value="3.7L">3.7L</option>
			<option value="3.8L">3.8L</option>
			<option value="3.9L">3.9L</option>
			<option value="4.0L">4.0L</option>
			<option value="4.1L">4.1L</option>
			<option value="4.2L">4.2L</option>
			<option value="4.3L">4.3L</option>
			<option value="4.4L">4.4L</option>
			<option value="4.5L">4.5L</option>
			<option value="4.6L">4.6L</option>
			<option value="4.7L">4.7L</option>
			<option value="4.8L">4.8L</option>
			<option value="4.9L">4.9L</option>
			<option value="5.0L">5.0L</option>
			<option value="5.1L">5.1L</option>
			<option value="5.2L">5.2L</option>
			<option value="5.3L">5.3L</option>
			<option value="5.4L">5.4L</option>
			<option value="5.5L">5.5L</option>
			<option value="5.6L">5.6L</option>
			<option value="5.7L">5.7L</option>
			<option value="5.8L">5.8L</option>
			<option value="5.9L">5.9L</option>
			<option value="6.0L">6.0L</option>
			<option value="6.1L">6.1L</option>
			<option value="6.2L">6.2L</option>
			<option value="6.3L">6.3L</option>
			<option value="6.4L">6.4L</option>
			<option value="6.5L">6.5L</option>
			<option value="6.6L">6.6L</option>
			<option value="6.7L">6.7L</option>
			<option value="6.8L">6.8L</option>
			<option value="6.9L">6.9L</option>
			<option value="7.0L">7.0L</option>
			<option value="7.1L">7.1L</option>
			<option value="7.2L">7.2L</option>
			<option value="7.3L">7.3L</option>
			<option value="7.4L">7.4L</option>
			<option value="7.5L">7.5L</option>
			<option value="7.6L">7.6L</option>
        	<option value="1">Otros</option>
        	<option value="No lo conozco">No lo conozco</option>
       	</select>
       	<div id="div_motor" style="display:none">
       		<label for="otro_motor"><strong>Otro motor:</strong></label>
        	<input name="otro_motor" type="text" id="otro_motor" placeholder="Ingrese otro motor" size="43" maxlength="40" class="required" value="" />
       	</div>
        <label for="transmision"><strong>Transmisión:</strong></label>
        <select name="transmision" id="transmision" class="required">
          <option value="">Seleccione transmisión del vehículo</option>
          <option value="Automática">Automática</option>
          <option value="Manual">Manual</option>
          <option value="1">Otros</option>
        </select>
        <div id="div_transmision" style="display:none">
   		  <label for="otra_transmision"><strong>Otra transmisión:</strong></label>
    	  <input name="otra_transmision" type="text" id="otra_transmision" placeholder="Ingrese otra transmición" size="43" maxlength="40" class="required" value="" />
       	</div>
        <label for="vin"><strong>Serial carrocería o VIN:</strong></label>
        <input name="vin" type="text" id="vin" placeholder="Indique el serial carrocería o VIN" size="43" class="required" value="" />
        <label for="nropart"><strong>Código repuesto o Parts Number:</strong></label>
        <textarea name="nropart" id="nropart" placeholder="Indique el Código repuesto o Parts Number" class="required"></textarea>
        <label for="descpart"><strong>Descripción repuesto:</strong></label>
        <textarea name="descpart" id="descpart" placeholder="Indique la Descripción del repuesto" class="required"></textarea>
        <input name="enviar3" id="enviar3" value="Enviar" class="submit" type="submit" />
        <div id="mensaje_return3">Puede envíar su consulta o cualquier solicitud.</div>
	</form>
    <form name="form4" id="form4" class="form shadowed-all" method="post" style="margin:0 auto;" action="">
        <p>Cuéntale a un Amigo:</p>
        <label for="nombre"><strong>Tu Nombre y Apellido:</strong></label>
        <input name="nombre" type="text" id="nombre" placeholder="Tu Nombre y Apellido" size="43" class="required" value="" />
        <label for="email"><strong>Tu Email:</strong></label>
        <input name="email" type="text" id="email4" placeholder="Tu Email" size="43" class="required email" value="" />
        <label for="email">Email Amigo 1ro:</label>
        <input name="email_amigo1" type="text" id="email_amigo1" placeholder="Ingrese el email de su amigo" size="43" class="required email" value="" />
        <label for="email">Email Amigo 2do:</label>
        <input name="email_amigo2" type="text" id="email_amigo2" placeholder="Ingrese el email de su amigo" size="43" class="email" value="" />
        <label for="email">Email Amigo 3ro:</label>
        <input name="email_amigo3" type="text" id="email_amigo3" placeholder="Ingrese el email de su amigo" size="43" class="email" value="" />
        <label for="descpart"><strong>Mensaje al amigo(s):</strong></label>
        <textarea name="mens_amigo" id="mens_amigo" placeholder="Indique el mensaje para su amigo(s)" maxlength="140" class="required"></textarea>
        <span class="countdown"></span>
        <br>
        <input name="enviar4" id="enviar4" value="Enviar" class="submit" type="submit" />
        <div id="mensaje_return4">Puede avisarle a sus amigos sobre nosotros.</div>
    </form>
</div>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57426821-1', 'auto');  ga('send', 'pageview');</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
$(function(){
    function updateCountdown() {
        // 140 is the max message length
        var remaining = 140 - $('#mens_amigo').val().length;
        //if(remaining < 0){
            //$('.countdown').css('color':'red');
        //}else{$('.countdown').css('color':'black');}
        $('.countdown').text(remaining + ' Caracteres.');
    }
    updateCountdown();
    $('#mens_amigo').change(updateCountdown);
    $('#mens_amigo').keyup(updateCountdown);
	$("#form1").validate({
		rules: {
			emailr: {
				equalTo: '#email'
			}
		},
		submitHandler: function(form){
			$.post("registro_success.php", $("#form1").serialize(), function(data){
				if(data){
					$('#form1').each(function(){ this.reset(); });
					$("#mensaje_return").html("<span style='color:green;'>"+data+"</span>");
				}else{
					alert('No se pudo enviar su solicitud');
				}
			});
			return false;
		}
	});
	$("#form2").validate({
		rules: {
			emailr2: {
				equalTo: '#email2'
			}
		},
		submitHandler: function(form){
			$.post("yates_success.php", $("#form2").serialize(), function(data){
				if(data){
					$('#form2').each(function(){ this.reset(); });
					$("#mensaje_return2").html("<span style='color:green;'>"+data+"</span>");
				}else{
					alert('No se pudo enviar su solicitud');
				}
			});
			return false;
		}
	});
    $("#form3").validate({
		rules: {
			emailr3: {
				equalTo: '#email3'
			}
		},
		ignore: ".ignore",
		submitHandler: function(form){
			$.post("autos_success.php", $("#form3").serialize(), function(data){
				if(data){
					$('#form3').each(function(){ this.reset(); });
					$("#mensaje_return3").html("<span style='color:green;'>"+data+"</span>");
				}else{
					alert('No se pudo enviar su solicitud');
				}
			});
			return false;
		}
	});
    $("#form4").validate({
        submitHandler: function(form){
            $.post("avisa_success.php", $("#form4").serialize(), function(data){
                if(data){
                    $('#form4').each(function(){ this.reset(); });
                    $("#mensaje_return4").html("<span style='color:green;'>"+data+"</span>");
                }else{
                    alert('No se pudo enviar su solicitud');
                }
            });
            return false;
        }
    });
	if($('#marca2').val() == 1){
		$('#div_marca').show();
		$('#otra_marca').removeClass('ignore');
	}else{
		$('#div_marca').hide();
		$('#otra_marca').addClass('ignore');
	}
	$('#marca2').change(function(){
		if($('#marca2').val() == 1){
			$('#div_marca').show();
			$('#otra_marca').removeClass('ignore');
		}else{
			$('#div_marca').hide();
			$('#otra_marca').addClass('ignore');
		}
	});
	if($('#motor').val() == 1){
		$('#div_motor').show();
		$('#otro_motor').removeClass('ignore');
	}else{
		$('#div_motor').hide();
		$('#otro_motor').addClass('ignore');
	}
	$('#motor').change(function(){
		if($('#motor').val() == 1){
			$('#div_motor').show();
			$('#otro_motor').removeClass('ignore');
		}else{
			$('#div_motor').hide();
			$('#otro_motor').addClass('ignore');
		}
	});
	if($('#transmision').val() == 1){
		$('#div_transmision').show();
		$('#otra_transmision').removeClass('ignore');
	}else{
		$('#div_transmision').hide();
		$('#otra_transmision').addClass('ignore');
	}
	$('#transmision').change(function(){
		if($('#transmision').val() == 1){
			$('#div_transmision').show();
			$('#otra_transmision').removeClass('ignore');
		}else{
			$('#div_transmision').hide();
			$('#otra_transmision').addClass('ignore');
		}
	});
    $('#eeuu').change(function(){
        if($('#eeuu').prop('checked')){
            $('#pais').attr('value','EEUU');
            $('#pais').prop('disabled', true);
            $('#telefono_local').prop('maxLength', 10);
            $('#telefono_movil').prop('maxLength', 10);
        }else{
            $('#pais').attr('value','');
            $('#pais').prop('disabled', false);
            $('#telefono_local').prop('maxLength', 50);
            $('#telefono_movil').prop('maxLength', 50);
        }
    });
});
</script>
<script type="text/javascript">
	$(function() {
		$(".inline").colorbox({inline:true, width:"50%"});
		var Page = (function() {
			var $nav = $( '#nav-dots > span' ),
			slitslider = $( '#slider' ).slitslider( {
				onBeforeChange : function( slide, pos ) {
					$nav.removeClass( 'nav-dot-current' );
					$nav.eq( pos ).addClass( 'nav-dot-current' );
				}
			}),
			init = function() { initEvents(); },
			initEvents = function() {
				$nav.each( function( i ) {
					$( this ).on( 'click', function( event ) {
						var $dot = $( this );
						if( !slitslider.isActive() ) {
							$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						}
						slitslider.jump( i + 1 );
						return false;
					});
				});
			};
			return { init : init };
		})();
		Page.init();
	});
	var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<?php include_once("includes/footer.php"); ?>