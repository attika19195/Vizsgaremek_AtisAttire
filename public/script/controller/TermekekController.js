import AdatModell from "../model/TermekekModel.js";
import PublicTermekekView from "../view/PublicTermekekView.js";

class TermekekController{
    constructor(){
        const adatmodell = new AdatModell();
        adatmodell.adatBe('/api/modellek', this.megjelenitTermekek);
    }

    megjelenitTermekek(termekek){
        let szuloElem=$(".ruha_article");
        szuloElem.empty()
        termekek.forEach(termek => {
            new PublicTermekekView(termek, szuloElem);
        });
    }

}

export default TermekekController;
