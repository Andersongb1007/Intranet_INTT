function validar_formulario(){
			
			if(document.form1.usuario.value=='' 
			|| document.form1.correo.value=='' 
			|| document.form1.password.value==''){
			
				alert("Todos los campos son obligatorios");
			
			} else {
				
		document.form1.action= "validar_usuario.php";
    document.form1.method= 'POST';
    document.form1.submit();
			}

		}

        console.log("leer esto: ..........");



/*------------------------------------ IMPRIMIR ----------------------------------*/


$('tablas').on("click","botonImprimir", function () {
	var  imprimir=$(this).attr("imprimirregistro");
	window.open("extenciones/tcpdf/pdf/pdf.php", "_black");
	
})

