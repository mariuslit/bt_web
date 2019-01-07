class Krepsininkas {
    constructor(vardas, pavarde, numeris) {
        this.vardas = vardas;
        this.pavarde = pavarde;
        this.numeris = numeris;
        this.sezonai;
        this.taskai;

        console.log(`krepsininkas sukurtas`);
    }

    spausdintiDuomenis() {
        console.log(`krepšininko vardas ${this.vardas}`);
        console.log(`krepšininko numeris ${this.numeris}`);
        console.log(`krepšininko sezonų skaičius ${this.sezonai}`);
        console.log(`krepšininko taškų skaičius ${this.taskai}`);
        console.log(`krepšininko taškų vidurkis ${this.taskuVidurkis()}`);

        console.log(`--------`);
    }

    pridetiStatistika(sezonai, taskai) {
        this.sezonai = sezonai;
        this.taskai = taskai;
    }

    get taskuVidurkis() {
        return this.taskai / this.sezonai;
    }

    get pilnasVardas() {
        return this.vardas + ' ' + this.pavarde;
    }

    set pilnasVardas(pv){
        let nameValues = pv.split(' ');
        this.vardas=nameValues[0];
        this.pavarde=nameValues[1];
    }

    pridetiKomandosDrauga(krepsininkas) {
        console.log(`Bandome pridėti komandos draugą, kurio vardas yra ${krepsininkas.pilnasVardas}`);
    }

}

let krepsininkas1 = new Krepsininkas(`Arvydas`, `Sabonis`, 11);
let krepsininkas2 = new Krepsininkas(`Rimas`, `Kurtinaitis`, 10);

krepsininkas1.pilnasVardas = 'Domantas Sabonis';

krepsininkas1.pridetiStatistika(11, 3456);
krepsininkas2.pridetiStatistika(15, 9456);

krepsininkas1.spausdintiDuomenis();
krepsininkas2.spausdintiDuomenis();

krepsininkas1.pridetiKomandosDrauga(krepsininkas2);













