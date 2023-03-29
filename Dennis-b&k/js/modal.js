function Modal() {
    this.modalParent = document.createElement("div");
    this.modal = document.createElement("div");
    this.modalClose = document.createElement("div");
    this.modalOpen = false;

    this.show = function (html) {
        this.modalOpen = true;
        this.modal.innerHTML += html;
        this.modalParent.style.display = "flex";
    }

    this.closeModal = function (e, element) {
        if (e.target == element) {
            this.modalOpen = false;
            this.modalParent.style.display = "none";
        }
    }

    this.create = function () {
        // append elements to one another
        document.body.append(this.modalParent);
        this.modalParent.append(this.modal);
        this.modalParent.classList.add("modal-parent");
        this.modal.append(this.modalClose);
        this.modal.classList.add("modal");
        this.modalClose.append("X");
        this.modalClose.classList.add("modal-close");
        

        // create event listners

        // when modal background is clicked than close modal
        this.modalParent.addEventListener("click", function (e) {
            this.closeModal(e, this.modalParent);
        }.bind(this));

        // when modal close button is clicked than close modal
        this.modalClose.addEventListener("click", function (e) {
            this.closeModal(e, this.modalClose);
        }.bind(this));
    }

    this.create();

}