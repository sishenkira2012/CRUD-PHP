<!DOCTYPE html>
<html lang="en">
<head>
  <title>Galeria</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet">
<link href="../Assets/estilo2.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
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

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>
<body >

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../inicio.php">Starlook</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="../inicio.php">Home</a></li>
      <li class="active"><a href="../Views/Galeria.php">Galeria</a></li>
      <li><a href="index.php">Empleados</a></li>
   
    </ul>
  </div>
</nav>
<h1>Galeria</h1>
<div class="centro">	
<div class="gallery">
	<a href="../Assets/img/child-g62e54714b_1920.jpg" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ecuela','','../Assets/img/child-g62e54714b_1920.jpg',1)"><img src="../Assets/img/children-g16713a919_1920.jpg" alt="Apoyo a escuelas" width="1920" height="1280" id="ecuela"></a>
<div class="desc">Labores Sociales con escuelas</div>
</div>

<div class="gallery">
  <a href="../Assets/img/entrepreneur-gb7a8faa18_1920.jpg" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('HomeOffice','','../Assets/img/home-gdd3a0a25d_1920.jpg',1)"><img src="../Assets/img/entrepreneur-gb7a8faa18_1920.jpg" alt="HomeOffice" width="1920" height="1280" id="HomeOffice"></a>
<div class="desc">Ofrecemos home office a nuestros trabajadores</div>
</div>

<div class="gallery">
  <a href="../Assets/img/lecture-gb96903e98_1920.jpg" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('oficina','','../Assets/img/lecture-gb96903e98_1920.jpg',1)"><img src="../Assets/img/job-gc9aeee691_1920.jpg" alt="oficinas" width="1920" height="1156" id="oficina"></a>
<div class="desc">Tenemos Amplias oficinas para los proyectos ademas de amplios lugares para capacitacion de nuestros empleados</div>
</div>

<div class="gallery">
  <a href="../Assets/img/startup-g140429a66_1920.jpg" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ambiente','','../Assets/img/startup-gf758e4240_1920.jpg',1)"><img src="../Assets/img/startup-g140429a66_1920.jpg" alt="ambiente excelente" width="1920" height="1280" id="ambiente"></a>
<div class="desc">tratamos que sea un lugar agradable para nuestros clientes como trabajadores</div>
	
	
</div>

</div>
</body>
</html>
