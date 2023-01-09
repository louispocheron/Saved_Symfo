import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";




// GRAB LES ELEMENTS DU DOM
const selectYear = document.getElementById('selectYear');
const totalParagraph = document.querySelector('.total-paragraphe');
const modal = document.querySelector('.modal-adherer');
const dureeP = document.querySelector('.total-heure');
const payerP = document.querySelector('.total-payer');
const donP = document.querySelector('.total-don');
const valoriseeP = document.querySelector('.total-valorisees');
const duree = document.querySelectorAll('.duree');
const payerTd = document.querySelectorAll('.payerTd');
const donTd = document.querySelectorAll('.donTd');
const valoriseesTd = document.querySelectorAll('.valoriseesTd');
const alertMessage = document.querySelector('.alert-message');
const reset = document.querySelector('.arrowTurn');
const main = document.querySelector('.content-container');



// SUPPRIMER SAISIE AVEC AJAX
    // EVENT POUR OUVRIR LE MODAL 
const openModal = () => {
    modal.dataset.active = true;
    main.style.opacity = '0.4';
}


const closeModal = () => {
    delete modal.dataset.active;
    main.style.opacity = '1';
}


let baseOption = document.createElement('option');
baseOption.text = 'Tous';
baseOption.value = 'rien';
// baseOption.className = 'select-dd';
selectYear.add(baseOption);

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


// CREATION SELECT ASSOC 
const assocs = document.querySelectorAll('.data-assoc');
const selectAssoc = document.querySelector('.selectAssoc');

const addEl = document.createElement('option');
addEl.text = "Toutes";
addEl.value = "rien";
selectAssoc.add(addEl);

assocs.forEach(el => {
    const assocOptions = document.createElement('option')
    assocOptions.text = el.dataset.association
    assocOptions.value = el.dataset.id
    selectAssoc.add(assocOptions);
})

// DELETE SAISIE
let dataId = document.querySelectorAll('.actionDelete');
let trash = document.querySelectorAll('.modal-open-delete');
const btnNo = document.querySelector('.btn-no');
const btnYes = document.querySelector('.btn-yes');


btnSubmit.addEventListener('click', Ajaxyear);
let totalDuree
let aPayerSumAjax
let donSumAjax
let valoriseesSumAjax


// APPEL AJAX POUR AFFICHER LES DONNEES
export function Ajaxyear(){
    btnPdfAll.style.display = "none"
    let data = selectYear.options[selectYear.selectedIndex];
    let month = selectMonth.options[selectMonth.selectedIndex];
    let assoc = selectAssoc.options[selectAssoc.selectedIndex];
    let queryString = new URLSearchParams();
    queryString.append('year', data.value);
    queryString.append('month', month.value);
    queryString.append('association', assoc.value);
    let url = new URL(window.location.href);

    axios.post(url.pathname + "?" + queryString.toString() + "&ajax=1", {
        'year': data.value,
        'month': month.value,
        'association': assoc.value
    })
    .then(data => {
        // ON APPEND LES DONNEES SI ON LES RECOIS
        // SI ON LES RECOIS PAS ON APPEND UN MSG EN ROUGE A UNE DIV
        const trContainer = document.querySelector('.ajaxDivContent');
        const trContainerPdf = document.querySelector('.ajaxDivContentPdf');

        let dataUser = data.data.content;
        let dataUserPdf = data.data.contentPdf
        // CAS OU ON RECOIS RIEN DU SERV

        if (dataUser == "") {
            // ON RETIRE LE CONTENU DE LA DIV SI ON L'A DEJA AJOUTEE
            [totalParagraph, dureeP, payerP, donP, valoriseeP].forEach(el => {
                el.textContent = "";
            });

            alertMessage.style.display = "block";
            alertMessage.innerHTML = '<p style="color:red; text-align: center;">aucune donnée trouvée pour cette recherche</p>';
            
            // TIMEOUT POUR SUPPR LE MESSAGE D ERREUR
            setTimeout(()=>{
                alertMessage.style.display = "none";
            }, 3000);

        // CAS OU ON RECOIS DES DONNEES
        } else {
            btnPdf.style.display = "block"
            let year = selectYear.options[selectYear.selectedIndex].value;

            // trContainer.innerHTML = dataUser;
            trContainer.innerHTML = dataUser
            trContainerPdf.innerHTML = dataUserPdf
            // CALCUL DU TOTAL DES HEURES VALORISEES
            const tr = document.querySelectorAll('.duree');
            const trData = Array.from(tr).map(el => el.dataset.duree)
            totalDuree = sumHours(trData);
            dureeP.innerHTML = `Bénévolat : <span style="
            color:#097969;
            font-weight: bold;
            "> ${totalDuree}</span>`;

            // CALCUL DU TOTAL A PAYER
            const payerTdAjax = document.querySelectorAll('.payerTd');
            const trpayer = Array.from(payerTdAjax).map(el => el.dataset.payer);
            aPayerSumAjax = sumPay(trpayer);
            payerP.innerHTML = `Remboursements : <span style="
            color:#097969;
            font-weight: bold;
            "> ${aPayerSumAjax}€</span>`;



            // CALCUL DES DONS 
            const donTdAjax = document.querySelectorAll('.donTd');
            const trdon = Array.from(donTdAjax).map(el => el.dataset.don)
            donSumAjax = sumEuros(trdon);
            donP.innerHTML = `Dons :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSumAjax}€</span>`;


            // CALCUL DES VALORISATION
            const valoriseesTdAjax = document.querySelectorAll('.valoriseesTd');
            const trvalorisees = Array.from(valoriseesTdAjax).map(el => el.dataset.valorisees)
            valoriseesSumAjax = sumEuros(trvalorisees);
            valoriseeP.innerHTML = `Valorisées : <span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSumAjax}€</span> `;
                

            if(month.value == '' && typeof year !== 'undefined'){
            totalParagraph.innerHTML = `Total pour l'année <span style="
            color:#152149;
            font-weight: bold;
            ">${year}</span>:`
            }
            if(month.value == "" && year == 'rien'){
                console.log('passe par la')
                totalParagraph.innerHTML = "Total de toutes vos saisies :";
            }

            if(year != 'rien' && month.value != ''){
                // console.log(data.val);
                totalParagraph.innerHTML = `Total pour le <span style="
            color:#152149;
            font-weight: bold;
            ">${month.value}/${year}</span>:`;
            }
            
            if(year == 'rien' && month.value != ''){
                totalParagraph.innerHTML = `Total pour tout les mois de <span style="
            color:#152149;
            font-weight: bold;
            ">${month.text}</span>:`;
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
// console.log(data);
let dureeAjax = sumHours(data);
dureeP.innerHTML = `Bénévolat : <span style="
            color:#097969;
            font-weight: bold;
            ">${dureeAjax}</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 3 ET APPEND POUR LE REMBOURSEMENT
const dataPayer = Array.from(payerTd).map(el => el.dataset.payer);
let aPayerSum = sumPay(dataPayer);
payerP.innerHTML = `Remboursement : <span style="
            color:#097969;
            font-weight: bold;
            ">${aPayerSum}€</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 2 ET APPEND POUR LE DON
const dataDon = Array.from(donTd).map(el => el.dataset.don);
let donSum = sumEuros(dataDon);
donP.innerHTML = `Dons :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSum}€</span>`;

// CALCUL AVEC LA FONCTION QU'ON IMPORTE LIGNE 2 ET APPEND POUR LA VALORISATION
const dataValorisees = Array.from(valoriseesTd).map(el => el.dataset.valorisees);
let valoriseesSum = sumEuros(dataValorisees);
valoriseeP.innerHTML = `Valorisées : <span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSum}€</span>`;


// ENVOIE DONNEES VERS PDF !! 
const pdfAction = document.querySelectorAll('.pdfIcone'); 
const baseHref = document.URL; 


pdfAction.forEach(el => {
    el.addEventListener('click', (event) => {
        event.preventDefault();
        const actionId = el.dataset.id;
        const endPoint = `${baseHref}/pdf/${actionId}`;
        console.log(dureeAjax)
        axios.post(endPoint)
        .then((response) => { 
            console.log(response)
            window.location.href = endPoint;
        })
        .catch((error) => {
        console.log(error)
        })
    })
})



// CA CA MARCHE 
const wrapper = document.querySelector('.wrapper-pdf');
const pdfBenevolat = document.querySelector('.pdf-benevolat');
const pdfDon = document.querySelector('.pdf-don');
const pdfRemboursement = document.querySelector('.pdf-remboursement');
const pdfValorisee = document.querySelector('.pdf-valorisee');

async function generatePdf(){

    wrapper.style.display = "flex";
    pdfBenevolat.innerHTML = `Bénévolat : <span style="
            color:#097969;
            font-weight: bold;
            "> ${totalDuree}</span>`;
    pdfDon.innerHTML = `Dons :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSumAjax}€</span>`;
    pdfRemboursement.innerHTML = `Remboursements : <span style="color:#097969;
            font-weight: bold;
            "> ${aPayerSumAjax}€</span>`;
    pdfValorisee.innerHTML = `Valorisées : <span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSumAjax}€</span> `;

    // GENERATION DU PDF AVEC TOUTES LES INFOS
    let options = {
        filename: 'Saved_pdf.pdf',
        margin: 1,
        image: {
            type: 'jpeg'
        },
        html2canvas: { 
            scale: 10
        },
        jsPDF: {
            orientation: 'landscape'
        },
    };

    html2pdf()
    .from(wrapper)
    .set(options)
    .save()
}


async function generatePdfAll(){

    wrapper.style.display = "flex";
    pdfBenevolat.innerHTML = `Bénévolat : <span style="
            color:#097969;
            font-weight: bold;
            "> ${dureeAjax}</span>`;
    pdfDon.innerHTML = `Dons :<span style="
            color:#097969;
            font-weight: bold;
            "> ${donSum}€</span>`;
    pdfRemboursement.innerHTML = `Remboursements : <span style="color:#097969;
            font-weight: bold;
            "> ${aPayerSum}€</span>`;
    pdfValorisee.innerHTML = `Valorisées : <span style="
            color:#097969;
            font-weight: bold;
            ">${valoriseesSum}€</span> `;

    // GENERATION DU PDF AVEC TOUTES LES INFOS
    let optionsAll = {
        filename: 'Saved_pdf.pdf',
        margin: 1,
        image: {
            type: 'jpeg'
        },
        html2canvas: { 
            scale: 10
        },
        jsPDF: {
            orientation: 'landscape'
        },
    };

    html2pdf()
    .from(wrapper)
    .set(optionsAll)
    .save()
}

// APPELLE DEMANDE PDF ON CLICK
const btnPdf = document.querySelector('.btn-pdf');
const btnPdfAll = document.querySelector('.btn-pdf-all');


btnPdf.addEventListener('click', () => {
    generatePdf()
    .then(() => { 
        wrapper.style.display = "none";
    })
    .catch((err) => {
        console.log(err)
    })
})

btnPdfAll.addEventListener('click', () => {
    generatePdfAll()
    .then(() => { 
        wrapper.style.display = "none";
    })
    .catch((err) => {
        console.log(err)
    })
})



console.log("fait ? 11 ");



// INITIE LA VARIABLE AVANT FONCTION IMPORTANT
let idAction

table.addEventListener('click', (e) => {
    if(e.target.matches('.trash-png')){
        idAction = e.target.dataset.id;
        openModal();
    }
})


btnYes.addEventListener('click', (event) => {
    event.preventDefault();
    const baseHref = document.URL;
    const endPoint = `${baseHref}/remove/${idAction}`;

    // APPELLE AJAX SUR L'ENDPOINT 
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
            Ajaxyear(); 
    })
    .catch((err) => {
        console.log(err);
    })
})

btnNo.addEventListener('click', () => {
     closeModal();
})
