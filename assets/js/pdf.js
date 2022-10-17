const wrapper = document.querySelector('.wrapper');

var options = {
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

const generatePdf = () => {
    html2pdf()
    .from(wrapper)
    .set(options)
    .save();  
}

generatePdf();