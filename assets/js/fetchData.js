import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";

const benevolatDom = document.querySelector('.benevolat-card');
const remboursementDom = document.querySelector('.remboursement-card');
const heureDom = document.querySelector(".heure-card");
const donDom = document.querySelector('.dons-card');


const valorisees = [];
const dons = [];
const remboursement = [];
const benevolat = [];


const baseHref = document.URL
const endPoint = `${baseHref}/ajax_endpoint`
console.log(endPoint)

window.onload = () => {
    axios.get(endPoint).then((response) => {
        const data = response.data.data;
        console.log(data)
        // console.log(data);
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
           heureDom.innerHTML = total_benevolat
            
           // console.log(total_remboursement);
           const total_dons = sumEuros(dons);
           donDom.innerHTML = total_dons + "€"
    })
    .catch((error) => {
        console.log(error)
    })
}