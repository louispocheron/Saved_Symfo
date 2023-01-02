const wrapper = document.querySelector('.wrapper');

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
 const generatePdf = async () => {
    await html2pdf()
    .from(wrapper)
    .set(options)
    .save()
    .then(() => {
        window.location.href = '/recapitulatif';

    })  
}

generatePdf();
