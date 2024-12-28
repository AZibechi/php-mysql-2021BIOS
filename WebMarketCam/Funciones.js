function Login() {
    // preparar mensaje y control de error
    var mensaje = "Debe Ingresar:\n";
    var error   = false;
    // capturar datos del formulario
    var usu  = document.getElementById("nomUs").value;
    var con  = document.getElementById("claveUs").value;    
    // validar datos
    if (usu=="") {
        error   = true;
        mensaje = mensaje+"Nombre de usuario, ";
    } // endif
    if (con=="") {
        error   = true;
        mensaje = mensaje+"Contraseña";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataLOG").submit();
    } // endif
} // end funcion 

function CheckModificar() {
    // preparar mensaje y control de error
    var mensaje = "";
    var error   = false;
    // capturar datos del formulario
    var id  = document.getElementById("idProdM").value;
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID no puede estar vacío\n";
    } // endif
    if (isNaN(id)) {    // is Not a Number
        error   = true;
        mensaje = mensaje+"ID debe ser numérico\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataBaja").submit();
    } // endif
} // end funcion

function CheckAlta() {
    // preparar mensaje y control de error
    var mensaje = "Debe Ingresar:\n";
    var error   = false;
    // capturar datos del formulario
    var descripcion = document.getElementById("descProd").value;
    var marca       = document.getElementById("marProd").value;
    var origen      = document.getElementById("origProd").value;
    var precio      = document.getElementById("precProd").value;
    var categoria   = document.getElementById("catProd").value;
    // validar datos
    if (descripcion=="") {
        error   = true;
        mensaje = mensaje+"Descripción, ";
    } // endif
    if (marca=="") {
        error   = true;
        mensaje = mensaje+"Marca, ";
    } // endif
    if (origen=="") {  
        error   = true;
        mensaje = mensaje+"Origen, ";
    }
    if (precio=="") {  
        error   = true;
        mensaje = mensaje+"Precio, ";
    }
    if (isNaN(precio)) {  // is Not a Number
        error   = true;
        mensaje = mensaje+"Precio debe ser numérico, ";
    }
    if (categoria=="0") {  
        error   = true;
        mensaje = mensaje+"Categoria";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataAlta").submit();
    } // endif
}
 // end funcion

 function CheckBaja() {
     // preparar mensaje y control de error
     var mensaje = "";
     var error   = false;
     // capturar datos del formulario
     var id  = document.getElementById("idProdB").value;
     // validar datos
     if (id=="") {
         error   = true;
         mensaje = mensaje+"ID no puede ser vacío\n";
     } // endif
     if (isNaN(id)) {    // is Not a Number
         error   = true;
         mensaje = mensaje+"ID debe ser numérico\n";
     } // endif
     // controlar error
     if (error) {
         // mostrar mensaje de error
         window.alert(mensaje);
     } else {
        // controlar error
            if (window.confirm("¿Seguro que desea dar de baja el producto con ID: " +id+ "?")); {
            document.getElementById("dataBaja").submit();
        }  // endif

}
 }

 function CambioContra() {
       // preparar mensaje y control de error
       var mensaje = "";
       var error   = false;
       // capturar datos del formulario
       var usu  = document.getElementById("Usuario").value;
       var cona  = document.getElementById("ConAct").value;
       var conn  = document.getElementById("ConNue").value;
       var connu  = document.getElementById("ConNue2").value;
       // validar datos
       if (usu=="") {
           error   = true;
           mensaje = mensaje+"Usuario no puede ser vacío\n";
       } // endif
       if (cona=="") { 
           error   = true;
           mensaje = mensaje+"Contraseña Actual debe ser numérico\n";
       } // endif
       if (conn=="") {
        error   = true;
        mensaje = mensaje+"Nueva Contraseña no puede ser vacío\n";
    } // endif
    if (connu=="") {
        error   = true;
        mensaje = mensaje+"Nueva contraseña no puede ser vacío\n";
    } // endif
    if (conn!==connu) {
        error   = true;
        mensaje = mensaje+"La nueva contraseña debe coincidir\n";
    } // endif
       // controlar error
       if (error) {
           // mostrar mensaje de error
           window.alert(mensaje);
       } else {
           // enviar formulario
           document.getElementById("dataCambio").submit();
 }
}

function CheckCat() {
    // preparar mensaje y control de error
    var mensaje = "Ingrese:\n";
    var error   = false;
    // capturar datos del formulario
    var nomC  = document.getElementById("NomCat").value; 
    // validar datos
    if (nomC=="") {
        error   = true;
        mensaje = mensaje+"Nombre de la categoría\n";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("NuevaCategoria").submit();
    } // endif
    
} // end funcion 

function CheckModifCat() {
    // preparar mensaje y control de error
    var mensaje = "Debe Ingresar:\n";
    var error   = false;
    // capturar datos del formulario
    var nomC  = document.getElementById("NueNom").value; 
    var catS  = document.getElementById("CatSel").value; 
    // validar datos
    if (nomC=="") {
        error   = true;
        mensaje = mensaje+"Nombre de la categoría, ";
    } // endif
    if (catS=="0") {
        error   = true;
        mensaje = mensaje+"Categoría";
    } // endif
    // controlar error
    if (error) {
        // mostrar mensaje de error
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("NuevaCategoria").submit();
    } // endif
} // end funcion 