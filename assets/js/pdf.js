const wrapper = document.querySelector('.wrapper');

const generatePdf = () => {
    html2pdf(wrapper)
    .open()
    .save('pdf_saved');
}

generatePdf();  