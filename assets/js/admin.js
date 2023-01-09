import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";

//NOMBRE D'HEURE ET MINUTES PAR ADHERENT

const selectYear = document.getElementById('selectYear');
const totalParagraph = document.querySelector('.total-paragraphe');
const dureeP = document.querySelector('.total-heure');
const payerP = document.querySelector('.total-payer');
const donP = document.querySelector('.total-don');
const valoriseeP = document.querySelector('.total-valorisees');
const duree = document.querySelectorAll('.duree');
const payerTd = document.querySelectorAll('.payerTd');
const donTd = document.querySelectorAll('.donTd');
const valoriseesTd = document.querySelectorAll('.valoriseesTd');
const alertMessage = document.querySelector('.alert-message');

// OPTION DE BASE POUR LE SELECT YEAR
let baseOption  = document.createElement('option');
baseOption.text = 'Tous';
baseOption.value = 'rien';
// baseOption.className = 'select-dd';  
selectYear.add(baseOption);

// OPTION AVEC LES ANNNES 
let currentYear = new Date().getFullYear();    
let earliestYear = 1965;     
while (currentYear >= earliestYear) {      
    let dateOption = document.createElement('option');          
    dateOption.text = currentYear;      
    dateOption.value = currentYear;
    // dateOption.className = 'select-dd';
    selectYear.add(dateOption);      
    currentYear -= 1;    
}

// CREATION SELECT MONTH
const selectMonth = document.getElementById('selectMonth');
const table = document.querySelector('.table');
const btnSubmit = document.querySelector(".btn-submit")

const months = [
    {value: '', text: 'Tous'},
    {value: '01', text: 'Janvier'},
    {value: '02', text: 'Février'},
    {value: '03', text: 'Mars'},
    {value: '04', text: 'Avril'},
    {value: '05', text: 'Mai'},
    {value: '06', text: 'Juin'},
    {value: '07', text: 'Juillet'},
    {value: '08', text: 'Août'},
    {value: '09', text: 'Septembre'},
    {value: '10', text: 'Octobre'},
    {value: '11', text: 'Novembre'},
    {value: '12', text: 'Décembre'}
];

for(let i=0; i<months.length; i++){
    const monthOption = document.createElement('option');
    monthOption.text = months[i].text;
    monthOption.value = months[i].value;
    monthOption.className = 'select-month';
    selectMonth.add(monthOption);
}   

btnSubmit.addEventListener('click', sendYear);




function sendYear(){
    let data = selectYear.options[selectYear.selectedIndex];
    let month = selectMonth.options[selectMonth.selectedIndex];
    let queryString = new URLSearchParams();
    queryString.append('year', data.value);
    queryString.append('month', month.value);
    let url = new URL(window.location.href);


    axios.post(url.pathname + "?" + queryString.toString() + "&ajax=1", {
        'year': data.value,
        'month': month.value
        })
        .then(data => {
            const trContainer = document.querySelector('.ajaxDivContent');
            let dataUser = data.data.content;
            if(dataUser == ""){
                   // ON RETIRE LE CONTENU DE LA DIV SI ON L'A DEJA AJOUTEE
            [totalParagraph, dureeP, payerP, donP, valoriseeP].forEach(el => {
                el.textContent = "";
            });

            alertMessage.style.display = "block"
            alertMessage.innerHTML = '<p style="color:red; text-align: center;">aucune donnée trouvée pour cette recherche</p>';
            // TIMEOUT POUR SUPPR LE MESSAGE D ERREUR
            setTimeout(()=>{
                alertMessage.style.display = "none";
            }, 3000);
        }
        else{

          let year = selectYear.options[selectYear.selectedIndex].value;
            trContainer.innerHTML = dataUser;

            const tr = document.querySelectorAll('.duree');
            const trData = Array.from(tr).map(el => el.dataset.duree)
            let totalDuree = sumHours(trData);
            dureeP.innerHTML = `Durée :<span style="
            color:#097969;
            font-weight: bold;
            "> ${totalDuree}</span>`;

            // APPEL DES FONCTIONS POUR CALCULER LES DONNEES
            const payerTdAjax = document.querySelectorAll('.payerTd');
            const trpayer = Array.from(payerTdAjax).map(el => el.dataset.payer)
            let aPayerSumAjax = sumPay(trpayer);
            payerP.innerHTML = `A payer :<span style="
            color:#097969;
            font-weight: bold;
            "> ${aPayerSumAjax}€</span>`;


            const donTdAjax = document.querySelectorAll('.donTd');
            const trdon = Array.from(donTdAjax).map(el => el.dataset.don)
            let donSumAjax = sumEuros(trdon);
            donP.innerHTML = `Don :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSumAjax}€</span>`;


            const valoriseesTdAjax = document.querySelectorAll('.valoriseesTd');
            const trvalorisees = Array.from(valoriseesTdAjax).map(el => el.dataset.valorisees)
            let valoriseesSumAjax = sumEuros(trvalorisees);
            valoriseeP.innerHTML = `Valorisees :<span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSumAjax}€</span> `;
           
            if(month.value == ''){
                
                totalParagraph.innerHTML = `Total pour l'année <span style="
            color:#152149;
            font-weight: bold;
            ">${year}</span>:`
            }
            if(data.value == 'rien' && month.value == ''){

                totalParagraph.innerHTML = "Total de toutes vos saisies :";

            }
            if(data.value != 'rien' && month.value != ''){

                totalParagraph.innerHTML = `Total pour le <span style="
            color:#152149;
            font-weight: bold;
            ">${month.value}/${year}</span>:`;
            }
        }
        })

        .catch(err => {
            console.log(err);
        })
}




// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 1 ET APPEND POUR LA DUREE 
const data = Array.from(duree).map(el => el.dataset.duree);
// console.log(data);
let dureeAjax = sumHours(data);
dureeP.innerHTML = `Durée : <span style="
            color:#097969;
            font-weight: bold;
            ">${dureeAjax}</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 3 ET APPEND POUR LE REMBOURSEMENT
const dataPayer = Array.from(payerTd).map(el => el.dataset.payer);
console.log(dataPayer);
let aPayerSum = sumPay(dataPayer);
payerP.innerHTML = `A payer : <span style="
            color:#097969;
            font-weight: bold;
            ">${aPayerSum}€</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 2 ET APPEND POUR LE DON
const dataDon = Array.from(donTd).map(el => el.dataset.don);
let donSum = sumEuros(dataDon);
donP.innerHTML = `Don :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSum}€</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 2 ET APPEND POUR LA VALORISATION
const dataValorisees = Array.from(valoriseesTd).map(el => el.dataset.valorisees);
let valoriseesSum = sumEuros(dataValorisees);
valoriseeP.innerHTML = `Valorisation : <span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSum}€</span>`;

// EVENT DU MODAL
const modal = document.querySelector('.modal-adherer');
const bg = document.querySelector(".content-container");
const actionToDelete = document.querySelectorAll('.last-td-poubelle');
const no = document.querySelector('.btn-no');
const yes = document.querySelector('.btn-yes');

const openModal = () => {
    modal.dataset.active = true;
    // bg.style.opacity = "0.4"
} 

const closeModal = () => { 
    delete modal.dataset.active;
    // bg.style.opacity = "1";
}


let idAction
table.addEventListener('click', (event) => { 
    if(event.target.matches('.trash-png')){
        idAction = event.target.dataset.id; 
        openModal();
    }
})


yes.addEventListener('click', (e) => {
    e.preventDefault();
    const baseHref = document.URL
    const endPoint = `${baseHref}/remove/${idAction}`; 
    axios.post(endPoint).then((res) => {
        console.log(res); 
        const domToRemove = document.querySelector(`.tr-${idAction}`);
        domToRemove.remove();
        closeModal();
        Toastify({
                text: "Saisie bien supprimé",
                duration: 5000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function(){}
            }).showToast();
            sendYear();
    })
     .catch((err) => {
        console.log(err);
    })
})


// EVENT BTN NON
no.addEventListener('click', () => {
    closeModal();
})