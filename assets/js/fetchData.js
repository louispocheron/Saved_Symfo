import { sumHours } from "./sumHours";
import { sumEuros } from "./sumEuros";
import { sumPay } from "./sumPay";


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
    })
}