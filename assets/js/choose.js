const inputFile = document.querySelectorAll('.input-sbmt');
const postBtn = document.querySelectorAll('.btn-send');

 for(let i = 0; i < postBtn.length; i++){
     postBtn[i].style.display = "none";
 }
inputFile.forEach(el=>{
    el.addEventListener('change', function(){
        console.log(el.dataset.id)
        postBtn[el.dataset.id - 1].style.display = "block";
    })
})
// //[]
// inputFile.forEach(input =>{
//     input.addEventListener('change', function(){
//         console.log(input);
//     } )
// })