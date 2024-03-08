import DataService from "../Model/DataService.js";
import TablaView from "../View/TablaView.js";
import Urlap from "../View/Urlap.js";

class PublicController {
  constructor() {
    this.dataService = new DataService();
    
    this.dataService.getData("api/bejegyzes", this.megjelenit);
  }

  megjelenit(lista) {
    console.log(lista);
    
    new TablaView($(".tablazat"),lista)
  }

}
export default PublicController;