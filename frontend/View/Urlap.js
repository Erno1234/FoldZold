class Urlap {
  #adat = {};
  constructor(adat, szuloElem) {
    this.#adat = adat;
    this.szuloElem = szuloElem;
    this.szuloElem.innerHTML = `
          <form>
          <div class="mb-3 mt-3">
          <label for="osztaly">Diák/Cég</label>
          <select id="osztaly" name="osztaly">
            <option value="diak">Diák</option>
          </select>
        </div>
            <div class="mb-3">
            <label for="tevkenyseg">Diák/Cég</label>
            <select id="tevkenyseg" name="tevkenyseg">
              <option value="diak">Diák</option>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary w-100" id="submit">Küldés</button>
          </div>
        </form>
          `;
    this.formElem = this.szuloElem.querySelector("form");
    this.submitElem = this.formElem.querySelector("#submit");
    this.submitElem.addEventListener("click", this.onSubmit.bind(this));
  }

  onSubmit(event) {
    event.preventDefault();
    this.#adatGyujt();
    this.#esemenyTrigger("post");
  }

  #adatGyujt() {
    this.#adat.osztaly = document.getElementById("osztaly").value;
    this.#adat.tevekenyseg = document.getElementById("tevekenyseg").value;
  }

  #esemenyTrigger(esemenyNev) {
    const esemeny = new CustomEvent(esemenyNev, { detail: this.#adat });
    window.dispatchEvent(esemeny);
  }
}

export default Urlap;
