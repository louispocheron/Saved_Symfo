import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";

const benevolatDom = document.querySelector('.benevolat-card');
const remboursementDom = document.querySelector('.remboursement-card');
const heureDom = document.querySelector(".heure-card");
const donDom = document.querySelector('.dons-card');

let url = new URL(window.location.href);
const href = url.pathname

const valorisees = [];
const dons = [];
const remboursement = [];
const benevolat = [];
console.log("xd")

window.onload = () => {
    axios.get(href + 'ajax_endpoint').then((response) => {
        const data = response.data.data
        if(data.length >= 1){
            data.forEach(el => {
                valorisees.push(el.heuresValorisees)
                dons.push(el.dons)
                remboursement.push(el.aPayer)
                benevolat.push(el.duree)
            })

            // OK
            const total_valorisee = sumEuros(valorisees)
            benevolatDom.innerHTML = total_valorisee + "€"

            // OK
            const total_remboursement = sumPay(remboursement)
            remboursementDom.innerHTML = total_remboursement + "€"

            const total_benevolat = sumHours(benevolat);
            console.log(total_benevolat)
            heureDom.innerHTML = total_benevolat
            
            // console.log(total_remboursement);
            const total_dons = sumEuros(dons);
            donDom.innerHTML = total_dons + "€"
        }
        else{
            benevolatDom.innerHTML = "0€"
            remboursementDom.innerHTML = "0€"
            heureDom.innerHTML = "00h00"
            donDom.innerHTML = "0€"
        }
    })

    .catch((error) => {
        console.log(error);
    })
}