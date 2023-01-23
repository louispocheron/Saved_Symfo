
export function sumEuros(data){
    if(data.length > 1){
        // on calcul le total des euros

        // SI DATA NULL ON CHOPE SON IDX DANS ARRAY ET ON LE REMPLACE AVEC 0 EN STRING
        data.forEach(el => {
            if(el == null){

                let index = data.indexOf(el);
                if(index !== -1){
                    data[index] = '0'
                }
            }
        })


        let euros = data.map(el => el.split('.')[0]);
        euros = euros.map(el => parseInt(el));
        let totalEuros = euros.reduce((a, b) => a + b);
    

        let cents = data.map(el => el.split('.')[1]);
        
        // On enleve les valeurs NaN
        cents = cents.filter(el => !isNaN(el));
        cents = cents.map(el => parseInt(el));
        let totalCents
        if(cents.length > 1){
            totalCents = cents.reduce((a, b) => a + b);
        }else{
            totalCents = 0
        }

        // on ajoute les centimes au total des euros
    while(totalCents > 99){
            totalEuros ++;
            totalCents = totalCents - 100;
        }

        let totalSum = `${totalEuros}.${totalCents}`
        if(totalCents == 0){
            totalSum = `${totalEuros}`
        }

        return totalSum;
    }
    if(data.length == 1 && data[0] != null){
        return data[0];
    }
    else{
        return '0'
    }
}