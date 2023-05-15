class KosarModel {
    #kosarTomb = [];

    constructor() {

    }

    adatBe(vegpont, myCallBack) {
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json())
            .then((data) => {
                this.#kosarTomb = data;
                myCallBack(this.#kosarTomb);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    adatFel(vegpont, data) {
        fetch(vegpont, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }





}

export default KosarModel;
