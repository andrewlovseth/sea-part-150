const Content = {
    documents() {
        var elem = document.querySelector('.documents-list');
        var iso = new Isotope(elem, {
            // options
            itemSelector: '.document',
            layoutMode: 'vertical',
        });

        const filterLinks = document.querySelectorAll('.js-documents-filter-link');

        filterLinks.forEach((filterLink) => {
            filterLink.addEventListener('click', (e) => {
                e.preventDefault();

                var filterValue = filterLink.dataset.cat;

                iso.arrange({ filter: filterValue });

                console.log(filterValue);
            });
        });
    },

    init: function () {
        this.documents();
    },
};
export default Content;
