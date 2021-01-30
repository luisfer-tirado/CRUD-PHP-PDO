class index{
    constructor(){
        document.querySelector("form").addEventListener("submit",this.onSubmit)
    }

    onSubmit(e){
        let i = new index(),
        datos = i.recuperar();

        if(!i.validar(datos))
            e.preventDefault();
    }

    recuperar(){
        let datos = {};

        datos.correo = document.querySelector("#correo").value;
        datos.nombre = document.querySelector("#nombre").value;
        datos.apPaterno = document.querySelector("#apPaterno").value;
        datos.apMaterno = document.querySelector("#apMaterno").value;
        datos.edad = document.querySelector("#edad").value;
        datos.sexo = document.querySelector("#sexo").value;
        return datos;
    }

    validar(datos){
        if(datos.correo == "")
            console.log("Debe ingresar un correo");
        else if(datos.nombre == "")
            console.log("Debe ingresar un nombre(s)");
        else if(datos.apPaterno == "")
            console.log("Debe ingresar apellidos");
        else if(datos.apMaterno == "")
            console.log("Debe ingresar apellidos");
        else if(datos.edad == "")
            console.log("Debe ingresar la edad");
        else if(datos.sexo == "")
            console.log("Debe ingresar el sexo");
        else
            return true;
        return false;        
    }
}
window.onload = () => new index();