// BAR DE RECHERCHE AVEC AJAX
let searchBar = document.getElementById('search');
let list = document.querySelectorAll('.assoc-li');

const ajaxAssocContent = document.querySelector('.ajaxAssocContent');

searchBar.addEventListener('keyup', (e) => {
    // search bar associations
    let search = e.target.value.toLowerCase();
    ajax(search);

})

function ajax(filter){
    let queryString = new URLSearchParams();
    queryString.append('search', filter);
    let url = new URL(window.location.href);

    axios.get(url.pathname + "?" + queryString.toString() + "&ajax=1", null)
         .then(data => {
            let dataUser = data.data;
            console.log(dataUser.length)
            if(dataUser == ""){
                let p = document.createElement('p');
                p.innerHTML = "Aucun résultat";
                ajaxAssocContent.appendChild(p);
            }else{
                console.log("trouvée")
                ajaxAssocContent.innerHTML = dataUser;
            }
        })  
        .catch(err => {
            console.log(err);
        })
}

