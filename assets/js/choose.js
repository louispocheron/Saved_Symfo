const inputFile = document.querySelectorAll('.input-sbmt');
inputFile.forEach(el=>{
    el.addEventListener('change', function(){
        el.parentNode.submit();
    })
})
// //[]
// inputFile.forEach(input =>{
//     input.addEventListener('change', function(){
//         console.log(input);
//     } )
// })