export function sumPay(data){
    if(data.length > 1){
        // on calcul le total des euros
        let euros = data.map(el => el.split('.')[0]);
        euros = euros.map(el => parseInt(el));
        // console.log(euros)
        let totalEuros = 0;
        if(euros != undefined){
            totalEuros = euros.reduce((a, b) => a + b);
        }
    
        // puis le total des centimes

        // check if there is a cent
        // check if theres a cent
        let cents = data.map(el => el.split('.')[1]);
        let totalCents = null;
        if(cents.includes(undefined)){
            totalCents = 0;
        } else {
        // On enleve les valeurs NaN
        cents = cents.filter(el => !isNaN(el));

        cents = cents.map(el => parseInt(el));
        totalCents = cents.reduce((a, b) => a + b);
        // console.log(totalCents); 
        // on ajoute les centimes au total des euros
        while(totalCents > 99){
                totalEuros ++;
                totalCents = totalCents - 10;
            }
    }
        let totalSum = `${totalEuros}.${totalCents}`
        // if(totalCents == 0){
        //     totalSum = `${totalEuros}`
        // }

        return totalSum;
    }
    else{
        return data[0];
    }
}