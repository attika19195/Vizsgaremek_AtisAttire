class PublicTermekekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
            <div class="col-lg-3 col-md-4">
                <a href="/termekek/${elem.modell_id}">
                    <div id='termekId${elem.modell_id}' class="card card-span h-100 text-white"><img class="img-fluid h-100" src="${elem.kep}" alt="..." />
                        <div class="card-img-overlay ps-0"> </div>
                            <div class="card-body ps-0 bg-200">
                                <h5 class="fw-bold text-1000 text-truncate">${elem.nev}</h5>
                            <div class="fw-bold">
                                <span class="text-primary">${elem.ar}  Ft</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        `);
        //this.modellMegjelenit = $(`#termekId${elem.modell_id}`);
        /*console.log(this.modellMegjelenit)
        this.modellMegjelenit.on("click", () => {
            this.kattintasTrigger('modellMegjelenit')
        });*/


    }

    kattintasTrigger(esemenyneve) {
        const esemeny = new CustomEvent(esemenyneve, {detail: this.#elem.modell_id});
        window.dispatchEvent(esemeny);
    }

}

export default PublicTermekekView;
