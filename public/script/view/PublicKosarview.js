class PublicKosarView {
    #elem;
    constructor(elem, szuloElem) {
        szuloElem.append(`
            <div class="col-lg-3 col-md-4">
                <div id='termekId${elem.termek.termek_id}' class="card card-span h-100 text-white"><img class="img-fluid h-100" src="${elem.termek.modell_obj.kep}" alt="..."/>
                    <div class="card-img-overlay ps-0"></div>
                        <div class="card-body ps-0 bg-200">
                            <h5 class="fw-bold text-1000 text-truncate">${elem.termek.modell_obj.nev}</h5>
                            <h5 class="fw-bold text-1000 text-truncate">Méret: ${elem.termek.meret}</h5>
                        </div>
                        <div class="fw-bold bb">
                            <h5 class="fw-bold text-1000 text-truncate">Mennyiség: ${elem.mennyiseg}</h5>
                            <h5 class="fw-bold text-1000 text-truncate">Összesen: ${elem.termek.modell_obj.ar*elem.mennyiseg} Ft</h5>
                            <button id="torlesGombb" class="btn btn-primary btn-sm">Törlés</button>
                        </div>
                    </div>
                </div>

            </div>

        `);
        this.kategoriaMegjelenit=$(`#torlesGombb`);
        console.log(this.kategoriaMegjelenit)
        this.kategoriaMegjelenit.on("click", ()=>
        {
            console.log("asd")
        });

    }
    kattintasTrigger(esemenyneve) {
        console.log("triggerben", esemenyneve);
        const esemeny = new CustomEvent(esemenyneve, {detail: this.#elem.termek.termek_id});
        window.dispatchEvent(esemeny);
    }


}

export default PublicKosarView;
