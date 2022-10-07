// //FLATPICKR POUR LA SAISIE DATE
import 'flatpickr';
import 'flatpickr/dist/l10n/fr';

document.querySelector('.flatpickr').flatpickr({
    locale: 'fr',
    dateFormat: 'd/m/Y',
})



    const pourcentage = document.querySelector('.pourcentage-input');
    const heuredepart = document.querySelector('#form_heureDepart_hour');
    const minutesdepart = document.querySelector('#form_heureDepart_minute');
    const heurearrivee = document.querySelector('#form_heureArrivee_hour');
    const minutesarrivee = document.querySelector('#form_heureArrivee_minute');
    const dureeInput = document.querySelector('.dureeInput');
    let chargeData = document.querySelector('#chargeInputId').dataset.charges;
    const chargesInput = document.querySelector('.chargesInput');
    let groupeSelect = document.querySelector('.groupeSelect');
    const heureValoriseesInput = document.querySelector('.heureValoriseesInput');
    const payer = document.querySelector('.apayerInput');


    //set default value to heuredepart to 00

    dureeInput.value = 0;
    let heureDepartBase =  heuredepart.value = 0;
    let minutesDepartBase = minutesdepart.value = 0;
    let heureArriveeBase = heurearrivee.value = 0;
    let minutesArriveeBase = minutesarrivee.value = 0;


    [heuredepart, minutesdepart, heurearrivee, minutesarrivee, groupeSelect].forEach(evt => {
        evt.addEventListener('change', () => {

            heureDepartBase = heuredepart.value;
            minutesDepartBase = minutesdepart.value;
            heureArriveeBase = heurearrivee.value;
            minutesArriveeBase = minutesarrivee.value;
            
            heureArriveeBase = parseInt(heureArriveeBase);
            minutesArriveeBase = parseInt(minutesArriveeBase);

            heureDepartBase = parseInt(heureDepartBase);
            minutesDepartBase = parseInt(minutesDepartBase);

            let dureeHeure
            if(heureDepartBase > heureArriveeBase){
                dureeHeure = 24 - heureDepartBase + heureArriveeBase
            }
            else{
                 dureeHeure = heureArriveeBase - heureDepartBase;
            }


            let dureeMinute = minutesArriveeBase - minutesDepartBase;
            if(dureeMinute < 0){
                dureeHeure = dureeHeure - 1;
                dureeMinute = 60 + dureeMinute;
            }
            if(dureeMinute < 10){
                dureeMinute = '0' + dureeMinute;
            }
            
            dureeInput.value = dureeHeure + 'h' + dureeMinute;

            let dureeHeureValorisee = dureeHeure + '.' + dureeMinute;
            // parseFloat(dureeHeureValorisee); 

            heureValoriseesInput.value = (groupeSelect.value * chargeData * dureeHeureValorisee).toFixed(2);
    });
});
pourcentage.value = '10.04 €/h';
console.log(chargeData);

groupeSelect.addEventListener("change", () => {

    let selectData = groupeSelect.value;

    switch(selectData){
        case '10.04':
            pourcentage.value = '10.04 €/h';
            break;
        case '10.33':
            pourcentage.value = '10.33 €/h';
            break;
        case '11.22':
            pourcentage.value = '11.22 €/h';
            break;
        case '11.91':
            pourcentage.value = '11.91 €/h';
            break;
        case '13.33':
            pourcentage.value = '13.33 €/h';
            break;
        case '16.64':
            pourcentage.value = '16.64 €/h';
            break;

    }
});



    // BAREME SAISIE  KILOMETRAGE 
    const bareme = document.querySelector('.bareme');
    const kmInput = document.querySelector('.kmInput');
    const fraisInput = document.querySelector('.fraisInput');
    const donsInput = document.querySelector('.donsInput');
    const coutInput = document.querySelector('.coutInput');
    const totalNote = document.querySelector('.totalNote');

    

    bareme.value = 0.319;
    kmInput.value = 0;
    coutInput.value = 0;
    fraisInput.value = 0;
    donsInput.value = 0;
    totalNote.value = 0;
    payer.value = 0;

    let baremeValue = bareme.value;
    let kmValue = kmInput.value;
    let coutValue = coutInput.value;


    parseFloat(totalNote.value);


  
    [bareme, kmInput, coutInput, payer].forEach(evt => {
        evt.addEventListener('keyup', () => {
            coutValue = coutInput.value;
            baremeValue = bareme.value;
            kmValue = kmInput.value;

            fraisInput.value = (kmValue * baremeValue).toFixed(2);

            //avoid before the NaN output
            if(coutValue == ''){
                coutValue = 0;
            }

            if(isNaN(baremeValue)){
                baremeValue = 0;
            }
            // localStorage.setItem('donsInput', donsInput.value);
            totalNote.value = parseFloat(fraisInput.value) + parseFloat(coutValue);


            if(parseFloat(payer.value) > totalNote.value){
                payer.style = 'border: 1px solid red;';
                // donsInput.style = 'background-color: #f2dede;';
            }
            if(parseFloat(payer.value) < totalNote.value){
                payer.style = 'border: 1px solid green;';
            }




            donsInput.value = totalNote.value - parseFloat(payer.value);
            // console.log(typeof donsInput.value);
        // prevent the NaN output
        if(isNaN(donsInput.value)){
            donsInput.value = totalNote.value;
        }       
        // !!DONINPUT TYPEOF === STRING DONC ON PEUT PAS TO FIXED DONC ON BIDOUILLE EN DESSOUS 
        if(donsInput.value.indexOf('.') != -1){
            let donsInputValue = donsInput.value .split('.');
            if(donsInputValue[1].length > 2){se
                donsInput.value = parseFloat(donsInput.value).toFixed(2);
            }
        }

        });
    });



    const apayerInput = document.querySelector('.apayerInput');
    
    // apayerInput.value = 0;

    apayerInput.addEventListener('keyup keydown', () => {
        let apayerValue = apayerInput.value;
        let donsValue = donsInput.value;
        let totalNoteValue = totalNote.value;

        

        // console.log(typeof apayerValue);

        if(apayerValue == ''){
            apayerValue = 0;
            // localStorage.setItem('donsInput', donsValue);
        }
        console.log(apayerValue);
        if (parseFloat(apayerValue) > parseFloat(totalNoteValue)){
            console.log('trop cher');
            apayerInput.style.border = '1px solid red';
        }

        // reduce the value of donsInput
        if(parseFloat(apayerValue) < parseFloat(totalNoteValue)){
            console.log('ok');
            apayerInput.style.border = '1px solid green';
            donsValue = parseInt(donsValue) - parseInt(apayerValue);
            // localStorage.setItem('donsInput', donsInput.value);
        }
    });


console.log('salut saisie')

    // const form_association = document.querySelector('#form_association');
    // form_association.select2({
    //     placeholder: 'Association',
    //     maximumSelectionLength: 1,
    //     allowClear: true,   
    // });

    const modal = document.querySelector('.modal-saisie');
    const formSaisie = document.querySelector('.form-saisie');
    const btnAccecpt = document.querySelector(".btn-oui");


    const openModal = () => {
        modal.dataset.active = true; 
        formSaisie.style.opacity = "0.4"
    }

    const closeModal = () => {
        delete modal.dataset.active
        formSaisie.style.opacity = "1";
    }

    let executed = false
    bareme.addEventListener('keydown', () => {
        if(executed == false){
            openModal();
            executed = true;
        }
    })

    btnAccecpt.addEventListener("click", () => {
        closeModal();
    })



