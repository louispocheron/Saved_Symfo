import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";



let url = new URL(window.location.href);
const href = url.pathname



const valorisees = [];
const dons = [];
const remboursement = [];
const benevolat = [];


window.onload = () => {
    axios.get(href + 'ajax_endpoint').then((response) => {
        const data = response.data.data;
        console.log(data);
        data.forEach(el => {
            valorisees.push(el.heuresValorisees)
            dons.push(el.dons)
            remboursement.push(el.aPayer)
            benevolat.push(el.duree)
        })


        // OK
        const total_valorisee = sumEuros(valorisees)

        // OK
        const total_remboursement = sumPay(remboursement)

        const total_benevolat = sumHours(benevolat);
        console.log(total_benevolat);
        // console.log(total_remboursement);
        // const total_dons = sumEuros(dons);
        // console.log(total_dons);
    })
    .catch((error) => {
        console.log(error);
    })
}



// donArray.forEach(test => {
//     console.log(test);
// })
// let totalDons = sumEuros(dons);
// console.log(totalDons)
