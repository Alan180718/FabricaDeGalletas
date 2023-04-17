//$.ajax({
//    type: 'get',
//    url: 'http://www.example.com/api/test',
//    xhrFields: {
//        withCredentials: true
//    }
//})

// const express = require('express')
// const cors = require('cors')
// const app = express()
// const port = 8080
// app.use(cors())  //  acceso a todos


var Answer = document.getElementById("Answer");

Answer.addEventListener("submit", function(e){
    e.preventDefault();
    console.log("me diste click")

    var datos = new FormData(Answer);
    
    console.log('me diste los siguientes datos')
    console.log(datos)
    console.log(datos.get("a"))
    console.log(datos.get("b"))

    fetch("test2connect.php",{
        method: "POST",
        body: datos
    })
        .then( res => res.json())
        .then( data => {
            console.log(data)
        })
})



// window.alert("Hola");
// document.getElementById('Answer').addEventListener('submit', function(e) {

//     e.preventDefault();

//     let Answer = new FormData(document.getElementById('Answer'));


//     catchAnswer()
//         .then(response => {
//             console.log("yeah");
//             window.alert("yay");
//         })
//         .catch(error => {
//             console.log("error!");
//             console.error(error);
//         });

//         async function catchAnswer(){
//             const response=await fetch("Answer");
//             const test2 = await response.blob();
//             document.getElementById("Answer").src =url.createObjectURL(test2);
//         }
//     })
// // fetch("C:\\xampp\\htdocs\\test2p.php")
// //     .then(res => {
// //         if (res.ok) {
// //             console.log("SUCCESS")
// //         } else {
// //             console.log("NOT SUCCESSFUL")
// //         }
// //     }) 
// //     .then(data => console.log(data))
// //     .catch(error => console.log("ERROR"))