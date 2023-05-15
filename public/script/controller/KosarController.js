import AdatModell from "../model/KosarModel.js";
import PublicKosarView from "../view/PublicKosarview.js";


class KosarController {
    constructor() {
        const adatmodell = new AdatModell();
        this.termekek = `/api/kosar`;

        adatmodell.adatBe(this.termekek, this.megjelenitKosar);

        

    }

    megjelenitKosar(kosarbaTettTermekek) {
        let szuloElem = $(".kosar_article");
        szuloElem.empty()
        kosarbaTettTermekek.forEach(termek => {
            new PublicKosarView(termek, szuloElem);
        });
    }

}

export default KosarController;
