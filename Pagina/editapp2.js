var edit = document.getElementById("edit");

edit.addEventListener("submit", function(e){
    e.preventDefault();
    console.log("me diste click")

    var datos = new FormData(edit);
    
    console.log('me diste los siguientes datos')
    console.log(datos)
    console.log(datos.get("a"))
    console.log(datos.get("b"))
    console.log(datos.get("c"))

    fetch("edit2test.php",{
        method: "POST",
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
        })
})